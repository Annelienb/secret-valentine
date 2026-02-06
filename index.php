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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="send_email.php" href="send_email.php">
</head>
<body>

    <div id="header">
        <h1>Welcome to Secret Valentine</h1>
    </div>

    <div id="description">
        <h2>Find Your Secret Valentine</h2>
        <p>Join our community and discover your secret valentine today!</p>
    </div>

    <div id="secretMessage">
        <form action="send_email.php" method="post">
            <input type="email" name="email" placeholder="Enter crush email" required>
            <button type="submit">Send</button>
            <input type="hidden" name="secret_valentine" value="<?php echo $secret_valentine; ?>">
            <textarea name="message" placeholder="Write a message to your secret valentine" required></textarea>
            <button type="button" id="heartButton">❤️</button>
        </form>
    </div>

    <div id="credits">
        <p>Happy Valentine's Day! <br>
        Made with ❤️ by Annelien/Marlise
        </p>
    </div>

    <?php
    $messages = [
  "Someone has been thinking about you 💌",
  "Your smile drives someone crazy 👀",
  "A secret admirer is closer than you think",
  "You made someone's day without knowing it"
];

    $randomMessage = $messages[array_rand($messages)];
?>

    <p><?php echo $randomMessage; ?></p>

    <script>
    const heartButton = document.getElementById('heartButton');
    const messageBox = document.getElementById("SecretMessage");

    heartButton.addEventListener('click', ()=>{
        messageBox.value += "❤️";
    });

    </script>

    <audio id="audioPlayer" autoplay loop>
    <source src="athousandmiles.mpeg" type="audio/mpeg">
    Your browser does not support the audio element.
    </audio>

    <button class="playButton" onclick="playAudio()">Play</button>

    <script>
     function playAudio() {
        document.getElementById("audioPlayer").play();
  }
    </script>

</body>

</html>