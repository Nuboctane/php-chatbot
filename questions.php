<?php
    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();

    $question = $_POST["standard_question"];
    $answer = '~';
    
if ($question == 1){
    $answer = '<span id="icon_bubble" style="background-color: rgb(44, 149, 235); ">BOT</span><br><br><div id="bot_message"><div id="bot_message">Wat te doen als uw kind ziek is?
    U kunt de school zelf bellen op het ziek meld nummer: 030 280 70 86
    en u zal worden doorverwezen om zelf uw kind ziek te melden aan de telefoon. 
    </div>';
}

if ($question == 2){
    $answer = '<span id="icon_bubble" style="background-color: rgb(44, 149, 235); ">BOT</span><br><br><div id="bot_message">Hoe zien de roosters er uit?
    De roosters worden per elke periode vrij gegeven en kunnen soms tussen door gewijzigd worden 
    met eventuele studie dagen of andere evenementen. De student kan zelf de roosters zien op de elo 
    <a href="https://rooster.glu.nl/schedule">HIER</a> 
    en kan ook het rooster vinden op de 
    <a href="https://play.google.com/store/apps/details?id=com.stucomm.glu&hl=en&gl=US">GLU APP</a>
    </div>';
}

if ($question == 3){
    $answer = '<span id="icon_bubble" style="background-color: rgb(44, 149, 235); ">BOT</span><br><br><div id="bot_message">
    Herfstvakantie: 18 oktober tot 24 oktober 2021 <br>
    Kerstvakantie: 27 december 2021 tot 9 januari 2022  <br>
    Voorjaarsvakantie: 28 februari tot 6 maart 2022  <br>
    Goede Vrijdag: 15 april 2022  <br>
    Tweede Paasdag: 18 april 2022  <br>
    Koningsdag: 27 april 2022  <br>
    Meivakantie: 2 mei tot 6 mei 2022  <br>
    Bevrijdingsdag: 5 mei 2022  <br>
    Hemelvaartsdag: 26 mei 2022  <br>
    Tweede Pinksterdag: 6 juni 2022  <br>
    Zomervakantie: 11 juli tot 22 augustus 
    <br>
    <a href="https://www.glu.nl/jaarkalender/">of click hier voor de jaar kalender</a>
    </div>';
}
$sql = "INSERT INTO `vragen2`(`vraag`, `user`) VALUES ('$answer', 'BOT')";

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