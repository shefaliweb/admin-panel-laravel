@include('Admin/includes/header')
@include('Admin/includes/left-nav')
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Create Gallery</h1>
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

              <form action="{{url('add')}}" method="post" enctype="multipart/form-data">
                 @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name" placeholder="Enter Name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                </div>
                <div class="form-group">
                  <label class="control-label">Image</label>
                  <input class="form-control" type="file" name="image" >
                  
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
                </div>
       <!-- <div class="form-group">
                  <label class="control-label">phone</label>
                  <input class="form-control" type="phone" name="phone" placeholder="Enter phone">
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                 </div> 
                <div class="form-group">
                  <label class="control-label">password</label>
                  <input class="form-control" type="password" name="password" placeholder="Enter password"> 
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                 </div> 
                
         <div class="form-group">
                  <label class="control-label">Address</label>
                  <textarea class="form-control" rows="4" name="address" placeholder="Enter your address"></textarea> 
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
               </div>  -->
          
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
