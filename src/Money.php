<?php


/** @Embeddable */
class Money
    {
    /** @Column(type = "string") */
    protected $currency = 'USD';

    public function getCurrency()
    {
        return $this->currency;       
    }
}
