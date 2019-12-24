ALTER TABLE orders
ADD FOREIGN KEY (customerNumber) REFERENCES customers(customerNumber);

ALTER TABLE payments
ADD FOREIGN KEY (customerNumber) REFERENCES customers(customerNumber);

CREATE TABLE orderDetails(
orderNumber INT NOT NULL,
productCode VARCHAR(50) NOT NULL);

ALTER TABLE orderDetails
ADD PRIMARY KEY(orderNumber, productCode);

ALTER TABLE orderDetails
MODIFY COLUMN orderNumber INT NOT NULL AUTO_INCREMENT;

ALTER TABLE orderDetails
ADD FOREIGN KEY (orderNumber) REFERENCES orders(orderNumber),
ADD FOREIGN KEY (productCode) REFERENCES products(productCode);

ALTER TABLE products
ADD COLUMN productLine VARCHAR(50);
ALTER TABLE products
ADD FOREIGN KEY (productLine) REFERENCES productsLine(productLine);

ALTER TABLE  customers
ADD COLUMN salesRepEmployeeNumber INT;

ALTER TABLE customers
ADD FOREIGN KEY (salesRepEmployeeNumber) REFERENCES employees(employeeNumber);

ALTER TABLE employees
ADD COLUMN reportTo INT,
ADD FOREIGN KEY (reportTo) REFERENCES employees(employeeNumber);

ALTER TABLE employees
ADD COLUMN officeCode VARCHAR(10),
ADD FOREIGN KEY (officeCode) REFERENCES offices(officeCode);