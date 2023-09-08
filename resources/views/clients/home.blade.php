{{-- <h1>trang chủ 1</h1>
<h2>{{$welcome}}</h2>
<div class="container">
    {!!$content!!}
</div> --}}

 {{-- @for ($i = 1;$i<=10;$i++)
<p>phần tử:{{$i}}</p>
@endfor  --}}

 {{-- @while ($index<=10)
<p>phần tử:{{$index}}</p>
@php 
 $index++ 
@endphp
@endwhile  --}}

 {{-- @foreach($dataArr as $key=> $item)
<p>phần tử :{{$item}} - {{$key}}</p>
@endforeach  --}}

 {{-- @forelse ($dataArr as  $item)
<p>phần tử:{{$item}}</p>
@empty
<p>không có phần tử nào</p>
@endforelse  --}}

 {{-- @if ($number>=10)
<p>đây là giá trị hợp lệ</p>
@endif  --}}


 {{-- @if ($number< 0)
<p>số âm</p>
@elseif($number>0  && $number< 5)
<p>số nhỏ</p>
@elseif ($number>=5 && $number< 10)
<p>Số tb</p>
@endif  --}}

 {{-- @switch($number)
@case(1)
<p>Số thứ nhất</p>
@break
@case(2)
<p>Số thứ hai</p>
@break
@default
<p>còn lại</p>
@endswitch  --}}

{{-- @php 
$number = 5;
if($number>=10){
    $total = $number +10;
}else{
    $total =$number +5;
}
@endphp
<p>kết quả:{{$total}}</p> --}}


@extends('layout.client')
@section('title')
   {{$title}}
@endsection

@section('sidebar')
    @parent
    <h3>home</h3>
@endsection


@section('content')
    <h1>trang chủ</h1>

    {{-- <p><img src="https://photo-baomoi.bmcdn.me/w700_r16x9/2023_09_05_20_46830897/b3f6fddd0e90e7cebe81.jpg.webp" alt=""></p>
    <p><a href="{{route('download').'?image=https://photo-baomoi.bmcdn.me/w700_r16x9/2023_09_05_20_46830897/b3f6fddd0e90e7cebe81.jpg.webp'}}">
    luu</a></p> --}}
@endsection

@section('css')
    h1{
        color:green;
    }
@endsection