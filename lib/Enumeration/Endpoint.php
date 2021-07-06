<?php


namespace Covalent\Enumeration;


abstract class Endpoint
{
    const DEX_HEALTH = '{CHAIN_ID}/xy=k/{DEX}/health/';
    const DEX_ECOSYSTEM = '{CHAIN_ID}/xy=k/{DEX}/ecosystem/';
    const CHAIN_ALL = 'chains/';
    const CHAIN_STATUS = 'chains/status/';
}