@extends('layouts.viewMaster')

@section('content')
    <h1>view component Laravel</h1>
    <?php $arr = array('php','laravel','nodejs','java', '.net','reactjs', 'vuejs'); ?>
    

    {{--IF ELSE--}}
    <b>@@if : </b> 
    @if($tutorials != "")
        {!!'tutorial : '.$tutorials !!}
    @else
        {!!'không có hướng dẫn nào!<br/>'!!}
    @endif
    <br/>
    

    {{--FOR--}}
    <b>@@for : </b> 
    @for($i=0; $i<=10; $i++)
        {{$i}}
    @endfor()
    <br/>
    


    {{--FOREACH--}}
    <b>@@foreach : </b> 
    @if(!empty($arr))
        @foreach($arr as $value)
            {{$value}}
        @endforeach()
    @else
        {{'$arr[] empty'}}
    @endif
    <br/>




    {{--FORELSE--}}
    <b>@@forelse : </b> 
    @forelse ($arr as $value)
        {{--Bỏ qua biến nodejs--}}
        @continue($value == "nodejs")

        {{--Thoát khỏi vòng lặp khi biến $value == "reactjs" --}}
        @break($value == "reactjs")

        {{ $value }}
    @empty
        <p>No users</p>
    @endforelse
    <br/>


    

    <b>@@while : true</b> 
    {{--WHILE
    @while(true) 
        <p>I'm looping forever.</p>
    @endwhile()  
    --}}
    <br/>
    



    <b>@@php : </b> 
    @php
        echo "code php in laravel"
    @endphp
    <br/>


@endsection()

