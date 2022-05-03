@include('Admin/includes/header')
@include('Admin/includes/left-nav')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i>Update Gallery</h1>
    </div>

  </div>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

      <div class="tile">
        <h3 class="tile-title"> Update Gallery</h3>
        <div class="tile-body">

          @if(session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <form action="{{url('/edit')}}" method="post" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="id" value="{{$data['id']}}">
           <div class="form-group">
            <label class="control-label">Name</label>
            <input class="form-control" type="text" name="name"  value="{{$data['name']}}">
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          
          
          <div class="form-group">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control" placeholder="image">
            <img src="{{asset($data->image)}}" width="100px" style="margin: 10px 0 0 5px ;" />
          </div>
          

          <div class="tile-footer">
            <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
            
          </div>

        </form>
      </div>

    </div>
  </div>

  <div class="col-md-3"></div>

</div>
</main>
@include('Admin/includes/footer')
