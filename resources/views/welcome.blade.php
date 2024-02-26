<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{url("app.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <title>Product List</title>

</head>
<body>
    <nav class="custom-navbar">
        <div class="custom-logo">
            <img src="https://s3-alpha-sig.figma.com/img/4721/7b08/4b475834daf45f968ba210013e1de24e?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=baHgcPRNSC33SjntEZOxgkHyv2awKeBy8SIPH0OrdZJ3rhI8sLvSih3FPw8T20i1Nij~9I8ApUCaAz8ltk1SkAhr7oYYp5-DGVnqIG3Hm0GYWKsEukOD3JgTAZU8G-Z3GBlMztxbBQcOpq3ujaAr-vG0uVhaKoizOlMlM2QNijalha08-XhXnX3xQGce3z6WFi8ZepJxviG7cBL1O9vNpgCuzX9gShtydnkJU7hW5aKI1STizCIaGJqfUiPgu3CMyLhtvTiDY5EziFWod-lqCTwcc16Aoh7Ico5gXNsORDi0S71uaEKA2KSBhpyRyxIxpXPOeUHnIMoqiIXLScqbpw__" alt="Logo" style="width: 200px ;
            height: 62.48px ;
        
            ">
        </div>
        <div class="custom-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About Us</a>
            <a href="{{ url('/users') }}" id="gb1" >Users</a>
            <a href="{{ url('/contact') }}">Contact Us</a>
            <a href="{{ url('/backend') }}" id="gb"  >Backoffice</a>
       
        </div>
        
    </nav>
    <div>
        <img src="https://s3-alpha-sig.figma.com/img/05f5/98a3/e6736a76be918e34500520691677e98e?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=poYqZ2GBlhhPVe4odN0dnjJuLf9S3IBjc6CRTERNPCNCTgCWnDkq2cx00oomrCmo9~F6W2ITn97WozQsw5sBesVZcuP6nT8W7ObtuRKmBHaCdjTjHtXOIeTISggx03ZFt9Bhz-HJhp1hcWjpQ8llroolwLcmk-tPf6gqXAiyzYVZuN~AUiimr1Y~T6A8cgRO-ZqusRfHcR2uHOoN02YfK5Ty1lI6rtLe-uXIvQ3-dxBCLh8qJlud1SY~jQFq7htz3LZDt-QT0X5ER8K9rNWCOC6ckQtdgi0kv8xghnZ61C8ZyM~RKLOALhfYTwny11Mcj1UYsbAmclHPGqRzWE5VHg__" alt="" style="height:270px ; width:100%; padding:0px">
    </div>

    <div style="padding: 20px ; display :flex ">

        @foreach($products as $product)
        <div style="margin: 10px"> 
        <div id="pbox" style="padding: 10px;">
            <img src="https://s3-alpha-sig.figma.com/img/2f9d/3e44/3da016049a7b813e2f3f015b5242e871?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=AULs9bpDTnDiz8toPI~-NIt1WOfWmg3LNjHqiprFTKzovffCY5GTIypUFXLMGgp43PZhyYgB7QQjJ76txkcaCSxi~ASjgWB47aaXOUW9lx7BvMkMDalhXGvjn2FBNHlBHQqibK782psZhkWB37zggc3g5klVgituxDBc4PEa5Wfkt1vp55TqX8RHsKMFoJGtb8c9Ffb7Db0omgv9UB0p~ONx7a7YmkRVylsO545EnwV7NAXXfVZijcL3OEI6EkNUTRNCMb3Oo-HroigqbA72TbKfnQBwhmGyqolh5YegxJ3bwVdYeMv2Gf54lpF0qOgOwnwGtd85dHqzTe628UbM7A__" alt="" style="height: 200px; width:200px ;padding:0px">
            
        </div>
       
        <div id="sboxx">
            <h4 style="color: yellow">#{{ $product->id }}</h4>
            <h4>user name {{ $product->name }}</h4>
            <h4>{{ $product->qty }}</h4>
     
        </div>
    </div>
        @endforeach
    </div>
    
</body>
</html>
