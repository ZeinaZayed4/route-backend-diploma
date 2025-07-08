CREATE DATABASE `route_store_management` COLLATE utf8mb4_unicode_ci;

USE `route_store_management`;

CREATE TABLE `governorates` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255)
);

CREATE TABLE `stores` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255),
    `address` VARCHAR(255),
    `governorate_id` INT UNSIGNED,
    FOREIGN KEY (`governorate_id`) REFERENCES `governorates`(`id`)
);

CREATE TABLE `suppliers` (
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255),
    `phone` VARCHAR(255),
    `email` VARCHAR(255),
    `brief_date` TEXT
);

CREATE TABLE `products` (
    `id` INT UNSIGNED  PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255),
    `code` VARCHAR(255),
    `description` TEXT,
    `price` DECIMAL,
    `supplier_id` INT UNSIGNED,
    FOREIGN KEY (`supplier_id`) REFERENCES `suppliers`(`id`)
);

CREATE TABLE `store_products` (
    `store_id` INT UNSIGNED,
    `product_id` INT UNSIGNED,
    PRIMARY KEY (`store_id`, `product_id`),
    FOREIGN KEY (`store_id`) REFERENCES `stores`(`id`),
    FOREIGN KEY (`product_id`) REFERENCES `products`(`id`)
);
