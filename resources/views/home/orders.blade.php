@extends('layout.home')

@section('title', 'Orders')

@section('content')
<!-- Checkout -->
<section class="section-wrap checkout pb-70">
    <div class="container relative">
        <div class="row">

            <div class="ecommerce col-xs-12">
                <h2>PEMBAYARAN</h2>
                <table class="table table-ordered table-hover table-striped">
                    <thead>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nominal Transfer</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($payments as $index => $payment)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$payment->created_at}}</td>
                            <td>Rp. {{number_format($payment->jumlah)}}</td>
                            <td>{{$payment->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <h2>PESANAN</h2>
                <table class="table table-ordered table-hover table-striped">
                    <thead>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $order)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>Rp. {{number_format($order->grand_total)}}</td>
                            <td>{{$order->status}}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <form action="/pesanan_selesai/{{$order->id}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">SELESAI</button>
                                    </form>
                                    <a href="/ulasan" class="btn btn-info">ULASAN</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end ecommerce -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end checkout -->
@endsection
