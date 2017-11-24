CREATE TABLE product(
	product_id INTEGER NOT NULL PRIMARY KEY ,
	brand VARCHAR(20) NOT NULL,
	price INTEGER NOT NULL,
	count INTEGER NOT NULL,
	kind INTEGER NOT NULL, 
	u_date DATE
)character set utf8;
-- u_date : product upload date
-- u_date > 신상품순 price > 가격 높(낮)은 순 
--kind : 1=귀걸이 2=옷 3=슬라임 ...  

CREATE TABLE consumer(
	consumer_id VARCHAR(20) NOT NULL PRIMARY KEY ,
	pwd VARCHAR(20) NOT NULL,
	email VARCHAR(40) NOT NULL,
	tel VARCHAR(20) NOT NULL,
	birth DATE NOT NULL,
	gender VARCHAR(5) NOT NULL
)character set utf8;

CREATE TABLE buy(
	order_id INTEGER NOT NULL PRIMARY KEY,
	product_id INTEGER NOT NULL,
	consumer_id INTEGER NOT NULL,
	address VARCHAR(100) NOT NULL,
	o_date DATE NOT NULL,
	payment VARCHAR(10) NOT NULL 
)character set utf8;
-- o_date : order date 