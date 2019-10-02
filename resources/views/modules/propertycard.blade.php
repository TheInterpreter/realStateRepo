<div class="absolutist margin-top">
    @if (count($cmss) > 0)
    <h1 class="navbar-text margin-top center-by-left-sm subtitle">LIST OF PROPERTIES:</h1>
    @endif
    <div class="container">
        <br />
        <table class="table table-striped" id="list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Pictures</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Cost</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cmss as $cms)
                <tr>
                    <td>{{ $cms->id }}</td>
                    <td>{{ $cms->name }}</td>
                    <td>
                        <a class="btn btn-white" data-toggle="modal" data-target="#modal-pictures{{ $cms->id }}">pictures</a>
                    </td>
                    <td>{{ $cms->description }}</td>
                    <td>{{ $cms->address }}</td>
                    <td>{{ $cms->cost }}</td>
                    <td>
                        <a type="button" class="btn btn-success" href="{{ action('CmsController@edit', $cms['id'])}}">Edit</a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger" href="{{ action('CmsController@delete', $cms['id'])}}">Delete</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="d-flex justify-content-center">
      {{ $cmss->links() }}
    </div>
</div>

</tbody>
</table>

 @foreach($cmss as $cms)
<div class="modal fade" id="modal-pictures{{ $cms->id }}" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="carousel">
                                <div id="carousel{{ $cms->id }}" class="carousel slide" data-ride="carousel" data-interval="0">
                                    <div class="carousel-inner">
                                        @foreach($cms->images as $image) @if ($loop->index == 0)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="../uploads/{{ $image->picroute }} " alt="slide">
                                        </div>
                                        @endif @if ($loop->index != 0)
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="../uploads/{{ $image->picroute }} " alt="slide">
                                        </div>
                                        @endif @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel{{ $cms->id }}" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel{{ $cms->id }}" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
