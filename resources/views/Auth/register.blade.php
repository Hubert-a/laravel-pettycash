@extends('layouts.app')

@section('content')
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




<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
{{-- <script src="https://kit.fontawesome.com/04a07a4223.js" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="{{asset("assets/bootstrap-5.1.3-dist/js/bootstrap.min.js")}}"></script>
{{-- <script src="/assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script> --}}
<script src="/js/app.js"></script>
@endsection