<?php

namespace Covalent;


use Covalent\Enumeration\Dex;
use Covalent\Enumeration\NetworkMainet;
use Covalent\Enumeration\Periodicity;
use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * @property Covalent covalent
 */
class CovalentDexTest extends TestCase
{

    private static Covalent $covalent;

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
        // ok
        //var_dump(self::$covalent->dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->health());
        //print_r(self::$covalent->dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->ecosystem()->data->items[0]->volume(1,Periodicity::DAYS)->volume_quote);
        //var_dump(self::$covalent->chain()->all());
        //var_dump(self::$covalent->chain()->status());
        //var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->status());
        //var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->block()->date(new DateTime("2021-07-06 12:05:00"), new DateTime("2021-07-06 12:06:00")));
        //var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->block()->height(12422508));
        //var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->address("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->balance());
        //var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->address("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->transactions());

        // WAIT DEBUG ADAM
        //var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->address("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->transactions());

        // NOK
        /*
        var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->contract("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->holders());
        var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->address("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->holders());
        var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->contract("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->holders()->date("START_DATE","END_DATE"));
        var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->contract("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->events()->date("START_DATE","END_DATE"));
        var_dump(self::$covalent->chain(NetworkMainet::ETHEREUM)->events()->topic("TOPIC"));


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
