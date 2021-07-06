<?php


namespace Covalent\Object\Item;


class ChainStatus
{

    /**
     * name field
     * @var string
     */
    public string $name;

    /**
     * chain_id field
     * @var int
     */
    public int $chain_id;

    /**
     * logo_url field
     * @var string
     */
    public string $logo_url;

    /**
     * synced_block_height field
     * @var int
     */
    public int $synced_block_height;

    /**
     * synced_blocked_signed_at field
     * @var \DateTime
     */
    public \DateTime $synced_blocked_signed_at;
}