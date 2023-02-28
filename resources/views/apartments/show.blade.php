<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Подробнее о записи дома</h2>
<div>
    <label for="name">контакты</label>
    <p>№{{ $apartment->number }}</p>
</div>
<div class="form-group">
    <label for="floors">комната </label>
    <p>{{ $apartment->rooms }}</p>
</div>
<div class="form-group">
    <label for="price">этаж</label>
    <p>{{ $apartment->floor }} </p>
</div>

<div class="form-group">
    <label for="price">площадь</label>
    <p>{{ $apartment->area }} </p>
</div>

<div class="form-group">
    <label for="price">цена</label>
    <p>{{ $apartment->cost }} </p>
</div>

<div class="form-group">
    <label for="year_of_construction">дом</label>
    <p>{{ $apartment->home_id }}</p>
</div>
</body>
</html>
