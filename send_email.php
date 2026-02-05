<<<<<<< Updated upstream
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $to = $_POST["email"];
    $message = $_POST["message"];
    $subject = "💌 A Secret Valentine Message";
    $headers = "From: secretvalentine@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully 💖";
    } else {
        echo "Oops… something went wrong 😢";
    }
}
?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Message Sent Successfully!</h1>
</body>
</html>
>>>>>>> Stashed changes
