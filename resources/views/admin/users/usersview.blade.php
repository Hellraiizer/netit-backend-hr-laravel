{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User candidates for jobs</div>

                <div class="card-body">
                    @foreach($users as $user)
                      {{$user->name}} -- {{$user->email}} -- {{$user->age}}
                    @endforeach  
                   
                </div>
            </div>
         <example-component></example-component>
         {{--<task-form></task-form>--}}
        
        {{--</div>
    </div>
</div>
@endsection
