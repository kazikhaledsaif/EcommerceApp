@extends('backend.layouts.app')

@section('title', 'Settings')

@section('content')

    <section class="content-header">
        <h1>
            Settings
            <small>Settings</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">Settings</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content container-fluid">


        <div class="product">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('backend.settings.update') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">

                            <label for="inputTitle1" class="col-sm-2 control-label">Delivery Cost</label>

                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="inputTitle1" name="delivery_cost"  value="{{empty($settings)? "": $settings->delivery_cost}}" placeholder="" required>
                            </div>


                        </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>




    </section>
    <!-- /.content -->

@endsection

@push('scripts')


    {{-- DataTable js --}}
    <link rel="stylesheet" href="{{asset('backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#dataTable').DataTable();
            $('.settings').addClass('active');

        });
    </script>
@endpush
