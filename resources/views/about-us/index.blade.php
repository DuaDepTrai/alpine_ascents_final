<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    h1{
        margin-left: 50px;
    }

    button{
        font: bold 1.2rem "Fira Sans", sans-serif;        
        height: 40px;
        padding: 10px;
        margin-left: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border: none;
        background-color: #5c715e;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);

    }
    #overview{
        margin-left: 50px;
    }
    
    #para{
        font: 1.2rem "Fira Sans", sans-serif;        
        padding: 20px 50px;
        margin-left: 15px;
        margin-right: 15px;
        margin-bottom: 15px;
        border-radius: 10px;
        background-color: #ddeedf;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
    }

    #btns{
        margin: auto;
        white-space: nowrap;
        overflow: hidden;
    }

</style>

<body>
    <h1>About Us</h1>
    <div id="btns">
        <button id="overview">Overview</button>
        <button id="now_and_then">Now and then</button>
        <button id="director_statement">Director's Statement</button>    
        <button id="achievements" >Achievements</button>
        <button id="contact">Contact</button>
    </div>

    <div id="para"></div>
</body>

<script>
    let overview = `Trang web Alpine Ascents VietNam là một điểm đến trực tuyến hàng đầu dành cho những người yêu thích leo núi và khám phá thiên nhiên tại Việt Nam. 
    <br><br>Được thiết kế để phục vụ cho cả những người mới bắt đầu và các nhà leo núi chuyên nghiệp, trang web cung cấp một nguồn tài nguyên phong phú và đa dạng về các điểm đến nổi bật như Fansipan, Bạch Mã, Yên Tử, Pù Luông, và nhiều dãy núi khác trải dài từ Bắc vào Nam. 
    <br><br>Với giao diện thân thiện và dễ sử dụng, Alpine Ascents VietNam cho phép người dùng dễ dàng tìm kiếm thông tin về các tuyến đường leo núi, đặc điểm địa hình, điều kiện khí hậu, cũng như độ khó của từng địa điểm. 
    <br><br>Trang web cung cấp các hướng dẫn chi tiết, bao gồm mẹo chuẩn bị cá nhân, danh sách các trang bị cần thiết, và những lưu ý quan trọng về an toàn. Điều này giúp người dùng chuẩn bị kỹ lưỡng cho mỗi chuyến leo núi, đảm bảo trải nghiệm an toàn và thú vị. 
    <br><br>Ngoài ra, Alpine Ascents VietNam còn là nơi cập nhật những tin tức mới nhất về các sự kiện leo núi, các giải đấu quốc tế, và các hoạt động cộng đồng liên quan. Người dùng có thể tham gia vào cộng đồng trực tuyến, nơi chia sẻ kinh nghiệm, hình ảnh, và câu chuyện từ những chuyến đi đầy thử thách. Trang web cũng hỗ trợ kết nối các nhóm leo núi và tổ chức các tour du lịch mạo hiểm với hướng dẫn viên chuyên nghiệp, giúp những người mới có thể tự tin tham gia vào các hành trình khám phá. 
    <br><br>Với sứ mệnh mang đến những trải nghiệm leo núi an toàn và đáng nhớ, Alpine Ascents VietNam không chỉ là một trang web cung cấp thông tin, mà còn là nơi truyền cảm hứng cho những ai yêu thích chinh phục thiên nhiên, khám phá những đỉnh cao và cảm nhận vẻ đẹp hùng vĩ của Việt Nam. Đây thực sự là một người bạn đồng hành không thể thiếu cho mỗi hành trình leo núi của bạn.`;
    
    let now_and_then = `Trang web Alpine Ascents VietNam được thành lập vào năm 2010 bởi một nhóm những người đam mê leo núi với sứ mệnh tạo ra một nền tảng chia sẻ kinh nghiệm và kết nối cộng đồng leo núi tại Việt Nam. Ban đầu, trang web chỉ là một diễn đàn nhỏ, nơi những người yêu thích leo núi có thể trao đổi thông tin về các tuyến đường và kỹ năng leo núi. Tuy nhiên, với sự gia tăng của phong trào leo núi tại Việt Nam, Alpine Ascents VietNam nhanh chóng phát triển và trở thành một nguồn tài nguyên trực tuyến uy tín và toàn diện.
    <br><br>Trong quá trình phát triển, trang web đã liên tục mở rộng nội dung và tính năng để đáp ứng nhu cầu của người dùng. Từ việc cung cấp thông tin chi tiết về các dãy núi nổi tiếng, đến hướng dẫn chuẩn bị và an toàn, trang web đã trở thành một địa chỉ không thể thiếu cho những ai muốn chinh phục thiên nhiên. Alpine Ascents VietNam còn kết nối với các tổ chức leo núi quốc tế, tham gia vào các chương trình bảo vệ môi trường và thúc đẩy du lịch bền vững.
    <br><br>Với hơn một thập kỷ hoạt động, Alpine Ascents VietNam không chỉ là một trang web thông tin mà còn là một cộng đồng sôi nổi, nơi mọi người có thể chia sẻ niềm đam mê và khát khao khám phá. Nhờ sự ủng hộ mạnh mẽ từ cộng đồng, trang web đã góp phần không nhỏ vào việc thúc đẩy phong trào leo núi tại Việt Nam, đồng thời truyền cảm hứng cho các thế hệ mới của những người yêu thích môn thể thao mạo hiểm này.`;
    
    let director_statement = `Sứ mệnh của Alpine Ascents VietNam là trở thành nguồn tài nguyên hàng đầu cho cộng đồng leo núi và khám phá thiên nhiên tại Việt Nam, cung cấp những thông tin đáng tin cậy, cập nhật và toàn diện về các tuyến đường, kỹ năng, và trang bị cần thiết. 
    <br><br>Chúng tôi cam kết thúc đẩy phong trào leo núi an toàn, bền vững, đồng thời kết nối những người đam mê lại với nhau thông qua các hoạt động cộng đồng, sự kiện, và chương trình đào tạo. 
    <br><br>Alpine Ascents VietNam không chỉ là nơi chia sẻ kinh nghiệm mà còn là nơi truyền cảm hứng, khuyến khích mọi người chinh phục những đỉnh cao mới, khám phá vẻ đẹp thiên nhiên hùng vĩ của đất nước và bảo vệ môi trường tự nhiên.`;
   
    let achievements = `Trang web Alpine Ascents VietNam tự hào đạt được nhiều thành tựu đáng kể và nhận được các giải thưởng uy tín trong suốt quá trình hoạt động. Kể từ khi ra mắt, chúng tôi đã nhận được sự công nhận từ cộng đồng leo núi và các tổ chức liên quan nhờ vào nỗ lực không ngừng trong việc cung cấp thông tin chính xác, cập nhật và toàn diện về các tuyến đường leo núi tại Việt Nam. 
    <br><br>Chúng tôi đã được vinh danh với giải thưởng “Trang Web Tốt Nhất về Du Lịch Mạo Hiểm” tại Lễ trao giải Du Lịch Quốc Gia năm 2018, nhờ vào việc tạo ra một nền tảng tiện ích và dễ tiếp cận cho những người đam mê leo núi. Ngoài ra, **Alpine Ascents VietNam** cũng nhận được giải thưởng “Đổi Mới Trong Công Nghệ Thông Tin” năm 2020 từ Hiệp hội Công nghệ Thông tin Việt Nam, ghi nhận những cải tiến và tính năng mới mà chúng tôi liên tục cập nhật để nâng cao trải nghiệm người dùng.
    <br><br>Chúng tôi cũng tự hào là đối tác chiến lược trong nhiều dự án bảo tồn môi trường và phát triển du lịch bền vững, điều này được công nhận qua giải thưởng “Đóng Góp Xuất Sắc Cho Bảo Vệ Môi Trường” vào năm 2022. Những thành tựu này không chỉ minh chứng cho sự cam kết của chúng tôi đối với chất lượng và an toàn, mà còn khẳng định vai trò của chúng tôi trong việc thúc đẩy phong trào leo núi và bảo vệ thiên nhiên tại Việt Nam.`;
   
    let contact = `Chúng tôi rất mong nhận được phản hồi và câu hỏi từ bạn! Nếu bạn có bất kỳ thắc mắc nào hoặc cần hỗ trợ, xin vui lòng liên hệ với chúng tôi qua biểu mẫu bên dưới. Đội ngũ chăm sóc khách hàng của chúng tôi sẽ liên lạc lại với bạn trong thời gian sớm nhất. Ngoài ra, bạn có thể gọi điện hoặc gửi email trực tiếp cho chúng tôi qua các thông tin liên hệ được cung cấp. Chúng tôi luôn sẵn sàng phục vụ bạn!
    <br><br>Alpine Ascents Viet Nam 
    <br>Tầng 10, Tòa nhà Green Peak, 123 Đường Trần Duy Hưng, Quận Cầu Giấy, Hà Nội, Việt Nam.
    <br>Liên hệ : +84 24 1234 5678
    <br>Email: contact@alpineascentsvn.com`;

    function resetColor(){
        document.getElementById('overview').style.backgroundColor = "#5c715e";
        document.getElementById('now_and_then').style.backgroundColor = "#5c715e";
        document.getElementById('director_statement').style.backgroundColor = "#5c715e";
        document.getElementById('achievements').style.backgroundColor = "#5c715e";
        document.getElementById('contact').style.backgroundColor = "#5c715e";
    }


    document.addEventListener('DOMContentLoaded',function(){
        document.getElementById('para').innerHTML = overview;
        document.getElementById('overview').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('overview').addEventListener('click',function(){
        resetColor();
        document.getElementById('para').innerHTML = overview;
        document.getElementById('overview').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('now_and_then').addEventListener('click',function(){
        resetColor();
        document.getElementById('para').innerHTML = now_and_then;
        document.getElementById('now_and_then').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('director_statement').addEventListener('click',function(){
        resetColor();
        document.getElementById('para').innerHTML = director_statement;
        document.getElementById('director_statement').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('achievements').addEventListener('click',function(){
        resetColor();
        document.getElementById('para').innerHTML = achievements;
        document.getElementById('achievements').style.backgroundColor = "#ddeedf";
    });


    document.getElementById('contact').addEventListener('click',function(){
        resetColor();
        document.getElementById('para').innerHTML = contact;
        document.getElementById('contact').style.backgroundColor = "#ddeedf";
    });


</script>

</html>