@include('layouts.header');
<div class="container ">
    <div class="row ">
        <div class="px-0  col-md-6 offset-sm-3 mt-5 ">
            <div class="shadow-sm p-4 mb-4 bg-white">
                
                <h4 class="mb-5 text-center">Tài liệu của bạn</h4>
                @if(isset($files) && $files->count() > 0)
                
                    @foreach($files as $file)
                       <div class="d-flex justify-content-around">
                            <div>
                                <div>{{ $file->name }}  </div>
                                <div>Số lượng: {{ $file->quantity }}</div>
                                <div>cỡ giấy: {{ $file->kichthuoc }}</div>
                            </div>
                            <a class="btn btn-danger px-5 m-auto" href="{{ route('file.delete', ['id' => $file->id]) }}">Delete</a>
                            
                                          
                       </div>
                        <hr>
                    @endforeach
                    <div class="mb-3">Tổng tiền: {{ $totalCost }} vnd</div>
                    <input type="hidden" name="total" value="${{ $totalCost }} ">
                    <label>Nơi nhận tài liệu: </label>
                    <input class="form-control" class="my-3" type="text" value="" name="address" placeholder="Nhập Địa Chỉ"><br>
                    <label for="">Số điện thoại nhận tài liêu: </label>
                    <input class="form-control" type="text" value="" name="phone" placeholder="Nhập số điện thoại"><br>
                    <label  class="mb-3" for="method">Phương thức thanh toán: </label>
                        <select name="method"  id="method">
                            <option value="A5">thanh toán khi nhận hàng</option>
                        </select>
                        <br>
                    <button class="btn btn-primary mx-auto mt-3">photo</button>
                @else
                       <div class="text-center">
                            <img  src="image/th.jpeg">
                       </div>
                    
                @endif
                    </div>
        </div>
    </div>
</div>
       

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