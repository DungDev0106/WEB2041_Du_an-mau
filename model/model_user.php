<?php
    function add_user($email, $fullName, $password, $repass){
        $sql = "INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_pass`, `user_repass`, `user_role`) VALUES (NULL, '{$email}', '{$fullName}', '{$password}', '{$repass}', '0');";
        connect($sql);
    }
    function queryAllUser(){
        $sql = "SELECT * FROM `users` WHERE 1";
        $list_user = getAll($sql);
        return $list_user;
    }
    function queryOneUser($username, $password){
        $sql = "SELECT * FROM `users` WHERE user_name = '{$username}' AND user_pass = '{$password}'" ;
        $info_one_user = getOne($sql);
        return $info_one_user;
    }
    function edit_user($user_id, $email, $fullName, $password, $repass){
        $sql = "UPDATE `users` SET user_email='{$email}', user_name='{$fullName}', user_pass='{$password}', user_repass='{$repass}' WHERE user_id='{$user_id}'";
        // UPDATE `users` SET `user_name` = 'dungxibo update', `user_pass` = '12345678', `user_repass` = '12345678' WHERE `users`.`user_id` = 3;
        connect($sql);
    }
?>