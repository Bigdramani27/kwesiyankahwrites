
<?php
include_once (dirname(__FILE__)) . '/../classes/product_class.php';

//adding a product
function  add_book_controller($productID, $productName, $productImage, $productPrice,  $productFileLocation, $productAuthor, $productCategory,  $productGenre, $productDescription, $publishedDate, $productWeight, $productLanguage, $productAvailable)
{
    $product_instance = new Product();
    return $product_instance->add_book($productID, $productName, $productImage, $productPrice,  $productFileLocation, $productAuthor, $productCategory,  $productGenre, $productDescription, $publishedDate, $productWeight, $productLanguage, $productAvailable);
}

//selecting all products
function select_all_product($start_from, $num_per_page)
{
    $product_instance = new Product();
    return $product_instance->select_all_product($start_from, $num_per_page);
}

//selecting all products category
function select_all_product_category_controller($category, $start_from, $num_per_page)
{
    $product_instance = new Product();
    return $product_instance->select_all_product_category($category, $start_from, $num_per_page);
}

//count all products category
function count_all_product_category_controller($category)
{
    $product_instance = new Product();
    return $product_instance->count_all_product_category($category);
}

//selecting all products genre
function select_all_product_genre_controller($genre, $start_from, $num_per_page)
{
    $product_instance = new Product();
    return $product_instance->select_all_product_genre($genre, $start_from, $num_per_page);
}

//count all products category
function count_all_product_genre_controller($genre)
{
    $product_instance = new Product();
    return $product_instance->count_all_product_genre($genre);
}

//selecting 3 products
function select_3_products_controller()
{
    $product_instance = new Product();
    return $product_instance->select_3_products();
}

//selecting 5 random products
function select_5_products_controller($category)
{
    $product_instance = new Product();
    return $product_instance->select_5_products($category);
}

function select_all_products_controller()
{
    $product_instance = new Product();
    return $product_instance->select_all_products();
}


//selecting one specific product based on the id
function select_one_product_controller($productID)
{
    $product_instance = new Product();
    return $product_instance->select_one_product($productID);
}

//count the number of product
function count_all_product_controller()
{
    $product_instance = new Product();
    return $product_instance->count_all_product();
}

//delete one product
function delete_one_product_controller($productID)
{
    $product_instance = new Product();
    return $product_instance->delete_one_product($productID);
}

//updating a product based on the item id
function update_product_controller($productID, $productName, $productImage, $productPrice,  $productFileLocation, $productAuthor, $productCategory,  $productGenre, $productDescription, $publishedDate, $productWeight, $productLanguage, $productAvailable)
{
    $product_instance = new Product();
    return $product_instance->update_product($productID, $productName, $productImage, $productPrice,  $productFileLocation, $productAuthor, $productCategory,  $productGenre, $productDescription, $publishedDate, $productWeight, $productLanguage, $productAvailable);
}

//select 6 products
function select_6_products_controller()
{
    $product_instance = new Product();
    return $product_instance->select_6_products();
}


?>