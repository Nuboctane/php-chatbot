<?php
      include_once 'config/database.php';
      $db = new Database();
      $conn = $db->getConnection();
$my_str ='<span id="icon_bubble" style="background-color: rgb(250, 156, 93);float: right; ">USER</span><br><br><div id="user_message">' . $_POST["vraag"] . '</div>';


$sql = "INSERT INTO `vragen2`(`vraag`, `user`) VALUES ('$my_str', 'USER')";

// Poging uitvoeren query
if ($conn->query($sql) === TRUE) {
    // Uitvoeren query gelukt
    header("Location: index.php");

 } else {
    // Uitvoeren query mislukt
    header("Location: index.php");

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