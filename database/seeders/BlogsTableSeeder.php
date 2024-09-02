<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => 'Fansipan Adventure',
                'image' => 'images/fansipan/fansipan (1).jpg', // Đường dẫn ảnh trong thư mục public
                'content' => '<h2>Địa điểm</h2> 
                                <p>Fansipan, nằm tại huyện Sa Pa, tỉnh Lào Cai, được mệnh danh là "Nóc nhà Đông Dương", là đỉnh núi cao nhất trong dãy Hoàng Liên Sơn, với độ cao 3,143 mét so với mực nước biển.</p>
                                <p>Địa điểm này không chỉ thu hút những người yêu thích chinh phục bởi sự vĩ đại của nó mà còn bởi vẻ đẹp thiên nhiên hùng vĩ. Fansipan là điểm đến mơ ước của nhiều trekkers và du khách, mang đến cảm giác chiến thắng khi đứng trên đỉnh núi cao nhất Đông Dương, hòa mình vào biển mây trắng xóa và chiêm ngưỡng cảnh quan rộng lớn xung quanh. </p>
                                <h2>Đặc điểm địa hình </h2>
                                <p>Fansipan có địa hình núi đá vôi hiểm trở với những đoạn đường dốc đứng và gập ghềnh. </p>
                                <p>Dọc lộ trình lên đỉnh, bạn sẽ đi qua những khu rừng rậm rạp, suối nước trong xanh, và những đồng cỏ xanh mướt. Đường lên đỉnh thường xuyên bị bao phủ bởi sương mù, tạo nên một khung cảnh huyền bí và kỳ vĩ. Các hang động nhỏ và thác nước đẹp mắt dọc theo lộ trình cũng là những điểm nhấn thú vị. </p>
                                <p>Mùa mưa có thể làm cho con đường trở nên trơn trượt và khó khăn hơn, nhưng bù lại là cảnh sắc thiên nhiên tươi đẹp và không khí trong lành. </p>
                                <h2>Thời điểm lý tưởng trong năm để khám phá</h2>
                                <p>Thời điểm lý tưởng để chinh phục Fansipan là từ tháng 10 đến tháng 4. </p>
                                <p>Trong khoảng thời gian này, thời tiết khô ráo và mát mẻ, với nhiệt độ dao động từ 10 đến 20 độ C, là điều kiện lý tưởng cho việc trekking. </p>
                                <p>Mùa xuân và mùa thu là thời điểm tuyệt vời nhất để ngắm cảnh, với các cánh đồng hoa dã quỳ vàng rực rỡ hoặc sắc xanh của các thảm thực vật. Mùa hè có thể gặp mưa nhiều, ảnh hưởng đến việc di chuyển và tham quan. Mùa đông có thể rất lạnh và có thể có băng tuyết, làm cho việc chinh phục trở nên khó khăn hơn và cần chuẩn bị kỹ lưỡng. </p>
                                <h2>Cách di chuyển </h2>
                                <p>Đi tàu hỏa hoặc xe khách từ Hà Nội đến Sa Pa, thời gian di chuyển khoảng 6-8 giờ. </p>
                                <p>Từ Sa Pa, thuê xe máy hoặc taxi để di chuyển đến khu vực chân núi. </p>
                                <h2>Lộ trình chinh phục</h2>
                                <p>Bắt đầu từ khu vực chân núi, hành trình sẽ dẫn bạn qua các con đường mòn uốn lượn qua các khu rừng rậm và thung lũng tuyệt đẹp. Trên đường, bạn sẽ có cơ hội ngắm nhìn những phong cảnh hùng vĩ và trải nghiệm sự thay đổi rõ rệt về khí hậu và cảnh quan từ chân núi lên đỉnh. Đêm đầu tiên, bạn sẽ nghỉ tại các trại hoặc nhà nghỉ dựng tạm giữa núi để hồi phục sức lực. </p>
                                <p>Vào ngày thứ hai, bạn sẽ tiếp tục chinh phục các đoạn đường dốc đứng và rừng mây để đạt đến đỉnh Fansipan, nơi bạn sẽ được thưởng ngoạn toàn cảnh hùng vĩ của dãy Hoàng Liên Sơn. </p>
                                <h2>Các vật dụng cần thiết</h2>
                                <p>Giày trekking chống nước và chống trượt</p>
                                <p>Áo khoác chống gió và mưa</p>
                                <p>Đồ ăn nhẹ và nước uống</p>
                                <p>Gậy trekking</p>
                                <p>Kem chống nắng và thuốc chống muỗi</p>
                                <p>Đèn pin và pin dự phòng</p>
                                <p>Áo ấm và mũ len nếu đi vào mùa đông</p>
                                <h2>Các lưu ý khác</h2>
                                <p>Kiểm tra thời tiết trước khi khởi hành để đảm bảo điều kiện thuận lợi. </p>
                                <p>Tuân thủ hướng dẫn của các hướng dẫn viên, không rời xa lộ trình. </p>
                                <p>Mang theo các đồ bảo vệ để tránh bị thương và giữ gìn vệ sinh môi trường xung quanh. </p>
                                ',
                'user_id' => 1, // ID của user, bạn cần điều chỉnh theo đúng ID
                'status' => 'published',
                'created_at' => now()
            ],
            [
                'title' => 'Trekking Khám Phá Cột Cờ Lũng Cú - Hà Giang',
                'image' => 'images/cot-co-lung-cu/cot-co-lung-cu (1).jpg', // Đường dẫn ảnh trong thư mục public
                'content' => '<h2>Địa điểm</h2> 
                                <p>Cột Cờ Lũng Cú nằm ở xã Lũng Cú, huyện Đồng Văn, tỉnh Hà Giang, là điểm cực Bắc của Việt Nam. </p>
                                <p>Địa điểm này không chỉ có ý nghĩa về mặt địa lý mà còn là một biểu tượng của lòng yêu nước và sự kiên cường. </p>
                                <p>Cột cờ được xây dựng trên đỉnh một ngọn đồi, mang đến một tầm nhìn rộng lớn và tuyệt đẹp ra toàn bộ khu vực biên giới. </p>
                                <h2>Đặc điểm địa hình </h2>
                                <p>Cờ Lũng Cú nằm trên đỉnh một ngọn đồi cao khoảng 1,470 mét so với mực nước biển. Địa hình xung quanh chủ yếu là núi đá vôi và các cánh đồng xanh tươi. </p>
                                <p>Để lên được cột cờ, bạn sẽ phải leo lên hàng trăm bậc thang đá và đi qua các con đường mòn dốc đứng. </p>
                                <p>Từ trên đỉnh, bạn sẽ có cái nhìn toàn cảnh về các cánh đồng, thung lũng và núi non hùng vĩ xung quanh, tạo nên một cảnh quan thiên nhiên ngoạn mục và rộng lớn. </p>
                                <h2>Thời điểm lý tưởng trong năm để khám phá</h2>
                                <p>Thời điểm lý tưởng để tham quan Cột Cờ Lũng Cú là từ tháng 9 đến tháng 12. </p>
                                <p>Thời gian này thời tiết khô ráo và mát mẻ, giúp bạn dễ dàng leo lên đỉnh và thưởng ngoạn cảnh quan. </p>
                                <p>Mùa hè có thể có mưa nhiều, làm cho việc di chuyển trở nên khó khăn. </p>
                                <p>Mùa đông có thể lạnh và có sương mù, nhưng cũng mang đến một cảnh sắc tuyệt đẹp và huyền bí. </p>
                                <h2>Cách di chuyển </h2>
                                <p>Từ Hà Nội, bạn có thể đi xe khách hoặc thuê xe riêng đến Hà Giang, thời gian di chuyển khoảng 6-8 giờ. </p>
                                <p>Từ Hà Giang, tiếp tục di chuyển bằng xe máy hoặc taxi đến xã Lũng Cú, mất khoảng 2-3 giờ. </p>
                                <h2>Lộ trình chinh phục</h2>
                                <p>Chúng tôi cung cấp tour trekking trong ngày đến Cột Cờ Lũng Cú, bắt đầu từ chân đồi và đi qua các con đường mòn được trang bị để bạn dễ dàng leo lên đỉnh. </p>
                                <p>Trên đường đi, bạn sẽ trải nghiệm vẻ đẹp của các cánh đồng và núi non xung quanh. </p> 
                                <p>Từ đỉnh cột cờ, bạn sẽ có cơ hội chiêm ngưỡng toàn cảnh khu vực biên giới và cảm nhận được sự vĩ đại của điểm cực Bắc của Việt Nam. </p>
                                <h2>Các vật dụng cần thiết</h2>
                                <p>Giày đi bộ chống trượt</p>
                                <p>Áo khoác chống gió và mưa</p>
                                <p>Đồ ăn nhẹ và nước uống</p>
                                <p>Kem chống nắng và thuốc chống muỗi</p>
                                <p>Đèn pin và pin dự phòng</p>
                                <h2>Các lưu ý khác</h2>
                                <p>Chuẩn bị tinh thần và thể lực tốt trước khi leo lên đỉnh cột cờ. </p>
                                <p>Tuân thủ các quy định bảo vệ môi trường và giữ gìn vệ sinh khu vực xung quanh. </p>
                                ',
                'user_id' => 1, // ID của user, bạn cần điều chỉnh theo đúng ID
                'status' => 'published',
                'created_at' => now()
            ],
            // Thêm các bài viết khác nếu cần
        ]);
    }
}
