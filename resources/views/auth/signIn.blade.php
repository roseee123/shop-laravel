<!-- 繼承母模板 -->
@extends('layout.master')

<!-- 傳資料到母模板,並指定變數 -->
@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>

<!--載入元件模板 -->
@include('components.socialButtons')

Email:
<input type="text" name="email" placeholder="Email">

密碼:
<input type="password" name="password" placeholder="密碼">

暱稱:
<input type="text" name="nickname" placeholder="暱稱">

@endsection
