@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($members as $member)
            <li><a href="{{ url('/members/'.$member->id) }}">{{$member->getFullName()}}</a></li>
        @endforeach
        {{--<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div>
                    @foreach($members as $member)
                        <li>{{$member->firstname}}</li>
                        @endforeach
                </div>
            </div>
        </div>--}}
    </div>
</div>
@endsection
