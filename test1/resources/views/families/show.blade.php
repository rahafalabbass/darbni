@foreach($familiess as $family)
<div>
    <h5>FULL NAME:  {{$family->firstname}} ."  ".{{$family->midname}}."  ".{{$family->lastname}}</h5>
    <h5>the personal numper: {{$family->num}}</h5>
    <h5>the personal numper: {{$family->num}}</h5>
</div>
@endforeach