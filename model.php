<?php

define('WINNER_PLAYER','WINNER_PLAYER');
define('WINNER_HOUSE','WINNER_HOUSE');
define('WINNER_TIE','WINNER_TIE');

define('HOUSE','HOUSE');
define('PLAYER','PLAYER');


class Roll {

public $HouseRoll, $PlayerRoll, $tiewinner="PLAYER";
public $lastgamehouse, $lastgameplayer;

public function __Construct() {

}

public function GetHouseRoll()
{
	$this->lastgamehouse = $this->HouseRoll;
	$this->HouseRoll = rand(1,6);
	echo "TEST HOUSE " . $this->HouseRoll;
}

public function SetPlayerRoll()
{
	$this->lastgameplayer = $this->PlayerRoll;
	$this->PlayerRoll = rand(1,6);

}

private function SwapTieWinner() {
	if ($this->tiewinner == HOUSE)
		$this->tiewinner = PLAYER;
	else
		$this->tiewinner = HOUSE;
}


public function GetWinner() {

if ($this->HouseRoll > $this->PlayerRoll)
	$winner = WINNER_HOUSE;
elseif ($this->HouseRoll < $this->PlayerRoll)
	$winner = WINNER_PLAYER;
elseif ($this->HouseRoll == $this->PlayerRoll) {
	if ($this->tiewinner == PLAYER)
		$winner = WINNER_PLAYER;
	else
		$winner=WINNER_HOUSE;

$this->SwapTieWinner();
return $winner;
}

}
	
}

?>