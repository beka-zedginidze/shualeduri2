@extends('layouts.main')

@section('content')
 <div class="container">
    <table class="table">   
       <thead>
       <th>ID</th>
       <th>Name</th>
       <th>Category</th>
       <th>Price</th>
       <th>Stock</th>
       <th>Sale</th>
       <th>Date Added</th>
       </thead>
     
    <tbody>
    <form action="/product/save" method="post">
    @csrf
    <tr>
    <td colspan="2"><input type="text" name="name" class="form-control" /></td>
    <td><input type="text" name="category" class="form-control" /></td>    
    <td><input type="number" name="price" class="form-control" /></td>
    <td><input type="number" name="stock" class="form-control" /></td>
    <td><input type="number" name="sale" class="form-control" /></td>
    <td><button class="btn btn-success">ADD</button></td>
    
    </tr>
    </form>
    @foreach($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->category }}</td>      
      <td>{{ $product->price }}</td>
      <td>{{ $product->shock }}</td>
      <td>{{ $product->sale }}</td>
      <td>{{ $product->created_at }}</td>

    </tr>           
    @endforeach
    </tbody>
    </table>

 </div>
@endsection