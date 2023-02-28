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
    <label for="name">имя</label>
    <p>№{{ $customers->name }}</p>
</div>
<div class="form-group">
    <label for="floors">фамилия </label>
    <p>{{ $customers->surname }}</p>
</div>
<div class="form-group">
    <label for="price">телефон</label>
    <p>{{ $customers->phone }} </p>
</div>

<div class="form-group">
    <label for="year_of_construction">email</label>
    <p>{{ $customers->email }}</p>
</div>
</body>
</html>
