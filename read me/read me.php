<?php




//### search about  [ any ]  ,  [ all ] in mysql  ( documented ) with query examples 




// The ANY and ALL operators allow you to perform a comparison between a single column value and a range of other values.
// The ANY operator:

// returns a boolean value as a result
// returns TRUE if ANY of the subquery values meet the condition
// ANY means that the condition will be true if the operation is true for any of the values in the range.

// Example :
"SELECT column_name(s)
FROM table_name
WHERE column_name operator ANY
(SELECT column_name
FROM table_name
WHERE condition)";





// The SQL ALL Operator
// The ALL operator:

// returns a boolean value as a result
// returns TRUE if ALL of the subquery values meet the condition
// is used with SELECT, WHERE and HAVING statements
// ALL means that the condition will be true only if the operation is true for all values in the range. 

// HAVING Syntax
"SELECT ALL column_name(s)
FROM table_name
WHERE condition";


// The following SQL statement lists the number of customers in each country. Only include countries with more than 5 customers:
// Example
"SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5";















// ###search about  [ having ] , [ group by ] 
// ( documented ) with query examples 

// The SQL HAVING Clause
// The HAVING clause was added to SQL because the WHERE keyword cannot be used with aggregate functions.

// HAVING BY Syntax
"SELECT column_name(s)
FROM table_name
WHERE condition
GROUP BY column_name(s)
HAVING condition
ORDER BY column_name(s)";

// Example
"SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5";




// The SQL GROUP BY Statement
// The GROUP BY statement groups rows that have the same values into summary rows, like "find the number of customers in each country".

// The GROUP BY statement is often used with aggregate functions (COUNT(), MAX(), MIN(), SUM(), AVG()) to group the result-set by one or more columns.


// GROUP BY Syntax

"SELECT column_name(s)
FROM table_name
WHERE condition
GROUP BY column_name(s)
ORDER BY column_name(s)";

// Example
"SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country";








// ### how to create index in  mysql 
// [ with query examples ] 

// To create indexes, use the CREATE INDEX command:
// CREATE INDEX index_name ON table_name (column_name);
"CREATE INDEX idx_lastname
ON Persons (LastName)";




?>