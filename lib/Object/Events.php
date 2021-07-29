<?php


namespace Covalent\Object;

class Events extends DefaultObject
{
    /**
     * items field
     * @var Item\Traits\Event[]
     */
    public array $items;

    /**
     * @return Item\Traits\Event[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Traits\Event[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}