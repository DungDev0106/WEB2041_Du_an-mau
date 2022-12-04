<?php
    function add_pro($pro_name, $pro_price, $target_file, $pro_desc, $cate_id){
        $sql_add_pro = "INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_image`, `pro_desc`, `cate_id`) VALUES (NULL, '{$pro_name}', '{$pro_price}', '{$target_file}', '{$pro_desc}','{$cate_id}')";
        connect($sql_add_pro);
    }

    function queryAllPro($key_word, $cate_id){
        $query_pro = "SELECT * FROM `products` WHERE 1";
        if($key_word != ""){
            $query_pro.= " AND pro_name like '%{$key_word}%'";
        }
        if($cate_id > 0){
            $query_pro.= " AND cate_id = '{$cate_id}'";
        }
        $query_pro.= " ORDER BY pro_id";
        $list_pro = getAll($query_pro);
        return $list_pro;
    }

    function queryOnePro($pro_id){
        $query_one_pro = "SELECT * FROM products WHERE pro_id = '{$pro_id}'";
        $one_pro = getOne($query_one_pro);
        return $one_pro;
    }
    function update_pro($pro_id, $pro_name, $pro_price, $target_file, $pro_desc, $cate_id){
        if(empty($target_file)){
            $update_pro = "UPDATE `products` SET pro_name='{$pro_name}', pro_price='{$pro_price}', pro_image = '{$target_file}, pro_desc = '{$pro_desc}', cate_id = '{$cate_id}' WHERE pro_id = '{$pro_id}'";
        } else{
            $update_pro = "UPDATE `products` SET pro_name='{$pro_name}', pro_price='{$pro_price}', pro_desc = '{$pro_desc}', cate_id = '{$cate_id}' WHERE pro_id = '{$pro_id}'";
        }
        connect($update_pro);
    }
    function delete_pro($pro_id ){
        $delete_pro = "DELETE FROM `products` WHERE pro_id = '{$pro_id}'";
        connect($delete_pro);
    }

    function query_pro_home(){
        $select_pro = "SELECT * FROM `products` WHERE 1 ORDER BY pro_id LIMIT 0,9";
        $list_pro_home = getAll($select_pro);
        return $list_pro_home;
    }
?>