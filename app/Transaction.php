<?php

declare(strict_types=1);
class Transaction
{
    private string $Date;
    private ?string $Check;
    private string $Description;
    private float $Amount;
    private ?string $dirtyAmount=null;
    public function __construct(
        string $Date,
        ?string $Check,
        string $Description,
        string $dirtyAmount
    ) {
        $this->Date =  $Date;
        $this->Check = $Check;
        $this->Description = $Description;
        $this->dirtyAmount = $dirtyAmount;
    }
    function getAmount():float
    {
        $this->Amount= (float) str_replace(['$', ','], '', $this->dirtyAmount);
        return $this->Amount;
    }   function getDate():string
    {
        return $this->Date;
    }   function getCheck():string
    {
        return $this->Check;
    }   function getDescription():string
    {
        return $this->Description;
    }
    
    // function cleanAmount(): self
    // {
    //     $this->Amount = (float) str_replace(['$', ','], '', $this->Amount);
    //     return $this;
    // }
    // function addformatdate(): self
    // {
    //     $this->Date = idate('j M y', $this->Date);
    //     return $this;
    // }
}