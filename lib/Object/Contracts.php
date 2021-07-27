<?php


namespace Covalent\Object;

use Covalent\Enumeration\Endpoint;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;

class Contracts extends DefaultObject
{
    /**
     * items field
     * @var Item\Contract[]
     */
    public array $items;

    /**
     * @return Item\Contract[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Contract[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}