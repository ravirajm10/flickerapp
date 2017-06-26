@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @foreach(config('constants.sizeArray') as $key => $value)
                        <button type="button" class= "{{ $key != $size ?  'btn btn-default' : 'btn btn-primary'  }}" id="{{$key}}">{{$value}}</button>
                    @endforeach
                </div>

                <div class="panel-body">
                     @include('partials.photo-list');               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
