<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use App\Tests\AppWebTestCase;

class PurchaseControllerTest extends AppWebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $client->request('POST', $this->generateUrl('purchase'));
        $this->assertResponseIsSuccessful();
        $this->assertResponseFormatSame('json');
    }
}
