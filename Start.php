<?php
include('Symbols.php');

$symbols = new Symbols();

do{
    $symbols->FunRoulette();
    $symbols->SymbolsRandomize();
    $push = readline();
    system('clear');
} while (!is_numeric($push));
?>