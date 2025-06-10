<?php

include_once (dirname(__FILE__)) . '../../settings/connection.php';

// inherit the methods from the connection.php file
class Product extends Connection
{
	//adding a product
	function add_book($productID, $productName, $productImage, $productPrice,  $productFileLocation, $productAuthor, $productCategory,  $productGenre, $productDescription, $publishedDate, $productWeight, $productLanguage, $productAvailable)
	{
		return $this->query("insert into product(productID, productName, productPrice, productImage, productFileLocation, productAuthor, productCategory, productGenre, productDescription, publishedDate, productWeight, productLanguage, productAvailable ) values('$productID', '$productName', '$productPrice', '$productImage', '$productFileLocation', '$productAuthor', '$productCategory', '$productGenre', '$productDescription',  '$publishedDate', '$productWeight', '$productLanguage', '$productAvailable')");
	}

	//updating a product based on the product 
	function update_product($productID, $productName, $productImage, $productPrice,  $productFileLocation, $productAuthor, $productCategory,  $productGenre, $productDescription, $publishedDate, $productWeight, $productLanguage, $productAvailable)
	{
		return $this->query("update product set publishedDate ='$publishedDate', productName='$productName', productImage='$productImage', productPrice='$productPrice', productFileLocation='$productFileLocation', productAuthor = '$productAuthor', productCategory='$productCategory', productGenre='$productGenre', productWeight='$productWeight', productLanguage='$productLanguage', productAvailable='$productAvailable', productDescription='$productDescription' where productID = '$productID'");
	}

	//selecting all product
	function select_all_product($start_from, $num_per_page)
	{
		return $this->fetch("select * from product limit $start_from, $num_per_page");
	}

	//selecting all products
	function select_all_products()
	{
		return $this->fetch("select * from product");
	}


	//selecting all product based on category
	function select_all_product_category($category, $start_from, $num_per_page)
	{
		return $this->fetch("select * from product where productCategory='$category' limit $start_from, $num_per_page");
	}

	//count the number of product
	function count_all_product_category($category)
	{
		return $this->count("select * from product where productCategory='$category'");
	}

	//selecting all product based on genre
	function select_all_product_genre($genre, $start_from, $num_per_page)
	{
		return $this->fetch("select * from product where productGenre='$genre' limit $start_from, $num_per_page");
	}

	//count the number of product
	function count_all_product_genre($genre)
	{
		return $this->count("select * from product where productGenre='$genre'");
	}


	//selecting 3 product
	function select_6_products()
	{
		return $this->fetch("select * from product where productAvailable > 0 limit 6");
	}

	//selecting 3 product
	function select_3_products()
	{
		return $this->fetch("select * from product ORDER BY productID DESC limit 3 ");
	}

	// random 5 products for product detail page
	function select_5_products($category)
	{
		return $this->fetch("SELECT * FROM product where productCategory='$category' ORDER BY RAND() LIMIT 5 ");
	}

	//selecting all products based on category
	function select_all_products_category($category)
	{
		return $this->fetch("select * from product where productCategory='$category'");
	}

	//selecting one specific product based on the id
	function select_one_product($productID)
	{
		return $this->fetchOne("select * from product where productID ='$productID'");
	}

	//count the number of product
	function count_all_product()
	{
		return $this->count("select * from product");
	}

	//delete one product
	function delete_one_product($productID)
	{
		return $this->query("delete from product where productID='$productID'");
	}
}
?>