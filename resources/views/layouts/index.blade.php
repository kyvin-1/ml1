@extends('layouts.app')

@section('content')

<h3>Appointments</h3>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $a)
        <tr>
            <td>{{ $a->patient_name }}</td>
            <td>{{ $a->doctor_name }}</td>
            <td>{{ $a->appointment_date }}</td>
            <td>{{ $a->appointment_time }}</td>
            <td>{{ $a->status }}</td>
            <td>
                <a href="{{ route('appointments.edit', $a->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('appointments.destroy', $a->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection