<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'Image' => 'iphone13promax.png',
                'Product_Name' => 'IPhone 13 Pro Max',
                'Type_ID' => 1,
                'Manu_ID' => 1,
                'Price' => 33990000,
                'Description' => '_ Màn hình:6.7 Super Retina XDR <br>
                _ Tốc độ làm tươi:120Hz ProMotion <br>
                _ Camera sau:3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8 <br>
                _ Vi xử lý:Chip A15 Bionic (5nm) <br>
                _ RAM:6GB <br>
                _ Dung lượng:128GB - 256GB - 512GB - 1TB <br>
                _ Chuẩn mạng:5G/ Wifi 6 <br>',
                'Feature' => 1,
                'created_at' => '2021-10-13 09:08:39',
                'updated_at' => '2021-10-13 09:08:39',
                'Quantity_Stock' => 30,
                'Quantity_Sold' => 12,
            ],
            [
                'Image' => 'ip13.jpg',
                'Product_Name' => 'IPhone 13',
                'Type_ID' => 1,
                'Manu_ID' => 1,
                'Price' => 24990000,
                'Description' => '_ Màn hình:6.1" Super Retina XDR <br>
                _ Tốc độ làm tươi:60Hz <br>
                _ Camera sau:2 Camera: Góc rộng ống kính f/1.6 - Siêu rộng f/2.4 <br>
                _ Vi xử lý:Chip A15 Bionic (5nm) <br>
                _ RAM:4GB <br>
                _ Dung lượng:128GB - 256GB - 512GB <br>
                _ Chuẩn mạng:5G/ Wifi 6 <br>',
                'Feature' => 1,
                'created_at' => '2021-10-17 10:34:21',
                'updated_at' => '2021-10-17 10:34:21',
                'Quantity_Stock' => 17,
                'Quantity_Sold' => 1,
            ],
            [
                'Image' => 'iphonese.jpg',
                'Product_Name' => 'IPhone SE (2020)',
                'Type_ID' => 1,
                'Manu_ID' => 1,
                'Price' => 10500000,
                'Description' => '_ Kích thước màn hình:4.7 inches <br>
                _ Công nghệ màn hình:IPS LCD <br>
                _ Camera sau:12 MP, f/1.8 (wide), PDAF, OIS <br>
                _ Camera trước:7 MP, f/2.2 <br>
                _ Chipset Apple:A13 Bionic (7 nm+) <br>
                _ Dung lượng RAM:3 GB <br>
                _ Bộ nhớ trong:64 GB <br>',
                'Feature' => 0,
                'created_at' => '2021-10-09 10:36:10',
                'updated_at' => '2021-10-09 10:36:10',
                'Quantity_Stock' => 17,
                'Quantity_Sold' => 8,
            ],
            [
                'Image' => 'opporeno4.jpg',
                'Product_Name' => 'Oppo Reno4',
                'Type_ID' => 1,
                'Manu_ID' => 2,
                'Price' => 6590000,
                'Description' => '_ Kích thước màn hình:6.4 inches <br>
                _ Công nghệ màn hình:OLED <br>
                _ Camera sau:48 MP (IMX586) + 8 MP + 2 MP + 2 MP, 4 camera <br>
                _ Camera trước:32 MP (IMX616) + Cảm biến thông minh AI <br>
                _ Chipset Qualcomm SM7125 Snapdragon 720G (8 nm) <br>
                _ Dung lượng RAM: 8 GB <br>',
                'Feature' => 1,
                'created_at' => '2021-10-03 10:40:54',
                'updated_at' => '2021-10-03 10:40:54',
                'Quantity_Stock' => 20,
                'Quantity_Sold' => 6,
            ],
            [
                'Image' => 'oppofindx2.jpg',
                'Product_Name' => 'Oppo Find X2',
                'Type_ID' => 1,
                'Manu_ID' => 2,
                'Price' => 18990000,
                'Description' => '_ Kích thước màn hình:6.7 inches <br>
                _ Công nghệ màn hình:AMOLED <br>
                _ Camera sau:Chính 48 MP & Phụ 13 MP, 12 MP <br>
                _ Camera trước:32 MP <br>
                _ Chipset Qualcomm Snapdragon 865 <br>
                _ Dung lượng RAM: 12 GB <br>',
                'Feature' => 0,
                'created_at' => '2021-10-07 10:45:01',
                'updated_at' => '2021-10-07 10:45:01',
                'Quantity_Stock' => 25,
                'Quantity_Sold' => 15,
            ],
            [
                'Image' => 'oppoa94.gif',
                'Product_Name' => 'Oppo A94',
                'Type_ID' => 1,
                'Manu_ID' => 2,
                'Price' => 7050000,
                'Description' => '_ Kích thước màn hình:6.43 inches <br>
                _ Công nghệ màn hình:AMOLED <br>
                _ Camera sau:Camera chính góc rộng 48 MP (F/1.7) <br>
                _ Camera góc siêu rộng 8 MP (F/2.2) <br>
                _ Camera macro 2 MP (F/2.4) <br>
                _ Camera đơn sắc 2 MP (F/2.4) <br>
                _ Camera trước:32 MP <br>
                _ Khẩu độ F/2.4 <br>
                _ Chipset Helio P95, tối đa 2.2GHz <br>
                _ Dung lượng RAM: 8 GB <br>',
                'Feature' => 0,
                'created_at' => '2021-09-09 10:46:22',
                'updated_at' => '2021-09-09 10:46:22',
                'Quantity_Stock' => 9,
                'Quantity_Sold' => 10,
            ],
            [
                'Image' => 'sszfold35g.jpg',
                'Product_Name' => 'Samsung Galaxy Z Fold3 5G',
                'Type_ID' => 1,
                'Manu_ID' => 3,
                'Price' => 38299000,
                'Description' => '_ Màn hình: 7.6 inch (màn hình chính), 6.2 inch (màn hình phụ), Dynamic AMOLED 2X, 120 Hz <br>
                _ Chip: Snapdragon 888, tiến trình 5 nm, hỗ trợ 5G <br>
                _ RAM: 12 GB <br>
                _ Bộ nhớ trong: 256 GB hoặc 512 GB <br>
                _ Hệ điều hành: Android 11 <br>
                _ Pin: 4.400 mAh (2 viên pin) <br>
                _ Camera: 12 MP - 12 MP - 12 MP (camera sau) và 4 MP - 10 MP (camera trước) <br>',
                'Feature' => 1,
                'created_at' => '2021-08-10 10:49:06',
                'updated_at' => '2021-08-10 10:49:06',
                'Quantity_Stock' => 20,
                'Quantity_Sold' => 26,
            ],
            [
                'Image' => 'ssgalaxyS21.jpg',
                'Product_Name' => 'Samsung Galaxy S21 5G',
                'Type_ID' => 1,
                'Manu_ID' => 3,
                'Price' => 14599000,
                'Description' => '_ Mặt kính cảm ứng:Gorilla Glass Victus <br>
                _ Độ phân giải:1080 x 2400 pixels <br>
                _ Màn hình rộng:6.2 inches, 94.1 cm2 <br>
                _ Camera sau:64 MP, 12MP và 12MP (3 camera) <br>
                _ Quay Phim:8K@24fps, 4K@30/60fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, stereo sound rec., gyro-EIS <br>
                _ Hệ điều hành:Android 11, One UI 3.1 <br>
                _ Chipset:Exynos 2100 <br>
                _ RAM:8 GB <br>
                _ Bộ nhớ trong (Rom):128 GB <br>',
                'Feature' => 0,
                'created_at' => '2021-05-14 10:52:35',
                'updated_at' => '2021-05-14 10:52:35',
                'Quantity_Stock' => 16,
                'Quantity_Sold' => 6,
            ],
            [
                'Image' => 'ssnode20ultra5g.jpg',
                'Product_Name' => 'Samsung Galaxy Node 20 Ultra 5G',
                'Type_ID' => 1,
                'Manu_ID' => 3,
                'Price' => 30000000,
                'Description' => '_ Màn hình :6.9", 2K+ (1440 x 3088 Pixels), Dynamic AMOLED 2X 120Hz <br>
                _ Camera sau :Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF, Quay phim FullHD 1080p@30fps, Quay phim HD 720p@960fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@30fps, Quay phim 4K 2160p@60fps, Quay phim 8K 4320p@24fps <br>
                _ Camera trước :10 MP, Hỗ trợ VideoCall thông qua ứng dụng <br>
                _ Hệ điều hành - CPU :Android 10, Exynos 990 8 nhân, 2 nhân 2.73 GHz, 2 nhân 2.5 GHz & 4 nhân 2.0 Ghz <br>
                _ Bộ nhớ ram & Lưu trữ :12Gb, 256 GB, MicroSD, hỗ trợ tối đa 1 TB <br>',
                'Feature' => 0,
                'created_at' => '2021-01-05 10:54:32',
                'updated_at' => '2021-01-05 10:54:32',
                'Quantity_Stock' => 50,
                'Quantity_Sold' => 29,
            ],
            [
                'Image' => 'asusvibook.jpg',
                'Product_Name' => 'Laptop ASUS Vivobook S533EA',
                'Type_ID' => 2,
                'Manu_ID' => 4,
                'Price' => 20280000,
                'Description' => '_ Loại CPU:Intel Core i5-1135G7 Processor (4 x 2.40 GHz), Max Turbo Frequency : 4.20 GHz <br>
                _ Loại card đồ họa:Intel Iris Xe Graphics <br>
                _ Dung lượng RAM: 8GB <br>
                _ Loại RAM:DDR4/ 3200MHz, không hỗ trợ nâng cấp <br>
                _ Ổ cứng: 512GB SSD PCIe (M.2 2280) <br>
                _ Kích thước màn hình: 15.6 inches <br>',
                'Feature' => 1,
                'created_at' => '2021-09-08 10:58:09',
                'updated_at' => '2021-09-08 10:58:09',
                'Quantity_Stock' => 19,
                'Quantity_Sold' => 18,
            ],
            [
                'Image' => 'asuszenbook.jpg',
                'Product_Name' => 'Laptop ASUS Zenbook UX425EA',
                'Type_ID' => 2,
                'Manu_ID' => 4,
                'Price' => 12020000,
                'Description' => '_ Loại CPU:Intel Core i7-1165G7 2.8GHz up to 4.7GHz 12MB <br>
                _ Loại card đồ họa:Intel Iris Xe Graphics <br>
                _ Dung lượng RAM: 16GB <br>
                _ Loại RAM:LPDDR4X 3200MHz, không hỗ trợ nâng cấp <br>
                _ Ổ cứng :512GB SSD M.2 PCIE G3X2 <br>
                _ Kích thước màn hình:14 inches <br>',
                'Feature' => 1,
                'created_at' => '2021-10-17 10:34:21',
                'updated_at' => '2021-10-17 10:34:21',
                'Quantity_Stock' => 35,
                'Quantity_Sold' => 26,
            ],
            [
                'Image' => 'asusd415da.jpg',
                'Product_Name' => 'Laptop ASUS D415DA-EK482T',
                'Type_ID' => 2,
                'Manu_ID' => 4,
                'Price' => 12290000,
                'Description' => '_ Loại CPU:AMD Ryzen 3-3250U 2.6GHz up to 3.5GHz 4MB <br>
                _ Loại card đồ họa: AMD Radeon Graphics <br>
                _ Dung lượng RAM: 4GB <br>
                _ Loại RAM:DDR4 3200MHz, 1 khe cắm hỗ trợ tối đa 12GB <br>
                _ Ổ cứng: 512GB SSD M.2 PCIE G3X4 , 1x slot SATA3 2.5" <br>
                _ Kích thước màn hình:14 inches <br>',
                'Feature' => 0,
                'created_at' => '2021-10-03 10:40:54',
                'updated_at' => '2021-10-03 10:40:54',
                'Quantity_Stock' => 40,
                'Quantity_Sold' => 22,
            ],
            [
                'Image' => 'LaptopAcerNitro5.jpg',
                'Product_Name' => 'Laptop Acer Nitro 5 Gaming AN515 57 727J',
                'Type_ID' => 2,
                'Manu_ID' => 5,
                'Price' => 28990000,
                'Description' => '_ CPU:i711800H2.30 GHz <br>
                _ RAM:8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz <br>
                _ Ổ cứng:Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) <br>
                _ Màn hình:15.6"Full HD (1920 x 1080)144Hz <br>
                _ Card màn hình:Card rờiRTX 3050Ti 4GB <br>
                _ Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C <br>',
                'Feature' => 1,
                'created_at' => '2021-10-09 10:36:10',
                'updated_at' => '2021-10-09 10:36:10',
                'Quantity_Stock' => 33,
                'Quantity_Sold' => 11,
            ],
            [
                'Image' => 'LaptopAcerPredaorHelios.jpg',
                'Product_Name' => 'Laptop Acer Predator Helios PH315 54 75YD',
                'Type_ID' => 2,
                'Manu_ID' => 5,
                'Price' => 38990000,
                'Description' => '_ CPU:i711800H2.30 GHz <br>
                _ RAM:16 GBDDR4 2 khe (1 khe 8GB + 1 khe 8GB)3200 MHz <br>
                _ Ổ cứng:Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB) <br>
                _ Màn hình:15.6"QHD (2560 x 1440)165Hz <br>
                _ Card màn hình:Card rờiRTX 3060 6GB <br>
                _ Cổng kết nối:3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)Mini DisplayPortUSB Type-C <br>',
                'Feature' => 0,
                'created_at' => '2021-10-13 09:08:39',
                'updated_at' => '2021-10-13 09:08:39',
                'Quantity_Stock' => 22,
                'Quantity_Sold' => 2,
            ],
            [
                'Image' => 'LaptopAcerAspire3.jpg',
                'Product_Name' => 'Laptop Acer Aspire 3 A315 56 58EB i5 1035G1',
                'Type_ID' => 2,
                'Manu_ID' => 5,
                'Price' => 15590000,
                'Description' => '_ CPU:i51035G11.00 GHz <br>
                _ RAM: 8 GBDDR4 (On board 4GB +1 khe 4GB)2400 MHz <br>
                _ Ổ cứng:SSD 512 GB NVMe PCIeHỗ trợ khe cắm HDD SATA <br>
                _ Màn hình:15.6"Full HD (1920 x 1080) <br>
                _ Card màn hình:Card tích hợpIntel UHD <br>
                _ Cổng kết nối:Jack tai nghe 3.5 mmHDMILAN (RJ45)USB 3.12 x USB 2.0 <br>',
                'Feature' => 0,
                'created_at' => '2021-10-03 10:40:54',
                'updated_at' => '2021-10-03 10:40:54',
                'Quantity_Stock' => 41,
                'Quantity_Sold' => 22,
            ],
            [
            'Image' =>  'hp340sg7.jpg',
            'Product_Name' =>  'Laptop HP 340s G7 240Q4PA',
            'Type_ID' => 2, 'Manu_ID' => 6, 'Price' => 12990000,
            'Description' => '_ Loại CPU:Intel Core i3-1005G1 <br>
            _ Loại card đồ họa: Intel UHD Graphics <br>
            _ Dung lượng RAM: 4GB <br>
            _ Loại RAM: DDR4 2666Mhz, 2 khe cắm <br>
            _ Ổ cứng: 512GB PCIe NVMe SSD <br>
            _ Kích thước màn hình:14 inches',
            'Feature' => 1,
            'created_at' => '2021-10-01 04:23:15',
            'update_at' => '2021-10-01 04:23:15',
            'Quantity_Stock' => 4,
            'Quantity_Sold' => 1,
            ],
            ['Image' =>  'hp348g7.jpg','Product_Name' =>   'Laptop HP 348 G7 9PH23PA', 'Type_ID' => 2, 'Manu_ID' => 6, 'Price' => 22130000, 'Description' => '_Loại CPU: Intel Core i7-10510U<br>_Loại card đồ họa: AMD Radeon 530 2GB GDDR5<br>_Dung lượng RAM	8GB<br>_Loại RAM:8GB(1 x 8GB) DDR4 3200MHz, 2 khe cắm<br>_Ổ cứng	512GB PCIe NVMe SSD<br>_Kích thước màn hình:14 inches', 'Feature' => 1, 'created_at' => '2021-10-01 04:23:15','update_at' => '2021-10-01 04:23:15','Quantity_Stock' => 4, 'Quantity_Sold' => 1,],
            ['Image' =>  'hp240g8.gif','Product_Name' =>   'Laptop HP 240 G8 3D0E8PA', 'Type_ID' => 2, 'Manu_ID' => 6, 'Price' => 21490000, 'Description' => '_Loại CPU:Intel Core i7-1165G7 2.80 GHz up to 4.70 GHz, 12MB<br>_Loại card đồ họa:Intel Iris XeGraphics<br>_Dung lượng RAM	8GB<br>_Loại RAM:8GB(1 x 8GB) DDR4 3200MHz, 2 khe cắm<br>_Ổ cứng	512GB PCIe NVMe SSD<br>_Kích thước màn hình:14 inches', 'Feature' => 1, 'created_at' => '2021-10-09 03:36:10','update_at' => '2021-10-09 03:36:10','Quantity_Stock' => 36, 'Quantity_Sold' => 26,],
            ['Image' =>  'LG A1 48 inch 4K Smart OLED TV.jpg','Product_Name' =>  'Tivi LG A1 48 inch 4K Smart OLED TV', 'Type_ID' => 3, 'Manu_ID' => 7, 'Price' => 28900000, 'Description' => '_Loại màn hình hiển thị: 4K OLED<br>_Kích thước: 48<br>_Độ phân giải: 3840 x 2160<br>_Màu sắc / Wide Color Gamut:Perfect Color', 'Feature' => 1, 'created_at' => '2021-10-18 05:40:56','update_at' => '2021-10-18 05:40:56','Quantity_Stock' => 34, 'Quantity_Sold' => 26,], 
            ['Image' =>  'LG UP80 86 inch 4K Smart UHD TV.jpg','Product_Name' =>  'Tivi LG UP80 86 inch 4K Smart UHD TV', 'Type_ID' => 3, 'Manu_ID' => 7, 'Price' => 79900000, 'Description' => '_Loại màn hình hiển thị:4K UHD<br>_Kích thước:86<br>_Độ phân giải:3840x2160<br>_Tăng cường sáng Ultra Luminance:Ultra Luminance', 'Feature' => 1, 'created_at' => '2021-10-18 05:40:56','update_at' => '2021-10-18 05:40:56','Quantity_Stock' => 34, 'Quantity_Sold' => 26,], 
            ['Image' => 'Tivi LG Z1 88inch 8K Smart OLED TV','Product_Name' => 'Tivi LG Z1 88inch 8K Smart OLED TV', 'Type_ID' => 3, 'Manu_ID' => 7, 'Price' => 890000000, 'Description' => '_Loại màn hình hiển thị:8K OLED<br>_Kích thước:88<br>_Độ phân giải:7680 x 4320<br>_Màu sắc / Wide Color Gamut:Perfect Color', 'Feature' => 1, 'created_at' => '2021-10-03 03:40:54', 'update_at' => '2021-10-03 03:40:54', 'Quantity_Stock' => 44, 'Quantity_Sold' => 33,], 
            ['Image' => 'SONY SMART TIVI 4K.jpg', 'Product_Name' =>' Smart Tivi 4K Sony KD-50X75 50 inch 4K HDR Android TV', 'Type_ID' => 3, 'Manu_ID' => 8, 'Price' => 16400000, 'Description' => '_Smart Tivi, Tivi Ultra HD<br>_Kích thước màn hình: 50 inch<br>_Độ phân giải: 4K Ultra HD (3840 x 2160px) <br>_Sản xuất tại: Việt Nam<br>_Bluetooth: Có<br>_Kết nối Internet: Wifi, Cổng LAN<br>_Cổng AV: Cổng Composite<br>_Cổng HDMI: 3 cổng<br>_Cổng USB: 2 cổng<br>_Cổng xuất âm thanh: Cổng Optical (Digital Audio Out)<br>_Tích hợp đầu thu kỹ thuật số:DVB-T2', 'Feature' => 1, 'created_at' => '2021-10-17 03:34:21', 'update_at' => '2021-10-17 03:34:21', 'Quantity_Stock' => 35, 'Quantity_Sold' => 30,], 
            ['Image' => 'SONY OLED TV 4K.jpg', 'Product_Name' => 'OLED Tivi 4K Sony 55 inch 55A80J Android TV', 'Type_ID' => 3, 'Manu_ID' =>8, 'Price' => 48200000, 'Description' => '_Mô tả: _ OLED Tivi, Tivi Ultra HD<br>_Kích thước màn hình 55 inch<br>_Độ phân giải 4K Ultra HD (3840 x 2160px) <br> _Sản xuất tại Malaysia<br>_Bluetooth Có<br>_Kết nối Internet Wifi', 'Feature' => 1, 'created_at' => '2021-10-17 03:34:21', 'update_at' => '2021-10-17 03:34:21', 'Quantity_Stock' => 45, 'Quantity_Sold' => 44,], 
            ['Image' => 'SONY ANDROID TV 4K.jpg', 'Product_Name' => 'Smart Tivi 4K 43 inch Sony KD-43X8050H HDR Android TV', 'Type_ID' => 3, 'Manu_ID' => 8, 'Price' => 16790000, 'Description' => '_Mô tả: _Smart Tivi, Tivi Ultra HD<br>_Kích thước màn hình 43 inch<br>_Độ phân giải 4K Ultra HD (3840 x 2160px) <br> _Sản xuất tại Malaysia<br>_Bluetooth Có<br>_Kết nối Internet Wifi', 'Feature' => 1, 'created_at' => '2021-10-17 03:34:21', 'update_at' => '2021-10-17 03:34:21', 'Quantity_Stock' => 6, 'Quantity_Sold' => 26,],
            ['Image' => 'Tai nghe True Wireless JBL Live PRO+ Rose.jpg', 'Product_Name' => 'Tai nghe True Wireless JBL Live PRO+ Rose', 'Type_ID' => 4, 'Manu_ID' => 9, 'Price' => 2990000, 'Description' => '_Bảo hành:12 Tháng<br>_Màu sắc:Rose<br>_Kết nối:Không dây<br>_Chuẩn kết nối:Bluetooth 5.0<br>_Tần số	20 Hz 20 kHz<br>_Trở kháng:16 Ohm<br>_Pin:Li-ion 3.7 V, 55 mAh', 'Feature' => 1, 'created_at' => '2021-10-07 03:45:01', 'update_at' => '2021-10-07 03:45:01', 'Quantity_Stock' => 5, 'Quantity_Sold' => 22,],
            ['Image' => 'Tai nghe True Wireless JBL Tune 115 TWS.jpg', 'Product_Name' => 'Tai nghe True Wireless JBL Tune 115 TWS', 'Type_ID' => 4, 'Manu_ID' => 9, 'Price' => 1390000, 'Description' => '_Thời lượng pin Tai nghe:5 giờ<br>_Hộp sạc:21 giờ<br>_Thời gian sạc:2 giờ<br>_Chống nước:Không<br>_Công nghệ âm thanh:JBL Pure Sound<br>_Micro:Mic đàm thoại<br>_Tương thích:Android, IOS, Windows<br>_Loại thiết kế:In Ear<br>_Số thiết bị kết nối cùng lúc:1 Thiết bị<br>Ứng dụng kết nối:My JBL Headphone', 'Feature' => 0, 'created_at' => '2021-10-03 03:40:54', 'update_at' => '2021-10-03 03:40:54', 'Quantity_Stock' => 41, 'Quantity_Sold' => 40,], 
            ['Image' => 'Tai nghe không dây JBL Tune 700BT.jpg', 'Product_Name' => 'Tai nghe không dây JBL Tune 700BT', 'Type_ID' => 4, 'Manu_ID' => 9, 'Price' => 1990000, 'Description' => '_Model:Tune 700BT<br>_Màu:Đen, Cam, Xanh, Trắng<br>_Tần số:20Hz-20KHz<br>_Trở kháng:32Ohm<br>_Công suất đầu vào tối đa:40mW<br>_Khoảng cách sử dụng:40mm<br>_Truyền độ nhạy:-15 Dbv / Pa<br>_Bluetooth:4.2<br>_Pin: Pin Li-ion Polymer (610mAh / 3.7V) <br>', 'Feature' => 1, 'created_at' => '2021-10-04 05:57:08', 'update_at' => '2021-10-04 05:57:08', 'Quantity_Stock' => 12, 'Quantity_Sold' => 4,], 
            ['Image' => 'Tai nghe Xiaomi Mi Basic.jpg', 'Product_Name' => 'Tai nghe Xiaomi Mi Basic', 'Type_ID' => 4, 'Manu_ID' => 10, 'Price' => 450000, 'Description' => '_Mô tả: Thương hiệu : Xiaomi<br>_Jack cắm	3.5mm<br>_Kích thước	1.25m<br>_Trọng lượng	14g <br>_Chống nước	IPX5 (Mồ hôi,nước mưa <br>_Chất liệu Nhựa<br>_Cổng sạc	Micro USB', 'Feature' => 1, 'created_at' => '2021-10-09 03:36:10', 'update_at' => '2021-10-09 03:36:10', 'Quantity_Stock' => 9, 'Quantity_Sold' => 3,],
            ['Image' => 'Tai nghe Xiaomi True Wireless Earbuds Basic 2.jpg', 'Product_Name' => 'Tai nghe Xiaomi True Wireless Earbuds Basic 2', 'Type_ID' => 4, 'Manu_ID' => 10, 'Price' => 450000, 'Description' => '_Mô tả: Thương hiệu : Xiaomi<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Thơi lượng pin	Tai nghe : 5 giờ - Hộp sạc: 20 giờ<br>_Thời gian sạc	1.5 giờ<br>_Chống nước	IPX5 (Mồ hôi,nước mưa)<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2', 'Feature' => 1, 'created_at' => '2021-10-03 03:40:54', 'update_at' => '2021-10-03 03:40:54', 'Quantity_Stock' => 5, 'Quantity_Sold' => 2,],
            ['Image' => 'Tai nghe không dây Xiaomi Earphones 2 Basic BHR4089GL.jpg', 'Product_Name' => 'Tai nghe không dây Xiaomi Earphones 2 Basic BHR4089GL', 'Type_ID' =>4, 'Manu_ID' => 10, 'Price' => 850000, 'Description' => '_Mô tả: Thương hiệu : Xiaomi<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Thơi lượng pin	Tai nghe : 5 giờ - Hộp sạc: 20 giờ<br>_Thời gian sạc	1.5 giờ<br>_Chống nước	IPX5 (Mồ hôi,nước mưa)<br>_Cách kết nối	Bluetooth<br>_Chất liệu	Nhựa<br>_Cổng sạc	Micro USB<br>_Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2', 'Feature' => 1, 'created_at' => '2021-10-17 03:34:21', 'update_at' => '2021-10-17 03:34:21', 'Quantity_Stock' => 25, 'Quantity_Sold' => 25,], 
            ['Image' => 'Loa Bluetooth Xiaomi Mi Compact Speaker 2.jpg', 'Product_Name' => 'Loa Bluetooth Xiaomi Mi Compact Speaker 2', 'Type_ID' => 5, 'Manu_ID' => 10, 'Price' => 290000, 'Description' => '_Mô tả: Thương hiệu : Xiaomi<br>_Model: XMWXCLYYX01ZM<br>_Kích thước: 234 x 86.5 x 73.9mm<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Kích thước màn loa: 40mm<br>_Công suất loa: 5W<br>_Cách kết nối	Bluetooth<br>__Chất liệu	Nhựa<br>__Cổng sạc	Micro USB<br>__Dãy Tần số	200Hz ~ 18kHz(-10dB) <br>_Kết nối	BT 4.2', 'Feature' => 1, 'created_at' => '2021-10-03 03:40:54', 'update_at' => '2021-10-03 03:40:54', 'Quantity_Stock' => 25, 'Quantity_Sold' => 55,],
            ['Image' => 'Loa Bluetooth Tích Hợp Sạc Không Dây Xiaomi XMWXCLYYX01ZM.jpg', 'Product_Name' => 'Loa Bluetooth Tích Hợp Sạc Không Dây Xiaomi XMWXCLYYX01ZM', 'Type_ID' => 5, 'Manu_ID' => 10, 'Price' => 1150000, 'Description' => '_Mô tả: Thương hiệu : Xiaomi<br>_Model: XMWXCLYYX01ZM<br>_Kích thước: 234 x 86.5 x 73.9mm<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Kích thước màn loa: 40mm<br>_Công suất loa: 5W<br>_Công suất sạc không dây: 30W<br>_Điện áp đầu vào: 15V/3A<br>_Khoảng cách sạc: ≤4mm<br>_Nhiệt độ hoạt động: 0°C - 45°C', 'Feature' => 0, 'created_at' => '2021-10-17 03:34:21', 'update_at' => '2021-10-03 03:40:54', 'Quantity_Stock' => 52, 'Quantity_Sold' => 2,],
            ['Image' => 'Loa Bluetooth Outdoor Xiaomi Portable Speaker 16W (MDZ-36-DB).jpg', 'Product_Name' => 'Loa Bluetooth Outdoor Xiaomi Portable Speaker 16W (MDZ-36-DB)', 'Type_ID' => 5, 'Manu_ID' => 10, 'Price' => 890000, 'Description' => 'Thương hiệu : Xiaomi<br>Model: XMWXCLYYX01ZM<br>_Kích thước: 234 x 86.5 x 73.9mm<br>_Bluetooth: 5.0<br>_Phạm vi kết nối: ≤10m<br>_Kích thước màn loa: 40mm<br>_Công suất loa: 5W<br>_Công suất sạc không dây: 30W<br>_Điện áp đầu vào: 15V/3A<br>_Khoảng cách sạc: ≤4mm<br>_Nhiệt độ hoạt động: 0°C - 45°C', 'Feature' => 0, 'created_at' => '2021-10-13 09:08:39', 'update_at' => '2021-10-03 03:40:54', 'Quantity_Stock' => 8, 'Quantity_Sold' => 	6,],
        ]);
    }
}
