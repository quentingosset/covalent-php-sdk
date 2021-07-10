<?php


namespace Covalent\Resources;


use Covalent\Request;
use Covalent\Enumeration\Endpoint;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\NetworkTestnet;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class AddressResource extends Request
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
     * Get address balance
     *
     * @throws JsonMapper_Exception
     */
    public function balance()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Balance';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::ADDRESS_BALANCE);
        $url = str_replace("{ADDRESS}",$this->address,$url);
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * Get address portfolio
     *
     * @throws JsonMapper_Exception
     * TODO FINISH THIS ENDPOINT WHEN ADAM FIX THE RESPONSE ARCHITECTURE
     */
    public function portfolio()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Portfolio';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::ADDRESS_PORTFOLIO);
        $url = str_replace("{ADDRESS}",$this->address,$url);
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * Get address portfolio
     *
     * @throws JsonMapper_Exception
     * @return Response
     * TODO PARSING LOG_EVENTS
     */
    public function transactions()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Transactions';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::ADDRESS_TRANSACTIONS);
        $url = str_replace("{ADDRESS}",$this->address,$url);
        return $jm->map(json_decode(Request::get($url)), new Response());
    }
}