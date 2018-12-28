<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 28.12.2018
 * Time: 9:24
 */

class Product
{
  public $id;
  public $name;
  public $price;
  public $category;
  public $vendorCode;
  public $vendor;

  public function __construct($id = null, $name = null, $price = null, $category = null, $vendorCode = null, $vendor = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
    $this->vendorCode = $vendorCode;
    $this->vendor = $vendor;
  }

  public function showProductInfo()
  {

    echo '<hr>';
    echo "$this->name - $this->category - $this->vendor - $this->price euro <br>";
  }
}

class ProductReturnToVendor extends Product
{
  public $returnReason;
  public $dateOfReturn;
  public $returnCondition;

  public function __construct($id = null, $name = null, $price = null, $category = null, $vendorCode = null,
                              $vendor = null, $returnReason = null, $dateOfReturn = null, $returnCondition = null)
  {
    parent::__construct($id, $name, $price, $category, $vendorCode, $vendor);
    $this->returnReason = $returnReason;
    $this->dateOfReturn = $dateOfReturn;
    $this->returnCondition = $returnCondition;
  }
  public function showProductInfo() {
    parent::showProductInfo();
    echo "return-reason: $this->returnReason - $this->dateOfReturn - condition: $this->returnCondition<br>";
  }
}