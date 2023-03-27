<?php
class GameRun
{
    private $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public $Symbols = [
        'X',
        'O',
        '#',
        '@',
        '$',
        '9'
    ];
    
    function SpinRoulette()
    {
        do{
            $result = $this->FunRoulette();
            $this->VerifyResult($result);
            $push = readline();
            system('clear');
        } while (!is_numeric($push));
    }

    function FunRoulette()
    {
        for($i = 0; $i < 20; $i++)
        {
            $this->SymbolsRandomize();
            usleep(50000);
            system('clear');
        }

        return $this->SymbolsRandomize();
    }

    function SymbolsRandomize()
    {
        $result = [];

        for($i = 0; $i < 3; $i++)
        {
            $randomInt = rand(0, 5);
            $result[] = $this->Symbols[$randomInt]." ";
            echo $result[$i];

            if($i == 2)
            {
                echo "\n";
            }
        }

        return  $result;
    }

    function VerifyResult($result)
    {

        if($result[0] == $result[1] & $result[1] == $result[2])
        {
            $this->player->WinCash(500);
            echo "Você Ganhou! Estamos adicionando 500$ em sua conta! Seu Saldo é de: " .$this->player->Balance."$";
        }
        else
        {
            $this->player->LoseCash(50);
            echo "Você Perdeu! Estamos Retirando 50$ de sua conta! Seu Saldo é de: " .$this->player->Balance."$";
        }
    }
}
?>