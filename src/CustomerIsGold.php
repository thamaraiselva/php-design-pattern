<?php

class CustomerIsGold {

    protected $customer;

    public function isSatisfiedBy(Customer $customer)
    {
        return $customer->type() == 'gold';
    }
}