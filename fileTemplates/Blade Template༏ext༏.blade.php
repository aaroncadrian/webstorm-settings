#if(${Extends} != '')
@extends('${Extends}')
#end
#if(${Section_Name} != '')

@section('${Section_Name}')
    #[[$END$]]#
@endsection
#else
#[[$END$]]#
#end