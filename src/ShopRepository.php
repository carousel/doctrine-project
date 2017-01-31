<?php
use Doctrine\ORM\EntityRepository;

class ShopRepository extends EntityRepository
{
    public function getCurrencies()
    {
        return $this->findAll();
    }
}

