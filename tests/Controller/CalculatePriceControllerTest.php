<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Tests\AppWebTestCase;

class CalculatePriceControllerTest extends AppWebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $client->request('GET', $this->generateUrl('calculate-price'));
        $this->assertResponseIsSuccessful();
        $this->assertResponseFormatSame('json');
    }
}
