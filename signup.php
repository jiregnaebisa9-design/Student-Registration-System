<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpport" content="width=device-width, initial-scale=1.0" <title>Homepage</title>

    <head>
        <style>
            body {
                background-color: #9dfdeb;
            }

            .bar {
                display: flex;
                background-color: (99, 88, 99);
                color: #9dfdeb;
                padding: 4px;
            }

            .foot ul {
                display: flex;
                gap: 5%;
                position: right;
                padding-left: 20%;
                padding-top: 20px;
            }

            h1 {
                padding-left: 20%;
            }

            ul li a {
                text-decoration-line: none;
                color: white;
            }

            .main {
                height: 70vh;

            }

            #frm {
                background-color: white;
                width: 800px;
                margin: auto;
                margin-top: 30px;
                padding: 10px;
                padding-top: 30px;
                text-align: center;
                font-weight: bold;
            }

            #text {
                height: 40px;
                width: 100px;
                border-radius: 8px;
                borde: solid 1px #ccc;
                pading: 4px;
                font-size: 14px;
                cursor: pointer;
            }

            #button {
                width: 100px;
                height: 50px;
                border-radius: 4px;
                cursor: pointer;
                background-color: rgb(54, 77, 69);
                color: white;
                font-weight: bold;
            }

            img {
                width: 100%;
                height: 70vh;
            }

            .foot {
                background-color: rgb(99, 100, 99);
                padding: 10px;
                text-align: center;
                color: white;
            }

            ul li {
                list-style-type: none;
            }
        </style>

    <body>
        <div class="foot">
            <h1>Getema Secondary School SRS</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Aboutus</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="signup.php"
                        style="background-color: rgb(54, 200, 59);padding: 5px;padding-left: 15px;padding-right: 15px;">Signup</a>
                </li>
                <li><a href=""
                        style="background-color: rgb(54, 200, 59);padding: 5px;padding-left:15px;padding:15px;">Login</a>
                </li>
            </ul>
        </div>

        <div id="frm">
            <h2 style="font-family: 'Times New Roman', Times, serif; color: rgb(163, 54, 59)">Signup form</h2>
            <br>
            <form action="" method="post">
                <input type="text" name="usernmae" placeholder="user name" required><br><br>
                <input type="email" name="email" placeholder="email" required><br><br>
                <span style="font-weight:  normal;">Gender</span><br>
                <select name="gender" id="text">
                    <option value="">Male</option>
                    <option>female</option>
                    <select><br><br>
                        <input type="password" name="password" placeholder="password" required><br><br>
                        <input type="password" name="password" placeholder="Retype password" required><br><br>
                        <input type="submit" id="button" name="registar" value="sign up">
        </div>
        <img src="IMG_20261106_102615_834.jpg" alt="">

        <div class="foot">
            <h2>Getema Secondary School SRS &copy;@2026 Reserved</h2>
        </div>
    </body>
</head>
</head>

</html>