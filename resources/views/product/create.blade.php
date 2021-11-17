<h1>Create Product</h1>
<h1>{{$judul}}</h1>

<form action="/products" method="post"> 
    @csrf
    Product     : <input type="text" name="name" placeholder="Product Name"><br>
    Description : <input type="text" name="description" placeholder="Description"><br>
    Price       : <input type="number" name="harga" placeholder="Price"><br>
    
    <input type="Submit" value="Save" >

    

</form>