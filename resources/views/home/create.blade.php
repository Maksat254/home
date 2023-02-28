<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="{{ route('home.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number_id" class="form-label">name</label>
            <input type="text" name="name" class="form-control"
                   id="number_id"/>
        </div>

        <div class="mb-3">
            <label for="floor_id" class="form-label">floars</label>
            <input type="text" name="floars" class="form-control" id="floor_id">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">price</label>
            <input type="text" name="price" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">years_of_construcion</label>
            <input type="date" name="years_of_construcion" class="form-control" id="exampleFormControlInput1">
        </div>

        <button type="submit">Сохранить</button>
        <table class="table table-bordered">
            <table class="table table-bordered">

            </table>

        </table>
    </form>

</div>

</body>
</html>
