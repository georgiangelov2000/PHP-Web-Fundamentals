
SELECT ORDERS.OrderID, CLIENTS.CustomerName, CLIENTS.ContactName
FROM ORDERS
RIGHT JOIN CLIENTS ON ORDERS.CustomerID=CLIENTS.CustomerID
ORDER BY ORDERS.OrderID