<h1>Edit Data</h1>

<form action="/products/{{$product-> id}}" method="post"> 
    @method('PUT')
    @csrf

    ID          : <input type="text" name="ID" value="{{$product-> id}}" readonly><br>
    Product     : <input type="text" name="name" value="{{$product-> name}}"><br>
    Description : <input type="text" name="description" value="{{$product-> description}}"><br>
    Price       : <input type="number" name="harga" value="{{$product-> harga}}"><br>
    Image       : <input type="text" name="Image" value="{{$product-> image_url}}"><br>
    
    <input type="Submit" value="Save" >

    

</form>