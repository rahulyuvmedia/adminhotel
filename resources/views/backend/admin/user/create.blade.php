@extends('backend.layouts.master')
@section('content')
    <form action="{{ Route('admin.users.store') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8"
        class="needs-validation" novalidate>
        @csrf
        <div class="form-row">
            <div id="status"></div>
            <br />
            <div class="clearfix"></div>
            <div class="form-group col-md-6 col-sm-12">
                <label for=""> Name </label>
                <input type="text" class="form-control" id="name" name="name" value="" placeholder=""
                    required>
                <span id="error_name" class="has-error"></span>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for=""> Email </label>
                <input type="text" class="form-control" id="email" name="email" value="" placeholder=""
                    required>
                <span id="error_email" class="has-error"></span>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label>Password:</label>
                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required']) !!}
                <span id="error_password" class="has-error"></span>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label>Confirm Password:</label>
                {!! Form::password('confirm-password', [
                    'placeholder' => 'Confirm Password',
                    'class' => 'form-control',
                    'required',
                ]) !!}
                <span id="error_confirm-password" class="has-error"></span>
            </div>
            <div class="col-md-12">
                <label for="photo">Logo (File must be jpg, jpeg, png)</label>
                <div class="input-group">
                    <input id="photo" type="file" name="photo" style="display:none">
                    <div class="input-group-prepend">
                        <a class="btn btn-secondary text-white" onclick="$('input[id=photo]').click();">Browse</a>
                    </div>
                    <input type="text" name="SelectedFileName" class="form-control" id="SelectedFileName" value=""
                        readonly>
                </div>
                <script type="text/javascript">
                    $('input[id=photo]').change(function() {
                        $('#SelectedFileName').val($(this).val());
                    });
                </script>
                <span id="error_photo" class="has-error"></span>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12 col-md-12 mb-3 mt-3">
                <strong>Assign Role: </strong>
                <div class='row mb-3 mt-3'>
                    @foreach ($roles as $role)
                        @if ($role->guard_name != 'admin')
                            <div class="col-md-2 col-sm-12">
                                <input type="checkbox" name="all_role" class="data-check flat-green"
                                    value="{{ $role->id }}" /> {{ $role->name }}
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-success button-submit" data-loading-text="Loading..."><span
                        class="fa fa-save fa-fw"></span> Save
                </button>
            </div>
        </div>
    </form>


@stop
