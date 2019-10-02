<form class="margin-top solid-element absolutist container border-radius" action="{{action('CmsController@store')}}" method="post" enctype="multipart/form-data">
  @if(count($errors) >0)
    @foreach($error->all() as $error)
      <div class="alter alter-danger">
        {{$error}}
      </div>
    @endforeach
  @endif
  <div class="row">
    <div class="col-12 col-sm-5 col-md-4">
      <div class="form-group ">
        <label for="property-name" class="bmd-label-floating  ">PROPERTY NAME</label>
        <input type="string" class="form-control" id="property-name" name="property-name" required>
        <span class="bmd-help">In case it doesn't have a name, just put the address</span>
      </div>
    </div>
    <div class="col-12 col-sm-7 col-md-6">
      <div class="form-group ">
        <label for="property-address" class="bmd-label-floating  ">PROPERTY ADDRESS</label>
        <input type="string" class="form-control" id="property-address" name="property-address" required>
        <span class="bmd-help">Put the address even if you used it as name</span>
      </div>
    </div>
    <div class="col-12 col-sm-4 col-md-2">
      <div class="form-group ">
        <label for="property-cost" class="bmd-label-floating  ">PROPERTY COST</label>
        <input type="string" class="form-control" id="property-cost" name="property-cost" required>
        <span class="bmd-help">Payment expected + our fees</span>
      </div>
    </div>
    <div class="col-12">
      <div class="form-group">
        <label for="property-description" class="bmd-label-floating  ">PROPERTY DESCRIPTION</label>
        <input type="string" class="form-control" id="property-description" name="property-description" required>
        <span class="bmd-help">Begin saying bedrooms() kitchen() bathroom() garden() livingroom() and continue with other areas</span>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-12 col-lg-3 d-flex align-items-end">
      <div class="mb-3">
        <input type="file" accept="image/*" name="image[]" data-toggle="tooltip" data-placement="top" title="UPLOAD HERE PICTURES OF THE PROPERTY" class="" data-multiple-caption="{count} files selected" id="CustomFile" multiple>
      </div>
    </div>
  </div>
  <input type="submit" value="Upload" class="btn btn-round btn-primary">
  <a class="btn btn-round btn-danger" title="back" href="/cms" data-original-title="Go Back" value="back">
Back
  </a>
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
