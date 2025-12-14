@extends('layouts.app')

@section('content')
<h1>Expenses List</h1>

<a href="{{ route('expenses.create') }}" class="btn btn-primary">Add New Expense</a>

@if($expenses->isEmpty())
<p>No expenses yet.</p>
@else
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Amount</th>
        <th>Category</th>
        <th>Payment Method</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($expenses as $expense)
    <tr>
        <td>{{ $expense->name }}</td>
        <td>{{ $expense->amount }}</td>
        <td>{{ $expense->category->name }}</td>
        <td>{{ $expense->paymentMethod->name }}</td>
        <td>{{ $expense->date }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endif
@endsection
