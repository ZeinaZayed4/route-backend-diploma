USE `route_company`;

CREATE TABLE `stock_transactions` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `productCode` VARCHAR(15) NOT NULL,
    `officeCode` VARCHAR(10) NOT NULL,
    `transaction_type` ENUM('IN', 'OUT') NOT NULL,
    `quantity` INT NOT NULL,
    `transaction_date` DATE NOT NULL,
    FOREIGN KEY (`productCode`) REFERENCES `products`(`productCode`),
    FOREIGN KEY (`officeCode`) REFERENCES `offices`(`officeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
