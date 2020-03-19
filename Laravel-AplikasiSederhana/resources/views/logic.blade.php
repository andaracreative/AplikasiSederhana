@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">       
            <h5 class="card-header">LOGIC</h5>
            <div class="card-body">
            
            <form method="post" action="{{ url('logic/store') }}">
            {{ csrf_field() }}
            <div class="form-group row">
            <label for="angka" class="col-sm-2 col-form-label">Angka</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" name="angka"  placeholder="Masukan angka">
            </div>
            <button class="btn btn-secondary" > Submit </button> 
            <div class="col-sm-2">
            <a class="btn btn-secondary" href="{{ url ('/home')}}" > Kembali </a> 
            </div>
            </div>
            @if(count($angka))
            <ul>
                @foreach ($angka as $a)
                <li>{{($a->angka)}}</li>
                <?php
$a->angka;
$split = str_split($a->angka);
$len = count($split);

for ($i=0; $i <= $len - 1; $i++) 
{
echo $split[$i];
for ($j = 0; $j < $len - $i - 1; $j++) {
echo '0';
}
echo '<br/>';
}
?>

                @endforeach
            </ul>
            @endif
            </div>
            </div>
            </div>
            </div>
            </div>

  


@endsection