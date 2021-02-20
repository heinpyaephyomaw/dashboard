@extends('layouts.admin.master')



@section('content')
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Banner Image Setting</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index-1.htm"> <i class="feather icon-home icon-has"></i></a>
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
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5 col-xl-3">
                        <div>
                            <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="w-50 rounded upload-image" alt=""> <br>
                            <form action="">
                                <input type="file" class="d-none banner-image-upload">
                                <button class="btn btn-info w-50 mt-2" onclick="upload_banner_image()">Upload Image</button>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-9">
                        <div class="" style="user-select: none">
                            <div class="form-group row align-items-center mb-0">
                                <label for="address" class="col-sm-3 col-form-label">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="adslink">Please Enter Ads Link :</label>
                                            <input id="adslink" type="text" class="form-control">
                                        </div>
                                    </form>
                                </label>
                                <div class="col-sm-9">
                                    <i class="feather-toggle-left toggle-icon" style="font-size: 30px" onclick="toggleChange()"></i>
                                    <form action="">
                                        <input type="hidden" id="onoff" value="0">
                                    </form>
                                </div>
                            </div>
                            <div class="form-group from d-none row">
                                <label for="address" class="col-sm-5 col-form-label">From</label>
                                <div class="col-sm-7">
                                    <form action="">
                                        <input type="date" class="form-control w-50">
                                    </form>
                                </div>
                            </div>
                            <div class="form-group to d-none row">
                                <label for="address" class="col-sm-5 col-form-label">To</label>
                                <div class="col-sm-7">
                                    <form action="">
                                        <input type="date" class="form-control w-50">
                                    </form>
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-info">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row border mt-5">
                        <div class="col-4">
                            <div class="position-relative">
                                <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="w-100" alt="">
                                <buttom class="btn btn-sm p-0 banner-x">
                                    <i class="feather-x"></i>
                                </buttom>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="position-relative">
                                <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="w-100" alt="">
                                <buttom class="btn btn-sm p-0 banner-x">
                                    <i class="feather-x"></i>
                                </buttom>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="position-relative">
                                <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="w-100" alt="">
                                <buttom class="btn btn-sm p-0 banner-x">
                                    <i class="feather-x"></i>
                                </buttom>
                            </div>
                        </div>
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

{{--<input type="hidden" id="onoff" value="0">--}}
