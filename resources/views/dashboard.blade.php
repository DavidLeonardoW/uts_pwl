@extends('layouts.index')
@section('main')


    <div class="container mx-auto p-6">

        <!-- Cek Role Pengguna dan tampilkan konten yang berbeda -->
        @if(Auth::user()->role && Auth::user()->role->role_name == 'Admin')
            @include('dashboard.admin')  <!-- Menampilkan dashboard admin -->
        @elseif(Auth::user()->role && Auth::user()->role->role_name == 'Kaprodi')
            @include('dashboard.kaprodi')  <!-- Menampilkan dashboard kaprodi -->
        @elseif(Auth::user()->role && Auth::user()->role->role_name == 'Mahasiswa')
            @include('dashboard.mahasiswa')  <!-- Menampilkan dashboard mahasiswa -->
        @elseif(Auth::user()->role && Auth::user()->role->role_name == 'TU')
            @include('dashboard.tu')  <!-- Menampilkan dashboard TU -->
        @else
            <p>Role tidak dikenali. Harap hubungi administrator.</p>
        @endif
    </div>
@endsection
