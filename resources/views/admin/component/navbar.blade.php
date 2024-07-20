<nav class="mb-3 d-flex justify-content-lg-between bg-white p-2 rounded">
    <div class="d-flex flex-column">
        <span class="my-3">{{ $name }}</span>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="d-flex gap-2 align-items-center">
            <div class="d-flex flex-column">
                {{-- <p class="m-0" style="font-weight: 700; font-size:14px;">{{Auth::user()->name}}</p>
                <p class="m-0" style="font-size:12px">{{Auth::user()->email}}</p> --}}
            </div>
        </div>
    </div>
</nav>
