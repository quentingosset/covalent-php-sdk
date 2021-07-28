<?php


namespace Covalent\Resources;


use Covalent\Logger;
use Covalent\Request;
use Covalent\Enumeration\Endpoint;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\NetworkTestnet;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class ChainResource extends Request
{
    /**
     * @var int|null
     */
    private ?int $network;
    private Logger $logger;

    /**
     * ChainResource constructor.
     * @param int|null $network
     * @param Logger $logger
     */
    public function __construct(Logger $logger, int $network = null)
    {
        $this->network = $network;
        $this->init();
        $this->logger = $logger;
        $this->logger->setLogClass(get_called_class());
    }

    /**
     * Get all chain
     *
     * @throws JsonMapper_Exception
     */
    public function all()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Chain';
        return $jm->map(json_decode(Request::get(Endpoint::CHAIN_ALL)), new Response());
    }

    /**
     * Get all chain status
     *
     * @throws JsonMapper_Exception
     */
    public function status()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\ChainStatus';
        $result = $jm->map(json_decode(Request::get(Endpoint::CHAIN_STATUS)), new Response());

        if(is_null($this->network)){
            return $result;
        }else{
            $match_network = function($value) {
                return $value->chain_id == $this->network;
            };
            return array_values(array_filter($result->data->items,$match_network))[0];
        }
    }

    /**
     * @return BlockResource
     */
    public function block(): BlockResource
    {
        return new BlockResource($this->network);
    }

    /**
     * @param string $address
     * @return AddressResource
     */
    public function address(string $address): AddressResource
    {
        return new AddressResource($this->network,$address);
    }

    /**
     * Get transaction
     *
     * @param string $tx
     * @return Response
     * TODO PARSING LOG_EVENTS
     * @throws JsonMapper_Exception
     */
    public function transaction(string $tx)
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Transactions';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::TRANSACTION);
        $url = str_replace("{TX_HASH}",$tx,$url);
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * @param string $address
     * @return NftResource
     */
    public function nft(string $address): NftResource
    {
        return new NftResource($this->network,$address);
    }


    /**
     * Get all contracts
     *
     * @return Response
     * @throws JsonMapper_Exception
     */
    public function contracts(): Response
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Contracts';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::CONTRACT_LISTS);
        $url = str_replace("{ID}","all",$url);
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * @param string $topic
     * @return TopicResource
     */
    public function topic(string $topic): TopicResource
    {
        $topicResource = new TopicResource($this->logger->getLogger());
        $topicResource->setNetwork($this->network);
        $topicResource->setTopic($topic);
        return $topicResource;
    }
}