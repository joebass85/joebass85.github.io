<html>
<meta charset="UTF-8">
<title>Contact Joe Diamond</title>
<link rel="stylesheet" href="/styles/index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	body {
		background-color: #333330;
	}
	label {
		color:#ffdd00;
		text-align:center;
		margin-top:0px;
	}
	div#bod {
		text-align:center;
	}
</style>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-dark fixed-top">
        <span class="navbar-text text-light">Joe Diamond - Music Educator<br>jdiamond1721@gmail.com</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item"><a class="nav-link text-light" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="/about/">About</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="/performance/">Performance</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="/teaching/">Teaching</a></li>
            </ul>
        </div>
    </nav>
    <br> <br>
	<br>
	<h1>Contact Joe Diamond</h1>
    <form method="post" action="/contact/">
		<div id="bod">
			<label>* = required field</label>
			<br>
			<label for='name'><i><b>Name*</b></i></label>
			<br>
			<input type="text" name="name" placeholder="Name" required size="35" autocomplete="on" autofocus>
			<br><br>
			<label for='email'><i><b>Email*</b></i></label>
			<br>
			<input type="email" name="email" placeholder="Email" required size="35" autocomplete="on">
			<br><br>
			<label for='message'><i><b>Message*</b></i></label>
			<br>
			<textarea name="msg" rows="8" cols="40" placeholder="Your message here..." required></textarea>
			<br><br>
			<input type='submit' value='Submit'>
		</div>
    </form>
<p id="comm">Questions and comments can be directed to <a href="mailto:jdiamond1721@gmail.com"><em>jdiamond1721@gmail.com</em></a></p>
<p id="comm">This site is powered by <a href="http://github.com" target="_blank">Github</a></p>
</body>

</html>

<?php
$name = "";
$email = "";
$msg = "";
$isGood = false;
$timeStamp = date("M-j-Y G:i");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = dataEx($_POST["name"]);
	$email = dataEx($_POST["email"]);
	$msg = dataEx($_POST["msg"]);
	$fileName = $name;
	$fileName = str_ireplace(" ","",$fileName);
	$isGood = true;
}

function dataEx($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($isGood == true) {
	echo "<script>alert('Thank you. Your message has been received.');</script>";
	$file = fopen("$fileName.txt","w") or die("Unable to open file.");
	fwrite($file,$name . " " . $timeStamp . "\n\n");
	fwrite($file,$email . "\n\n");
	fwrite($file,$msg);
	fclose($file);
}

?>
