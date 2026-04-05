<!-- @extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Add Appointment</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="patient_name" class="form-label">Patient Name</label>
                    <input type="text" name="patient_name" id="patient_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="doctor_name" class="form-label">Doctor Name</label>
                    <input type="text" name="doctor_name" id="doctor_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="appointment_date" class="form-label">Appointment Date</label>
                    <input type="date" name="appointment_date" id="appointment_date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="appointment_time" class="form-label">Appointment Time</label>
                    <input type="time" name="appointment_time" id="appointment_time" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Save Appointment</button>
            </form>
        </div>
    </div>
@endsection -->
