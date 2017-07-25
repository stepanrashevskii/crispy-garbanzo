<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['telephone'])&&$_POST['telephone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'rashevskii@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обращение с сайта'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Цель обращения: '.$_POST['whatever'].'</p>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['telephone'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <info@myloft22.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>