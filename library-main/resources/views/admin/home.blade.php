@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <span style="float: right">
                            <a href="{{ route('home.create') }}" class="btn btn-primary">Tambah Buku</a>
                        </span>
                        <h1 class="mt-4">Daftar Buku</h1>  
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                    </div>
                                    <div class="row row-cols-4  my-4 mx-auto" >
                                        @foreach ($books as $book)
                                            <x-card :image="$book->sampul" :title="$book->judul"  :id="$book->id" :author="$book->pengarang" :publisher="$book->penerbit" admin/>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{ $books->links() }}
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small"></div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
@endsection
