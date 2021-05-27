@extends('layouts.header')

<!-- ______________________ Корзина _________________________ -->
@section('content_korzina')

<? $temp = $_SESSION['cart']; $count = count($temp);echo $count ?>

@endsection

<!-- ___sss___________________ Товары _________________________ -->

@section('content_product') @foreach($tes as $user)                      
<div class="sidebar-box4 card card-product ">
<div class="product-item card-body">
<div class="img-hold">    
<a href="">
<img  src='{{ asset("/img/$user->img") }}' >
</a>
<div class="price">{{$user->price }} руб</div>
</div>
<a href="#"  class="card-title">{{$user->name }}</a>
</div>
<div class="card-footer addTocart">
<button class="btn btn-sm rounded-pill btn-outline-primary btn-block addTocart" id="{{$user->id }}" onclick="myFunction(id)">В Корзину</button>
</div>
</div>
@endforeach @endsection
