<x-layout>
    <h1><b>Ini halaman contact</b></h1>
    <x-slot:title>{{ $title }}</x-slot>
            <ul>
                <h1>Nama :{{ $nama }}</h1>
                <h1>Kelas : {{ $kelas }}</h1>
                <h1>Likedin saya : <a href="{{ $likedin }}">Brillian Aditya Suhargo</a></h1>
                <h1>Github saya : <a href="{{ $repository }}">Akun GitHub saya</a></h1>
            </ul>
</x-layout>
