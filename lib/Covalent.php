<?php


namespace Covalent;

use Covalent\Exception\SdkException;

class Covalent
{

    /**
     * @var string Default base URL
     */
    public static $host = 'https://api.covalenthq.com';

    /**
     * @var string Default API version
     */
    public static $version = 'v1';

    /**
     * API configurations
     *
     * @var array
     */
    public static $config = array(
    );

    /**
     * List of available resources which can be called from this client
     *
     * @var string[]
     */
    protected $resources = array(
        'Dex',
        'Chain'
    );

    /**
     * Covalent constructor
     *
     * @param array $config
     *
     * @return void
     */
    public function __construct($config = array())
    {
        if(!empty($config)) {
            Covalent::config($config);
        }
    }

    /**
     * Configure the SDK client
     *
     * @param array $config
     *
     * @return Covalent
     */
    public static function config($config)
    {
        /**
         * Reset config to it's initial values
         */
        self::$config = array(
            'host' => self::$host,
            'version' => self::$version
        );

        foreach ($config as $key => $value) {
            self::$config[$key] = $value;
        }

        return new Covalent;
    }


    /**
     * Return CovalentResource instance for a resource.
     * Called like an object method (with parenthesis) optionally with the resource ID as the first argument
     * @example $covalent->DEX($name,$network); //Return a specific product defined by $productID
     *
     * @param string $resourceName
     * @param array $arguments
     *
     * @return mixed
     * @throws SdkException if the $name is not a valid CovalentResource resource.
     */
    public function __call(string $resourceName, array $arguments)
    {
        if (!in_array($resourceName, $this->resources)) {
            if (isset($this->childResources[$resourceName])) {
                $message = "$resourceName is a child resource of " . $this->childResources[$resourceName] . ". Cannot be accessed directly.";
            } else {
                $message = "Invalid resource name $resourceName. Pls check the API Reference to get the appropriate resource name.";
            }
            throw new SdkException($message);
        }

        $resourceClassName = __NAMESPACE__ . "\\Resources\\$resourceName" . "Resource";

        $arg0 = !empty($arguments[0]) ? $arguments[0] : null;
        $arg1 = !empty($arguments[1]) ? $arguments[1] : null;
        $arg2 = !empty($arguments[2]) ? $arguments[2] : null;

        //Initiate the resource object
        return new $resourceClassName($arg0,$arg1,$arg2);
    }
}