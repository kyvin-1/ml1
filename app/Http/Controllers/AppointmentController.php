<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
       // READ
    public function index()
    {
        set_time_limit(300); // Extend execution time to 5 minutes
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    // CREATE FORM
    public function create()
    {
        return view('appointments.create');
    }

    // STORE
    public function store(Request $request)
    {
        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'Appointment Added!');
    }

    // EDIT FORM
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.edit', compact('appointment'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'Updated Successfully!');
    }

    // DELETE
    public function destroy($id)
    {
        Appointment::destroy($id);
        return redirect()->route('appointments.index')->with('success', 'Deleted Successfully!');
    }
}
