<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поступления</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
   
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-1 mb-2 border-bottom bg-dark text-white">
      <a href="/about" class="d-flex align-items-center text-white text-decoration-none">
      <png  xmlns="https://publicdomainvectors.org/photos/1569635602bookInsta.png" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></png>
        <span class="fs-4">GBUZK-SB.ru</span>
      </a>
      <nav class="d-inline-flex mt-4 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-white text-decoration-none" href="/about">Главная</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="#">Поступления</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/zapis">Запись в библиотеку</a>
        
      
       <a class="btn btn-warning" href="/login">Вход</a>
      </nav>
    </div>
   
    <div style="background: url(a.jpg) repeat-y; margin:0px; padding:0 px;width:1125px; height:500px;"></div>
  
   <center> <h1>Результаты поиска</h1></center>
   <form method="post" action="/erwe/check"> 
  @csrf
   <?php
   
$link = mysqli_connect("127.0.0.1", "root","root","a");
$pika = Request::input['Image'];
$avtor =Request::input['Avtor'];

$sql_select = "SELECT * FROM postuplenia  WHERE Image='$pika' && Avtor ='$avtor' && Nazvanie = '$last_name' && Shanr = '$Shanr' && Opisanie = 'Opisanie'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

if($row)
{
    printf("<p>: " .$row['Image']."</p>
     
	<p><i>Контактные данные</i></p><p>E-mail: " .$row['email'] . "</p><p>Facebook: " .$row['facebook'] . "</p>---------<br/>
	);
}
else{echo ("Пользователя с таким именем в базе нет<br/><br/>");}


?>
</form>
<a href="search_user.html">Вернуться к поиску</a><br/><br/>
<a href="info_form.html">Добавить пользователя</a>





<div class="card-footer">©2021 ГБУЗК ЦБ <a href="https://e.mail.ru/compose/">anton.lonshakov.87.@mail.ru</a> </div>

  
</body>
</html>