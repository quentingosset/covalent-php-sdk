<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Logger;
use Covalent\Object\Chain;
use Covalent\Object\ChainStatus;
use Covalent\Object\Contracts;
use Covalent\Object\Data;
use Covalent\Object\Transactions;
use Covalent\Request;
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
     * @throws JsonMapper_Exception
     */
    public function all()
    {
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Chain::class;
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
        $jm->classMap[Data::class] = ChainStatus::class;
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
        $blockResource = new BlockResource($this->logger->getLogger());
        $blockResource->setNetwork($this->network);
        return $blockResource;
    }

    /**
     * @param string $address
     * @return AddressResource
     */
    public function address(string $address): AddressResource
    {
        $addressResource = new AddressResource($this->logger->getLogger());
        $addressResource->setNetwork($this->network);
        $addressResource->setAddress($address);
        return $addressResource;
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
        $jm->classMap[Data::class] = Transactions::class;
        $url = str_replace("{CHAIN_ID}", $this->network, Endpoint::TRANSACTION);
        $url = str_replace("{TX_HASH}",$tx,$url);
        return $jm->map(json_decode(Request::get($url)), new Response());
    }

    /**
     * @param string $address
     * @return NftResource
     */
    public function nft(string $address): NftResource
    {
        $nftResource = new NftResource($this->logger->getLogger());
        $nftResource->setNetwork($this->network);
        $nftResource->setAddress($address);
        return $nftResource;
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
        $jm->classMap[Data::class] = Contracts::class;
        $url = str_replace("{CHAIN_ID}", $this->network, Endpoint::CONTRACT_LISTS);
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