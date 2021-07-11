@extends('layouts.app')
@section('content')
<div id="dashboard">
    <div class="sidabar">
            <info-comp>  </info-comp>
            {{-- <infoComp></infoComp> --}}
    </div>
    {{-- <div class="main"></div> --}}
    <div class="main mt-5">
        <h1>contacts</h1>
        @if ($cons->count() == 0 )
        <div class="card">
            there is no messages
        </div>            
        @endif
        @foreach ($cons as $con)
        <div class="card" style="width: 70%;">
            <div class="card-body">
                <h5 class="card-title"><b>Name : </b> {{$con->name}}  </h5>
                <h6 class="card-title">Email : </b> {{$con->email}} </h6>
                <h6 class="card-title">Phone : </b> {{$con->phone}} </h6>
                <h6 class="card-title">Address : </b> {{$con->addr}} </h6>
                <p class="card-text">{{$con->msg}}</p>
                <form action="{{route('contacts.remove')}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="delete" /> 
                        <input type="hidden" name="id" value="{{$con->id}}" /> 
                    <button class="btn btn-danger" type="submit"><i class="fa-lg fa fa-trash mr-3"></i>delete</button>
                </form>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>
            
        @endforeach
        {{ $cons->links() }}
    </div>   
</div>
@endsection

@include('dashboard.modal')