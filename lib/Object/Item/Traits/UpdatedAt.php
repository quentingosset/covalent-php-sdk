<?php


namespace Covalent\Object\Item\Traits;

use DateTime;
use Exception;

trait UpdatedAt
{
    /**
     * updated_at field
     * @var DateTime
     */
    public DateTime $updated_at;

    /**
     * @param string $updated_at
     * @throws Exception
     */
    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = new DateTime(strstr($updated_at, '.', true));
    }
}