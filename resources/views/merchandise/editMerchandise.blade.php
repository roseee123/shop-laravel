<!-- 繼承母模板 -->
@extends('layout.master')

<!-- 傳資料到母模板,並指定變數 -->
@section('title', $title)

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>

    <!--錯誤訊息模板 -->
    @include('components.validationErrorMessage')

    <form action="/merchandise/{{ $Merchandise->id }}" method="post" enctype="multipart/form-data">

        {{ method_field('PUT') }}

        <label>
            商品狀態:
            <select name="status">
                <option value="C"
                        @if(old('status', $Merchandise->status)=='C') select @endif
                >建立中</option>
                <option value="S"
                        @if(old('status', $Merchandise->status)=='S') select @endif
                >可販售</option>
            </select>
        </label>

        <label>
            商品名稱:
            <input type="text" name="name" placeholder="商品名稱" value="{{ old('name', $Merchandise->name) }}">
        </label>

        <label>
            商品英文名稱:
            <input type="text" name="name_en" placeholder="商品英文名稱" value="{{ old('name_en', $Merchandise->name_en) }}">
        </label>

        <label>
            商品介紹:
            <input type="text" name="introduction" placeholder="商品介紹" value="{{ old('introduction', $Merchandise->introduction) }}">
        </label>

        <label>
            商品英文介紹:
            <input type="text" name="introduction_en" placeholder="商品英文介紹" value="{{ old('introduction_en', $Merchandise->introduction_en) }}">
        </label>

        <label>
            商品照片:
            <input type="file" name="photo" placeholder="商品照片">
            <img src="{{ $Merchandise->photo or '/assets/imges/default-merchandise.png' }}">
        </label>

        <label>
            商品價格:
            <input type="text" name="price" placeholder="商品價格" value="{{ old('price', $Merchandise->price) }}">
        </label>

        <label>
            商品剩餘數量:
            <input type="text" name="remain_count" placeholder="商品剩餘數量" value="{{ old('remain_count', $Merchandise->remain_count) }}">
        </label>

        <button type="submit" class="btn btn-default">更新商品資訊</button>

        {{ csrf_field() }}
    </form>
</div>
@endsection
