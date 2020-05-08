@if(session()->has('msg'))
    <div class="alert alert-success fade in">
        <i class="fa-fw fa fa-check"></i>
        <strong>{{session('msg')}}</strong>
    </div>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger fade in">
            <i class="fa-fw fa fa-times"></i>
            <strong>{{$error}}</strong>
        </div>
    @endforeach
@endif

@if(session()->has('danger-msg'))
    <div class="alert alert-danger fade in">
        <i class="fa-fw fa fa-check"></i>
        <strong>{{session('danger-msg')}}</strong>
    </div>
@endif
