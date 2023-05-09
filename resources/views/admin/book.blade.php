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
                                <h1>Book List!</h1>
                            </div>
                      
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                create book
                              </button>
                              
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:black;">Enter book </h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="bookupload" method="POST" enctype="multipart/form-data">
                                            @csrf                                     
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">book Name</label>
                                                <input type="text" class="form-control" placeholder="Enter book name"  name="book_name" required>
                                              </div>
                                              <br/>
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">Thumbnail Image</label>
                                                <input type="file" class="form-control" placeholder="thumbnail" name="thumbnail"  accept="image/*" required>
                                              </div>
                                              <br/>
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">book File</label>
                                                <input type="file" class="form-control" placeholder="book" accept="book/mp4,book/x-m4v,book/*" name="book_file" required>
                                             </div>
                                             <br/>
                                    </div>
                                    <div class="modal-footer">
                                      {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                      <input type="submit" class="btn btn-secondary" value="Save changes" />
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="text" class="form-control" placeholder="Enter book name"  id="editbookName" name="book_name" >
                        <input type="hidden"  id="updateId" name="id" required>
                      </div>
                      <br/>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Thumbnail Image</label>
                        <input type="file" class="form-control" placeholder="thumbnail" name="thumbnail"  accept="image/*" >
                      </div>
                      <br/>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">book File</label>
                        <input type="file" class="form-control" placeholder="book" accept=".pdf" name="book_file" >
                     </div>
                     <br/>
            </div>

            <div class="modal-footer">
                     <input type="submit" class="btn btn-primary" value="Save changes" />
            </form>
            
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
                            <h4 class="card-title">book Table</h4>
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
                                                <th>book</th>
                                                <th>Image</th>
                                                <th>View</th>
                                                <th>Action</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                 <?php $i = 1; ?>
                                 @foreach ($book as $item)
                                                <td>{{$i++}}</td>
                                                <td>{{$item->book_name}}</td>
                                                <td><img src="{{asset($item->book_thumbnail)}}" width="100px" alt=""></td>
                                                <td><a href="{{asset($item->link)}}" alt="" target="_blank" class="btn btn-secondary"><i class="fa fa-file-pdf" style="font-size: 20px" aria-hidden="true"></i></a></td>
                                                 
                                                <td class="cell">
                                                    <a data-bs-toggle="modal" onclick="edit('<?= $item->book_name ?>','<?= $item->id ?>')" data-bs-target="#editexampleModal"  class="btn btn-primary"><i
                                                            class="fas fa-edit fa-1x"></i></a>
                                                    <form action="{{ route('bookdelete', $item->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        <button type="submit"
                                                         onclick="return confirm('Are you sure to delete {{ $item->book_name }}, all data related to {{ $item->book_name }} also deleted?')"
                                                            class="btn btn-danger"><i class="fas fa-trash fa-1x"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                       
                                            </tr>
                                      @endforeach
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