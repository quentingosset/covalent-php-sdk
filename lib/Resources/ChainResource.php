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
     * ChainResource constructor.
     */
    public function __construct()
    {
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
     * @return DexResource
     * @throws JsonMapper_Exception
     */
    public function status_all()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\ChainStatus';
        return $jm->map(json_decode(CurlRequest::get(Endpoint::CHAIN_STATUS)), new Response());
    }

    /**
     * Get specific chain status
     *
     * $covalent->Chain()->status()e
     * @param int $network
     * @return array
     * @throws JsonMapper_Exception
     */
    public function status_specific(int $network)
    {
        $match_network = function($value) use ($network) {
            return $value->chain_id == $network;
        };
        return array_values(array_filter($this->status_all()->data->items,$match_network))[0];
    }

    public function __call($method, $arguments) {
        if($method == 'status') {
            if(count($arguments) == 0) {
                return call_user_func_array(array($this,'status_all'), $arguments);
            }
            else if(count($arguments) == 1) {
                return call_user_func_array(array($this,'status_specific'), $arguments);
            }
        }
    }
}