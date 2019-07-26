@php
$show = strlen($status)<32?"Your package with reference number ".$reference." ".$status:$status
@endphp
{{$show}}