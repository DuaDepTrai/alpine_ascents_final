@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Chi tiết đơn hàng: {{ $order->id }}</h2>

    <p>Tên khách hàng: {{ $order->user->name }}</p>
    <p>Số điện thoại: {{ $order->phone }}</p>
    <p>Email: {{ $order->email }}</p>
    <p>Số lượng: {{ $order->quantity }}</p>
    <p>Tour: {{ $order->tour->name }}</p>
    <p>Tổng tiền: {{ number_format($order->total, 0, ',', '.') }} VND</p>
    <p>Ghi chú: {{ $order->note }}</p>
    <p>Trạng thái: {{ $order->status }}</p>

    <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
        @csrf
        <label for="status">Thay đổi trạng thái đơn hàng:</label>
        <select name="status" id="status" class="form-control">
            <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Confirmed" {{ $order->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="Canceled" {{ $order->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
        </select>
        <button type="submit" class="btn btn-primary mt-3">Cập nhật</button>
    </form>

    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary mt-3">Quay lại danh sách đơn hàng</a>
</div>
@endsection

