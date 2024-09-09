@extends('layouts.app')  <!-- Kế thừa layout chung có tên là 'app' -->

@section('content')  <!-- Bắt đầu phần nội dung chính của trang -->

<div class="container mt-5">  <!-- Container để tạo khoảng cách xung quanh nội dung -->
    <div class="row">
        <div class="col-12">
            <!-- Nút Chuyển Tab -->
            <div class="tabs">
                <button class="tab-button active" onclick="openTab(event, 'overview_history')">Overview and History</button>
                <button class="tab-button" onclick="openTab(event, 'types_forms')">Types and Forms</button>
                <button class="tab-button" onclick="openTab(event, 'technique')">Technique</button>
                <button class="tab-button" onclick="openTab(event, 'shelter')">Shelter</button>
                <button class="tab-button" onclick="openTab(event, 'danger')">Danger</button>
                <button class="tab-button" onclick="openTab(event, 'record')">Records</button>
            </div>

            <!-- Nội dung của các tab -->
            <div class="tab-content">
                <div id="overview_history" class="tab-pane"> <!-- Phần nội dung tab "Giới thiệu" -->
                    <h2 style="font-style:italic">Overview and History</h2>
                    <br>Chào mừng bạn đến với trang web của Alpine Ascents VietNam – điểm đến lý tưởng cho những ai đam mê khám phá và chinh phục các đỉnh núi hùng vĩ tại VietNam. Chúng tôi là một tổ chức chuyên cung cấp các tour leo núi và treking chất lượng cao, mang đến cho bạn cơ hội trải nghiệm những thử thách đầy kích thích và phong cảnh ngoạn mục. Được thành lập với sứ mệnh kết nối những người yêu thích leo núi và thiên nhiên, Alpine Ascents VietNam cam kết cung cấp dịch vụ chuyên nghiệp, an toàn và tận tâm.
                    <img src="public/images/tf_images/tf_trekking">
                    <br><br>Trang web của chúng tôi cung cấp thông tin chi tiết về các chuyến leo núi và hành trình khám phá từ những đỉnh núi cao nhất như Fansipan, Ba Na, đến những cung đường trekking đẹp mắt tại các công viên quốc gia và khu bảo tồn thiên nhiên. Chúng tôi tự hào là đối tác của nhiều hướng dẫn viên và chuyên gia leo núi dày dạn kinh nghiệm, sẵn sàng đồng hành cùng bạn trong từng bước đi, từ việc chuẩn bị trang thiết bị đến hỗ trợ kỹ thuật và an toàn.
                    <br><br>Tại Alpine Ascents VietNam, chúng tôi hiểu rằng mỗi chuyến đi đều là một cuộc phiêu lưu cá nhân, vì vậy chúng tôi cung cấp các gói tour linh hoạt, phù hợp với nhiều mức độ kỹ năng và sở thích khác nhau. Bạn có thể dễ dàng tìm thấy các thông tin chi tiết về lịch trình, giá cả và dịch vụ hỗ trợ trên trang web của chúng tôi. Ngoài ra, chúng tôi còn cung cấp các bài viết và hướng dẫn hữu ích, giúp bạn chuẩn bị tốt nhất cho chuyến đi của mình.
                    <br><br>Hãy cùng chúng tôi khám phá vẻ đẹp hoang sơ và sự kỳ vĩ của thiên nhiên VietNam qua các tour leo núi và trekking. Đừng ngần ngại liên hệ với chúng tôi để nhận được sự tư vấn tận tình và thông tin chi tiết về các chuyến đi. Alpine Ascents VietNam mong muốn đồng hành cùng bạn trên từng bước hành trình, để mỗi chuyến đi không chỉ là một cuộc chinh phục, mà còn là một trải nghiệm đáng nhớ.
                    <br><br><br><br><br><h3 style="font-style:italic">Lịch sử hình thành</h3>
                    <br>Trang web Alpine Ascents Việt Nam được thành lập vào năm 2010 bởi một nhóm các nhà leo núi nhiệt huyết với mong muốn tạo ra một nền tảng chia sẻ kinh nghiệm và kết nối cộng đồng leo núi tại Việt Nam. Khi mới bắt đầu, trang web chỉ đơn thuần là một diễn đàn nhỏ, nơi những người yêu thích môn thể thao leo núi có thể trao đổi thông tin về các tuyến đường, kỹ thuật leo núi và các trải nghiệm cá nhân. Tuy nhiên, với sự gia tăng nhanh chóng của phong trào leo núi và trekking tại Việt Nam, Alpine Ascents Việt Nam đã nhanh chóng phát triển và mở rộng, trở thành một nguồn tài nguyên trực tuyến uy tín và toàn diện trong lĩnh vực này.
                    <br><br>Trong suốt quá trình phát triển, Alpine Ascents Việt Nam đã không ngừng mở rộng nội dung và tính năng của trang web để đáp ứng ngày càng tốt hơn nhu cầu của người dùng. Trang web hiện cung cấp thông tin chi tiết về các dãy núi nổi tiếng như Fansipan, Ba Na, và các khu vực trekking nổi bật khác, cùng với các hướng dẫn chuyên sâu về chuẩn bị hành trang, an toàn trong leo núi và các kỹ thuật cần thiết. Đặc biệt, chúng tôi còn cung cấp các bài viết và video hướng dẫn giúp người dùng dễ dàng nắm bắt và áp dụng các kiến thức cần thiết trước mỗi chuyến đi.
                    <br><br>Alpine Ascents Việt Nam còn kết nối với nhiều tổ chức và cộng đồng leo núi quốc tế, tham gia tích cực vào các chương trình bảo vệ môi trường và thúc đẩy du lịch bền vững. Chúng tôi hợp tác với các tổ chức phi chính phủ và các nhóm bảo tồn để bảo vệ các khu vực núi non quý giá, đồng thời nâng cao nhận thức về tầm quan trọng của việc giữ gìn thiên nhiên cho các thế hệ sau.
                    <br><br>Với hơn một thập kỷ hoạt động, Alpine Ascents Việt Nam không chỉ là một trang web thông tin mà còn là một cộng đồng sôi động và gắn bó, nơi mọi người có thể chia sẻ niềm đam mê và khát khao khám phá. Chúng tôi tổ chức các sự kiện, hội thảo và chuyến đi cộng đồng để kết nối những người yêu thích leo núi, tạo cơ hội cho họ gặp gỡ và học hỏi lẫn nhau. Nhờ sự ủng hộ mạnh mẽ từ cộng đồng, trang web đã đóng góp không nhỏ vào việc thúc đẩy phong trào leo núi tại Việt Nam, đồng thời truyền cảm hứng cho các thế hệ mới của những người yêu thích môn thể thao mạo hiểm này.
                    <br><br>Alpine Ascents Việt Nam tự hào là một phần của cộng đồng leo núi đang phát triển mạnh mẽ và hy vọng sẽ tiếp tục là cầu nối quan trọng giữa những người đam mê leo núi và vẻ đẹp hùng vĩ của thiên nhiên Việt Nam trong những năm tới.`;
                
                </div>

                <div id="types_forms" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Các Loại Hình Thức" -->
                    <h2 style="font-style:italic">Types and Forms</h2>
                    <br>Walking là hoạt động di chuyển bằng cách đi bộ trên mặt đất, thường được thực hiện trên những địa hình bằng phẳng hoặc có độ dốc nhẹ. Đây là hình thức cơ bản nhất của vận động và có thể được thực hiện ở bất kỳ đâu, từ công viên, vỉa hè cho đến các con đường mòn trong khu vực đô thị. Trong leo núi, walking thường đóng vai trò là giai đoạn khởi đầu hoặc là một phần của hành trình dài hơn, giúp người tham gia làm quen với môi trường và duy trì thể lực. Mặc dù walking không đòi hỏi quá nhiều kỹ thuật hay trang bị đặc biệt, nhưng việc lựa chọn giày phù hợp và bảo vệ cơ thể khỏi thời tiết là rất quan trọng để đảm bảo sự thoải mái và an toàn.

                    <br><br><br><br><h3 id="trekking" style="font-style:italic">Trekking</h3>
                    <br>Trekking là một hoạt động khám phá các khu vực hoang dã hơn và thường yêu cầu di chuyển trên những con đường mòn phức tạp hoặc các địa hình gồ ghề. Đây là hình thức leo núi có tính chất mạo hiểm hơn so với walking, đòi hỏi người tham gia phải có sức khỏe tốt, kỹ năng định hướng và khả năng xử lý các tình huống khó khăn. Trekking thường kéo dài nhiều ngày và bao gồm việc mang theo trang thiết bị camping, thực phẩm và nước uống. Hoạt động này không chỉ mang lại trải nghiệm gần gũi với thiên nhiên mà còn giúp xây dựng sự bền bỉ và khả năng thích ứng với môi trường khắc nghiệt.

                    <br><br><br><br><h3 id="hiking" style="font-style:italic">Hiking</h3>
                    <br>Hiking là một hình thức leo núi kết hợp giữa walking và trekking, thường được thực hiện trên các con đường mòn núi non hoặc các khu vực địa hình dốc hơn. Hoạt động này có thể kéo dài từ vài giờ đến một vài ngày, tùy thuộc vào độ khó của địa hình và mục tiêu của chuyến đi. Hiking thường yêu cầu người tham gia có trang bị đầy đủ như giày leo núi, ba lô, nước uống và đồ ăn nhẹ. Đặc biệt, hiking có thể bao gồm việc leo lên các đỉnh núi hoặc vượt qua các đoạn đường khó khăn, giúp người tham gia thử thách bản thân và thưởng thức những cảnh quan ngoạn mục. Kỹ năng định hướng và chuẩn bị kỹ lưỡng là yếu tố then chốt để đảm bảo chuyến đi hạnh phúc và an toàn.

                    <br><br><br><br><h3 style="font-style:italic">Traditional Climbing</h3>
                    <br>Traditional climbing, thường được gọi là "trad climbing," là một phương pháp leo núi trong đó người leo sử dụng các thiết bị bảo vệ để tạo điểm neo vào các khe nứt hoặc cấu trúc đá tự nhiên trên vách núi. Đây là kiểu leo núi cổ điển nhất, yêu cầu người leo núi phải có kỹ năng lắp đặt và tháo gỡ thiết bị bảo vệ trong suốt hành trình. Trong traditional climbing, các thiết bị như cam, chốt và dây móc được sử dụng để đảm bảo an toàn khi leo lên các đoạn đường không có điểm bám cố định. Phương pháp này không chỉ đòi hỏi kỹ thuật cao mà còn cần sự tính toán chính xác và kinh nghiệm phong phú trong việc chọn lựa thiết bị phù hợp cho từng đoạn leo.

                    <br><br><br><br><h3 style="font-style:italic">Sport Climbing</h3>
                    <br>Sport climbing là một kiểu leo núi tập trung vào việc chinh phục các vách đá được trang bị sẵn các điểm neo và móc sẵn. Các điểm bảo vệ này được cố định chắc chắn trên vách đá, cho phép người leo chỉ cần tập trung vào việc vượt qua các thử thách và kỹ thuật leo. Sport climbing thường sử dụng các dây đai, móc và dây an toàn để tạo ra một hệ thống bảo vệ hiệu quả. Đây là một phương pháp leo núi phổ biến trong các khu vực leo núi đã được trang bị và phát triển, giúp giảm thiểu rủi ro và cho phép người leo tập trung vào kỹ thuật và sức mạnh.

                    <br><br><br><br><h3 style="font-style:italic">Bouldering</h3>
                    <br>Bouldering là một kiểu leo núi đặc biệt tập trung vào việc leo lên các tảng đá lớn hoặc các đoạn vách đá thấp mà không sử dụng thiết bị bảo vệ hay dây an toàn. Đây là một hình thức leo núi đòi hỏi kỹ thuật và sức mạnh tay, cùng với sự chính xác cao trong từng động tác. Người leo bouldering thường sử dụng các đệm đỡ dưới chân để giảm thiểu nguy cơ chấn thương nếu có sự rơi hoặc trượt. Các bài tập bouldering thường được thực hiện trên các khối đá tự nhiên hoặc trong các nhà tập luyện bouldering trong nhà, nơi các vấn đề leo được thiết kế và thay đổi thường xuyên để thử thách người leo.

                    <br><br><br><br><h3 style="font-style:italic">Ice Climbing</h3>
                    <br>Ice climbing là một kiểu leo núi đặc biệt dành cho các bức tường băng hoặc tuyết, yêu cầu sử dụng thiết bị chuyên dụng như đinh cắm băng, băng tay cầm, và dây leo đặc biệt. Trong ice climbing, người leo sử dụng các công cụ để cắm vào băng và hỗ trợ quá trình leo lên các đoạn đường băng hoặc thác nước đóng băng. Phương pháp này không chỉ đòi hỏi kỹ năng về kỹ thuật leo núi mà còn yêu cầu sự chuẩn bị tốt về trang thiết bị và hiểu biết sâu rộng về điều kiện thời tiết và cấu trúc băng. Ice climbing thường được thực hiện trong các khu vực núi cao, nơi có điều kiện băng tuyết phù hợp, và là một trong những hình thức leo núi thử thách nhất.
                </div>

                <div id="technique" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Kỹ Thuật" -->
                    <h2 style="font-style:italic">Technique</h2>
                    Đây là kỹ thuật cơ bản để bảo đảm an toàn cho người leo. Khi leo núi, một người sẽ chịu trách nhiệm giữ dây an toàn cho người leo chính, đảm bảo rằng trong trường hợp trượt chân hoặc ngã, người leo sẽ được giữ lại. Thiết bị belay được sử dụng để điều chỉnh độ căng của dây và giảm sốc khi có sự cố xảy ra.

<br><br><br><br>
<h5 style="font-style:italic; font-weight:bold;">Kỹ thuật leo núi tự do (Free Climbing)</h5>
Đây là kỹ thuật leo núi chỉ sử dụng tay chân để leo, còn dây và các thiết bị khác chỉ dùng để bảo vệ trong trường hợp ngã. Người leo cần có sự linh hoạt, sức bền, và kỹ năng cân bằng tốt để có thể di chuyển mượt mà qua các tảng đá hoặc bề mặt khó khăn.

<br><br><br><br>
<h5 style="font-style:italic; font-weight:bold;">Kỹ thuật leo núi bằng trang bị (Aid Climbing)</h5>
Trái với leo núi tự do, kỹ thuật này sử dụng các thiết bị như móc, kẹp hoặc dây thừng để hỗ trợ người leo tiến lên, đặc biệt khi bề mặt quá khó hoặc không có điểm bám tay, bám chân.

<br><br><br><br>
<h5 style="font-style:italic; font-weight:bold;">Kỹ thuật nút thắt (Knots)</h5>
Kỹ năng thắt nút là yếu tố không thể thiếu. Các nút thắt phổ biến như nút tám, nút đôi hay nút bulin giúp tạo ra các mối liên kết chặt chẽ và an toàn giữa dây thừng, người leo và các thiết bị hỗ trợ khác.

<br><br><br><br>
                    <h5 style="font-style:italic; font-weight:bold;">Kỹ thuật kiểm soát hơi thở và nhịp độ (Pacing and Breathing)</h5>
                    Khi leo núi, việc duy trì hơi thở đều đặn và kiểm soát tốc độ là rất quan trọng. Nếu di chuyển quá nhanh, người leo dễ bị kiệt sức, đặc biệt trong các chuyến leo dài. Hơi thở ổn định giúp duy trì sức lực và sự tập trung trong suốt quá trình leo.

                    <br><br><br><br>
                    <h5 style="font-style:italic; font-weight:bold;">Kỹ thuật di chuyển theo bề mặt đá (Footwork and Grip)</h5>
                    Kỹ năng đặt chân và bám tay đúng vị trí là yếu tố quan trọng để đảm bảo an toàn và hiệu quả. Người leo cần học cách đặt trọng tâm cơ thể, sử dụng lực từ chân thay vì chỉ dựa vào tay để leo. Điều này giúp tiết kiệm năng lượng và tăng khả năng cân bằng.

                    <br><br><br><br>
                    <h5 style="font-style:italic; font-weight:bold;">Kỹ thuật định hướng và quan sát (Route Finding)</h5>
                    Khả năng định vị và lựa chọn tuyến đường an toàn là một phần không thể thiếu trong leo núi. Trước khi bắt đầu leo, người tham gia cần phải quan sát kỹ địa hình, dự đoán các khó khăn và rủi ro, từ đó chọn lựa con đường tốt nhất.

                    <br><br><br><br>
                    <h5 style="font-style:italic; font-weight:bold;">Kỹ thuật sử dụng thiết bị leo núi (Gear Management)</h5>
                    Việc biết cách sử dụng và bảo quản các thiết bị leo núi như móc carabiner, dây thừng, đai bảo hiểm, và mũ bảo hộ là rất quan trọng. Người leo phải kiểm tra thiết bị kỹ càng trước khi leo để đảm bảo chúng hoạt động tốt, từ đó giảm thiểu rủi ro.

                    <br><br><br><br>
                    <h5 style="font-style:italic; font-weight:bold;">Kỹ thuật giao tiếp (Communication)</h5>
                    Trong leo núi, giao tiếp rõ ràng giữa người leo và người giữ dây là yếu tố sống còn. Các tín hiệu âm thanh và cử chỉ tay thường được sử dụng để truyền đạt các thông tin quan trọng như yêu cầu thêm dây, dừng lại, hay sự cố.

                    <br><br><br><br>
                    <h5 style="font-style:italic; font-weight:bold;">Kỹ thuật leo núi mùa đông (Ice Climbing)</h5>
                    Khi leo núi vào mùa đông hoặc trên các bề mặt băng giá, người leo cần sử dụng thêm các thiết bị như giày đinh, rìu băng và bu-lông băng để bám và leo lên các bề mặt trơn trượt. Kỹ thuật này yêu cầu sự tập trung và kỹ năng cao, bởi điều kiện thời tiết khắc nghiệt và nguy cơ băng tuyết sụp lở.

                    <br><br><br>Leo núi là một môn thể thao đầy thử thách nhưng cũng mang lại nhiều phần thưởng tinh thần và thể chất. Những kỹ thuật trên giúp người leo vượt qua các chướng ngại vật và chinh phục những đỉnh núi cao, đồng thời đảm bảo an toàn cho bản thân và đồng đội trong suốt hành trình.
                    
                </div>

                <div id="shelter" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Nơi Trú Ẩn" -->
                    <h2 style="font-style:italic">Shelter</h2>
                    Đây là nơi trú ẩn được dựng lên tại khu vực chân núi hoặc điểm khởi đầu của một chuyến leo núi dài. Trại dã chiến thường bao gồm các lều lớn để nhóm người leo có thể nghỉ ngơi, chuẩn bị thực phẩm và trang bị trước khi tiến lên các độ cao nguy hiểm hơn. Những nơi này thường có nguồn nước gần, nơi an toàn để cắm trại, và có thể nằm ở vùng có khí hậu ít khắc nghiệt hơn so với độ cao trên đỉnh núi.

                        <br><br><br><br>
                        <h5 style="font-style:italic; font-weight:bold;">Lều leo núi (Tent)</h5>
                        Lều là loại hình trú ẩn di động phổ biến nhất trong leo núi. Lều hiện đại được thiết kế nhỏ gọn, nhẹ, chống thấm nước và chịu được gió mạnh, phù hợp với những điều kiện thời tiết khắc nghiệt trên núi. Lều có thể được dựng ở các điểm dừng chân tạm thời khi người leo cần nghỉ ngơi trong hành trình dài. Một số loại lều còn được trang bị các tính năng giữ ấm và cách nhiệt tốt cho những khu vực có tuyết.

                        <br><br><br><br>
                        <h5 style="font-style:italic; font-weight:bold;">Hang đá (Cave)</h5>
                        Ở những vùng núi cao có địa hình phức tạp, hang đá tự nhiên có thể trở thành nơi trú ẩn lý tưởng. Hang đá bảo vệ người leo khỏi gió mạnh và mưa, tuy nhiên, cần kiểm tra kỹ lưỡng để đảm bảo hang an toàn trước khi sử dụng. Những hang sâu có thể cung cấp không gian rộng rãi hơn lều, nhưng thường lạnh và ẩm ướt hơn, do đó cần sử dụng túi ngủ hoặc tấm cách nhiệt để giữ ấm.

                        <br><br><br><br>
                        <h5 style="font-style:italic; font-weight:bold;">Nhà gỗ hoặc chòi trên núi (Mountain Huts)</h5>
                        Ở những khu vực núi cao, nhất là tại các điểm leo núi nổi tiếng, chính quyền địa phương hoặc các tổ chức leo núi có thể xây dựng các nhà gỗ hoặc chòi nghỉ nhỏ cho người leo. Những nơi này cung cấp chỗ nghỉ ngơi khép kín, tránh mưa gió và có thể có các tiện ích cơ bản như bếp nấu ăn hoặc giường ngủ. Nhà gỗ thường được đặt tại các trạm dừng cố định, giúp người leo núi nghỉ ngơi và bổ sung năng lượng.

                        <br><br><br><br>
                        <h5 style="font-style:italic; font-weight:bold;">Trạm dừng chân (Shelter)</h5>
                        Trên những con đường leo núi phổ biến, nhiều quốc gia đã xây dựng các trạm dừng chân nhỏ, là nơi trú ẩn khẩn cấp khi thời tiết xấu đột ngột xảy ra. Các trạm này không lớn và không trang bị nhiều tiện nghi, nhưng đủ để bảo vệ người leo khỏi các yếu tố thiên nhiên. Các trạm thường nằm rải rác dọc theo các tuyến đường leo núi dài, giúp người leo có thể nghỉ chân mà không cần phải dựng lều.

                        <br><br><br><br>
                        <h5 style="font-style:italic; font-weight:bold;">Igloo và nơi trú ẩn tuyết (Snow Shelter)</h5>
                        Ở các vùng núi có tuyết, nơi trú ẩn tuyết hoặc igloo là một giải pháp khả thi trong tình huống khẩn cấp. Người leo núi có thể tự xây dựng những nơi trú này bằng cách sử dụng các công cụ cắt tuyết để tạo ra các bức tường dày, giúp cách nhiệt và bảo vệ khỏi gió lạnh. Tuy nhiên, kỹ thuật xây dựng igloo yêu cầu người leo có kinh nghiệm và kỹ năng, bởi việc tạo dựng phải đảm bảo cấu trúc đủ vững chắc và an toàn.
                        
                        <br><br><br><br>Leo núi là một môn thể thao đầy thử thách nhưng cũng mang lại nhiều phần thưởng tinh thần và thể chất. Những kỹ thuật trên giúp người leo vượt qua các chướng ngại vật và chinh phục những đỉnh núi cao, đồng thời đảm bảo an toàn cho bản thân và đồng đội trong suốt hành trình.
                        
                </div>

                <div id="danger" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Các Mối Nguy Hiểm" -->
                    <h2 style="font-style:italic">Danger</h2>
                    Ngoài ra, một mối nguy hiểm khác là <p style="font-weight: bold">sạt lở đất và đá</p>. Địa hình núi đá thường không ổn định, đặc biệt là sau những cơn mưa hoặc thời tiết xấu. Đá và đất có thể bất ngờ lăn xuống từ trên cao, gây nguy hiểm cho người leo bên dưới. Đây là lý do tại sao việc theo dõi thời tiết và điều kiện địa hình là cực kỳ quan trọng trước khi bắt đầu leo.  
                        <br><br>
                        <p style="font-weight: bold">Thời tiết khắc nghiệt</p> cũng là một yếu tố nguy hiểm trong việc leo núi. Ở độ cao lớn, thời tiết có thể thay đổi nhanh chóng từ nắng ráo sang mưa bão, gió mạnh, hoặc tuyết rơi. Sự thay đổi đột ngột của thời tiết không chỉ làm giảm tầm nhìn mà còn làm cho địa hình trở nên nguy hiểm hơn. Người leo núi cần phải trang bị đầy đủ quần áo chống nước, giữ ấm, và các thiết bị cần thiết để đối phó với điều kiện thời tiết bất lợi.  
                        <br><br>
                        
                        Khi leo lên các độ cao lớn, <p style="font-weight: bold">bệnh độ cao</p> (altitude sickness) là một mối nguy hiểm đáng lo ngại. Ở những nơi có độ cao trên 2.500m so với mực nước biển, không khí loãng và thiếu oxy có thể gây ra các triệu chứng như chóng mặt, buồn nôn, khó thở, và mệt mỏi. Nếu không xử lý kịp thời, bệnh độ cao có thể dẫn đến phù não hoặc phù phổi, gây tử vong. Việc thích nghi dần với độ cao và leo từ từ là rất quan trọng để giảm thiểu nguy cơ này.  
                        <br><br>
                        
                        Một vấn đề khác thường gặp là <p style="font-weight: bold">mất phương hướng</p>. Khi ở trên núi, đặc biệt là những nơi có địa hình phức tạp và ít dấu hiệu nhận biết, người leo có thể dễ dàng bị lạc. Sương mù dày đặc hoặc thiếu các thiết bị định vị có thể làm mất phương hướng, khiến cho người leo mất nhiều thời gian tìm đường và làm tăng nguy cơ gặp phải các yếu tố nguy hiểm khác như thời tiết xấu hoặc thiếu nước, thực phẩm.  
                        <br><br>
                        <p style="font-weight: bold">Thiếu nước và dinh dưỡng</p> cũng là một nguy cơ khi leo núi. Khi leo ở những độ cao lớn, người leo thường phải đối mặt với tình trạng mất nước nhanh chóng do sự thay đổi về nhiệt độ và nhu cầu năng lượng cao. Thiếu nước và dinh dưỡng không chỉ làm suy giảm sức khỏe mà còn ảnh hưởng đến tinh thần và sự tập trung, làm tăng nguy cơ xảy ra tai nạn. Do đó, việc chuẩn bị đủ lượng nước và thực phẩm phù hợp cho hành trình là rất quan trọng.  
                        <br><br>
                        
                        Cuối cùng, <p style="font-weight: bold">sự cố về thiết bị</p> cũng có thể dẫn đến nguy hiểm. Các thiết bị như dây leo, móc khóa, hoặc giày dép nếu không được kiểm tra kỹ lưỡng trước khi leo hoặc gặp hỏng hóc giữa chừng có thể gây tai nạn nghiêm trọng. Do đó, việc kiểm tra kỹ lưỡng và sử dụng thiết bị chất lượng cao là yếu tố không thể thiếu để đảm bảo an toàn.  
                        <br><br>
                        
                        Leo núi không chỉ đòi hỏi về mặt thể lực mà còn yêu cầu người tham gia phải hiểu rõ các nguy hiểm tiềm ẩn và có kế hoạch đối phó. Từ những nguy cơ về thời tiết, địa hình cho đến sức khỏe cá nhân, việc chuẩn bị kỹ lưỡng và trang bị đầy đủ là cách tốt nhất để giảm thiểu rủi ro khi chinh phục các đỉnh cao.
                        
                </div>

                <div id="record" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Kỷ Lục" -->
                    <h2 style="font-style:italic">Record</h2>
                     Alpine Ascent Vietnam là một trang web chuyên về leo núi và các hoạt động khám phá thiên nhiên, đã đạt được nhiều thành tựu ấn tượng trong lĩnh vực du lịch mạo hiểm. Được thành lập với sứ mệnh thúc đẩy tình yêu thiên nhiên và sự tôn trọng đối với môi trường, Alpine Ascent Vietnam đã nhanh chóng khẳng định vị thế của mình trong cộng đồng leo núi quốc tế. Một trong những thành tựu lớn nhất của trang web là việc tổ chức các chuyến thám hiểm leo núi chuyên nghiệp, mang lại những trải nghiệm đầy thử thách cho hàng nghìn người tham gia từ khắp nơi trên thế giới. Những hành trình này không chỉ giúp người leo khám phá những đỉnh núi hùng vĩ tại Việt Nam mà còn giúp họ rèn luyện sức khỏe và tinh thần bền bỉ.

                    <br><br>
                    Một điểm nổi bật khác của Alpine Ascent Vietnam là sự hợp tác với các chuyên gia leo núi quốc tế để đảm bảo rằng các chương trình leo núi luôn tuân thủ các tiêu chuẩn an toàn cao nhất. Nhờ đó, trang web đã giành được nhiều giải thưởng uy tín về an toàn và tổ chức leo núi, đặc biệt là từ các tổ chức du lịch và môi trường. Điều này khẳng định uy tín của Alpine Ascent Vietnam trong việc tổ chức các chuyến leo núi không chỉ đầy thử thách mà còn an toàn và đáng tin cậy.

                    <br><br>
                    Trang web cũng được vinh danh bởi nhiều tạp chí và tổ chức du lịch vì những đóng góp trong việc phát triển du lịch bền vững và bảo tồn thiên nhiên. Bằng cách kết hợp các hoạt động leo núi với giáo dục về bảo vệ môi trường, Alpine Ascent Vietnam đã tạo ra những giá trị lớn lao cho cộng đồng địa phương và du khách quốc tế. Điều này thể hiện qua việc trang web đã nhận được nhiều phản hồi tích cực từ người tham gia, cũng như đạt được điểm đánh giá cao trên các nền tảng du lịch trực tuyến.

                    <br><br>
                    Ngoài ra, Alpine Ascent Vietnam còn nhận được nhiều giải thưởng về phát triển cộng đồng. Trang web thường xuyên tổ chức các chương trình từ thiện, giúp đỡ các cộng đồng dân tộc thiểu số sống tại những vùng núi khó khăn. Những phần thưởng này không chỉ là sự công nhận cho các nỗ lực vì cộng đồng mà còn là động lực để trang web tiếp tục phát triển và lan tỏa tinh thần yêu thiên nhiên.

                    <br><br>
                    Với những thành tựu và phần thưởng đáng kể, Alpine Ascent Vietnam không chỉ là một trang web du lịch thông thường mà còn là một cầu nối giữa con người và thiên nhiên. Các chương trình của họ không chỉ tập trung vào việc khám phá mà còn thúc đẩy nhận thức về bảo tồn và phát triển bền vững.
                    `;
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
