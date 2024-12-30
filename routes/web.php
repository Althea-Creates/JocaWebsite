<?php

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Auth\PasswordResetController;

Auth::routes(['verify' => true]);

//user pages
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//admin login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', function () {
    Auth::logout(); 
    return redirect('/login');
})->name('logout');

//Email verification after user creation
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
    $user = User::findOrFail($id);

    // If the email is already verified, redirect to password reset page
    if ($user->hasVerifiedEmail()) {
        return redirect()->route('password.reset', [
            'token' => Password::createToken($user),
            'email' => $user->email,
        ])->with('message', 'Your email is already verified. Please reset your password.');
    }

    // Verify the user's email
    if ($user->markEmailAsVerified()) {
        event(new Verified($user));
        if ($user->is_active == 0) {
            $user->is_active = 1;
            $user->save();
        }
        \Log::info('User verified their email: ' . $user->email);
    }

    // Redirect to password reset page after email verification
    return redirect()->route('password.reset', [
        'token' => Password::createToken($user),
        'email' => $user->email,
    ])->with('message', 'Thank you for verifying your email. Please reset your password.');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resend verification email route
Route::post('email/verification-notification', [EmailVerificationController::class, 'resend'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

//Password reset setting
Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordResetController::class, 'reset'])->name('password.update');

// Admin authentication check
Route::middleware(['auth', 'verified'])->group(function () {

    // Admin dashboard route
    Route::get('/dashboard', function () {
        if (Auth::user()->role_id == 1) {
            return view('admin.dashboard');
        }
        return redirect('/')->with('error', 'Access denied. Admins only.');
    })->name('dashboard');

    // Admin-related routes
    Route::prefix('admin')->group(function () {
        
        // Profile routes for admin
        Route::get('/profile', [ProfileController::class, 'show'])->name('admin.profile.show');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit');

        // Settings route for admin
        Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings.index');

        // User management routes for admin
        Route::resource('users', UserController::class)->names([
            'index' => 'admin.users.index',
            'create' => 'admin.users.create',
            'store' => 'admin.users.store',
            'show' => 'admin.users.show',
            'edit' => 'admin.users.edit',
            'update' => 'admin.users.update',
            'destroy' => 'admin.users.destroy',
        ]);
        Route::patch('/admin/users/{user}/update-status', [UserController::class, 'updateStatus'])->name('admin.users.updateStatus');
    });
});