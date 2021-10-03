SELECT A.CustomerName AS CustomerName1, B.CustomerName AS CustomerName2, A.Country
FROM CLIENTS A, CLIENTS B
WHERE A.CustomerID <> B.CustomerID
AND A.Country = B.Country
ORDER BY A.Country;