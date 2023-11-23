@include('layouts.header');
<div class="container mb-5 " style="height: 685px">
    <div class="row ">
        <div class="px-0  col-md-6 offset-sm-3 mt-5 ">
            <div class="shadow-sm p-4 mb-4 bg-white">
                
                <h4 class="mb-5 text-center">Tài liệu của bạn</h4>
                @if(isset($files) && $files->count() > 0)
                
                    @foreach($files as $file)
                       <div class="d-flex justify-content-around">
                            <div class="col-9">
                                <div>{{ $file->name }}  </div>
                                <div>Số lượng: {{ $file->quantity }}</div>
                                <div>cỡ giấy: {{ $file->kichthuoc }}</div>
                            </div>
                            <a class="btn btn-danger px-5 m-auto" href="{{ route('file.delete', ['id' => $file->id]) }}">Delete</a>
                            
                                          
                       </div>
                        <hr>
                    @endforeach
                        <form action="{{ route('cart.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">Tổng tiền: {{ $totalCost }} vnd</div>
                            <input type="hidden" name="price" value="{{ $totalCost }} ">
                            <input type="hidden" name="file_id" value="{{ $file->id }} ">
                            <input type="hidden" name="user_id" value="{{ $file->user_id }} ">
                            <label>Nơi nhận tài liệu: </label>
                            <input class="form-control" class="my-3" type="text" value="" name="address" placeholder="Nhập Địa Chỉ" required><br>
                            <label for="">Số điện thoại nhận tài liêu: </label>
                            <input class="form-control" type="text" value="" name="phone" placeholder="Nhập số điện thoại" required><br>
                            <label  class="mb-3" for="method">Phương thức thanh toán: </label>
                                <select name="method"  id="method">
                                    <option value="thanh toán khi nhận hàng">thanh toán khi nhận hàng</option>
                                </select>
                                <br>
                            <div class=" text-center">
                                
                                <button class="btn btn-primary  mt-3">  photo</button>
                            </div>
                        </form>
                    
                @else
                       <div class="text-center">
                            <img  src="image/th.jpeg">
                       </div>
                    
                @endif
                    </div>

                    
        </div>
    </div>
</div>
       @include('layouts.footer')