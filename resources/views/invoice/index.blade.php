@extends('layouts.main')

@section('title', 'Invoices')
@section('header', 'Invoices')


@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Customer</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($invoices as $invoice)
        <tr>
            <td>
                {{$invoice->InvoiceId}}
            </td>
            <td>
                {{date_format(date_create($invoice->InvoiceDate), 'n/j/Y')}}
            </td>
            <td>
                {{$invoice->FirstName}} {{$invoice->LastName}}
            </td>
            <td>
                ${{$invoice->Total}} 
            </td>
            <td>
                <a href="/invoices/{{$invoice->InvoiceId}}">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection