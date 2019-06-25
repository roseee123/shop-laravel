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
            <th>編號</th>
            <th>名稱</th>
            <th>圖片</th>
            <th>狀態</th>
            <th>價格</th>
            <th>剩餘數量</th>
            <th>編輯</th>
        </tr>
        @foreach($MerchandisePaginate as $Merchandise)
        <tr>
            <td>{{ $Merchandise->id }}</td>
            <td>{{ $Merchandise->name }}</td>
            <td>
                <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png }}" />
            </td>
            <td>
                @if($Merchandise->status == 'C') 建立中
                @else 可販售
                @endif
            </td>
            <td>{{ $Merchandise->price }}</td>
            <td>{{ $Merchandise->remain_count }}</td>
            <td>
                <a href="/merchandise/{{ $Merchandise->id }}/edit">
                    編輯
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $MerchandisePaginate->links() }}
</div>
@endsection
