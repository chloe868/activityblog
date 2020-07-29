@extends('layouts.app')

@section('content')
    <div> 
            <div class="container">
                <post user="{{auth()->user()}}"></post>
            </div>
       </div>
@endsection