@extends('backend.layouts.app')

@section('title', 'User list')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User List
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">User</li>
        </ol>
    </section>

    <section class="content container-fluid">


        <div class="box-body">
            <table id="list" class="table table-bordered table-striped table-responsive table-hover" >
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Register on</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
    @if($user->hasRole('admin'))

    Admin

    @else

    <a href="{{ route('backend.user.show',['id'=> $user->id]) }}"><i class="fa fa-unlock fa-lg " style="color:dodgerblue" aria-hidden="true"></i>  Make Admin </a>&nbsp;&nbsp;
      @endif

</td>

</tr>
@endforeach

</tbody>
<tfoot>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Register on</th>
<th>Action</th>
</tr>
</tfoot>
</table>
</div>


</section>
<!-- /.content -->


@endsection