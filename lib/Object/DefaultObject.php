<?php


namespace Covalent\Object;

use Covalent\Object\Item\Pagination;
use DateTime;
use Exception;

class DefaultObject
{
    /**
     * updated_at field
     * @var \DateTime
     */
    public DateTime $updated_at;

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