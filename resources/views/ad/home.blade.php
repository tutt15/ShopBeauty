@extends('ad.master')
@section('content')
<div id="wrapper"> 

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="bstory/templates/admin/img/find_user.png" style="height: 80px" class="user-image img-responsive" />
            </li>
            <li>
                <a class="menu" href="#"><i class="fa fa-dashboard fa-3x"></i> Trang chủ</a>
            </li>
            <li>
                <a href="{{ route('productType.index')}}"><i class="fa fa-bar-chart-o fa-3x"></i> Quản lý danh mục</a>
            </li>
            <li>
                <a href="{{ route('product.index')}}"><i class="fa fa-qrcode fa-3x"></i> Quản lý sản phẩm</a>
            </li>
            <li>
                <a href="{{ route('users.index')}}"><i class="fa fa-user-plus fa-3x"></i> Quản lý người dùng</a>
            </li>
            <li>
                <a href="{{ route('news.index')}}"><i class="fa fa-money fa-3x"></i> Quản lý tin tức</a>
            </li>
            <li>
                <a href=""><i class="fa fa-newspaper-o fa-3x"></i> Quản lý hóa đơn</a>
            </li>
        </ul>

    </div>

</nav>
    </div>
    <div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>TRANG QUẢN TRỊ VIÊN</h2>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('productType.index') }}" >Quản lý danh mục</a></p>
                        <p class="text-muted">Có  danh mục</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-blue set-icon">
                        <i class="fa fa-bell-o"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('product.index')}}" title="">Quản lý sản phẩm</a></p>
                        <p class="text-muted">Có sản phẩm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-user-plus"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('users.index')}}" title="">Quản lý người dùng</a></p>
                        <p class="text-muted">Có  người dùng</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-money"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="" title="">Quản lý hóa đơn</a></p>
                        <p class="text-muted">Có  hóa đơn</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-newspaper-o"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="" title="">Quản lý tin tức</a></p>
                        <p class="text-muted">Có  tin tức</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
<!-- /. NAV SIDE  -->