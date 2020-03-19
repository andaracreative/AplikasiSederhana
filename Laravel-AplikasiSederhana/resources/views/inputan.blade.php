@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
            <h5 class="card-header">Data Inputan</h5>
            <div class="card-body">
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            </div>
                            @endif
                            
                    @if(\Session::has('succes'))
                    <div class="alert alert-success">
                      <p>{{\Session::get('succes')}}</p>
                    </div>
                    @endif
            <form action="{{ url('inputan/store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama </label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama ">
            </div>
            </div>
            <div class="form-group row">
            <label for="Alamat" class="col-sm-2 col-form-label">Alamat </label>
            <div class="col-sm-4">
            <textarea class="form-control" name="alamat" placeholder="Masukan Alamat "></textarea>
            </div>
            </div>
            <div class="form-group row">
            <label for="no_telp" class="col-sm-2 col-form-label">No Telp </label>
            <div class="col-sm-4">
            <input type="number" class="form-control" name="no_telp" placeholder="Masukan No Telp "/>
            </div>
            </div>
            <div class="form-group row">
            <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah </label>
            <div class="col-sm-4">
            <select class="form-control" name="asal_sekolah">
            <option selected="true" disabled>!---Silahkan Pilih---!</option>
            @foreach ($sekolah as $row)
            <option> {{$row->nama_sekolah}}</option>
            @endforeach
            </select>
            </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-8">
            <button class="btn btn-secondary">Submit</button>
            <a class="btn btn-primary" href="{{ url ('/home') }}">Kembali</a>
            </div>
            </div>
            </form>
            </div>
            <!--table-->
            <div class="table-responsive">
            <table class="table table-bordered">
  <thead>
  
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>No Telepon</th>
      <th>Asal Sekolah</th>
    </tr>
  </thead>
  <?php $no = 0;?>
            @foreach($data as $row)
                <?php $no++ ;?>
  <tbody>
    <tr>
      <th>{{$no}}</th>
      <td>{{$row->nama}}</td>
      <td>{{$row->alamat}}</td>
      <td>{{$row->no_telp}}</td>
      <td>{{$row->asal_sekolah}}</td>
    </tr>
  @endforeach
</table>
{{$data->links()}}
            </div>
            </div>
            </div>
            </div>
</div>

@endsection