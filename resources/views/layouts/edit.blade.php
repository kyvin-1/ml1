@extends('layouts.app')

@section('content')

<h3>Edit Appointment</h3>

<form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Patient Name</label>
        <input type="text" name="patient_name" value="{{ $appointment->patient_name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Doctor Name</label>
        <input type="text" name="doctor_name" value="{{ $appointment->doctor_name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="appointment_date" value="{{ $appointment->appointment_date }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Time</labe l>
        <input type="time" name="appointment_time" value="{{ $appointment->appointment_time }}" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
</form>

@endsection