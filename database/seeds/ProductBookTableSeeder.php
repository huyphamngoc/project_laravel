<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_books')->insert([
            [
                'title' => 'Tuổi Trẻ Đáng Giá Bao Nhiêu',
                'categoryId' => 1,
                'description' => 'Bạn hối tiếc vì không nắm bắt lấy một cơ hội nào đó, chẳng có ai phải mất ngủ.
                Bạn trải qua những ngày tháng nhạt nhẽo với công việc bạn căm ghét, người ta chẳng hề bận lòng.
                Bạn có chết mòn nơi xó tường với những ước mơ dang dở, đó không phải là việc của họ.
                Suy cho cùng, quyết định là ở bạn. Muốn có điều gì hay không là tùy bạn.
                Nên hãy làm những điều bạn thích. Hãy đi theo tiếng nói trái tim. Hãy sống theo cách bạn cho là mình nên sống.
                Vì sau tất cả, chẳng ai quan tâm.',
                'image' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/t/u/tuoi-tre-dang-gia-bao-nhieu-u547-d20161012-t113832-888179.u3059.d20170616.t095744.390222.jpg',
                'author'=>'Rosie Nguyễn',
                'price' => 53500,
            ],
            [
                'title' => 'Đời Ngắn Đừng Ngủ Dài',
                'categoryId' => 1,
                'description' => 'Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế',
                'image' => 'https://v2.tikicdn.com/cache/550x550/media/catalog/product/d/o/doi-ngan-dung-ngu-dai.jpg',
                'author'=>'Robin Sharma',
                'price' => 46800 ,
            ],
            [
                'title' => 'Đắc Nhân Tâm',
                'categoryId' => 1,
                'description' => 'Hiện nay có một sự hiểu nhầm đã xảy ra. Tuy Đắc Nhân Tâm là tựa sách hầu hết mọi người đều biết đến, vì những danh tiếng và mức độ phổ biến, nhưng một số người lại “ngại” đọc. Lý do vì họ tưởng đây là cuốn sách “dạy làm người” nên có tâm lý e ngại. Có lẽ là do khi giới thiệu về cuốn sách, người ta luôn gắn với miêu tả đây là “nghệ thuật đối nhân xử thế”, “nghệ thuật thu phục lòng người”… Những cụm từ này đã không còn hợp với hiện nay nữa, gây cảm giác xa lạ và không thực tế.',
                'image' => 'https://v2.tikicdn.com/cache/550x550/media/catalog/product/i/m/img592.u3059.d20170616.t101749.921069.jpg',
                'author'=>' Dale Carnegie',
                'price' => 57500 ,
            ],
            [
                'title' => 'Nghĩ Đơn Giản, Sống Đơn Thuần',
                'categoryId' => 1,
                'description' => 'Từ xưa đến nay, chúng ta vẫn được định hướng để tin rằng chẳng có điều gì đáng giá mà không cần đấu tranh. Bản thân tôi cũng đã dành hàng thập kỷ để nghiên cứu về nhận định phổ biến này. Tôi chưa bao giờ để cuộc sống trở nên dễ dàng. Tuy nhiên, giờ đây, thay vì cứ cố gắng làm mọi việc đúng theo ý mình, tôi đã tìm ra chiến lược để mọi thứ diễn ra theo cách của nó. Kết quả, tôi thấy mình khoẻ mạnh hơn, hạnh phúc và giàu có hơn tôi tưởng tượng. Nếu cuộc sống của bạn căng thẳng, buồn chán hoặc mãi quẩn quanh, đó là dấu hiệu bạn đang thiếu đi điều gì đó cốt yếu, và bạn đang tự cho phép mình ngừng phát triển. “Nghĩ đơn giản, sống đơn thuần” sẽ mang tới cho bạn bộ khung cơ bản để bạn nhìn nhận lại chính mình và tìm ra những mảnh ghép còn thiếu.',
                'image' => 'https://vcdn.tikicdn.com/cache/550x550/ts/product/14/3a/21/fdc22a17f9e5ff533527d72e0c1a5c82.jpg',
                'author'=>'Tolly Burkan',
                'price' => 29900 ,
            ],
            [
                'title' => 'Tôi Tài Giỏi - Bạn Cũng Thế',
                'categoryId' => 1,
                'description' => 'Tác giả không chỉ đơn thuần giải thích người khác đã thành công như thế nào, mà còn nói làm sao để họ làm được như thế để giúp người đọc khám phá ra tiềm năng của bản thân, và phát huy điều đó. Ngoài ra, sách còn cung cấp những phương pháp học thông minh (như áp dụng các công cụ học bằng cả não bộ như Sơ Đồ Tư Duy, phát triển trí nhớ siêu việt để ghi nhớ các sự kiện, con số một cách dễ dàng, thành thạo việc quản lý thời gian và xác định mục tiêu). Adam Khoo đã cho thấy, tài giỏi mang lại sự tự tin như thế nào và còn hướng dẫn bạn cách thức trở thành người tài giỏi. Qua đó độc giả sẽ lập được kế hoạch cho cuộc đời của chính mình',
                'image' => 'https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/t/o/toi-tai-gioi.jpg',
                'author'=>' Adam Khoo',
                'price' => 60000 ,
            ],
            [
                'title' => 'Nếu Tôi Biết Được Khi Còn 20',
                'categoryId' => 1,
                'description' => 'Những bước ngoặt lớn của cuộc đời như rời xa giảng đường êm ả hoặc khởi đầu một sự nghiệp mới thường khiến ta nhụt chí. Phải đối mặt với một rừng những lựa chọn trong khi hiểu rằng sẽ chẳng có ai cho ta biết mình đang lựa chọn đúng hay sai thật đáng sợ. Chẳng có con đường vẽ sẵn hay công thức viết sẵn nào cho thành công, thậm chí việc quyết định mình nên bắt đầu thế nào và ở đâu cũng đã rất khó khăn rồi.',
                'image' => 'https://v2.tikicdn.com/cache/550x550/media/catalog/product/i/m/img301.u3059.d20170616.t102644.74862.jpg',
                'author'=>' Tina Seelig',
                'price' => 99000 ,
            ],
            [
                'title' => '7 Thói Quen Hiệu Quả',
                'categoryId' => 1,
                'description' => 'Tác phẩm "7 Thói quen Hiệu quả / 7 Habits for Highly Effective People" đã ra đời hơn 25 năm, được biết đến là cuốn sách quản trị (quản trị bản thân và quản trị tổ chức) bán chạy nhất mọi thời đại với hơn 30 triệu bản bán ra trên toàn thế giới và được dịch sang 40 ngôn ngữ. Sách có mặt tại thị trường Việt Nam hơn 10 năm nay dưới cái tên "7 Thói quen để Thành đạt" . Ấn bản mới năm 2016 được đặt lại đúng với cái tên mộc mạc vốn có của bản gốc Tiếng Anh và có nội dung không chỉ được dịch lại toàn bộ cho sát nghĩa, dễ đọc hơn với các độc giả mà còn được cập nhật thêm những công cụ và ví dụ thực tiễn từ phiên bản nước ngoài mới nhất và có hình ảnh bìa (màu xanh đậm) giống với phiên bản gốc mới nhất',
                'image' => 'https://vcdn.tikicdn.com/cache/550x550/ts/product/af/24/b4/87412b83a2b4b6aeb0d32f7b2f79b004.jpg',
                'author'=>' Stephen R. Covey',
                'price' => 28900 ,
            ],
            [
                'title' => 'Đời Ngắn Đừng Ngủ Dài',
                'categoryId' => 1,
                'description' => 'Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế',
                'image' => 'https://v2.tikicdn.com/cache/550x550/media/catalog/product/d/o/doi-ngan-dung-ngu-dai.jpg',
                'author'=>' Robin Sharma',
                'price' => 89000 ,
            ],
            [
                'title' => 'Đời Ngắn Đừng Ngủ Dài',
                'categoryId' => 1,
                'description' => 'Mọi lựa chọn đều giá trị. Mọi bước đi đều quan trọng. Cuộc sống vẫn diễn ra theo cách của nó, không phải theo cách của ta. Hãy kiên nhẫn. Tin tưởng. Hãy giống như người thợ cắt đá, đều đặn từng nhịp, ngày qua ngày. Cuối cùng, một nhát cắt duy nhất sẽ phá vỡ tảng đá và lộ ra viên kim cương. Người tràn đầy nhiệt huyết và tận tâm với việc mình làm không bao giờ bị chối bỏ. Sự thật là thế',
                'image' => 'https://v2.tikicdn.com/cache/550x550/media/catalog/product/d/o/doi-ngan-dung-ngu-dai.jpg',
                'author'=>' Robin Sharma',
                'price' => 89000 ,
            ],

        ]);
    }
}
