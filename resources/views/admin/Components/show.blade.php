<div class="col-md-10 offset-md-1 col-12 pt-4">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title title-form font-weight-bold">{{ $title ?? null }} </h3>
        </div>
        <div class="card-body">
            {{ $content ?? null }}
        </div>
        <div class="card-footer">
            {{ $back ?? null }}
        </div>
    </div>
</div>
@push('js')
    <script>
        const formControls = document.querySelectorAll('.form-control');
        formControls.forEach(formControl => {
            formControl.setAttribute("disabled", true)
        });
    </script>
@endpush