<?php
include_once (dirname(__FILE__)) . '/../classes/cart_class.php';

// adding to cart for a specific user
function add_to_cart_controller($userID, $productID, $quantity)
{
    $cart = new Cart();
    return $cart->add_to_cart($userID, $productID, $quantity);
}

//selecting user cart
function select_user_cart_controller($userID)
{
    $cart = new Cart();
    return $cart->select_user_cart($userID);
}

//count user cart
function count_user_cart_controller($userID)
{
    $cart = new Cart();
    return $cart->count_user_cart($userID);
}

//selecting user cart
function select_user_cart_based_on_id_controller($user_id, $cart_id)
{
    $cart = new Cart();
    return $cart->select_user_cart_based_on_id($user_id, $cart_id);
}

//checking if user cart exists based on item_id and user_id
function  select_user_cart_based_on_item_controller($userID, $productID)
{
    $cart = new Cart();
    return $cart->select_user_cart_based_on_item($userID, $productID);
}

//update the quantity for specific item id and user id
function update_quantity_based_on_item_controller($quantity, $userID, $productID)
{
    $cart = new Cart();
    return $cart->update_quantity_based_on_item($quantity, $userID, $productID);
}

//select the cart and inner join with item table
function select_cart_inner_join_item_controller($user_id)
{
    $cart = new Cart();
    return $cart->select_cart_inner_join_item($user_id);
}

//delete from cart for a specific item for a user
function delete_one_item_from_cart_for_user_controller($cartID, $userID)
{
    $cart = new Cart();
    return $cart->delete_one_item_from_cart_for_user($cartID, $userID);
}


//delete from cart for a specific item for a user
function delete_all_item_from_cart_for_user_controller($user_id)
{
    $cart = new Cart();
    return $cart->delete_all_item_from_cart_for_user($user_id);
}

// updating cart quantity
function update_quantity_cart_controller($cart_id, $user_id, $quantity)
{
    $cart = new Cart();
    return $cart->update_quantity_cart($cart_id, $user_id, $quantity);
}
// calculate the total amount for items in the cart
function total_amount_controller($userID)
{
    $cart = new Cart();
    return $cart->total_amount($userID);
}

// add to wishlist
function add_to_wishlist_controller($userID, $productID)
{
    $cart = new Cart();
    return $cart->add_to_wishlist($userID, $productID);
}

// delete from  wishlist for admin
function delete_product_from_wishlist_admin_controller($productID)
{
    $cart = new Cart();
    return $cart->delete_product_from_wishlist_admin($productID);
}

//delete form wishlist for user

function delete_product_from_wishlist_controller($productID, $userID)
{
    $cart = new Cart();
    return $cart->delete_product_from_wishlist($productID, $userID);
}


// select from  wishlist for user
function select_user_wishlist_based_on_item_controller($productID, $userID)
{
    $cart = new Cart();
    return $cart->select_user_wishlist_based_on_item($productID, $userID);
}

// select from  wishlist for user
function select_user_wishlist_controller($userID)
{
    $cart = new Cart();
    return $cart->select_user_wishlist($userID);
}

// count   wishlist for user
function count_wishlist_for_user_controller($userID)
{
    $cart = new Cart();
    return $cart->count_wishlist_for_user($userID);
}

function delete_item_for_admin_controller($productID)
{
    $cart = new Cart();
    return $cart->delete_item_for_admin($productID);
}


?>
