<?php


namespace Covalent\Resources;


use Covalent\Covalent;

class DexResource
{

    /**
     * Network ID
     * @var int|null
     */
    private ?int $network;

    /**
     * Dex name
     * @var string|null
     */
    private ?string $dex;


    /**
     * DexResource constructor.
     * @param int|null $network
     * @param string|null $dex
     */
    public function __construct(int $network = null, string $dex = null)
    {
        $this->network = $network;
        $this->dex = $dex;

        $config = Covalent::$config;

        var_dump($config);
        var_dump($this->network);
        var_dump($this->dex);

    }
}