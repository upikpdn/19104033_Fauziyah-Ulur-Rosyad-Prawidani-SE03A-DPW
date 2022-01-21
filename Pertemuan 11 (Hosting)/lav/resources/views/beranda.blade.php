@extends('template/base')
@section('title','Home')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10 mt-4">
                <h1>Selamat Datang di Sini All</h1>
            </div>
            <div class="col-5 mt-2">
                <h6>Gimana Kabs?</h6>
                <h6>Kenalin Anggota Kiyowo</h6>
            </div>
        </div>
        <section id="portfolio" class="portfolio bg-light pb-4">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h2>Gatau Ini Apa</h2>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
          <img src="{{ asset('storage/img/harry.jpg') }}" width="50%" alt="" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
          <img src="{{ asset('storage/img/niall.jpg') }}" width="50%" alt="" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
          <img src="{{ asset('storage/img/louis.jpg') }}" width="50%" alt="" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
          <img src="{{ asset('storage/img/zayn.jpg') }}" width="50%" alt="" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
@endsection