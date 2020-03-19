@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">       
            <h5 class="card-header">LOGIC</h5>
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{url('logic')}}" class="btn btn-primary">Go Logic</a>
            </div>
            </div>
            </div>
        <div class="col-md-4">
          <div class="card">       
            <h5 class="card-header">DATABASE</h5>
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{url ('inputan') }}" class="btn btn-primary">Go Database</a>
            </div>
            </div>
            </div>
                
    </div>
</div>
@endsection
