<?php
include('GameRun.php');
include('Player.php');
include('Animation.php');

$animation = new Animation();

$animation->Loading();
$player = new Player();
$player->Register();

$animation->Loading();
$gameRun = new GameRun($player);
$gameRun->SpinRoulette();