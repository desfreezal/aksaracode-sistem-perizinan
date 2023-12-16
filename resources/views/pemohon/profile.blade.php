@extends('pemohon.layout')

@section('content')
    <div class="min-h-screen">

        <div class="flex h-screen">
            {{-- SIDEBAR --}}
            @include('pemohon.sidebar')

            <div class="flex-grow px-[34px] py-7">
                {{-- CONTENT --}}
            </div>
        </div>
    </div>
@endsection
