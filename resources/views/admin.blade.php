<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <style>
        
body {
    font-family: 'Montserrat', sans-serif;
}

header form .btn {
    background-color: #8c68cd;
}

header form .btn:hover {
    background-color: #a88ae0;
    color: #ffffff;
}

.sidebar .nav-link {
    color: #212529;
}

.sidebar .nav-link:hover,
.sidebar .nav-link:focus {
    background-color: #f0f0f0;
    font-weight: 600;
}

.card1 {
    background-color: #b4eaf6;
}

.card2 {
    background-color: #efcfff;
}

.card3 {
    background-color: #ffe69c;
}

.card i {
    font-size: 1.5rem;
}

.progress1 {
    background-color: #79dfc1;
}

.progress2 {
    background-color: #ffe69c;
}

.progress3 {
    background-color: #b4eaf6;
}

.progress4 {
    background-color: #efcfff;
}

        
    </style>
  </head>
  <body>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 p-3 fs-6 text-white fw-bold" href="#">Admin Panel</a>

        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary shadow">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title fw-semibold" id="sidebarMenuLabel">Bootstrap 5 Dashboard</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center fw-semibold gap-2" aria-current="page" href="#">
                                    <i class="bi bi-house-fill"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi bi-file-earmark"></i>
                                    Users
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi bi-graph-up"></i>
                                    Reports
                                </a>
                            </li>
                        </ul>

                        <hr class="my-3">

                        <ul class="nav flex-column mb-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi bi-gear-wide-connected"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="#">
                                    <i class="bi bi-door-closed"></i>
                                    Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>

                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card1 mb-3 shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Users</h5>
                                    <i class="bi bi-file-earmark"></i>
                                </div>
                                <p class="card-text">
                                    <span class="fw-bold fs-1">{{$users}}</span>
                                     last month
                                </p>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-lg-4">
                        <div class="card card2 mb-3 shadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title">Uploads</h5>
                                    <i class="bi bi-cart"></i>
                                </div>
                                <p class="card-text">
                                    <span class="fw-bold fs-1">{{$posts}}</span>
                                     last week
                                </p>
                            </div>
                        </div>
                    </div>


                <div class="row">
                    <div class="col-lg-8 d-flex flex-column justify-content-between">
                        <div class="progress my-3 my-lg-0 shadow" role="progressbar" aria-label="Success" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress1 text-dark" style="width: 35%">35%</div>
                        </div>
                        <div class="progress my-3 my-lg-0 shadow" role="progressbar" aria-label="Success" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress2 text-dark" style="width: 80%">80%</div>
                        </div>
                        <div class="progress my-3 my-lg-0 shadow" role="progressbar" aria-label="Success" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress3 text-dark" style="width: 63%">63%</div>
                        </div>
                        <div class="progress my-3 my-lg-0 shadow" role="progressbar" aria-label="Success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress4 text-dark" style="width: 100%">100%</div>
                        </div>
                    </div>

                

                <canvas class="my-3 p-2 p-md-3 p-lg-5 w-100 shadow" id="chart1" width="900" height="380"></canvas>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <canvas class="my-3 p-2 p-md-3 p-lg-5 w-100 shadow" id="chart2" width="900" height="380"></canvas>
                    </div>
                    <div class="col-12 col-lg-6">
                        <canvas class="my-3 p-2 p-md-3 p-lg-5 w-100 shadow" id="chart3" width="900" height="380"></canvas>
                    </div>
                </div>

                <canvas class="my-3 p-2 p-md-3 p-lg-5 w-100 shadow" id="chart4" width="900" height="380"></canvas>

                <footer class="mt-5 pt-3 border-top">
                    <p class="text-center">Copyright @ Twelve.com - All Rights Reserved</p>
                </footer>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <script src="{{asset('js/chart1.js')}}"></script>
    <script src="{{asset('js/chart2.js')}}"></script>
    <script src="{{asset('js/chart3.js')}}"></script>
    <script src="{{asset('js/chart4.js')}}"></script>
  </body>
</html>