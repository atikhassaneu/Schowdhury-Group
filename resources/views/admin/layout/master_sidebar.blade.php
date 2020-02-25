<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                                       
                    <li>
                        <a href="#"><i class="fa fa-sliders fa-2x"></i> Slider<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('slider.create')}}">Add A New Slider</a>
                            </li>
                            <li>
                                <a href="{{route('slider.index')}}">All Sliders</a>
                            </li>

                        </ul>
                      </li>

                    <li>
                        <a href="#"><i class="fa fa-product-hunt fa-2x"></i> Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('product.create')}}">Add A New Product</a>
                            </li>
                            <li>
                                <a href="{{route('product.index')}}">All Products</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-image fa-2x"></i> Gallery<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('gallery.create')}}">Add A New Photo</a>
                            </li>
                            <li>
                                <a href="{{route('gallery.index')}}">All Photo</a>
                            </li>

                        </ul>
                    </li>

                    <li><a href="{{route('contact.index')}}"><i class="fa fa-envelope fa-2x"></i>Contact</a></li>

                    <li>
                        <a href="#"><i class="fa fa-user fa-2x"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('password_change.index')}}">Change Password</a>
                            </li>
                            <li>
                                <a href="" onclick="confirmLogout()">Logout</a>
                                <form  action="{{route('logout')}}" method="post" id="logout">@csrf</form>
                            </li>
                                
                            <script>
                                function confirmLogout(){
                                    if (confirm("Do you Want to Logout?")){
                                        event.preventDefault();
                                        document.getElementById('logout').submit();
                                    }
                                }
                            </script>
                        </ul>
                    </li>

                </ul>
               
            </div>
            
        </nav>  