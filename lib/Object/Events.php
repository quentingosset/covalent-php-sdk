<?php


namespace Covalent\Object;

use Covalent\Enumeration\Endpoint;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;

class Events extends DefaultObject
{
    /**
     * items field
     * @var Item\Event[]
     */
    public array $items;

    /**
     * @return Item\Event[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Event[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}