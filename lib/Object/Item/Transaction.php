<?php


namespace Covalent\Object\Item;


class Transaction
{
    /**
     * block_signed_at field
     * @var \DateTime
     */
    public \DateTime $block_signed_at;

    /**
     * block_height field
     * @var int|null
     */
    public ?int $block_height;

    /**
     * tx_hash field
     * @var string|null
     */
    public ?string $tx_hash;

    /**
     * tx_offset field
     * @var int|null
     */
    public ?int $tx_offset;

    /**
     * successful field
     * @var bool|null
     */
    public ?bool $successful;

    /**
     * from_address field
     * @var string
     */
    public string $from_address;

    /**
     * from_address_label field
     * @var string|null
     */
    public ?string $from_address_label;

    /**
     * to_address field
     * @var string
     */
    public string $to_address;

    /**
     * to_address_label field
     * @var string|null
     */
    public ?string $to_address_label;

    /**
     * value field
     * @var int|null
     */
    public ?int $value;

    /**
     * value_quote field
     * @var float|null
     */
    public ?float $value_quote;

    /**
     * gas_offered field
     * @var int|null
     */
    public ?int $gas_offered;

    /**
     * gas_spent field
     * @var int|null
     */
    public ?int $gas_spent;

    /**
     * gas_price field
     * @var int|null
     */
    public ?int $gas_price;

    /**
     * gas_quote field
     * @var float|null
     */
    public ?float $gas_quote;

    /**
     * gas_quote_rate field
     * @var float|null
     */
    public ?float $gas_quote_rate;

    /**
     * log_events field
     * @var array|null
     * TODO NEED PARSE THIS OBJECT
     */
    public ?array $log_events;

}