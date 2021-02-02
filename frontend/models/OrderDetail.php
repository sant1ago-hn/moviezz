<?php
require_once 'models/Model.php';
class OrderDetail extends Model {
  public $order_id;
  public $product_id;
  public $quantity;
  public function insert(){
    $sql_insert = "INSERT INTO order_details(order_id, product_id, quantity) 
    VALUES(:order_id, :product_id, :quantity)";
    $obj_insert = $this->connection->prepare($sql_insert);
    $arr_insert = [
      ':order_id' => $this->order_id,
      ':product_id' => $this->product_id,
      ':quantity' => $this->quantity,
    ];
    return $obj_insert->execute($arr_insert);
  }
}