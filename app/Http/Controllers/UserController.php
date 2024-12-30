<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Access\AuthorizationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = UserRole::all();
        return view('admin.users.create', compact('roles')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:8',
            'email' => 'required|email|unique:users,email',
            'is_active' => 'required',
            'role' => 'required|exists:user_roles,role', 
        ]);
        $role = UserRole::where('role', $request->role)->first();
        $defaultPassword = Hash::make('p@ssw0rd');
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $defaultPassword,
            'role_id' => $role->id,
            'is_active' => $validated['is_active'],
        ]);
        
        $user->sendEmailVerificationNotification(); //send email verification

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|exists:roles,name', 
        ]);

        // Update user details
        $user->update($request->only('name', 'email'));

        $user->syncRoles($request->role);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function updateStatus(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found.'], 404);
        }
    
        $user->is_active = $request->is_active;
        $user->save();
    
        return response()->json(['success' => true, 'message' => 'User status updated.']);
    }    

    public function deactivate($id)
    {
        $user = User::findOrFail($id);

        // Deactivate the user if they are currently active
        if ($user->is_active) {
            $user->is_active = 0;
            $user->save();
            return redirect()->route('admin.users.index')->with('success', 'User has been deactivated.');
        }

        return redirect()->route('admin.users.index')->with('error', 'User is already inactive.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}