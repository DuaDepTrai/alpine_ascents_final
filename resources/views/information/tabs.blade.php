@extends('layouts.app')  <!-- Kế thừa layout chung có tên là 'app' -->

@section('content')  <!-- Bắt đầu phần nội dung chính của trang -->
<div class="container mt-5">  <!-- Container để tạo khoảng cách xung quanh nội dung -->
    <div class="row">
        <div class="col-12">
            <!-- Nút Chuyển Tab -->
            <div class="tabs">
                <button class="tab-button active" onclick="openTab(event, 'gioi-thieu')">Giới thiệu</button>
                <button class="tab-button" onclick="openTab(event, 'lich-su')">Lịch Sử</button>
                <button class="tab-button" onclick="openTab(event, 'cac-loai-hinh-thuc')">Các Loại Hình Thức</button>
                <button class="tab-button" onclick="openTab(event, 'ky-thuat')">Kỹ Thuật</button>
                <button class="tab-button" onclick="openTab(event, 'noi-tru-an')">Nơi Trú Ẩn</button>
                <button class="tab-button" onclick="openTab(event, 'cac-moi-nguy-hiem')">Các Mối Nguy Hiểm</button>
                <button class="tab-button" onclick="openTab(event, 'ky-luc')">Kỷ Lục</button>
            </div>

            <!-- Nội dung của các tab -->
            <div class="tab-content">
                <div id="gioi-thieu" class="tab-pane"> <!-- Phần nội dung tab "Giới thiệu" -->
                    <h2>Giới thiệu</h2>
                    <p>Nội dung giới thiệu về chủ đề...</p>
                </div>

                <div id="lich-su" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Lịch Sử" -->
                    <h2>Lịch Sử</h2>
                    <p>Nội dung lịch sử phát triển...</p>
                </div>

                <div id="cac-loai-hinh-thuc" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Các Loại Hình Thức" -->
                    <h2>Các Loại Hình Thức</h2>
                    <p>Mô tả các loại hình thức khác nhau...</p>
                </div>

                <div id="ky-thuat" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Kỹ Thuật" -->
                    <h2>Kỹ Thuật</h2>
                    <p>Các kỹ thuật quan trọng cần biết...</p>
                </div>

                <div id="noi-tru-an" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Nơi Trú Ẩn" -->
                    <h2>Nơi Trú Ẩn</h2>
                    <p>Nội dung về nơi trú ẩn...</p>
                </div>

                <div id="cac-moi-nguy-hiem" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Các Mối Nguy Hiểm" -->
                    <h2>Các Mối Nguy Hiểm</h2>
                    <p>Thông tin về các mối nguy hiểm...</p>
                </div>

                <div id="ky-luc" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Kỷ Lục" -->
                    <h2>Kỷ Lục</h2>
                    <p>Thông tin về các kỷ lục đáng chú ý...</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  <!-- Kết thúc phần nội dung -->

@push('scripts') <!-- Đẩy mã JavaScript vào stack "scripts" -->
<script>
    // Hàm để mở tab và hiển thị nội dung tương ứng
    function openTab(evt, tabName) {
        var i, tabContent, tabButtons;

        // Ẩn tất cả nội dung của các tab
        tabContent = document.getElementsByClassName("tab-pane");
        for (i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        // Xóa class "active" khỏi tất cả các nút
        tabButtons = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
        }

        // Hiển thị nội dung của tab được chọn và thêm class "active" vào nút đó
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }
</script>
@endpush  <!-- Kết thúc phần mã JavaScript -->

@push('styles')  <!-- Đẩy mã CSS vào stack "styles" -->
<style>
    .tab-content {  /* Cách trình bày nội dung của tab */
        margin-top: 20px;
    }
    .tab-button {  /* Định dạng nút tab */
        border: none;
        background-color: transparent;
        font-weight: bold;
        cursor: pointer;
        padding: 10px 20px;
    }
    .tab-button.active {  /* Định dạng nút khi được chọn */
        border-bottom: 2px solid orange;
        color: orange;
    }
</style>
@endpush  <!-- Kết thúc phần mã CSS -->
