<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
<<<<<<< HEAD
            $status = "오프라인";
=======
            $status = "Offline now";
>>>>>>> 0f11a7edebbf2bf5f3c84016bfdd8a1344070f0f
            // 사용자가 로그아웃하면 이 상태를 오프라인으로 업데이트하고
            // 사용자가 로그인하면 활성화 업데이트
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$logout_id}");
            if($sql){ //모든 사용자 상태를 오프라인으로 업데이트?
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{
        header("location: ../login.php");
    }


?>