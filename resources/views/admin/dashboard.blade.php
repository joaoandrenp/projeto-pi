@extends('admin.layoutsAdmin.appAdmin')

@section('content')
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <h1>Admin</h1>--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        {{ __('You are logged in!') }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>


    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Ganhos Mensais
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$17,916</div>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Ganhos Anuais
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$ 215,000</div>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Perguntas Não Respondidas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Visão geral dos ganhos</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                             aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Receita</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                             aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
            <div class="col-lg-6 mb-4">
            </div>
        </div>
    </div>
</div>
@endsection
