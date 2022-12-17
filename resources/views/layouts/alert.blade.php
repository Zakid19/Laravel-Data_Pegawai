@if (session('success'))
    <div class="badge badge-sm text-white alert bg-gradient-success">{{ session('success') }}</div>
@endif

@if (session('danger'))
    <div class="badge badge-sm text-white alert bg-gradient-danger">{{ session('danger') }}</div>
@endif
