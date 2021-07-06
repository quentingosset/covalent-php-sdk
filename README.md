# Covalent PHP SDK

**WORK IN PROGRESS**

If any suggestion ask : StuxR#3487


>$config = array('API_KEY' => 'ckey_xxxx');  
>$covalent = Covalent::config($config);  
>$result = $covalent->Dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->health()  
>echo $result->data->get(0)->synced_block_height  

>$covalent->Dex(NETWORK,DEX)->health()  
>$covalent->Dex(NETWORK,DEX)->ecosystem()  
>$covalent->Dex(NETWORK,DEX)->ecosystem()->data->items[0]->liquidity(1,Periodicity::DAYS)  
>$covalent->Dex(NETWORK,DEX)->ecosystem()->data->items[0]->volume(1,Periodicity::DAYS)  
>$covalent->Chain()->all()  
>$covalent->Chain()->status()  
>$covalent->Chain()->status(NetworkMainet::ETHEREUM)  