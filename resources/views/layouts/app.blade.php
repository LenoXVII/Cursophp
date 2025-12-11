<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1, table, th, td, text, label {
            color: #16C809; 
            border: 1px solid #16C809;
            border-collapse: collapse;
            text-align: center;
            align-content: center;
        }
    </style>
    <title>Proyecto</title>
</head>
<body style="background-color: rgb(0, 0, 0); font-family: monospace;">
    <a href="{{ route('students.index') }}">Listar alumnos</a> | 
    <a href="{{ route('student.create') }}">Registrar alumno</a>
    @yield('content')
</body>
</html>