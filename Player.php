<?php

class Player
{
    public $Name;
    public $Balance;

    function Register()
    {
        $name = readline("Qual o seu nome?: ");
        $ageVerify = $this->AgeCheck($name);

        if($ageVerify == true)
        {
            $this->Name = $name;
            $this->Balance = +1000;
        }
    } 

    function WinCash($cash)
    {
        $this->Balance = $this->Balance + $cash;
    }
    
    function LoseCash($cash)
    {
        if($this->VerifyPositiveBalance($cash)==true)
        {
            $this->Balance = $this->Balance - $cash;
        }
        else{
            echo "                 Seu saldo foi liquidado, você está fálido\n";
            exit;
        }
    }
    
    function VerifyPositiveBalance($cash)
    {
        if($this->Balance <= 0)
        {
            return false;
        }

        return true;
    }

    function AgeCheck($name)
    {   
        do{
            $age = readline("Quantos anos você tem $name?: ");
            
            if($age < 18)
            {
                echo("Você precisa ser maior de 18 anos!"."\n");
            }

        }while($age < 18);

        return true;
    }
}