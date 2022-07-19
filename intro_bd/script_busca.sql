use retail_store_morning;
/* Seleção de dados - Select */
-- Buscar todos os registros de uma tabela
select * from product;

-- Buscar nome e o preço dos produtos
select product_name,product_price from product;

-- Buscar todos os produtos que custem mais de R$ 4,50
select * from product where product_price >= 4.5;

-- Buscar todos os produtos que comecem com Bis
select * from product where product_name like "Bis%";

-- Buscar todos os produtos que tenham Cola no nome
select * from product where product_name like "%Cola%";

-- Organizar a consulta
select * from product /*where*/ order by product_price desc;
select * from product /*where*/ order by product_price,product_quantity desc;

-- Filtro complexo
select * from product where product_quantity > 900 and product_name like "Refrigerante %";

select * from product where product_quantity > 900 or product_name like "Refrigerante %" order by product_quantity asc;