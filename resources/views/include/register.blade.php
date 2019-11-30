<form id="registerUser" class="mt-5" method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-row">
        <div class="col-md-6 form-group">
            <input id="register_name" type="text"
                   class="form-control @error('register_name') is-invalid @enderror" name="register_name"
                   value="{{ old('register_name') }}" autocomplete="register_name" autofocus>
            <label for="register_name">نام</label>
            <div class="line"></div>
            @error('register_name')
                <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="col-md-6 form-group">
            <input id="register_email" type="email"
                   class="form-control @error('register_email') is-invalid @enderror"
                   name="register_email"
                   value="{{ old('register_email') }}" required autocomplete="register_email">
            <label for="register_email">ایمیل</label>
            <div class="line"></div>
            @error('register_email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6 form-group">
            <input id="register_password" type="password"
                   class="form-control @error('register_password') is-invalid @enderror"
                   name="register_password" required autocomplete="new-password">
            <label style="width: 50px;" for="register_password">رمز عبور</label>
            <div class="line"></div>
            @error('register_password')
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
