<?php


namespace Covalent\Object\Item\Traits;

use DateTime;
use Exception;

trait NextUpdateAt
{
    /**
     * next_update_at field
     * @var DateTime
     */
    public DateTime $next_update_at;

    /**
     * @param string $next_update_at
     * @throws Exception
     */
    public function setNextUpdateAt(string $next_update_at): void
    {
        $this->next_update_at = new DateTime(strstr($next_update_at, '.', true));
    }
}