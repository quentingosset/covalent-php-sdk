<?php


namespace Covalent\Resources;


use Covalent\CurlRequest;
use Covalent\Enumeration\Endpoint;
use Covalent\Response\HealtResponse;
use JsonMapper;

class DexResource extends CurlRequest
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
    protected string $endpoint;
    /**
     * @var array|string|string[]
     */
    protected $full_url;


    /**
     * DexResource constructor.
     * @param int|null $network
     * @param string|null $dex
     */
    public function __construct(int $network = null, string $dex = null)
    {
        $this->init();
        $this->network = $network;
        $this->dex = $dex;
    }

    /**
     * Get all pools
     *
     * $covalent->DEX(X,Y)->pools()
     * @return DexResource
     */
    public function pools()
    {
        $this->endpoint = "{CHAIN_ID}/networks/uniswap_v2/assets/";
        $this->full_url = str_replace("{CHAIN_ID}",$this->network,$this->endpoint);
        return $this;
    }

    /**
     * Get dex health status
     *
     * $covalent->DEX(X,Y)->health()
     * @return DexResource
     * @throws \JsonMapper_Exception
     */
    public function health()
    {
        $this->full_url = str_replace("{CHAIN_ID}",$this->network,Endpoint::DEX_HEALTH);
        $this->full_url = str_replace("{DEX}",$this->dex,$this->full_url);
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Healt';
        return $jm->map(json_decode(CurlRequest::get()), new HealtResponse());
    }

    public function get(){
        CurlRequest::get();
    }
}