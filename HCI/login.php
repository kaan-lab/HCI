
<!DOCTYPE html>
<html>
    <head>
        <title>Event Manager</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body id="loginBody">
        <?php if(!empty($error_message)) { ?>
            <div class="errorMessage">
                <p>Error: <?=$error_message ?></p>
            </div>
        <?php } ?>

        <div class="container">
            <div class="logoText">
                <h1>em.</h1>
            </div>
            <div class="loginHeader">
                <h3>Event manager</h3>
            </div>
            <div class="loginBody">
                <form action="login.php" method="POST">
                    <div class="loginInput">
                        <label for="">Username</label>
                        <input placeholder="username" name="username" type="text" />
                    </div>
                    <div class="loginInput">
                        <label for="">Password</label>
                        <input placeholder="password" name="password" type="password" />
                    </div>
                    <div class="loginButton">
                        <button>login</button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
