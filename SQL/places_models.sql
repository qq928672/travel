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
-- 資料表結構 `places_models`
--

CREATE TABLE `places_models` (
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
-- 傾印資料表的資料 `places_models`
--

INSERT INTO `places_models` (`id`, `name`, `imagefile`, `phone`, `location`, `type`, `info`, `created_at`, `updated_at`) VALUES
(1, '左營廍後薛家古厝', 'P_1.jpg', '是否開放：否', '高雄市左營區海平路40號', '1', '薛家古厝保存完整，具有傳統民宅建築風格；現今仍有部分子孫居住，而部分租賃給外姓人家。', NULL, NULL),
(2, '美濃水橋', 'P_2.jpg', '開放時間：全天候自由參觀', '高雄市美濃區永安路旁', '1', '美濃水橋除了灌溉功能之外，也成為當地居民生活嬉戲的重要集體記憶，以及舉辦相關紀念活動的重要地點。', NULL, NULL),
(3, '旗山國小', 'P_3.jpg', '開放時間：週一至週五8:00-16:00 (週六、日公休)', '高雄市旗山區鼓山里華中街十鄰44號', '1', '目前為學生上課及活動場所，中山堂時常開放提供機關開會或文教活動用。', NULL, NULL),
(4, '旗山天后宮', 'P_4.jpg', '開放時間：週一至週日 06:00~22:00', '高雄市旗山區湄洲里永福街23巷16號', '1', '這些精緻的建築藝術以及豐富的歷史文物，充分象徵天后宮在旗山區內的崇高地位。', NULL, NULL),
(5, '竹寮取水站', 'P_5.jpg', '請逕洽自來水公司第七區管理處坪頂廠，(07)651-2077趙坤耀先生', '高雄市大樹區竹寮路47號', '1', '主體建築為日治時期洋風樣式之建築，機房與修護廠為大跨度木造構架；本樣式受二十世紀初歐洲現代設計的影響，在台灣眾多自來水設施中獨具特色。', NULL, NULL),
(6, '金瓜寮聖蹟亭', 'P_6.jpg', '開放時間：全天候自由參觀', '高雄市美濃區德興段574地號', '1', '金瓜寮聖蹟亭為當地居民劉添傳所建，至今約有百年的歷史，採用清末傳統形式的磚材及古式灰漿建造，外觀為清水磚砌三層六角造型，', NULL, NULL),
(7, '高雄展覽館', 'SP_1.jpg', '開放時間:一~日,10:00~18:00', '高雄市前鎮區成功二路39號', '2', '是國內首座取得智慧建築的會展中心，展覽館的屋頂以一萬多片高低起伏的鋁合金屬板型，塑造出的波浪造型，結合建築物東西向玻璃帷幕牆映射出的港區景象及市區建築倒影，令人印象深刻。', NULL, NULL),
(8, '高雄市立圖書館總館', 'SP_2.jpg', '開放時間：週一休息，其他時間10:00~22:00', '高雄市前鎮區新光路61號', '2', '圖書館明亮的空間，是許多學生和民眾讀書的好地方，館內採懸吊式結構系統建構為「館中有樹、樹中有館」的綠建築，也因此榮獲全台十大非去不可圖書館冠軍。', NULL, NULL),
(9, '真愛碼頭站', 'SP_3.jpg', '開放時間：全時間開放', '真愛碼頭站位於高雄市鹽埕區。', '2', '是輕軌全線唯一的高架車站，月台屋頂就像海豚跳躍於海面上，與海音中心的海洋意象相呼應，被譽為最美的輕軌車站。', NULL, NULL),
(10, '捷運美麗島站', 'SP_4.jpg', '開放時間：捷運營業時間內', '捷運美麗島站', '2', '擁有由義大利國寶級藝術家水仙大師耗費4年半創作而成的「光之穹頂」，是全球最大單一玻璃公共藝術品，每塊玻璃都呈現出重生與包容的意境，十分特別！', NULL, NULL),
(11, '衛武營國家藝文中心', 'SP_5.jpg', '開放時間：星期一~日，11:00~21:00', '830高雄市鳳山區三多一路1號', '2', '衛武營整座建築的屋頂是由同一塊建材打造而成，以波浪狀的曲線打造未來感的外觀，讓許多人對衛武營特別的建築外型留下深刻的印象。', NULL, NULL),
(12, '愛河之心', 'SP_6.jpg', '開放時間：全天候開放', '804高雄市鼓山區龍德路2號', '2', '結合水陸觀光與滯洪池、生態整治的「愛河之心」，是個散步休閒的好地方，加上捷運、公車都能抵達的便利性，也吸引許多旅客來這一探愛河美麗的風采。', NULL, NULL),
(13, '駁二藝術特區', 'Ar_1.jpg', '開放時間：星期一~日，10:00~18:00', '高雄市鹽埕區大勇路1號', '3', '亞洲新灣區北岸，愛河匯入高雄港交界，地處承載高雄歷史記憶的鹽埕埔，臺灣水岸文創廊帶第一個新亮點。', NULL, NULL),
(14, '橋仔頭糖廠白屋藝術村', 'Ar_3.jpg', '開放時間：星期一~日，0900~18:00', '高雄市橋頭區興糖路4巷1號', '3', '', NULL, NULL),
(15, 'WAllRIORS國際街頭藝術', 'Ar_4.jpg', '開放時間：全時段開放', '捷運衛武營站5號出口出來就到了', '3', '齊聚高雄苓雅區的衛武里，把老舊建築外牆美化，\r\n還出動大型吊車高空創作，共彩繪了24面大型壁畫，\r\n打造全國首座大型藝術壁畫社區。', NULL, NULL),
(16, '哈瑪星鐵道文化園區', 'Ar_5.jpg', '開放時間：24小時營業', '高雄市鼓山區鼓山一路32號', '3', '哈瑪星鐵道文化園區原為高雄港站，是高雄第一個火車站，為高雄當時開啟了海陸聯運的發展。', NULL, NULL),
(17, '椅子樂譜', 'Ar_6.jpg', '開放時間：24 小時營業', '高雄市鹽埕區公園二路13-24號', '3', '椅子樂譜創作人顏名宏先生，\r\n使用上千張校園回收舊椅子，創作出這件藝術作品\r\n也讓大家童年回憶中課椅有了新生命。', NULL, NULL),
(18, '高雄市立美術館', 'Ar_2.jpg', '開放時間：星期一休息，二~五1130~1730，六日0930~1730', '高雄市鼓山區美術館路80號', '3', '成為南部地區最重要的現代藝術文化樞紐，扮演著匯集本土與國際資源、展現藝術人文的重任。', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `places_models`
--
ALTER TABLE `places_models`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `places_models`
--
ALTER TABLE `places_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
