@extends('auth.master_auth')
@section('title', 'Register Cov.id')
@section('content')

<div class="container-fluid ">
    <div class="d-flex h-100" style="position: absolute;">
      <div class="row">

        <div class="col col-lg-6" style="background-color: #D9E9F0;">
          <img src="{{ asset('log/img/bg_login.svg') }}" style="position: relative; margin-top: 190px;">
          <h3 class="text-header-left" style="color: #247AED; text-align: center; margin-top: 15px;">Hello, Friend!</h3>
          <h6 class="text-header-left-bottom"  style="color: #247AED; text-align: center; margin-top: 6px;
          margin-bottom: 190px;">Gabung bersama kami untuk mengikuti Informasi Covid-19</h6>
        </div>

        <div class="col col-lg-6">
          <div class="card" style="width: 292px; height: 443px; margin: auto; margin-top: 92px;">
            <div class="card-body">
              <h3 class="text-header-sign text-center">Sign Up to Account</h5>
              
              <p class="card-text text-center" style="margin-top: 58px;"><img src="{{ asset('log/img/google.svg') }}" style="margin-right: 5px;">Sign up with Google</p>
              <p class="card-text text-center" style="margin-top: 31px; font-size: 12px; color: rgba(0, 0, 0, 0.54);">Atau masukkan akun email anda</p>
             
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text"  name="name" class="form-control @error('name') is-invalid  @enderror" style="margin-top: 33px;" id="exampleInputEmail1" aria-describedby="name" placeholder="Enter name" value="{{old('name')}}">
              
                @error('name')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

                <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror" style="margin-top: 9px;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
                
                @error('email')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
                
                <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror" style="margin-top: 9px;" id="exampleInputPassword1" placeholder="Password">
               
                @error('password')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

                <input type="password" name="password_confirmation" class="form-control" style="margin-top: 9px;" id="exampleInputPassword2" required placeholder="Confirm Password">
                <div class="d-flex">
                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" style="margin-top: 16px; border: rgba(0, 0, 0, 0.28);" id="exampleCheck1">
                    <label class="form-check-label" style="margin-top: 13px; font-size: 12px; font-weight: 600;" for="exampleCheck1">i agree with the terms and conditions</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary" style="margin-top: 15px; width: 100%; font-size: 14px; font-weight: 700;">Sign Up</button>
                <p style="margin-top: 22px; font-size: 12px; font-weight: 600; color: rgba(0, 0, 0, 0.54);">You have account? <a href="/login" style="color: #247AED;">Sign In</a></p>
            </form>
           
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

