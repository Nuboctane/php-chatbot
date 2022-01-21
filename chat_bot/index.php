<?php
	require 'config/config.php'; 
    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();
	$sql = "SELECT * FROM vragen2";
	if ($result = $conn->query($sql)) {
	  $str = "<lu style='list-style-type:none; margin:0; padding:0; margin-top:60px'>";
	  $str .= "</lu>";
	  $result->free();
	}
	$conn->close();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta name='description' content='bad word filter'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link rel='stylesheet' href="styling/style.css">
	<title>chat bot</title>
</head>
<body>
	<div class='container' style="margin: auto; width: 95%;">
		<div class='row' >
			<div id="top_info">
				click deze veel gestelde vragen voor standard antwoorden van de chat bot,
				als u andere vragen heeft kunt u die sturen in de live chat.
			</div>
			<div class='col-lg-8 col-lg-offset-2'>
				<div class='col-lg-6 col-lg-offset-3'>
					<form name='standard_question' id='standard_question' action='questions.php' method='post'>
						<button name='standard_question' id='standard_question2' 
						value="1">
						wat doe ik als mijn kind ziek is?
					</button>
					</form>
					<form name='standard_question' id='standard_question' action='questions.php' method='post'>
						<button name='standard_question' id='standard_question2' 
						value="2">
						hoe zien de roosters er uit?
					</button>
					</form>
					<form name='standard_question' id='standard_question' action='questions.php' method='post'>
						<button name='standard_question' id='standard_question2' 
						value="3">
						Hoe zit het met vakanties en/of studiedagen?
					</button>
					</form>
		<h1 id="header">live chat: (BETA)</h1>
	<br>
<?php
					$val = "";
					if( isset($_POST['characters']) ) {
						$val = $_POST['vraag'];
					}
					include_once 'config/database.php';
					$db = new Database();
					$conn = $db->getConnection();
							$sql = "SELECT * FROM vragen2 ORDER BY id DESC";
							if ($result = $conn->query($sql)) {
								$str = "<lu style='list-style-type:none; margin:0; padding:0; margin-top:60px'>";
								while ($row = $result->fetch_assoc()) {
								$str .= "<li><div style='border:1px gray; margin:3px; padding:2px;  font-size: xx-large;'>" . '</span>' .'<br>' .  $row['vraag'] . "</div></li> <br> <br> <br>";
								}
								$str .= "</lu>";
								$result->free();
							}
					$conn->close();
?>
 					<div id="chat_list"><?php echo $str; ?></div>
				</div>	
			</div>
		</div>
	</div>
	<script src="./script/main.js"></script>
	<form  name='send' id='send' action='verstuurd2.php' method='post' onkeyup="myFunction()" >
		<div class='form-group' id='input_g' >
			<label for='word'></label>
			<input  tabindex="0" autofocus name='vraag' id='vraag' type='text' class='form-control' placeholder='click or type ENTER to focus' onfocus='this.removeAttribute("readonly");' readonly required/>
			<button id="ask">↩</button>
		</div>
	</form>
	<form  name='send2' id='send2' action='verstuurd3.php' method='post'hidden>
		<div class='form-group' id='input_g' >
			<label for='word'></label>
			<input tabindex="0" autofocus name='vraag' id='vraag2' type='text' class='form-control' placeholder='send message as staff member' onfocus='this.removeAttribute("readonly");' readonly required/>
			<button id="ask">↩</button>
		</div>
	</form>
</body>
</html>