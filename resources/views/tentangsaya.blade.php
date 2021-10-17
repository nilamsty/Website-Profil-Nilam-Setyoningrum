@extends('layouts.main')

@section('container')
<header class="container">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-5 bold">-- Tentang Saya --</h1>
        </div>
    </div>
</header>

<main class="container border">
    <div class="row">
        <div class="col-md-4 py-3 text-center mb-4">
            <img src="img/nilam.jpg" alt="Nilam Setyoningrum" width="200" class="img-thumbnail rounded-circle">
            <p class="lead mt-2 mb-0">
                <strong>NILAM SETYONINGRUM</strong>
            </p>
            <p class="lead mt-1">Junior Sosial Media Specialist</p>

            
            
            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-download"></i>  Unduh CV</button>
        </div>
        <div class="col-md-8 py-3">
            <h3>Halo, Saya Nilam Setyoningrum!</h3>
            <p class="mt-3" align="justify">Saya merupakan seorang mahasiswa aktif Universitas Negeri Surabaya jurusan Teknik Informatika. Saya memiliki keterampilan dan keahlian dalam membuat konten, desain maupun menghandle sosial media. Saya juga aktif sebagai campaigner di sosial media dalam bidang sosial dan teknologi. Saya suka terhubung dengan orang yang memiliki keterkaitan dalam bidang yang sama. Hubungi saya dan mari kita berbicara!</p>

            <div class="text-center">
                <a href="/kontak" class="btn btn-primary btn-sm" >  
                    <i class="fa fa-address-book"></i> Hubungi Saya
                </a>
            </div>
            <br>
            <hr />

            <div class="biodata mt-4 mb-4">
                <div class="text-center bg-info">
                    <h4>Informasi Pribadi</h4>
                </div>
                <br>
                <table width="100%" border="0">
            <tr>
                <td valign="top">
                <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                  <tbody>
                    <tr>
                      <td width="25%" valign="top" class="textt" style="font-weight:bold">Nama Lengkap</td>
                        <td>Nilam Setyoningrum</td>
                    </tr>
                    <tr>
                      <td class="textt" style="font-weight:bold">Tempat Tanggal Lahir</td>
                        <td>Surabaya, 26 April 2001</td>
                    </tr>
                    <tr>
                      <td class="textt" style="font-weight:bold">Alamat</td>
                        <td>Karang Asem, Surabaya</td>
                    </tr>
                    <tr>
                        <td class="textt" style="font-weight:bold">Email</td>
                          <td>nilamsetyoningrum4@gmail.com</td>
                    </tr>
                    <tr>
                      <td class="textt" style="font-weight:bold">Nomor Hp</td>
                        <td>085855234435</td>
                    </tr>
                </tbody></table>
                </td>
            </tr>
            </tbody></table>
        </div>
        <br>


        <div class="kemampuan mb-4">
            <div class="text-center bg-info">
                <h4>Kemampuan</h4>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3 text-center" style="background-color:rgb(167, 193, 250);">
                    <strong>Copywriting</strong>
                </div>
                <div class="col-sm-3 text-center" style="background-color:rgb(168, 252, 247);">
                    <strong>Digital Marketing</strong>
                </div>
                <div class="col-sm-3 text-center" style="background-color:rgb(167, 193, 250);">
                    <strong>Desain Grafis</strong>
                </div>
                <div class="col-sm-3 text-center" style="background-color:rgb(168, 252, 247);">
                    <strong>Bahasa</strong>
                </div>
            </div>
        </div>
    </div>
@endsection
    
