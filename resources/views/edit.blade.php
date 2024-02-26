<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>edit </h1>
    <form  method="get" >
        @csrf 
        @method("post")

        <div>
        <label>enter userid </label>
        <input type="text" name="user_id" value="{{$produts -> user_id}}">
    </div>
    <div>
        <label>enter user name </label>
        <input type="text" name="user_name" value="{{$produts -> user_name}}">
    </div>
    <div>
        <label>enter  contact</label>
        <input type="text" name="contact_no" value="{{$produts -> user_name}}">
    </div>
    <div>
        <input type="submit" value="save new product" value="{{$produts -> user_name}}">
    </div>
    </form>
</body>
</html>