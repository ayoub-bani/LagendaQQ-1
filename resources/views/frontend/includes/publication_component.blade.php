{{-- <div class="col-lg-4 col-md-12 mb-4" style="">
    <div class="tw-latest-post">
        <div class="latest-post-media text-center">
            @if(class_basename(@$item) === 'Event')
            <a href="{{route('page_evenement',@$item->slug)}}"><img src="{{ route('show_image',@$item->images) }}"
    alt="{{@$item->title}}"></a>
@else
<a href="{{route('page_annonce',@$item->slug)}}"><img src="{{ route('show_image',@$item->images) }}"
        alt="{{@$item->title}}"></a>
@endif
</div>
<!-- End Latest Post Media -->
<div class="post-body">
    <div class="post-item-date">
        <div class="post-date {{class_basename(@$item) === 'Event'? 'event':''}}">
            <span class="date">{{date('d', strtotime(@$item->published_at))}}</span>
            <span class="month">{{$month_array[intval(date('m', strtotime(@$item->published_at)))] }}</span>
        </div>
    </div>
    <!-- End Post Item Date -->
    <div class="post-meta">
        <span class="post-author">
            Par <a href="{{route('user_profile',@$item->owned)}}">{{@$item->owned->prenom}}
                {{@$item->owned->name}}</a>
            <div class="contenu-type {{class_basename(@$item) === 'Event' ? 'event':''}}">
                {{class_basename(@$item) === "Event" ? 'Evénement':"Annonce"}}
            </div>
        </span>
    </div>
    <div class="post-info">

        <!-- End Post Meta -->
        <h3 class="post-title">
            @if(class_basename(@$item) === 'Event')
            <a href="{{route('page_evenement',@$item->slug)}}">{{@$item->title}}</a>
            @else
            <a href="{{route('page_annonce',@$item->slug)}}">{{@$item->title}}</a>
            @endif
        </h3>
        <div class="entry-content">
            <p> </p>
        </div>
        <div class="post-emplacements-meta">
            @if(class_basename(@$item) === 'Event')
            <div class="post-emplacements">
                <span class="redion">{{@$item->city->name}}</span> -
                <span class="city">{{@$item->region->name}}</span>
            </div>
            @endif
        </div>
        <!-- End Entry Content -->
    </div>
    <!-- End Post info -->
</div>
<!-- End Post Body -->
</div>
</div> --}}

<!-- card start -->
<div class="card border-0 shadow rounded-lg" style="width: 18rem;">
    <img src="{{ route('show_image',@$item->images) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            @if(class_basename(@$item) === 'Event')
            <a href="{{route('page_evenement',@$item->slug)}}">{{@$item->title}}</a>
            @else
            <a href="{{route('page_annonce',@$item->slug)}}">{{@$item->title}}</a>
            @endif
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's
            content.</p>
    </div>
</div>
<!-- card end -->