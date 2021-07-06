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
}