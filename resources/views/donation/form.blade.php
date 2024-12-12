<x-layout>
	<x-slot:title>
		Форма за дарения
	</x-slot:title>
<h1 class="text-center">Donation Form</h1>
<div class="container">

	<div class="card text-center">
		<div class="card-body">
			<h4 class="card-title">My donation</h4>
			<div class="card-text p-3">
				<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
					<input type="radio" class="btn-check" name="btnradio-period" id="btnradio-period" autocomplete="off" checked>
					<label class="btn btn-outline-primary" for="btnradio-period">One Time</label>

					<input type="radio" class="btn-check" name="btnradio-period" id="btnradio2-period" autocomplete="off">
					<label class="btn btn-outline-primary" for="btnradio2-period">Monthly</label>
				</div>
			</div>
			<div class="card-text">
				By supporting GAIA through a gift, you are contributing to our fight to make animal welfare an important issue.
			</div>
			<div class="card-text p-3">
				<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
					<input type="radio" class="btn-check" name="btnradio-amount" id="btnradio1-amount" autocomplete="off" checked>
					<label class="btn btn-outline-primary" for="btnradio1-amount">&euro;25</label>

					<input type="radio" class="btn-check" name="btnradio-amount" id="btnradio2-amount" autocomplete="off">
					<label class="btn btn-outline-primary" for="btnradio2-amount">&euro;40</label>

					<input type="radio" class="btn-check" name="btnradio-amount" id="btnradio3-amount" autocomplete="off">
					<label class="btn btn-outline-primary" for="btnradio3-amount">&euro;64</label>

					<input type="radio" class="btn-check" name="btnradio-amount" id="btnradio4-amount" autocomplete="off">
					<label class="btn btn-outline-primary" for="btnradio4-amount">&euro;1,500</label>
				</div>
			</div>
		</div>
	</div>
	
</div>

@push('styles')
	<style>
		.container{
			background-color: rgba(211, 211, 211, 0.288);
		}
		.container > .card{
			max-width:50rem;
			margin:6rem auto;
		}
	</style>
@endpush
</x-layout>