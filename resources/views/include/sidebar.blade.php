<div class="col-md-3 panelSide h-100">
    <div class="mr-4">
        <img style="opacity: .5;" alt="car management" src="{{url('img/download.jpg')}}">
        <p>مدیریت ماشین</p>
        <a class="logoutBtn" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img width="50" alt="user" src="{{url('img/profile.svg')}}">
        <p>{{Auth::user()->name}}</p>
    </div>

    <ul class="list-group-flush pr-2 mt-3">
        <li class="list-group-item "><i class="fa fa-home  "></i><a href="{{url('panel')}}">خانه</a></li>
        <li class="list-group-item "><i class="fa fa-car  " aria-hidden="true"></i><a href="">ماشین های
                شما</a></li>
        <li class="list-group-item "><i class="fa fa-tachometer  " aria-hidden="true"></i><a href="#">مدیریت
                سوخت ماشین</a></li>
        <li class="list-group-item "><i class="fa fa-wrench  " aria-hidden="true"></i><a href="#">تعمیرات
                ماشین</a></li>
        <li class="list-group-item "><i class="fa fa-money  " aria-hidden="true"></i><a href="#">هزینه های
                دیگر</a></li>
    </ul>
</div>
