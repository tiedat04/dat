<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Xác nhận xóa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>

<body>
<div class="container">
    <h1 class="my-4">Xác nhận xóa</h1>
    <p>Bạn có chắc chắn muốn xóa xe "{{ $car->description }}" không?</p>
    @if($car->image)
        <div class="form-group">
            <label for="image">Ảnh hiện tại:</label><br>
            <img src="{{ asset('image/' . $car->image) }}" alt="Ảnh xe" class="img-thumbnail" style="width: 100px;">
        </div>
    @endif
    <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="image" value="{{ $car->image }}">
        <button type="submit" class="btn btn-danger">Xóa</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
</body>
</html>
