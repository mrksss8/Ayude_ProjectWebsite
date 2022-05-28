@if (session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <div>
            <h4 class="alert-title">{{ __('Success') }}</h4>
            <div class="text-muted">{{ session('success') }}</div>
        </div>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@elseif(session('delete'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <div>
            <h4 class="alert-title">{{ __('Delete') }}</h4>
            <div class="text-muted">{{ session('delete') }}</div>
        </div>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@elseif(session('update'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <div>
            <h4 class="alert-title">{{ __('Updated') }}</h4>
            <div class="text-muted">{{ session('update') }}</div>
        </div>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
@endif