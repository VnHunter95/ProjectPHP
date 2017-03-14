<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/config/DB.class.php');
  class Order{
    private $orderId;
    private $customerId;
    private $orderDate;
    private $deliveryDate;
    private $isPay;
    private $isDelivered;
    private $isCancel;

    public function __construct($id,$customer,$orderD,$deliveryD,$isPay,$isDelivered,$isCancel)
    {
      $this->orderId = $id;
      $this->customerId = $customer;
      $this->orderDate = $orderD;
      $this->deliveryDate = $deliveryD;
      $this->isPay = $isPay;
      $this->isDelivered = $isDelivered;
      $this->isCancel = $isCancel;
    }

    public static function getOrderCountAll()
    {
      $db = new DB();
      $sql = "SELECT COUNT(*) FROM `order` ";
      $result = $db->query_execute($sql);
      $count = $result->fetch_row();
      return $count[0];
    }

  }

?>
