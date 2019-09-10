@extends('superadmin.layouts.app')

@section('content')
  <div class="page-body">
          <!-- breadcrumb  Start -->
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col">
                  <div class="page-header-left">
                    <h3>Settings</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="http://laravel.pixelstrap.com/endless"><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">SuperAdmin</li>
                      <li class="breadcrumb-item active">Settings</li>
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
    <div class="col-xl-12 col-lg-12 col-md-12">
    	  <div class="card">
            <div class="card-header">
              <h5>Update Settings</h5>
            </div>
            <div class="card-body">
              	<form method="POST" id="updateForm" class="theme-form mega-form" enctype="multipart/form-data" onsubmit="return update_validation()">			
				@csrf
				@method('PUT')
                <div class="row">
                 <div class="col-lg-4 col-sm-12">
                	<div class="form-group">
                  		<label class="col-form-label">Site Name</label>
                  		<input type="text" value="{{ $settings->siteName }}" required name="siteName"  class="form-control">
                	</div>
                </div>

                <div class="col-lg-4 col-sm-12">
                	<div class="form-group">
                  		<label class="col-form-label">Phone Number</label>
                  		<input type="text"  name="phone" value="{{ $settings->phone }}" class="form-control">
                	</div>
                </div>

                <div class="col-lg-4 col-sm-12">
                	<div class="form-group">
                  		<label class="col-form-label">Email Address</label>
                  		<input type="text"  name="email" value="{{ $settings->email }}" class=" form-control">
                	</div>
                </div>

                <div class="col-lg-12">
                	<div class="row">
                		<div class="col-lg-3">
                		<div class="form-group">
                  		<label class="col-form-label">Facebook</label>
                		<input type="text"  name="facebook" value="{{ $settings->facebook }}" class="form-control">
                		</div>
                		</div>
                		<div class="col-lg-3">
                		<div class="form-group">
                  		<label class="col-form-label">Twitter</label>
                  		<input type="text"  name="twitter" value="{{ $settings->twitter }}" class="form-control">
                		</div>
                		</div>
                		<div class="col-lg-3">
                		<div class="form-group">
                  		<label class="col-form-label">Youtube</label>
                  		<input type="text"  name="youtube" value="{{ $settings->youtube }}" class="form-control">
                		</div>
                		</div>
                		<div class="col-lg-3">
                		<div class="form-group">
                  		<label class="col-form-label">Linkedin</label>
                  		<input type="text"  name="linkedin" value="{{ $settings->linkedin}}" class="form-control">
                		</div>
                		</div>
                	</div>
                </div>
                <div class="col-lg-12">
					<div class="form-group">
                  		<label class="col-form-label">Address</label>
                  		<textarea class="form-control" name="address">{{ $settings->address }}</textarea>
                	</div>

                	<div class="form-group">
                  		<label class="col-form-label">About Us</label>
                  		 <textarea class="form-control" name="about">{{ $settings->about }}</textarea>
                	</div>
                </div>
                <div class="col-lg-12">
                	<div class="form-group">
                  		<label class="col-form-label">Map</label>
                  		<textarea class="form-control" name="address">{{ $settings->address }}</textarea>
                	</div>
                </div>
                <div class="col-lg-6">
                	<div class="form-group">
                  		<label class="col-form-label">favicon</label>
                  		<input type="file" id="image2"  name="files2"  class="form-control-sm input-sm form-control">
					        <span class="preview-area2">
					            @if ($settings->favicon)
					           		<img src="{{ asset('images/thumb/'.$settings->favicon) }}">
					           	@endif
					        </span>
                	</div>
                </div>
                <div class="col-lg-6">
                	<div class="form-group">
                  		<label class="col-form-label">Logo</label>
                  			<input type="file" id="image"  name="files"  class="form-control">
					        <span class="preview-area">
					           	@if ($settings->logo)
					           		<img src="{{ asset('images/thumb/'.$settings->logo) }}">
					           	@endif
					        </span>
                	</div>
                </div>
                </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-secondary">Cancel</button>
            </div>
              </form>
            </div>
          </div>
    </div>
    </div>
  </div>
</div>
  <!-- Container-fluid Ends-->
<script type="text/javascript">
	function update_validation() 
	{   
		//alert("ok");
		//$(".updateFormError").show();
		//$(".updateFormError").html("<strong>Loading....</strong>");
    	//$(".sn2replace").val($('.sn2').summernote('code'));
    	var updateUrl = "{{ route('settings.update','1') }}";
	    var form = new FormData($('#updateForm')[0]);
	    $.ajax({
	      type: "POST",
	      url: updateUrl,
	      data: form,
	      cache: false,
	      contentType: false,
	      processData: false,
	      success: function(res)
	      {
	      	//alert(res);
	      	$(".updateFormError").html('');
	      	$.each(res.errors,function(key,value){
	      		$(".updateFormError").append('<p>'+value+'</p>');
	      	})
	      	if(res.success){
	      		$(".updateFormError").append('<p class="alert alert-info">'+res.success+'</p');
	      		//location.reload();
	      	}
	      }
	       
	    });
	      return false;
	}  
</script>
<script type="text/javascript">
  var inputLocalFont = document.getElementById("image");
	inputLocalFont.addEventListener("change",previewImages,false);
	function previewImages(){
	    var fileList = this.files;
	    var anyWindow = window.URL || window.webkitURL;
	$('.preview-area').html('');
	        for(var i = 0; i < fileList.length; i++){
	          var objectUrl = anyWindow.createObjectURL(fileList[i]);
	          $('.preview-area').append('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
	          window.URL.revokeObjectURL(fileList[i]);
	        }
	    }
</script>
<script type="text/javascript">
  var inputLocalFont = document.getElementById("image2");
	inputLocalFont.addEventListener("change",previewImages2,false);
	function previewImages2(){
	    var fileList = this.files;
	    var anyWindow = window.URL || window.webkitURL;
	$('.preview-area2').html('');
	        for(var i = 0; i < fileList.length; i++){
	          var objectUrl = anyWindow.createObjectURL(fileList[i]);
	          $('.preview-area2').append('<span class="span2"><img class="img-thumbnail" src="' + objectUrl + '" alt="" style="width:111px;height:100px"></span>');
	          window.URL.revokeObjectURL(fileList[i]);
	        }
	    }
</script>
@endsection
