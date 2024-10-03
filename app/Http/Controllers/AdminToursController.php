<?php

namespace App\Http\Controllers;

use App\Models\orders_tours;
use Illuminate\Http\Request;
use App\Models\tours;
use Illuminate\Support\Facades\Storage;

class AdminToursController extends Controller
{
    // Hiển thị form để thêm tour mới
    public function create()
    {
        return view('admin.tours.create');
    }

    // Lưu thông tin tour mới vào database
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
            'location' => 'required|string',
            'features' => 'required|string',
            'besttime' => 'required|string',
            'directions' => 'required|string',
            'trekkingroutes' => 'required|string',
            'items' => 'required|string',
            'cautions' => 'required|string',
            'requirements' => 'required|string',
        ]);

        // Xử lý upload ảnh
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Lưu ảnh vào thư mục public/images
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/upload/'), $imageName);

            // Lưu đường dẫn tương đối của ảnh
            $imagePath = 'images/upload/' . $imageName;
        }

        // Tạo tour mới với đường dẫn ảnh
        tours::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imagePath, // Lưu đường dẫn ảnh
            'location' => $request->location,
            'features' => $request->features,
            'besttime' => $request->besttime,
            'directions' => $request->directions,
            'trekkingroutes' => $request->trekkingroutes,
            'items' => $request->items,
            'cautions' => $request->cautions,
            'requirements' => $request->requirements,
        ]);

        // Chuyển hướng sau khi thêm thành công
        return redirect()->route('admin.tours.index')->with('success', 'Tour added successfully');
    }

    // Hiển thị danh sách các tours
    public function index(Request $request)
    {
        // Tạo query để có thể áp dụng các điều kiện tìm kiếm và sắp xếp
    $query = tours::query();

    // Kiểm tra và áp dụng tìm kiếm theo tên
    if ($request->has('name') && $request->name != '') {
        $query->where('name', 'LIKE', '%' . $request->name . '%');
    }

    // Sắp xếp theo cột 'created_at' từ mới đến cũ
    $query->orderBy('created_at', 'desc');

        // Phân trang 15 user mỗi trang
        $tours = $query->paginate(15);  
        return view('admin.tours.index', compact('tours'));
    }


    //CẬP NHẬT TOURS
    public function edit($id)
{
    // Tìm tour theo id
    $tour = tours::findOrFail($id);

    // Trả về view edit với dữ liệu tour
    return view('admin.tours.edit', compact('tour'));
}

public function update(Request $request, $id)
{
    // Validate dữ liệu đầu vào
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer|min:1',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
        'location' => 'required|string',
        'features' => 'required|string',
        'besttime' => 'required|string',
        'directions' => 'required|string',
        'trekkingroutes' => 'required|string',
        'items' => 'required|string',
        'cautions' => 'required|string',
        'requirements' => 'required|string',
    ]);

    // Tìm tour theo id
    $tour = tours::findOrFail($id);

    // Xử lý upload ảnh (nếu có)
    if ($request->hasFile('image')) {
        // Xóa ảnh cũ (nếu có)
        if ($tour->image && file_exists(public_path($tour->image))) {
            unlink(public_path($tour->image));
        }

        // Lưu ảnh mới vào thư mục public/images
        $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images/upload/'), $imageName);

        // Lưu đường dẫn tương đối của ảnh
        $tour->image = 'images/upload/' . $imageName;
    }

    // Cập nhật các thông tin khác
    $tour->name = $request->name;
    $tour->price = $request->price;
    $tour->location = $request->location;
    $tour->features = $request->features;
    $tour->besttime = $request->besttime;
    $tour->directions = $request->directions;
    $tour->trekkingroutes = $request->trekkingroutes;
    $tour->items = $request->items;
    $tour->cautions = $request->cautions;
    $tour->requirements = $request->requirements;

    // Lưu thay đổi vào database
    $tour->save();

    // Chuyển hướng sau khi cập nhật thành công
    return redirect()->route('admin.tours.index')->with('success', 'Tour updated successfully');
}

//XOÁ TOUR
public function destroy($id)
{
    // Tìm tour theo id
    $tour = tours::findOrFail($id);

    if (orders_tours::where('tour_id', $tour->id)->exists()) {
        // Chuyển hướng với thông báo lỗi
        return redirect()->route('admin.tours.index')->with('error', 'This tour cannot be deleted because it has been booked.');
    }
    
    // Xóa ảnh trong thư mục public/images (nếu có)
    if ($tour->image && file_exists(public_path($tour->image))) {
        unlink(public_path($tour->image));
    }

    // Xóa tour khỏi database
    $tour->delete();

    // Chuyển hướng sau khi xóa thành công
    return redirect()->route('admin.tours.index')->with('success', 'Tour deleted successfully');
}
}
