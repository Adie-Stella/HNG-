<html>
<head>
    <title>Figma webpage</title>
    <link rel="stylesheet" href="style.css">
</head>

<body background="create.jpg">

<P>WELCOME TO MY FIGMA WEBPAGE</P>

<?php
//$time = date('h:i a');

$time = date('H:i a');

$date = date('F jS Y');

?>


<p class="second"><strong>DATE:</strong><?php echo $date?></p>

<p class="first"><strong>TIME:</strong><?php echo $time;?><p>



</body>
</html>

