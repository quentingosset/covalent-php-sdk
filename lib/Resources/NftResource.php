<?php


namespace Covalent\Resources;


use Covalent\Object\Nft;
use Covalent\Request;
use Covalent\Enumeration\Endpoint;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\NetworkTestnet;
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

    /**
     * NftResource constructor.
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
     * Get a list of all token for a NFT Contract
     *
     * @return Response
     * @throws JsonMapper_Exception
     */
    public function tokens()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Nft';
        $jm->classMap['\Covalent\Object\Item\Nft'] = '\Covalent\Object\Item\Nft\Token';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::NFT_TOKENS);
        $url = str_replace("{NFT_CONTRACT_ADDRESS}",$this->address,$url);
        $response = $jm->map(json_decode(Request::get($url)), new Response());
        if($response->error)
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
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Nft';
        $jm->classMap['\Covalent\Object\Item\Nft'] = '\Covalent\Object\Item\Nft\Metadata';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::NFT_TOKEN_METADATA);
        $url = str_replace("{NFT_CONTRACT_ADDRESS}",$this->address,$url);
        $url = str_replace("{TOKEN_ID}",$this->token_id,$url);
        $response = $jm->map(json_decode(Request::get($url)), new Response());
        if($response->error)
            return $response;
        else
            return $response->data;
    }

    public function transactions()
    {
        $jm = new JsonMapper();
        $jm->classMap['\Covalent\Object\Data'] = '\Covalent\Object\Nft';
        $jm->classMap['\Covalent\Object\Item\Nft'] = '\Covalent\Object\Item\Nft\Transaction';
        $url = str_replace("{CHAIN_ID}",$this->network,Endpoint::NFT_TOKEN_TRANSACTIONS);
        $url = str_replace("{NFT_CONTRACT_ADDRESS}",$this->address,$url);
        $url = str_replace("{TOKEN_ID}",$this->token_id,$url);
        $response = $jm->map(json_decode(Request::get($url)), new Response());
        if($response->error)
            return $response;
        else
            return $response->data;
    }

}