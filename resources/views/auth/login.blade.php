@extends('layouts.app')

@section('title', 'Login - Feane')

@section('content')
<!-- Login Section -->
<section class="auth_section layout_padding" style="background: #f8f9fa; min-height: 80vh; display: flex; align-items: center; padding-top: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="auth_box" style="background: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 0 30px rgba(0,0,0,0.1);">
                    <div class="heading_container text-center" style="margin-bottom: 30px;">
                        <h2 style="color: #222831; font-size: 32px; font-weight: 700;">
                            Welcome Back
                        </h2>
                        <p style="color: #666; margin-top: 10px;">Login to your account to continue</p>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" style="font-weight: 600; color: #222831;">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email" style="border-radius: 10px; padding: 12px 15px; border: 2px solid #e0e0e0;">
                        </div>

                        <div class="form-group">
                            <label for="password" style="font-weight: 600; color: #222831;">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Enter your password" style="border-radius: 10px; padding: 12px 15px; border: 2px solid #e0e0e0;">
                        </div>

                        <div class="form-group d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember" style="color: #666;">Remember Me</label>
                            </div>
                            <a href="#" style="color: #ffbe33; text-decoration: none;">Forgot Password?</a>
                        </div>

                        <button type="submit" class="btn" style="width: 100%; background: #ffbe33; color: #fff; padding: 14px; border-radius: 10px; font-weight: 600; font-size: 16px; border: none; transition: all 0.3s;">
                            Login
                        </button>
                    </form>

                    <div class="text-center" style="margin-top: 25px;">
                        <p style="color: #666;">
                            Don't have an account?
                            <a href="{{ route('register') }}" style="color: #ffbe33; font-weight: 600; text-decoration: none;">
                                Sign Up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Section -->
@endsection