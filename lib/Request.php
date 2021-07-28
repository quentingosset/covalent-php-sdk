<?php


namespace Covalent;


use GuzzleHttp\Client;

class Request
{
    /**
     * primer syntax
     * @var string $primer
     */
    protected string $primer;

    /**
     * primer match syntax
     * @var string $match
     */
    protected string $match;

    /**
     * Number of results per page.
     * @var int $page_size
     */
    protected int $page_size;


    /**
     * Guzzle Client
     * @var Client $client
     */
    protected Client $client;


    /**
     * Initialize the curl resource
     *
     */

    public function init()
    {
        $this->client = new Client(['base_uri' => Covalent::$host."/".Covalent::$version."/", 'auth' => [Covalent::$config['API_KEY'], ''], 'verify' => false ]);
    }

    public function page_size(int $page_size): Request
    {
        $this->page_size = $page_size;
        return $this;
    }

    public function match(string $match): Request
    {
        $this->match = $match;
        return $this;
    }

    public function primer(string $primer): Request
    {
        $this->primer = $primer;
        return $this;
    }

    public function get($uri,$params = []){
        return $this->client->get($uri,$params)->getBody()->getContents();
    }
}