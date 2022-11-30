<?php

/*
 * This file is part of Chevereto.
 *
 * (c) Rodolfo Berrios <rodolfo@chevereto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chevereto\Controllers\Api\V4\Storage\Migrate;

use Chevereto\Controllers\WorkflowController;

class StorageMigratePostController extends WorkflowController
{
    public function getDescription(): string
    {
        return 'Migrate all stored content to another storage.';
    }

    public function run(string $storage_id): array
    {
        return [];
    }
}
