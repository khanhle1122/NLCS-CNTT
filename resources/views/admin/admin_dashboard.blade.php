<x-app-layout>
    <a href="{{route ('AdminDashboard')}}"></a>
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container-fuid">
                <div class="row">
                    <h2 class="text-center mb-5">file</h2>
                    <table>
                        <thead>
                            <tr >
                                <th >Tên Người Dùng</th>
                                <th >Tên Tệp</th>
                                <th >Số Lượng</th>
                                <th >Kích Thước</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->user->name }}</td>
                                    <td class="">{{ $file->name }}</td>
                                    <td>{{ $file->quantity }}</td>
                                    <td>{{ $file->kichthuoc }}</td>
                                    <td class="d-flex "><a class="nav-link text-success mx-5" href="{{ route('download.file', ['path' => $file->path ]) }}">Tải xuống</a><a href="" class="nav-link text-primary" >Duyệt</a></tr>
                                    <td></tr>

                            @endforeach
                        </tbody>
                    </table>
                    <h2 class="text-center mt-5">Người dùng</h2>
                    <table>
                        <thead>
                            <tr >
                                <th >Tên Người Dùng</th>
                                <th >Emal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    
                                    <td>{{ $user->email }}</td>                                    
                                    <td class="d-flex "><a class="nav-link text-danger mx-5" href="{{ route('download.file', ['path' => $file->path ]) }}">Xoá</a></tr>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
