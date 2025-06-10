<?php
include_once (dirname(__FILE__)) . '../../settings/connection.php';

class Cart extends Connection
{

    //adding to cart for a specific user
    function add_to_cart($userID, $productID, $quantity)
    {
        return $this->query("insert into cart (userID, productID, quantity) values ('$userID', '$productID', '$quantity' )");
    }

    //selecting user cart
    function select_user_cart($userID)
    {
        return $this->fetch("select * from cart c inner join product p on p.productID = c.productID where c.userID = '$userID'");
    }

    //count user cart
    function count_user_cart($userID)
    {
        return $this->count("select * from cart where userID = '$userID'");
    }

    //selecting user cart
    function select_user_cart_based_on_id($user_id, $cart_id)
    {
        return $this->fetch("select * from cart where user_id = '$user_id' and cart_id = '$cart_id'");
    }

    //checking if user cart exists based on item_id and user_id
    function select_user_cart_based_on_item($userID, $productID)
    {
        return $this->fetchOne("select * from cart where userID = '$userID' and productID = '$productID'");
    }

    //update the quantity for specific item id and user id
    function update_quantity_based_on_item($quantity, $userID, $productID)
    {
        return $this->query("update cart set quantity='$quantity' where userID = '$userID' and productID = '$productID'");
    }

    //select the cart and inner join with item table
    function select_cart_inner_join_item($user_id)
    {
        return $this->fetch("select * from cart c inner join merchandise m on c.item_id = m.item_id where c.user_id = '$user_id'");
    }

    //delete from cart for a specific item for a user
    function delete_one_item_from_cart_for_user($cartID, $userID)
    {
        return $this->query("delete from cart where cartID = '$cartID' and userID = '$userID'");
    }

    //delete from cart for all items for a user
    function delete_all_item_from_cart_for_user($user_id)
    {
        return $this->query("delete from cart where userID = '$user_id'");
    }

    // updating cart quantity for one user
    function update_quantity_cart($cartID, $userID, $quantity)
    {
        return $this->query("update cart set quantity = '$quantity' where cartID = '$cartID' and userID = '$userID'");
    }

    // calculate the total amount for items in the cart
    function total_amount($userID)
    {
        return $this->fetchOne("SELECT round(SUM(product.productPrice *cart.quantity),2) as Amount  FROM cart join product on (product.productID = cart.productID) where cart.userID = '$userID'");
    }

    //inserting to wishlist
    function add_to_wishlist($userID, $productID)
    {
        return $this->query("insert into wishlist (userID, productID) values ('$userID', '$productID')");
    }

    //delete from wishlist for a user for admin
    function delete_product_from_wishlist_admin($productID)
    {
        return $this->query("delete from wishlist where productID = '$productID'");
    }

      //delete from wishlist for a user
    function delete_product_from_wishlist($productID, $userID)
    {
        return $this->query("delete from wishlist where productID = '$productID' and userID = '$userID'");
    }

       //checking if user wishlist exists based on productID and userID
    function select_user_wishlist_based_on_item($productID, $userID)
    {
        return $this->fetchOne("select * from wishlist where productID = '$productID' and userID = '$userID'");
    }

        //select user wishlist
    function select_user_wishlist( $userID)
    {
        return $this->fetch("select * from wishlist w inner join product p on w.productID = p.productID where w.userID = '$userID'");
    }

    //count wishlist for user 
   function count_wishlist_for_user($userID)
    {
        return $this->count("select * from wishlist where userID = '$userID'");
    }

  //delete from cart for admin
    function delete_item_for_admin($productID)
    {
        return $this->query("delete from cart where productID = '$productID'");
    }

}
