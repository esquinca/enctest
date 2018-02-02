        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="../plugins/images/users/user.png" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ auth()->user()->name }}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="zmdi zmdi-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right">2</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="home"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard Pral</span></a> </li>
                            <li> <a href="dashboard_survey"><i class=" fa-fw">2</i><span class="hide-menu">Dashboard Survey</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bullhorn fa-fw" data-icon="v"></i> <span class="hide-menu">Publicidad<span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="create_survey"><i class="fa fa-plus-square-o fa-fw"></i><span class="hide-menu">Crear</span></a> </li>
                            <li> <a href="edit_survey"><i class="fa fa-edit fa-fw"></i><span class="hide-menu">Editar</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="ti-clipboard fa-fw"></i> <span class="hide-menu">Gestión<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">20</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="buttons.html"><i class="fa fa-university fa-fw"></i> <span class="hide-menu">Hotel</span></a></li>
                            <li><a href="sweatalert.html"><i class="ti-user fa-fw"></i> <span class="hide-menu">Usuarios</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="ti-clipboard fa-fw"></i> <span class="hide-menu">Informes<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">20</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="buttons.html"><i class="fa fa-mobile-phone fa-fw"></i> <span class="hide-menu">Devices</span></a></li>
                            <li><a href="sweatalert.html"><i class="fa fa-hdd-o fa-fw"></i> <span class="hide-menu">APS</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
