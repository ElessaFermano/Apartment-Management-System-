<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function index(): View
    {
        $payment = Payment::all();
        return view ('payment.index')->with('payment', $payment);
    }
 
    public function create(): View
    {
        return view('payment.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $payment = $request->all();
        Payment::create($payment);
        return redirect('payment')->with('flash_message', 'Payment Addedd!');
    }
    public function show(string $id): View
    {
        $payment = Payment::find($id);
        return view('payment.show')->with('payment', $payment);
    }
    public function edit(string $id): View
    {
        $payment = Payment::find($id);
        return view('payment.edit')->with('payment', $payment);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $payment = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('payment')->with('flash_message', 'Payment Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Payment::destroy($id);
        return redirect('payment')->with('flash_message', 'Payment deleted!'); 
    }
}
