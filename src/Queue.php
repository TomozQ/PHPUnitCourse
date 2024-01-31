<?php

class Queue
{
  /**
   * Makimum number of items in the queue
   * @var integer
   */
  public const MAX_ITEMS = 5;
  
  /**
   * Queue items
   * @var array
   */
  protected $items = [];

  /**
   * Add an item to the end of the queue
   * 
   * @param mixed $item The item
   * 
   * @throws QueueException if the number of items on the queue exceeds
   *                        the MAX_ITEMS value
   */
  public function push($item)
  {
    if ($this->getCount() == static::MAX_ITEMS) {
      throw new QueueException("Queue is full");
    }
    
    $this->items[] = $item;
  }

  public function pop()
  {
    return array_shift($this->items);
  }

  public function getCount()
  {
    return count($this->items);
  }

  public function clear()
  {
    $this->items = [];
  }
}