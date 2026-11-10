CREATE TABLE tx_pizzadb_domain_model_pizza (
	name varchar(255) DEFAULT '' NOT NULL,
	ingredients text,
	description text,
	price_takeaway decimal(10,2) DEFAULT '0.00' NOT NULL,
	price_eat_in decimal(10,2) DEFAULT '0.00' NOT NULL,
	image int(11) unsigned DEFAULT 0 NOT NULL
);
