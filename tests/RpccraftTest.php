<?php
/**
 * Tests for RpcCraft
 */

use PHPUnit\Framework\TestCase;
use Rpccraft\Rpccraft;

class RpccraftTest extends TestCase {
    private Rpccraft $instance;

    protected function setUp(): void {
        $this->instance = new Rpccraft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Rpccraft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
