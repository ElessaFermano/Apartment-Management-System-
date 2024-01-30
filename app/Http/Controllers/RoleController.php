<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function index(): View
    {
        $role = User::all();
        return view ('role.index')->with('role', $role);
    }
 
    public function create(): View
    {
        return view('role.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            
        ]);

        $input = $request->all();
        User::create($input);

        return redirect('role')->with('flash_message', 'Role successfully added!');
    }
    public function show(string $id): View
    {
        $role = User::find($id);
        return view('role.show')->with('role', $role);
    }
    public function edit(string $id): View
    {
        $role = User::find($id);
        return view('role.edit')->with('role', $role);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
    
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
        ]);
        
        $role = User::find($id);
        
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
        
            
            $avatar->storeAs('avatars', $avatarName, 'public');
        

            if ($role->avatar) {
                Storage::disk('public')->delete($role->avatar);
            }
        
            $role->avatar = 'avatars/' . $avatarName;
        }
        
        $role->name = $request->input('name');
        $role->email = $request->input('email');
        $role->save();
        
 
        return redirect('role')->with('flash_message', 'Role Updated successfully!');
        
    
      
        return redirect('role')->with('flash_message', 'Role Updated!');
    }

    
    public function destroy(string $id): RedirectResponse
    {
        User::destroy($id);
        return redirect('role')->with('flash_message', 'Role deleted!'); 
    }
}
