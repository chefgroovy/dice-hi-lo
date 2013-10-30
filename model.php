<?php

define('WINNER_PLAYER','WINNER_PLAYER');
define('WINNER_HOUSE','WINNER_HOUSE');
define('WINNER_TIE','WINNER_TIE');


class Roll {

public $HouseRoll, $PlayerRoll;

public function __Construct() {
	$roll = rand(1,6);
	$this->HouseRoll = rand(1,6);
}

public function GetHouseRoll()
{
	$roll = rand(1,6);
	$this->HouseRoll = rand(1,6);
}

public function SetPlayerRoll()
{
	$roll = rand(1,6);
	$this->PlayerRoll = rand(1,6);
}

public function GetWinner() {

if ($this->HouseRoll > $this->PlayerRoll)
	return(WINNER_HOUSE);
elseif ($this->HouseRoll < $this->PlayerRoll)
	return(WINNER_PLAYER);
elseif ($this->HouseRoll = $this->PlayerRoll)
	return(WINNER_TIE);
	
}
	
}

?>