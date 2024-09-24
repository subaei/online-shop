<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class WishlistManagement
{

    // Add item to wishlist
    static public function addItemToWishlist($product_id)
    {
        $wishlist_items = self::getWishlistItemsFromCookie();
        
        $existing_item = null;
        
        foreach ($wishlist_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $existing_item = $key;
                break;
            }
        }
        
        if ($existing_item !== null) {
            $wishlist_items[$existing_item]['quantity']++;
            $wishlist_items[$existing_item]['total_amount'] = $wishlist_items[$existing_item]['quantity'] * $wishlist_items[$existing_item]['unit_amount'];
        } else {
            $product = Product::where('id', $product_id)->first(['id', 'name', 'price', 'images']);
            if ($product) {
                $wishlist_items[] = [
                    'product_id' => $product_id,
                    'name'       => $product->name,
                    'image'      => $product->images[0],
                    'quantity'   => 1,
                    'unit_amount'   => $product->price,
                    'total_amount'   => $product->price,
                ];
            }
        }
        
        self::addWishlistItemsToCookie($wishlist_items);
        
        return count($wishlist_items);
    }

    // Add item to wishlist with quantity
    static public function addItemToWishlistWithQty($product_id, $qty = 1)
    {
        $wishlist_items = self::getWishlistItemsFromCookie();
        
        $existing_item = null;
        
        foreach ($wishlist_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $existing_item = $key;
                break;
            }
        }
        
        if ($existing_item !== null) {
            $wishlist_items[$existing_item]['quantity'] = $qty;
            $wishlist_items[$existing_item]['total_amount'] = $wishlist_items[$existing_item]['quantity'] * $wishlist_items[$existing_item]['unit_amount'];
        } else {
            $product = Product::where('id', $product_id)->first(['id', 'name', 'price', 'images']);
            if ($product) {
                $wishlist_items[] = [
                    'product_id' => $product_id,
                    'name'       => $product->name,
                    'image'      => $product->images[0],
                    'quantity'   => $qty,
                    'unit_amount'   => $product->price,
                    'total_amount'   => $product->price,
                ];
            }
        }
        
        self::addWishlistItemsToCookie($wishlist_items);
        
        return count($wishlist_items);
    }

    // Add cart items to cookies
    static public function addWislistItemsToCookie($wishlist_items)
    {
        Cookie::queue('wishlist_items', json_encode($wishlist_items), 60 * 24 * 30);
    }

    // Remove item from wishlist
    static public function removeWishlistItem($product_id)
    {
        $wishlist_items = self::getWishlistItemsFromCookie();

        foreach ($wishlist_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                unset($wishlist_items[$key]);
            }
        }

        self::addWishlistItemsToCookie($wishlist_items);

        return $wishlist_items;
    }

    // Add wishlist items to cookies
    static public function addWishlistItemsToCookie($wishlist_items)
    {
        Cookie::queue('wishlist_items', json_encode($wishlist_items), 60 * 24 * 30);
    }

    // Get all wishlist items from cookies
    static public function getWishlistItemsFromCookie()
    {
        $wishlist_items = json_decode(Cookie::get('wishlist_items'), true);
        
        if (!$wishlist_items) {
            $wishlist_items = [];
        }

        return $wishlist_items;
    }

    // Clear cart items from cookies
    static public function clearWishlistItems()
    {
        Cookie::queue(Cookie::forget('wishlist_items'));
    }

    // Increment item quantity
    static public function incrementQuantityToCartItem($product_id)
    {
        $wishlist_items = self::getWishlistItemsFromCookie();

        foreach ($wishlist_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                $wishlist_items[$key]['quantity']++;
                $wishlist_items[$key]['total_amount'] = $wishlist_items[$key]['quantity'] * $wishlist_items[$key]['unit_amount'];
            }
        }

        self::addWishlistItemsToCookie($wishlist_items);
        
        return $wishlist_items;
    }

    // Decrement item quantity
    static public function decrementQuantityToCartItem($product_id)
    {
        $wishlist_items = self::getWishlistItemsFromCookie();

        foreach ($wishlist_items as $key => $item) {
            if ($item['product_id'] == $product_id) {
                if ($wishlist_items[$key]['quantity'] > 1) {
                    $wishlist_items[$key]['quantity']--;
                $wishlist_items[$key]['total_amount'] = $wishlist_items[$key]['quantity'] * $wishlist_items[$key]['unit_amount'];
                }
            }
        }

        self::addWishlistItemsToCookie($wishlist_items);
        
        return $wishlist_items;
    }
}