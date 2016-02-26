<?php

namespace Scorp7mix\Core;

trait TCountable
{
    protected $data = [];

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }
}
