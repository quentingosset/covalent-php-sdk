<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Logger;
use Covalent\Object\Data;
use Covalent\Object\Ecosystem;
use Covalent\Object\Healt;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class DexResource extends Request
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

    private Logger $logger;


    /**
     * DexResource constructor.
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        $this->logger->setLogClass(get_called_class());
        $this->init();
    }

    /**
     * @param int|null $network
     */
    public function setNetwork(?int $network): void
    {
        $this->network = $network;
    }

    /**
     * @param string|null $dex
     */
    public function setDex(?string $dex): void
    {
        $this->dex = $dex;
    }

    /**
     * Get all pools
     *
     * @return DexResource
     */
    public function pools()
    {
        return $this;
    }

    /**
     * Get dex health status
     *
     * @return DexResource
     * @throws JsonMapper_Exception
     * TODO EXCLUDE SPECIFIC DEXS WHO DOESN'T HAVE HEALTH ENDPOINT
     */
    public function health()
    {
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::DEX_HEALTH);
        $url = str_replace("{DEX}",$this->dex,$url);
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Healt::class;
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * Get dex ecosystem status
     * @return \Covalent\Object\Ecosystem
     * @throws JsonMapper_Exception
     * TODO EXCLUDE SPECIFIC DEXS WHO DOESN'T HAVE ECOSYSTEM ENDPOINT
     */
    public function ecosystem()
    {
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::DEX_ECOSYSTEM);
        $url = str_replace("{DEX}",$this->dex,$url);
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Ecosystem::class;
        return $jm->map(json_decode(Request::get($url)), new Response());
    }
}