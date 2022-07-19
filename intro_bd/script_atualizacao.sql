-- Atualização de registros
update product set product_quantity = 5000;

-- Baixa em estoque
update product set product_quantity = product_quantity - 1000 where product_code = 1;
select * from product;

-- Atualizar mais de um campo
update product set product_name = "Refri", product_price = 5.5 where product_code = 3;
select * from product;