<?php
require_once 'header.php';
require_once 'navbar.php';
?>

<section class="appointment-sec">
    <div class="container">
        <h1>Request for an appointment</h1>

        <form action="./functions/appoinmentscontroller.php" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-wrp">
                        <span>First Name</span><br>
                        <input type="text" name="firstname">
                    </div>
                    <div class="input-wrp">
                        <span>Last Name</span><br>
                        <input type="text" name="lastname">
                    </div>
                    <div class="input-wrp">
                        <span>Contact Number</span><br>
                        <input type="text" name="contact_number">
                    </div>
                    <div class="input-wrp">
                        <span>Email</span><br>
                        <input type="email" name="email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-wrp">
                        <span>Why do you want to make an appointment?</span><br>
                        <textarea rows="5" name="reason"></textarea>
                    </div>
                    <div class="input-wrp">
                        <span>What is the date that you want to make an appointment?</span><br>
                        <input type="date" name="date">
                    </div>
                    <div class="input-wrp">
                        <span>Which time do you want to make an appointment?</span><br>
                        <input type="time" name="time">
                    </div>
                </div>
            </div>

            <button name="submit">Request</button>
        </form>
    </div>
</section>
