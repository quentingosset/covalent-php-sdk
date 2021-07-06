<?php


namespace Covalent\Resources;


use Covalent\CurlRequest;
use Covalent\Enumeration\Endpoint;
use Covalent\Response\DefaultResponse;
use Covalent\Response\EcosystemResponse;
use Covalent\Response\HealtResponse;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

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

    /**
     * Endpoint URL
     * @var string
     */
    protected string $endpoint;

    /**
     * Full endpoint URL
     * @var array|string|string[]
     */
    protected string $full_url;


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
     * $covalent->Dex(X,Y)->pools()
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
     * $covalent->Dex(X,Y)->health()
     * @return DexResource
     * @throws JsonMapper_Exception
     * TODO EXCLUDE SPECIFIC DEXS WHO DOESN'T HAVE HEALTH ENDPOINT
     */
    public function health(): DexResource
    {
        $this->full_url = str_replace("{CHAIN_ID}",$this->network,Endpoint::DEX_HEALTH);
        $this->full_url = str_replace("{DEX}",$this->dex,$this->full_url);
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Healt';
        return $jm->map(json_decode(CurlRequest::get($this->full_url)), new Response());
    }

    /**
     * Get dex ecosystem status
     *
     * $covalent->Dex(X,Y)->ecosystem()
     * @return DexResource
     * @throws JsonMapper_Exception
     * TODO EXCLUDE SPECIFIC DEXS WHO DOESN'T HAVE ECOSYSTEM ENDPOINT
     */
    public function ecosystem()
    {
        $this->full_url = str_replace("{CHAIN_ID}",$this->network,Endpoint::DEX_ECOSYSTEM);
        $this->full_url = str_replace("{DEX}",$this->dex,$this->full_url);
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Ecosystem';
        return $jm->map(json_decode(CurlRequest::get($this->full_url)), new Response());
    }

    /**
     * TODO CREAT A METHOD TO PARSE ENDPOINT WITH SPECIFIC PARAMS - INTERFACE (?)
     */
}