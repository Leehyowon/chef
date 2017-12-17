# CHEF - Centre of Hanyang univ.ERICA Founding Club

## 1. Members
+ 2016003 Kwon Chaeeun
+ 2016003454 Kim Hyebeen
+ 2016003 Nam Hyemin
+ 2016003609 Sung Jina
+ 2016003854 Lee Hyowon

## 2. What is this 'CHEF' page?
<p> This ‘**CHEF**’ page is Online Shopping Page.
We don’t cell “own” clothes, earrings, necklaces and slimes.</p>
<p> Many Foundation Club is in Hanyang univ.ERICA.
There are many founding club for earrings, clothes, necklaces, and slimes in Hanyang university ERICA.</p>
<p> So, we serve as brokers for many founding clubs through our online shopping page called ‘**CHEF**’.</p>

## 3. Detailed field

### - Data Collection
  * jewelry : /image/wootique ||dallrang

**Hyowon Lee**
  * jewelry : /image/joy || veneno || wingbling || ringing
  * slime : /image/slime1 || slime2 || slime3 

### - HTML
**Hyebeen Kim**
  * ((Do not use this html. It's not usefull)) a product information (Wootique) : /things/things.html
  * product review page for above html : /things/things_blog.html
  * new writing page of product review : /things/writingblog.html
  * We can look what I ordered; JANGBAGUNI : /mypage/buypocket.html
  * I can see mypage : /mypage/mypage.html
  * We can see wish list : /mypage/want.html

**Hyowon Lee**
  * main page of CHEF : /main/index1.html
  * notice board : /board/notice.html
  * event board : /board/event.html
  * QnA board : /board/qna.html
  * information board : /board/info.html
  * input format for QnA board : /board/write_qna.html
  * categories of QnA board : /board/category_qna/
  * categories of information board : /board/category_info/

### - CSS
**Hyowon Lee**
  * basis of main page : /main/main.css

**Hyebeen Kim**
  * design of things*.html : /things/things.css
  * design of buypocket.html : /mypage/buypocket.css

### - PHP
**Jina Sung**
  * Log in : /login/login.php
  * Sign Up : /login/signup.php
  * Find ID : /login/findID.php
  * Find Password : /login/findpw.php

**Chaeeun Kwon**
  * bybrand : bybrand.php

**Hyebeen Kim**
  * each product's information shopping page : /things/eachThings.php

### - JavaScript
**Hyebeen Kim**
  * thing's function information of javascript : /things/ThingFunc.js

### - Database
**Chaeein Kwon**
  * create table & insert data : chef.sql

## 4. DATABASE
**Create DB**
  * mysql -uroot -proot 
  * create database chef;
  * exit
  * mysql -uroot -proot  chef < chef.sql (drag file!!)

**Create User**
  * mysql -uroot -proot
  * use mysql;
  * create user ‘chef’@‘%’ identified by ‘1234’;
  * grant all privileges on chef.* to chef@‘%’;
  * flush privileges;

**If you want to log in, Use**
ID : abc1001 / PW : def0110
<!-- # 제목
## 소제목
**A**
* a
* a
----------
B
* b
* b -->

