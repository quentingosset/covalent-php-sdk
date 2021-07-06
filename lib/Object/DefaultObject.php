<?php


namespace Covalent\Object;

class DefaultObject
{
    /**
     * updated_at field
     * @var \DateTime
     */
    public \DateTime $updated_at;

    /**
     * pagination field
     * @var \Covalent\Object\Item\Pagination|null
     */
    public ?\Covalent\Object\Item\Pagination $pagination;

    /**
     * @return \Covalent\Object\Item\Pagination|null
     */
    public function getPagination(): ?\Covalent\Object\Item\Pagination
    {
        return $this->pagination;
    }

    /**
     * @param \Covalent\Object\Item\Pagination|null $pagination
     */
    public function setPagination(?\Covalent\Object\Item\Pagination $pagination): void
    {
        $this->pagination = $pagination;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     */
    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = new \DateTime(strstr($updated_at, '.', true));
    }
}