<?php
declare(strict_types=1);

namespace Azonmedia\Catalog\Base\Interfaces;

use Azonmedia\Tags\Base\Interfaces\SupportsTagsInterface;

interface Category extends SupportsTagsInterface
{
    public function get_items() : iterable ;
}