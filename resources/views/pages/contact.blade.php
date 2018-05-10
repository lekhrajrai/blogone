@extends('layout.ContactMaster')

@section('title')
Contact 
@endsection



@section('contact-title')
<p class="default-pd">
	Contact 
	<button class="btn btn-sm btn-warning float-right" data-target="#myModal" data-toggle="modal" id="AddContact">Add</button>
</p>


<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
						
	<div class="modal-dialog" id="ModalBody" role="document"> 

	</div> 
</div>

@endsection







@section('left-div')
	<ul>
		<li>name list</li>
		<li>name list</li>
		<li>name list</li>
		<li>name list</li>
		<li>name list</li>
	</ul>
@endsection


@section('right-div')
	<h1>this is right div to show result</h1>
@endsection