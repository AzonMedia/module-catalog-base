<?php
declare(strict_types=1);

namespace GuzabaPlatform\Catalog\Base\Interfaces;

interface ItemsBundle extends Item
{
    public function get_items() : iterable ;
}