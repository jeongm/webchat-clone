<?php
    // 데이터가 있는 php 폴더 안에 다른 php파일을 만듦
    // 검색어와 사용자 목록에서 users.php와 일부 동일한 코드필요
    while($row = mysqli_fetch_assoc($sql)){
        $output .=   '<a href="chat.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['uname'] .'</span>
                        <p>This is test message</p>
                    </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                    </a>';
    }
    // 이때 열린 chat.php?user_id=54887, 이 아이디를 사용하여 메시지 수신자 사용자를 식별함
?>