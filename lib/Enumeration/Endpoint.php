<?php


namespace Covalent\Enumeration;


abstract class Endpoint
{
    const DEX_HEALTH = '{CHAIN_ID}/xy=k/{DEX}/health/';
    const DEX_ECOSYSTEM = '{CHAIN_ID}/xy=k/{DEX}/ecosystem/';
    const CHAIN_ALL = 'chains/';
    const CHAIN_STATUS = 'chains/status/';
    const BLOCK = '{CHAIN_ID}/block_v2/{BLOCK_HEIGHT}/';
    const BLOCK_HEIGHTS = '{CHAIN_ID}/block_v2/{START_DATE}/{END_DATE}/';
    const ADDRESS_BALANCE = '{CHAIN_ID}/address/{ADDRESS}/balances_v2/';
    const ADDRESS_PORTFOLIO = '{CHAIN_ID}/address/{ADDRESS}/portfolio_v2/';
    const ADDRESS_TRANSACTIONS = '{CHAIN_ID}/address/{ADDRESS}/transactions_v2/';
    const ADDRESS_TRANSFERS = '{CHAIN_ID}/address/{ADDRESS}/transfers_v2/';
    const TRANSACTION = '{CHAIN_ID}/transaction_v2/{TX_HASH}/';
}