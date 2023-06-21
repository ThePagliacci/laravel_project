@extends('layouts.website')
@section('title')
    Hakkımızda
@endsection
@section('content')
<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('website') }}/images/img_4.jpg');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                    <h1 class="">Hakkımızda</h1>
                    <p class="lead mb-4 text-white">Bir Tutam Kitap Kokusu</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <li class="col-md-5 mr-auto order-md-1">
                <h1>Biz Kimiz</h1>
                <p><h5>Hatice Sezgin</h5>
                       Fırat üniversitesi yazılım mühendisliği 2.sınıf öğrencisi
                    sitenin frontend kısmı ile ilgilemiş kişi.</p>
                <p><h5>Bushra Rakia</h5>
                    Fırat üniversitesi yazılım mühendisliği 2.sınıf öğrencisi
                        sitenin backend kısmı ile ilgilemiş kişi.</p>
                <ul class="ul-check list-unstyled success"></ul>

            </div>
        </div>
    </div>
</div>

<div class="site-section bg-white">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-5">
                <div class="subscribe-1 ">
                    <h2>Abone olun</h2>
                    <p class="mb-5">Daha fazla içerik ve güncel haberler için abone olun sizi anında haberdar edelim.</p>
                    <form action="#" class="d-flex">
                        <input type="text" class="form-control" placeholder="Enter your email address">
                        <input type="submit" class="btn btn-primary" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
