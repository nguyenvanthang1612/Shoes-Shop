<?php

namespace App\Models;

class Cart
{
    public $products = null;
    public $totalPrice = 0;

    public function __construct($cart)
    {
        if ($cart)
        {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
        }
    }

    public function addCart($product, $id)
    {
        $newProduct = [
            'quantity' => 0,
            'price' => 0,
            'productInfo' => $product,
        ];
        if($this->products)
        {
            if(array_key_exists($id, $this->products))
            {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
    }

    public function deleteItemCart($id)
    {
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function updateCartQuantity($id, $quantity)
    {
        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $quantity * $this->products[$id]['productInfo']->price;
        $totalPrice = 0;
        foreach ($this->products as $productId => $product) {
            $totalPrice += $this->products[$productId]['price'];
        }
        $this->totalPrice = $totalPrice;
    }
}
