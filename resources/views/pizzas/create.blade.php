@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create an New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg supreem</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin & crispy">Thin & crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label for="toppings">Extra topiings</label>
            <input type="checkbox" name="toppings[]" id="mushrooms" value="mushrooms">Mushrooms</br>
            <input type="checkbox" name="toppings[]" id="peppers" value="peppers">Peppers</br>
            <input type="checkbox" name="toppings[]" id="garlic" value="garlic">Garlic</br>
            <input type="checkbox" name="toppings[]" id="olives" value="olives">Olives</br>

        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection