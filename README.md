# covalent-php-sdk

WORK IN PROGRESS

If any suggestion ask : StuxR#3487


$config = array('API_KEY' => 'ckey_xxxx');

$covalent = Covalent::config($config);

$result = $covalent->Dex(NetworkMainet::ETHEREUM,Dex::SUSHISWAP)->health()

echo $result->data->get(0)->synced_block_height