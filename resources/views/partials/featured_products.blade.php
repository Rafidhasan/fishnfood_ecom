<div class="row">
    <div class="categories__slider owl-carousel">
        @foreach ($featured_items as $item)
        <div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="{{ asset('uploads/images/' . $item->image) }}">
                <h5><a href="#">{{ $item -> name }}</a></h5>
            </div>
        </div>
        @endforeach
    </div>
</div>
