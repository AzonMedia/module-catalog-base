<?php
declare(strict_types=1);

namespace GuzabaPlatform\Catalog\Base\Interfaces;

use GuzabaPlatform\Images\Interfaces\SupportsImagesInterface;
use GuzabaPlatform\Tags\Base\Interfaces\SupportsTagsInterface;

interface ItemInterface extends SupportsTagsInterface, SupportsImagesInterface
{

}