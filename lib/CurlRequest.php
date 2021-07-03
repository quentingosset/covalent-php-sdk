<?php


namespace Covalent;


use GuzzleHttp\Client;

class CurlRequest
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

    public function page_size(int $page_size): CurlRequest
    {
        $this->page_size = $page_size;
        return $this;
    }

    public function match(string $match): CurlRequest
    {
        $this->match = $match;
        return $this;
    }

    public function primer(string $primer): CurlRequest
    {
        $this->primer = $primer;
        return $this;
    }

    public function get(){
        return $this->client->get($this->full_url)->getBody()->getContents();
    }
}