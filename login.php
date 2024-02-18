<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body style="background:url(assets/purple-transformed.jpeg);background-repeat: no-repeat;background-size: cover;">

    <div class="backdrop"></div>

    <div class="container">
        <div class="auth cards">
            <form class="card" method="POST" action="./functions/login_user.php">

                <h1>Welcome to JLEMM</h1>

                <div class="fields">

                    <div class="textfield">
                        <label for="">Email</label>
                        <input type="text" name="email" type="email">
                    </div>
                    <div class="textfield">
                        <label for="">Password</label>
                        <input type="text" name="password" type="password">
                    </div>
                    <br>
                    <?php if (isset($_SESSION['msg'])) echo $_SESSION['msg'] ?>
                    <div class="actions">
                        <button class="btn" submit="button">
                            <strong>Sign In</strong>
                            <div id="container-stars">
                                <div id="stars"></div>
                            </div>

                            <div id="glow">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </button>
                        <a href="register.php">Create an account</a>
                    </div>

                </div>
            </form>
        </div>


    </div>
</body>

</html>