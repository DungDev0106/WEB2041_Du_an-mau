<?php
    include "model/connect.php";
    include "model/model_category.php";
    include "model/model_product.php";
    include "view/header.php";

    $new_pro = query_pro_home();
    $list_cate = queryAll();
    $list_top_10 = query_pro_top10();
    if(isset($_GET['act']) && !empty($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'information':
                include "view/information.php";
                break; 
            case 'list_product':
                if(isset($_POST['cate_name']) && (!empty($_POST['cate_name']))){
                    $name_cate = $_POST['cate_name'];
                    
                } else{
                    $name_cate = " ";
                }

                if(isset($_GET['cate_id']) && ($_GET['cate_id'] > 0)){
                    $cate_id = $_GET['cate_id'];
                    
                } else{
                    $cate_id = 0;
                }
                $list_cate = queryAll();// Lấy tất cả danh mục
                $cate_name = query_cate_name($cate_id); // Lấy tên danh mục sản phẩm theo id
                $list_product = queryAllPro($name_cate, $cate_id); // Lấy sản phẩm theo danh mục
                include "view/list_product.php";
                break;    
            case 'detail_pro':
                if(isset($_GET['pro_id']) && ($_GET['pro_id'] > 0)){
                    $pro_id = $_GET['pro_id'];
                    $detail_pro = queryOnePro($pro_id);

                    $similar_pro = query_similar_pro($pro_id, $detail_pro['cate_id']);
                    include "view/detail_pro.php";
                } else{
                    include "view/body.php";
                }
                break;
            case 'introduction':
                include "view/introduction.php";
                break;
            default:
                include "view/body.php";
                break;
        }
    } else{
        include "view/body.php";
    }
    include "view/footer.php";

?>