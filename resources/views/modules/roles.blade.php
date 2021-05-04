<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Roles') }}</div>

            <div class="card-body">
                @foreach ($roles as $rol )
                    {{ $rol->name }}
                @endforeach
            </div>
        </div>
    </div>
</div>
