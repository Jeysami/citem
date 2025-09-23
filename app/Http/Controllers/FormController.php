<?php

// app/Http/Controllers/FormController.php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ParticipationType;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function step1()
    {   
        $data = session('form_data', []);
        $participants = ParticipationType::all();
        return view('form.step1', compact('data'));
    }

    public function postStep1(Request $request)
    {
        // Validate Step 1 inputs
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'emailaddress' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255|confirmed',
            't_participation' => 'required'
        ], [
            'password.confirmed' => 'The confirm password does not match.',
        ]);

        // Merge into session
        session()->put('form_data', array_merge(session('form_data', []), $validated));

        // Redirect to Step 2
        return redirect()->route('form.step2');
    }

    public function step2()
    {
        $data = session('form_data', []);

        // Check if Step 1 is completed (i.e., session has data)
        if (empty($data)) {
            return redirect()->route('form.step1')->with('error', 'Please complete Step 1 first.');
        }

        return view('form.step2', compact('data'));
    }

    public function postStep2(Request $request)
    {
        // Validate Step 2 inputs
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'addressline' => 'required|string|max:255',
            'towncity' => 'required|string|max:255',
            'regionstate' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'yearest' => 'required|integer',
            'website' => 'required|string|max:255',
            'brochure' => 'required'
        ]);

        session()->put('form_data', array_merge(session('form_data', []), $validated));

        // Redirect to Step 3
        return redirect()->route('form.review');
    }

    public function review()
    {
        $data = session('form_data', []);
        return view('form.review', compact('data'));
    }

    public function submitFinal(Request $request)
    {
        $data = session('form_data');

        // Save to database (example)
        \App\Models\User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'emailaddress' => $data['emailaddress'],
            'username' => $data['username'],
            'password' => md5($data['password']),
            't_participation' => $data['t_participation'],
            'company' => $data['company'],
            'addressline' => $data['addressline'],
            'towncity' => $data['towncity'],
            'regionstate' => $data['regionstate'],
            'country' => $data['country'],
            'yearest' => $data['yearest'],
            'website' => $data['website'],
            'brochure' => $data['brochure'],
        ]);

        // Clear session
        session()->forget('form_data');

        return redirect('/')->with('success', 'User created.');
    }
}

?>