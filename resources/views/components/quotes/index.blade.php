@if($quotes)
    <section class="quotes">
        @if(!empty(Request::segment(1)))
            <a href="{{ route('index') }}"><i class="fa fa-chevron-left"></i> Back to all</a>
        @endif

        <h1 class="quotes__title">Quotes</h1>

        <ul class="quotes__items card-deck card-columns">
            @foreach($quotes as $quote)
                <li class="quotes__item card">
                    <div class="quotes__card-header card-header">
                        <h5 class="quotes__card-title">{{ $quote->tag_line }}</h3>
                        <a href="{{ route('delete', ['quote_id' => $quote->id]) }}" class="quotes__item-close fa fa-trash"></a>
                    </div>
                    <div class="card-body">
                        <div class="quotes__text card-text">{{ $quote->quote }}</div>
                        <div class="quotes__info text-muted">
                            Created By: <a href="{{ route('index', ['author' => $quote->author->name]) }}">{{ $quote->author->name }}</a> on {{ date('F d, Y', strtotime($quote->created_at)) }}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $quotes->links('vendor/pagination/bootstrap-4') }}
    </section>
@endif