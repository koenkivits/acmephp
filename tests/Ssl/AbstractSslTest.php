<?php

/*
 * This file is part of the Acme PHP project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\AcmePhp\Ssl;

use PHPUnit\Framework\TestCase;

abstract class AbstractSslTest extends TestCase
{
    protected function assertIsAsymmetricKey($resource)
    {
        if (\PHP_VERSION_ID < 80000) {
            $this->assertIsResource($resource);
        } else {
            $this->assertInstanceOf(\OpenSSLAsymmetricKey::class, $resource);
        }
    }
}
