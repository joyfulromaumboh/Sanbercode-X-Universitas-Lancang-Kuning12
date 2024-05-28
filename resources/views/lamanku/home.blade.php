@extends('layouts.master')
@section('title')
Halaman Utama
@endsection
@section('subtitle')
Halaman Utama
@endsection

@section('content')
    
<h1>SanberBook</h1>
<h3>Social Media Developer Santai Berkualitas</h3>
<p>Belajar dan berbagi agar hidup ini semakin santai dan berkualitas</p>

<h3>Benefit Join di SanberBook</h3>
<ul>
    <li>Mendapatkan motivasi dari sesama developer</li>
    <li>Sharing knomledge dari para mastah Sanber</li>
    <li>Dibuat oleh calon web developer terbaik</li>
</ul>

<h3>Cara Bergabung ke SanberBook</h3>
<ol>
    <li>Mengunjungi Website ini</li>
    <li>Mendaftar di <a href="{{ "form" }}">Form Sign Up</a></li>
    <li>Selesai!</li>
</ol>
@endsection