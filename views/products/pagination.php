<div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <?php for($x=1; $x<= $pagecount;$x++){
                              ?>
                            <li><a href="product.php?page=<?php echo $x ?><?php if(isset($searchlist)) {?>&search=<?php echo $_GET["search"];
                            }?><?php if(isset($loai)) {?>&search=<?php echo $_GET["loai"];
                            }?>"><?php echo $x; ?></a></li>
                            <?php
                            }
                            ?>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                         
                    </div>
                </div>
                
</div>