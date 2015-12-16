@if($errors->any())
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4> <i class="icon fa fa-check"></i> POZOR!</h4>
      @foreach($errors->all() as $error)
        <p>
          {{ $error }}
        </p>
      @endforeach

    </div>
@endif
