
<div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                
                <script>
$(function() {
	
	pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	var vt=window.location.href.lastIndexOf("?")-1;
	if(vt>0)
	{
		pgurl = window.location.href.substr(1,vt);
		pgurl =pgurl.substr(pgurl.lastIndexOf("/")+1);	
	}	
	
	 if (pgurl=="") pgurl="." ;
     $("ul.navbar-nav li a").each(function(){
		 	$(this).parent().removeClass("active");
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).parent().addClass("active");
     })
});
</script>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Trang Chủ</a></li>
                        <li><a href="product.php">Sản Phẩm</a></li>
                        <li><a href="cart.php">Giỏ hàng</a></li>
                        <li><a href="checkout.php">Thanh toán</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>