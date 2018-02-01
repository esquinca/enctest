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
                    <li> <a href="index.html" class="waves-effect"><i class="zmdi zmdi-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right">4</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="home"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard Pral</span></a> </li>
                            <li> <a href="dashboard_survey"><i class=" fa-fw">2</i><span class="hide-menu">Dashboard Survey</span></a> </li>
                            <li> <a href="index3.html"><i class=" fa-fw">3</i><span class="hide-menu">Dashboard 3</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-voicemail fa-fw" data-icon="v"></i> <span class="hide-menu"> eCommerce <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="products.html"><i class="fa-fw">P</i><span class="hide-menu">Products</span></a> </li>
                            <li> <a href="product-orders.html"><i class="fa-fw">PO</i><span class="hide-menu">Product Orders</span></a> </li>
                            <li> <a href="product-detail.html"><i class="fa-fw">PD</i><span class="hide-menu">Product Details</span></a> </li>
                            <li> <a href="product-edit.html"><i class="fa-fw">PE</i><span class="hide-menu">Product Edit</span></a> </li>
                            <li> <a href="product-cart.html"><i class="fa-fw">PC</i><span class="hide-menu">Product Cart</span></a> </li>
                            <li> <a href="product-checkout.html"><i class="fa-fw">PC</i><span class="hide-menu">Product Checkout</span></a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
