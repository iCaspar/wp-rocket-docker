<?php
/**
 * Test that PHP Unit is working
 *
 * @package Project\Tests\Unit
 * @author  Caspar Green <cg@caspar.green>

 * @since 1.0.0
 */

namespace Project\Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class TestPhpunit
 *
 * @package Arras\Tests\Unit
 *
 * @since 1.0.0
 */
class TestPhpunit extends TestCase
{
    /**
     * Test PHP Unit should work.
     *
     * @since 1.0.0
     *
     * @return void
     */
    public function testPhpUnitShouldWork(): void
    {
        $this->assertEquals(1, 1);
    }
}
