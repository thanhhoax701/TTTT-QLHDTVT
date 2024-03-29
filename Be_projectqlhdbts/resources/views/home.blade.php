@extends('layouts.app')


@section('page-title', $title)

@section('message')
@include('partials.messages')
@endsection

@section('content')
<div class="content-main">


  <!--  start slide bar  -->
  <div class="wrapper">
    <!-- Sidebar  -->
    @include('partials.common.slide-bar')

    <!-- Page Content  -->
    <div id="content">
      @include('partials.common.tieude')
      @php
      $quyen=null;
      if(auth()->user()){
      if(auth()->user()->quyennguoidungs()){
      if(auth()->user()->quyennguoidungs()->first()){
      $quyen = auth()->user()->quyennguoidungs()->first()->Q_MaQ;
      }
      }
      }
      @endphp
      <div class="container text-center p-2">
        <div class="row align-items-center gx-2  row-item-home">
          @if($quyen!='Q2')
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <a href="{{route('tram')}}" class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-broadcast-tower"></i>
                <h4>Trạm</h4>
              </div>
            </a>
          </div>
          @endif
          @if($quyen!='Q0')
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <a href="{{route('hopdong')}}" class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-file-alt"></i>
                <h4>Hợp đồng</h4>
              </div>
            </a>
          </div>
          @endif
          @if($quyen=='Q0')
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <a href="{{route('csht')}}" class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-building"></i>
                <h4>Cơ sở hạ tầng</h4>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <a href="taikhoan" class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-users"></i>
                <h4>Tài khoản</h4>
              </div>
            </a>
          </div>
          @endif
          @if($quyen!='Q0')
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <a href="phuluc" class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-sticky-note"></i>
                <h4>Phụ lục</h4>
              </div>
            </a>
          </div>
          @endif
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <a href="thongke" class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-chart-line"></i>
                <h4>Báo cáo</h4>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 rounded-3 border border-dark">
            <a href="http://haugiang.vnpt.vn/view/p2/63" target="_blank" class="item-home d-flex align-items-center justify-content-center">
              <div>
                <i class="fas fa-broadcast-tower"></i>
                <h4>Giới thiệu</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection