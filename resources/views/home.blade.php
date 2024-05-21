<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> TNB - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employee.index') }}"><i class="bi bi-person-fill"></i> Funcionários </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('departament.index') }}"><i class="bi bi-building-fill"></i> Departamentos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('task.index') }}"><i class="bi bi-list-task"></i> Tarefas </a>
                </li>
                
            </ul>
        </div>
    </nav>
    <br />
    <div class="container d-flex align-items-center justify-content-center">
    @yield('employee.index')
    @yield('employee.show')
    
    @yield('departament.index')

    @yield('task.index')
    @yield('task.show')
    </div>
</body>

</html>
