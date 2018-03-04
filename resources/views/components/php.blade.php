@extends('layouts.viewMaster')

@section('content')
    <h1>view component PHP</h1>

    <?php echo $tutorials ?> <br/> 
    {{-- 
        {{}}     không nhận tag HTML
        {!!!!}   nhận tag HTML
    --}}
    {{$tutorials}}   <br/>   
    {!!$tutorials!!}   
    
    

@endsection()