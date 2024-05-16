<!doctype html>
<html lang="en">
<head>
  <title>random</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>random</h1>
    <form id="solverForm" action="{{ route('random') }}" method="get">
      @csrf
      <div class="form-group row">
        <label for="inputName" class="col-sm-1-12 col-form-label">Số từ</label>
        <div class="col-sm-1-12">
          <input type="number" class="form-control" name="from" id="from" placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputName" class="col-sm-1-12 col-form-label">Đến</label>
        <div class="col-sm-1-12">
          <input type="number" class="form-control" name="to" id="to" placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <button type="button" class="btn btn-primary" onclick="solve()">Random</button>
        </div>
      </div>
    </form>
    <h3 id="result">
      @if (isset($ketqua))
      {{  $ketqua}}
      @endif
    </h3>
  </div>

  <!-- JavaScript -->
  <script>
    function solve() {
      var from = parseInt(document.getElementById("from").value);
      var to = parseInt(document.getElementById("to").value);

      if (isNaN(from) || isNaN(to)) {
        alert("Vui lòng nhập số hợp lệ cho cả hai số.");
        return;
      }

      if (from >= to) {
        alert("Số 'từ' phải nhỏ hơn số 'đến'.");
        return;
      }

      var result = Math.floor(Math.random() * (to - from + 1)) + from;

      document.getElementById("result").innerText = "Số được chọn :" + result;
    }
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
