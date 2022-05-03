  <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
   
     
      <ul class="app-menu">
        
         <li><a class="app-menu__item" href="{{ url('dashboard') }}"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           
             <li><a class="app-menu__item" href="{{ url('Adduser') }}"><i class="app-menu__icon fa fa-circle-o"></i>Add Gallery</a></li>
             <li><a class="app-menu__item" href="{{ url('ManageUser') }}"><i class="app-menu__icon fa fa-circle-o"></i>Manage Gallery</a></li>

          </ul>
        </li>   
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Events</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           
             <li><a class="app-menu__item" href="{{ url('/Event') }}"><i class="app-menu__icon fa fa-circle-o"></i>Add Events</a></li>
             <li><a class="app-menu__item" href="{{ url('/ManageEvent') }}"><i class="app-menu__icon fa fa-circle-o"></i>Manage Events</a></li>

          </ul>
        </li>   
       

         <li><a class="app-menu__item" href="{{url('/user')}}"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Manage User</span></a></li>
         
          <li><a class="app-menu__item" href="{{url('/logout')}}"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Logout</span></a></li>
    
      </ul>

    </aside>
