@extends('layouts.appmaster') @section('title','HomePage')

@section('content')
<div class="containerfull">
	
	
                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                            <th scope="col" class="col-3">School</th>
                               <th scope="col" class="col-3">Degree</th>
                                 <th scope="col" class="col-3">Field </th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($educations))
						@foreach ($educations as $e)
                             <td class="col-3">{{ $e['SCHOOL']}}</td>
                             <td class="col-3">{{ $e['DEGREE']}}</td>
                             <td class="col-3">{{ $e['FIELD']}}</td>
                   		@endforeach
                   		@endif 
                        </tbody>

                    </table>
                </div><!-- End -->
                
                
     
         <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
</div>
@endsection