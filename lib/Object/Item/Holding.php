<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\QuoteRate;
use Covalent\Object\Item\Traits\Timestamp;
use DateTime;

class Holding
{
    use QuoteRate,
        Timestamp;

    /**
     * open field
     * @var BalanceQuote[]
     */
    public array $open;

    /**
     * high field
     * @var BalanceQuote[]
     */
    public array $high;

    /**
     * low field
     * @var BalanceQuote[]
     */
    public array $low;

    /**
     * close field
     * @var BalanceQuote[]
     */
    public array $close;

    /**
     * @param \DateTime $timestamp
     */
    public function setTimestamp(DateTime $timestamp): void
    {
        //new \DateTime(strstr($timestamp, '.', true)); if covalent can't fix the mirosecond to max 6 digit
        $this->timestamp = $timestamp;
    }
}