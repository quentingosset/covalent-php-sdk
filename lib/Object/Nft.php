<?php


namespace Covalent\Object;

use Covalent\Enumeration\Endpoint;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;

class Nft extends DefaultObject
{
    /**
     * items field
     * @var Item\Nft[]
     */
    public array $items;

    /**
     * @return Item\Nft[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Nft[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}