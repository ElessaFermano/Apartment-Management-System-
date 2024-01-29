<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

        if ($request->hasFile('unit_1')) {
            // Delete the previous avatar if it exists
            if ($unit->unit_1) {
                Storage::disk('public')->delete($unit->unit_1);
            }
    
            $avatar = $request->file('unit_1');
            // dd($avatar);
            $avatarPath = $avatar->store('units', 'public'); // Store the file in the 'avatars' directory within the 'public' disk
            $input['unit_1'] = $avatarPath;
    
        } else {
            // No file provided, set avatar to null
            $input['unit_1'] = null;
        }
        // dd($data);
        // dd($Admin);
       
        $unit->save($input);
        return redirect('unit')->with('flash_message', 'unit Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Unit::destroy($id);
        return redirect('unit')->with('flash_message', 'unit deleted!'); 
    }
}
