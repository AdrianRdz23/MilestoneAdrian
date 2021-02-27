@extends('layouts.appmaster') @section('title','HomePage')

@section('content')
<div class="containerfull">
	
	
                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                            <th scope="col" class="col-3">Skill</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($users))
						@foreach ($users as $u)
                             <td class="col-3">{{ $u['SKILL']}}</td>
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