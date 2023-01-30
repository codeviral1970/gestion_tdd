<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexTest extends WebTestCase
{
  public function testIndexPage(): void
  {
    $client = static::createClient();
    $crawler = $client->request('GET', '/');

    $this->assertResponseIsSuccessful();
    $this->assertSelectorTextContains('h1', 'Gestion My-linh');
  }
}
