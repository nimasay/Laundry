@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/laundry/{{$laundry->id}}/update" method="POST">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Atas Nama</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" value="{{$laundry->nama}}">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Mauk</label>
                                        <input name="tgl" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$laundry->tgl}}">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Paket</label>
                                            <select name="jenis_id" class="form-control" value="{{$laundry->jenis_id}}">
                                                <option value="">-- Pilih --</option>
                                                    @foreach ($jenis as $item)
                    
                                                       <option value="{{$item->id}}" @if($item->id  == '{{$laundry->jenis_id}}') selected @endif>{{$item->jenis_laundry}}</option>
                                                    
                                                    @endforeach
                                             
                                            </select>
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Batas Waktu Pengerjaan</label>
                                        <input name="batas_waktu" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$laundry->batas_waktu}}">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Bayar</label>
                                        <input name="tgl_bayar" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$laundry->tgl_bayar}}">
                                    </div>
                    
                                    <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection