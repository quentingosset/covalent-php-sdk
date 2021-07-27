<?php


namespace Covalent\Object\Item;


class Pagination
{
    /**
     * has_more field
     * @var bool|null
     */
    public ?bool $has_more;

    /**
     * page_number field
     * @var int|null
     */
    public ?int $page_number;

    /**
     * page_size field
     * @var int|null
     */
    public ?int $page_size;

    /**
     * total_count field
     * @var int|null
     */
    public ?int $total_count;
}