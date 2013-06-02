

<div class="page-header">
	<h1>Womble 2013 <small>Bookings</small></h1>
</div>

<div class="row">
	<div class="span7">

		{{ $activity_list }}

	</div>
	<div class="offset1 span4">
  @if (Config::get('app.registerable', true))
		<label for="inputGroupContactEmail"><h2>Already registered?</h2></label>
  @else
    <label for="inputGroupContactEmail"><h2>Group Sign In</h2></label>
  @endif

		{{ Form::open(['action' => 'GroupController@find']) }}
		{{ Form::email('contact_email', null, ['placeholder' => 'Group Contact Email', 'id' => 'inputGroupContactEmail', 'class' => 'span4', 'required']) }}
		<div class="row">
			<span class="span3">{{ Form::password('hash', ['placeholder' => 'Group Code', 'class' => 'input-block-level', 'required']) }}</span>
			<span class="span1"><button class="btn btn-primary">Login</button></span>
		</div>

		{{ Form::close() }}

  @if (Config::get('app.registerable', true))
		<h2>Register today!</h2>
		<a href="{{ URL::action('GroupController@create') }}" class="btn btn-block btn-large btn-success">Register your group</a>
  @endif

	</div>
</div>
