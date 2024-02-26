<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("app.css")}}">

    <title>Document</title>
</head>
<body>

    <div id="box" >

    <div class="nav">


<div class="ds {{ Request::route()->getName() == 'product.index' ? 'active' : '' }}">
   <div class="link1" ><a  class="{{ route('welcome') }} }}">DASHBOARD</a></div> 
</div>


<div class="ds {{ Request::route()->getName() == 'product.create' ? 'active' : '' }}">
    <div class="link1"  > <a href="{{ route('product.create') }}">USERS</a></div>
 </div>
 
 <div class="ds {{ Request::route()->getName() == 'product.index' ? 'active' : '' }}">
    <div class="link1"  > <a href="{{ route('product.index') }}">PRODUCTS</a></div>
 </div>
    </div>




<div id="main">

<div class="navbar">
    <div class="logo">
    </div>
    <div class="nav-links">
        <ul>
            
            <img src="https://s3-alpha-sig.figma.com/img/4721/7b08/4b475834daf45f968ba210013e1de24e?Expires=1709510400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=gHg56j70zJ9Qx5jFgKWEOednDXGuo-El-JYv7Hjgb9qv0DPDiSHYEvQIjFSJbarjopKVAC3G~vGSoB4TAdz7Xhn304UaXqt4j7evQseyzVIuBqwlLsILbLQ6iEGVTvii1S~fuKfZaX6fX88mWGgXOxPW7EFm7rO3FxIPufrM5OcMWnrn7k9y8hSlFdZZkHdZY10oC77ZWnrx147UGl6aCTKNwb3jVn8IKCn0Gd9ZD6iImubrP1~EOwTcwNp-L~02genNpzrLyfyXHIyn-KZiItkj8IcIZraXNfsztirOcENn1NHbLds6PAI6QUL5r6sh4AwvREv1P1-yZj~WP~wkMQ__" alt="Logo">

        </ul>
    </div>
    <div class="additional-info">
        <div class="info-item">
            <p id="namee">Hi josh Taylor</p>
        </div>
        <div class="info-item">
            <div id="circle"></div>
        </div>
    </div>
</div>




    









    <div class="boxa" >
        
    
    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
            <label >User ID</label>
            
            <input type="text" name="qty" />
        </div>  
        <div>
            <label  >Username</label>
            <input type="text" name="name"  />
        </div>
            
        <div >
            <label >Contact No</label>
            <input type="text" name="description"  />
        </div>
        <div class="bbox">
            
       
           
            <button type="reset" class="b1">Cancel</button> 
            <input  type="submit" value="Save" />
        </div>


    </div>

    </form>


</div>







</div>



</body>
</html>