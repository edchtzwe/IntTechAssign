<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
lang="en">
<head>
	<title>Feedback page</title>
	<meta name="author" content="Chong Tze Wei"/>
	<meta name="description" content="A feedback page"/>
	<meta name="keywords" content="Santubong, kuching, sarawak, feedback"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<meta http-equiv="content-script-type" content="text/javascript" /> 
	
	<link id="styles" title="cur_style" rel="stylesheet" type="text/css" href="styles/style1/style.css"/>
	<link title="main_style" rel="alternate stylesheet" type="text/css" href="styles/style1/style.css"/>
	<link title="print" rel="alternate stylesheet" type="text/css" media="print"  href="styles/style1/print.css"/>
	<link rel="alternate stylesheet" type="text/css" title="sub" href="styles/style3/style3.css" />	
	<link rel="alternate stylesheet" title="sub2" type="text/css" href="styles/style2/style2.css"/>
	
	<script type="text/javascript" src="scripts/script.js"></script>
	<script type="text/javascript" src="scripts/script2.js"></script>
</head>
<body onload="init()">
<div id="main">

<div class="topHead">
	<?php include("header.php"); ?>
</div>


<div id="sidebar">
	<?php include("menu.php"); ?>
</div>

<div id="body">
	<form id="form" action="http://mercury.ict.swin.edu.au/it000000/demos/showpost.php" method="post" onsubmit=" return func()">
	
	<fieldset>
	<legend>Feedback Form</legend>
	<label for="name">Name:</label>
	<input type="text" id="name" name="username" />
	<p>
	<label for="comments">Comments:</label>
	<textarea name="comments" id="comments" rows="4" cols="40"></textarea>
	</p>
	<p>
	<input type="submit" name="submit" value="submit" />
	<input type="reset" name="reset" value="reset" />
	<input type="hidden" name="debug" value="true" />
	</p>
	</fieldset>
	</form>
</div>

<div id="footer">
	<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>