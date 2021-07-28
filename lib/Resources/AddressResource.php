<?php


namespace Covalent\Resources;


use Covalent\Logger;
use Covalent\Request;
use Covalent\Enumeration\Endpoint;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;
use ReflectionClass;

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
     * Get address transactions
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

    /**
     * Get address trasnfert
     *
     * @param string $contract_address
     * @return Response
     * @throws JsonMapper_Exception
     * TODO PARSING TRANSFERS
     */
    public function transfers(string $contract_address)
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Transfers';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::ADDRESS_TRANSFERS);
        $url = str_replace("{ADDRESS}",$this->address,$url);
        $response = $jm->map(json_decode(Request::get($url,["query" => ["contract-address" =>$contract_address]])), new Response());
        if($response->error)
            return $response;
        else
            return $response->data;
    }

    /**
     * Get address holders
     * @return HolderResource
     */
    public function holders(): HolderResource
    {
        $holderResource = new HolderResource($this->logger->getLogger());
        $holderResource->setNetwork($this->network);
        $holderResource->setAddress($this->address);
        return $holderResource;
    }

    /**
     * get address events
     * @return EventsResource
     */
    public function events(): EventsResource
    {
        $eventsResource = new EventsResource($this->logger->getLogger());
        $eventsResource->setNetwork($this->network);
        $eventsResource->setAddress($this->address);
        return $eventsResource;
    }
}