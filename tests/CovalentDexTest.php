<?php

namespace Covalent;


use PHPUnit\Framework\TestCase;

class CovalentDexTest extends TestCase
{

    /**
     * @var Covalent $covalent;
     */
    public static $covalent;

    /**
     * @inheritDoc
     */
    public static function setUpBeforeClass(): void
    {
        $config = array(
            'API_KEY' => 'ckey_xxxx',
        );

        self::$covalent = Covalent::config($config);

    }

    public function test(){
        //$this->expectException(SdkException::class);
        self::$covalent->Dex(1,"Uniswap");

    }
}
