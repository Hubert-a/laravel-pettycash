<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/topup.css">
    <link rel="stylesheet" href="/assets/css/sidebar.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Petty Cash</title>
</head>
<body>
    <!--<div class="preloader">
        <div class="subloader">
            <img src="../assets/images/b53ab608718000227d5d9a752cbd5d5c.gif"class="loaderImage" alt="">
        </div>-->
    </div>

    <div class="page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img src="/assets/images/USG.jpg" alt="logoimage" class="logo-sidebar">
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name">Union<br>
                            <span class="brand-subname">Systems Global</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item">
                        <a href="{{route('home')}}"class="navigation-link active" >
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="col-10">
                                Home
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="" class="navigation-link ">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-spinner"></i>
                                </div>
                                <div class="col-10">
                                Request
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="" class="navigation-link ">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-history"></i>
                                </div>
                                <div class="col-10">
                                History
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="{{route('topup')}}" class="navigation-link">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="col-10">
                                Top Up Balance
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="" class="navigation-link">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-address-book"></i>
                                </div>
                                <div class="col-10">
                                Contacts
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <a href="" class="navigation-link">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <div class="col-10">
                                Settings
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="navigation-list-item">
                        <form action="{{route('logout')}}">
                            @csrf
                            <a href="{{ route('logout')}}" class="navigation-link">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fas fa-power-off"></i>
                                    </div>
                                    <div class="col-10">
                                    Logout
                                    </div>
                                </div>
                            </a>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        @yield('content')
    </body>
</html>