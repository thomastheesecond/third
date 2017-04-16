<html>
<head>
<title>Tom Mackey's Guessing Game</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<p>
<?php
  if ( ! isset ($_GET['guess'])){
    echo ("No guess");
  } else if (strlen($_GET['guess'])<1){
    echo ("Too short");
  } else if (! is_numeric($_GET['guess'])){
    echo ("No number");
  } else if ($_GET['guess'] <74){
    echo ("Too low");
  } else if ($_GET['guess'] >74){
  echo ("Too high");
} else {
  echo("Correct");
}
?>
</p>
</body>
</html>