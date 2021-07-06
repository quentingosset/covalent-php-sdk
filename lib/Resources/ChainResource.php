<?php


namespace Covalent\Resources;


use Covalent\CurlRequest;
use Covalent\Enumeration\Endpoint;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\NetworkTestnet;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class ChainResource extends CurlRequest
{
    /**
     * @var int|null
     */
    private ?int $network;

    /**
     * ChainResource constructor.
     * @param int|null $network
     */
    public function __construct(int $network = null)
    {
        $this->network = $network;
        $this->init();
    }

    /**
     * Get all chain
     *
     * $covalent->Chain()->status()
     * @return DexResource
     * @throws JsonMapper_Exception
     */
    public function all()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Chain';
        return $jm->map(json_decode(CurlRequest::get(Endpoint::CHAIN_ALL)), new Response());
    }

    /**
     * Get all chain status
     *
     * $covalent->Chain()->status()
     * @throws JsonMapper_Exception
     */
    public function status()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\ChainStatus';
        $result = $jm->map(json_decode(CurlRequest::get(Endpoint::CHAIN_STATUS)), new Response());

        if(is_null($this->network)){
            return $result;
        }else{
            $match_network = function($value) {
                return $value->chain_id == $this->network;
            };
            return array_values(array_filter($result->data->items,$match_network))[0];
        }
    }
}