<div class="hero__categories">
    <div class="hero__categories__all">
        <i class="fa fa-bars"></i>
        <span>All departments</span>
    </div>
    <ul>
        @foreach ($categories as $category)
            <li><a href="">{{$category->name}}</a></li>
        @endforeach
        <li class="dropdown">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All categories
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($dropdownCategories as $dropdownCategory)
                        <a class="dropdown-item" href="#">{{ $dropdownCategory->name }}</a>
                    @endforeach
                </div>
            </div>
        </li>
    </ul>
</div>
