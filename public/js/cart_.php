


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<? $fileURL1='https://bazar.shihzamanapp.com/baze_css/aplica.css';
$headers = get_headers($fileURL1, 1);
$date = "Error";

if ( $headers && (strpos($headers[0],'200') !== FALSE) ) {
    $time=strtotime($headers['Last-Modified']);
    $date=date($time);
}
echo '<link rel="stylesheet" media="all" type="text/css" href="https://bazar.shihzamanapp.com/baze_css/aplica.css?' .$date. '" />';
?>

  <style>
 * {
  box-sizing: border-box;
}
 
 
html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: #e2e2e2;
  font-family: 'Roboto', sans-serif;
}        
 .btn2 {
    display: inline-block;
    width: 100%;
    position: fixed;
    bottom: 0;
    /* margin-left: 17%; */
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 1rem .75rem;
    font-size: 1rem;
    line-height: 1.6;
    border-radius: 1rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}



















 .btn {
    display: inline-block;
    width: 65%;
   
    margin-left: 17%;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 1rem  .75rem;
    font-size: 1rem;
    line-height: 1.6;
    border-radius: 1rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
 
 .btn-primary {
    color: #fff;
    background-color: #4a5bea;
    border-color: #4a5bea;
}
 
 
 
 
 .shopping-cart {
  width: 750px;
  height: 423px;
 /* margin: 80px auto;*/
  background: #FFFFFF;
  box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
  border-radius: 6px;
 
  display: flex;
  flex-direction: column;
 padding-bottom: 5em;
}
 
.title {
  height: 60px;
  border-bottom: 1px solid #E1E8EE;
  padding: 20px 30px;
  color: #5E6977;
  font-size: 18px;
  font-weight: 400;
}
 
.item {
    padding: 5px 5px;
    height: 120px;
    display: flex;
}
 
.item:nth-child(3) {
  
}
.buttons {
     position: relative;
    /*padding-top: 39px;
    margin-right: 60px;*/
}
.delete-btn,
.like-btn {
  display: inline-block;
  Cursor: pointer;
}
.delete-btn {
  width: 18px;
  height: 17px;
  background: url("trash-alt-solid.svg") no-repeat center;
}
 
.like-btn {
  position: absolute;
  top: 9px;
  left: 15px;
  background: url('twitter-heart.png');
  width: 60px;
  height: 60px;
  background-size: 2900%;
  background-repeat: no-repeat;
} 
.image {
  margin-right: 50px;
}
 

.description {
  padding-top: 20px;
    margin-left: 22px;
    /* width: 115px;*/
}
 
.description span {
  display: block;
  font-size: 15px;
  color: #43484D;
  font-weight: 400;
}
 
.description span:first-child {
  margin-bottom: 5px;
}
.description span:last-child {
  font-weight: 300;
  margin-top: 8px;
  color: #000000;
}
.is-active {
  animation-name: animate;
  animation-duration: .8s;
  animation-iteration-count: 1;
  animation-timing-function: steps(28);
  animation-fill-mode: forwards;
}
 
@keyframes animate {
  0%   { background-position: left;  }
  50%  { background-position: right; }
  100% { background-position: right; }
}
 
.quantity {
  padding-top: 10px;
  margin-left: 10px;
}
.quantity input {
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 32px;
  font-size: 16px;
  color: #43484D;
  font-weight: 300;
}
 
button[class*=btn] {
  width: 30px;
  height: 30px;
  background-color: #E1E8EE;
  border-radius: 6px;
  border: none;
  cursor: pointer;
}
.minus-btn img {
  margin-bottom: -3px;
  width: 15px;
}
.plus-btn img {
  margin-top: 2px;
  width: 15px;
}
 
button:focus,
input:focus {
  outline:0;
}


.total-price {
      /* width: 81px; */
    padding-top: 45px;
    text-align: center;
    font-size: 16px;
    color: #43484D;
    font-weight: 300;
    margin-left: 11px;
}

@media (max-width: 500px) {
  .shopping-cart {
    width: 100%;
    height: auto;
    overflow: hidden;
  }
  .item {
    height: auto;
    /*flex-wrap: wrap;*/
    justify-content: center;
    border-top:  1px solid #E1E8EE;
  border-bottom:  1px solid #E1E8EE;
  }
  .image img {
    width: 60%;
  }
  .image{
    width: 100%;
   
    text-align: center;
    margin: 0px -30px;
    margin-top: 15px;
  }
  .buttons {
   /* margin-right: 10px;*/
  }
  
  .description {
    padding-top: 20px;
    margin-left: 22px;
    /* width: 115px; */
}
 
 .description span:last-child {
    font-weight: 600;
    margin-top: 8px;
    color: #000000;
}

.description span:first-child {
    margin-bottom: 5px;
}
  .description span {
    display: block;
    font-size: 15px;
    color: #43484D;
    font-weight: 400;
}
.total-price {
    /* width: 81px; */
    padding-top: 25px;
    text-align: center;
    font-size: 20px;
    color: #43484D;
    font-weight: 300;
    margin-left: 0;
}

.total-price span:last-child {
    font-weight: 300;
    margin-top: 8px;
    color: #000000;
}

.total-price span:first-child {
    margin-bottom: 5px;
}
  .total-price span {
    display: block;
    font-size: 15px;
    color: #43484D;
    font-weight: 400;
}


}


@media only screen and (min-device-width : 501px) and (max-device-width : 700px) {
    
   .shopping-cart {
    width: 100%;
    height: auto;
    overflow: hidden;
  }
  .item {
    height: auto;
    /*flex-wrap: wrap;*/
    justify-content: center;
    border-top:  1px solid #E1E8EE;
  border-bottom:  1px solid #E1E8EE;
  }
  .image img {
    width: 60%;
  }
  .image{
    width: 100%;
   
    text-align: center;
    margin: 0px -30px;
    margin-top: 15px;
  }
  .buttons {
   /* margin-right: 10px;*/
  }
  
  .description {
    padding-top: 20px;
    margin-left: 22px;
    /* width: 115px; */
}
 
 .description span:last-child {
    font-weight: 300;
    margin-top: 8px;
    color: #000000;
}

.description span:first-child {
    margin-bottom: 5px;
}
  .description span {
    display: block;
    font-size: 20px;
    color: #43484D;
    font-weight: 400;
}
  .quantity {
  padding-top: 25px;
  margin-left: 45px;
}
.quantity input {
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 32px;
  font-size: 20px;
  color: #43484D;
  font-weight: 300;
}  
  button[class*=btn] {
    width: 30px;
    height: 30px;
    background-color: #E1E8EE;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

.plus-btn img {
    margin-top: 2px;
    width: 20px;
}

.minus-btn img {
  margin-bottom: -3px;
  width: 20px;
}
.total-price {
    /* width: 81px; */
    padding-top: 55px;
    text-align: center;
    font-size: 20px;
    color: #43484D;
    font-weight: 300;
    margin-left: 11px;
}
.total-price span:last-child {
    font-weight: 300;
    margin-top: 8px;
    color: #000000;
}

.total-price span:first-child {
    margin-bottom: 5px;
}
  .total-price span {
    display: block;
    font-size: 35px;
    color: #43484D;
    font-weight: 400;
}


}



@media only screen and (min-device-width : 701px) and (max-device-width : 900px) {
    
   .shopping-cart {
    width: 100%;
    height: auto;
    overflow: hidden;
  }
  .item {
    height: auto;
    /*flex-wrap: wrap;*/
    justify-content: center;
    border-top:  1px solid #E1E8EE;
  border-bottom:  1px solid #E1E8EE;
  }
  .image img {
    width: 60%;
  }
  .image{
    width: 100%;
   
    text-align: center;
    margin: 0px -30px;
    margin-top: 15px;
  }
  .buttons {
   /* margin-right: 10px;*/
  }
  
  .description {
    padding-top: 20px;
    margin-left: 22px;
    /* width: 115px; */
}
 
 .description span:last-child {
    font-weight: 300;
    margin-top: 8px;
    color: #000000;
}

.description span:first-child {
    margin-bottom: 5px;
}
  .description span {
    display: block;
    font-size: 35px;
    color: #43484D;
    font-weight: 400;
}
    .quantity {
    padding-top: 30px;
    margin-left: 45px;
    font-size: 35px;
}
.quantity input {
    -webkit-appearance: none;
    border: none;
    /* text-align: center; */
    width: 55px;
    font-size: 35px;
    color: #43484D;
    font-weight: 300;
}
 button[class*=btn] {
    width: 55px;
    height: 55px;
    background-color: #E1E8EE;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}  
.plus-btn img {
    margin-top: 2px;
    width: 30px;
}
.minus-btn img {
  margin-bottom: -3px;
  width: 30px;
}
.total-price {
    
    padding-top: 90px;
    text-align: center;
    font-size: 30px;
    color: #43484D;
    font-weight: 300;
    margin-left: 11px;
}

.total-price span:last-child {
    font-weight: 300;
    margin-top: 8px;
    color: #000000;
}

.total-price span:first-child {
    margin-bottom: 5px;
}
  .total-price span {
    display: block;
    font-size: 35px;
    color: #43484D;
    font-weight: 400;
}



}


@media only screen and (min-device-width : 320px) and (max-device-width : 350px) {
    
.quantity {
    padding-top: 15px;
    margin-left: 0px;
}
button[class*=btn] {
    width: 25px;
    height: 25px;
    background-color: #E1E8EE;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}
.quantity input {
    -webkit-appearance: none;
    border: none;
    text-align: center;
    width: 25px;
    font-size: 16px;
    color: #43484D;
    font-weight: 300;
}
.plus-btn img {
    margin-top: 3px;
    width: 13px;
}
.minus-btn img {
    margin-bottom: -3px;
    width: 13px;
}

}
@media only screen and (min-device-width : 350px) and (max-device-width : 370px) {

.quantity {
    padding-top: 20px;
    margin-left: 0px;
}

button[class*=btn] {
    width: 25px;
    height: 25px;
    background-color: #E1E8EE;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}
.quantity input {
    -webkit-appearance: none;
    border: none;
    text-align: center;
    width: 25px;
    font-size: 17px;
    color: #43484D;
    font-weight: 300;
}
.plus-btn img {
    margin-top: 2px;
    width: 13px;
}
.minus-btn img {
    margin-bottom: -2px;
    width: 13px;
}
}
@media only screen and (min-device-width : 371px) and (max-device-width : 480px) {

.quantity {
    padding-top: 20px;
    margin-left: 0px;
}

button[class*=btn] {
    width: 25px;
    height: 25px;
    background-color: #E1E8EE;
    border-radius: 6px;
    border: none;
    cursor: pointer;
}

.plus-btn img {
    margin-top: 2px;
    width: 13px;
}
.minus-btn img {
    margin-bottom: -2px;
    width: 13px;
}
.description {
    padding-top: 20px;
   margin-left: 0;
    margin-right: 30px;
     width: 50%; 
}
.image img {
    width: 65%;
   
}

.image {
    width: 65%;
    text-align: center;
    margin: 0 0;
    margin-top: 15px;
}
.quantity {
  padding-top: 10px;
  margin-left: 0;
  font-size: 20px;
}
.quantity input {
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 25px;
  font-size: 16px;
  color: #43484D;
  font-weight: 600;
}

.total-price span:last-child {
    font-weight: 600;
    margin-top: 8px;
    color: #000000;

}
.total-price {
    /* width: 81px; */
    padding-top: 20px;
    text-align: center;
    font-size: 20px;
    color: #43484D;
    font-weight: 300;
    margin-left: 0;
}


}
  </style>  
 

  </script>
</head>
<body onload="loadPage()">
<?php session_start();
if (!isset($_SESSION['cart'])|| count($_SESSION["cart"]) < 1):?>

<h3 style="
    text-align: center;
    width: 65%;
    margin-top: 50%;
    margin-left: 17%;
">Ваша корзина пуста</h3>
<section id="headerBottom" class="container">
    

      <form id="searchForm" action="https://saray.tm/ru/items" method="get">
  <div class="row">
    
    <div class="col-lg-2 md-pl-0">
      <buttons onclick="history.back();" class="btn btn-primary md-bl-radius-0">продолжить покупки</button>
    </div>
  </div>
</form>  </section>


<?php else :?>

<div class="shopping-cart">
    
      <!-- Title -->
      <div class="title">
      <i onclick="history.back();" class="fas fa-arrow-left" style="
    margin-right: 30px;
    margin-left: -10px;
"></i>
      
      Ваша Корзина
    </div>

 <!-- Товар #1 -->

 <?php
include('db.php');
	    	
	    	
	    	
	    	
	    	
$temp=$_SESSION['cart'];
$id = $_POST['id_tov']; 

$items = array();

foreach($temp as $id=>$kol ): 
        
$result = mysqli_query($con,"SELECT * FROM `tes` WHERE `id`='$id'");
$row = mysqli_fetch_assoc($result);
$product_price = $row['price'];        
$product_name = $row['name'];      	
$product_image= $row['img'];         
 
?>

          
          
      <div class="item" id="<?=$id?>">
        
 
        <div class="image">
          <img src='../Admin/upload/product/<?=$product_image?>' alt="" />
        </div>
 
        <div class="description">
          <span><?=$product_name?></span>
          
        </div>
 
        <div class="quantity">
          <button class="plus-btn" price="<?= $product_price ?> " id="<?=$id?>" type="button" name="button">
            <img src="plus-solid.svg" alt="" />
          </button>
          <input type="number" price="<?= $product_price ?>" class="count-product" id="<?=$id?>" value="<?=$kol?>">
          
          <button class="minus-btn" id="<?=$id?>" type="button" name="button">
            <img src="minus-solid.svg" alt="" />
          </button>
        </div>
 
        <div class="total-price " >
        <span  class="total-price2 "><?php 
         $a = $kol*$product_price;
         $padded = sprintf('%0.2f', $a);
         echo $padded;
         
        
        
         ?> </span></div>
      <div class="buttons">
          <span class="delete-btn btn-del" id="<?=$id?>"></span>
         
        </div>
        
      </div>
     
      
       <?php endforeach; ?>
       
       <?   //echo $text
    $items = array();
    $items2 = array();
    foreach( $temp as $id=>$kol  )
{
    
$result = mysqli_query($con,"SELECT * FROM `tbl_product11` WHERE `product_id`='$id'");
$row = mysqli_fetch_assoc($result);
$product_price = $row['product_price'];        
$product_name = $row['product_name'];      	
$product_image= $row['product_image'];
    
    
    
    $a = $kol*$product_price;
    $padded = sprintf('%0.2f', $a);
    echo $id.'/'.$product_name.'/'.$kol.'/'.$padded.'<br />';
     $items2[] = $product_name.' '.$kol.' '.$padded.'<br />';
     $items[] = $padded;
   
    
}
//echo json_encode($items2);
//echo json_encode(array_sum($items));

   mysqli_close($con); ?> 
     
      
     <!--button class="btn2 btn-primary md-bl-radius-0 addTocart " id="but">Кнопка</button-->
    
    <div>
        <buttons class="btn2 btn-primary md-bl-radius-0 addTocart " onclick="calc()">Оформить заказ</buttons>
       
     
    </div>
    <div id="shoppingCartFooter">
        


    <div id="shoppingCartFooter">
        


    <div class="row">

    <div class="col-md-4 col-xl-4 mt-3 mt-md-0">
    
        <div class="d-flex">
            
            <div class="counter bold" style="color: black;">Всего: </div>
            <div class="counter bold" id="cost" style="margin-right: 0.3em; margin-left: 0.3em;color: black;"> </div>
            <div class="roboto-condensed bold"> ТМТ</div>
        </div>
        <hr class="my-1">
       
</div>
</div>
</div>
</div>
<p class="out"></p>
<? include ("finc.php"); ?>
<p class="out"></p>








       
<?php endif; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">

 calc();


function calc() {

    
  var elems = document.getElementsByClassName("total-price2");
  var sum = 0;
  for (var i = 0; i < elems.length; i++) {
    var elem = elems[i];
    var num = elem.innerHTML;
    var items = <?php echo json_encode(array_sum($items)) ?>; 
    var items2 = <?php echo json_encode($items2) ?>; 
    
    num = num.substr(0);
    sum += Number(num);
    //elem.style.background = "red"
  }
  document.getElementById("cost").innerHTML =  sum  ;  
    
    
  let name = items2;
  let age = items;
  let location = 'Москва';
  
  $.ajax({
    url: 'finc.php',
    type: 'POST',
    dataType: 'json',
    data: {
    	finc: 'finc_data',
    	name: name,
    	age: age,
    	location: location,
    },
   
    success: function(data){
     $('p.out').text('Я '+data.name+', мне ' +data.age + ' лет. Мой город: ' +data.location);
	}, error: function(){
	console.log('ERROR');
		}
	})



}







function calc2() {
  var elems = document.getElementsByClassName("total-price2");
  var sum = 0;
  for (var i = 0; i < elems.length; i++) {
    var elem = elems[i];
    var num = elem.innerHTML;
    num = num.substr(0);
    sum += Number(num);
    elem.style.background = "red"
  }
  document.getElementById("cost").innerHTML =  sum + "TMT" ;
}








      $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());
            var id = $(this).attr('id'); 
    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);
           $.ajax({//аякс-запрос
            type: "POST",
            url: 'cartamount.php',
            data: {col_tov: value, id_tov: id},
            success: function() {
             
               window.location.reload();
                }
            });
    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());
            var id = $(this).attr('id'); 
    		var price = $(this).attr('price'); 
    		
           if (value < 100) {
      		value = value + 1;
    		} else {
    		value =100;
    		}

    	$input.val(value);
       
    		
            $.ajax({//аякс-запрос
            type: "POST",
            url: 'cartamount.php',
            data: {col_tov: value, id_tov: id},
            success: function () {
               
   window.location.reload();
  
              

                }
                
            });
    		
    		
    	});

      
    </script>


<script type="text/javascript">


    //изменение количества
        $('.count-product').change(function () { //изменение содержимого инпута     
        var col = $(this).val(); //получаем количество
        if (col<1){ col = 1; $(this).val(1); } //если ввели меньше 1 установим 1
        var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartamount.php',//куда передаем
            data: {col_tov: col, id_tov: id},//данные
            success: function() {//получаем результат
               //тут можно пересчитать сумму
                }
            });
        });
        //удаление товара
        $('.btn-del').click(function () { //клик на кнопку     
        var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartdel.php',//куда передаем
            data: {id_tov: id},//данные
            success: function(data) {//получаем результат
                    //тут можно пересчитать сумму
                    $('div#'+id).css('display', 'none');//скрываем строку таблицы
                     window.location.reload();
                }
            });
        });
</script>    
</body>
</html>


