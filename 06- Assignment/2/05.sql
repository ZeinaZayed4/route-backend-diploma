USE `route_company`;

SELECT `firstName`, `lastName`, o.`officeCode`, `city`
FROM `employees` e
JOIN `offices` o
ON e.officeCode = o.officeCode
WHERE o.officeCode IN (4, 6);
