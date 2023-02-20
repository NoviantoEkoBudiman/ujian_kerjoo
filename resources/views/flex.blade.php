<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    <body>
        <div class="d-sm-flex flex-md-row flex-column">
            <div class="p-2">
                <button class="btn btn-md btn-primary">Tambah</button>
                <button class="btn btn-md btn-warning">Import</button>
                <button class="btn btn-md btn-danger">Export</button>
            </div>
            
            <div class="p-2">
                <input type="text" placeholder="Search" class="form-control">
            </div>
            
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Tahun
                    </button>
                    <ul class="dropdown-menu">
                      <li>2020</li>
                      <li>2021</li>
                      <li>2022</li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>