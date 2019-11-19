<?php
declare(strict_types=1);

namespace Azonmedia\Catalog\Base\Interfaces;


interface ItemsBundle extends Item
{
    public function get_items() : iterable ;
}