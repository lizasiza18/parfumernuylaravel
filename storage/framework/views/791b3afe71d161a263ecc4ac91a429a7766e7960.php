<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CHARMS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<font-face="Roboto">
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Начальная загрузка"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/index" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная</font></font></a></li>
          <li><a href="/about" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">О нас</font></font></a></li>
          <li><a href="/contact" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Контакты</font></font></a></li>
          <li><a href="/table1" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ассортимент</font></font></a></li>
          <li><a href="/table" class="nav-link px-2 link-dark"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Заказать</font></font></a></li>
        </ul>
        <style type="text/css">
  .border-bottom   {
    background: Thistle; 
    color: black; 
   }
  
  </style>
      </div>
    </div>
  </header>
</div>

</head>
<body style="font-family:Courier New, monospace, sans-serif">

<h1>Форма для оформления заказа</h1>
<form action= "" method = "POST">
<?php echo csrf_field(); ?>
<input type ="text" name ="Фамилия" id="Фамилия" placeholder = "Введите фамилию" class ="form-control"><br>
<input type ="text" name ="Имя" id="Имя" placeholder = "Введите имя" class ="form-control"><br>
<input type ="text" name ="Отчество" id="Отчество" placeholder = "Введите отчество" class ="form-control"><br>
<input type ="text" name ="Телефон" id="Телефон" placeholder = "Введите телефон" class ="form-control"><br>
<input type ="text" name ="Паспорт" id="Паспорт" placeholder = "Введите паспорт" class ="form-control"><br>
<input type ="text" name ="Адрес" id="Адрес" placeholder = "Введите адрес" class ="form-control"><br>
<input type ="date" name ="Дата_заказа"id="Дата_заказа" placeholder = "Введите дату заказа" class ="form-control"><br>
<input type ="text" name ="Товары" id="Товары" placeholder = "Введите ваши товары" class ="form-control"><br>
<input type ="text" name ="Сумма" id="Сумма" placeholder = "Ваша сумма" class ="form-control"><br>
<button type = "submit" class ="btn btn-success">Оформить</button>
</form>

<h1>Заказы</h1>
<style type="text/css">
   TABLE {
    background: rgb(204, 159, 218); 
    border: 2px double rgb(70, 31, 78);
   }
   TD, TH {
    padding: 5px; 
    border: 1px solid rgb(79, 56, 82); 
   }
  </style>
<table border = 2>
<tr>
<th>#</th>
<th>Фамилия</th>
<th>Имя</th>
<th>Отчество></th>
<th>Телефон</th>
<th>Паспорт</th>
<th>Адрес</th>
<th>Дата_заказа</th>
<th>Товары</th>
<th>Сумма</th>

</tr>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($post->id); ?></td>
<td><?php echo e($post->Фамилия); ?></td>
<td><?php echo e($post->Имя); ?></td>
<td><?php echo e($post->Отчество); ?></td>
<td><?php echo e($post->Телефон); ?></td>
<td><?php echo e($post->Паспорт); ?></td>
<td><?php echo e($post->Адрес); ?></td>
<td><?php echo e($post->Дата_заказа); ?></td>
<td><?php echo e($post->Товары); ?></td>
<td><?php echo e($post->Сумма); ?></td>
<td><a href='delete/<?php echo e($post->id); ?>'>Удалить</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\Users\Админ\parfumernuy\example-app\resources\views/table.blade.php ENDPATH**/ ?>