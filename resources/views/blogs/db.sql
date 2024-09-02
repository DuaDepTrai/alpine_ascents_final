CREATE TABLE blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    date_posted DATE NOT NULL,
    content TEXT NOT NULL,
    category VARCHAR(100) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);
INSERT INTO blog_posts (title, date_posted, content, category, image_url) 
VALUES 
('BÁO CÁO ĐIỀU KIỆN CASCADES 29/08/2024', '2024-08-29', 'Chào các bạn leo núi! Mùa hè đã quay trở lại đúng lúc các trường học chuẩn bị khai giảng ở PNW. Hôm nay là một ngày tuyệt đẹp với nhiệt độ khoảng giữa 70°F và trời nắng! Nhiệt độ mát mẻ hơn và lượng mưa trong tuần qua đã tích tụ ở các ngọn núi, với các ngọn núi ở Bắc Cascades nhận được tuyết trên 7K và...', 'Blog', 'duong/dan/den/image1.jpg'),

('ĐIỀU KIỆN CASCADES 26/08/2024', '2024-08-26', 'Chào các bạn leo núi! Chúng ta đang bước vào tuần cuối cùng của tháng 8 và có cảm giác như mùa đã chuyển. Chúng ta đã thấy tất cả các loại thời tiết trong tuần qua, từ giông bão đến trời nắng, mưa đá, và điều kiện tuyệt vời. Các nhóm của chúng tôi đã leo núi khi thời tiết cho phép và một số khác đã phải tạm dừng...', 'Blog', 'duong/dan/den/image2.jpg'),

('HỘI THẢO WEB ACONCAGUA 2024 – 2025', '2024-08-21', 'Chúng tôi rất vui mừng chia sẻ bản ghi của hội thảo web Aconcagua gần đây của chúng tôi, được tổ chức bởi các hướng dẫn viên và chuyên gia Aconcagua giàu kinh nghiệm của chúng tôi. Trong buổi này, chúng tôi đã thảo luận về những thách thức và cơ hội độc đáo...', 'Blog', 'duong/dan/den/image3.jpg');
SELECT title, date_posted, content, category, image_url 
FROM blog_posts 
ORDER BY date_posted DESC;
