use retail_store_morning;
insert into address(
	address_code,
    public_place,
    street_name,
    number_of_street,
    complement,
    neighborhood,
    city,
    zipcode
) values (
	null,
    'Rua',
    'Agne',
    528,
    null,
    'Itararé',
    'Santa Maria',
    '97045010'
);

insert into address values (
	null,
    'Rua',
    'das Águias',
    276,
    'Fundos',
    'Pontezinha',
    'Cabo de Santo Agostinho',
    '54589070'
);

insert into provider values(
	null,
    '53.017.428/0001-03',
    'Emilly e Natália Alimentos Ltda',
    '(54) 3632-7004',
    1
);
insert into provider values(
	null,
    '68.960.376/0001-81',
    'Carolina e Felipe Adega ME',
    '(53) 2854-8184',
    2
);

insert into product values(
	null,
    'Biscoito Trakinas',
    2.99,
    200
);

insert into product values(
	null,
    'Refrigerante Pitchula',
    4.00,
    1000
);

insert into product values(
	null,
    'Refrigerante Coca-cola 3L',
    6.78,
    900
);

insert into provider_product values(
	1,
    1
);

insert into provider_product values(
	2,
    2
);

insert into provider_product values(
	2,
    3
);
