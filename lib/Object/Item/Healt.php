<?php


namespace Covalent\Object\Item;


class Healt
{

    /**
     * synced_block_height field
     * @var int
     */
    public int $synced_block_height;

    /**
     * synced_block_signed_at field
     * @var \DateTime
     */
    public \DateTime $synced_block_signed_at;

    /**
     * latest_block_height field
     * @var int
     */
    public int $latest_block_height;

    /**
     * latest_block_signed_at field
     * @var \DateTime
     */
    public \DateTime $latest_block_signed_at;
}