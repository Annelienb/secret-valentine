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
