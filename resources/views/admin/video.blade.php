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
                                <h1>Video List!</h1>
                            </div>
                      
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                create Video
                            </button>
                              
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:black;">Enter Video </h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="videoupload" method="POST" enctype="multipart/form-data">
                                            @csrf                                     
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Video Name</label>
                                                <input type="text" class="form-control" placeholder="Enter video name"  name="video_name" required>
                                              </div>
                                              <br/>
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">Thumbnail Image</label>
                                                <input type="file" class="form-control" placeholder="thumbnail" name="thumbnail"  accept="image/*" required>
                                              </div>
                                              <br/>
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">Video File</label>
                                                <input type="file" class="form-control" placeholder="video" accept="video/mp4,video/x-m4v,video/*" name="video_file" required>
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
              <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:black;">Enter Video </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="videoupdate" method="POST" enctype="multipart/form-data">
                    @csrf                                     
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Video Name</label>
                        <input type="text" class="form-control" placeholder="Enter video name"  id="editvideoName" name="video_name" >
                        <input type="hidden"  id="updateId" name="id" required>
                      </div>
                      <br/>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Thumbnail Image</label>
                        <input type="file" class="form-control" placeholder="thumbnail" name="thumbnail"  accept="image/*" >
                      </div>
                      <br/>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Video File</label>
                        <input type="file" class="form-control" placeholder="video" accept="video/mp4,video/x-m4v,video/*" name="video_file" >
                     </div>
                     <br/>
            </div>

            <div class="modal-footer">
                     <input type="submit" class="btn btn-secondary" value="Save changes" />
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
                    style="margin-top: 10%;width: 50%;text-align: center;margin-left: 20%;">
                    {{ session()->get('warning') }}
                </div>
             @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Video Table</h4>
                        </div>
                    </div>
                    <div class="card-body">
               <script>
                header("location:javascript://history.go(-1)");
               </script>
          
                        <div class="table-responsive border rounded">
                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="table-responsive my-3">
                                    <table id="datatable" class="table dataTable" data-toggle="data-table" aria-describedby="datatable_info">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>video</th>
                                                <th>Image</th>
                                                <th>play</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($video as $item)
                                            <tr class="odd">
                                                <td>{{$i++}}</td>
                                                <td>{{$item->video_name}}</td>
                                                <td><img src="{{asset($item->video_thumbnail)}}" width="100px" alt=""></td>
                                                <td><a href="{{asset($item->link)}}" target="_blank" alt="" class="btn btn-secondary"><i class="fa fa-play" aria-hidden="true"></i></a></td>
                                                <td class="cell">
                                                    <a data-bs-toggle="modal" onclick="edit('<?= $item->video_name ?>','<?= $item->id ?>')" data-bs-target="#editexampleModal"  class="btn btn-primary"><i
                                                            class="fas fa-edit fa-1x"></i></a>
                                                    <form action="{{ route('videodelete', $item->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        <button type="submit"
                                                         onclick="return confirm('Are you sure to delete {{ $item->video_name }}, all data related to {{ $item->video_name }} also deleted?')"
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
 
            $('#editvideoName').val($title);
            $('#updateId').val($id);
   }
</script>
@endsection