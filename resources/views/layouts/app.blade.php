<!DOCTYPE html>
<html>
<head>
    <title>Clinic Appointment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Clinic Appointment System</a>

        <div>
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('appointments.create') ? 'active fw-bold' : '' }}" href="{{ route('appointments.create') }}">Add Record</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('appointments.index') ? 'active fw-bold' : '' }}" href="{{ route('appointments.index') }}">View Records</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>