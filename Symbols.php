<?php

class Symbols
{
    public $Symbols = [
        'X',
        'O',
        '#',
        '@',
        '$',
        '9'
    ];

    function SymbolsRandomize()
    {
        // foreach ($this->Symbols as $symbol => $name) {
        //     echo $name . " - " . $symbol . PHP_EOL;
        // }

        for($i = 0; $i < 3; $i++)
        {
            $randomInt = rand(0, 5);
            echo $this->Symbols[$randomInt]." ";

            if($i == 2)
            {
                echo "\n";
            }
        }
    }

    function FunRoulette()
    {
        for($i = 0; $i < 20; $i++)
        {
            $this->SymbolsRandomize();
            usleep(50000);
            system('clear');
        }
    }
}
?>