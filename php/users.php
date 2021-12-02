<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn,"SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
    $output = "";

    if(mysqli_num_rows($sql) == 1) {
        $output .= "채팅할 수 있는 사용자가 없습니다.";
    }elseif(mysqli_num_rows($sql) > 0){
       include "data.php";
    }
    echo $output;
?> 