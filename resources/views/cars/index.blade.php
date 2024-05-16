<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Danh sách xe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row my-4 align-items-center">
        <div class="col-md-8">
            <h1>Danh sách xe</h1>
            <p>Tiến Đạt</p>
        </div>
        <div class="col-md-4">
            <!-- Search Form -->
            <form method="GET" action="{{ route('cars.index') }}">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Tìm kiếm theo nhà sản xuất" value="{{ $search ?? '' }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </div>
            </form>
            <div class="mt-2 text-right">
                <a name="btnQuayLai" id="" class="btn btn-secondary" href="{{ route('cars.index') }}" role="button">Quay lại trang chủ</a>
            </div>
        </div>
    </div>

    <div class="text-left mb-3">
        <a name="btnThemMoi" id="" class="btn btn-success" href="{{ route('cars.create') }}" role="button">Thêm mới</a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Notification if no cars found -->
    @if($cars->isEmpty())
        <div class="alert alert-warning">
            Không có xe nào được tìm thấy.
        </div>
    @else
        <div class="row">
            <div class="col">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Hãng xe</th>
                            <th class="text-center">Model</th>
                            <th class="text-center">Ngày sản xuất</th>
                            <th class="text-center">Ảnh</th>
                            <th class="text-center">Nhà Sản Xuất</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = ($cars->currentPage() - 1) * $cars->perPage() + 1;
                        @endphp
                        @foreach ($cars as $car)
                            <tr>
                                <td class="text-center">{{ $stt++ }}</td>
                                <td class="text-center">{{ $car->description }}</td>
                                <td class="text-center">{{ $car->model }}</td>
                                <td class="text-center">{{ $car->produced_on }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('image/' . $car->image) }}" alt="Ảnh xe" class="img-thumbnail" style="max-width: 100px; height: auto;">
                                </td>
                                <td class="text-center">{{ $car->mf ? $car->mf->mf_name : '' }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Chức năng">
                                        <a name="btnChitiet" id="" class="btn btn-primary" href="{{ route('cars.show', ['car' => $car->id]) }}" role="button">Chi tiết</a>
                                        <a name="btnSua" id="" class="btn btn-info" href="{{ route('cars.edit', ['car' => $car->id]) }}" role="button">Sửa</a>
                                        <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa xe này không?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $cars->previousPageUrl() ? '' : 'disabled' }}">
                            <a class="page-link btn-primary" href="{{ $cars->previousPageUrl() }}">Trang trước</a>
                        </li>
                        <li class="page-item {{ $cars->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link btn-primary" href="{{ $cars->url(1) }}">Đầu</a>
                        </li>
                        @for ($i = 1; $i <= $cars->lastPage(); $i++)
                            <li class="page-item {{ $cars->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $cars->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="page-item {{ $cars->currentPage() == $cars->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link btn-primary" href="{{ $cars->url($cars->lastPage()) }}">Cuối</a>
                        </li>
                        <li class="page-item {{ $cars->nextPageUrl() ? '' : 'disabled' }}">
                            <a class="page-link btn-primary" href="{{ $cars->nextPageUrl() }}">Trang tiếp theo</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
