<?php
    include "model/connect.php";
    include "model/model_category.php";
    include "model/model_product.php";
    include "view/header.php";
    include "model/model_user.php";
    

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
                if(isset($_POST['cate_name']) && ($_POST['cate_name'] != "")){
                    $name_cate = $_POST['cate_name']; // lấy tên ở ô tìm kiếm
                    
                } else{
                    $name_cate = "";
                }

                if(isset($_GET['cate_id']) && ($_GET['cate_id'] > 0)){
                    $cate_id = $_GET['cate_id'];
                    $cate_name = query_cate_name($cate_id); // Lấy tên danh mục sản phẩm theo id
                } else{
                    $cate_id = 0;
                }
                
                $list_cate = queryAll();// Lấy tất cả danh mục
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
            // case 'signin':
            //     if(isset($_POST['sign_in'])){
            //         $email = $_POST['email'];
            //         $password = $_POST['password'];
            //         add_user($email, $password);
            //         $thong_bao = "<span class='text-red-500'>Đăng kí tài khoản thành công. Vui lòng đăng nhập để mua hàng</span>";
            //     }
            //     include "view/account/signin.php";
            //     break;    
            case 'signup':
                if(isset($_POST['sign_up'])){
                    $email = $_POST['email'];
                    $fullName = $_POST['fullName'];
                    $password = $_POST['password'];
                    $repass = $_POST['repass'];
                    add_user($email, $fullName, $password, $repass);
                    $thong_bao = "<span class='mt-2 text-red-500'>Đăng kí tài khoản thành công. Vui lòng đăng nhập để mua hàng</span>";
                }
                include "view/account/signup.php"    ;
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