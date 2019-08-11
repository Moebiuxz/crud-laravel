@if (Session::has('message-error'))
    <div class="alert alert-danger" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('message-error')}}</strong>
    </div>
@endif