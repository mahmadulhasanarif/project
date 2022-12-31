@extends('backend.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit Profile Page </h4>
            
            <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control" type="text" value="{{ $editData->name }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                <div class="col-sm-10">
                    <input name="email" class="form-control" type="text" value="{{ $editData->email }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image </label>
                <div class="col-sm-10">
					<input type="file" name="image" class="form-control" id="image" >  </div>
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editData->image))? url('upload/user_images/'.$editData->image):url('upload/user_images//no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
				<div class="row">
					<div class="col-lg-1"><input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile"></div>
				</div>
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


@endsection
