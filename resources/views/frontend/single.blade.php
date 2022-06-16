@extends('frontend.layouts.main')

@section('content')
<section class="flat-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li class="trail-item">
                        <a href="#" title="">Home</a>
                        <span><img src="/frontend/images/icons/arrow-right.png" alt=""></span>
                    </li>
                    <li class="trail-item">
                        <a href="#" title="">Produk</a>
                        <span><img src="/frontend/images/icons/arrow-right.png" alt=""></span>
                    </li>
                    <li class="trail-end">
                        <a href="#" title="">{{ $produk->kategori->kategori }}</a>
                    </li>
                </ul><!-- /.breacrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-breadcrumb -->

<section class="flat-product-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="{{ asset('storage/' . $produk->gambar) }}">
                            <a href='#' id="zoom" class='zoom'><img src="{{ asset('storage/' . $produk->gambar) }}" alt='' width='400' height='300'></a>
                        </li>
                        <li data-thumb="{{ asset('storage/' . $produk->gambar) }}">
                            <a href='#' id="zoom1" class='zoom'><img src="{{ asset('storage/' . $produk->gambar) }}" alt='' width='400' height='300'></a>
                        </li>
                    </ul><!-- /.slides -->
                </div><!-- /.flexslider -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="product-detail style4">
                    <div class="header-detail">
                        <h4 class="name">{{ $produk->nama_produk }}</h4>
                        <div class="category">
                            Kategori : {{ $produk->kategori->kategori }}
                        </div>
                        <div class="reviewed">
                            <div class="status-product">
                                @if ($produk->stok >= 3)
                                Availablity <span class="bg-green">In stock</span>
                                @endif
                            </div>
                        </div><!-- /.reviewed -->
                    </div><!-- /.header-detail -->
                    <div class="content-detail">
                        <div class="price">
                            <div class="sale">
                                Rp. {{ number_format($produk->harga, 0, ',','.') }}
                            </div>
                        </div>
                        <div class="info-text">
                            {!! $produk->deskripsi !!}
                        </div>
                        <div class="product-id">
                            ID Produk: <span class="id">{{ $produk->kode_produk }}</span>
                        </div>
                    </div><!-- /.content-detail -->
                    <form action="/produk/chekcout/{{ $produk->kode_produk }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="footer-detail">
                            <div class="quanlity-box">
                                <div class="quanlity">
                                    <span class="btn-down"></span>
                                    <input type="number" name="qty" value="{{ old('qty') }}" min="1" max="{{ $produk->stok }}" placeholder="Quanlity">
                                    <span class="btn-up"></span>
                                </div>
                                <br>
                                @if (session('message'))
                                    <div class="invalid-feedback text-danger">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                @error('qty')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div><!-- /.quanlity-box -->
                            <div class="box-cart style2">
                                <div class="btn-add-cart">
                                    <button type="submit" title="">
                                        <img src="/frontend/images/icons/add-cart.png" alt="">Belanja Sekarang
                                    </button>
                                </div>
                            </div><!-- /.box-cart style2 -->
                        </div><!-- /.footer-detail -->
                    </form>
                </div><!-- /.product-detail style4 -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.flat-product-detail -->
@endsection