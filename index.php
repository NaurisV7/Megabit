<?php

include_once "classes/user_validation.php";

$check_error = new Validation();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megabit test</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/acb9678cb4.js" crossorigin="anonymous"></script>
</head>

<body class="flex">
    <!-- DIV To seperate two side of screen-->
    <div class="first_div">
        <!-- HEADER PART -->
        <header class="flex header">
            <div class="header_div">
                <a href="#" class="alogo">
                    <img src="image/Union.svg" class="logo">
                    <img src="image/pineapple..svg" class="pineapple">
                </a>
            </div>

            <nav class="header_nav">
                <div class="flex">
                    <a href="#" class="first_a anone">About</a>
                    <a href="#" class="anone">How it works</a>
                    <a href="#" class="anone">Contact</a>    
                </div>
            </nav>
        </header>
        <!-- BODY PART -->
        <div>
            <main class="main">
                <div class="winput mobdiv">
                    <h1 class="subscribe" >Subscribe to newsletter</h1>
                    <h4 class="first_h4">Subscribe to our newsletter and get 10% discount on pineapple glasses.</h4>
                    <hr class="vline">
                    <form action="" method="POST">
                        <div class="hover_input">
                            <input type="text" id="input" class="inputfield  focus_input" name="email" placeholder="Type your email address here...">
                            <button type="submit" class="button" id="button" value="submit" name="submit">
                                <img src="image/ic_arrow.svg" class="button_img">
                            </button>
                        </div>
                        <div id="container" class="container"> <?php echo $check_error->printError(); ?></div>
                        <input type="checkbox" id="checkbox" class="checkbox" name="checkbox">
                        <label for="checkbox" class="label_checkbox">
                            I agree to
                            <a href="#" class="label_a">terms of service</a>
                        </label>
                    </form>  
                </div>
            </main>
            <!-- FOOTER PART -->
            <footer>
                <hr class="hline">
                <div class="social">
                    <a href="#" class="afacebook">
                        <i class="fab fa-facebook-f facebook" id="facebook"></i>
                    </a>                
                    <a href="#" class="ainstagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="atwitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="ayoutube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </footer>
        </div>

    </div>
    <div class="img">
    </div>
    <script src="script.js"></script>
</body>
</html>


    