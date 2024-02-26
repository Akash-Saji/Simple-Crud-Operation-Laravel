<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>
    <form  method="post" action="{{route('store_route')}}">
        @csrf 
        @method("post")

        <div>
        <label>enter userid </label>
        <input type="text" name="user_id">
    </div>
    <div>
        <label>enter user name </label>
        <input type="text" name="user_name">
    </div>
    <div>
        <label>enter  contact</label>
        <input type="text" name="contact_no">
    </div>
    <div>
        <input type="submit" value="save new product">
    </div>
    </form>
</body>
</html>