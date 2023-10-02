<?php
$GLOBALS['title'] = "DeepPower";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>


<section class="contact">
    <div class="container">
        <div class="contact-title">
            <h1>Contact Us</h1>
            <p>DeepPower, Inc. <br>
                1633 W Innovation Way <br>
                4th floor <br>
                Lehi, UT 84043</p>
        </div>
        <div class="contact-form">
            <form action="./php/smartprocess.php" method="POST">
                <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                <div class="contact-form-btn">
                    <button type="submit" class="theme-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>


<?php
include('footer.php'); ?>