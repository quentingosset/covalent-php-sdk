# Covalent PHP SDK

**WORK IN PROGRESS**

If any suggestion ask : StuxR#3487


> $config = array('API_KEY' => 'ckey_xxxx');  
> $covalent = Covalent::config($config);  
> $result = $covalent->Dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->health()  
> echo $result->data->get(0)->synced_block_height  

> $covalent->dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->health()  
> $covalent->dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->ecosystem()  
> $covalent->chain()->all()  
> $covalent->chain()->status()  
> $covalent->chain(NetworkMainet::ETHEREUM)->status()  
> $covalent->chain(NetworkMainet::ETHEREUM)->block()->date(new DateTime("2021-07-06 12:05:00"), new DateTime("2021-07-06 12:06:00"))    
> $covalent->chain(NetworkMainet::ETHEREUM)->block()->height(12422508)  
> $covalent->chain(NetworkMainet::ETHEREUM)->address("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->balance()  
> $covalent->chain(NetworkMainet::ETHEREUM)->address("0x07cFcC9c3297536502C788578f7c42DCc2c6CC2f")->transactions()  


TODO :
- Fix TODO comment on code
- Fix parse Portfolio_V2 when adam fix the problem of response architecture
- Create differents response object (ex: "Get token balances for address" Response (next_update_at,quote_currency,chain_id) is not the same than "Get a block" Response (updated_at))
- Parse log_events of Object/Item/Transaction.php
- Find a way to generate full endpoint URL 
