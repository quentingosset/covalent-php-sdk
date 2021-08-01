<?php


namespace Covalent\Response;

use Covalent\Object\Item\Pagination;
use DateTime;
use Exception;

class Data
{

    /**
     * updated_at field
     * @var DateTime
     */
    public DateTime $updated_at;

    /**
     * items field
     */
    public array $items;

    /**
     * @return __items[]
     */
    private function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param __items[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * pagination field
     * @var Pagination|null
     */
    public ?Pagination $pagination;

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

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     * @throws Exception
     */
    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = new DateTime(strstr($updated_at, '.', true));
    }
}