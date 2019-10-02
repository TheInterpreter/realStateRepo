<form class="margin-top solid-element absolutist" action="{{action('CmsController@destroy', $id)}}" method="post"enctype="multipart/form-data" style="background-color:transparent !important; margin-top:150px;">
  @if(count($errors) >0)
    @foreach($error->all() as $error)
      <div class="alter alter-danger">
        {{$error}}
      </div>
    @endforeach
  @endif
  <div class="form-group">
    <span class="center-text alert alert-danger"  style="margin-left:200px; padding-top:27px; padding-bottom: 27px; border-radius: 14px !important;"> If you truly want to delete Property {{ $cmss->id }} please press the "DELETE" button. If not, return to the previous page </span>
       <input type="submit" value="DELETE" class="btn btn-sm btn-round btn-danger center-by-left" style="margin-top:38px;">
  </div>

<input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
