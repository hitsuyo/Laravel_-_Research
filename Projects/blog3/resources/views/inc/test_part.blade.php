<!-- Use for Vue js -->
	<div id="app">
		<div class="container">
		  <user-name name="Flavio"></user-name>
		  <user-name name="Roger"></user-name>
		  <user-name name="Syd"></user-name>
		</div>

		<div class="container">
			<nihon-go todo="ひらがな - hiragana" ji="A"></nihon-go>
			<nihon-go todo="カタカナ - katakana" ji="A"></nihon-go>
			<nihon-go todo="漢字 - kanji" ji="A"></nihon-go>
		</div>

		<div class="container">
			@section('content')
				<fullstack></fullstack>
			@endsection
		</div>
	</div>
<!-- end Use for Vue js -->

