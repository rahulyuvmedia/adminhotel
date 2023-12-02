@extends('backend.layouts.master')
@section('title', 'Addtools')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="bi bi-tags icon-gradient bg-mean-fruit"> </i>
            </div>
            <div>All Sub-Master</div>
            <div class="d-inline-block ml-3 pb-3">

                <a href="{{ URL::to('admin/submaster/create') }}" class="btn "style="background-color:#7367f0 ; color:white">
                    <i class="bi bi-plus-lg"></i>
                    Add Sub Master
                </a>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>

                                <th class="text-nowrap">subMaster Name</th>
                                <th class="text-nowrap">subMaster Value</th>
                                <th class="">Logo</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($submaster as $value)
                            <tr>
                                <td class="serial-number">{{ $loop->iteration }}</td>

                                <td class="fw-bold text-nowrap ">{{ $value->title }}</td>
                                <td class="fw-bold">{{ $value->value }}</td>
                                <!-- <td class="fw-bold">{{ $value->value }}</td> -->






                                <?php
                        $userImage = '/uploads/' . $value->logo;
                        $defaultImage = '/assets/images/default.jpg';
                        if (file_exists(public_path($userImage))) {
                            $imagePath = $userImage;
                        } else {
                            $imagePath = $defaultImage;
                        }
                        
                        ?>



                                <td style="  width: 58px;">
                                    <img class="img-thumbnail img-fluid tool-img-edit" src="{{ URL::to($imagePath) }}"
                                        style="width: 45px;" />
                                </td>
                                <td class="d-flex">
                                    <a href="{{ Route('admin.submaster.edit', $value->id) }}"
                                        class="btn fw-bold btn-primary text-nowrap" data-mdb-ripple-color="dark">
                                        <i class="metismenu-icon bi bi-gear-wide-connected"></i>
                                        Edit
                                    </a>
                                    {{-- delete --}}
                                    <form action="{{ route('admin.submaster.destroy', $value->id) }}" method="POST"
                                        id="deleteForm">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-danger ms-3 text-nowrap"
                                            onclick="confirmDelete(this)">

                                            <i class="bi bi-trash"></i> Delete
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

<style>
@media screen and (min-width: 768px) {
    #myModal .modal-dialog {
        width: 70%;
        border-radius: 5px;
    }
}
</style>



<script>
function confirmDelete(button) {
    if (confirm("Are you sure you want to delete this item?")) {
        var form = button.parentElement;
        form.submit();
    } else {
        alert("Delete operation cancelled.");
    }
}
</script>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'lBfrtip',
        buttons: [
            {
                extend: 'copy',
                text: 'Copy',
                className: 'btn btn-light', // Change to btn-light for a light background color
                exportOptions: {
                    columns: ':visible'
                },
                customize: function (win) {
                    $(win.document.body)
                        .find('button')
                        .removeClass('btn-secondary')
                        .addClass('btn-light')
                        .css('margin-right', '5px');
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'btn btn-light ', // Add btn-custom for common styling
                exportOptions: {
                    columns: ':visible'
                },
                customize: function (win) {
                    $(win.document.body)
                        .find('button')
                        .removeClass('btn-secondary')
                        .addClass('btn-custom')
                        .css('margin-right', '5px');
                }
            },
            {
                extend: 'excel',
                text: 'Excel',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            },
            {
                extend: 'pdf',
                text: 'PDF',
                className: 'btn btn-light' ,
                style: 'margin-right: 5px;'
            },
            {
                extend: 'print',
                text: 'Print',
                className: 'btn btn-light',
                style: 'margin-right: 5px;'
            }
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ], // Length options and labels
        "pageLength": 10 // Set the initial number of rows displayed
    });
});
</script>

@stop