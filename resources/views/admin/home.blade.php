@extends('admin.index')
@section('content')


   
        <div class="content mt-3">
            <div class="col-sm-12">
                @if (count($errors)>0)
                      <div class="alert alert-danger">
                          @foreach ($errors->all() as $element)
                              {{ $element }} <br>
                          @endforeach
                      </div>
                @endif
                @if (session('notification'))
                      <div class="alert alert-success">
                          {{ session('notification') }}
                      </div>
                 @endif
            </div>
             <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12" style="margin-bottom: 10%">
                <h1 class="modal-title m-auto" style="text-align: center; padding: 10px; text-transform: uppercase;">
                    Chào mừng bạn đến với hệ thống quản lý
                </h1>
                <img src="{{ asset('images/logo.png') }}" width="100%" class="align-self-md-auto" style="margin-top: 5%" alt="logo.png">
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count"><h1>{{ $sumView }}</h1></span>
                        </h4>
                        <p class="text-light">LƯỢT TRUY CẬP</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count"><h1>{{ $sumPost }}</h1></span>
                        </h4>
                        <p class="text-light">BÀI VIẾT</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count"><h1>{{ $sumCategory }}</h1></span>
                        </h4>
                        <p class="text-light">CHUYÊN MỤC BÀI VIẾT</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            <span class="count"><h1>{{ $sumMember }}</h1></span>
                        </h4>
                        <p class="text-light">TÀI KHOẢN</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->
    
@endsection