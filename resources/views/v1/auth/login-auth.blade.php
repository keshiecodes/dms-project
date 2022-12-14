@extends('v1.layout.auth-layout')
@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{asset("x-assets-x/img/logo.png")}}" alt="">
{{--                            <span class="d-none d-lg-block">{{str_replace('_', ' ', env("APP_NAME"))}}</span>--}}
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-2 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Sign In</h5>
{{--                                <p class="text-center small">Enter your username & password to login</p>--}}
                            </div>
                            @if(session()->get('email'))
                                <div class="alert alert-danger col-12">
                                    {{session()->get('email')}}
                                </div>
                            @endif
                            @if(session()->get('password'))
                                <div class="alert alert-danger col-12">
                                    {{session()->get('password')}}
                                </div>
                            @endif
                            <form action="{{route('login')}}" method="post" class="row g-3">
                                @csrf
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Email</label>
                                    <input type="email" name="userEmail" class="form-control" value="{{old('userEmail')}}" id="yourPassword" >
                                    @error('userEmail')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror

                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="userPassword" class="form-control" id="yourPassword" value="{{old('userPassword')}}">
                                    @error('userPassword')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Don't have account? <a href="{{route('register')}}">Create an account</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
