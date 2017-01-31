<?php

/** @Entity(repositoryClass="ShopRepository") @Table(name="shops") */
class Shop
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;

    /** @Embedded(class = "Money") */
    private $money;
    public function __construct(Money $money)
    {
        $this->money = $money;
    }
    public function getCurrency()
    {
        return $this->money->getCurrency();
    }
    public function getId()
    {
        return $this->id;
    }
}
