<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <title>سامانه مدیریت</title>
</head>
<body>
<header>
    <div class="d-flex w-100 header">
        <img class="mr-4 mt-1 align-items-center" width="60" height="60" src="{{url('img/logoHeader.png')}}">
        <p>سامانه مدیریت خودرو</p>
    </div>
</header>
<div class="d-flex align-items-center ">
    <div style="box-shadow: 2px 1px 5px 2px #98949459, -2px 1px 4px 1px #67676717;;height: 500px"
         class="container boxStyle">
        <div class="row">
            <div class="col-md-8 mx-auto p-3 boxStyle ">


                <div class="tile" id="tile-1">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <div class="slider"></div>
                        <li class="nav-item ">
                            <a class="nav-link " data-toggle="tab" href="#register" role="tab"
                               aria-controls="home" aria-selected="true"><i class="fa fa-user-plus"
                                                                            aria-hidden="true"></i>
                                ثبت نام</a>
                        </li>
                        <li class="nav-item activeBackGround">
                            <a class="nav-link show active" data-toggle="tab" href="#signIn" role="tab"
                               aria-controls="profile" aria-selected="false"><i class="fa fa-sign-in"
                                                                                aria-hidden="true"></i>
                                ورود</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade    " id="register" role="tabpanel" aria-labelledby="home-tab">
                            <form id="registerUser" class="mt-5" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" autocomplete="name" autofocus>
                                        <label for="name">نام</label>
                                        <div class="line"></div>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-6 form-group">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="email">
                                        <label for="email">ایمیل</label>
                                        <div class="line"></div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">
                                        <label style="width: 50px;" for="password">رمز عبور</label>
                                        <div class="line"></div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <input id="age" type="number"
                                               class="form-control @error('age') is-invalid @enderror"
                                               name="age" required autocomplete="age">
                                        <label for="age">سن</label>
                                        <div class="line"></div>
                                        @error('age')
                                        <span class="invalid-feedback " role="alert">
                                               <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                    </div>

                                </div>


                                <p class="pull-right">جنسیت</p>
                                <div class="d-inline-flex w-100">
                                    <div class="custom-control custom-radio">
                                        <input value="male" type="radio" class="custom-control-input" id="male"
                                               name="gender">
                                        <label class="custom-control-label" for="male"> مرد</label>
                                    </div>

                                    <div class="custom-control custom-radio mr-2">
                                        <input value="female" type="radio" class="custom-control-input" id="female"
                                               name="gender">
                                        <label class="custom-control-label" for="female"> زن</label>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-custom">
                                            ثبت نام
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="tab-pane active show fade" id="signIn" role="tabpanel"
                             aria-labelledby="profile-tab">
                            <form class="mt-5" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-row">


                                    <div class="col-md-6 form-group">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="email">ایمیل</label>
                                        <div class="line"></div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                                </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-6  form-group">
                                        <input   type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                        <label style="width: 53px;" for="password">رمز عبور</label>
                                        <div class="line"></div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check pull-right">
                                            <input class="custom-control-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label mr-4" for="remember">

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="custom-control   custom-checkbox ml-5  mt-3  ">
                                        <input type="checkbox" class="custom-control-input mb-0   " id="customCheck"
                                               name="remember">
                                        <label class="custom-control-label d-inline" for="customCheck">مرا به خاطر
                                            بسپار</label>

                                    </div>
                                    <button type="submit" class="btn btn-custom-login mr-5 mt-1">
                                        ورود
                                    </button>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4 d-flex mt-5 pr-0">


                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">

                                            </a>
                                            <button type="button" class="btn btn-link" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                رمزعبور خود را فراموش کرده اید؟
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


            </div>
            <div class="col-md-4 mx-auto detail">

                <img class="detailImg" src="{{url('img/LOGO.png')}}">
                <img style="width: 500px;position: absolute;left: 9px;opacity: .2;" src="{{url('img/social1.svg')}}">
                <div class="detailList">
                    <h1 class="mb-0">سامانه لورم</h1>
                    <ul class="list-group">

                        <li class="list-group-item">لورم اپسیوم متن ساختگی لورم لورم</li>
                        <li class="list-group-item">لورم اپسیوم متن ساختگی لورم لورم</li>
                        <li class="list-group-item">لورم اپسیوم متن ساختگی لورم لورم</li>
                        <li class="list-group-item">لورم اپسیوم متن ساختگی لورم لورم</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">لطفا ایمیلی که با آن ثبت نام کرده اید وارد کنید</p>
                <form id="submitEmailReset" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="col-md-8 form-group justify-content-center mx-auto">
                        <input id="resetEmail" type="email"
                               class="form-control @error('emailreset') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="resetEmail">ایمیل</label>
                        <div class="line"></div>

                    </div>

                    <div id="sendResetEmail"></div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 mx-auto ">
                            <button type="submit" class="btn btn-primary btn-block">
                                ارسال
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="{{url('js/sweetalert2.all.js')}}"></script>
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>
<?php
$urlResetPassword = url('password/email');
$registerUser = url('register');
?>
<script>
    $(document).ready(function () {
        $('#submitEmailReset').submit(function (e) {
            e.preventDefault();
            let EmailValue = $('#resetEmail').val();
            console.log(EmailValue);
            $.ajaxSetup(
                {
                    'headers': {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                url: '{{$urlResetPassword}}',
                type: 'POST',
                data: 'email=' + EmailValue,
                success: function (data) {

                    console.log(data.responseJSON);


                },

                error: function (data) {

                    var res = data.responseJSON;
                    let messageError = res.errors.email;
                    let CreateDiv = document.createElement('div');
                    CreateDiv.classList = "resetPassword";
                    let TextError = document.createTextNode(messageError);

                    CreateDiv.append(TextError);
                    let getElementReset = document.getElementById('sendResetEmail');

                    getElementReset.insertBefore(CreateDiv, getElementReset.childNodes[3]);


                }
            });
        })
    });


</script>





</body>
</html>
