<?php

/*
 * This file is part of Chevereto.
 *
 * (c) Rodolfo Berrios <rodolfo@chevereto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chevereto\Controllers\Api\V4\Album;

use Chevere\Controller\Attributes\RelationWorkflow;
use Chevere\Parameter\Attributes\ParameterAttribute;
use Chevereto\Controllers\WorkflowController;
use Chevereto\Workflows\Album\AlbumGetWorkflow;

#[RelationWorkflow(AlbumGetWorkflow::class)]
final class AlbumGetController extends WorkflowController
{
    public function getDescription(): string
    {
        return 'Get an album identified by its id.';
    }

    public function run(
        #[ParameterAttribute(
            description: 'The identifier.',
            regex: '/\w+/'
        )]
        string $id
    ): array {
        return [];
    }
}
