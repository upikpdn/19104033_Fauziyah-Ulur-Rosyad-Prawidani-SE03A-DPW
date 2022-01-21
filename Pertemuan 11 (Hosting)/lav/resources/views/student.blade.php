<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Witchy</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Kiyowo</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
    <a class="nav-link" href="{{url('/')}}">Home</a>

    </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{url('/mahasiswa')}}">Daftar Siswa</a>
    </li>
    
    </ul>
    </div>
    </div>

</nav>
@yield('container')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container">

        @if (session('pesan'))
            <div class="alert alert-success">
                {{ session('pesan') }}
            </div>
        @endif

        <h4>Data Mahasiswa</h4>

        <hr>

        <h5>
            Tabel Biasa
        </h5>
        <table class="table">
            <tr>
                <td>
                    #
                </td>
                <td>
                    NIM
                </td>
                <td>
                    Name
                </td>
                <td>
                    Gender
                </td>
                <td>
                    Jurusan
                </td>
                <td>
                    Alamat
                </td>
                <td>
                    Aksi
                </td>
            </tr>

            @php
                $no = 1
            @endphp

            @foreach($students as $s)
                <tr>
                    <td>
                        {{ $no++ }}
                    </td>
                    <td>
                        {{ $s->nim }}
                    </td>
                    <td>
                        {{ $s->name }}
                    </td>
                    <td>
                        {{ $s->gender }}
                    </td>
                    <td>
                        {{ $s->departement }}
                    </td>
                    <td>
                        {{$s->address}}
                    </td>
                    <td>
                        <a href="{{ url('/mahasiswa/'.$s->id.'/edit') }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('/mahasiswa/hapus/'.$s->id) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <hr>

        <h5>
            Menggunakan Datatables
        </h5>

        <table id="myTable" class="table">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        NIM
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Gender
                    </td>
                    <td>
                        Jurusan
                    </td>
                    <td>
                        Alamat
                    </td>
                    <td>
                        Aksi
                    </td>
                </tr>
            </thead>

            @php
                $no = 1
            @endphp

            <tbody>
                @foreach($students as $s)
                    <tr>
                        <td>
                            {{ $no++ }}
                        </td>
                        <td>
                            {{ $s->nim }}
                        </td>
                        <td>
                            {{ $s->name }}
                        </td>
                        <td>
                            {{ $s->gender }}
                        </td>
                        <td>
                            {{ $s->departement }}
                        </td>
                        <td>
                            {{$s->address}}
                        </td>
                        <td>
                            <a href="{{ url('/mahasiswa/'.$s->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('/mahasiswa/hapus/'.$s->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
   
</body>
</html>