<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>skanka</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        
        <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
        

    </head>
    <body class="antialiased ">
        <header class="mx-0 py-0 ">            
            {{-- nav --}}
            <div class="px-5 pt-2 pb-1">
                <div class="d-flex  justify-content-between  mx-5">
                    <div class="d-flex justify-content-center align-items-center ">
                        <a href="{{ route('welcome') }}" class="nav-link btn-hover me-4"><img id="logo" src="logo.png" alt="logo"></a>                      
                        <a href="{{ route('photo') }}" class="nav-link btn-hover mx-4">In Tài Liệu</a>
                        <a href="{{ route('intro') }}" class="nav-link btn-hover">Giới Thiệu</a>
                        <a href="{{ route('contract') }}" class="nav-link btn-hover mx-4">Liên Hệ</a>
                        <a href="{{ route('cart.show') }}" class="nav-link btn-hover     ">Tài liệu Của Bạn</a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">  
                        @if (Route::has('login'))
                        <div class="my-auto d-flex">
                            @auth
                                <a href="{{ route('profile.edit') }}" class="btn btn-light text-secondary">{{ Auth::user()->name }}</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-hover">Đăng nhập</a>
                                
                                @if (Route::has('register'))
                                    <a  href="{{ route('register') }}" class="btn btn-light text-secondary">Đăng ký</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </div>
                </div>  
            </div>
        </header>