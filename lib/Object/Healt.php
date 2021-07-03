<?php


namespace Covalent\Object;

class Healt
{

    /**
     * updated_at field
     * @var \DateTime
     */
    private \DateTime $updated_at;


    /**
     * items field
     * @var \Covalent\Object\Item\Healt[]
     */
    private array $items;

    /**
     * pagination field
     * @var \Covalent\Object\Pagination|null
     */
    private ?\Covalent\Object\Pagination $pagination;

    /**
     * @param $index
     * @return Item\Healt
     */
    public function get($index){
        return $this->items[$index];
    }

    /**
     * @param $index
     * @return Item\Healt[]
     */
    public function getAll(): array
    {
        return $this->getItems();
    }

    /**
     * @return Item\Healt[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item\Healt[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param \DateTime $updated_at
     */
    public function setUpdatedAt(\DateTime $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return Pagination|null
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     * @param Pagination|null $pagination
     */
    public function setPagination(?Pagination $pagination): void
    {
        $this->pagination = $pagination;
    }


}