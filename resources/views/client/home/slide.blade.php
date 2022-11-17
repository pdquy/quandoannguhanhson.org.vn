<div class="col-lg-8 col-md-8 col-sm-8">

  <div class="slick_slider">

    

    @foreach ($slides as $element)

          <div class="single_iteam"> <a href="{{ $element->link }}"
              @if ($element->tab == 0)
                    target="_blank" 
                  @endif
            > <img src="{{ asset('uploads/images/slides') }}/{{ $element->image }}" alt="{{ $element->image }}"></a>

            <div class="slider_article">

              <h2><a class="slider_tittle" href="{{ $element->link }}" 
                  
                  @if ($element->tab == 0)
                    target="_blank" 
                  @endif

                >{{ $element->title }}</a></h2>

              <p>{{ cutTitle($element->summary, 30) }}</p>

            </div>

          </div>

        @endforeach

    

  </div>

</div>





