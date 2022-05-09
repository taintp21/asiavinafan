<script>
    jQuery('#header .search').click(function() {
        jQuery('#search-form').fadeIn(300);
    });
</script>
<div id="search-form" style="display: none;">
    <div class="container">
        <div class="close-button fs-25 ta-r c-white mt-50 cs-pointer">
            <i class="fa-solid fa-xmark"></i>
        </div>

        <h2 class="ta-c fs-35 mt-50 mb-50">What are you looking for?</h2>

        <div class="row">
            <div class="col col-lg-8 offset-lg-2 va-m">
                <form action="{{ route('search') }}" method="GET">
                    <div class="col-auto mb-20">
                        <label class="sr-only" for="input-search">Search in Asiavina</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <input type="text" name="s" class="form-control" placeholder="Search in Asiavina">
                        </div>
                    </div>
                    <div class="mt-10">
                        @forelse ($categories as $r)
                            <a href="{{url('product-category/'.$r->slug)}}" class="btn btn-sm btn-outline-light ml-10 mb-10">{{$r->name}}</a>
                        @empty

                        @endforelse
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery('#search-form .close-button').click(function() {
        jQuery('#search-form').fadeOut(300);
    });
</script>
