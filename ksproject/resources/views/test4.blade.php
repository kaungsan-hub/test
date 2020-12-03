<h1>  Test4.... </h1>
<p>  Testview.......{{ $p }} </p>
<p>  Testview.......{{ $q }} </p>

<?php
if($p>$q){
    echo "$p<br>";
}else{
    echo"$q<br>";
}
?>

@if($p<$q)
    {{$p}}
@else
{{$q}}
@endif