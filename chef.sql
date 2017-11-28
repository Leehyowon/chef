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
-- kind : 1=귀걸이 2=목걸이 3=옷 4=슬라임 ...

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

INSERT INTO 'product' VALUES ('win1', 'wingbling', '메이릴리', 7500, 100, 2, '2017-10-21');
INSERT INTO 'product' VALUES ('win2', 'wingbling', '화이트문', 24500, 100, 2, '2017-10-20');
INSERT INTO 'product' VALUES ('win3', 'wingbling', '뮤즈', 9000, 100, 2, '2017-10-22');
INSERT INTO 'product' VALUES ('win4', 'wingbling', '탄생석초커', 3500, 100, 2, '2017-10-23');
INSERT INTO 'product' VALUES ('win5', 'wingbling', '뷰티풀러브', 7500, 100, 2, '2017-10-24');
INSERT INTO 'product' VALUES ('win6', 'wingbling', '루나', 9000, 100, 2, '2017-10-25');
INSERT INTO 'product' VALUES ('win7', 'wingbling', '무궁화', 11900, 100, 2, '2017-10-26');
INSERT INTO 'product' VALUES ('win8', 'wingbling', '오로라스톤', 9000, 100, 2, '2017-10-27');
INSERT INTO 'product' VALUES ('win9', 'wingbling', '별이빛나는밤에', 14000, 100, 2, '2017-10-28');
INSERT INTO 'product' VALUES ('win10', 'wingbling', '나비요정', 23000, 100, 2, '2017-10-29');
INSERT INTO 'product' VALUES ('win11', 'wingbling', '사랑은타이밍초커', 5500, 100, 2, '2017-10-30');



INSERT INTO `consumer` VALUES ('abc1001','def0110','abc1001@naver.com','Jina','01012345678','1998-02-13','F');


INSERT INTO `buy` VALUES (0001,1,'abc1001','Ansan hanyang university','2017-10-29','credit');
