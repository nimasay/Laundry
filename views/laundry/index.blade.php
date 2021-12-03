@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Laundry</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                                
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>Atas Nama</td>
                                        <td>Tanggal Masuk</td>
                                        <td>Paket Laundry</td>
                                        <td>Batas Waktu Pengerjaan</td>
                                        <td>Tanggal Bayar</td>
                                        <!--<td>Status</td>-->
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_laundry as $laundry)

                                    <tr>
                                        <td>{{$laundry->nama}}</td>
                                        <td>{{$laundry->tgl}}</td>
                                        <td>{{$laundry->jenis_id}}</td>
                                        <td>{{$laundry->batas_waktu}}</td>
                                        <td>{{$laundry->tgl_bayar}}</td>
                                        <!--<td>{{$laundry->status}}</td>-->
                                        <td><a href="/laundry/{{$laundry->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                        <td><a href="/laundry/{{$laundry->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus?')">Hapus</a></td>
                                    </tr>
                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/laundry/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Atas Nama</label>
                  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Mauk</label>
                    <input name="tgl" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Paket</label>
                    <select name="jenis_id" class="form-control">
                        <option value="">-- Pilih --</option>
                        @foreach ($jeniss as $item)
    
                            <option value="{{$item->id}}">{{$item->jenis_laundry}}</option>
                            
                        @endforeach
                     
                    </select>
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Batas Waktu Pengerjaan</label>
                    <input name="batas_waktu" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Bayar</label>
                    <input name="tgl_bayar" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
    </div>
    
@endsection
