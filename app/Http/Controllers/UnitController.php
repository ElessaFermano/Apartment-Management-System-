<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UnitController extends Controller
{
    
    public function index(): View
    {
        $unit = Unit::all();
        return view ('unit.index')->with('unit', $unit);
    }
 
    public function create(): View
    {
        return view('unit.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $unit = $request->all();
        Unit::create($unit);
        return redirect('unit')->with('flash_message', 'Unit Addedd!');
    }
    public function show(string $id): View
    {
        $unit = Unit::find($id);
        return view('unit.show')->with('unit', $unit);
    }
    public function edit(string $id): View
    {
        $unit = Unit::find($id);
        return view('unit.edit')->with('unit', $unit);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $unit = Unit::find($id);
        $input = $request->all();
        $unit->update($input);
        return redirect('unit')->with('flash_message', 'unit Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Unit::destroy($id);
        return redirect('unit')->with('flash_message', 'unit deleted!'); 
    }
}
