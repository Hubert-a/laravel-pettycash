@extends('layouts.app')

@section('content')
    
<br>
<br>
<div class="container bg-transparent" >
    <div class="row">
        <div class="col-md-7">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./assets/images/holdingmoney.jpg" class="d-block w-100  img" alt="carouselImage">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Welcome</h5>
                      <p class="p">Need cash? Login to request</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./assets/images/coins.jpg" class="d-block w-100  img" alt="carouselImage" >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Fast & Reliable</h5>
                      <p class="p">Processing requests only takes minutes</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./assets/images/bundle.jpg" class="d-block w-100 img" alt="carouselImage" >
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Get Notified</h5>
                      <p class="p">Get notified when approved</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    
  
        <div class="col-md-5 bg-light" >
            <div class="mt-5 container">
              @if (session('status'))
               <div class="bg-danger p-4 text-white text-center">
                 {{session('status')}}
               </div>
              @endif
            <form action="" id="loginform" method="POST" class="form-container">
              @csrf
                <h3 class="mt-5 ">Hello...</h3>
                <p class="mb-4 message"><small>Don’t have an account? 
                  <a href="#" class=" ms-2"  style="text-decoration: none;">Register</a></small></p>
                  <p class="h4 text-center mb-3">Login Now</p>
                <p class="text-center mb-4">Please enter your details below to continue</p>
                <div class="form-floating mb-3">
                  <input type="email" id="mail" name="email"class="form-control  @error('email')border-danger @enderror" id="email" placeholder="name@example.com">
                  <label for="email">Email address</label>
                </div>
                @error('email')
                <div class="text-danger text-sm mt-1">
                  {{$message}}
                </div>
                @enderror
                <div class="form-floating mb-3">
                  <input type="password" id="pass" name="password" class="form-control  @error('password')border-danger @enderror" id="password" placeholder="Password">
                  <label for="password" class="form-label">Password</label>
                 <span> <i class="far fa-eye" onclick="myFunction()" style="cursor: pointer;"></i></span>
                </div>
                @error('password')
                <div class="text-danger text-sm mt-1">
                  {{$message}}
                </div>
                @enderror
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-block text-white" id="enter" style="background: linear-gradient(35deg, #3432bb,rgba(119, 119, 255, 0.8));">Log in</button>
                </div>
                <small><p class="text-center"><a href="#" style="text-decoration:none">Forgot Password </a></p></small>
            </form>
            </div>
            <div class="mt-2 container" >
                <form action="" class="form-container" method="POST" style="display: none;">
                  @csrf
                <h3 class="mt-3 ">Welcome...</h3>
                <p class="mb-3 message"><small>Already have an account?
                <a href="#" class=" ms-2"  style="text-decoration: none;">Login</a></small></p>
                  <p class="h4 text-center mb-2">Signup Now</p>
                <p class="text-center mb-3">Please enter your details below to continue</p>
                <div class="mb-2 form-floating">
                  <input type="text" name="name" class="form-control mb-2 @error('name')border-danger @enderror" id="name" placeholder="Jonas Markin" value="{{old('name')}}">
                  <label for="name" class="form-label">Name</label>
                </div>
                @error('name')
                      <div class="text-danger text-sm mt-1">
                        {{$message}}
                      </div>
                @enderror
                <div class="mb-2 form-floating">
                  <input type="text" name="username"class="form-control @error('username')border-danger @enderror" id="username" placeholder="Jomark" value="{{old('username')}}">
                  <label for="username" class="form-label">Username</label>
                </div>
                @error('username')
                <div class="text-danger text-sm mt-1">
                  {{$message}}
                </div>
                @enderror
                <div class="mb-2 form-floating">
                  <input type="text" name="email" class="form-control @error('email')border-danger @enderror" id="email" placeholder="name@example.com" value="{{old('email')}}">
                  <label for="email" class="form-label">Email</label>
                </div>
                @error('email')
                <div class="text-danger text-sm mt-1">
                  {{$message}}
                </div>
                @enderror
                <div class="mb-2 form-floating">
                  <input type="text" name="role" class="form-control @error('role')border-danger @enderror" id="role" placeholder="Channels" value="{{old('role')}}">
                  <label for="role" class="form-label">Role</label>
                </div>
                @error('role')
                <div class="text-danger text-sm mt-1">
                  {{$message}}
                </div>
                @enderror
                <div class="mb-2 form-floating">
                  <input type="password" name="password" class="form-control @error('password')border-danger @enderror" id="reg-pass" placeholder="Password">
                  <label for="reg-pass" class="form-label">Password
                  </label>
                  <span><i class="far fa-eye" onclick="myfunction()" style="cursor: pointer;"></i></span>
                </div>
                @error('password')
                      <div class="text-danger text-sm mt-1">
                        {{$message}}
                      </div>
                @enderror
                <div class="mb-3 form-floating">
                  <input type="password" name="password_confirmation" class="form-control @error('name')border-danger @enderror" id="password_confirmation" placeholder="Repeat Password">
                  <label for="password_confirmation" class="form-label">Confirm password
                    </label>
                    <span> <i class="far fa-eye" style="cursor: pointer;"></i></span>
                </div>
                <div class="d-grid gap-2 mb-2">
                <button type="submit" class="btn btn-block text-white"style="background: linear-gradient(35deg, #3432bb,rgba(119, 119, 255, 0.8));">Sign up</button>
                </div>

                </form>
            </div>
        </div>
    </div>

  </div>
  

  <script src="https://kit.fontawesome.com/04a07a4223.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="{{asset("assets/bootstrap-5.1.3-dist/js/bootstrap.min.js")}}"></script>
  <script src="/assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <script src="/js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
   function myFunction() {
     var x = document.getElementById("password");
       if (x.type === "password") {
     x.type = "text";
   } else {
     x.type = "password";
   }
 }
 function myfunction() {
     var x = document.getElementById("reg-pass");
       if (x.type === "password") {
     x.type = "text";
   } else {
     x.type = "password";
   }
 }
 function myfunctio() {
     var x = document.getElementById("password_confirmation");
       if (x.type === "password") {
     x.type = "text";
   } else {
     x.type = "password";
   }
 }
 </script>
  <script>
      $('.message a').click(function(){
          $('form').animate({height:"toggle",opacity:"toggle"}, "slow");
      });

      const enterEl = document.getElementById('enter');
        enterEl.addEventListener('click',()=>{
          const mail = document.getElementById('mail').value
          const pass = document.getElementById('pass').value
          e.preventDefault()
          console.log(mail)
          $.ajax({
            type:"POST",
            url: "userlogin",
            datatype: "application/json",
            data: {email:mail, password:pass},
            headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-	token"]').attr("content"),
                  },
            success: function(response){
            console.log(response)
            }
          })
        })
        $("#enter").click(e){
          e.preventDefault()
          const mail = document.getElementById('mail').value
          const pass = document.getElementById('pass').value
          alert(mail, pass)
        }
  </script>
@endsection