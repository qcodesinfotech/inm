@extends('layouts.master')

@section('content')
<main class="main-content">
    <div class="position-relative  iq-banner ">
       @include('admin.nav')
        <div class="iq-navbar-header " style="background-color:#f4cd53;height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Register User List!</h1>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 
        </div>
      </div>
    <style>
        td{
            text-align: center;
        }

        tr th{
            text-align: center !important; 
            text-transform: capitalize;
        }
        .small{
            text-transform: lowercase;
        }
    </style>

    <div class="content-inner pb-0 container" id="page_layout">
        <div class="row">
            <div class="col-sm-12">
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
                            <h4 class="card-title">user Table</h4>
                        </div>
                    </div>
                    <div class="card-body">
              
                        <div class="table-responsive border rounded">
                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="table-responsive my-3">
                                    <table id="datatable" class="table dataTable" data-toggle="data-table" aria-describedby="datatable_info">
                                        <thead>
                                            <tr>

                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>national</th>
                                                <th>religion</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>language</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i = 1;
                                                foreach($user_table as $item){  ?>
                                            <tr>
                                                <th>{{$i++}}</th>
                                                <th>{{$item->name}}</th>
                                                <th>{{$item->gender}}</th>
                                                <th>{{$item->nationlity}}</th>
                                                <th>{{$item->religion}}</th>
                                                <th class="small">{{$item->email}}</th>
                                                <th>{{$item->phone}}</th>
                                                <th>{{$item->language}}</th>
                                                <th>
                                                    <a href=<?= "delete_user/".$item->id ?> class="btn btn-danger">
                                              delete
                                                    </a>
                                              </th>
                                                
                                            </tr>
                                            <?php } ?>
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

<script>
   function edit($title,$id){
 
            $('#editbookName').val($title);
            $('#updateId').val($id);
   }
</script>
@endsection