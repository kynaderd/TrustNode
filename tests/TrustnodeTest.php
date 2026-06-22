<?php
/**
 * Tests for TrustNode
 */

use PHPUnit\Framework\TestCase;
use Trustnode\Trustnode;

class TrustnodeTest extends TestCase {
    private Trustnode $instance;

    protected function setUp(): void {
        $this->instance = new Trustnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trustnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
