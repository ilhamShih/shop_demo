
function myFunction(id) {
    var id = id;

     $.ajax({//передаем ajax-запросом данные
        type: "POST", //метод передачи данных
        url: 'js/addtocart.php',//php-файл для обработки данных
        data: {id_tov: id},//передаем наши данные
         
            success: function(data) {//
             $('.basker_kol').html(data);//меняем количество товаров на кнопке корзины 
             }
         });


  
}

