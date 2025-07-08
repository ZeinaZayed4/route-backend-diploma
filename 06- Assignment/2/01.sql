USE `route_company`;

SELECT DISTINCT `orderNumber`
FROM `orderdetails`
WHERE 
	`productCode` LIKE 'S18%'
	AND `priceEach` > 100;
