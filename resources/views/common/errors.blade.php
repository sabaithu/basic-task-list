@if(count($errors) >0)
   <div class="alert alert-danger">
   	   <strong>Woop! Something Wrong</strong>
   	   <br><br>
       @foreach($errors->all() as $error)
       <ul>
       		<li>{{ $error }}</li>
       </ul>
       @endforeach
   </div>
@endif