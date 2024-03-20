
<div class="text-danger">
    @if ($errors->has('login'))
        {{ $errors->first('login') }}
    @endif
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
