<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - AMS</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="dashboard/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <br>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <center>
            <a class="navbar-brand ps-3" href="index.html">Apartment Management System</a>
            </center>
         
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                          </div>
            </form>
         
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="text-white">
                        {{ Auth::User()->name}}                         
                    </span>
                    
                    <img class="img-profile rounded-circle" 
                    style="width: 30px; height: 30px; object-fit: cover;"
                    src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('dashboard/assets/img/undraw_profile.svg') }}" 
                    alt="Profile Image">
               
                </a>       
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                             <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile</a>  </li>
                        
       
                        <li><hr class="dropdown-divider" /></li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                            <i class="fas fa-sign-out"></i> Logout
                                        </a>
                                    </li>   
                                          
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                          
                            <div class="sb-sidenav-menu-heading"><b><p>{{Auth::user()->role}} </p><sup></sup></b></div>
                            @if(auth()->user()->role == "admin")
                            <a class="nav-link" href="http://127.0.0.1:8000/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard 
                            </a>
                            <div class="sb-sidenav-menu-heading">Customers Information</div>
                            
                            <a class="nav-link" href="http://127.0.0.1:8000/tenant">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Tenants
                            </a>
                            <a class="nav-link" href="http://127.0.0.1:8000/payment">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Payment History
                            </a>
                            @endif                

                            <a class="nav-link" href="http://127.0.0.1:8000/unit">
                                <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
                                Units
                            </a>
                           
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @if(auth()->user()->role == "admin")
                        <h1 class="mt-4">Dashboard</h1> 
                        
                        <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    
                                    <div class="card-body"> Units <i class="fas fa-house"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                        <a class="small text-white stretched-link" href="http://127.0.0.1:8000/unit">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Tenants <i class="fas fa-users"></i> {{$tenant}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="http://127.0.0.1:8000/tenant">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">System Users <i class="fas fa-users"></i> {{$Total_users}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="http://127.0.0.1:8000/role">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </main>

                    @endif

                @include('layouts.logoutmodal')

                @include('layouts.profile.profilemodal')

                
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="dashboard/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="dashboard/assets/demo/chart-area-demo.js"></script>
        <script src="dashboard/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="dashboard/js/datatables-simple-demo.js"></script>
    </body>
</html>