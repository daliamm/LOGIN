<?php
require "header.php";
?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Reset your password</h1>
            <p> An e-mail will be send to you with instructions on how to reset your password.</p>
            <form action="reset-requset.php" method="">
                <input type="text" name="email" placeholder="Enter your e-mail address">
                <button type="submit" name="reset-requset-submit">Recevie new password by new e-mail </button>
            </form>
        </section>
    </div>
</main>
<?php
require "footer.php"
?>