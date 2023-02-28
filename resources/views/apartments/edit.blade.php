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
number
rooms
floor
area
cost
home_id
<div class="container">
    <form action="{{ route('apartments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="number_id" class="form-label">number</label>
            <input type="text" name="number" value="{{$apartment->number}}" class="form-control"
                   id="number_id"/>
        </div>

        <div class="mb-3">
            <label for="floor_id" class="form-label">rooms</label>
            <input type="text" name="rooms" value="{{$apartment->rooms}}" class="form-control" id="floor_id">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">floor</label>
            <input type="text" name="floor" value="{{$apartment->floor}}" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">area</label>
            <input type="text" name="area" value="{{$apartment->area}}" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">cost</label>
            <input type="text" name="cost" value="{{$apartment->cost}}" class="form-control" id="exampleFormControlInput1">

        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">home_id</label>
            <input type="text" name="home_id"  value="{{$apartment->home_id}}" class="form-control" id="exampleFormControlInput1">

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
