<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function edit_account(Request $request)
    {
        $user = Auth::user();
        return view('admin.account', compact('user'));
    }

    public function update_account(Request $request)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|unique:users,username,' . $user->id,
            'current_password' => 'nullable|min:8',
            'password' => 'nullable|min:8',
            'role' => 'required|in:1,2',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300',
        ]);

        // dd($validatedData);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/avatars/'), $filename);
            $validatedData['image'] = 'assets/img/avatars/' . $filename;
            $user->image = $validatedData['image'];
        }

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->role = $validatedData['role'];
        if (!empty($validatedData['password']) && !empty($validatedData['current_password'])) {
            if (!Hash::check($validatedData['current_password'], $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'The provided password does not match our records.']);
            }
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();
        return redirect()->back()->with('success', 'User account updated successfully!');
    }
}
