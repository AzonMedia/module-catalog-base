<?php
declare(strict_types=1);

namespace GuzabaPlatform\Catalog\Base\Interfaces;

use GuzabaPlatform\Tags\Base\Interfaces\SupportsTagsInterface;

interface Item extends SupportsTagsInterface
{
    /**
     * A collection/array of Category
     * @return iterable
     */
    public function get_categories() : iterable ;
}