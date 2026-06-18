@extends('layouts.app')

@section('title', 'Book A Table - Feane')

@section('hero_background')
<!-- No hero background on book page -->
<div class="bg-box" style="display: none;"></div>
@endsection

@section('slider')
<!-- Optional banner for book page -->
<section class="inner_page_slider" style="padding: 60px 0; background: #222831;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="color: #fff; font-size: 48px; font-weight: 700;">Book A Table</h1>
                <p style="color: #fff; opacity: 0.8;">Reserve your table for an unforgettable dining experience</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- book section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Book A Table
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                    <form action="#">
                        <div>
                            <input type="text" class="form-control" placeholder="Your Name" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="Phone Number" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Your Email" />
                        </div>
                        <div>
                            <select class="form-control nice-select wide">
                                <option value="" disabled selected>
                                    How many persons?
                                </option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div>
                            <input type="date" class="form-control" />
                        </div>
                        <div class="btn_box">
                            <button>
                                Book Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div id="googleMap" style="width: 100%; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end book section -->

<!-- Booking Info Section -->
<section class="booking_info_section layout_padding" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="info_box text-center" style="padding: 30px;">
                    <i class="fa fa-phone" style="font-size: 36px; color: #ffbe33;"></i>
                    <h5 style="margin-top: 15px;">Call Us</h5>
                    <p>+01 1234567890</p>
                    <p>+01 9876543210</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info_box text-center" style="padding: 30px;">
                    <i class="fa fa-clock-o" style="font-size: 36px; color: #ffbe33;"></i>
                    <h5 style="margin-top: 15px;">Opening Hours</h5>
                    <p>Monday - Sunday</p>
                    <p>10:00 AM - 10:00 PM</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info_box text-center" style="padding: 30px;">
                    <i class="fa fa-map-marker" style="font-size: 36px; color: #ffbe33;"></i>
                    <h5 style="margin-top: 15px;">Location</h5>
                    <p>123 Food Street</p>
                    <p>New York, NY 10001</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end booking info section -->
@endsection

@push('scripts')
<script>
    // Initialize Google Map
    function myMap() {
        var mapOptions = {
            center: new google.maps.LatLng(40.712776, -74.005974),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        
        // Add marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.712776, -74.005974),
            map: map,
            title: 'Feane Restaurant'
        });
    }
</script>
@endpush