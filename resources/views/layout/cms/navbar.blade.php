<nav class="navbar header-navbar pcoded-header">
     <div class="navbar-wrapper">

         <div class="navbar-logo" style="background: #07895b;">
             <a class="mobile-menu" id="mobile-collapse" href="#!" >
                 <i class="feather icon-menu"></i>
             </a>
             <a href="">
                 <img class="img-fluid" src="{{ asset('assets/public/images/logo-cms-2.png') }}" alt="Theme-Logo">
             </a>
             <a class="mobile-options">
                 <i class="feather icon-more-horizontal"></i>
             </a>
         </div>

         <div class="navbar-container container-fluid">
             <ul class="nav-left">
                 <li>
                     <a href="#!" onclick="javascript:toggleFullScreen()">
                         <i class="feather icon-maximize full-screen"></i>
                     </a>
                 </li>
             </ul>
             <ul class="nav-right">
                 {{-- <li class="header-notification">
                     <a href="http://propertio-chat.apps.test/chat" class=""><i class="feather icon-message-square"></i></a>
                 </li> --}}
                 <li class="user-profile header-notification">
                     <div class="dropdown-primary dropdown">
                         <div class="dropdown-toggle" data-toggle="dropdown">
                            @if (Auth::user()->userData->picture_profile)
                            <img src="http://propertio-dev.apps.test/data/image/users/{{ Auth::user()->userData->picture_profile }}" class="img-radius" alt="Avatar-Profile-User">
                            @else
                            <img src="http://propertio-dev.apps.test/data/image/users/Avatar-default.png" class="img-radius" alt="Avatar-Profile-User">
                            @endif
                             <span>{!! html_entity_decode(Str::limit(auth()->user()->userData->fullname, 10, ' ...')) !!} </span>
                             <i class="feather icon-chevron-down"></i>
                         </div>
                         <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                             {{-- <li>
                                 <a href="user-profile.htm">
                                     <i class="feather icon-user"></i> Profile
                                 </a>
                             </li> --}}
                             <li>
                                 <a href="http://propertio-chat.apps.test/chat">
                                     <i class="feather icon-message-square"></i> Propertio Chat
                                 </a>
                             </li>
                             <li>
                                 <a href="http://propertio-sso.apps.test/logout">
                                     <i class="feather icon-log-out"></i> Logout
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </nav>