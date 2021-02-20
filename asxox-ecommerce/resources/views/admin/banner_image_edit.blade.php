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
                            <input type="file" class="d-none banner-image-upload">
                            <button class="btn btn-info w-50 mt-2" onclick="upload_banner_image()">Upload Image</button>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-9">
                        <div class="" style="user-select: none">
                            <div class="form-group row align-items-center">
                                <label for="address" class="col-sm-3 col-form-label">Default Status</label>
                                <div class="col-sm-9">
                                    <i class="feather-toggle-left toggle-icon" style="font-size: 30px" onclick="toggleChange()"></i>
                                    <input type="hidden" id="onoff" value="0">
                                </div>
                            </div>

                          <div class="" id="from-date">
    
                          </div>

                            <div class="" id="to-date">
                           
                            </div>


                            <div class="form-group d-block row">
                                <label for="address" class="col-sm-5 col-form-label">Link</label>
                                <div class="col-sm-7">
                                    <input type="text" class="w-50 form-control">
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-info">Save</button>
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
