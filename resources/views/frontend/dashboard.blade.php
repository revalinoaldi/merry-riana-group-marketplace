@extends('frontend.layouts.main')

@section('content')
    {{-- Start Of Content --}}
    <section class="flat-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs">
                        <li class="trail-item">
                            <a href="#" title="">Home</a>
                            <span><img src="/frontend/images/icons/arrow-right.png" alt=""></span>
                        </li>
                        <li class="trail-end">
                            <a href="#" title="">Home Pages</a>
                        </li>
                    </ul><!-- /.breacrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-breadcrumb -->
    
    <section class="flat-slider style2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider owl-carousel style2">
                        <div class="slider-item style3">
                            <div class="item-text">
                                <div class="header-item">
                                    <p>You can build the banner for other category</p>
                                    <h2 class="name"><span>SHOP BANNER</span></h2>
                                </div>
                            </div>
                            <div class="item-image">
                                <img src="/frontend/images/banner_boxes/07.png" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.slider-item style3 -->
                        <div class="slider-item style3">
                            <div class="item-text">
                                <div class="header-item">
                                    <p>You can build the banner for other category</p>
                                    <h2 class="name"><span>SHOP BANNER</span></h2>
                                </div>
                            </div>
                            <div class="item-image">
                                <img src="/frontend/images/banner_boxes/07.png" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.slider-item style3 -->
                    </div><!-- /.slider -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-slider style2 -->
    
    <main id="shop" class="style2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-shop">
                        <div class="wrap-imagebox">
                            <div class="flat-row-title style4">
                                <h3>All Product</h3>
                                
                                <div class="clearfix"></div>
                            </div><!-- /.flat-row-title style4 -->
                            <div class="sort-product style1">
                                <ul class="icons">
                                    <li>
                                        <img src="/frontend/images/icons/list-1.png" alt="">
                                    </li>
                                    <li>
                                        <img src="/frontend/images/icons/list-2.png" alt="">
                                    </li>
                                </ul><!-- /.icons -->
                                <div class="sort">
                                    <div class="popularity">
                                        <select name="popularity">
                                            <option value="">All Categories</option>
                                            @foreach ($config['menu']['menuSide'] as $menu)
                                                <option value="{{ $menu->slug }}">{{ $menu->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- /.sort -->
                                <div class="clearfix"></div>
                            </div><!-- /.sort-product style1 -->
                            <div class="row">
                                @foreach ($produks as $produk)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-box">
                                            <div class="imagebox">
                                                <div class="box-image owl-carousel-1">
                                                    <a href="/produk/" title="">
                                                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}">
                                                    </a>
                                                    <a href="/produk/{{ $produk->kode_produk }}" title="">
                                                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}">
                                                    </a>
                                                    <a href="/produk/{{ $produk->kode_produk }}" title="">
                                                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}">
                                                    </a>
                                                </div><!-- /.box-image -->
                                                <div class="box-content">
                                                    <div class="cat-name">
                                                        <a href="/produk/{{ $produk->kode_produk }}" title="">{{ $produk->kategori->kategori }}</a>
                                                    </div>
                                                    <div class="product-name">
                                                        <a href="/produk/{{ $produk->kode_produk }}" title="">{{ $produk->nama_produk }}</a>
                                                    </div>
                                                    <div class="price">
                                                        <span class="sale">Rp. {{ number_format($produk->harga, 0, ',','.') }}</span>
                                                        {{-- <span class="regular">$2,999.00</span> --}}
                                                    </div>
                                                </div><!-- /.box-content -->
                                                <div class="box-bottom">
                                                    <div class="btn-add-cart">
                                                        <a href="/produk/{{ $produk->kode_produk }}" title="">
                                                            <img src="/frontend/images/icons/add-cart.png" alt="">Belanja Sekarang
                                                        </a>
                                                    </div>
                                                </div><!-- /.box-bottom -->
                                            </div><!-- /.imagebox -->
                                        </div><!-- /.product-box -->
                                    </div><!-- /.col-lg-3 col-md-4 col-sm-6 -->
                                @endforeach
                                
                            </div><!-- /.row -->
                            <div class="d-flex justify-content-center">
                                {{ $produks->links() }}
                            </div>
                    </div><!-- /.main-shop -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </main><!-- /#shop -->
    {{-- End Of Content --}}
    <section class="flat-iconbox">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/frontend/images/icons/car.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Worldwide Shipping</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Free Shipping On Order Over $100</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/frontend/images/icons/order.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Order Online Service</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Free return products in 30 days</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/frontend/images/icons/payment.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Payment</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Secure System</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="iconbox">
                        <div class="box-header">
                            <div class="image">
                                <img src="/frontend/images/icons/return.png" alt="">
                            </div>
                            <div class="box-title">
                                <h3>Return 30 Days</h3>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-content">
                            <p>Free return products in 30 days</p>
                        </div><!-- /.box-content -->
                    </div><!-- /.iconbox -->
                </div><!-- /.col-md-3 col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-iconbox -->
@endsection