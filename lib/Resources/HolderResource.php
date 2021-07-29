<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Logger;
use Covalent\Object\Block;
use Covalent\Object\Data;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class HolderResource extends Request
{
    /**
     * @var string|null
     */
    private ?string $address;

    /**
     * @var int
     */
    private int $network;
    private Logger $logger;

    /**
     * AddressResource constructor.
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        $this->logger->setLogClass(get_called_class());
        $this->init();
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param int $network
     */
    public function setNetwork(int $network): void
    {
        $this->network = $network;
    }

    /**
     * @param int $starting_block
     * @param int|null $ending_block
     * @return Response
     * @throws JsonMapper_Exception
     */
    public function block(int $starting_block = Block::LATEST, int $ending_block = null)
    {
        if(is_null($ending_block)){
            $jm = new JsonMapper();
            $jm->classMap[Data::class] = '\Covalent\Object\Holders';
            $url = str_replace("{CHAIN_ID}", $this->network, Endpoint::TOKENS_HOLDERS);
            $url = str_replace("{ADDRESS}",$this->address,$url);
            $params = ["block-height" => $starting_block == Block::LATEST? "":  $starting_block];
            $response = $jm->map(json_decode(Request::get($url,["query" => $params])), new Response());
        }else{
            $jm = new JsonMapper();
            $jm->classMap[Data::class] = '\Covalent\Object\HoldersChanges';
            $url = str_replace("{CHAIN_ID}", $this->network, Endpoint::TOKENS_HOLDERS_CHANGE);
            $url = str_replace("{ADDRESS}",$this->address,$url);
            $params = ["starting-block" => $starting_block == Block::LATEST? "":  $starting_block, "ending-block" => $ending_block];
            $response = $jm->map(json_decode(Request::get($url,["query" => $params])), new Response());
        }

        if($response->error)
            return $response;
        else
            return $response->data;

    }

}