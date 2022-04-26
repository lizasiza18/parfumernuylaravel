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
          <li><a href="/welcome" class="nav-link px-2 link-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная</font></font></a></li>
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

<h1>Форма для добавления товара</h1>
<form action= "" method = "POST">
<?php echo csrf_field(); ?>
<input type ="text" name ="Название" id="Название" placeholder = "Введите название" class ="form-control"><br>
<input type ="text" name ="Цена" id="Цена" placeholder = "Введите цену" class ="form-control"><br>
<input type ="text" name ="Объем" id="Объем" placeholder = "Введите объем" class ="form-control"><br>
<input type ="text" name ="Производитель" id="Производитель" placeholder = "Введите производителя" class ="form-control"><br>
<input type ="text" name ="Страна" id="Страна" placeholder = "Введите страну" class ="form-control"><br>
<input type ="text" name ="Артикул" id="Артикул" placeholder = "Введите артикул" class ="form-control"><br>
<input type ="date" name ="Дата_производства"id="Дата_производства" placeholder = "Введите дату производства" class ="form-control"><br>
<input type ="text" name ="Количество" id="Количество" placeholder = "Введите количество" class ="form-control"><br>

<button type = "submit" class ="btn btn-success">Добавить</button>
</form>

<h1>Ассортимент</h1>
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
<th>Название</th>
<th>Цена</th>
<th>Объем</th>
<th>Производитель</th>
<th>Страна</th>
<th>Артикул</th>
<th>Дата_производства</th>
<th>Количество</th>


</tr>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($post->id); ?></td>
<td><?php echo e($post->Название); ?></td>
<td><?php echo e($post->Цена); ?></td>
<td><?php echo e($post->Объем); ?></td>
<td><?php echo e($post->Производитель); ?></td>
<td><?php echo e($post->Страна); ?></td>
<td><?php echo e($post->Артикул); ?></td>
<td><?php echo e($post->Дата_производства); ?></td>
<td><?php echo e($post->Количество); ?></td>

<td><a href='delete/<?php echo e($post->id); ?>'>Удалить</a></td></th>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\Users\Админ\parfumernuylaravel\example-app\resources\views/table1.blade.php ENDPATH**/ ?>