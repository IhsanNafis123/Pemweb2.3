
<div class="alert alert-{{ $type ?? 'info' }} alert-dismissible fade show" role="alert">
    <strong>{{ $title ?? 'Perhatian!' }}</strong> {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
