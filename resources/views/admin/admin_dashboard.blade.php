<x-app-layout>
    <a href="{{route ('AdminDashboard')}}"></a>
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container-fuid">
                <div class="row">
                    <h2 class="text-center mb-5">file</h2>
                    <table class="mb-5">
                        <thead>
                            <tr >
                                <th >Tên Người Dùng</th>
                                <th >Tên Tệp</th>
                                <th >Số Lượng</th>
                                <th >Kích Thước</th>
                                <th >status</th>

                            </tr>
                        </thead>
                        <tbody class="mt-2">
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->user->name }}</td>
                                    <td>{{ $file->name }}</td>
                                    <td>{{ $file->quantity }}</td>
                                    <td>{{ $file->kichthuoc }}</td>
                                    <td>{{ $file->status }}</td>

                                    <td class="d-flex ">
                                        <a class="nav-link text-success mx-5" href="{{ route('download.file', ['path' => $file->path ]) }}">Tải xuống</a>
                                        <a href="" class="nav-link text-primary" >Duyệt</a>
                                    <td>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <hr>

                    <h2 class="text-center mb-5">Người dùng</h2>
                    <table class="mb-5">
                        <thead>
                            <tr >
                                <th >Tên Người Dùng</th>
                                <th >Emal</th>
                            </tr>
                        </thead>
                        <tbody class="mt-2">
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    
                                    <td>{{ $user->email }}</td>                                    
                                    <td class="d-flex "><a class="nav-link text-danger mx-5" href="">Xoá</a></tr>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <h2 class="text-center mb-5">Đơn Hàng</h2>
                    <table class="mb-5">
                        <thead>
                            <tr >
                                <th >Tên Người Dùng</th>
                                <th >Tên Tài Liệu</th>
                                <th >địa Chỉ</th>
                                <th> Số Điện Thoại</th>
                                <th> Trạng thái đơn hàng</th>
                            </tr>
                        </thead>
                        <tbody class="mt-2">
                            @foreach($carts as $cart)
                                <tr>
                                    <td>{{ $cart->user->name }}</td>
                                    <td>{{ $cart->file->name }}</td> 
                                    <td>{{ $cart->address }}</td> 
                                    <td>{{ $cart->phone }}</td>    
                                    <td>{{ $cart->status }}</td>                                 
                                    <td class="d-flex "><a class="nav-link text-primary mx-5" href="">duyệt</a></tr>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
