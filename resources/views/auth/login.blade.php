
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Laxmi Tirupati Transport</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link rel="stylesheet" href="{{url('web')}}/assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="{{url('web')}}/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{url('web')}}/assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{url('web')}}/assets/images/logo.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{url('web')}}/assets/images/logo.png" />
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                @if ($errors->any())
                <div class="text-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-primary">
                    {{ session()->get('success') }}
                </div>
            @endif

                <form class="pt-3" method="POST">
                  @csrf
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      id="exampleInputEmail1"
                      placeholder="Username"
                      name="email"/>
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      class="form-control form-control-lg"
                      id="exampleInputPassword1"
                      placeholder="Password"
                      name="password"/>
                  </div>
                  <div
                    class="my-2 d-flex justify-content-between align-items-center"
                  >
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" /> Keep
                        me signed in
                      </label>
                    </div>
                    {{-- <a href="forgot-password.html" class="auth-link text-black"
                      >Forgot password?</a
                    > --}}
                  </div>
                  <div class="mt-3">
                    <button onclick="this.innerHTML = 'Trying to Login...'"
                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit"> SIGN IN </button>
                  </div>

                  <div class="text-center mt-4 font-weight-light">
                    Don't have an account?
                    <a href="register.html" class="text-primary">Create</a>
                  </div>
                  
                </form>

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">So/n</th>
                      <th scope="col">username</th>
                      <th scope="col">password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td id="username-1">ly0596232@gmail.com</td>
                      <td id="password-1">admin<button
                        class="btn btn-link p-0"
                        onclick="copyToClipboard('username-1', 'password-1')"
                        title="Copy Username and Password"
                      >
                        <i class="mdi mdi-content-copy"></i>
                      </button> </td>
                    </tr>
                  
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('web')}}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{url('web')}}/assets/js/off-canvas.js"></script>
    <script src="{{url('web')}}/assets/js/hoverable-collapse.js"></script>
    <script src="{{url('web')}}/assets/js/misc.js"></script>
    <!-- endinject -->

    <script>
      function copyToClipboard(usernameId, passwordId) {
        // Get the username and password values
        const username = document.getElementById(usernameId).innerText;
        const password = document.getElementById(passwordId).innerText;
    
        // Combine the username and password
        const combinedText = `Username: ${username}, Password: ${password}`;
    
        // Create a temporary input field
        const tempInput = document.createElement('input');
        tempInput.value = combinedText;
        document.body.appendChild(tempInput);
    
        // Select the text and copy it
        tempInput.select();
        document.execCommand('copy');
    
        // Remove the temporary input field
        document.body.removeChild(tempInput);
    
        // Optionally show a success message
        alert('Copied to clipboard:\n' + combinedText);
      }
    </script>
    
    
  </body>
</html>
