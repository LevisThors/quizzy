<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Quizzy | Registration</title>
</head>
<body>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover;">
        <div class="container-fluid">
          <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-12 col-md-4 col-lg-3   h-50 ">
              <div class="card shadow">
                <div class="card-body mx-auto">
                  <h4 class="card-title mt-3 text-center">Create Account</h4>
                  <p class="text-center">Get started with your Quizzy account</p>
                  <form method="POST" action="/sign-up">
                    @csrf
                    <div class="form-group mb-3 input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text h-100"><i class="fa fa-user" aria-hidden="true"></i> </span>
                      </div>
                      <input name="name" class="form-control" placeholder="Full name" type="text">
                    </div>
                    <div class="form-group mb-3 input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text h-100"><i class="fa fa-user" aria-hidden="true"></i> </span>
                      </div>
                      <input name="username" class="form-control" placeholder="Username" type="text">
                    </div>
                    <div class="form-group mb-3 input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text h-100"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="E-Mail" type="email">
                      </div>
                    <div class="form-group mb-3 input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text h-100"> <i class="fa fa-lock"></i> </span>
                      </div>
                      <input name="password" class="form-control" placeholder="Create password" type="password">
                    </div>
                    <div class="form-group mb-3 input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text h-100"> <i class="fa fa-lock"></i> </span>
                      </div>
                      <input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password">
                    </div>
                    <div class="form-group mb-3">
                      <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                    </div>
                    <p class="text-center">Have an account?
                      <a href="/sign-in">Log In</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>