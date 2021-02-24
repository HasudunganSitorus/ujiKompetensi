@extends('layouts.app')

@section('content')
    <div class="container">
        <customer-component></customer-component>
    </div>

<script src="{{mix('js/app.js')}}"></script>
@endsection