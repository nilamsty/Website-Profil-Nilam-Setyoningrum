@extends('layouts.main')

@section('container')

<header class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-5 bold">-- Hubungi Saya --</h1>
        </div>
    </div>
</header>

    <section style="padding-top:30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Hubungi saya dengan mengisi form di bawah ini:</strong>
                        </div>
                        <div class="card-body">

                            @if(Session:: has('pesan_dikirim'))
                                <div class="alert alert-succes" role="alert">
                                    {{Session::get('pesan_dikirim')}}
                                </div>
                            @endif

                            <form method="POST" action="{{route('hubungisaya.dikirim')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="nomorhp">Nomor HP</label>
                                    <input type="text" name="nomorhp" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Pesan</label>
                                    <textarea name="pesan" class="form-control"></textarea>
                                </div>
                                <br>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>  Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
