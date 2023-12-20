@extends('operator.layout')

@section('content')
    <div class="min-h-screen h-full">

        <div class="flex">

            @include('operator.sidebar')

            <div class="flex-grow h-full pl-[34px] pr-[88px] py-7 box-border mb-10 w-full" id="content">
                @yield('panduan-content')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("alpine:init", () => {
            let params = new URLSearchParams(window.location.search);
            Alpine.data("select", () => ({
                open: false,
                peruntukan: "",

                toggle() {
                    this.open = !this.open;
                },

                setPeruntukan(val) {
                    this.peruntukan = val;
                    this.open = false;

                    if (val === 'tk') {
                        params.set('peruntukan', 'tk')
                        window.location.search = params
                    } else if (val === "sd") {
                        params.set('peruntukan', 'sd')
                        window.location.search = params
                    } else {
                        params.set('peruntukan', 'smp')
                        window.location.search = params
                    }
                },
            }));
        });
    </script>
@endpush
