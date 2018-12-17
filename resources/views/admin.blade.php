@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ADMIN Dashboard</div>

                   <div class="row">
                       <h1>History of all Online Users:</h1>
                       <table>
                           @foreach($users as $user)


                               <tr>
                                   @if($user->is_active)
                                       <div class = "container ">   <td>{{$user->id}}</td></div>
                                   <td>{{$user->email}} </td>
@endif

                               </tr>
                               @endforeach
                       </table>
                   </div>



                    <div class="panel-body">
                        @component('components.who')
                        @endcomponent
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection