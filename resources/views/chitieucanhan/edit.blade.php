
    <div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Chỉnh sửa chi tiêu</h3>
                    </div>
                    <a href="{{ route('chitieucanhan.index') }}" class='btn btn-primary float-end'>Chỉnh sửa chi tiêu </a>

                </div>
            </div>
        </div>
        <div class="car-body">
            <form action="{{ route('chitieucanhan.update',$chitieucanhan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="from group">
                            <strong>Danh Mục</strong>
                            <input type="text" name="Danhmuc" value ="{{ $chitieucanhan->Danhmuc }}"class="form-control" placeholder="Nhập danh mục">
                              @error('Danhmuc')
                <div style="color: red">{{$message}}</div>
        @enderror
                        </div>
                        <div class="from group">
                            <strong>Ngày</strong>
                            <input type="date" name="Ngay" value ="{{ $chitieucanhan->Ngay }}"class="form-control" placeholder="Nhập ngày chi tiêu">
                              @error('Ngay')
                <div style="color: red">{{$message}}</div>
        @enderror
                        </div>

                         <div class="from group">
                            <strong>Số tiền</strong>
                            <input type="text" name="Sotien" value ="{{ $chitieucanhan->Sotien }}"class="form-control" placeholder="Nhập số tiền">
                              @error('Sotien')
                <div style="color: red">{{$message}}</div>
        @enderror
                        </div>

                          <div class="from group">
                            <strong>Ghi chú</strong>
                            <input type="text" name="Ghichu" value ="{{ $chitieucanhan->Ghichu }}"class="form-control" >
                              {{-- @error('Ngay')
                <div style="color: red">{{$message}}</div>
        @enderror --}}
                        </div>
                       <button type="submit" class="btn btn-success mt-2">Lưu</button>
                       <button type="submit" class="btn btn-success mt-2">Trở về</button>
        </form>
    </div>

    </div>

    </div>

