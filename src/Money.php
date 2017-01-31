<?php


/** @Embeddable */
class Money
    {
    /** @Column(type = "string") */
    protected $currency;
    public function __construct()
    {
        $strings = range('a','z');
        $currency = "";
        for ($i = 0; $i < 10; $i++) {
            $currency .= $strings[rand(0,25)];
        }
        $this->currency = strtoupper($currency);
    }
    public function getCurrency()
    {
        return $this->currency;       
    }
}
