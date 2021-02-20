@extends('layouts.admin.master')



@section('content')
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Ads Image</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Accordion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
         <div class="container">
             <div class="row">
                 <div class="col-4">
                     <a href="{{'/admin/website/bannerAds'}}" class="text-decoration">
                         <div class="card card-hover">
                             <div class="card-body">
                                 <h4 class="text-center">Banner Ads Setting</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-4">
                     <a href="#" class="text-decoration">
                         <div class="card card-hover">
                             <div class="card-body">
                                 <h4 class="text-center">Shopping Ads Setting</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-4">
                     <a href="#" class="text-decoration">
                         <div class="card card-hover">
                             <div class="card-body">
                                 <h4 class="text-center">Categories Ads Setting</h4>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
        </div>
        <!-- Page-body end -->
    </div>
    </div>
    <div id="styleSelector">

    </div>
@endsection
