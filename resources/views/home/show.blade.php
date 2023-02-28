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
    <label for="name">дом</label>
    <p>№{{ $home->name }}</p>
</div>
<div class="form-group">
    <label for="floors">этаж </label>
    <p>{{ $home->floars }}</p>
</div>
<div class="form-group">
    <label for="price">цена</label>
    <p>{{ $home->price }} </p>
</div>

<div class="form-group">
    <label for="year_of_construction">дата окончания постройки</label>
    <p>{{ $home->years_of_construcion }}</p>
</div>
</body>
</html>
