@extends('layouts.temhome')

@section('day')
	@forelse($calendars as $calendar)
		<div class="numbersdiv">
			<a class="dropdown-item" data-toggle="modal" data-target="#exampleModal{{ $calendar->id }}" href="#">{{ $calendar->date_calendar }}</a>
		</div>
	@empty
		<div class="col-lg-10 mx-auto">
			<h1 class="text-uppercase">
				<strong>Calendrier de l'avent</strong>
			</h1>
			<hr>
		</div>
		<div class="col-lg-8 mx-auto">
			<p id="paraelse" class="text-faded mb-5">Créez votre calendrier, personnalisez le, et générez aléatoirement une blague chaque jour !</p>
			<a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('register') }}">Créer mon calendrier de l'avent</a>
		</div>
	@endforelse
@endsection

@section('modal')
	@foreach($calendars as $calendar)
		<div class="modal fade" id="exampleModal{{ $calendar->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">La blague du jour bonjour</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">{{ $calendar->content }}</div>
				</div>
			</div>
		</div>
	@endforeach
@endsection
