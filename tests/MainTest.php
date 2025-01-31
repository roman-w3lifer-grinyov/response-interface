<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use w3lifer\PhpResponseInterface\PhpResponseInterface;

final class MainTest extends TestCase
{
    public function testGetFalseResponse()
    {
        $this->assertEquals(['success' => false, 'errors' => []], PhpResponseInterface::getFalseResponse());
        $this->assertEquals(
            ['success' => false, 'errors' => ['Something went wrong']],
            PhpResponseInterface::getFalseResponse(['Something went wrong'])
        );
    }

    public function testGetTrueResponse()
    {
        $this->assertEquals(['success' => true, 'data' => []], PhpResponseInterface::getTrueResponse());
        $this->assertEquals(
            ['success' => true, 'data' => ['Some data']],
            PhpResponseInterface::getTrueResponse(['Some data'])
        );
    }
}
