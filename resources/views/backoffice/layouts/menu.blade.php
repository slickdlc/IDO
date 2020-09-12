<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><img width="50px"src="{{asset('/img/frontoffice/idoblanco.png')}}"></a>
    </div>

    <div class="clearfix"></div>
        <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>Ventas</h3>
            <ul class="nav side-menu">
                @if(Auth::user()->hasRole('ADMIN'))
                <li><a><i class="fas fa-home fa-fw mx-2 fa-lg"></i> {{$moduloCatalogo->modulo}} <span class="fas fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                @foreach( $moduloCatalogo->submodulos as $sm)
                <li><a href="{{$sm->url}}"><i class="{{$sm->icono}} mr-2"></i>{{$sm->submodulo}}</a></li>
                @endforeach
                </ul>
                </li>
                @endif()
            </ul>
       </div>
    </div> 
   
        
    
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('adminLogout')}}">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>