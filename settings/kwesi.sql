drop database if exists kwesi;

create database kwesi;

use kwesi;

create table users(
    userID BigInt not null,
    firstName varchar(50) not null,
    lastName varchar(50) not null,
    email varchar(100) not null,
    password varchar(255) not null,
    otp int not null,
    userRole varchar (20) not null,
    primary key (userID)
);

create table shipping(
    shippingID BigInt not null,
    userID BigInt not null,
    firstName varchar(50) not null,
    lastName varchar(50) not null,
    country varchar(50) not null,
    street varchar(100) not null,
    apartment varchar(100),
    city varchar(100) not null,
    zip varchar(10),
    phone varchar(20) not null,
    primary key(shippingID),
    foreign key (userID) references users (userID)
);

create table product(
    productID BigInt not null,
    productName varchar(80) not null,
    productImage varchar(3000) NOT NULL,
    productFileLocation varchar(3000) NOT NULL,
    productAuthor varchar (100) not null,
    productCategory varchar (30) not null,
    productGenre varchar (30) not null,
    productDescription LONGTEXT not null,
    productPrice float not null,
    publishedDate date not null,
    productWeight varchar(20) not null,
    productLanguage varchar (40) not null,
    productAvailable int not null,
    primary key(productID)
);

create table cart(
    cartID int not null auto_increment,
    productID BigInt not null,
    userID BigInt not null,
    quantity int not null,
    primary key(cartID),
    foreign key (userID) references users(userID),
    foreign key (productID) references product(productID)
);

create table orders(
    orderID BigInt not null,
    invoiceID int not null,
    productID BigInt not null,
    userId BigInt not null,
    total float not null,
    orderNote text, 
    primary key(orderID),
    foreign key (userID) references users(userID),
    foreign key (productID) references product(productID)
);

create table wishlist(
    wishlistID int not null auto_increment,
    userId BigInt not null,
    productID BigInt not null,
    primary key(wishlistID),
    foreign key (userID) references users(userID),
    foreign key (productID) references product(productID)
);