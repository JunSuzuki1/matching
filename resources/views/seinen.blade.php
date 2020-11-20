@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="accordion" class="col-md-8">
        </div>
						<div class="card-columns">
                    @auth
						@foreach ($seinenList as $seinen)
            	<div class="card">
                <div class="card-body">
					<h5 class="card-title">{{ $seinen->username }} ({{ $seinen->old}}歳) 希望:{{ $seinen->wantold }}代</h5>
					<h6 class="card-subtitle mb-2 text-muted">{{ $seinen->area }}</h6>
					<p class="card-text">{{ $seinen->description }}</p>
				</div>
				</div>
						@endforeach
					@else
				<div class="card ">
				<div class="card-body">
                　　	<h5 class="card-title">青年を探す(淑女向け)</h5>
					    <h6 class="card-subtitle mb-2 text-muted">閲覧するには、ログインしてください。</h6>
					    <a href="{{ route('login')}}" class="btn btn-primary">ログイン</a>
				</div>
				</div>
					@endauth
					</div>
					
					
    </div>
</div>
@endsection