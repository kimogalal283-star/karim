@extends(view:'layouts.style')
@section(section:'title')
add courses
@endsection
@section(section: 'body')
<form method="post" action="{{ route(name:'courses.store') }}" enctype="multipart"
<div class="mb-3"> 
<label for="exampleFormControlInput1" class="form-label">Course Name</label>
<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter coures name">
 </div>

<div class="mb-3"> 
<label for="exampleFormControlInput1" class="form-label">Course Name</label>
<input type="file" class="form-control"name="image" id="exampleFormControlInput1" placeholder="enter coures name">
 </div>


<div class="mb-3">
 <label for="exampleFormControlTextareal" class="form-label"> description</label>
<textarea class="form-control" name="description" id="exampleFormControlTextareal"placeholder="enter coures name" rows="3"></textarea>
 </div>
<div class="mb-3">
 <label for="exampleFormControlTextareal" class="form-label"> price</label>
<textarea class="form-control" name="?" id="exampleFormControlTextareal"placeholder="enter coures name" rows="3"></textarea>
 </div>

@endsection