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
    public function save($orderDetail)
    {
      $db = new Db();
      $sql = sprintf("INSERT INTO `order` (`customer_id`,`order_date`,`delivery_date`,`is_pay`,`is_delivered`,`is_cancel`)
          VALUES('%s','%s','%s',%s,%s,%s)",
           mysqli_real_escape_string($db->connect(),$this->customerId),
           mysqli_real_escape_string($db->connect(),$this->orderDate),
           mysqli_real_escape_string($db->connect(),$this->deliveryDate),
           mysqli_real_escape_string($db->connect(),$this->isPay),
           mysqli_real_escape_string($db->connect(),$this->isDelivered),
           mysqli_real_escape_string($db->connect(),$this->isCancel)
         );
      $newId = $db->query_execute_return_id($sql);
      if($newId == false)
      {
        return false;
      }
      $sql="INSERT INTO order_detail(`order_id`,`product_id`,`quantity`) VALUES ";
      foreach($orderDetail as $item)
      {
        $sql .= sprintf(" ('%s','%s','%s') ,",
          mysqli_real_escape_string($db->connect(),$newId),
          mysqli_real_escape_string($db->connect(),$item['product_id']),
          mysqli_real_escape_string($db->connect(),$item['quantity'])
        );
      }
      $sql=chop($sql,',');
      $result = $db->query_execute($sql);
      return $result;
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
