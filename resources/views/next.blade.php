<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

<form action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="address" placeholder="text" required>
    <input type="date" name="dob" placeholder="date" required>
    <input type="submit">


</form>
</body>
</html>
