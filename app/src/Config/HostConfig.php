<?php

/*
 * This file is part of Chevereto.
 *
 * (c) Rodolfo Berrios <rodolfo@chevereto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chevereto\Config;

final class HostConfig
{
    public function __construct(
        private string $hostnamePath = '/',
        private string $hostname = 'localhost',
        private bool $isHttps = false,
    ) {
    }

    public function hostnamePath(): string
    {
        return $this->hostnamePath;
    }

    public function hostname(): string
    {
        return $this->hostname;
    }

    public function isHttps(): bool
    {
        return $this->isHttps;
    }
}
