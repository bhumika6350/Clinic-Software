<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patients.index');
    }

    // Add Patient Form
    public function create()
    {
        return view('patients.create');
    }

    // Store Patient


    // View Patient
    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('patients.show', compact('patient'));
    }

    // Edit Patient Form
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);

        return view('patients.edit', compact('patient'));
    }

    // Update Patient

}
