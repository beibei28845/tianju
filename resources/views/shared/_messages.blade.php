@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
@endforeach
