<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>Бязевые потолки + ремонт</title>
     <!-- seo-->
 <meta name="description" itemprop="description" content="Компания Бязевые Натяжные Потолки выполняет свои работы качественно и в срок за разумные деньги. Нас рекомендуют друзьям и знакомым.">
<meta name="keywords" itemprop="keywords" content="Бязевые потолки в Краснодаре, бязевые натяжные потолки в Краснодаре, натяжные потолки из бязи, потолки, ремонт в Краснодаре, ремонт под ключ, отделка, натяжные бязевые потолки, бязевые натяжные потолки, натяжные бязывые потолки Краснодар, Краснодар натяжные бязевые потолки">
<link rel="canonical" href="http://bzppr.ru/">
<!-- end of seo/-->  
    <link href="css/style_zayavka.css" rel="stylesheet" type="text/css">
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  </head>
<body>

	<div class="page-wrapper">
		<div id="header">
                
                <div id="search">
                    <input type="text" class="form-control" placeholder="Поиск по сайту">
                    <input class="btn btn-default" type="button" value="Искать">
                    <div id="phone">
                    <meta name="format-detection" content="telephone=no">
                        <p>+7&nbsp(961)&nbsp535-0001</p>
                    </div>
                </div>
            </div>
		<ul  id="menu">

                            <li> <a class="home" href="http://bzppr.ru/">Главная</a>
                            </li>
                            <li> <a class="remont" href="remont">Ремонт под ключ</a>
                            </li>
                            <li> <a class="potolok" href="potolok">Бязевые потолки</a>
                            </li>
                            <li> <a class="portfolio" href="portfolio">Портфолио</a>
                            </li>
                            <li> <a class="zayavka" href="zayavka.php">Оставить заявку</a>
                            </li>
        </ul>

        <div id="main">
            

        	<div id="left">
        		<ul>
              <li>
                <a class="leftinteres" href="interes" >
                  <p>Это интересно</p>
                </a>
              </li>
              <li>
                <a class="leftakcii" href="akcii">
                  <p>Акции и Скидки</p>
                </a>
              </li>
              <li >
                <a class="leftprice" href="price" >
                  <p>Прайс лист</p>
                </a>
              </li>
            </ul>
            
          </div>
        	<div id="middle">
          <?php
//Если форма отправлена
if(isset($_POST['submit'])) {

    //Проверка Поля ИМЯ
    if(trim($_POST['contactname']) == '') {
        $hasError = true;
    } else {
        $name = trim($_POST['contactname']);
    }

    //Проверка поля ТЕМА
    if(trim($_POST['subject']) == '') {
        $hasError = true;
    } else {
        $subject = trim($_POST['subject']);
    }

    //Проверка правильности ввода EMAIL
    if(trim($_POST['email']) == '')  {
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

    //Проверка наличия ТЕКСТА сообщения
    if(trim($_POST['message']) == '') {
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }

    //Если ошибок нет, отправить email
    if(!isset($hasError)) {
        $emailTo = 'postmaster@bzppr.ru'; //Сюда введите Ваш email
        $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
        $headers = 'From: bzppr.ru <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
}
?>
          <p>Отправьте нам Ваш запрос с помощью формы, расположенной ниже, и мы обязательно Вам перезвоним, чтобы обсудить все детали!
          </p>
                <?php if(isset($hasError)) { //Если найдены ошибки ?>
                    <p class="error">Проверьте, пожалуйста, правильность заполения всех полей.</p>
                <?php } ?>

                <?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
                    <p id="sent"><strong>Запрос успешно отправлен!</strong></p>
                    <p><strong>Мы свяжемся с Вами в кратчайшие сроки!</strong></p>
                <?php } ?>
        	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ваше имя</label>
                      <input type="text" class="form-control" name="contactname" id="contactname" value="" class="required"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ваша почта</label>
                       <input type="text" class="form-control" name="email" id="email" value="" class="required email" />
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Ваш номер телефона</label>
                        <input type="text" class="form-control" name="subject" id="subject" value="" class="required" placeholder="+7" />
                  </div>
                   <div class="form-group">
                   <label for="exampleInputEmail1">Ваш вопрос к нам</label>
                    <textarea class="form-control" rows="4" name="message" id="message" class="required"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Отправить" name="submit" />
                  </div>
            </form>
        	</div>
        	
        </div>
        <div class="page-footer">
          <div id="footermenu">

        <ul>

                            <li> <a class="home" href="http://bzppr.ru/">Главная</a>
                            </li>
                            <li> <a class="remont" href="remont">Ремонт под ключ</a>
                            </li>
                            <li> <a class="potolok" href="potolok">Бязевые потолки</a>
                            </li>
                            <li> <a class="portfolio" href="portfolio">Портфолио</a>
                            </li>
                            <li> <a class="zayavka" href="zayavka.php">Оставить заявку</a>
                            </li>
            </ul>
          </div>
          <div id="footermenu2">
             <p>&#169 «Бязевые потолки + ремонт», 2015-2016</p>
          </div>
            
    </div> 
      </div>
        
        
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>