<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Calculator</title>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="calculator" method="post">
        @csrf
          <div class="card mt-5">
            <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="my-input">Angka ke-1</label>
                  <input class="form-control" type="number" name="ke1" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="my-input">Angka ke-2</label>
                  <input class="form-control" type="number" name="ke2" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-2">
                  <select name="operasi" class="form-control">
                    <option value="tambah"> + </option>
                    <option value="kurang"> - </option>
                    <option value="kali"> x </option>
                    <option value="bagi"> : </option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-success float-right">Hasil</button>
            </div>
          </div>
        </form>
        <div class="row justify-content-center my-2">
          <div class="col-md-6">
            @if(session('info'))
              <div class="alert alert-info">
                {{ session('info')}}
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>