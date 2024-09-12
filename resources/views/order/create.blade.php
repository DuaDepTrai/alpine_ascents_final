<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đặt Hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Trang đặt hàng</h2>

        <!-- Hiển thị thông báo thành công -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Hiển thị lỗi xác thực -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/order" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="tour">Tours</label>
                <select class="form-control" id="tour" name="tour_id" required>
                    <option value="">Chọn tour</option>
                    <!-- Hiển thị danh sách tours từ database -->
                    @foreach($tours as $tour)
                        <option value="{{ $tour->id }}" data-price="{{ $tour->price }}">
                            {{ $tour->name }} - {{ number_format($tour->price, 0, ',', '.') }} VND
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="total">Tổng tiền</label>
                <input type="text" class="form-control" id="total" readonly>
            </div>
            <div class="form-group">
                <label for="note">Ghi chú</label>
                <textarea class="form-control" id="note" name="note"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Đặt hàng</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tourSelect = document.getElementById('tour');
            const quantityInput = document.getElementById('quantity');
            const totalInput = document.getElementById('total');

            function updateTotal() {
                const selectedOption = tourSelect.options[tourSelect.selectedIndex];
                const price = selectedOption.dataset.price ? parseInt(selectedOption.dataset.price) : 0;
                const quantity = parseInt(quantityInput.value) || 0;
                const total = price * quantity;

                totalInput.value = total.toLocaleString() + ' VND';
            }

            tourSelect.addEventListener('change', updateTotal);
            quantityInput.addEventListener('input', updateTotal);
        });
    </script>
</body>
</html>
