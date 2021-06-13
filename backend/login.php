<!DOCTYPE html>
<html lang="pl">
    <head>
        <script src="script.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baza danych i PHP</title>
    </head>
    <body>
        <div style="margin: 3%;">
            <form method="POST" action="accont.php">
                <input name="login" placeholder="Login" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;"><br /><br />
                <input name="password" type="password" placeholder="********" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;"><br /><br />
                
                

                <input type="submit" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;" value="Zaloguj">
                <a href="registerForm.php" style="text-decoration:none; border: solid 1px black; background-color: lightgray; padding: 10px;" value="">Zarejestruj</a>
            </form>
        </div>
    </body>
</html>