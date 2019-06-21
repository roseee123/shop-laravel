<!-- 繼承母模板 -->
@extends('layout.master')

<!-- 傳資料到母模板,並指定變數 -->
@section('title', $title)

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    <form action="/user/auth/sign-up" method="post">
        <label>
            暱稱:
            <input type="text" name="nickname" placeholder="暱稱">
        </label>

        <label>
            Email:
            <input type="text" name="email" placeholder="Email">
        </label>

        <label>
            密碼:
            <input type="password" name="password" placeholder="密碼">
        </label>

        <label>
            密碼:
            <input type="password" name="password_confirmation" placeholder="確認密碼">
        </label>

        <label>
            帳號類型:
            <select name="type">
                <option value="G">一般會員</option>
                <option value="A">管理者</option>
            </select>
        </label>

        <button type="submit">註冊</button>

    </form>
</div>

@endsection


暱稱:
<input type="text" name="nickname" placeholder="暱稱">

@endsection
