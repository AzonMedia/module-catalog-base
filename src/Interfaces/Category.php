<?php
declare(strict_types=1);

namespace GuzabaPlatform\Catalog\Base\Interfaces;

use GuzabaPlatform\Tags\Base\Interfaces\SupportsTagsInterface;

interface Category extends SupportsTagsInterface
{
    public function get_items() : iterable ;
}