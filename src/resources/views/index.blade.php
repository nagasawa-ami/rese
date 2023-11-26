@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('searchbar')
<div class="search-bar">
    <div class="search-bar-menu">
        <select name="area">
            <option value="">All area</option>
            <!-- その他のエリアのオプション -->
        </select>
        <select name="genre">
            <option value="">All genre</option>
            <!-- その他のジャンルのオプション -->
        </select>
        <input type="search" name="search" placeholder="Search ..." aria-label="Search by name">
        <button type="submit" class="search-button">Search</button>
        </div>
@endsection

@section('content')


<div class="shop__content">
 <div class="shop__content-item">
  <div class="shop__img">
    <img src="" alt="" />
  </div>
  <div class="shop__card">
    <div class="shop__card-name">飲食店名</div>
    <div class="shop__card-tag">
     <p class="shop__content-tag-item">#朝ごはん</p>
      <p class="shop__content-tag-item shop__content-tag-item--last">＃焼肉</p>
    </div>
    <button class="shop-detail">詳しくみる</button>
  </div>
</div>
</div>


    <!-- 飲食店一覧のコンテンツ -->
@endsection

