<?php


namespace Covalent\Resources;


use Covalent\Request;
use Covalent\Enumeration\Endpoint;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\NetworkTestnet;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class TransactionResource extends Request
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
    public function tx()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Transaction';
        return $jm->map(json_decode(Request::get(Endpoint::CHAIN_ALL)), new Response());
    }
}