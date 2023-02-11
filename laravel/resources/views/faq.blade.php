@extends('layout/master')

@section('content')
<section class="flex flex-col">
    <div class="basis-auto">
        <img src="{{ URL::to('/') }}/assets/img/antipungli.webp" alt="" class="w-full">
    </div>

    <script src="{{URL::to('/')}}/assets/js/glide.js"></script>

    <script>
        
        new Glide('.multi', {
          type: 'carousel',
          autoplay: 3500,
          perView: 2,
          breakpoints: {
                800: {
                    perView: 1
                }
            }
        }).mount();
          </script>
</section>
@endsection


@section('script')
@endsection