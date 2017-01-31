<?php

/** @Entity */
class Shop 
{
    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;

    /** @Embedded(class = "Money") */
    private $money;
    public function __construct(Money $money)
    {
        $this->money = $money;
    }
    
    public function getCurrency()
    {
        $this->money_currency = $this->money->getCurrency();
    }
}
