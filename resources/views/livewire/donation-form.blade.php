<div>
	<x-larastrap::form id="donation_form" formview="horizontal" label_width="4" input_width="8" wire:submit.prevent="submit">
		@error('email')
		<x-larastrap::text classes="is-invalid" name=email label="Email *" wire:model="email" :errors="$errors->first('email')" />
			@else
		<x-larastrap::text name=email label="Email *" wire:model="email" :errors="$errors->first('email')" />
		@enderror
		@error('name')
		<x-larastrap::text classes="is-invalid" name=name label="Name *" wire:model="name" :errors="$errors->first('name')"/>
			@else
		<x-larastrap::text name=name label="Name *" wire:model="name" :errors="$errors->first('name')"/>
		@enderror
		@error('city')
		<x-larastrap::text classes="is-invalid" name=city label="City *"/>
			@else
		<x-larastrap::text name=city label="City *"/>
		@enderror
		@error('address')
		<x-larastrap::text classes="is-invalid" name=address label="Address *"/>
			@else
		<x-larastrap::text name=address label="Address *"/>
		@enderror
		<div class="text-primary fs-smaller-1 text-start">* Полетата със звездичка са задължителни</div>
	</x-larastrap::form>
</div>