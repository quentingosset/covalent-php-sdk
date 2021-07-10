<?php


namespace Covalent\Object\Item;


use DateTime;

class Ecosystem
{
    /**
     * quote_currency field
     * @var string
     */
    public string $quote_currency;

    /**
     * gas_token_price_quote field
     * @var float
     */
    public float $gas_token_price_quote;

    /**
     * total_swaps_24h field
     * @var int
     */
    public int $total_swaps_24h;

    /**
     * total_active_pairs_7d field
     * @var int
     */
    public int $total_active_pairs_7d;

    /**
     * total_fees_24h field
     * @var float
     */
    public float $total_fees_24h;

    /**
     * volume_chart_7d field
     * @var VolumeChart[]
     */
    public array $volume_chart_7d;

    /**
     * volume_chart_30d field
     * @var VolumeChart[]
     */
    public array $volume_chart_30d;

    /**
     * liquidity_chart_7d field
     * @var LiquidityChart[]
     */
    public array $liquidity_chart_7d;

    /**
     * liquidity_chart_30d field
     * @var LiquidityChart[]
     */
    public array $liquidity_chart_30d;

    /**
     * @param $index
     * @return Item\Ecosystem
     */
    public function get($index){
        return $this->items[$index];
    }

    /**
     * @return Item\Ecosystem[]
     */
    public function getAll(): array
    {
        return $this->getItems();
    }

    /**
     * @param int $periode
     * @param string $periodicity
     * @return VolumeChart[]|VolumeChart
     * @throws \Exception
     */
    public function volume(int $periode, string $periodicity)
    {
        $date = new DateTime( date('Y-m-d', strtotime("-$periode $periodicity")));
        $match_date = function($value) use ($date) {
            return $value->dt >= $date;
        };
        $result = array_filter(array_reverse($this->volume_chart_30d),$match_date);
        return (count($result) > 1)?  $result : $result[0];
    }

    /**
     * @param int $periode
     * @param string $periodicity
     * @return LiquidityChart[]|LiquidityChart
     * @throws \Exception
     */
    public function liquidity(int $periode, string $periodicity)
    {
        $date = new DateTime( date('Y-m-d', strtotime("-$periode $periodicity")));

        $match_date = function($value) use ($date) {
            return $value->dt >= $date;
        };

        $result = array_values(array_filter(array_reverse($this->liquidity_chart_30d),$match_date));

        return (count($result) > 1)?  $result : $result[0];

    }
}