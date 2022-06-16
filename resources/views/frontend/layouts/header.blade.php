<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="flat-support">
                    <li class="phone">
                        <span class="text-warning">Call Us</span>: <a href="#" title="">(888) 1234 56789</a>
                    </li>
                </ul><!-- /.flat-support -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                &nbsp;
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <ul class="flat-unstyled">
                    <li class="account">
                        <a href="#" title="">
                            {{ isset(auth()->user()->id) ? auth()->user()->nama_lengkap : 'My Account' }}
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="unstyled">
                            @cannot('access', (@auth()->user()->id ?? ''))
                            <li>
                                <a href="/login" title="" >Login</a>
                            </li>
                            <li>
                                <a href="/register" title="" >Register</a>
                            </li>
                            @endcannot

                            @can('access', (@auth()->user()->id ?? ''))
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="logout">Logout</button>
                                </form>
                            </li>
                            {{-- <li>
                                <a href="/my-account" title="">Change Account</a>
                            </li> --}}
                            <li>
                                <a href="/my-order" title="">My Order</a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                </ul><!-- /.flat-unstyled -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.header-top -->
<div class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="logo" class="logo">
                    <a href="index.html" title="">
                        <img src="/frontend/images/logos/logo.png" alt="">
                    </a>
                </div><!-- /#logo -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-6">
                <div class="top-search">
                    <form action="#" method="GET" class="form-search" accept-charset="utf-8">
                        <div class="cat-wrap">
                            <select name="category">
                                <option hidden value="">All Category</option>
                                @foreach ($config['menu']['menuSide'] as $menu)
                                    <option hidden value="{{ $menu->slug }}">{{ $menu->kategori }}</option>
                                @endforeach
                            </select>
                            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                            <div class="all-categories">
                                <div class="cat-list-search">
                                    <div class="title">
                                        All Category
                                    </div>
                                    <ul>
                                        @foreach ($config['menu']['menuSide'] as $menu)
                                            <li>
                                                {{ $menu->kategori }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div><!-- /.cat-list-search -->
                            </div><!-- /.all-categories -->
                            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </div><!-- /.cat-wrap -->
                        <div class="box-search">
                            <input type="text" name="search" placeholder="Search what you looking for ?">
                            <span class="btn-search">
                                <button type="submit"><img src="/frontend/images/icons/search.png" alt=""></button>
                            </span>
                        </div><!-- /.box-search -->
                    </form><!-- /.form-search -->
                </div><!-- /.top-search -->
            </div><!-- /.col-md-6 -->
            {{-- <div class="col-md-3">
                <div class="box-cart">
                    <div class="inner-box">
                        <a href="#" title="">
                            <div class="icon-cart">
                                <img src="/frontend/images/icons/cart.png" alt="">
                                <span>0</span>
                            </div>
                            <div class="price">
                                Rp 0.00
                            </div>
                        </a>
                        <div class="dropdown-box">
                            <ul>
                                <li>
                                    <div class="img-product">
                                        <img src="/frontend/images/product/other/img-cart-1.jpg" alt="">
                                    </div>
                                    <div class="info-product">
                                        <div class="name">
                                            Samsung - Galaxy S6 4G LTE <br />with 32GB Memory Cell Phone
                                        </div>
                                        <div class="price">
                                            <span>1 x</span>
                                            <span>$250.00</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <span class="delete">x</span>
                                </li>
                                <li>
                                    <div class="img-product">
                                        <img src="/frontend/images/product/other/img-cart-2.jpg" alt="">
                                    </div>
                                    <div class="info-product">
                                        <div class="name">
                                            Sennheiser - Over-the-Ear Headphone System - Black
                                        </div>
                                        <div class="price">
                                            <span>1 x</span>
                                            <span>$250.00</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <span class="delete">x</span>
                                </li>
                            </ul>
                            <div class="total">
                                <span>Subtotal:</span>
                                <span class="price">$1,999.00</span>
                            </div>
                            <div class="btn-cart">
                                <a href="shop-cart.html" class="view-cart" title="">View Cart</a>
                                <a href="shop-checkout.html" class="check-out" title="">Checkout</a>
                            </div>
                        </div>
                    </div><!-- /.inner-box -->
                </div><!-- /.box-cart -->
            </div> --}}
            <!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.header-middle -->