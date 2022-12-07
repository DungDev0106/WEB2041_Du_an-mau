<?php
    // show_array($list_product);
    // show_array($list_cate);
    if(isset($_POST['search_cate_name'])){
        echo "tim sp:".$name_cate;
    }
    show_array($cate_name);
    echo "Số sp: ".count($list_product);
    if(isset($_POST['search_cate_name'])){
        echo  "<br>tên sp cần tìm".$name_cate;
    }
    
    
?>
<!-- 
    echo ($cate['cate_id'] == $_GET['cate_id']) ? $cate['cate_name'] : ""
 -->
<div class="container max-w-full">
    <div class="w-5/6 mt-10 mx-auto text-xl">
        <a href="index.php">TRANG CHỦ</a>
        <span class="uppercase font-[500] "> / <?php echo $cate_name['cate_name']?></span>
    </div>
    <a href="index.php"></a>
    <div class="content w-5/6 mt-10 mx-auto grid grid-cols-5">  
        <?php foreach($list_product as $pro){
        ?>
            <div class="content-item text-center space-y-2">
            <a href="index.php?act=detail_pro&pro_id=<?php echo $pro['pro_id']?>">
                <img class="w-full bg-clip-padding bg-gray-200" src="<?php echo substr($pro['pro_image'], 3);?>" alt="">
            </a>
            <span class="text-slate-400"><?php foreach($list_cate as $cate){
                echo ($cate['cate_id'] == $pro['cate_id'] ? $cate['cate_name'] : ""); // Hiển thị category
            }?></span>
            <!-- <p><?php echo ($list_cate['cate_id'] == $pro['cate_id'] ? $list_cate['cate_name'] : "")?></p> -->
            <a href="index.php?act=detail_pro&pro_id=<?php echo $pro['pro_id']?>">
                <p class="text-teal-800 text-xl fold-semibold  "><?php echo $pro['pro_name']?></p>
            </a>
            
            <p class="px-2 text-red-600 font-bold">
                <?php echo $pro['pro_price'] ." đ"?>
            </p>
            <p class="px-2">
                Giá KM
            </p>
        </div> <!-- End .content-item-->
        <?php    
        }
        ?>
    </div> <!-- End .content -->
</div><!-- End .container-->    