@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        <strong>Warning!</strong><span> {{ $error }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endforeach
</ul>
@endif