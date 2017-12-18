# CHEF - Centre of Hanyang univ.ERICA Founding Club

## 1. Members
+ 2016003290 Kwon Chaeeun
+ 2016003454 Kim Hyebeen
+ 2016003463 Nam Hyemin
+ 2016003609 Sung Jina
+ 2016003854 Lee Hyowon

## 2. What is this 'CHEF' page?
<p> This ‘<strong>CHEF</strong>’ page is Online Shopping Page.
We don’t cell “own” clothes, earrings, necklaces and slimes.</p>
<p> Many Foundation Club is in Hanyang univ.ERICA.
There are many founding club for earrings, clothes, necklaces, and slimes in Hanyang university ERICA. However, access to the founding clubs was low.</p>
<p> So, To make up for this, we serve as brokers for many founding clubs through our online shopping page called ‘<strong>CHEF</strong>’.</p>

## 3. Detailed field

### - Data Collection
**Hyemin Nam**
  * jewelry : /image/wootique ||dallrang

**Hyowon Lee**
  * jewelry : /image/joy || veneno || wingbling || ringing
  * slime : /image/slime1 || slime2 || slime3
  

### - HTML
**Hyebeen Kim**
  * product review page for above html : /things/things_blog.html
  * new writing page of product review : /things/writingblog.html
  * We can look what I ordered;JANGBAGUNI : /mypage/buypocket.html
  * I can see mypage : /mypage/mypage.html
  * We can see wish list : /mypage/want.html

**Hyowon Lee**
  * main page of CHEF : /main/index1.html
  
**Hyemin Nam**
* customer care : /customer/customer.html
* nav of all pages
* image slider of main page

### - CSS
**Hyemin Nam**
* all css file

### - PHP
**Jina Sung**
  * Sign Up & Log in : /login/signup.php , signupCheck.php , login_ok.php
  * Log Out : /login/logout.php
  * Find ID : /login/findID.php
  * Find Password : /login/findpw.php, newPW.php
  * User Info : /mypage/info.php
  * Buy Pocket : /mypage/buypocket.php, buypockerC.php
  * Buy : /things/buyCheck.php
  * Search : /main/search.php
  * Details of Things : /things/eachThings.php

**Chaeeun Kwon**
  * bybrand : brand.php
  * bycategory : categ.php
  * Order Info : order.php

**Hyebeen Kim**
  * each product's information shopping page : /things/eachThings.php

### - JavaScript
**Hyebeen Kim**
  * eachThings.php's function information of javascript : /things/ThingFunc.js
  
**Hyemin Nam**
* image slider of main page(reference of web)
* login & signup & find id & find pw & current login status(reference of web)

**Jina Sung**
* search & User info & Search

### - Database
**Chaeein Kwon**
  * create table & connect data : chef.sql
  
### - Every Path is...
* http://localhost:8888/chef/~ like this.  
* It would be better to start with http://localhost:8888/chef/main/index1.html   

## 4. HOW TO CONNECT DATABASE
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
  
**Do not copy**
 * Copying may cause errors. Please type directly.
 
**If you want to log in, Use**
ID : abc1001 / PW : def0110  or  ID : root / PW : root

## 5. REFERENCE & SOURCE OF PRODUCT PHOTO
**Founding Clubs OF Hanyang univ.ERICA**
  * dallrang
  * wootique
  * joy
  * sliming
  * beslime
  * ringing
  * veneno
  * wingbling

## 6. LANGUAGED USED & STRUCTURE
    1. html
    2. css
    3. php
    4. javascript
    5. mysql
