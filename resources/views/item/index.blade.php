@extends('base')

@section('content')
<div class="d-flex align-items-center justify-content-between mt-5">
    <h2 class="mb-0">Items</h2>
    <a href="/items/create" class="btn btn-primary btn-sm">Add Item</a>
</div>
<hr class="mt-2 mb-0">
<table class="table table-striped">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Category</th>
        <th>Available Qty</th>
        <th>Price</th>
        <th>Action</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Brown Envelope</td>
            <td>School Supplies</td>
            <td>356</td>
            <td>P5.00</td>
            <td>
                <a href="#" class="text-primary">Edit</a>
                <a href="#" class="text-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
