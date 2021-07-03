<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка/Поступления</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
   
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-1 mb-2 border-bottom bg-dark text-white">
      <a href="/about" class="d-flex align-items-center text-white text-decoration-none">
    
        <span class="fs-4">GBUZK-SB.ru</span>
      </a>
      <nav class="d-inline-flex mt-4 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-white text-decoration-none" href="/adminkaa">Главная</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="#">Поступления</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/zapisdva">Запись в библиотеку</a>
       
      
       <a class="btn btn-warning" href="/login">Панель администратора</a>
      </nav>
    </div>
   
    <div style="background: url(a.jpg) repeat-y; margin:0px; padding:0 px;width:1125px; height:500px;"></div>
  
   <center> <h1>Добавление книги</h1></center>

  <form method="post" action="/erwe/check"> 
  @csrf
  <input type="Avtor" name="Avtor" id="Avtor" placeholder="Введите ФИО/псевдоним автора" class = "form-control"<br> 
  <input type="Nazvanie" name="Nazvanie" id="Nazvanie" placeholder="Введите название книги" class = "form-control"<br> 
  <input type="Shanr" name="Shanr" id="Shanr" placeholder="Введите жанр книги" class = "form-control"<br> 
  <input type="Opisanie" name="Opisanie" id="Opisanie" placeholder="Кратко опишите книгу" class = "form-control"<br> 
  <button type="sumbit" class ="btn btn-success">Добавить</button>
</form>
 <h1>Поступления:</h1>
@foreach ($date as $el)
<div class = "alert alert-info">
  <h3>Автор: {{$el->Avtor}}</h3>
  <h4>Название: {{$el->Nazvanie}}</h4>
  <h4>Жанр: {{$el->Shanr}}</h4>
  <h4>Описание: {{$el->Opisanie}}</h4>

</div>

@endforeach


<div class="card-footer">©2021 ГБУЗК ЦБ <a href="https://e.mail.ru/compose/">anton.lonshakov.87.@mail.ru</a> </div>

  
</body>
</html>