<footer class="d-flex justify-content-between px-5">
    <div class="d-flex ">
        <img class="mx-5" src="logo.png" id="logo-footer" alt="logo">
        <div class="">
            <div class=" mt-4">
                <a href=""><i class="fa-brands fa-facebook fa-xl"></i></a>
                <a class="mx-2" href=""><i class="fa-brands fa-facebook-messenger fa-xl"></i></a>
                <a href=""><i class="fa-brands fa-telegram fa-xl"></i></a>
                <a class="mx-2" href=""><i class="fa-brands fa-github fa-xl"></i></a>
            </div>
            <div class="mt-3">
                <span class=""><i class="fa-solid fa-phone-volume me-2"></i>099999999</span><br>
                <span class=""><i class="fa-solid fa-envelope me-2"></i>skanka@gmail.com</span><br>
                <span class="">Đại chỉ: Đại học Cần Thơ, Đường 3 Tháng 2, Xuân Khánh, Ninh Kiều, Cần Thơ.</span>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column align-content-around me-3">
        <div class="mt-3">
            <div class="d-flex justify-content-center align-items-center ">    
                <a href="{{ route('photo') }}" class="nav-link btn-hover ">In Tài Liệu</a>
                <a href="{{ route('intro') }}" class="nav-link btn-hover mx-4">Giới Thiệu</a>
                <a href="{{ route('contract') }}" class="nav-link btn-hover">Liên Hệ</a>
                <a href="{{ route('cart.show') }}" class="nav-link btn-hover mx-4">Tài liệu Của Bạn</a>
            </div>
        </div>
        <div>
            <p class=" mt-4  mb-0 text-center mx-auto ">&copy;CT217-10 B2014751 Lê Quốc Khánh</p>
        </div>
    </div>
    
</footer>
</body>
</html>
