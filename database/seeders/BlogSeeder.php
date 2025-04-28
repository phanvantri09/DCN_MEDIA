<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('blogs')->insert([
                'name' => "Thu Âm Như Thế Nào Là Chuẩn 1",
                'img' => '1.gif',
                'content_pre' => 'Gói thu cơ bản',
                'content' => '<p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Được thiết kế chuyên cho các Game thủ, Streamer, Podcast, Youtuber,…&nbsp;<a href="https://vinasound.vn/san-pham/rode-nt-usb-mini" style="touch-action: manipulation; color: rgb(239, 95, 38);">Rode NT-USB Mini</a>&nbsp;là một&nbsp;<a href="https://vinasound.vn/micro-cong-usb" style="touch-action: manipulation; color: rgb(239, 95, 38);">micro condenser cổng USB</a>&nbsp;mang lại cho người dùng chất lượng âm thanh stream chuyên nghiệp nhất và dễ dàng sử dụng. Rode NT-USB Mini là dạng micro condenser chất lượng cao mang đến chất âm ấm áp và rõ ràng. Hướng thu Cardioid giúp tập trung thu những âm thanh trước micro và giảm thiểu tối đa tiếng ồn không mong muốn ở phía sau và 2 bên (máy lạnh, gõ phím, quạt tản nhiệt,…)</p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif; text-align: center;"></p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Rode NT-USB Mini được tích hợp sẵn windscreen chắn gió giúp giảm thiểu các âm posives cho âm thanh sạch hơn. Chân đế đi kèm cho phép bạn để gọn trên bàn làm việc một cách tiện lợi, ngoài ra nó cũng hoạt động như một shockmount giúp Rode NT-USB Mini giảm thiểu tiếng ồn từ những rung động tác động lên micro.</p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Rode NT-USB được trang bị bộ xử lý tín hiệu 24 bit/ 48kHz cho âm thanh rõ ràng, trung thực. Vì là USB Microphone, nên bạn đơn giản chỉ cần cắm vào máy tính/ laptop để sử dụng mà không cần cài đặt thêm bất kỳ trình điều khiển nào. Rode NT-USB cũng tích hợp jack cắm tai nghe 3.5mm với độ trễ bằng không để bạn giám sát âm thanh trong thời gian thực, kèm theo đó là núm điều chỉnh âm lượng tai nghe trực quan trên thân micro để bạn dễ dàng điều chỉnh.</p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Với thiết kế nhỏ gọn và chắc chắn, âm thanh ổn định và tiện lợi khi sử dụng. Rode NT-USB Mini là lựa chọn tuyệt vời cho các nhu cầu live streaming, Podcast, Youtuber, Studio Record,..</p>',

            ]);
            DB::table('blogs')->insert([
                'name' => "Thu Âm Như Thế Nào Là Chuẩn 2",
                'img' => '2.gif',
                'content_pre' => 'Gói thu cơ bản',
                'content' => '<p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Được thiết kế chuyên cho các Game thủ, Streamer, Podcast, Youtuber,…&nbsp;<a href="https://vinasound.vn/san-pham/rode-nt-usb-mini" style="touch-action: manipulation; color: rgb(239, 95, 38);">Rode NT-USB Mini</a>&nbsp;là một&nbsp;<a href="https://vinasound.vn/micro-cong-usb" style="touch-action: manipulation; color: rgb(239, 95, 38);">micro condenser cổng USB</a>&nbsp;mang lại cho người dùng chất lượng âm thanh stream chuyên nghiệp nhất và dễ dàng sử dụng. Rode NT-USB Mini là dạng micro condenser chất lượng cao mang đến chất âm ấm áp và rõ ràng. Hướng thu Cardioid giúp tập trung thu những âm thanh trước micro và giảm thiểu tối đa tiếng ồn không mong muốn ở phía sau và 2 bên (máy lạnh, gõ phím, quạt tản nhiệt,…)</p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif; text-align: center;"></p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Rode NT-USB Mini được tích hợp sẵn windscreen chắn gió giúp giảm thiểu các âm posives cho âm thanh sạch hơn. Chân đế đi kèm cho phép bạn để gọn trên bàn làm việc một cách tiện lợi, ngoài ra nó cũng hoạt động như một shockmount giúp Rode NT-USB Mini giảm thiểu tiếng ồn từ những rung động tác động lên micro.</p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Rode NT-USB được trang bị bộ xử lý tín hiệu 24 bit/ 48kHz cho âm thanh rõ ràng, trung thực. Vì là USB Microphone, nên bạn đơn giản chỉ cần cắm vào máy tính/ laptop để sử dụng mà không cần cài đặt thêm bất kỳ trình điều khiển nào. Rode NT-USB cũng tích hợp jack cắm tai nghe 3.5mm với độ trễ bằng không để bạn giám sát âm thanh trong thời gian thực, kèm theo đó là núm điều chỉnh âm lượng tai nghe trực quan trên thân micro để bạn dễ dàng điều chỉnh.</p><p style="margin-bottom: 1.3em; color: rgb(119, 119, 119); font-family: Roboto, sans-serif;">Với thiết kế nhỏ gọn và chắc chắn, âm thanh ổn định và tiện lợi khi sử dụng. Rode NT-USB Mini là lựa chọn tuyệt vời cho các nhu cầu live streaming, Podcast, Youtuber, Studio Record,..</p>',
            ]);
    }
}
