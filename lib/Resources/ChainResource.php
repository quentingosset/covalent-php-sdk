<?php


namespace Covalent\Resources;


use Covalent\CurlRequest;
use Covalent\Enumeration\Endpoint;
use Covalent\Response\ChainResponse;
use Covalent\Response\EcosystemResponse;
use Covalent\Response\HealtResponse;
use Covalent\Response\Response;
use JsonMapper;

class ChainResource extends CurlRequest
{
    /**
     * ChainResource constructor.
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * Get all chain status
     *
     * $covalent->Chain()->status()
     * @return DexResource
     * @throws \JsonMapper_Exception
     */
    public function all()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Chain';
        return $jm->map(json_decode(CurlRequest::get(Endpoint::CHAIN_ALL)), new Response());
    }
}