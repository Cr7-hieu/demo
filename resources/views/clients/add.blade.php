@extends('layout.client')
@section('title')
   {{$title}}
@endsection


@section('content')
    <h1>thêm sản phẩm</h1>
    <form action="" method="POST" id="product-form">
        {{-- @if ($errors->any())
            <div class="aler">
                
            </div>
        @endif --}}
        <input type="text" name="username">
        @error('product_name')
           {{$message}}
        @enderror
        @csrf
        <button type="submit">thêm</button>
    </form>
@endsection
@section('css')
   <style>
    h1{
        color: red;
    }
   </style>
@endsection
