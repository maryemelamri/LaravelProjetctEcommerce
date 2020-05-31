@component('mail::message')
 


<strong> NOM :</strong> {{$data['name']}}
<strong> EMAIL :</strong> {{$data['email']}}
<strong>  MESSAGE :</strong> 
{{$data['message']}}


@endcomponent
