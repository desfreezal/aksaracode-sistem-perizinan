@extends('pemohon.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">
            {{-- SIDEBAR --}}
            {{-- @include('pemohon.sidebar') --}}

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10" id="content">

                <div class="space-y-16">
                    <h1 class="font-bold text-3xl">Monitoring</h1>

                    <div class="flex items-center gap-x-5">
                        <div class="pl-8 pr-5 flex items-center">
                            <h1>abcd</h1>
                            <img src="" alt="">
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
