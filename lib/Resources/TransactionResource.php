<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Logger;
use Covalent\Object\Data;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class TransactionResource extends Request
{
    /**
     * @var int|null
     */
    private ?int $network;
    private Logger $logger;

    /**
     * ChainResource constructor.
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
     * Get all chain
     *
     * $covalent->Chain()->status()
     * @return DexResource
     * @throws JsonMapper_Exception
     */
    public function tx()
    {
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = '\Covalent\Object\Transaction';
        return $jm->map(json_decode(Request::get(Endpoint::CHAIN_ALL)), new Response());
    }
}