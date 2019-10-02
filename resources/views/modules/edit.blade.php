<form class="margin-top solid-element absolutist" action="{{action('CmsController@update', $id)}}" method="post"enctype="multipart/form-data"> 
  @if(count($errors) >0) 
    @foreach($error->all() as $error) 
      <div class="alter alter-danger"> 
        {{$error}}                                   
      </div> 
    @endforeach 
  @endif 
  <div class="form-group"> 
    <label for="property-name" class="bmd-label-floating center-by-left-sm">PROPERTY NAME</label> 
    <input type="string" class="form-control" id="property-name" name="property-name" value="{{$cmss->name}}"> 
  </div> 
    <div class="form-group"> 
    <label for="property-address" class="bmd-label-floating center-by-left-sm">PROPERTY ADDRESS</label> 
    <input type="string" class="form-control" id="property-address" name="property-address" value="{{$cmss->address}}"> 
  </div> 
      <div class="form-group"> 
    <label for="property-cost" class="bmd-label-floating center-by-left-sm">PROPERTY COST</label> 
    <input type="string" class="form-control" id="property-cost" name="property-cost" value="{{$cmss->cost}}"> 
  </div> 
  <div class="form-group"> 
    <label for="property-description" class="bmd-label-floating center-by-left-sm">PROPERTY DESCRIPTION</label> 
    <input type="string" class="form-control" id="property-description" name="property-description" value="{{$cmss->description}}"> 
  </div> 
  <br> 
    <input type="file" accept="image/*" name="image" data-toggle="tooltip" data-placement="top" title="UPLOAD HERE MORE PICTURES OF THE PROPERTY (Preferred format of 700*900)" class="margin-top-sm"> 
  <br> 
<h4>In order to Delete photos of the properties, delete the entire property and create it again, using only the desired photos.</h4> 
<a class="btn btn-primary btn-sm" href="/cms">cancel</a>
<input type="submit" value="Upload" class="btn btn-sm btn-round btn-primary center-by-left"> 
<input type="hidden" value="{{ csrf_token() }}" name="_token"> 
</form> 