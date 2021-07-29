<?php


namespace Covalent\Resources;


use Covalent\Enumeration\Endpoint;
use Covalent\Logger;
use Covalent\Object\Data;
use Covalent\Object\Item\Nft\Metadata;
use Covalent\Object\Item\Nft\Token;
use Covalent\Object\Item\Nft\Transaction;
use Covalent\Object\Nft;
use Covalent\Request;
use Covalent\Response\Response;
use JsonMapper;
use JsonMapper_Exception;

class NftResource extends Request
{
    /**
     * @var string|null
     */
    private ?string $address;

    /**
     * @var int
     */
    private int $network;
    private ?int $token_id;
    private Logger $logger;

    /**
     * NftResource constructor.
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
     * @param int|null $token_id
     */
    public function setTokenId(?int $token_id): void
    {
        $this->token_id = $token_id;
    }


    /**
     * Get a list of all token for a NFT Contract
     *
     * @return Response
     * @throws JsonMapper_Exception
     */
    public function tokens()
    {
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Nft::class;
        $jm->classMap['\Covalent\Object\Item\__item'] = Token::class;
        $url = str_replace("{CHAIN_ID}", $this->network, Endpoint::NFT_TOKENS);
        $url = str_replace("{NFT_CONTRACT_ADDRESS}", $this->address, $url);
        $response = $jm->map(json_decode(Request::get($url)), new Response());
        if ($response->error)
            return $response;
        else
            return $response->data;
    }

    /**
     * Get a list of all token for a NFT Contract
     *
     * @param int $token_id
     * @return NftResource
     */
    public function token(int $token_id){
        $this->token_id = $token_id;
        return $this;
    }


    public function metadata()
    {
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Nft::class;
        $jm->classMap['\Covalent\Object\Item\__item'] = Metadata::class;
        $url = str_replace("{CHAIN_ID}", $this->network, Endpoint::NFT_TOKEN_METADATA);
        $url = str_replace("{NFT_CONTRACT_ADDRESS}", $this->address, $url);
        $url = str_replace("{TOKEN_ID}", $this->token_id, $url);
        $response = $jm->map(json_decode(Request::get($url)), new Response());
        if ($response->error)
            return $response;
        else
            return $response->data;
    }

    public function transactions()
    {
        $jm = new JsonMapper();
        $jm->classMap[Data::class] = Nft::class;
        $jm->classMap['\Covalent\Object\Item\__item'] = Transaction::class;
        $url = str_replace("{CHAIN_ID}", $this->network, Endpoint::NFT_TOKEN_TRANSACTIONS);
        $url = str_replace("{NFT_CONTRACT_ADDRESS}", $this->address, $url);
        $url = str_replace("{TOKEN_ID}", $this->token_id, $url);
        $response = $jm->map(json_decode(Request::get($url)), new Response());
        if ($response->error)
            return $response;
        else
            return $response->data;
    }

}