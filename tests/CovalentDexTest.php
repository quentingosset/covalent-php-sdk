<?php

namespace Covalent;


use Covalent\Enumeration\Dex;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\Periodicity;
use DateTime;
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
            'API_KEY' => 'ckey_xxxx'
        );

        self::$covalent = Covalent::config($config);

    }

    public function test(){
        //var_dump(self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->health());
        //print_r(self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->ecosystem()->data->items[0]->volume(1,Periodicity::DAYS)->volume_quote);


        //var_dump(self::$covalent->Chain()->status());
        //var_dump(self::$covalent->Chain(NetworkMainet::ETHEREUM)->status());
        //var_dump(self::$covalent->Block(NetworkMainet::ETHEREUM)->height(12422508));
        //var_dump(self::$covalent->Block(NetworkMainet::ETHEREUM)->date(new DateTime("2021-07-06 12:05:00"), new DateTime("2021-07-06 12:06:00")));


        /*$param = new Param();
        $param
            ->page_size(9999)
            ->match('{"contract_address": "0x1f9840a85d5af5bf1d1762f925bdaddc4201f984"}')
            ->primer('{ddd}');
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->page_size(9999)->match('{"contract_address": "0x1f9840a85d5af5bf1d1762f925bdaddc4201f984"}')->primer('{ddd}')->pools();
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->pools()->page_size(9999)->match('{"contract_address": "0x1f9840a85d5af5bf1d1762f925bdaddc4201f984"}')->primer('{ddd}')->get();
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->prams($param)->pools();

        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->prams($param)->pool(pool_address,DATA);

        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->pool(pool_address,TRANSACTION);
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->tokens();
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->token(token_address,DATA);
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->token(token_address,TRANSACTION);
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->address(address,BALANCE);
        self::$covalent->Dex(NetworkMainet::ETHEREUM,Dex::UNISWAP)->address(address,TRANSACTION);*/
    }
}
