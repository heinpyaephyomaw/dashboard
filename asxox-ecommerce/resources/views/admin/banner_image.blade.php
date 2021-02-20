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
             <div class="col-12">
                 <div class="d-flex justify-content-end">
                     <a href="{{'/admin/website/banner/edit'}}" class="btn btn-info">Create</a>
                 </div>
             </div>
             <div class="col-12">
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Bannner Image</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Link</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>
                                <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="banner-image" alt="">
                            </td>
                            <td>
                                <span>18-2-2021</span>
                            </td>
                            <td>
                                <span>30-3-2021</span>
                            </td>
                            <td>
                                https://localhost:8000
                            </td>
                            <td>
                                <a href="{{'/admin/website/banner/edit'}}" class="btn btn-success py-1 mr-2">Edit</a>
                                <a href="" class="btn btn-danger py-1">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>
                                <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="banner-image" alt="">
                            </td>
                            <td>
                                <span>18-2-2021</span>
                            </td>
                            <td>
                                <span>30-3-2021</span>
                            </td>
                            <td>
                                https://localhost:8000
                            </td>
                            <td>
                                <a href="{{'/admin/website/banner/edit'}}" class="btn btn-success py-1 mr-2">Edit</a>
                                <a href="" class="btn btn-danger py-1">Delete</a>
                            </td>
                        </tr>
                        <tr >
                            <td>3.</td>
                            <td>
                                <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="banner-image" alt="">
                            </td>
                            <td>
                                <span>18-2-2021</span>
                            </td>
                            <td>
                                <span>30-3-2021</span>
                            </td>
                            <td>
                                https://localhost:8000
                            </td>
                            <td>
                                <a href="{{'/admin/website/banner/edit'}}" class="btn btn-success py-1 mr-2">Edit</a>
                                <a href="" class="btn btn-danger py-1">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
    </div>
    <div id="styleSelector">

    </div>
@endsection
