@extends('layouts.layout')
@section('content')
<div class="searchTab">
            <form action="/searchAccount" method="GET">
                <input name="search" type="search" required>
                <i class="fa fa-search"></i>
                <button id="searchB" class="mt-5" type="submit">SUMBIT</button>
                
            </form>
</div>
@endsection