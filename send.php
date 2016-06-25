<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['email'])&&$_POST['email']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'poltorina@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ'; //Загаловок сообщения
        $email = $_POST['email'];
        $to2 = $email; //Почта получателя, через запятую можно указать сколько угодно адресов
        $radio = $_POST["radio"];
        $aDoor = $_POST['check'];
 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p> 
                        <p>Email: '.$email.'</p>';
          $message .= "<p>Вы выбрали : </p>";

          $M = count($radio);
          for($i=0; $i < $M; $i++)
          {
            $message .= '<p>' . $radio[$i] . '</p>';
          }

          // $message .= "<p>Систему в $radio </p>";

        if(empty($aDoor))
        {
          echo("<p>Вы ничего не выбрали.</p>");
        }
        else
        {
          $N = count($aDoor);
          for($i=0; $i < $N; $i++)
          {
            $message .= '<p>' . $aDoor[$i] . '</p>';
          }
        }

        $message .= '</body></html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <".$email.">\r\n"; //Наименование и почта отправителя
        // mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

        // mail($to2, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>

