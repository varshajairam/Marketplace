create table user(
	id int auto_increment,
	name varchar(25) not null,
	password varchar(16) not null,
	primary key(id)
); -- - marketplace

create table product(
	id int auto_increment,
	name varchar(25) not null,
	description varchar(255) not null,
	price float not null,
	created_date datetime not null,
	primary key(id)
);-- - both 

create table review(
	id int not null,
	user_id int,
	user_name varchar(25) not null,
	product_id int,
	description varchar(255),
	rating_1 float,
	rating_2 float,
	rating_3 float,
	time timestamp default current_timestamp,
	primary key(id),
	foreign key(product_id) references product(id)
); --- both

create table view(
	user_id int,
	product_id int,
	user_name varchar(25) not null,
	time_stamp timestamp default current_timestamp,
	foreign key(product_id) references product(id)
); -- - both

SELECT A.product_id, A.product_name, A.product_price, A.product_image, A.rating_1, A.rating_2, A.rating_3 
FROM (
	SELECT p.id as product_id, p.name as product_name, p.price as product_price, p.url as product_image, avg(coalesce(r.rating_1,0)) as rating_1, avg(coalesce(r.rating_2,0)) as rating_2, avg(coalesce(r.rating_3,0)) as rating_3
	FROM product p LEFT JOIN review r
	on p.id = r.product_id
	GROUP BY p.id ,p.name,p.price
)A LEFT JOIN review R
ON A.product_id=R.product_id;


{
	product_id: 1,
	name: "ASdasd",
	desc: "asdasd",
	price: 122,
	review : [
		{
			user_id: asdasd
			user_name: asdasd
			description
		},
		{
			user_id: asdasd
			user_name: asdasd
			description
			rating_1
			rating_1
			rating_1
		},
	],
	average: {
		rating1: 2
		rating1: 2
		rating1: 2
	}
}

[
	{
		product_id: 1,
		name:
		price:
		average: {
			rating_1: 
			rating_1: 
			rating_1: 
		}
	},
	{
		product_id: 2,
		name:
		price:
		average: {
			rating_1: 
			rating_1: 
			rating_1: 
		}
	},
	{
		product_id: 3,
		name:
		price:
		average: {
			rating_1: 
			rating_1: 
			rating_1: 
		}
	}
]

INSERT INTO review (user_id, user_name, product_id, description, rating_1, rating_2, rating_3)
VALUES (1, "Jayasurya", 3, "First comment", 5, 5, 5);

alter table review modify column id int auto_increment;