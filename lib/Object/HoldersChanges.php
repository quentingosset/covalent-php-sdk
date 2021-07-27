<?php


namespace Covalent\Object;

use Covalent\Enumeration\Endpoint;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;

class HoldersChanges extends DefaultObject
{
    /**
     * items field
     * @var Item\HolderChange[]
     */
    public array $items;

    /**
     * @return Item\HolderChange[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\HolderChange[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}