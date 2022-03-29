@extends('layouts.side')

@section('content')
<div class="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container-fluid ms-5">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-5 ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{-- {{auth()->user()->username}} --}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">
                                        <span class="me-2"><i class="fas fa-users-cog"></i></span> Edit Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">
                                       <span class="me-2"><i class="fas fa-power-off"></i></span> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="form-div">
        <h3 class="text-white ms-3" style="font-family: georgia;">Office Account</h3>
        <form action="{{route('topup')}}" class="me-3 ms-3"method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="topup" class="form-control input @error('topup')border-danger @enderror" id="amount" placeholder="GHS 100.00" >
                <label for="amount">Enter Amount</label>
            </div>
            @error('topup')
                <div class="text-danger text-sm">
                  {{$message}}
                </div>
            @enderror
                <button type="submit" class="btn btn-primary set-but">Top Up</button>
                <!-- <p class="mt-3 text-white">Amount must be in Ghana cedis</p> -->
            
        </form> 
    </div>
</div>
</div>
@endsection