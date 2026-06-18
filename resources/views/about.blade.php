@extends('layouts.app')

@section('title', 'About Us - Feane')

@section('slider')
<!-- Optional banner for about page -->
<section class="inner_page_slider" style="padding: 60px 0; background: #222831;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="color: #fff; font-size: 48px; font-weight: 700;">About Us</h1>
                <p style="color: #fff; opacity: 0.8;">Learn more about our story and passion for food</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- about section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{ asset('images/about-img.png') }}" alt="About Feane">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            We Are Feane
                        </h2>
                    </div>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                        are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                        the middle of text. All
                    </p>
                    <a href="#">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->
@endsection