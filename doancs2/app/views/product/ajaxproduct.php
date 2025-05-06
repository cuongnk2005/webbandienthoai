<?php if($dssp->num_rows == 0){
 
  ?>
  <div>

  <img class="img-fluid" style="margin: auto" src="<?php echo _WEB_ROOT_ ?>/public/asset/images/product_404.png"
  alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
  </div>
  <?php
  
} else {
 
    ?>
<div class="row">
    <!-- product -->
    <?php while ($row = mysqli_fetch_array($dssp)) {

        ?>
         <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 mb30 ">
                                        <a href="<?php echo _WEB_ROOT_?>/Product/details/<?php echo $row['product_name'].'?ProductColor_id='.$row['id'] ?>">
                                            <div class="product-block product-ac">
                                                <div class="product-img"><img
                                                        src="<?php echo _WEB_ROOT_ . '/public/asset/images/product1/' . $row['image'] ?>"
                                                        alt=""></div>
                                                <div class="product-content">
                                                    <h5><a href="#" class="product-title"><?php echo $row['product_name'] ?>
                                                            <strong>(<?php echo $row['internal_storage'] ?>,
                                                                <?php echo $row['color']?>)</strong></a></h5>
                                                    <div class="product-meta"><a href="#"
                                                            class="product-price"><?php echo $row['discounted_price'] ?>đ</a>
                                                        <a href="#"
                                                            class="discounted-price"><?php echo $row['original_price'] ?>đ</a>
                                                        <br>
                                                        <span class="offer-price">20%off</span>
                                                    </div>
                                                    <div class="shopping-btn">
                                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                                        <a href="#" class="product-btn btn-cart"><i
                                                                class="fa fa-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
    <?php } ?>
    <!-- /.product -->
    <!-- product -->







</div>
<div class="row">
    <!-- pagination start -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- <div class="st-pagination">
                                <ul class="pagination" id="pagination">
                                    <li><a href="#" aria-label="previous"><i class="fa fa-angle-left"
                                                style="font-size: 16px;"></i></a>
                                    </li>
                                    <li class="active1" data-page="2"><a class="pagination-item active" href="#">1</a></li>
                                    <li ><a class="pagination-item"  href="#">2</a></li>
                                    <li ><a class="pagination-item" href="#">3</a></li>
                                    <li > <a class="pagination-item"  href="#" aria-label="Next"><i class="fa fa-angle-right"
                                                style="font-size: 16px;"></i></li>
                                </ul>
                            </div> -->
        <div class="pagination-container">

            <ul class="pagination1" id="pagination1">
                <li><a href="#" onclick="previous1(this)"><span id="previous" data-page="1" aria-label="previous"><i class="fa fa-angle-left"
                                style="font-size: 16px;"></i></a>
                    </span>
                </li>
                <?php if ($pagecurrent == 1){
                 echo '  <li><a href="#"><span page="1" class="active pagination-item">1</span></a> </li>';
                }else {
                    echo '  <li><a href="#"><span page="1" class="pagination-item">1</span></a> </li>';
                }
                ?>
              
                <?php for ($i = 2; $i <= $pagenumber; $i++) {
                         if($pagecurrent == $i){
                            echo '<li><a href="#"><span href="#" class="active pagination-item"
                                page="'.$i.'">'.$i.'</span></a>
                    </li>';
                         } else {
                           echo '<li><a href="#"><span href="#" class="pagination-item"
                                page=" '.$i.'">'.$i.'</span></a>
                    </li>';
                         }
                        }
                    ?>
                <li><a href="#" onclick="next(this)"> <span id="next"><i class="fa fa-angle-right" style="font-size: 16px;"></i></a> </li>
            </ul>



        </div>
    </div>
    <!-- pagination close -->
</div>
   <script>
   </script>
    <?php
}
?>