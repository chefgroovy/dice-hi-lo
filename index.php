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





<?php
if (isset($_POST['Guess'])) {
          $rolldice->SetPlayerRoll();
		  echo "Result last game<br>";
		  echo "House Roll: ". $rolldice->HouseRoll; 
		  echo " YOUr Roll " . $rolldice->PlayerRoll;
		  //echo $_POST['Guess'];

echo "<p>" . $rolldice->GetWinner() . "</p>";


}


?>
<h2>My Roll: <strong><?=$rolldice->HouseRoll ?></strong></h2>
<form action="#" method="post" name="dice">

  <table width="200">
    <tr>
      <td><label>
        <input type="radio" name="Guess" value="2" id="GuessHigh" checked >
        High</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Guess" value="1" id="GuessLow">
        Low</label></td>
    </tr>
    <tr>
      <td>ROLL
        <input type="Submit" name="submit" id="submit" value="Submit"></td>
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