<?php
include('GameRun.php');
include('Player.php');

$player = new Player();
$player->Register();

$gameRun = new GameRun($player);
$gameRun->SpinRoulette();
?>