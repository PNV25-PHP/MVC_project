<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Poppins&display=swap');
    </style>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <title>Register - page</title>
    <style>
        .container {
            width: 100%;
        }

        .block_contain-lefl {
            width: 795px;
        }

        .block_contain-right {
            width: 100%;
            background: #C3C8CF;
        }

        .material-symbols-outlined {
            cursor: pointer;
        }

        #form {
            display: grid;
            width: 676px;
            margin-left: 10%;
            margin-top: 5%;
            gap: 5px;
        }

        #form>input:last-child {
            padding: 2px;
            border-radius: 10px;
            background-color: #4285F4;
            width: 175px;
            height: 30px;
        }

        #form>#sub {
            margin: 0 23%;
            /* margin-top: 10px; */
            cursor: pointer;
        }

        p,
        h3 {
            text-align: center;
        }

        label {
            color: #000;
            font-family: Poppins;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        span {
            color: #1C3AA9;
            font-family: Poppins;
            font-size: 20px;
            font-style: italic;
            line-height: normal;
            font-weight: 200;
        }

        .title {
            color: var(--Dark-Blue, #1F2B6C);
            /* Poppin regular 50 */
            font-family: Poppins;
            font-size: 50px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        #front-text {
            color: #000;
            font-family: Beau Rivage;
            font-size: 50px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        #front-text {
            margin: 10% 0px 10% 0px;
        }

        img {
            width: 100%;
        }

        @media screen and (max-width: 768px) {
            .block_contain-right {
                display: none;
            }

            .form-info {
                width: 70%;
                height: 30px;
                border: 1px solid black;
                border-radius: 20px;
                text-align: left !important;
                padding: 10px;
            }

            #form>input:last-child {
                padding: 2px;
                border-radius: 10px;
                background-color: #4285F4;
                width: 175px;
                height: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="container ">
        <div class="grid-cols-2 flex font-Poppins">
      
            <div class="block_contain-lefl col-span-1">
                <span class="material-symbols-outlined ml-3 mt-3">arrow_back</span>
                <h3 class="title">Mental Health Care</h3>
                <p>Vui lòng nhập mật khẩu và email để tiếp tục</p>
               
                <form action="" method="post" id="form">
                    <label>Email:</label>
                    <input class=" pl-20 shadow-md mt-3 mb-5 border border-2 rounded-lg border-gray-300 h-10" style="width: 500px; padding-left: 10px" value="" placeholder="" type="email">
                    <label>Mật Khẩu:</label>
                    <input class=" pl-3 shadow-md mt-3 mb-5  border border-2 rounded-lg border-gray-300 h-10" style="width: 500px;" value="" placeholder="" type="password">
                    <button type="submit" class="text-white mb-2 border border-2 rounded-lg bg-blue-600 h-9" style="width: 500px;">Tiếp tục</button>
                    <p class="mb-2" style="width:500px">Hoặc</p>
                    <button type="submit" class="flex bg-blue-900 mb-5 border border-2 rounded-lg border-blue-600 h-9" style="width: 500px;">
                        <span class="iconify " data-icon="flat-color-icons:google" style="color: #111; font-size: 30px ; margin-left:120px"></span>
                        <p class="justify-center ml-3 mt-1 text-white">Đăng nhập bằng google</p><br>
                    </button>
                    <a href="send_email.php"  class="mb-2 text-center italic text-blue-900" style="width:500px">Quên mật khẩu?</a>
                </form>

            </div>
            
            <div class="block_contain-right col-span-1">
                <p id="front-text">"Vươn tới sức khỏe tâm thần với sự tiện lợi trực tuyến!"</p>
                <img src="https://image.baophapluat.vn/1200x630/Uploaded/2023/athlraqhpghat/2022_10_11/minh-hoa-1617.jpg" alt="bac si">
            </div>
        </div>
    </div>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Poppins&display=swap');
    </style>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.5.7/src/index.min.js
"></script>

</head>

<body id='body'>

</body>

<script src="./Test/Components/Button.js"></script>
<script src="./Test/Components/Input.js"></script>


<script>
    function XXX() {
        console.log("XXX")
    }

    Button
        .new()
        .setOnClick(() => {
            console.log("abc")
        })
        .setLabel("XXX")
        .appendTo("body")

    Button
        .new()
        .setLabel("ABC")
        .setOnClick(XXX)
        .setCustomClass("w-[500px] mb-5")
        .appendTo("body")

    Input
        .new()
        .setLabel("Input")
        .setCustomClass("w-[500px]")
        .appendTo("body")
</script>

</html>