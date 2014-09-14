<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Hydrator;


interface HydratorInterface
{
    /**
     * @param string $class
     * @param array $data
     * @return mixed
     */
    public function hydrate($class, $data);
}