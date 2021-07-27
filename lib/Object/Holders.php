<?php


namespace Covalent\Object;

use Covalent\Enumeration\Endpoint;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;

class Holders extends DefaultObject
{
    /**
     * items field
     * @var Item\Holder[]
     */
    public array $items;

    /**
     * @return Item\Holder[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Holder[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}