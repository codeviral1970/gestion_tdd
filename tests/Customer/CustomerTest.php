<?php

namespace App\Tests\Customer;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerTest extends WebTestCase
{
  public function testCustomersRoute(): void
  {
    $client = static::createClient();
    $crawler = $client->request('GET', '/customers');

    $this->assertResponseIsSuccessful();
    $this->assertSelectorTextContains('h1', 'Liste des clients');
  }
}
