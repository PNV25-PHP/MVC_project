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
        <div class="grid-cols-1 flex">
            <!-- bên phải -->
            <div class="block_contain-lefl col-span-1">
                <span class="material-symbols-outlined">arrow_back</span>
                <h3 class="title">Mental Health Care</h3>
                <p id="instructure">Nhập thông tin của bạn </p>
                <!-- nhập thông tin -->
                <form action="" method="post" id="form">
                    <div id="name"></div>
                    <div id="em"></div>
                    <div id="sdt"></div>
                    <div id="mk1"></div>
                    <div id="mk2"></div>
                </form>
                <div id="nut"></div>
                <p id="fogettext">Bạn đã có tài khoản?<a href="../send_email.php">Đăng nhập ngay</a></p>
            </div>
            <!-- bên trái -->
            <div class="block_contain-right col-span-1">
                <p id="front-text">"Vươn tới sức khỏe tâm thần với sự tiện lợi trực tuyến!"</p>
                <img src="../root/images/register-page.png" alt="bac si">
            </div>
        </div>
    </div>
    <script src="../Test/Components/Button.js"></script>
    <script src="../Test/Components/Input.js"></script>
    <script>
        Button2
            .new()
            .setLabel("Đăng ký")
            .setcustomClass("text-center")
            .setid("sub")
            .setOnClick("../../login.php")
            .appendTo("nut")

        Input
            .new()
            .setPlaceholder("Nhập tên của bạn")
            .setContent("Họ tên:")
            .setForlabel("name")
            .appendTo("name")

        Input
            .new()
            .setType("email")
            .setPlaceholder("Nhập mật khẩu của bạn")
            .setContent("Email:")
            .setForlabel("email")
            .appendTo("em")

        Input
            .new()
            .setPlaceholder("Nhập số điện của bạn")
            .setContent("Số điện thoại:")
            .setForlabel("Number")
            .appendTo("sdt")

        Input
            .new()
            .setType("password")
            .setPlaceholder("Nhập mật khẩu của bạn")
            .setContent("Mật Khẩu:")
            .setForlabel("password")
            .appendTo("mk1")

        Input
            .new()
            .setType("password")
            .setPlaceholder("Nhập lại mật khẩu của bạn")
            .setContent("Nhập lại mật khẩu:")
            .setForlabel("password")
            .appendTo("mk2")
    </script>
</body>

</html>