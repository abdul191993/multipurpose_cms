<div class="page-sidebar">
  <div class="main-header-left d-none d-lg-block">
    <div class="logo-wrapper"><a href="http://laravel.pixelstrap.com/endless"><img src="{{ asset('images/'.$settings->logo) }}" alt=""></a></div>
  </div>
  <div class="sidebar custom-scrollbar">
    <div class="sidebar-user text-center">
      <div><img class="img-60 rounded-circle" src="{{ asset('backend') }}/assets/images/user/1.jpg" alt="#">
        <div class="profile-edit"><a href="#" data-toggle="modal" data-target="#myModal"><i data-feather="edit"></i></a></div>
      </div>
      <h6 class="mt-3 f-14">{{ Auth::user()->name }}</h6>
    </div>
    <ul class="sidebar-menu">
      <li class="@if ($menu == 'dashboard') active selected @endif">
        <a class="sidebar-header" href="{{ url('superadmin') }}"><i data-feather="home"></i><span>Dashboard</span>
        </a>
      </li>
      <li class="@if ($menu == 'settings') active selected @endif">
        <a class="sidebar-header" href="{{ url('superadmin/cms_users') }}"><i data-feather="home"></i><span>Settings</span>
        </a>
      </li>

      <li class="@if ($menu == 'settings') active selected @endif">
        <a class="sidebar-header" href="{{ url('superadmin/settings') }}"><i data-feather="home"></i><span>Settings</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
      <div class="col-sm-12 col-lg-12">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Edit Profile</h5>
            </div>
            <div class="card-body">
              <form class="theme-form mega-form">
                <input type="hidden" value="{{ Auth::user()->id }}" required name="id">
                <h6>Account Information</h6>
                <div class="row">
                  <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <label class="col-form-label">Your Name</label>
                  <input class="form-control" type="text" placeholder="your Name">
                  <label class="col-form-label">Password</label>
                  <input class="form-control" type="Password" placeholder="Enter Password">
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input class="form-control" type="email" placeholder="Enter email">
                  <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <input class="form-control" type="Password" placeholder="Enter Password Again">
                </div>
                </div>
                </div>
                <div class="col-lg-12">
                  <label class="col-form-label">Password</label>
                  <input class="form-control" type="Password" placeholder="Enter Password Again">
                </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Submit</button>
              <button class="btn btn-secondary">Cancel</button>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
