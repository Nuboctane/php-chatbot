<?php
    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();

    $question = $_POST["standard_question"];
    $answer = '~';
    
if ($question == 1){
    $answer = '<div id="bot_message"> BOT: wat te doen als uw kind ziek is?
    U kunt de school zelf bellen op het ziek meld nummer: 030 280 70 86
    en u zal worden doorverwezen om zelf uw kind ziek te melden aan de telefoon. 
    </div>';
}

if ($question == 2){
    $answer = '<div id="bot_message"> BOT: hoe zien de roosters er uit?
    De roosters worden per elke periode vrij gegeven en kunnen soms tussen door gewijzigd worden 
    met eventuele studie dagen of andere evenementen. De student kan zelf de roosters zien op de elo 
    <a href="https://rooster.glu.nl/schedule">HIER</a> 
    en kan ook het rooster vinden op de 
    <a href="https://play.google.com/store/apps/details?id=com.stucomm.glu&hl=en&gl=US">GLU APP</a>
    </div>';
}

$sql = "INSERT INTO `vragen`(`vraag`) VALUES ('$answer')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>received</title>
</head>
<body>
    <div id="container">
        <h1>error</h1>
    </div>
</body>
</html>