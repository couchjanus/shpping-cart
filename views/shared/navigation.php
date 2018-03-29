<header id="header" class="navbar-fixed-top navbar-inverse video-menu" role="banner">
    <div class="container">
      <!-- <div class="row"> -->
                 <div class="navbar-header ">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                                <img src="images/logo.png" alt="" class="img-responsive">
                        </a>
                </div><!--Navbar header End-->
                <nav class="collapse navbar-collapse navigation" id="navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav navbar-right ">
                        <li><a href="/" > Home</a></li>
                        <li><a href="#" id="megacatalog"> Catalog</a> </li>
                        <li><a href="/about" > About Us </a> </li>
                        <li><a href="/blog" > Blog</a> </li>
                        
                        <li><a href="/contact"> Contact Us</a> </li>
                            
                        <li><a href="#" id="cart-trigger"><i class="fa fa-shopping-cart shopping-cart"></i></a></li>
                            
                        <li><a href="#">
                            <label for="toggle-user" class="animate">
                                  <i class="fa fa-user"></i></label></a>
                        </li>
                    </ul>

                </nav>
    </div><!-- /.container-fluid -->

  </header>
                        <dropdown>
                            <input id="toggle-user" type="checkbox">
                            <ul class="animate">
                            <?php if(User::isGuest()):?>
                                    <li class="animate"><a href="/register">SignUp<i class="fa fa-user-plus float-right"></i></a></li>
                                    <li class="animate"><a href="/login">LogIn<i class="fa fa-sign-in float-right"></i></a></li>
                                <?php else:?>
                                    <li class="animate"><a href="/logout">LogOut<i class="fa fa-sign-out float-right"></i></a></li>
                                <?php endif;?>
                            </ul>
                        </dropdown>
