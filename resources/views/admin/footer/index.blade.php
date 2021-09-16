@extends('layouts.admin')
@section('content')

<div class="container p-5 bg-white">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <a href="{{route('admin-footer-create')}}"
                   class="btn btn-primary float-right waves-effect waves-light mb-5">
                    <i class="ti-plus"></i> Add Footer Content
                </a>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                <p class="text-muted m-b-30 font-13"></p>
                <div class="table-responsive">
                    <table class="table table-actions-bar m-b-0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>Title</th>

                            <th>Short_Description</th>
                            <th>Long_Description</th>

                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>



                        <tr>
                            <td>1</td>
                            <td>Conatct</td>
                            <td>contact</td>
                            <td>dksjhdjkshjdhsjdhjshd</td>
                            <td>jdhjshjdhsjhdjshjd</td>

                            <td style="white-space: nowrap; width: 15%;">
                                <div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                    <div class="btn-group btn-group-sm" style="float: none;">

                                        <a href="" class=" btn btn-sm btn-primary"
                                           style="float: none; margin: 5px;">
                                            <span class="ti-pencil"></span>Edit
                                        </a>
                                        <a  href="" data-toggle="modal"  data-target="#delete" class=" btn btn-sm btn-danger"
                                            style="float: none; margin: 5px;">
                                            <span class="ti-pencil"></span>Delete
                                        </a>






                                    </div>
                                </div>
                            </td>

                        </tr>


                        <td colspan="6">

                        </td>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" id="idd" name="id" class="form-control">
                    <div class="modal-body">
                        <p>Are you sure to delete?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-md">Confirm Delete </button>
                    </div>
                </form>

        </div>
    </div>
</div>




<script>
    function getdeleteid(id)
    {
        $('#idd').val(id);
    }
</script>



@endsection
