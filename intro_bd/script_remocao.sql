-- Remoção de registros
set foreign_key_checks = 0; -- Desabilitando
delete from product where product_code = 1;
set foreign_key_checks = 1; -- Habilitando