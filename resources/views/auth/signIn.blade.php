<!-- 繼承母模板 -->
@extends('layout.master')

<!-- 傳資料到母模板,並指定變數 -->
@section('title', $title)

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    <!--錯誤訊息模板 -->
    @include('components.validationErrorMessage')

    <form action="/user/auth/sign-in" method="post">
        <label>
            Email:
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
        </label>

        <label>
            密碼:
            <input type="password" name="password" placeholder="密碼" value="{{ old('password') }}">
        </label>

        <button type="submit">登入</button>

        {{ csrf_field() }}
    </form>
</div>
@endsection
