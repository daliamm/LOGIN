<?php?>
<main>
    <div class="wrapper-main">
        <section class="section-default ">
            <h1>signup</h1>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"]== "emptyfields"){
                    echo' <p class="singnuperror">Fill in all fields</p>';
                }
                elseif($_GET["error"]=="invaliduidmail"){
                    echo' <p class="singnuperror">Invalid username and e-mail</p>';
                }
                elseif($_GET["error"]=="invaliduid"){
                    echo' <p class="singnuperror">Invalid username </p>';
                }
                elseif($_GET["error"]=="invalidmail"){
                    echo' <p class="singnuperror">Invalid e-mail</p>';
                }
                elseif($_GET["error"]=="passwordcheck"){
                    echo' <p class="singnuperror">Your passwords do not match</p>';
                }
                elseif($_GET["error"]=="usertaken"){
                    echo' <p class="singnuperror">Username is already taken</p>';
                }
            }
            elseif(isset($_GET["signup"])){
                if($_GET["signup"]=="success"){
                    echo' <p class="singnupsuccess">Signup successful</p>';
                }
            }
            ?>
            <form  class="form-signup" action="signup.php" method="post"></form>
           <?php
           if(!empty($_GET["uid"])){
            echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
           } 
           else{
            echo '<input type="text" name="mail" placeholder="Username">';

          }
          if(!empty($_GET["mail"])){
            echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
           } 
           else{
            echo '<input type="text" name="mail" placeholder="E-mail">';
           }
           ?>
<input type="password" name="pwd" placeholder="Password">
<input type="password" name="pwd-repeat" placeholder="Repeat password">
<button type="submit"name="signup-submit">Signup</button>

        </form>




        <?php
        if(isset($_GET["newpwd"])){
            if($_GET["newpwd"]=="passwordupdated"){
                echo'<p class="signupsuccess">Your password has been reset </p>';
            }
        }
        
        ?>
        <a href="reset-password.php">Forgot your password?</a>









        </section>
    </div>
</main>
<?php
require "footer.php"
?>
