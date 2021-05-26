<!DOCTYPE html>
<html  lang="ru-RU" prefix="og: http://ogp.me/ns#">
<head>
<title>Market</title>
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#4d1472">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#4d1472">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#4d1472"> 
<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<meta name="viewport" content="width=device-width"/>

<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
<meta name="copyright" content="Copyright © Shihzamanapp 2021">
<meta name="reply-to" content="shihnazarow@gmail.com">
<meta http-equiv="content-language" content="ru">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="True"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="cleartype" content="on"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="msapplication-tap-highlight" content="no">
<meta name="referrer" content="unsafe-url">
<meta property="og:type" content= "website" />
<meta property="og:image" itemprop="image primaryImageOfPage" content="https://shihzamanapp.com/img/new_title.jpg" />

<link rel="shortcut icon" href="https://shihzamanapp.com/img/icion.ico" type="image/x-icon">
<link rel="help" href="mailto:shihnazarow@gmail.com">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> 

<link rel="stylesheet" href="{{ asset("css/style.css") }}">
<link rel="stylesheet" href="{{ asset("css/app.css") }}">
<link rel="stylesheet" href="{{ asset("css/mane.css") }}">
<link rel="stylesheet" href="{{ asset("css/apli.css") }}">
<link rel="stylesheet" href="{{ asset("css/img.css") }}">
</head>

<main  style="margin-bottom: 5em;">
<th class="col1 col1 tabs__item svelte-1gukzgw is-active label-place">
<a href="tpl/cart_.php"><span style="font-size: 1.6em;">
<i class="fas fa-shopping-bag"></i>
<span class="badge basker_kol">





<!-- _____ssss_________________ Корзина _________________________ -->  



@yield('content_korzina')

</span>
</span>
<p style="text-align: center;margin: -7px  0px 41px 0px;font-size: 12px;">Корзина</p></a>   
<section>
<div id="append"> 
<div class="grid3">

<!-- ______________________ Товары _________________________ -->
    
@yield('content_product')  
    
</div>
</div>
</section>

</main>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="{{ asset("js/js.js") }}"></script>
</body>
</html>