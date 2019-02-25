<?php /* не доделано */

require_once __DIR__ . '/functions.php';

$currentUser = getCurrentUser();
if (null != $currentUser) :
    header('Location: http://homework.com/homework-php1_2019-02-04/index.php');
else :
    ?>
    <html>
    <head><title> hw5 login </title></head>
    <body>

    <form id="authorization" method="post">
        Логин:  <input name="login" type="text" size="70" maxlength="30" form="authorization" required/><br/>
        Пароль: <input name="password" type="password" size="70" maxlength="30" form="authorization" required/>
    </form>
    </body>
    </html><?php
endif;