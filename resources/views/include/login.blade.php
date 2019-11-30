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
            <input type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="current-password">
            <label style="white-space: pre" for="password">رمز عبور</label>
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
