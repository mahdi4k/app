{{--mobile sidebar--}}
<div class="navbar-offcanvas navbar-offcanvas-right navbar-offcanvas-touch " id="js-bootstrap-offcanvas">
    <ul class="list-group-flush pr-2 mt-3 bg-inherit">
        <li class="list-group-item "><a href="{{url('panel')}}"><i
                    style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px" class="fa fa-home  "></i><span
                    class="collapseText">خانه</span></a></li>
        <li class="list-group-item "><a href=""><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                   class="fa fa-car  " aria-hidden="true"></i><span
                    class="collapseText">ماشین های
                شما</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                    class="fa fa-tachometer  " aria-hidden="true"></i><span
                    class="collapseText">مدیریت
                سوخت ماشین</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                    class="fa fa-wrench  " aria-hidden="true"></i><span
                    class="collapseText">تعمیرات
                ماشین</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                    class="fa fa-money  " aria-hidden="true"></i><span
                    class="collapseText">هزینه های
                دیگر</span></a></li>
    </ul>
</div>
{{--end mobile sidebar--}}

<div id="sidebar" class="col-3 panelSide h-auto">
    <div class="user-profile">


        <div class="d-flex flex-column align-items-center position-relative">
            <div class="profile-sidebar">
                <img class="p-2" width="100" alt="user" src="{{url('img/profile.svg')}}">
            </div>
            {{-- <a class="logoutBtn" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>--}}
            <p>{{Auth::user()->name}}</p>
        </div>
    </div>
    <ul class="list-group-flush pr-2 mt-3">
        <li class="list-group-item "><a href="{{url('panel')}}"><i
                    style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px" class="fa fa-home  "></i><span
                    class="collapseText">خانه</span></a></li>
        <li class="list-group-item "><a href=""><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                   class="fa fa-car  " aria-hidden="true"></i><span
                    class="collapseText">ماشین های
                شما</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                    class="fa fa-tachometer  " aria-hidden="true"></i><span
                    class="collapseText">مدیریت
                سوخت ماشین</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                    class="fa fa-wrench  " aria-hidden="true"></i><span
                    class="collapseText">تعمیرات
                ماشین</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px"
                                                    class="fa fa-money  " aria-hidden="true"></i><span
                    class="collapseText">هزینه های
                دیگر</span></a></li>
    </ul>
</div>
