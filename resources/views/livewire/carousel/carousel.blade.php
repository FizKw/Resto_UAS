<div>
    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
          <img src="{{ asset('storage/' . $item1->food_image) }}" class="w-40" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a> 
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div> 
        <div id="slide2" class="carousel-item relative w-full">
          <img src="{{ asset('storage/' . $item2->food_image) }}" class="w-40" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a> 
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div> 
    </div>
</div>
