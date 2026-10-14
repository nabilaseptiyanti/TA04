<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        header {
            background-color: #f4f4f4;
            text-align: center;
            padding: 15px;
            margin: 10px;
        }

        header h1 {
            margin: 0 0 10px 0;
        }

        nav a {
            color: #663399;
            text-decoration: none;
            font-size: 14px;
        }

        main {
            padding: 0 10px;
        }

        .student-card {
            border: 1px solid #eeeeee;
            padding: 20px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .student-card h3 {
            margin-top: 0;
        }

        .course {
            display: inline-block;
            background-color: #f0f0ff;
            padding: 5px 8px;
            margin-right: 5px;
            border-radius: 3px;
            font-size: 12px;
        }

        .alert-success {
            border: 1px solid #70ad47;
            padding: 8px;
            margin-bottom: 5px;
            font-size: 13px;
        }

        footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 15px;
            margin: 5px 10px 10px 10px;
            font-size: 13px;
        }
    </style>
</head>

<body>

<header>
    <h1>Praktikum Laravel</h1>

    <nav>
        <a href="{{ route('students.index') }}">Mahasiswa</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    © 2025 Praktikum Laravel - Nabila Septiyanti Supriono
</footer>

</body>
</html>