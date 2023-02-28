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
    <label for="name">дата окончания стойки</label>
    <p>№{{ $sales->date }}</p>
</div>
<div class="form-group">
    <label for="floors">дом </label>
    <p>{{ $sales->home_id }}</p>
</div>
<div class="form-group">
    <label for="price">клиент</label>
    <p>{{ $sales->apartment_id }} </p>
</div>

<div class="form-group">
    <label for="year_of_construction">квартира</label>
    <p>{{ $sales->customer_id }}</p>
</div>
</body>
</html>
