<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime chat App</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"/>
    <!-- Font Awesome (fas fa-  아이콘 사용) -->
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>UserID</label>
                    <input type="text" name ="uid" placeholder="UserID" required>
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
            <div class="link">이미 계정이 있으신가요? <a href="#">로그인</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>
</html>