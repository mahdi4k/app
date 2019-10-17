<div id="sidebar" class="col-3 panelSide h-100">
    <div class="mr-4 mt-2 mb-2 d-flex justify-content-around align-items-center">
        <img style="opacity: .5;" alt="car management" src="{{url('img/download.jpg')}}">
        <p>مدیریت ماشین</p>

     </div>
    <span   id="sidebarCollapse" class="  sidebarCollapse">
            <i class="cplapceIcon fa  fa-align-justify"></i>
     </span>
    <div class="d-flex flex-column align-items-center position-relative">

        <img width="50" alt="user" src="{{url('img/profile.svg')}}">
        <a class="logoutBtn" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        <p>{{Auth::user()->name}}</p>
    </div>

    <ul class="list-group-flush pr-2 mt-3">
        <li class="list-group-item "><a href="{{url('panel')}}"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px" class="fa fa-home  "></i><span class="collapseText">خانه</span></a></li>
        <li class="list-group-item "><a href=""><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px" class="fa fa-car  " aria-hidden="true"></i><span class="collapseText">ماشین های
                شما</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px" class="fa fa-tachometer  " aria-hidden="true"></i><span class="collapseText">مدیریت
                سوخت ماشین</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px" class="fa fa-wrench  " aria-hidden="true"></i><span class="collapseText">تعمیرات
                ماشین</span></a></li>
        <li class="list-group-item "><a href="#"><i style="text-shadow: rgba(113, 169, 161, 0.48) 1px 2px 1px" class="fa fa-money  " aria-hidden="true"></i><span class="collapseText">هزینه های
                دیگر</span></a></li>
    </ul>
</div>
