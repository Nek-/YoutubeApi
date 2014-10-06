<?php

/**
 * This file is a part of nekland youtube api package
 *
 * (c) Nekland <nekland.fr@gmail.fr>
 *
 * For the full license, take a look to the LICENSE file
 * on the root directory of this project
 */

namespace Nekland\YoutubeApi\Transformer\Model\Details;

class RecordingDetails
{
    /**
     * @var string
     */
    private $locationDescription;

    /**
     * @var \Nekland\YoutubeApi\Transformer\Model\Standard\Location
     */
    private $location;

    /**
     * @var \DateTime
     */
    private $recordingDate;
}
