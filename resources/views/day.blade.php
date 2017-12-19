@extends('layouts.temhome')

@section('day')
	@forelse([] as $panier)
		<div class="numbersdiv">
			<a class="dropdown-item" data-toggle="modal" data-target="#exampleModal2" href="#">1</a>
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
			<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Créer mon calendrier de l'avent</a>
		</div>
	@endforelse
@endsection

@section('modal')
	@foreach([] as $panier)
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Êteoir vous déconnecter ?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Si vous souhaitez vous déconnecter, cliquez sur Déconnexion.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
						<a class="btn btn-primary" href="../controlers/indexLogout.php">Déconnexion</a>
					</div>
				</div>
			</div>
		</div>
	@endforeach
@endsection