@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

      <div class="col-md-12 md-4">
      <img src="{{ url('/foto.jpg') }}" class="rounded mx-auto d-block" width="500" alt="">
      </div>
       @foreach($barangs as $barang)
       <div class="col-md-4">
            <div class="card">
               <img src="{{ url('uplod')}}/{{ $barang->gambar }}" class="Card-image-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">{{$barang->nama_barang}}</h5>
               <p class="card-text">
               <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
               <strong>Stok :</strong> {{ $barang->stok }} <br>
              <hr>
              <strong>Keterangan :</strong> <br>
                    {{ $barang->keterangan }} 
               </p>
                <a href="#" class="btn btn-primary">Pesan</a>
               </div>
             </div>
           </div>
          @endforeach
       </div>
     </div>
@endsection
