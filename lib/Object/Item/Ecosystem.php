<?php


namespace Covalent\Object\Item;


use Covalent\Object\Item\Traits\ChainId;
use Covalent\Object\Item\Traits\DexName;
use Covalent\Object\Item\Traits\GasTokenPriceQuote;
use Covalent\Object\Item\Traits\LiquidityChart30D;
use Covalent\Object\Item\Traits\LiquidityChart7D;
use Covalent\Object\Item\Traits\QuoteCurrency;
use Covalent\Object\Item\Traits\TotalActivePairs7D;
use Covalent\Object\Item\Traits\TotalFees24h;
use Covalent\Object\Item\Traits\TotalSwaps24h;
use Covalent\Object\Item\Traits\VolumeChart30D;
use Covalent\Object\Item\Traits\VolumeChart7D;
use DateTime;
use Exception;

class Ecosystem
{
    use DexName,
        ChainId,
        QuoteCurrency,
        GasTokenPriceQuote,
        TotalSwaps24H,
        TotalActivePairs7D,
        TotalFees24H,
        VolumeChart7D,
        VolumeChart30D,
        LiquidityChart7D,
        LiquidityChart30D;

    /**
     * @param $index
     * @return Ecosystem
     */
    public function get($index)
    {
        return $this->items[$index];
    }

    /**
     * @return Ecosystem[]
     */
    public function getAll(): array
    {
        return $this->getItems();
    }

    /**
     * @param int $periode
     * @param string $periodicity
     * @return VolumeChart[]|VolumeChart
     * @throws Exception
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
     * @throws Exception
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