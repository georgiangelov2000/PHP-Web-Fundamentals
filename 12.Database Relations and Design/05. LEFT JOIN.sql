select * from CLIENTS
select * from ORDERS

Select CLIENTS.CustomerName, ORDERS.OrderID
from CLIENTS

LEFT JOIN ORDERS ON CLIENTS.CustomerID=ORDERS.CustomerID
ORDER BY CLIENTS.CustomerName