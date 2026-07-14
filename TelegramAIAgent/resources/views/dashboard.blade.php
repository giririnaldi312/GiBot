<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Telegram AI Agent</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        body{
            background:#0f172a;
            color:white;
            font-family:Segoe UI;
        }

        .sidebar{

            width:260px;
            height:100vh;
            position:fixed;
            left:0;
            top:0;
            background:#111827;
            padding:25px;
        }

        .sidebar h3{

            color:white;
            font-weight:bold;
        }

        .sidebar a{

            display:block;
            color:#d1d5db;
            text-decoration:none;
            padding:14px;
            margin-top:10px;
            border-radius:10px;
            transition:.3s;
        }

        .sidebar a:hover{

            background:#2563eb;
            color:white;
        }

        .content{

            margin-left:280px;
            padding:30px;
        }

        .navbar-custom{

            background:#1e293b;
            border-radius:15px;
            padding:20px;
        }

        .card-dashboard{

            border:none;
            border-radius:18px;
            color:white;
        }

        .table-dark{

            border-radius:15px;
            overflow:hidden;
        }

        .btn-logout{

            background:#ef4444;
            color:white;
            border:none;
        }

        .btn-logout:hover{

            background:#dc2626;
        }

    </style>

</head>

<body>

<div class="sidebar">

    <h3>
        🤖 Telegram AI Agent
    </h3>

    <hr>

    <a href="#">
        <i class="bi bi-speedometer2"></i>
        Dashboard
    </a>

    <a href="#">
        <i class="bi bi-mortarboard-fill"></i>
        Data Mahasiswa
    </a>

    <a href="#">
        <i class="bi bi-telegram"></i>
        Telegram Bot
    </a>

    <a href="#">
        <i class="bi bi-clock-history"></i>
        Riwayat
    </a>

    <a href="#">
        <i class="bi bi-gear-fill"></i>
        Pengaturan
    </a>

</div>


<div class="content">

<div class="navbar-custom d-flex justify-content-between align-items-center mb-4">

    <div>

        <h3>
            Dashboard
        </h3>

        <small class="text-secondary">
            Telegram AI Agent
        </small>

    </div>

    <div>

        <span class="me-3">

            👤 {{ Auth::user()->name }}

        </span>

        <form action="{{ route('logout') }}" method="POST" class="d-inline">

            @csrf

            <button class="btn btn-logout">

                <i class="bi bi-box-arrow-right"></i>

                Logout

            </button>

        </form>

    </div>

</div>

<div class="row">

<div class="col-md-3">

<div class="card bg-primary card-dashboard p-4">

<h5>Total Mahasiswa</h5>

<h1>

{{ $mahasiswa->count() }}

</h1>

</div>

</div>

<div class="col-md-3">

<div class="card bg-success card-dashboard p-4">

<h5>Status Bot</h5>

<h2>

Online

</h2>

</div>

</div>

<div class="col-md-3">

<div class="card bg-warning text-dark card-dashboard p-4">

<h5>Total Command</h5>

<h2>

{{ $mahasiswa->count() }}

</h2>

</div>

</div>

<div class="col-md-3">

<div class="card bg-danger card-dashboard p-4">

<h5>User Login</h5>

<h2>

1

</h2>

</div>

</div>

</div>

<div class="card bg-dark mt-4 p-4 rounded-4">

<h4 class="mb-4">

📚 Data Mahasiswa

</h4>

<table class="table table-dark table-hover">

<thead>

<tr>

<th>No</th>

<th>Command</th>

<th>NIM</th>

<th>Nama</th>

</tr>

</thead>

<tbody>

@foreach($mahasiswa as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->command }}</td>

<td>{{ $item->nim }}</td>

<td>{{ $item->nama }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</body>

</html>