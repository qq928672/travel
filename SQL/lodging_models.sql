-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `travel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `lodging_models`
--

CREATE TABLE `lodging_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `lodging_models`
--

INSERT INTO `lodging_models` (`id`, `name`, `imagefile`, `phone`, `location`, `type`, `info`, `created_at`, `updated_at`) VALUES
(1, '草地人溫泉民宿', 'B_1.jpg', '07-679-1992', '高雄市六龜區新開路33之1號', '1', '提供休閒房型的低調民宿，房內均備有電視，設施包括戶外泳池與躺椅，可享迷人山景。', NULL, NULL),
(2, '一家人本舖民宿', 'B_2.jpg', '07-689-2007', '848高雄市桃源區寶山巷', '1', '高雄藤枝森林一家人本舖\r\n藤枝有「南台小溪頭」之稱，四季如畫步道穿林相連，\r\n一家人本舖，便在這美景之中\r\n', NULL, NULL),
(3, '木森林香草民宿', 'B_3.jpg', '07-689-5866', '高雄市六龜區舊潭211號', '1', '位於高雄六龜的木森林香草園，是由曾當過海軍驅逐艦的艦長，人稱二哥的任潭先生所開設。', NULL, NULL),
(4, '海軍官邸四號院高雄左營眷村民宿', 'B_4.jpg', '0929-969-789', '813高雄市左營區4號', '1', '隱身在高雄左營眷區的一處幽居，前身是日遺海軍眷舍，具時代感且獨一無二的雅致民宿，適合放空，回憶，充電......', NULL, NULL),
(5, '71cafe溫度民宿 ', 'B_5.jpg', '0929-873-110', '高雄市三民區西安街71號', '1', '71 Cafe 溫度民宿距離高雄市立美術館 1.7 公里，提供附免費自行車、公共休息區和共用廚房的住宿環境。全館均設有免費 WiFi。', NULL, NULL),
(6, '蔚宿佳塩_民宿', 'B_6.jpg', '0919-219-300', '高雄市鼓山區東門路85巷9號', '1', '位於高雄的窩李小幸民宿，提供空調和免費 WiFi，且距離瑞豐夜市 600 公尺。\r\n客房均設有洗衣機、平面電視（附衛星頻道）、冰箱，並備有沙發、書桌、微波爐、水壺。', NULL, NULL),
(13, '高雄漢來大飯店', 'Ho1.jpg', '電話:07-216-1766', '高雄市前金區成功一路266號', '2', '高雄漢來大飯店緊鄰大海，所在區域是高雄市中心，可以可直達購物中心。', NULL, NULL),
(14, '翰品酒店高雄', 'Ho2.jpg', '電話：07-521-7388', '高雄市鹽埕區大仁路43號', '2', '翰品酒店高雄位於高雄的高雄市中心，住宿坐落於市中心且鄰近地鐵站。', NULL, NULL),
(15, '康橋大飯店 - 站前館', 'Ho3.jpg', '電話：07-238-6677', '高雄市三民區建國二路295號', '2', '康橋大飯店 - 站前館位於高雄的高雄市中心，住宿坐落在賭城大道上且鄰近地鐵站。', NULL, NULL),
(16, '高雄華園飯店', 'Ho4.jpg', '電話:07-241-0123', '高雄市前金區六合二路279號', '2', '高雄華園飯店位於高雄的高雄市中心，住宿坐落於市中心且鄰近地鐵站。', NULL, NULL),
(17, '西子灣沙灘會館', 'Ho5.jpg', '電話：07-525-0005', '高雄市鼓山區蓮海路51號', '2', '西子灣沙灘會館位於高雄的鼓山區，住宿坐落在專用海灘上。', NULL, NULL),
(18, '巨蛋旅店', 'Ho6.jpg', '電話：07-586-8388', '高雄市鼓山區文忠路1號', '2', '巨蛋旅店位於高雄的鼓山區，離購物區非常近。如果您有一長串必買清單，那可以去瑞豐夜市和六合夜市把東西一次買齊。', NULL, NULL),
(19, '歐遊國際連鎖精品旅館高雄館', 'Mo1.jpg', '電話：07-749-3333', '高雄市苓雅區建國一路73號', '3', '充滿異國情調的「歐遊國際連鎖精品旅館高雄館」，每間套房都有獨特另類的設計風格和主題裝飾，在所有室內及半戶外的空間中，融入浪漫心動的美感。', NULL, NULL),
(20, '四季精品汽車旅館', 'Mo2.jpg', '電話：07-552-3322', '高雄市鼓山區裕誠路1789號', '3', '「四季精品汽車旅館」平常便是不少無法出國旅遊渡假、卻渴望忘卻煩惱的朋友，想要短暫逃離並寄託放鬆的世外桃源。房間坪數寬敞，置身其中可感到自在的空間且保有隱密感。', NULL, NULL),
(21, '伊甸風情精品旅店', 'Mo3.jpg', '電話：07-974-0888', '高雄市鼓山區裕誠路1685號', '3', '以世界各地變化多端的風貌做為主題，營造出多達近五十種情境空間的「伊甸風情精品旅店」，徹底跳脫一般人對Motel的印象，以超六星級豪華汽車旅店的概念，來滿足各類型房客內在想要的驕寵。', NULL, NULL),
(22, '打狗戀館', 'Mo4.jpg', '電話：07-812-9988', '高雄市小港區港平路167號', '3', '「打狗戀館」的建築外觀，就像一幢象徵純淨愛情的白色戀館，為了迎合戀人們的所有需求而提供一處私密的愛情聖地。', NULL, NULL),
(23, '高雄御宿商旅明華館', 'Mo5.jpg', '電話：07-522-2658', '高雄市鼓山區明華路257號', '3', '外部裝潢新穎時尚、內部陳設高雅精緻的「高雄御宿商旅明華館」，以極具品味的質感來吸引崇尚時尚感，且較喜歡閒適安逸的情侶組。', NULL, NULL),
(24, '高雄花鄉汽車旅館-蓮潭館', 'Mo6.jpg', '電話:07-347-0111', '高雄左營區文智路95號', '3', '花鄉時尚汽車旅館-蓮潭店．高雄捷運生態園區站、左營火車站附近飯店 花鄉時尚汽車旅館-蓮潭店為高雄花鄉集團旗下飯店，多年來以方便的地理位置讓許多遊客留下美好回憶。', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `lodging_models`
--
ALTER TABLE `lodging_models`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lodging_models`
--
ALTER TABLE `lodging_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
