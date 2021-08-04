<?php


namespace Covalent\Object;


trait Pagination
{
    /**
     * pagination field
     * @var Item\Pagination|null
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
}