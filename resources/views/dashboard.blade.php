@extends('layouts.master')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">

                <h3>Welcome {{ auth()->user()->name }}</h3>

                <h5>
                    Role :
                    {{ auth()->user()->getRoleNames()->first() }}
                </h5>

            </div>
        </div>

    </div>
@endsection
