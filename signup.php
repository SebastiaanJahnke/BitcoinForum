<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Füllen Sie alle Felder aus</p>';
                    }
                    else if ($_GET["error"] == "invaliduidmail") {
                        echo '<p class="signuperror">Ungültiger Benutzername und Email</p>';
                    }
                    else if ($_GET["error"] == "invaliduid") {
                        echo '<p class="signuperror">Ungültiger Benutzername</p>';
                    }
                    else if ($_GET["error"] == "invalidmail") {
                        echo '<p class="signuperror">Ungültige Email</p>';
                    }
                    else if ($_GET["error"] == "passwordcheck") {
                        echo '<p class="signuperror">Ihre Passwörter stimmt nicht überein</p>';
                    }
                    else if ($_GET["error"] == "usertaken") {
                        echo '<p class="signuperror">Benutzername ist bereits vergeben</p>';
                    }
                }
                ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </section>
    </div>    
</main>