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

<body style="background:url('./assets/purple-transformed.jpeg');background-repeat: no-repeat;background-size: cover;">

    <div class="backdrop"></div>

    <div class="container">
        <div class="header">
            <h2>JLEMM</h2>
            <h1>Are you ready?</h1>
            <form action="./functions/logout.php">
                <button class="auth-btn" type="submit">
                    <div class="text">Logout</div>
                </button>
            </form>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cards">
                        <div class="card">
                            <h3>HASHING FUNCTION</h1>
                                <p>A hashing function is a mathematical algorithm that generates a fixed-length output
                                    value from a variable-length input value. The output is usually a fixed length and
                                    designed to be unique so that it can be used to identify the original data.</p>
                                <a class="btn" type="button" href="assets/hashing.py" download>
                                    <strong>🚀DOWNLOAD</strong>
                                    <div id="container-stars">
                                        <div id="stars"></div>
                                    </div>

                                    <div id="glow">
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                    </div>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cards">
                        <div class="card">
                            <h3>FILE ENCRYPTION UTILITY</h1>
                                <p>File Encryption is used to encrypt and secure files on a computer or other digital
                                    device. Its main purpose is to protect the confidentiality and integrity of our data
                                    by converting it into an unreadable format using encryption algorithms. In this
                                    activity, we used the Caesar cipher algorithm to encrypt and decrypt text. It is a
                                    simple substitution cipher technique that involves replacing each letter in the
                                    plaintext with another letter found in a fixed number of positions down the
                                    alphabet.</p>
                                <a class="btn" type="button" href="assets/appdev.py" download>
                                    <strong>🚀DOWNLOAD</strong>
                                    <div id="container-stars">
                                        <div id="stars"></div>
                                    </div>

                                    <div id="glow">
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                    </div>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>


    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="./js/swiper.js"></script>
</body>

</html>