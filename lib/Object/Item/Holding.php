<?php


namespace Covalent\Object\Item;


class Holding
{
    /**
     * timestamp field
     * @var \DateTime
     */
    public \DateTime $timestamp;

    /**
     * quote_rate field
     * @var float|null
     */
    public ?float $quote_rate;

    /**
     * open field
     * @var ClosingPrice[]
     */
    public array $open;

    /**
     * high field
     * @var ClosingPrice[]
     */
    public array $high;

    /**
     * low field
     * @var ClosingPrice[]
     */
    public array $low;

    /**
     * close field
     * @var ClosingPrice[]
     */
    public array $close;

    /**
     * @param \DateTime $timestamp
     */
    public function setTimestamp(\DateTime $timestamp): void
    {
        //new \DateTime(strstr($timestamp, '.', true)); if covalent can't fix the mirosecond to max 6 digit
        $this->timestamp = $timestamp;
    }
}