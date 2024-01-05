const $ = (document) => {
    
};
$(document).ready(function(){
   $("#num_order").change(function(){
       var price = $("#price ").text();
       var num_order = $("#num_oder").val();
       var data = {num_order: num_order, price: price};
       // console.log(data)
       $.ajax({
            url: 'process.php', // Trang xử lý, mặc định trang hiện tại
           method: 'POST', //POST hoặc GET, mặc định Get
           data: data, //Dữ liệu truyền lên sever
           dataType: 'json', //html,text, script hoặc json
           success: function(data){
                // alert(data);
               // console.log(data);
               // alert(data.price);
               $("#total").html("<strong>"+data+"<strong>");
           },
           error: function(xhr, ajaxOptions, throwError){
                alert(xhr.status);
                alert(throwError);
           }
       });
   });
});