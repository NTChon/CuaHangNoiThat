$(document).ready(function() {
  $("a.add-to-cart-link,a.add_to_cart_button,button.add_to_cart_button").click(
    function() {
      var $key = $(this).attr("id");
      var $soluong = $("#soluong" + $key).val();
      var $dongia = $("#dongia" + $key).val();

      var form_data = {
        id: $key,
        dongia: $dongia,
        soluong: $soluong
      };
      $.ajax({
        url: "process/addToCart.php",
        type: "POST",
        data: form_data,
        dataType: "json",
        success: function(data) {
          $("span.cart-amunt").html(data[0] + "₫");
          $("span.product-count").html(data[1]);
        },
        error: function(error) {
        }
      });
      return false;
    }
  );

  $("button.remove_item").click(
    function(){
      var $invalid = $(this).attr("id");
      var txt = $invalid.replace("x","");

      var xmlhttp=new XMLHttpRequest();
  	  xmlhttp.open("POST","process/xoaSanPham.php");
	    xmlhttp.onreadystatechange=function(){
		    if(xmlhttp.status==200 && xmlhttp.readyState==4){
			    window.location.reload(true);
		    }	
	    }
	
	var data1=new FormData();
	data1.append("id_sp",txt);
	xmlhttp.send(data1);
    }
  );

  $("button.plus").click(
    function() {
      var $temp = $(this).attr("id");
      var $txt1 = $temp.replace("y","");
      var str=$("#quantity"+$txt1).val();
      var temp_data = {
        id: $txt1,
        soluong: str,
      };

      $.ajax({
        url: "process/updateCart.php",
        type: "POST",
        data: temp_data,
        dataType: "json",
        success: function(data) {
          $("span.cart-amunt").html(data[0] + "₫");
          $("span.product-count").html(data[1]);
          $("#sum"+$txt1).html(data[2] + "đ");
        },
        error: function(error) {
        }
      });
      return false;
    }
  );

  $("button.voucheradd").click(
    function() {
      $voucher_code=$("input.vouchercode").val();
      var voucher_data = {
        voucher_code: $voucher_code,
      };

      $.ajax({
        url: "process/checkVoucher.php",
        type: "POST",
        data: voucher_data,
        dataType: "json",
        success: function(data) {
          // $("span.cart-amunt").html(data[0] + "₫");
          // $("span.product-count").html(data[1]);
          // $("#sum"+$txt1).html(data[2] + "đ");
          alert("a");
        },
        error: function(error) {
          alert($voucher_code);
        }
      });
      return false;
    }
  );
});
