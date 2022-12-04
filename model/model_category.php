<?php

    function add_cate($cate_name){ // Hàm thêm danh mục
        $sql_add_cate = "INSERT INTO `categories` VALUES (NULL, '$cate_name')";
        connect($sql_add_cate);
    }

    function queryAll(){ // Hàm lấy tất cả danh mục
        $query_cate = "SELECT * FROM categories ORDER BY cate_id";
        $list_cate = getAll($query_cate);
        return $list_cate;
    }
    function queryOne($cate_id){ // Hàm lấy 1 danh mục
        $query_one_cate = "SELECT * FROM categories  WHERE cate_id = '{$cate_id}'";
        $one_cate = getOne($query_one_cate);
        return $one_cate;
    }
    function update_cate($cate_id, $cate_name){ // Hàm cập nhật danh mục
        $update_cate = "UPDATE categories SET cate_name = '{$cate_name}' WHERE cate_id = '{$cate_id}'";
        connect($update_cate);
    }
    function delete_cate($cate_id){ // Hàm xóa danh mục theo id
        $delete_cate = "DELETE FROM categories WHERE cate_id = '{$cate_id}'";
        connect($delete_cate); 
    }

?>