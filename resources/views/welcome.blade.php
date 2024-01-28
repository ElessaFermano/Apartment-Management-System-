<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>Apartment Management System</title>  
        <link href="dashboard/css/style.css" rel="stylesheet"/>
        
    </head>
    <body>
        
        <header class="masthead">

        <div class="nb" id="nr">
                    <ul class="n">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    </ul>
                </div>

                    <center>
                    <div class="text-center">
                        
                        <h1 class="h">  Apartment <br> Management <br> System </h1>
                        
                         <a class="button" href="{{ route('login') }}">Log In</a>
                         <a class="button" href="{{ route('register') }}">Sign Up </a>
                         
                    </div>
                    </center>
        </header>
      
    </body>