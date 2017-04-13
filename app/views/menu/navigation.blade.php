<div class="row js-navigation-container">
	@if($tags->count())
		<div class="col-lg-12">
			<div class="left-nav">
                <div class="left-nav__title">
                    TAGS MENU
                    <a href="/" class="btn btn-danger btn-xs left-nav__btn">все</a>
                </div>
                <ul class="left-nav__wrap">
                    @foreach($tags as $tag)
                        <li class="left-nav__item">
                            <a class="left-nav__link{{isCurrent('tags/'.$tag->slug)}}" href="{{url('tags/'.$tag->slug)}}">
                                {{ $tag->name }}
                                <span class="left-nav__count">({{$tag->trick_count}})</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
		</div>
	@endif
</div>

