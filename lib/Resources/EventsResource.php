<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Object\Block;
use Covalent\Object\Data;
use Covalent\Request;
use Covalent\Resources\AddressResource;
use Covalent\Response\Response;
use DateTime;
use JsonMapper;
use JsonMapper_Exception;

class EventsResource extends Request
{
    /**
     * @var string|null
     */
    private ?string $address;

    /**
     * @var int
     */
    private int $network;

    /**
     * AddressResource constructor.
     * @param int $network
     * @param string $address
     */
    public function __construct(int $network, string $address)
    {
        $this->address = $address;
        $this->network = $network;
        $this->init();
    }

    /**
     * @param int $starting_block
     * @param int $ending_block
     * @return Response
     * @throws JsonMapper_Exception
     */
    public function block(int $starting_block, int $ending_block)
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Events';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::CONTRACT_EVENT);
        $url = str_replace("{ADDRESS}",$this->address,$url);
        $params = ["starting-block" => $starting_block, "ending-block" => $ending_block];
        $response = $jm->map(json_decode(Request::get($url,["query" => $params])), new Response());

        if($response->error)
            return $response;
        else
            return $response->data;

    }

}