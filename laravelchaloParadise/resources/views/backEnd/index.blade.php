@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
<style type="text/css">
    .quick-actions_homepage {
    width: 100%;
    text-align: center;
    position: relative;
    float: left;
    margin-left: 37px;
    margin-top: 10px;
}
.card-text{

    margin-left: 6px;
    font-size: initial;
    font-family: monospace;
    color: black;
    

}
.text{
    font-family: sans-serif;
    font-size: large;
    text-align: center;
    font-style: unset;
}
</style>
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="row">
            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    <li class="bg_lb">
                        <div class="card" style="width: 16rem;">
                            <div class="card-body">
                                <div class="row">
                                   <img width="70px" height="70px" src="{{asset('img/icons/256/order.png')}}">
                                     <p class="text"> <b>45</b> nouveau Commande</p>                         
                                </div>
                                <p class="card-text"><img src="{{asset('img/icons/24/repeat.png')}}"> mise à jour chaque  5 min. </p>
                                <a href="#" class="card-link">voir detail</a>
                            </div>
                        </div>
                    </li>
                        <li class="bg_lg ">
                            <div class="card" style="width: 16rem;">
                                <div class="card-body">
                                    <div class="row">
                                       <img width="70px" height="70px" src="{{asset('img/icons/256/vision.png')}}">
                                         <p class="text"> <b>30</b> Pages vues</p>                         
                                    </div>
                                    <p class="card-text"><img src="{{asset('img/icons/24/clock.png')}}"> dans la dernière 24h. </p>
                                    <a href="#" class="card-link">voir detail</a>
                                </div>
                            </div>
                        </li>
                        <li class="bg_ly"><div class="card" style="width: 16rem;">
                            <div class="card" style="width: 16rem;">
                                <div class="card-body">
                                    <div class="row">
                                       <img width="70px" height="70px" src="{{asset('img/icons/256/email.png')}}">
                                         <p class="text"> <b>45</b> nouveau message</p>                         
                                    </div>
                                    <p class="card-text"><img src="{{asset('img/icons/24/email.png')}}">au cours de 7 derniers jours </p>
                                    <a href="#" class="card-link">voir detail</a>
                                </div>
                            </div>
                        </li>
                        <li class="bg_lo"> <div class="card" style="width: 16rem;">
                            <div class="card" style="width: 16rem;">
                                <div class="card-body">
                                    <div class="row">
                                       <img width="70px" height="70px" src="{{asset('img/icons/256/money.png')}}">
                                         <p class="text">  le rendement: <b>1000.00 DH</b> </p>                         
                                    </div>
                                    <p class="card-text"><img src="{{asset('img/icons/24/date.png')}}"> au cours de le mois courante. </p>
                                    <a href="#" class="card-link">voir detail</a>
                                </div>
                            </div>
                     </li>
                 </ul>
            </div>

            <div class="quick-actions_homepage">
                <ul class="quick-actions">
                    <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
                    <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
                    <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
                    <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
                    <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
                    <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
                    <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
                    <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
                    <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
                    <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

                </ul>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.dashboard.js')}}"></script>
    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('js/matrix.interface.js')}}"></script>
    <script src="{{asset('js/matrix.chat.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/jquery.wizard.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.form_validation.js')}}"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection