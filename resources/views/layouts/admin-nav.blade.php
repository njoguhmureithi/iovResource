<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
       <ul id="iq-sidebar-toggle" class="iq-menu">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Dashboard</span></a>
         </li>
          <li class="active">
             <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Sermons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                <li class="active"><a href="{{ route('admin.sermons.index') }}"><i class="las la-house-damage"></i>Sermon</a></li>
                <li><a href="{{ route('admin.sermons-category.index') }}"><i class="ri-function-line"></i>Categories</a></li>
                <li><a href="{{ route('admin.sermon-notes.index') }}"><i class="las la-user"></i>Notes</a></li>
                
             </ul>
          </li>
          <li>
             <a href="{{ route('admin.publications.index') }}" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Publications</span></a>
          </li>
          <li>
            <a href="{{ route('admin.events.index') }}" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Events</span></a>
         </li>
         <li>
            <a href="{{ route('admin.users.index') }}" class="iq-waves-effect"><i class="las la-user-tie iq-arrow-left"></i><span>Users</span></a>
         </li>
          
       </ul>
    </nav>
 </div>