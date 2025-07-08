USE `route_company`;

SELECT *
FROM `payments`
WHERE
    DAY(`paymentDate`) = 5
    OR DAY(`paymentDate`) = 6;