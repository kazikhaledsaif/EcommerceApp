@extends('backend.layouts.app')


@section('title', $feedback->name.'\'s feedback')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Feedback
            <small> </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li><a href="{{ route('backend.feedback.list') }}"><i class="fa fa-envelope"></i> Feedback</a></li>
            <li class="active">Feedback</li>
        </ol>
    </section>

    <div class="box">
        <div class="box-header">
            <div class="mailbox-read-info">
                <h3>Subject:  {{ $feedback->subject }}</h3>
                <h5>Name: {{ $feedback->name }}
                    <span class="mailbox-read-time pull-right">{{ date('j F, Y g:i a', strtotime( $feedback->created_at)) }}  </span></h5>
                <h5>Mail: {{ $feedback->email }}</h5>
            </div>
        </div>

            <div class="box-body ">

                <div class="mailbox-read-message">
                    <p>
                        {{ $feedback->message }}
                    </p>
                    <br><br><br>

                    <p align="center"> ===== End of Message ===== </p>
                </div>
                <!-- /.mailbox-read-message -->


            </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
        </div>
        <!-- /.box-footer -->


    </div>


@endsection
