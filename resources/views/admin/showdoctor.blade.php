<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      
       @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">


        	<div align="center" style="padding-top: 100px 50px;">

        		<table>
        			<tr style="background-color:black;">
        				<th style="padding:10px">Doctor Name</th>
    					<th style="padding:10px">Phone</th>
    					<th style="padding:10px">Specility</th>
    					<th style="padding:10px">Room No</th>
    					<th style="padding:10px">Image</th>
    				</tr>

    				@foreach($data as $doctor)

    				<tr>
    					<td>{{$doctor->name}}</td>
    					<td>{{$doctor->phone}}</td>
    					<td>{{$doctor->specility}}</td>
    					<td>{{$doctor->room}}</td>
    					
    				</tr>

    				@endforeach
        		
        	</div>

        </div>

        
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>
