
<!doctype html>
<html lang="en">

<head>

   <meta charset="utf-8" />
   <title>Login | Unila</title>
   <meta name='description' content='Unila' />
   <meta name='author' content='unila' />
   <meta name='keywords' content='Unila'>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="apple-touch-icon" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
   <link rel="shortcut icon" type="image/x-icon" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
   <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Custom Css -->
   <link rel="stylesheet" href="https://egov.phicos.co.id/lampung/unila/assets/css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
   <div class="account-pages my-5 pt-sm-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
               <div class="card overflow-hidden">
                  <div class="bg-primary">
                     <div class="row">
                        <div class="col-sm-7">
                           <div class="text-white p-4">
                              <h4 class="text-white">Welcome Back !</h4>
                              <p>Sign in to continue.</p>
                           </div>
                        </div>
                        <div class="col-sm-5 align-self-end d-sm-block d-none">
                           <img src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/images/profile-img.png" alt="" class="img-fluid">
                        </div>
                     </div>
                  </div>
                  <div class="card-body pt-0">
                     <div>
                        <a href="index.html">
                           <div class="avatar-md profile-user-wid mb-4">
                              <span class="avatar-title rounded-circle bg-white shadow">
                                 <img src="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png" alt="" height="45">
                              </span>
                           </div>
                        </a>
                     </div>
                     <div class="p-2">
                        <form class="form-horizontal" method="post" action="{{ route('postlogin') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" required autofocus id="username" name="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" required id="userpassword" name="password" placeholder="Enter password">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary text-white" id="show-password"><i class="bi bi-eye"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </form>
                     </div>

                  </div>
               </div>
               <div class="mt-5 text-center">

                  <div>
                     <p>© <script>
                           document.write(new Date().getFullYear())
                        </script> Universitas Lampung (UNILA)</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/jquery/jquery.min.js"></script>
   <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/metismenu/metisMenu.min.js"></script>
   <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/simplebar/simplebar.min.js"></script>
   <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/node-waves/waves.min.js"></script>

   <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/js/app.js"></script>
   <!-- Di bagian HTML, pastikan Anda memiliki elemen dengan id 'show-password' dan 'userpassword': -->
<script>
  let showPassword = false;
  const showPasswordButton = document.getElementById('show-password');
  const userPasswordInput = document.getElementById('userpassword');

  showPasswordButton.addEventListener('click', function() {
    if (!showPassword) {
      userPasswordInput.type = 'text';
      showPassword = true;
      showPasswordButton.firstElementChild.classList.replace('bi-eye', 'bi-eye-slash');
    } else {
      userPasswordInput.type = 'password';
      showPassword = false;
      showPasswordButton.firstElementChild.classList.replace('bi-eye-slash', 'bi-eye');

    }
  });
</script>

</body>

</html>
