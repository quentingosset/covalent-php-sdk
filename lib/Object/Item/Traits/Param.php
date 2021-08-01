<?php


namespace Covalent\Object\Item\Traits;


class Param
{
    use Name,
        Type,
        Indexed,
        DecodedBoolean,
        Value;
}