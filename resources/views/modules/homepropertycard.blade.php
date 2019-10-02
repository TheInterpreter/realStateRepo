
   <div class="margin-bottom" id="background">
     @if (count($cmss) > 0)
      <div class="cataloguetitle">
          <h2 class="margin-top-sm timesfont">MOST POPULAR HOMES</h2>
          <br>
      </div>
      @endif

          <div class="margin-top z-index d-flex flex-wrap justify-content-center" id="regular-screen">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible navbar-text margin-top center-by-left-sm subtitle center-text">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <h1>{{ session('status') }}</h1>
            </div>
            @endif

            @foreach($cmss as $cms)
            @if ($loop->index == 0)
            <div class="card border-radius  col-11 col-sm-5 col-xl-3" id="first">
              <div class="card-header z-index card-header-success center-text">
              {{ $cms->name }}
              </div>
            @endif
            @if ($loop->index != 0)
            <div class="card border-radius  col-11 col-sm-5 col-xl-3" id="second">
              <div class="card-header z-index card-header-success center-text">
              {{ $cms->name }}
              </div>
            @endif
              <div class="card-body filler">
                <div class="carousel z-index-before">
                  <div id="carousel{{ $cms->id }}" class="carousel slide" data-ride="carousel" data-interval="0">
                    @foreach($cms->images as $image)
                    @if ($loop->index == 0)
                    <div class="carousel-item active">
                        <img class="d-block" src="uploads/{{ $image->picroute }} " alt="slide">
                    </div>
                    @endif
                    @if ($loop->index != 0)
                    <div class="carousel-item">
                        <img class="d-block" src="uploads/{{ $image->picroute }} " alt="slide">
                    </div>
                    @endif
                    @endforeach
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

                {{-- <h4 class="card-title">Description:</h4> --}}
                <p class="card-text">{{ $cms->description }}</p>

                <h4 class="card-title">Address:</h4>
                <p class="card-text">{{ $cms->address }}</p>

                <h4 class="card-title">Cost:</h4>
                <p class="card-text">{{ $cms->cost }}</p>
              </div>
            </div>
            @endforeach
          </div>
          <div class="d-flex justify-content-center">
            {{ $cmss->links() }}
          </div>
        </div>
    </tbody>
</table>
