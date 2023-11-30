<div class="col-md-3">
	
    <h3 class="sidebar-title">Danh mục sản phẩm</h3>
    <hr />
    <?php if(isset($loai)){
        ?>
    <ul class="list-group">
        <a href="product.php" class="list-group-item">Tất cả sản phẩm</a>
        <?php 
        foreach($allloai as $loaisp){
            if($loaisp == $loai){
            ?>
            <p class="list-group-item active"><?php echo $loaisp->ten_loai?></p>
            <?php
        }
        else{
        ?>
        <a href="product.php?loai=<?php echo $loaisp->id_loai?>" class="list-group-item"><?php echo $loaisp->ten_loai?></a>
            <?php
        }
    }
        ?>
    </ul>
    <?php 
    }
    else{
        ?>
    <ul class="list-group">
        <a href="product.php" class="list-group-item active">Tất cả sản phẩm</a>
        <?php 
        foreach($allloai as $loaisp){
        ?>
        <a href="product.php?loai=<?php echo $loaisp->id_loai?>" class="list-group-item"><?php echo $loaisp->ten_loai?></a>
            <?php
        }
        ?>     
    </ul>
    <?php 
    } ?>    	
</div>