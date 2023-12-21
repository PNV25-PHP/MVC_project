<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Poppins&display=swap');
    </style>
    <link rel="stylesheet" href="../root/CSS/Register.css">
    <title>Register - page</title>
</head>

<body>
    <div class="container">
        <div class="grid-cols-2 flex">
            <!-- bên phải -->
            <div class="block_contain-lefl col-span-1">
                <span class="material-symbols-outlined">arrow_back</span>
                <h3 class="title">Mental Health Care</h3>
                <p id="instructure">Nhập thông tin của bạn </p>
                <!-- nhập thông tin -->
                <form action="" method="post" id="form">
                    <label>Họ tên:</label>
                    <input class="form-info" name="" value="" placeholder="" type="text">
                    <label>Email:</label>
                    <input class="form-info" name="" value="" placeholder="" type="email">
                    <label>Số điện thoại:</label>
                    <input class="form-info" name="" value="" placeholder="" type="text">
                    <label>Mật Khẩu:</label>
                    <input class="form-info" name="" value="" placeholder="" type="password">
                    <label>Nhập lại mật khẩu:</label>
                    <input class="form-info" name="" value="" placeholder="" type="password">
                    <!-- <input type="submit" id="sub" value="Đăng ký"></input> -->
                    
                </form>
                <p>Bạn đã có tài khoản?<a href=""><span> Đăng nhập ngay</span></a></p>
            </div>
            <!-- bên trái -->
            <div class="block_contain-right col-span-1">
                <p id="front-text">"Vươn tới sức khỏe tâm thần với sự tiện lợi trực tuyến!"</p>
                <img src="../root/images/register-page.png" alt="bac si">
            </div>
        </div>
    </div>
    <script src="../Test/Components/Button.js"></script>
    <script>
        Button2
            .new()
            .setLabel("Đăng ký")
            .setid("sub")
            // .setcustomClass("p-2 rounded-2xl bg-blue-500 w-19 h-30")
            .setOnClick("../../login.php")
            .appendTo("form")
    </script>
</body>
    
</html>