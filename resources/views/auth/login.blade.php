<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        Login Form | Preclinic - Medical & Hospital
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Dreams Technologies" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/plugins/tabler-icons/tabler-icons.min.css" />
    <link rel="stylesheet" href="assets/plugins/simplebar/simplebar.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" id="app-style" />
</head>

<body>
    <a href="https://preclinic.dreamstechnologies.com/cdn-cgi/content?id=HesmHtPQRNb87yAvRHOnPhmneFi0AmI2QU0VsIDaCf8-1780293599.6010158-1.0.1.1-PqC4ziCIi8BR5KmZ.5ODi2SunMm5cwkcR2RmkPW8cvI"
        aria-hidden="true" rel="nofollow noopener" style="display: none !important; visibility: hidden !important"></a>

    <div class="main-wrapper auth-bg auth-bg-custom position-relative overflow-hidden">
        <div class="container-fuild position-relative z-1">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap py-3">
                    <div class="col-lg-4 mx-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                                <div class="mx-auto mb-4 text-center">
                                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo" />
                                </div>
                                <div class="card border-1 p-lg-3 shadow-md rounded-3 mb-4">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <h5 class="mb-1 fs-20 fw-bold">Sign In</h5>
                                            <p class="mb-0">
                                                Please enter below details to access the dashboard
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-text border-end-0 bg-white">
                                                    <i class="ti ti-mail fs-14 text-dark"></i>
                                                </span>
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    class="form-control border-start-0 ps-0"
                                                    placeholder="Enter Email Address" required />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="position-relative">
                                                <div class="pass-group input-group position-relative border rounded">
                                                    <span class="input-group-text bg-white border-0">
                                                        <i class="ti ti-lock text-dark fs-14"></i>
                                                    </span>
                                                    <input type="password" name="password"
                                                        class="pass-input form-control ps-0 border-0"
                                                        placeholder="****************" required />
                                                    <span class="input-group-text bg-white border-0">
                                                        <i class="ti toggle-password ti-eye-off text-dark fs-14"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="form-check form-check-md mb-0">
                                                    <input class="form-check-input" id="remember_me" type="checkbox"
                                                        name="remember" />1
                                                    <label for="remember_me"
                                                        class="form-check-label mt-0 text-dark">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <a href="forgot-password-basic.html" class="text-danger">Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <button type="submit" class="btn bg-primary text-white w-100">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
      src="assets/js/jquery-3.7.1.min.js"
      type="4e76455e238801629b7dd866-text/javascript"
    ></script>

    <script
      src="assets/js/bootstrap.bundle.min.js"
      type="4e76455e238801629b7dd866-text/javascript"
    ></script>

    <script
      src="assets/js/script.js"
      type="4e76455e238801629b7dd866-text/javascript"
    ></script>

    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="4e76455e238801629b7dd866-|49" defer></script>
</body>

</html>
