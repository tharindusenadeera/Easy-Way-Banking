<?php
require_once 'header.php';
require_once 'navbar.php';
?>
<section class="signing-sec">
    <div class="col-sm-push-4 col-sm-5">
        <div class="signing-wrp">
            <div class="signing-form">
                <h1>Sign-Up Today</h1>
                <form action="./functions/signupcontroller.php" method="post">
                    <div class="input-wrp">
                        <input type="text" placeholder="Username" name="username">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="input-wrp">
                        <input type="email" placeholder="E-mail" name="email">
                        <span><i class="fa fa-envelope"></i></span>
                    </div>
                    <div class="input-wrp">
                        <input type="password" placeholder="Password" name="password">
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="input-wrp">
                        <button name="submit">Sign-Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>