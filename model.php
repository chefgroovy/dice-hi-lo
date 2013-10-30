<?php

define('WINNER_PLAYER','WINNER_PLAYER');
define('WINNER_HOUSE','WINNER_HOUSE');
define('WINNER_TIE','WINNER_TIE');

define('HOUSE','HOUSE');
define('PLAYER','PLAYER');


class Roll {

public $HouseRoll, $PlayerRoll, $tiewinner="PLAYER";

public function __Construct() {

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
	$this->SwapTieWinner();
}

private function SwapTieWinner() {
	if ($this->tiewinner == HOUSE)
		$this->tiewinner = PLAYER;
	else
		$this->tiewinner = HOUSE;
}


public function GetWinner() {

if ($this->HouseRoll > $this->PlayerRoll)
	return(WINNER_HOUSE);
elseif ($this->HouseRoll < $this->PlayerRoll)
	return(WINNER_PLAYER);
elseif ($this->HouseRoll == $this->PlayerRoll) {
	if ($this->tiewinner = PLAYER)
		return(WINNER_PLAYER);
	else
		return(WINNER_HOUSE);

}

}
	
}

?>