@if (count($breadcrumbs))
    <div class="breadcrumbs">
        <nav class="flex" aria-label="Breadcrumbs">
            <ol role="list" class="flex items-center">
                @foreach ($breadcrumbs as $breadcrumb)
                    <li>
                        <div class="flex items-center">
                            @unless ($loop->first)
                                <span class="flex-shrink-0 text-edu-black hover:text-primary" aria-hidden="true">/</span>
                            @endunless

                            <a href="{{ $breadcrumb->url && !$loop->last ? $breadcrumb->url : '#' }}"
                                @if ($loop->last) aria-current="page" @endif
                                @class([
                                    'text-sm font-medium breadcrumb-item text-edu-black hover:text-primary-light',
                                    'ml-4' => !$loop->first,
                                    'hover:text-primary-light dark:hover:text-primary' => !$loop->last,
                                    'text-primary' => $loop->last,
                                    'pointer-events-none breadcrumb-item--active' => $loop->last,
                                ])>
                                {{ $breadcrumb->title }}
                            </a>
                        </div>
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
@endif
