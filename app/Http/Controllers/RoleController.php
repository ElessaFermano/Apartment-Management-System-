<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        $role = $request->all();
        User::create($role);
        return redirect('role')->with('flash_message', 'role Addedd!');
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
        $role = User::find($id);
        $input = $request->all();
        $role->update($input);
        return redirect('role')->with('flash_message', 'role Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        User::destroy($id);
        return redirect('role')->with('flash_message', 'role deleted!'); 
    }
}
