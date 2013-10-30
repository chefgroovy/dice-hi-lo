<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dice Hi LO</title>
</head>

<body>

<?php
include_once('model.php');

$rolldice = new Roll();

?>

<div id="container" align="center">
<div id="header">
<h1>Dice Hi LO</h1>
</div>
<hr>
<div id="main_body">



<h2>My Roll: <strong><?=$rolldice->HouseRoll ?></strong></h2>

<?php
if (isset($_POST['dice'])) {
          $rolldice->SetPlayerRoll();
		  echo "ROLdddL " . $rolldice->PlayerRoll;
}

?>

<form action="#" method="post" name="dice">

  <table width="200">
    <tr>
      <td><label>
        <input type="radio" name="Guess" value="2" id="Guess_0">
        High</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Guess" value="1" id="Guess_1">
        Low</label></td>
    </tr>
    <tr>
      <td>ROLL
        <input type="submit" name="guess" id="guess" value="Submit"></td>
    </tr>
  </table>

</form>


<hr>

<?php
 
if (isset($_POST['roll'])) {
          $rand = rand(1, 6);
          echo 'You rolled a '.$rand;
 }
 
?>
 
<form action="index.php" method="POST">
             <input type="Submit" name="roll" value="Roll dice">
 </form>

</div>
<hr>
<div id="footer">
  <ul>
    <li>Contact</li>
    <li></li>
  </ul>
</div>
</div>
</body>
</html>