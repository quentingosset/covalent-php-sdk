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
> $covalent->chain(NetworkMainet::ETHEREUM)->address("0x5a6d3b6bf795a3160dc7c139dee9f60ce0f00cae")->transfers("0x1f9840a85d5af5bf1d1762f925bdaddc4201f984")  
> $covalent->chain(NetworkMainet::ETHEREUM)->transaction("0xf6d6298acb1df20ce05d272c270614cc7ff9d4a4dc699e9ac7110dbb36db0130")  
> $covalent->chain(NetworkMainet::ETHEREUM)->nft("0xe4605d46fd0b3f8329d936a8b258d69276cba264")->tokens()
> $covalent->chain(NetworkMainet::ETHEREUM)->nft("0xe4605d46fd0b3f8329d936a8b258d69276cba264")->token(1)->metadata()
> $covalent->chain(NetworkMainet::ETHEREUM)->nft("0xe4605d46fd0b3f8329d936a8b258d69276cba264")->token(123)->transactions()
> $covalent->chain(NetworkMainet::AVALANCHE_C_CHAIN)->contracts()
> $covalent->chain(NetworkMainet::ETHEREUM)->address("0x72c9fb7ed19d3ce51cea5c56b3e023cd918baadf")->holders()
> $covalent->chain(NetworkMainet::ETHEREUM)->address("0x72c9fb7ed19d3ce51cea5c56b3e023cd918baadf")->holders()->block(12810159,12910159)
> $covalent->chain(NetworkMainet::ETHEREUM)->address("0x72c9fb7ed19d3ce51cea5c56b3e023cd918baadf")->events()->block(11086548,11096548)
> $covalent->chain(NetworkMainet::ETHEREUM)->topic("0xddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef")->events()->block(11086548,11096548)

TODO :
- Check all DateTime object and check if this is correctly mappped.
- Fix TODO comment on code
- try to convert all class inside Item/ on Trait
- Fix parse Portfolio_V2 when adam fix the problem of response architecture
- Create differents response object (ex: "Get token balances for address" Response (
  next_update_at,quote_currency,chain_id) is not the same than "Get a block" Response (updated_at))
- Find a way to generate full endpoint URL
- Add parameter (primer/page-size/etc...)