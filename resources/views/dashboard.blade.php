@extends('layouts.app')

@section('title', 'Dashboard - Feane')

@section('hero_background')
<div class="bg-box" style="display: none;"></div>
@endsection

@section('content')
<section class="dashboard_section layout_padding" style="background: #f8f9fa; min-height: 80vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard_header" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 0 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 style="color: #222831;">
                                Welcome back, {{ Auth::user()->name }}!
                            </h2>
                            <p style="color: #666;">Here's what's happening with your account today.</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="#" class="btn" style="background: #ffbe33; color: #fff; padding: 10px 25px; border-radius: 10px;">
                                <i class="fa fa-plus"></i> New Order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Stats -->
        <div class="row">
            <div class="col-md-3">
                <div class="stat_card" style="background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.05); text-align: center; margin-bottom: 20px;">
                    <i class="fa fa-shopping-bag" style="font-size: 36px; color: #ffbe33;"></i>
                    <h3 style="margin-top: 15px; color: #222831;">12</h3>
                    <p style="color: #666;">Total Orders</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat_card" style="background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.05); text-align: center; margin-bottom: 20px;">
                    <i class="fa fa-clock-o" style="font-size: 36px; color: #ffbe33;"></i>
                    <h3 style="margin-top: 15px; color: #222831;">3</h3>
                    <p style="color: #666;">Pending Orders</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat_card" style="background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.05); text-align: center; margin-bottom: 20px;">
                    <i class="fa fa-check-circle" style="font-size: 36px; color: #28a745;"></i>
                    <h3 style="margin-top: 15px; color: #222831;">9</h3>
                    <p style="color: #666;">Completed Orders</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat_card" style="background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.05); text-align: center; margin-bottom: 20px;">
                    <i class="fa fa-star" style="font-size: 36px; color: #ffc107;"></i>
                    <h3 style="margin-top: 15px; color: #222831;">4.8</h3>
                    <p style="color: #666;">Rating</p>
                </div>
            </div>
        </div>

        <!-- Recent Orders -->
        <div class="row">
            <div class="col-md-12">
                <div class="recent_orders" style="background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 0 20px rgba(0,0,0,0.05);">
                    <h4 style="color: #222831; margin-bottom: 20px;">Recent Orders</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#12345</td>
                                    <td>2024-01-15</td>
                                    <td>2 items</td>
                                    <td>$45.00</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td><a href="#" class="btn btn-sm" style="background: #ffbe33; color: #fff;">View</a></td>
                                </tr>
                                <tr>
                                    <td>#12344</td>
                                    <td>2024-01-14</td>
                                    <td>3 items</td>
                                    <td>$67.50</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td><a href="#" class="btn btn-sm" style="background: #ffbe33; color: #fff;">View</a></td>
                                </tr>
                                <tr>
                                    <td>#12343</td>
                                    <td>2024-01-13</td>
                                    <td>1 item</td>
                                    <td>$22.00</td>
                                    <td><span class="badge badge-info">Processing</span></td>
                                    <td><a href="#" class="btn btn-sm" style="background: #ffbe33; color: #fff;">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection