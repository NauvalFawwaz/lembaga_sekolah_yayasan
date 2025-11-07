@extends('layouts.main')

@section('title', 'Detail Berita')

@section('content')
<div class="container py-5">
  <h2 class="text-primary mb-3">Detail Berita #{{ $id }}</h2>
  <p>Isi lengkap berita nanti akan muncul di sini.</p>
  <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
