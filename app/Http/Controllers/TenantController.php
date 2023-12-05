<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TenantController extends Controller
{
    
    public function index(): View
    {
        $tenant = Tenant::all();
        return view ('tenant.index')->with('tenant', $tenant);
    }
 
    public function create(): View
    {
        return view('tenant.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $tenant = $request->all();
        Tenant::create($tenant);
        return redirect('tenant')->with('flash_message', 'Tenant Addedd!');
    }
    public function show(string $id): View
    {
        $tenant = Tenant::find($id);
        return view('tenant.show')->with('tenant', $tenant);
    }
    public function edit(string $id): View
    {
        $tenant = Tenant::find($id);
        return view('tenant.edit')->with('tenant', $tenant);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $tenant = Tenant::find($id);
        $input = $request->all();
        $tenant->update($input);
        return redirect('tenant')->with('flash_message', 'Tenant Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Tenant::destroy($id);
        return redirect('tenant')->with('flash_message', 'Tenant deleted!'); 
    }

}
