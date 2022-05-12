<html>
<head>
<title>Form Feedback</title>
</head>
<body>
<?php #Script handle form

echo "<p> Thankyou, <b>".$_POST["name"].
"</b> for the following comments: <br/>". 
$_POST["comments"]."<p>We will reply to you at <i>". 
$_POST["email"]."</i></p>";

?>
</body>
</html>