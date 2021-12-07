<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
        $output = "";

        $sql = "SELECT * FROM groupmsg 
                LEFT JOIN users ON users.unique_id = groupmsg.unique_id
                ORDER BY group_msg_id";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $msg_date = $row['msg_date'];
                $time = substr($msg_date,-8,-3);
                if($row['unique_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <div><p class = "time">'.$time.'</p></div> 
                                    <div><p class = "msg">'. $row['msg'] .'</p></div>
                                </div>
                                </div>';
                }else{ // msg수신자
                    $output .= '<div class="chat incoming">
                                <img src="php/images/'. $row['img'] .'" alt="">
                                <div class="details">
                                    <div><p class = "msg">'. $row['msg'] .'</p></div>
                                    <div><p class = "time">'.$time.'</p></div> 
                                </div>
                                </div>';
                }
            }
            echo $output;
        }
    }else{
        header("../login.php");
    }
?>