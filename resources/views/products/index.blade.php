<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("app.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Product List</title>
</head>
<body>




<div id="box" >

    <div class="nav" >


<div class="ds {{ Request::route()->getName() == 'product.index' ? 'active' : '' }}"style="width:228px ; height: 70px" >
   <div class="link1" ><a  class="{{ route('product.index') }}"  >DASHBOARD</a></div> 
</div>
<div class="ds {{ Request::route()->getName() == 'product.index' ? 'active' : '' }}" style="width:228px ; height: 70px" >
   <div class="link1"  > <a href="{{ route('product.index') }}">USERS</a></div>
</div>

<div class="ds {{ Request::route()->getName() == 'product.create' ? 'active' : '' }}" style="width:228px ; height: 70px" >
    <div class="link1"  > <a href="{{ route('product.create') }}">PRODUCTS</a></div>
 </div>
 

    </div>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>



<div id="main">

<div class="navbar" id="nm">
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




    




    <div class="boxab" >
        
    
    



        <div class="bbox">
            
       
           
<div id="spb" style="display: flex"><h5>Filter By</h5>








    <form action="{{ route('product.search') }}" method="GET" >
        <button type="submit" style="float: right ; margin:15px"  >Search</button>
        <input type="text" name="search"  value="{{ request('search') }}" style="margin: 15px ;border: 1px solid #555;" id="sboz">
    </form>
    

    <form action="{{ route('product.create') }}" method="GET">
        <button type="submit" style="margin:15px" >Add</button>
     
        
    </form>
















</div>




        </div>



        <div >

            <table class="rounded-top" cellspacing="0" cellpadding="0">
                <tr>
                    <th id="tr">Sl No</th>
                    <th>User ID</th>
                    <th>Username</th>                
                    <th>Contact No</th>
                    
                    <th id="tr1" style="padding-left: 15px" >Actions</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->name }}</td>
                        
                     
                        <td >{{ $product->description }}</td>
            
                        <td id="btt" style="display: flex; ">
                            <a href="{{ route('product.edit', ['product' => $product]) }}" ><i class="fa-regular fa-pen-to-square" style="color: black ; width: 28px ; height: 25px ; padding-right:20px"
                            > </i></a>
                      
                            <form id="deleteForm" method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                @csrf 
                                @method('delete')
                                <input type="submit" value="Delete" style="display: none;" />
                            </form>
                            
                            <a href="javascript:void(0);" onclick="document.getElementById('deleteForm').submit();">
                                <img src="https://s3-alpha-sig.figma.com/img/5098/23c9/c1fe452c15d38d4a58f9a8dddc25f99f?Expires=1709510400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=OsJfQPFrwiCxMXmGIYYU6~gYDWgfs23C6Y3nInkIV0BY1c1~-GzSpdnebrIzoc~75fLDyuyvL8wz40z0kS8hTflwIwlgdvZUPNLpxX~0pRr3tDC6KZTJ2ykYIjqPEmDlbEq~96x4u9o4PW6rbnBjXF8fKbaayhhO3asI12OeietGOiea501KKD2JK1WLcDf29sG9ac3-WAa8OpxTEN3~8szKRBAwrFu9Km5ikXdk1sUxg2AG4t5BSqDNoHH7MO6aVxvD85x8Zm2vKEFWeR~STxPRo9vuX4~JFtx5zZRkHh0ZRDP3jazHA6SOo2goMSH9adgaBNbGvOMssV4DkDFXWQ__" alt="Delete" style="width: 29px ;
                                height: 25px ; padding:0px;
                                ">
                            </a>
                            
                        </td>
                    </tr>
                @endforeach
            </table>
            
            
            
            </div>













    </div>
    

  


</div>







</div>








</body>
</html>
