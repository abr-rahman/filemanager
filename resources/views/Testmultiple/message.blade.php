@if (session()->has('message'))
    <div class="fixed top-0 left=1/2 transform ">
        <p>{{ session('message') }}</p>
    </div>
@endif
