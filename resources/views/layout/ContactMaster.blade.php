<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{csrf_token() }}" >
	<title>@yield('title','Master Title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
</head>
<body>
	<div class="container">

		<div class="row mt-4">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
				<div class="bg-success">
					@yield('contact-title')	

				</div>
				
			</div>
		</div>



		<!-- left right -->

		<div class="row">


			<div class="col-12 col-sm-5 col-md-5 mt-1">
				<div class="left-div bg-success">
					@yield('left-div')
				</div>
			</div>


			<div class="col-12 col-sm-7 col-md-7 mt-1">
				<div class="right-div bg-success default-pd">
					@yield('right-div')
				</div>
			</div>
		</div>


		
	</div>


	<script type="text/javascript" src="{{asset('js/all.js')}}"></script>
	<script type="text/javascript">
		$('#AddContact').on('click',function(e){
			e.preventDefault();
			//console.log('ok');
			showModal('add');

		});

	</script>
</body>
</html>