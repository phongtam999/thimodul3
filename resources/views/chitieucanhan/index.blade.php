
    <div class="card">
        <div class="container">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3> Chi tiêu cá nhân </h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('chitieucanhan.create') }}" class='btn btn-primary float-end'> Thêm chi tiêu</a>
                    </div>
                </div>
            </div>
            <div class='card-body'>
                <table class="table table-bordered">
                    <thead>
                        @if (Session::has('thong bao'))
                            <div class=" alert alert-success">
                                {{ Session::get('thong bao') }}
                            </div>
                        @endif
                        <tr>
                            <th>id</th>
                            <th>Danh Mục</th>
                            <th>Ngày</th>
                            <th>Số tiền</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chitieucanhans as $i => $chitieucanhan)
                            <tr>
                                {{-- <td>{{ ++$i }} </td> --}}
                                <td>{{ $chitieucanhan->Danhmuc }} </td>
                                <td>{{ $chitieucanhan->Ngay }} </td>
                                <td>{{ $chitieucanhan->Sotien }} </td>
                                <td>{{ $chitieucanhan->Ghichu }} </td>
                                <td>
                                    <form action="{{ route('chitieucanhan.destroy', $chitieucanhan->id) }}" method="POST">
                                        <a href="{{ route('chitieucanhan.edit', $chitieucanhan->id) }}" class="btn btn-info"> Chỉnh Sửa </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

