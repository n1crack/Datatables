<?php namespace Ozdemir\Datatables\Bags;


class ErrorBag extends AbstractIterator
{
    /**
     * @param string $element
     */
    public function add(string $element)
    {
        $this->bag[] = $element;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->bag);
    }

    /**
     * @return int
     */
    public function size()
    {
        return count($this->bag);
    }
}
