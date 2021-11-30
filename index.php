<?php
	require 'config/config.php'; 

	$servername = "localhost";
	$dbname     = "chatbot";
	$username   = "root";
	$password   = "";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}else{
		//connected
	}

	$sql = "SELECT * FROM vragen";
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
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<title>chat bot</title>
</head>
<body>
	<div class='container' style="margin: auto; width: 95%;">
		<div class='row' >
			<div class='col-lg-8 col-lg-offset-2'>
				<div class='col-lg-6 col-lg-offset-3'>
				<h3>stel een vraag</h3>
					<hr/>
					<form name='send' id='send' action='verstuurd2.php' method='post'>
						<div class='form-group'>
							<label for='word'>typen:</label>
							<input name='vraag' id='vraag' type='text' class='form-control' placeholder='...' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
							<button>vraag</button>
						</div>
					</form>
					<hr/>
				<hr/>
			<hr>
		<h1>vraag en antwoord:</h1>
	<br>
<?php
	$val = "";
	if( isset($_POST['characters']) ) {
	$val = $_POST['vraag'];
	}
	$servername = "localhost";
	$dbname     = "chatbot";
	$username   = "root";
	$password   = "";
	$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

			$sql = "SELECT * FROM vragen ORDER BY id DESC";
			if ($result = $conn->query($sql)) {
				$str = "<lu style='list-style-type:none; margin:0; padding:0; margin-top:60px'>";
				while ($row = $result->fetch_assoc()) {
			 
				  $str .= "<li><div style='border:1px gray; margin:3px; padding:2px; height: 100px; font-size: xx-large;'>" .  $row['vraag'] . "<hr>". "</div></li>";
				}
				$str .= "</lu>";

			$result->free();
			}
	$conn->close();
?>
 <div><?php echo $str; ?></div>

				</div>	
			</div>
		</div>
	</div>
</body>
</html>