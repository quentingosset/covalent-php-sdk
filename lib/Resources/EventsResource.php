<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Logger;
use Covalent\Object\Data;
use Covalent\Request;
use Covalent\Response\Response;
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
     * @var string|null
     */
    private ?string $topic;

    private Logger $logger;

    /**
     * AddressResource constructor.
     * @param Logger $logger
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
     * @param string|null $topic
     */
    public function setTopic(?string $topic): void
    {
        $this->topic = $topic;
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
        $jm->classMap[Data::class] = '\Covalent\Object\Events';

        if($this->logger->getLogClass(-2) == TopicResource::class){
            $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::TOPIC_EVENT);
            $url = str_replace("{TOPIC}",$this->topic,$url);
            $params = ["starting-block" => $starting_block, "ending-block" => $ending_block];
        }else{
            $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::CONTRACT_EVENT);
            $url = str_replace("{ADDRESS}",$this->address,$url);
            $params = ["starting-block" => $starting_block, "ending-block" => $ending_block];
        }
        $response = $jm->map(json_decode(Request::get($url,["query" => $params])), new Response());
        if($response->error)
            return $response;
        else
            return $response->data;

    }

}