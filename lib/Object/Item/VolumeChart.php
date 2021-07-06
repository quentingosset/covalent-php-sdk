<?php


namespace Covalent\Object\Item;


class VolumeChart
{
    /**
     * dt field
     * @var \DateTime
     */
    public \DateTime $dt;

    /**
     * quote_currency field
     * @var string
     */
    public string $quote_currency;

    /**
     * volume_quote field
     * @var float
     */
    public float $volume_quote;

    /**
     * swap_count_24 field
     * @var int
     */
    public int $swap_count_24;

    /**
     * @param \DateTime $dt
     */
    public function setDt(\DateTime $dt): void
    {
        //new \DateTime(strstr($updated_at, '.', true)); if covalent can't fix the mirosecond to max 6 digit
        $this->dt = $dt;
    }
}