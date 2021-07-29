<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Logger;
use Covalent\Object\Block;
use Covalent\Object\Data;
use Covalent\Request;
use Covalent\Response\Response;
use DateTime;
use DateTimeInterface;
use JsonMapper;
use JsonMapper_Exception;

class BlockResource extends Request
{
    /**
     * @var int
     */
    private int $network;

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
     * @param int $network
     */
    public function setNetwork(int $network): void
    {
        $this->network = $network;
    }

    /**
     * Get a block at block_height
     * @param int $height
     * @throws JsonMapper_Exception
     */
    public function height(int $height)
    {
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::BLOCK);
        $url = str_replace("{BLOCK_HEIGHT}",$height,$url);
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Block::class;
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * Get a block at block_height
     *
     * @param DateTime $start
     * @param DateTime $end
     * @throws JsonMapper_Exception
     */
    public function date(DateTime $start, DateTime $end)
    {
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::BLOCK_HEIGHTS);
        $url = str_replace("{START_DATE}",$start->format(DateTimeInterface::ISO8601),$url);
        $url = str_replace("{END_DATE}",$end->format(DateTimeInterface::ISO8601),$url);

        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Block::class;
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * TODO CREAT A METHOD TO PARSE ENDPOINT WITH SPECIFIC PARAMS - INTERFACE (?)
     */
}