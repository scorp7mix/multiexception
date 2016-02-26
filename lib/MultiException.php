<?php

namespace Scorp7mix;

use Scorp7mix\Core\TArrayAccess;
use Scorp7mix\Core\TCountable;
use Scorp7mix\Core\TIterator;

class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator, \Countable
{
    use TArrayAccess;
    use TIterator;
    use TCountable;
}
