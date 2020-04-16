<?php

namespace App;

class Cart
{
	public $products = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->products = $oldCart->products;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($product, $id){
		$newProduct = array('qty' => 0, 'price' => $product->price, 'productInfo' => $product);
		if($this->products){
			if(array_key_exists($id, $this->products)){
				$newProduct = $this->products[$id];
			}
		}
		$newProduct['qty']++;
		$newProduct['price'] = $product->price * $newProduct['qty'];
		$this->products[$id] = $newProduct;
		$this->totalQty++;
		$this->totalPrice += $product->price;
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->products[$id]['qty'];
		$this->totalPrice -= $this->products[$id]['price'];
		unset($this->products[$id]);
	}
}
?>