<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Sửa thông tin xe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>
    
<div class="container">
<p>Tiến Đạt</p>
    <h1 class="my-4">Sửa thông tin xe</h1>
    <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Hãng xe -->
        <div class="form-group">
            <label for="description">Hãng xe:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $car->description }}">
        </div>
        <!-- Model -->
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
        </div>
        <!-- Ngày sản xuất -->
        <div class="form-group">
            <label for="produced_on">Ngày sản xuất:</label>
            <input type="date" class="form-control" id="produced_on" name="produced_on" value="{{ $car->produced_on }}">
        </div>
        <!-- Ảnh -->
        <div class="form-group">
            <label for="image">Ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image"value="{{ asset('image/' . $car->image) }}">
        </div>
        <div class="form-group">
            <label for="mf_id">Nhà Sản Xuất:</label>
            <select class="form-control" id="mf_id" name="mf_id">
                @foreach($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}" {{ $car->mf_id == $manufacturer->id ? 'selected' : '' }}>{{ $manufacturer->mf_name }}</option>
                @endforeach
            </select>
        </div>
        <!-- Lưu và Quay lại buttons -->
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
</body>
</html>
