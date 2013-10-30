<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dice Hi LO</title>
</head>

<body>


<?php
include_once('model.php');
include_once('roll.php');

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
		  ?>
		  <p>Result last game</p>
		  House Roll: <?=$rolldice->lastgamehouse ?> 
		  <?php
		  echo " YOUr Roll " . $rolldice->PlayerRoll;
	

		?>
       <p> WINNER: <?= $rolldice->GetWinner() ?> </p>
	<?php	
}
else {
echo "ELSE";
	$rolldice->GetHouseRoll();
}
$rolldice->GetHouseRoll();
?>
<h2>My Roll: <strong><?=$rolldice->HouseRoll ?></strong></h2>
<h5>Tie Winner will be: <?=$rolldice->tiewinner ?></h5>
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