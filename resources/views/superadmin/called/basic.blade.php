@if ($viewType == 'editprofile')

	<form method="POST" id="updateForm"  enctype="multipart/form-data" onsubmit="return update_validation()">
		@method('PUT')
		@csrf
		<input type="hidden" name="id" value="{{ $data->id }}">
		<span class="updateFormError"></span>
		<div class="form-group row">
			<div class="col-md-4">
				<label class="col-form-label">Name</label>
				<input type="text" required name="name" value="{{ $data->name }}"  class="form-control-sm form-control">
			</div>
			<div class="col-md-4">
				<label class="col-form-label">Email</label>
				<input type="email"  name="email" value="{{ $data->email }}"  class="form-control-sm form-control">
			</div>
			<div class="col-md-4">
				<label class="col-form-label">New Password</label>
				<input type="password"  name="password"   class="form-control-sm form-control">
			</div>
		</div>
					     
		<div class="form-group row">
		    <div class="col-md-4">
				<label class="col-form-label">Image</label>
		      	<input type="file" id="image2"  name="files"  class="form-control-sm input-sm form-control">
			</div>			             
		</div>
		<span class="preview-area2">
			<img src="{{ asset('images/thumb').'/'.$data->image }}">
		</span>
		
		<div class="form-group row">
		    <div class="col-md-12">
				<button type="submit" class="float-right btn btn-primary btn-sm ">Save Data</button>
			</div>
		</div>  
	</form>
	<script type="text/javascript">
	  var inputLocalFont = document.getElementById("image2");
	inputLocalFont.addEventListener("change",previewImages,false);
	function previewImages(){
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
@endif