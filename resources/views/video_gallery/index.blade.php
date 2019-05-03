@extends("layouts.app")

@section('title', 'Galeria de Videos')

@section('content')

{{-- <div class="owl-carousel">
    <div class="item-video" data-merge="3"><a class="owl-video" href="https://www.youtube.com/watch?v=bnCT0GXgLJg"></a></div>
    <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a></div>
    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=FBu_jxT1PkA"></a></div>
    <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=oy18DJwy5lI"></a></div>
    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
    <div class="item-video" data-merge="3"><a class="owl-video" href="https://www.youtube.com/watch?v=g3J4VxWIM6s"></a></div>
    <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=0fhoIate4qI"></a></div>
    <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=EF_kj2ojZaE"></a></div>
</div> --}}

<div class="container">
    <div class="owl-carousel owl-theme">
        <div class="item-video" data-merge="3">
            <a class="owl-video" href="https://www.youtube.com/watch?v=bnCT0GXgLJg"></a>
        </div>
    </div>
</div>

@push('scripts')
<script>
     $('.owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:false,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
</script>
@endpush
@endsection
