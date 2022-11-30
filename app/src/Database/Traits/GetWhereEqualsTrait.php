<?php

/*
 * This file is part of Chevereto.
 *
 * (c) Rodolfo Berrios <rodolfo@chevereto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chevereto\Database\Traits;

trait GetWhereEqualsTrait
{
    private function getWhereEquals(string $column): string
    {
        return str_replace('%s', $column, '%s = :%s');
    }
}
