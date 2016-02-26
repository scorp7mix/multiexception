<?php

namespace Scorp7mix\Core;

class Arrayable implements \ArrayAccess, \Iterator, \Countable
{
    use TStd;
    use TArrayAccess;
    use TIterator;
    use TCountable;

    /**
     * Arrayable constructor.
     * @param array $data
     *
     * Objects can be constructed from array
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Helper to use object data as string
     */

    /**
     * @return string
     */
    public function __toString()
    {
        return json_encode($this->data);
    }
}
