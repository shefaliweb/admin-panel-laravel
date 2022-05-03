@include('Admin/includes/header')
@include('Admin/includes/left-nav')
<body class="app sidebar-mini">

  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i>Manage Gallery</h1>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              @if(session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
              @endif
              <table class="table table-hover table-bordered table-striped" id="sampleTable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                 <!--    <th>Phone</th>
                    <th>Address</th> -->
                    <th class="text-center">Action</th>

                  </tr>
                </thead>
                <tbody>
                 @foreach($members as $member)
                 <tr>
                  <td>{{$member['id']}}</td>
                  <td>{{$member['name']}}</td>
                  <td><img src="{{asset($member->image)}}" width="80px" /></td>
       <td>
                    
                    <a href={{"edit/".$member['id']}} type="button" class="btn btn-outline-info">Edit</a> 
                    <a href={{"delete/".$member['id']}}  type="button" class="btn btn-outline-danger">Delete</a> 
                  </tr>
                  @endforeach
                </tbody>
              </table> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <style type="text/css">
  .btn{
    border-radius: 20px;
    width: 80px;
  }
</style>

@include('Admin/includes/footer')
<script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>

</body>

</html>