@if($lists->count() > 0)
<div class="shares-wrapper">
    <div class="shares-grid">
        @foreach($lists as $list)
        <div class="share-card">
            <div class="share-card__header">
                <span class="share-card__title">Unlisted shares — tentative rates</span>
                <span class="share-card__date">
                    {{ \Carbon\Carbon::parse($list->for_date)->format('d-m-Y') }}
                </span>
            </div>
            <div class="share-card__col-headers">
                <div class="col-header">Script name</div>
                <div class="col-header col-header--center">Face value</div>
                <!-- <div class="col-header col-header--center">Landing price</div> -->
            </div>
            <div class="share-card__body">
                @if($list->items->count() > 0)
                @foreach($list->items as $index => $item)
                <div class="share-row {{ $loop->even ? 'share-row--alt' : '' }}">
                    <div class="share-cell share-cell--script">
                        {{ $item->script_name ?? '—' }}
                    </div>
                    <div class="share-cell share-cell--center">
                        {{ $item->face_value ?? '—' }}
                    </div>
                    <div class="share-cell share-cell--price">
                        <button class="theme-btn one btn-sm"
                        data-scriptName="{{ $item->script_name ?? '—' }}"
                        data-faceValue="{{ $item->face_value ?? '—' }}"
                        data-route="{{ route('interested-shares-enquiry') }}"
                        data-ajax-modal-shares="true"
                        >
                            I am interested
                        </button>
                    </div>
                </div>
                @endforeach
                @else
                <div class="share-empty">No data available</div>
                @endif
            </div>

        </div>
        @endforeach
    </div>
</div>
@endif