<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>User</label>
                    <input type="text" name ="uname" placeholder="name" required>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name ="email" placeholder="Email@address" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name ="password" placeholder="Password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>이미지 선택</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="회원가입">
                </div>
            </form>
            <div class="link">이미 계정이 있으신가요? <a href="login.php">로그인</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>