chef.sql
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`(
	`product_id` VARCHAR(20) NOT NULL PRIMARY KEY ,
	`brand` VARCHAR(20) NOT NULL,
	`name` VARCHAR(20) NOT NULL,
	`price` INTEGER NOT NULL,
	`count` INTEGER NOT NULL,
	`kind` INTEGER NOT NULL, 
	`u_date` DATE
)character set utf8;
-- u_date : product upload date
-- u_date > 신상품순 price > 가격 높(낮)은 순 
-- kind : 1=귀걸이 2=옷 3=슬라임 ...  

DROP TABLE IF EXISTS `consumer`;
CREATE TABLE `consumer`(
	`consumer_id` VARCHAR(20) NOT NULL PRIMARY KEY ,
	`pwd` VARCHAR(20) NOT NULL,
	`email` VARCHAR(40) NOT NULL,
	`name` VARCHAR(20) NOT NULL,
	`tel` VARCHAR(20) NOT NULL,
	`birth` DATE NOT NULL,
	`gender` VARCHAR(5) NOT NULL
)character set utf8;

DROP TABLE IF EXISTS `buy`;
CREATE TABLE `buy`(
	`order_id` INTEGER NOT NULL PRIMARY KEY,
	`product_id` INTEGER NOT NULL,
	`consumer_id` VARCHAR(30) NOT NULL,
	`address` VARCHAR(100) NOT NULL,
	`o_date` DATE NOT NULL,
	`payment` VARCHAR(10) NOT NULL 
)character set utf8;
-- o_date : order date 

INSERT INTO `product` VALUES ('woo1', 'wootique','에뜨', 9000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo2', 'wootique','드림캐쳐', 18000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo3', 'wootique','물방울', 8000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo4', 'wootique','링', 10000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo5', 'wootique','체인스틱', 11000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo6', 'wootique','골든서클', 10000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo7', 'wootique','더블링진주', 8000, 100, 1,'2017-10-11');

INSERT INTO `product` VALUES ('dal1', 'dallrang','aaa', 8000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal2', 'dallrang','bbb', 8000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal3', 'dallrang','ccc', 8000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal4', 'dallrang','ddd', 8000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal5', 'dallrang','eee', 8000, 100, 1,'2017-10-11');



INSERT INTO `consumer` VALUES ('abc1001','def0110','abc1001@naver.com','Jina','01012345678','1998-02-13','F');


INSERT INTO `buy` VALUES (0001,1,'abc1001','Ansan hanyang university','2017-10-29','credit');
