<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { display: flex; height: 100vh; margin: 0; }
    .sidebar {
        width: 220px; background-color: #1e1e2f; color: white; padding: 1rem;
    }
    .sidebar a {
        display: block; color: #ccc; text-decoration: none; margin: 10px 0;
    }
    .sidebar a.active, .sidebar a:hover {
        color: white; font-weight: bold;
    }
    .content { flex: 1; padding: 2rem; background-color: #121212; color: white; }
  </style>
</head>
<body>
  <div class="sidebar">
      <h5>Teadan's Workspace</h5>
      <a href="{{ route('dashboard.home') }}" class="{{ request()->routeIs('dashboard.home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('dashboard.projects') }}" class="{{ request()->routeIs('dashboard.projects') ? 'active' : '' }}">Projects</a>
      <a href="{{ route('dashboard.notes') }}" class="{{ request()->routeIs('dashboard.notes') ? 'active' : '' }}">Notes</a>
  </div>

  <div class="content">
      @yield('content')
  </div>
</body>
</html>
