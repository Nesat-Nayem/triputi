<div class="row">
    @foreach ($property as $value)
  <div class="col-lg-4 col-xxl-3 col-md-6">
    @include('front/particals/box', $value)
  </div>
  @endforeach


  @if($property->count() == 0)
    <div class="col-12">
        <p>Properties Not Found</p>
    </div>
  @endif


</div>
