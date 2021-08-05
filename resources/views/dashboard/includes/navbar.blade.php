<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" id="nav_expanded_nav" 
  role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
      <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="{{route('updateOrganization')}}">
            <span>{{trans('admin.setting')}}</span>
          </a>

        </li>
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><span>
        {{trans('admin.dep_emp')}}</span></a>
          <ul class="dropdown-menu">
          
          <li data-menu="">
              <a class="dropdown-item" href="{{route('employee')}}" data-toggle="dropdown">{{trans('admin.emp')}}</a>
            </li>
            <li data-menu="">
              <a class="dropdown-item" href="{{route('department')}}" data-toggle="dropdown">{{trans('admin.dep')}}</a>
            </li>
          </ul>
        </li>

        <li class="dropdown nav-item" data-menu="dropdown">
          <a class="dropdown-toggle nav-link" href="{{route('subscribers')}}">
            <span>{{trans('admin.subscribers')}}</span>
          </a>

        </li>


      </ul>
    </div>
  </div>