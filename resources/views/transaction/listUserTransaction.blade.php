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
            <th>商品名稱</th>
            <th>圖片</th>
            <th>單價</th>
            <th>數量</th>
            <th>總金額</th>
            <th>購買時間</th>

        </tr>
        @foreach($TransactionPaginate as $Transaction)
        <tr>
            <td>
                <a href="/merchandise/{{ $Transaction->Merchandise->id }}">
                    {{ $Transaction->Merchandise->name }}
                </a></td>
            <td>
                <a href="/merchandise/{{ $Transaction->Merchandise->id }}">
                <img src="{{ $Transaction->Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                </a>
            </td>
            <td>{{ $Transaction->price }}</td>
            <td>{{ $Transaction->buy_count }}</td>
            <td>{{ $Transaction->total_price }}</td>
            <td>{{ $Transaction->crate_at }}</td>
        </tr>
        @endforeach
    </table>

    {{ $TransactionPaginate->links() }}
</div>
@endsection
