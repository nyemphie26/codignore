@extends('template.main')

@section('content')
    <h1>Category: {{ $category->title }}</h1><br>
    <div class="row">
        @foreach ($posts as $item)
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="{{ asset($item->image) }}" alt="Card image cap">
                <div class="card-body">
                <h4 class="card-title">{{ $item->title }}</h4>
                <p class="card-text">{{ $item->excerpt }}</p>
                <div class="text-center">
                    <a href="{{ $item->products_url }}" class="btn btn-outline-danger btn-round" data-toggle="tooltip" data-placement="bottom" title="Live Preview">
                        <i class="nc-icon nc-tv-2"></i>
                    </a>
                    <a href="{{ route('blog.read',[$category->slug,$item->slug]) }}" class="btn btn-outline-danger btn-round" data-toggle="tooltip" data-placement="bottom" title="Details Product">
                        <i class="nc-icon nc-align-center"></i>
                    </a>
                </div>
                {{-- <button type="button" class="btn btn-outline-danger btn-round" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="On bottom">On bottom</button> --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('javascript')
    <script>
        $('#example').tooltip(options)
    </script>
@endsection