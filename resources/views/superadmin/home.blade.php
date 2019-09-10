@extends('superadmin.layouts.app')

@section('content')
<div class="page-body">
          <!-- breadcrumb  Start -->
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col">
                  <div class="page-header-left">
                    <h3>Dashboard</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="http://laravel.pixelstrap.com/endless"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Superadmin</li>
                      <li class="breadcrumb-item active">home</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>                    
          <!-- End Breadcrumb -->
          <!-- Container-fluid starts-->
  <div class="container-fluid">

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">5789</span></h5>
                    <p>Total Visits</p>
                  </div><i data-feather="tag"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-1"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">4986</span></h5>
                    <p>Total Sale</p>
                  </div><i data-feather="shopping-cart"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="chart-widget-dashboard">
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">8568</span></h5>
                    <p>Total Value</p>
                  </div><i data-feather="sun"></i>
                </div>
                <div class="dashboard-chart-container">
                  <div class="small-chart-gradient-3"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
  <!-- Container-fluid Ends-->

@endsection
