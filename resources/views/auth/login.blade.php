<section class="vh-100" style="background-color: rgba(238, 238, 238, 0.445);">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
                  rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
                  </head>
                  <form class="mx-1 mx-md-4" action="/login" method='post'>
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" name='email' id="email" class="form-control" />
                        <label class="form-label"  for="email">Masukan NIK</label>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg ms-3">Login</button>
                  </form>
                  <small class="d-block text-center mt-3">Blom Punya Akun? <a href="/register">Register</a></small>
                </div>
                </div>
              </div>
            </div>
