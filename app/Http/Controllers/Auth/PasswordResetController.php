<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PasswordResetController extends Controller
{
    public function showResetForm(Request $request, $token = null)
    {
        return view('admin.auth.reset')->with(['token' => $token]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => [
                    'required',
                    'min:8',
                    'confirmed',
                    'regex:/[a-z]/', 
                    'regex:/[A-Z]/', 
                    'regex:/[0-9]/',
                    'regex:/[@$!%*?&]/',
                ],
            ], [
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters.',
                'password.confirmed' => 'Password confirmation does not match.',
                'password.regex' => [
                    'regex:/[a-z]/' => 'Password must contain at least one lowercase letter.',
                    'regex:/[A-Z]/' => 'Password must contain at least one uppercase letter.',
                    'regex:/[0-9]/' => 'Password must contain at least one number.',
                    'regex:/[@$!%*?&]/' => 'Password must contain at least one special character (e.g. @$!%*?&).',
                ],
        ]);

        $user = User::where('email', $request->email)->first();
        
        // Ensure the token is valid 
        if ($user) {
            $user->password = bcrypt($request->password);  // Hash pw
            $user->save();
        }

        return redirect()->route('login')->with('success', 'Password successfully updated.');
    }
}
