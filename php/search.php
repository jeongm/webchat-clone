<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE uname LIKE '%{$searchTerm}%'");
    if(mysqli_num_rows($sql) > 0) {
        include "data.php";
    }else{
        $output .= "검색한 사용자를 찾을 수 없습니다.";
    }
    echo $output;
?>