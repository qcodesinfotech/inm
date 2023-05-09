@extends('layouts.master')
@section('content')
    <main class="main-content">
        <div class="position-relative  iq-banner ">
            <!--Nav Start-->
            @include('admin.nav')
<style>
    .table thead tr th {
      vertical-align: middle;
    }
</style>
            
            <div class="iq-navbar-header " style="background-color:#f4cd53;height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flex-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h1>User List!</h1>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:black;">Enter book </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="bookupdate" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">book Name</label>
                                <input type="text" class="form-control" placeholder="Enter book name"
                                    id="editbookName" name="book_name">
                                <input type="hidden" id="updateId" name="id" required>
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Thumbnail Image</label>
                                <input type="file" class="form-control" placeholder="thumbnail" name="thumbnail"
                                    accept="image/*">
                            </div>
                              <br />
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">book File</label>
                                <input type="file" class="form-control" placeholder="book" accept=".pdf"
                                    name="book_file">
                            </div>
                        <br />
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Save changes" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

       <style>

            td {
                text-align: center;
            }

            tr th {
                text-align: center !important;
            }

            th .m-0 {
                font-size: 13px;
                padding: 18px;
            }

            th.text-center {
                font-size: 13px;
            }

            div.justify-content-center {
            
                font-size: 13px;
            
            }
            
            th{
                     font-weight: 900 !important;
            }

        </style>

        <div class="content-inner pb-0 container" id="page_layout">
            <div class="row">
                <div class="col-sm-12"
                >

                @if (session()->has('message'))
                <div class="alert alert-success"
                    style="margin-top: 2%;width: 50%;text-align: center;margin-left: 20%;">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('warning'))
                <div class="alert alert-danger"
                    style="margin-top: 2%;width: 50%;text-align: center;margin-left: 20%;">
                    {{ session()->get('warning') }}
                </div>
            @endif
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">User Table</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive border rounded">
                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                    <div class="table-responsive my-3">
                                        <table class="table table-bordered" style="border-color: #ffc107;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">S.NO</th>
                                                    <th scope="col" class="text-center">NAME</th>
                                                    <th scope="col" class="text-center">EMAIL</th>
                                                    <th scope="col" class="text-center">ADDRESS</th>
                                                    <th scope="col" class="text-center">NUMBER</th>
                                                    <th scope="col" class="text-center">DELIVERED DATE</th>
                                                    <th scope="col" style="padding:0px;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style=" height:40px; border-bottom: 1px solid #ffc107">Books
                                                        </div>
                                                        <div class="d-flex"
                                                            style="justify-content:space-around; height:40px">
                                                            
                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                            Delivered
                                                            </p>

                                                            <a style="border-left: 1px solid #ffc107"></a>

                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                            Not Delivered
                                                            </p>
                                                        </div>
                                                    </th>
                                                    <th scope="col" style="padding:0px;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style=" height:40px; border-bottom: 1px solid #ffc107">Videos
                                                        </div>
                                                        <div class="d-flex"
                                                            style="justify-content:space-around; height:40px">
                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                                Delivered</p>
                                                            <a style="border-left: 1px solid #ffc107"></a>
                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                                Not Delivered</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                {{-- user_table --}}
                                                <?php 
                                                $i = 1;
                                                foreach($user_table as $item){  ?>


                                                <tr>
                                                    <td scope="col" class="text-center">{{$i++}}</td>
                                                    <td scope="col" class="text-center">{{$item->name}}</td>
                                                    <td scope="col">{{$item->email}}</td>
                                                    <td scope="col" class="text-center">xxxxxxxxxx</td>
                                                    <td scope="col" class="text-center">{{$item->phone}}</td>
                                                    <td scope="col" class="text-center">XX-XX-XXXX</td>
                                                    <td scope="col" style="padding:0px;">
                                                        <div class="d-flex"
                                                            style="justify-content:space-around; height:40px">
                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                                <img src="<?= URL::asset('user_assets/images/icons/right-mark.png') ?>" alt=""
                                                                    style="height: 24px; width: 24px">
                                                            </p>
                                                            <a style="border-left: 1px solid #ffc107"></a>
                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                                <img src="<?= URL::asset('user_assets/images/icons/right-mark.png') ?>" alt=""
                                                                    style="height: 24px; width: 24px">
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td scope="col" style="padding:0px;">
                                                        <div class="d-flex" style="justify-content:space-around; height:40px">
                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                                <img src="<?= URL::asset('user_assets/images/icons/wrong-mark.png') ?>" alt=""
                                                                    style="height: 24px; width: 24px">
                                                            </p>
                                                            <a style="border-left: 1px solid #ffc107"></a>
                                                            <p class="w-50 m-0 d-flex justify-content-center align-items-center">
                                                                <img src="<?= URL::asset('user_assets/images/icons/right-mark.png') ?>" alt=""
                                                                    style="height: 24px; width: 24px">
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    </main>
@endsection
