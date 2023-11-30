<div class="col-sm-4">
                	<div class="single-sidebar">
                    <br />
                    <br />
                	<div class="ui-widget">
                        <form action="product.php" method="get">
                            <input type="text" id="searchbar" name="search" placeholder="Nhập tên sản phẩm ở đây">
                            
                        </form>
                    </div>    
                    </div>
                </div>
<script>
  $( function() {
    var arrtensp = <?php echo json_encode($arrtensp); ?>;
    $( "#searchbar" ).autocomplete({
      source: arrtensp
    });
  } );
  </script>