<?php
require_once 'header.php';
$_SESSION["username"] = null;
require_once 'navbar.php';
?>

<section class="signing-sec">
    <div class="col-sm-push-4 col-sm-5">
        <div class="signing-wrp">
            <div class="signing-form">
                <h1>Sign-in to Your Account</h1>
                <form action="./functions/signincontroller.php" method="post">
                    <div class="input-wrp">
                        <input type="text" placeholder="Username" name="username">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div class="input-wrp">
                        <input type="password" placeholder="Password" name="password">
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="input-wrp">
                       <button name="submit">Sign-in</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</section>