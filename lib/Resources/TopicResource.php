<?php


namespace Covalent\Resources;


use Covalent\Logger;
use Covalent\Object\Nft;
use Covalent\Request;
use Covalent\Enumeration\Endpoint;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\NetworkTestnet;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class TopicResource extends Request
{
    /**
     * @var string|null
     */
    private ?string $topic;

    /**
     * @var int
     */
    private int $network;

    private Logger $logger;

    /**
     * NftResource constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
        $this->logger->setLogClass(get_called_class());
        $this->init();
    }

    /**
     * @param string|null $topic
     */
    public function setTopic(?string $topic): void
    {
        $this->topic = $topic;
    }

    /**
     * @param int $network
     */
    public function setNetwork(int $network): void
    {
        $this->network = $network;
    }


    /**
     * Get events from topics
     */
    public function events(): EventsResource
    {
        $eventsResource = new EventsResource($this->logger->getLogger());
        $eventsResource->setNetwork($this->network);
        $eventsResource->setTopic($this->topic);
        return $eventsResource;
    }


}