<?php


namespace Covalent\Resources;


use Covalent\CurlRequest;
use Covalent\Enumeration\Endpoint;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\NetworkTestnet;
use Covalent\Response\Response;
use DateTime;
use DateTimeInterface;
use JsonMapper;
use JsonMapper_Exception;

class BlockResource extends CurlRequest
{

    /**
     * @var int
     */
    private int $network;

    /**
     * DexResource constructor.
     * @param int $network
     */
    public function __construct(int $network)
    {
        $this->network = $network;
        $this->init();
    }


    /**
     * Get a block at block_height
     *
     * $covalent->Block(int)->height(int)
     * @param int $height
     * @return mixed
     * @throws JsonMapper_Exception
     */
    public function height(int $height)
    {
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::BLOCK);
        $url = str_replace("{BLOCK_HEIGHT}",$height,$url);
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Block';
        return $jm->map(json_decode(CurlRequest::get($url)), new Response());
    }

    /**
     * Get a block at block_height
     *
     * $covalent->Block(int)->height(int)
     * @param DateTime $start
     * @param DateTime $end
     * @return mixed
     * @throws JsonMapper_Exception
     */
    public function date(DateTime $start, DateTime $end)
    {
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::BLOCK_HEIGHTS);
        $url = str_replace("{START_DATE}",$start->format(DateTimeInterface::ISO8601),$url);
        $url = str_replace("{END_DATE}",$end->format(DateTimeInterface::ISO8601),$url);

        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Block';
        return $jm->map(json_decode(CurlRequest::get($url)), new Response());
    }

    /**
     * TODO CREAT A METHOD TO PARSE ENDPOINT WITH SPECIFIC PARAMS - INTERFACE (?)
     */
}