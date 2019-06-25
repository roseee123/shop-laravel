<!-- 繼承母模板 -->
@extends('layout.master')

<!-- 傳資料到母模板,並指定變數 -->
@section('title', $title)

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    <!--錯誤訊息模板 -->
    @include('components.validationErrorMessage')

    <table class="table">
        <tr>
            <th>名稱</th>
            <td>{{ $Merchandise->name }}</td>
            <th>照片
            <td>
                <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}"/>
            </td>
            <th>價格</th>
            <td>{{ $Merchandise->price }}</td>
            <th>剩餘數量</th>
            <td>{{ $Merchandise->remain_count }}</td>
        </tr>
        <tr>
            <th>介紹</th>
            <td>{{ $Merchandise->introduction }}</td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="/merchandise/{{ $Merchandise->id }}/buy" method="post">
                    購買數量
                    <select name="buy_count">
                        @for($count = 0; $count <= $Merchandise->remain_count; $count++)
                        <option value="{{ $count }}">{{ $count }}</option>
                        @endfor
                    </select>
                    <button type="submit">購買</button>
                    {{ csrf_field() }}
                </form>
            </td>
        </tr>
    </table>
</div>
@endsection
