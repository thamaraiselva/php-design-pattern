<?php

class CustomerIsGold {

    protected $customer;

    public function isSatisfiedBy(Customer $customer)
    {
        $customer->type = 'gold';
    }

    public function type()
    {
        return $this->customer;
    }
}