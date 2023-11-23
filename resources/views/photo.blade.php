@include('layouts.header')

<main>
    <div class="container ">
        <div class="row ">
            <div class="px-0  col-md-6 offset-sm-3 mt-5 ">
                <form  class=" ms-5 p-4 mb-4 bg-white" action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Vùng chọn tệp và nút tải lên -->
                    <input name="file" class="mb-3" type="file" id="fileInput" onchange="displayFileConfig(this)">
                    <!-- Vùng chọn cấu hình -->
                    <div id="fileConfig">
                        <h3>Cấu Hình Tệp</h3>
                        <label  class="mb-3" for="paperSize">Loại Giấy:</label>
                        <select name="kichthuoc" style="width: 50px; height:20px" id="paperSize">
                            <option value="A5">A5</option>
                            <option value="A4">A4</option>
                            <option value="A3">A3</option>
                            <!-- Thêm các loại giấy khác nếu cần -->
                        </select>
                        <br>
                        <label for="quantity">Số Lượng:</label>
                        <input name="quantity" type="number" style="width: 40px; height:20px" min="1" id="quantity">
                        <br >
                        <button class="mt-3 btn btn-primary" type="submit" >Tải Lên</button>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

</main>

<footer class="d-flex fixed-bottom justify-content-between px-5">
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
<script>
    function displayFileConfig(input) {
        var fileConfig = document.getElementById('fileConfig');

        // Kiểm tra xem có tệp được chọn không
        if (input.files.length > 0) {
            // Hiển thị vùng chọn cấu hình nếu có tệp được chọn
            fileConfig.style.display = 'block';
        } else {
            // Ẩn vùng chọn cấu hình nếu không có tệp được chọn
            fileConfig.style.display = 'none';
        }
    }

    
</script>
