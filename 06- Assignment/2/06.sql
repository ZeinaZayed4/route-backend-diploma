USE `route_company`;

SELECT c.customerName
FROM `customers` c
JOIN `orders` o
    ON c.customerNumber = o.customerNumber
GROUP BY c.customerNumber, c.customerName
HAVING COUNT(o.orderNumber) > 3;
