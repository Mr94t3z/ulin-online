@extends('template_backend.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div class="row">
                    @foreach($data as $post_terbaru)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-3 mb-lg-0 mt-3">
                        <div class="card card-info">
                            <div class="card-header">
                                <h4>{{ $post_terbaru->judul }}</h4>
                            </div>
                            <div class="card-body">
                                <img class="card-img-top mb-3" src="{{ $post_terbaru->gambar }}" alt="Card image cap">
                                <p>{{ $post_terbaru->content }}</p>
                                <p class="text-muted">{{ $post_terbaru->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
@endsection