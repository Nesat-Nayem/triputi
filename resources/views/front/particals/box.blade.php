<div class="product-default radius-md mb-30">
    <figure class="product-img">
      <a
        href="/property/{{ $value->slug }}"
        class="lazy-container ratio ratio-1-1"
      >
        <img
          class="lazyload"
          src="{{ url('') }}/{{ $value->thumbnail }}"
          data-src="{{ url('') }}/{{ $value->thumbnail }}"
        />
      </a>
    </figure>
    <div class="product-details">
      <h5 class="product-title">
        <a href="/property/{{ $value->slug }}"
          >{{ $value->title }}</a
        >
      </h5>
      <div class="product-price">
        <span class="">Rs.{{ $value->price }}</span></span>
      </div>
      <div
        class="d-flex align-items-center justify-content-between"
      >
        <span
          class="product-location icon-start"
          data-tooltip="tooltip"
          data-bs-placement="top"
          title="Location"
        >
          <i class="fal fa-map-marker-alt"></i>
          {{ $value->location }}
        </span>

        <ul
          class="product-info p-0 list-unstyled d-flex align-items-center"
        >
          <li
            class="icon-start"
            data-tooltip="tooltip"
            data-bs-placement="top"
            title="Area"
          >
            <i class="fal fa-vector-square"></i>
            <span>{{ $value->arrea }} Sq.ft.</span>
          </li>
        </ul>
      </div>
    </div>


        @if ($value->property_type == "latest_properties")
        @if(isset($value->category->title))<span class="label text-capitalize">{{ $value->category->title }} </span>@endif
        @elseif($value->property_type == "land_plot")
        @if(isset($value->plot_category))
            @if($value->plot_category == "na_plot")
            <span class="label text-capitalize"> {{ 'NA Plot' }}
                @else
                <span class="label text-capitalize">    {{ 'Agriculture Plot' }}</span>
            @endif
            @endif

        @endif

  </div>
