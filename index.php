<?php
include ('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecretValentine</title>
    <link rel="stylesheet" href="style.css">
    <link  rel="icon" href="envelopee.png">
</head>
<body>

    <div id="header">
        <h1>Welcome to SecretValentine</h1>
    </div>

    <div id="description">
        <h2>Find Your Secret Valentine</h2>
        <p>Join our community and discover your secret valentine today!</p>
    </div>

    <div id="email">
        <form action="send_email.php" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Send</button>
        </form>
    </div>

    <div id="credits">
        <p>Happy Valentine's Day!
        Made with love by [Annelien/Marlise]
        </p>
    </div>

</body>

</html>