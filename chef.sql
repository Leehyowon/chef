-- chef.sql
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`(
	`product_id` VARCHAR(20) NOT NULL PRIMARY KEY ,
	`brand` VARCHAR(40) NOT NULL,
	`name` VARCHAR(40) NOT NULL,
	`price` INTEGER NOT NULL,
	`count` INTEGER NOT NULL,
	`kind` INTEGER NOT NULL,
	`u_date` DATE
)character set utf8;
-- u_date : product upload date
-- u_date > 신상품순 price > 가격 높(낮)은 순
-- kind : 1=귀걸이 2=목걸이 3=옷 4=슬라임 5=반지...

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
	`product_id` VARCHAR(20) NOT NULL,
	`consumer_id` VARCHAR(30) NOT NULL,
	`address` VARCHAR(100) NOT NULL,
	`o_date` DATE NOT NULL,
	`payment` VARCHAR(10) NOT NULL,
	`price` INTEGER NOT NULL
)character set utf8;
-- o_date : order date

DROP TABLE IF EXISTS `buyPocket`;
CREATE TABLE `buyPocket`(
	`pocket_id` INTEGER NOT NULL PRIMARY KEY,
	`brand` VARCHAR(20) NOT NULL,
	`product_id` VARCHAR(20) NOT NULL,
	`name` VARCHAR(40) NOT NULL,
	`consumer_id` VARCHAR(30) NOT NULL,
	`payment` VARCHAR(10) NOT NULL,
	`price` INTEGER NOT NULL,
	`number` INTEGER NOT NULL
)character set utf8;

INSERT INTO `product` VALUES ('woo1', 'wootique','에뜨', 9000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo2', 'wootique','드림캐쳐', 18000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo3', 'wootique','물방울', 8000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo4', 'wootique','링', 10000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo5', 'wootique','체인스틱', 11000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo6', 'wootique','골든서클', 10000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('woo7', 'wootique','더블링진주', 8000, 100, 1,'2017-10-11');

INSERT INTO `product` VALUES ('dal1', 'dallrang','aaa', 8000, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal2', 'dallrang','bbb', 8500, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal3', 'dallrang','ccc', 8300, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal4', 'dallrang','ddd', 8100, 100, 1,'2017-10-11');
INSERT INTO `product` VALUES ('dal5', 'dallrang','eee', 8000, 100, 1,'2017-10-11');

INSERT INTO `product` VALUES ('win1', 'wingbling', '메이릴리', 7500, 100, 2, '2017-10-21');
INSERT INTO `product` VALUES ('win2', 'wingbling', '화이트문', 24500, 100, 2, '2017-10-20');
INSERT INTO `product` VALUES ('win3', 'wingbling', '뮤즈', 9000, 100, 2, '2017-10-22');
INSERT INTO `product` VALUES ('win4', 'wingbling', '탄생석초커', 3500, 100, 2, '2017-10-23');
INSERT INTO `product` VALUES ('win5', 'wingbling', '뷰티풀러브', 7500, 100, 2, '2017-10-24');
INSERT INTO `product` VALUES ('win6', 'wingbling', '루나', 9000, 100, 2, '2017-10-25');
INSERT INTO `product` VALUES ('win7', 'wingbling', '무궁화', 11900, 100, 2, '2017-10-26');
INSERT INTO `product` VALUES ('win8', 'wingbling', '오로라스톤', 9000, 100, 2, '2017-10-27');
INSERT INTO `product` VALUES ('win9', 'wingbling', '별이빛나는밤에', 14000, 100, 2, '2017-10-28');
INSERT INTO `product` VALUES ('win10', 'wingbling', '나비요정', 23000, 100, 2, '2017-10-29');
INSERT INTO `product` VALUES ('win11', 'wingbling', '사랑은타이밍초커', 5500, 100, 2, '2017-10-30');

INSERT INTO `product` VALUES ('joy1', 'joy', '라퓨타', 12500, 100, 1, '2017-11-01');
INSERT INTO `product` VALUES ('joy2', 'joy', '하트벨벳줄난', 18000, 100, 1, '2017-11-01');
INSERT INTO `product` VALUES ('joy3', 'joy', '리쏨진주드롭', 15300, 100, 1, '2017-11-02');
INSERT INTO `product` VALUES ('joy4', 'joy', '보니타크리스탈드롭', 9500, 100, 1, '2017-11-03');
INSERT INTO `product` VALUES ('joy5', 'joy', '러빙그레이스', 11500, 100, 1, '2017-11-03');
INSERT INTO `product` VALUES ('joy6', 'joy', '시에나크리스탈', 12500, 100, 1, '2017-11-03');
INSERT INTO `product` VALUES ('joy7', 'joy', '쥬뗌므송치하트', 7900, 100, 1, '2017-11-04');
INSERT INTO `product` VALUES ('joy8', 'joy', '레나스팽글', 13900, 100, 1, '2017-11-04');
INSERT INTO `product` VALUES ('joy9', 'joy', '앤더자개언발', 12000, 100, 1, '2017-11-05');
INSERT INTO `product` VALUES ('joy10', 'joy', '문크리스링', 13500, 100, 1, '2017-11-05');
INSERT INTO `product` VALUES ('joy11', 'joy', '달진주언발', 14500, 100, 1, '2017-11-06');
INSERT INTO `product` VALUES ('joy12', 'joy', '썬셋글라스드롭', 15800, 100, 1, '2017-11-07');


INSERT INTO `product` VALUES ('ven1', 'veneno', '달밤', 12500, 200, 1, '2017-10-27');
INSERT INTO `product` VALUES ('ven2', 'veneno', '별밤', 10000, 150, 1, '2017-10-31');
INSERT INTO `product` VALUES ('ven3', 'veneno', '무지개', 13000, 300, 1, '2017-11-01');
INSERT INTO `product` VALUES ('ven4', 'veneno', '무화과', 10500, 100, 1, '2017-11-07');
INSERT INTO `product` VALUES ('ven5', 'veneno', '프로젝트', 9500, 200, 1, '2017-11-08');
INSERT INTO `product` VALUES ('ven6', 'veneno', '트리플링', 8500, 100, 1, '2017-11-11');
INSERT INTO `product` VALUES ('ven7', 'veneno', '제주말', 12500, 99, 1, '2017-11-13');
INSERT INTO `product` VALUES ('ven8', 'veneno', '못된고양이', 14500, 70, 1, '2017-11-15');
INSERT INTO `product` VALUES ('ven9', 'veneno', '잘생긴치타', 12000, 100, 1, '2017-11-16');
INSERT INTO `product` VALUES ('ven10', 'veneno', '진주', 9000, 200, 1, '2017-11-16');
INSERT INTO `product` VALUES ('ven11', 'veneno', '릴리', 9000, 100, 1, '2017-11-20');
INSERT INTO `product` VALUES ('ven12', 'veneno', '음표', 8000, 100, 1, '2017-11-21');

INSERT INTO `product` VALUES ('rin1', 'ringing', '달빛한모금', 13000, 200, 5, '2017-10-24');
INSERT INTO `product` VALUES ('rin2', 'ringing', '체리블라썸', 12500, 99, 5, '2017-10-26');
INSERT INTO `product` VALUES ('rin3', 'ringing', '도깨비방망이', 12000, 199, 5, '2017-10-27');
INSERT INTO `product` VALUES ('rin4', 'ringing', '그림자', 15000, 300, 5, '2017-10-28');
INSERT INTO `product` VALUES ('rin5', 'ringing', '아름다운', 12500, 200, 5, '2017-11-01');
INSERT INTO `product` VALUES ('rin6', 'ringing', '전주비빔밥', 12500, 100, 5, '2017-11-02');
INSERT INTO `product` VALUES ('rin7', 'ringing', '곰세마리', 10500, 20, 5, '2017-11-04');
INSERT INTO `product` VALUES ('rin8', 'ringing', '지우개', 9500, 100, 5, '2017-11-05');
INSERT INTO `product` VALUES ('rin9', 'ringing', '몽땅연필', 8000, 300, 5, '2017-11-10');
INSERT INTO `product` VALUES ('rin10', 'ringing', '거친생각', 12000, 200, 5, '2017-11-11');
INSERT INTO `product` VALUES ('rin11', 'ringing', '불안한눈빛', 13000, 150, 5, '2017-11-12');
INSERT INTO `product` VALUES ('rin12', 'ringing', '시계', 12500, 200, 5, '2017-11-15');

INSERT INTO `product` VALUES ('slim1', 'sliming', '우주', 5000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim2', 'sliming', '지구', 10000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim3', 'sliming', '태양', 12500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim4', 'sliming', '액체괴물', 9500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim5', 'sliming', '기기괴괴', 7500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim6', 'sliming', '인생', 4500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim7', 'sliming', '태양아래', 6500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim8', 'sliming', '같은그림자', 8000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim9', 'sliming', '같은시계', 8000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim10', 'sliming', '지구지킴이', 9000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim11', 'sliming', '괴종시계', 12500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slim12', 'sliming', '구두방', 11500, 200, 4, '2017-11-15');

INSERT INTO `product` VALUES ('slimgo1', 'slimingo', '우주인', 5000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo2', 'slimingo', '지구별', 10000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo3', 'slimingo', '태양에너지', 12500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo4', 'slimingo', '괴이현상', 9500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo5', 'slimingo', '만화방', 7500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo6', 'slimingo', '도서관', 4500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo7', 'slimingo', '착한고양이', 6500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo8', 'slimingo', '사자머리', 8000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo9', 'slimingo', '초코송이', 8000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo10', 'slimingo', '마우스', 9000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo11', 'slimingo', '한해', 12500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('slimgo12', 'slimingo', '교통', 11500, 200, 4, '2017-11-15');

INSERT INTO `product` VALUES ('bes1', 'beslime', '새벽하늘', 5000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes2', 'beslime', '노을빛', 10000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes3', 'beslime', '동양의꽃', 12500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes4', 'beslime', '따뜻한햇빛', 9500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes5', 'beslime', '뒷산', 7500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes6', 'beslime', '뒷뜰', 4500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes7', 'beslime', '초록괴물', 6500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes8', 'beslime', '기억', 8000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes9', 'beslime', '추억', 8000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes10', 'beslime', '겨울냄새', 9000, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes11', 'beslime', '안개', 12500, 200, 4, '2017-11-15');
INSERT INTO `product` VALUES ('bes12', 'beslime', '마지막', 11500, 200, 4, '2017-11-15');



INSERT INTO `consumer` VALUES ('abc1001','def0110','abc1001@naver.com','Jina','01012345678','1998-02-13','F');
INSERT INTO `consumer` VALUES ('root','root','root@naver.com','Jina','01012345678','1998-02-13','F');


INSERT INTO `buy` VALUES (0001,'woo1','root','Ansan hanyang university','2017-10-29','credit',2000);

INSERT INTO `buyPocket` VALUES (0001,'wootique','woo1','에뜨','root','credit',3000,1);

