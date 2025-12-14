@extends('layouts.app')

@section('content')
<h1>Add New Expense</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('expenses.store') }}" method="POST">
    @csrf
    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        <label>Amount:</label>
        <input type="number" step="0.01" name="amount" value="{{ old('amount') }}">
    </div>

    <div>
        <label>Category:</label>
        <select name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Payment Method:</label>
        <select name="paymentmethod_id">
            @foreach ($paymentmethods as $paymentmethod)
            <option value="{{ $paymentmethod->id }}" {{ old('paymentmethod_id') == $paymentmethod->id ? 'selected' : '' }}>
            {{ $paymentmethod->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Date:</label>
        <input type="date" name="date" value="{{ old('date') }}">
    </div>

    <button type="submit">Add Expense</button>
</form>

@endsection
