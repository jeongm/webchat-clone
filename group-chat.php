<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <?php
                    include_once "php/config.php";
                    $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id");
                    if(mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="chatting.png" alt="">
                <div class="details">
                    <span>단체채팅</span>
                </div>
            </header>
            <div class="chat-box">
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden > 
                <!-- unique_id가 난가?? 내가 전송자? msg_sender?-->
                <!-- <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden > -->
                <!-- 첫 번째가 전송자(msg_sender_id), 두 번째가 수신자 (msg_receiver_id) -->
                <input type="text" name="message" class="input-field" placeholder="메시지 입력">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    <script src="javascript/group-chat.js"></script>

</body>
</html>