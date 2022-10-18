
    @foreach($companies as $comp)

        <li style="padding-left: {{ $hierarchy * 20 }}px">{{ $comp->name }}</li>
        @if(count($comp->subcompanies))
            @include('company.list', ['companies' => $comp->subcompanies, 'hierarchy' => $hierarchy + 1])
        @endif

    @endforeach
