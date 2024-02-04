<?php

/**
 * Order
 * 
 * An example order class
 */
class Order
{
  /**
   * Amount
   * @var int
   */
  public $amount = 0;

  /**
   * Paymant gateway dependency
   * @var PaymentGateway
   */
  protected $gateway;

  /**
   * Constructor
   * 
   * @return void
   */
  public function __construct(PaymentGateway $gateway)
  {
    $this->gateway = $gateway;
  }

  public function process()
  {
    return $this->gateway->charge($this->amount);
  }
}