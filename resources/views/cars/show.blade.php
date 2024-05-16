<!doctype html>
<html lang="en">
<head>
    <title>Thông tin xe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <style>
        .car-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .car-image:hover {
            transform: scale(1.1);
            z-index: 999;
        }
    </style>
</head>

<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <img src="/image/{{ $car->image }}" class="car-image" alt="Ảnh xe">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Thông tin xe</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="make">Description:</label>
                            <input type="text" class="form-control" id="make" name="description" value="{{ $car->description }}">
                        </div>
                        <div class="form-group">
                            <label for="model">Model:</label>
                            <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
                        </div>
                        <div class="form-group">
                            <label for="produced_on">Produced On:</label>
                            <input type="date" class="form-control" id="produced_on" name="produced_on" value="{{ $car->produced_on }}">
                        </div>
                        <div class="form-group">
                            <label for="produced_on">Nhà Sản Xuất:</label>
                            <input type="text" class="form-control" id="mf" name="mf" value="{{ $car->mf->mf_name}}">
                        </div>
                
                        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Quay lại</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
