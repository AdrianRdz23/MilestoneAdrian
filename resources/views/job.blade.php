@extends('layouts.appmaster') @section('title','HomePage')

@section('content')
<div class="containerfull">
	
	
                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                            <th scope="col" class="col-3">Title</th>
                               <th scope="col" class="col-3">Company</th>
                               <th scope="col" class="col-3">Description </th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($jobs))
						@foreach ($jobs as $j)
                             <td class="col-3">{{ $j['TITLE']}}</td>
                             <td class="col-3">{{ $j['COMPANY']}}</td>
                             <td class="col-3">{{ $j['DESCRIPTION']}}</td>
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