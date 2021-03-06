<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Calculator Rumus</title>
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hitung 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tabungBackdrop">
                    <option value="tabung">Volume Tabung</option>
                  </button>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item">
                  <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#bolaBackdrop" value="bola">
                    <option value="bola">Volume Bola</option>
                  </button>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item">
                  <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#kerucutBackdrop" value="kerucut">
                    <option value="kerucut">Volume Kerucut</option>
                  </button>
                </a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </nav>
    <div class="row">
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body">
            <div class="form-row">
              
            <div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            @if(session('jtabung'))
              <div class="alert alert-info">
                {{ session('jtabung')}}
              </div>
            @elseif(session('jbola'))
              <div class="alert alert-info">
                {{ session('jbola') }}
              </div>
            @elseif(session('jkerucut'))  
              <div class="alert alert-info">
                {{ session('jkerucut') }}
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tabung -->
  <div class="form-group col-md-6 justify-content-start">
    <div class="modal fade" id="tabungBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Hitung Volume Tabung</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="tabung" method="POST">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="my-input">Masukkan luas alas</label>
                      <input class="form-control" type="number" name="alas" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="my-input">Masukkan tinggi Tabung</label>
                      <input class="form-control" type="number" name="tinggi" >
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success mt-3 float-right" value="submit" name='submit'>Hasil</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Bola -->
  <div class="form-group col-md-6 justify-content-end">
    <div class="modal fade" id="bolaBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Hitung Volume Bola</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="bola" method="POST">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="my-input">Masukkan jari-jari</label>
                      <input class="form-control" type="number" name="jari" >
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success mt-3 float-right" value="submit" name='submit'>Hasil</button>
            </form>  
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal kerucut -->
  <div class="form-group col-md-6 justify-content-center">
    <div class="modal fade" id="kerucutBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Hitung Ruang Kerucut</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="kerucut" method="POST">
              @csrf
              <div class="card">
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="my-input">Masukkan jari-jari alas</label>
                      <input class="form-control" type="number" name="jari" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="my-input">Masukkan tinggi</label>
                      <input class="form-control" type="number" name="tinggi" >
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-success mt-3 float-right" value="submit" name='submit'>Hasil</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>