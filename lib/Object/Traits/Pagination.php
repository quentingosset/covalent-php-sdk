<?php


namespace Covalent\Object\Traits;


trait Pagination
{
    /**
     * pagination field
     * @var \Covalent\Object\Pagination|null
     */
    public ?\Covalent\Object\Pagination $pagination;

    /**
     * @return \Covalent\Object\Pagination|null
     */
    public function getPagination(): ?\Covalent\Object\Pagination
    {
        return $this->pagination;
    }

    /**
     * @param \Covalent\Object\Pagination|null $pagination
     */
    public function setPagination(?\Covalent\Object\Pagination $pagination): void
    {
        $this->pagination = $pagination;
    }
}