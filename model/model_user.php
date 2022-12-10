<?php
    function add_user($email, $fullName, $password, $repass){
        $sql = "INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_pass`, `user_repass`, `user_role`) VALUES (NULL, '{$email}', '{$fullName}', '{$password}', '{$repass}', '0');";
        connect($sql);
    }
?>