<h1>Home Page</h1>

<ul>
    <li><a href="{{ route('frontend_home') }}">Home</a></li>
    <li><a href="{{ route('frontend_about') }}">About</a></li>
</ul>

{{ $name }}
{{ $age }}
{{-- {{ $negarawan }}, {{ $nasionalitas }} --}}
<br>
@if($negarawan == "Indonesian")
    {{ $negarawan." : Pilihan bijak RAHHHH" }}
    @else
    {{ "SALAH PILIH, GO TO NUSAKAMBANGAN!!!" }}
@endif

<br><br><br>

<x-test label="Anjay"/>
<x-test label="Password" type="password"/>
<x-test label="Monggo" type="date"/>