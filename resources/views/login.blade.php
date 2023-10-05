{{-- 
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DLH Kab Serang</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset("/template/images/favicon.png") }}>

    <link href={{ asset("/template/css/style.css") }} rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Login</h4></a>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="mt-5 mb-5 login-input" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Belum Punya Akun? <a href="/register" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <
    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src={{ asset("/template/plugins/common/common.min.js") }}></script>
    <script src={{ asset("/template/js/custom.min.js") }}></script>
    <script src={{ asset("/template/js/settings.js") }}></script>
    <script src={{ asset("/template/js/gleek.js") }}></script>
    <script src={{ asset("/template/js/styleSwitcher.js") }}></script>
</body>
</html>
 --}}

 <!DOCTYPE html>
 <html class="h-100" lang="en">
 
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width,initial-scale=1">
     <title>DLH Kab Serang</title>
     <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href={{ asset("/img/logo.png") }}>
     <link href={{ asset("/template/css/style.css") }} rel="stylesheet">
 </head>
 
 <body class="h-100">
 
     <!-- Preloader start -->
     <div id="preloader">
         <div class="loader">
             <svg class="circular" viewBox="25 25 50 50">
                 <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
             </svg>
         </div>
     </div>
     <!-- Preloader end -->
 
     <div class="login-form-bg h-100">
         <div class="container h-100">
             <div class="row justify-content-center h-100 align-items-center">
                 <!-- Login form column -->
                 <div class="col-md-6 col-lg-4">
                     <div class="form-input-content">
                         <div class="card login-form mb-0">
                             <div class="card-body pt-5">
                                 <a class="text-center" href="index.html"> <h4>Login</h4></a>
                                 @if ($errors->any())
                                     <div class="alert alert-danger">
                                         <ul>
                                             @foreach ($errors->all() as $item)
                                                 <li>{{ $item }}</li>
                                             @endforeach
                                         </ul>
                                     </div>
                                 @endif
                                 <form class="mt-5 mb-5 login-input" method="POST">
                                     @csrf
                                     <div class="form-group">
                                         <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                         <input type="password" name="password" class="form-control" placeholder="Password">
                                     </div>
                                     <button class="btn login-form__btn submit w-100">Sign In</button>
                                 </form>
                                 <p class="mt-5 login-form__footer">Belum Punya Akun? <a href="/register" class="text-primary">Registrasi</a> Sekarang</p>
                             </div>
                         </div>
                     </div>
                 </div>
 
                 <!-- Logo column -->
                 <div class="col-md-6 col-lg-4 position-relative">
                     <div class="text-center mb-4">
                         <img src="{{ asset('/img/logo.png') }}" alt="Logo" height="200" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                         
                     </div>
                 </div>
 
             </div>
         </div>
     </div>
 
     <!-- Other scripts and closing tags... -->
 
 </body>
 <script src={{ asset("/template/plugins/common/common.min.js") }}></script>
    <script src={{ asset("/template/js/custom.min.js") }}></script>
    <script src={{ asset("/template/js/settings.js") }}></script>
    <script src={{ asset("/template/js/gleek.js") }}></script>
    <script src={{ asset("/template/js/styleSwitcher.js") }}></script>
 </html>
 

