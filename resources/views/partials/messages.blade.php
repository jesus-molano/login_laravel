@if (isset($errors) && count($errors) > 0) 
  <div class="error">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if (Session::get('success', false))
  <?php $data = Session::get('success'); ?>
  @if (is_array($data))
    <div class="success">
      <ul>
        @foreach ($data as $message)
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    </div>
  @else
    <div class="success">
      <p>{{ $data }}</p>
    </div>
  @endif
@endif