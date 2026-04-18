<?php
/**
 * Tests for SolendLending
 */

use PHPUnit\Framework\TestCase;
use Solendlending\Solendlending;

class SolendlendingTest extends TestCase {
    private Solendlending $instance;

    protected function setUp(): void {
        $this->instance = new Solendlending(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solendlending::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
