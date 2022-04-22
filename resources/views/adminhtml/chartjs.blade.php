@extends('adminhtml.master.layout')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Biểu đồ thống kê </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Biểu đồ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Biểu đồ</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quý</h4>
                        <canvas id="lineChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Năm</h4>
                        <canvas id="barChart" style="height:230px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ngày</h4>
                        <canvas id="pieChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
