@extends('layout/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-10">Details Mahasiswa Baru</h1>

            <ul class="list-group">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif
                
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $student -> nama }}
                        <h6 class="card-subtitle mb-2 text-muted"> {{ $student -> nim}} </h6>
                        <p class="card-text"> {{ $student -> email}} </p>
                        <p class="card-text"> {{ $student -> jurusan}} </p>
                        <button href="submit" class="btn btn-primary">Edit</button>

                <form action="{{ $student -> id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button href="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/students" class="card-link">Kembali</a>
                       
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection