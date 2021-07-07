<!DOCTYPE html>
<html>
    <head>
    <title> Rejoins-nous à Epitech, c'est cool!</title>
    </head>
    <body>
    <?php
        if (isset($_POST["name"])) {
            echo "Hello ".$_POST["name"];
        }
        else {
        ?>
        <form action= "index.php" method="post">
            <p>Votre nom : <input type="text" name="name" /></p>
            <p><input type="submit" value="Submit"></p>
        <?php
        }
        ?>
        </form>

    </body> 
</html>