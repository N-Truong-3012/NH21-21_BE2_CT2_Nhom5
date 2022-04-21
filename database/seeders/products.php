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
        ]);
    }
}
