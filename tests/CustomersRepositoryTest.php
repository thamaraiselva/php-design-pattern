<?php 

use PHPUnit\Framework\TestCase;

class CustomersRepositoryTest extends TestCase {

    protected $customers;

    public function setUp(): void
    {
        $this->customers = new CustomersRepository([
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold'),
        ]);
    }

    /** @test */
public function it_fetches_all_customers()
{
    $results = $this->customers->all();
    $this->assertCount(4, $results);
}

    /** @test */
    public function it_fetches_all_customers_who_match_a_given_specification()
    {
        $customers = new CustomersRepository([
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold'),
        ]);

        $result = $customers->matchingSpecification(new CustomerIsGold);
        $this->assertCount(2,$result);
    }
}