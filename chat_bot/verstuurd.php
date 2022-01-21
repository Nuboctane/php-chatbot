<?php
include_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();
$my_str = strtolower($_POST["word"]);
$sql = "INSERT INTO `vragen`(`vraag`) VALUES ('$my_str', '$_POST[gradatie]')";
if ($conn->query($sql)===TRUE){
    header("Location: index.php");
}else{
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