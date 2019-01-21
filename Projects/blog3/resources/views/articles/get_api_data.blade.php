<!-- articles -->
@extends('layouts.blank')

@section('content')

<!-- 	<div class="container" style="width: 100%;">
		<div class="panel panel-default">
			<div class="panel-heading">Worpress Posts
				<a class="btn btn-success pull-right" style="margin-top: 5px; ">+ Create Post</a>
			</div>
			<div class="panel-body">
				<table id="example" class="display" style="width: 100%;">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div> -->

	<!-- <div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modal Header</h4>
	      </div>
	      <div class="modal-body">
	        <p>Some text in the modal.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div> -->
	
<!-- Tutorial: https://www.youtube.com/watch?v=rGObWtjxGBc -->

	<button id="portfolio-posts-btn" onclick="getData();">
		Click
	</button>
	<div id="portfolio-posts-container"></div>

	<script type="text/javascript">

		var portfolioPostsBtn = document.getElementById("portfolio-posts-btn");
		var portfolioPostsContainer = document.getElementById("portfolio-posts-container");

		function getData()
		{
			// alert('hello');
			if(portfolioPostsBtn) {
				// portfolioPostsBtn.addEventListener("click", function() {
					// console.log("the button was clicked!");
					// alert('hello');
					var ourRequest = new XMLHttpRequest();
					ourRequest.open('GET', 'http://localhost/demo2/wp-json/wp/v2/posts');
					ourRequest.onload = function () {
						if(ourRequest.status >= 200 && ourRequest.status < 400) {
							var data = JSON.parse(ourRequest.responseText);
							// console.log(data);
							createHTML(data);
						}
						else {
							console.log("We connected to the server, but it returned an error.");
						}
					};

					ourRequest.onerror = function() {
						console.log("Connection error");
					};

					ourRequest.send();
				// });
			}
		}
		

		function createHTML(postsData)
		{
			alert('hello');

			var ourHTMLString = '';
			var i;
			for (i=0; i < postsData.length; i++) {
				ourHTMLString += '<h2>' + postsData[i].title.rendered + '</h2>';
				ourHTMLString += postsData[i].content.rendered;
			}
			portfolioPostsContainer.innerHTML = ourHTMLString;
		}

	</script>

@endsection