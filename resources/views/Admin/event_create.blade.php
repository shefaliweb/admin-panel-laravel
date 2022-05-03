@include('Admin/includes/header')
@include('Admin/includes/left-nav')
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-edit"></i>Created Events</h1>
    </div>
    
  </div>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

      <div class="tile">
        <!-- <h3 class="tile-title"> Form</h3> -->
        <div class="tile-body">

          @if(session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <form action="{{url('AddEvent')}}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="form-group">
            <label class="control-label">Event Name</label>
            <input class="form-control" type="text" name="event_name" placeholder="Enter Name">
            @if ($errors->has('event_name'))
            <span class="text-danger">{{ $errors->first('event_name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label class="control-label">Image</label>
            <input class="form-control" type="file" name="image" >
            
            @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif
          </div>

          
          <div class="tile-footer">
               <!--  <a href="" class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</a>&nbsp;&nbsp;&nbsp;
               -->
               <!--   <a href="" class="btn btn-secondary" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
               <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
               
             </div>

           </form>
         </div>
         
       </div>
     </div>
     
     <div class="col-md-3"></div>

   </div>
 </main>
 @include('Admin/includes/footer')
