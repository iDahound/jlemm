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

<body style="background:url('assets/purple-transformed.jpeg');background-repeat: no-repeat;background-size: cover;">

    <div class="backdrop"></div>

    <div class="container">
        <div class="auth cards">
            <form class="card" method="POST" action="./functions/register_user.php">

                <h1>Create an account</h1>

                <div class="fields">

                    <div class="textfield">
                        <label for="">Username</label>
                        <input type="text" name="name">
                    </div>
                    <div class="textfield">
                        <label for="">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="textfield">
                        <label for="">Password</label>
                        <input type="password" name="password">
                    </div>
                    <br>
                    <div class="actions">

                        <button style="align-self: center" class="btn" type="submit">
                            <strong>Create Account</strong>
                            <div id="container-stars">
                                <div id="stars"></div>
                            </div>

                            <div id="glow">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </button>
                        <a href="login.php">Sign In</a>
                    </div>

                </div>
            </form>
        </div>


    </div>
</body>

</html>