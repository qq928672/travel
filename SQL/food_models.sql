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
-- 資料表結構 `food_models`
--

CREATE TABLE `food_models` (
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
-- 傾印資料表的資料 `food_models`
--

INSERT INTO `food_models` (`id`, `name`, `imagefile`, `phone`, `location`, `type`, `info`, `created_at`, `updated_at`) VALUES
(0, '小次郎冰品披薩餐飲', 'Fod_3.jpg', '電話:07-366-2388', '高雄市楠梓區海專路429-1號', '1', '除了義大利麵與自製的窯烤披薩，還有飲品與創意雪花冰', NULL, NULL),
(16, '蘇西女孩', 'Fod_1.jpg', '電話:07-354-3468', '高雄市楠梓區土庫二路62號', '1', '主要有義大利麵、焗烤、鄉村料理、以及火鍋簡餐。', NULL, NULL),
(18, '塔庫先生和食工坊', 'Fod_2.jpg', '電話:07-585-9999', '站前北路左營區高雄市813', '1', '目前有丼飯系列,定食系列,咖哩系列,烏龍麵系列,散壽司系列等….料理', NULL, NULL),
(21, '北平楊寶寶蒸餃', 'Fod_5.jpg', '電話:07-351-6600', '高雄市楠梓區朝明路106號', '1', '蒸餃有豬肉、牛肉及花素口味，另外還有鍋貼、捲餅、蔥油餅、酸辣湯、玉米濃湯、小菜及飲料等，餃子、鍋貼及捲餅的價位落在 $70 – $80 / 籠 ', NULL, NULL),
(22, '郜記涼麵', 'Fod_6.jpg', '電話:07-351-7088', '高雄市楠梓區創新路7號', '1', '除了涼麵以外，還有鍋燒類、川式麻辣、飯麵類，份量足夠，中餐的好選擇。', NULL, NULL),
(23, '吃飽飽宵夜吐司', 'Fod_4.jpg', '電話:07-355-0568', '高雄市楠梓區土庫路120-3號', '1', '平價美味的餐點，有漢堡、蛋餅類、熱壓吐司等等，適合朋友消夜聚餐的好地方。', NULL, NULL),
(24, '北港三代蔡家筒仔米糕', 'LF1.jpg', '電話:07-551-7443', '高雄市鹽埕區河西路167號', '2', '蔡家的米糕在味道上算是比較重口味的感覺，幾乎滲透到所有米飯的滷汁，配上大量的豬肉跟香菇，相當美味。', NULL, NULL),
(25, '美紅豆漿', 'LF2.jpg', '電話:07-5880-191', '高雄市左營區果峰街5號', '2', '必點：酸菜蛋餅（辣／不辣）', NULL, NULL),
(26, '阿霞燒肉飯－古早味烤肉飯', 'LF3.jpg', '電話:07-2361516', '高雄市新興區復興一路70號', '2', '簡單的幾片燒肉澆上滷汁後再放上兩三片醃蘿蔔，這組合真的是非常的復古，印象中在自助餐或便當店盛行之前所吃到的飯幾乎都是長這副模樣。', NULL, NULL),
(27, '正牌白糖粿', 'LF4.jpg', '營業時間：1230-2230', '高雄市前鎮區興中二路和自強一路路口', '2', '正牌白糖粿－南部人的特有點心，外酥內軟', NULL, NULL),
(28, '虱目魚專賣店', 'LF5.jpg', '電話:07-531-1077', '高雄市鹽埕區新興街77號', '2', ' 常見的虱目魚粥外，還有魚肚麵線、煎魚肚或魚肚湯，一片虱目魚有很多種吃法。', NULL, NULL),
(29, '鳳山體育館蔥肉餅', 'LF6.jpg', '', '高雄縣鳳山市安寧街（鳳山體育館側門）', '2', '南部才有的蔥肉餅，路邊攤排隊美食', NULL, NULL),
(30, '鴨肉和', 'Hit1.jpg', '電話：07-281-2988', '高雄市三民區建國三路395-1號', '3', '用料很新鮮實在，當歸湯非常夠味好喝、溫暖滋味\r\n飄香超過70年老字號的高雄美食 鴨肉和', NULL, NULL),
(31, '吳媽媽米粉羹', 'Hit2.jpg', '電話:07-581-2664', '高雄市左營區果峰街44號', '3', '爽口不油膩，米粉羹屬於比較湯湯水水，沒有過多勾芡，實在美味爽口', NULL, NULL),
(32, '光遠鬆餅坊', 'Hit3.jpg', '電話：07-251-6321', '高雄市前金區自強三路245號', '3', '銅板價格就可以吃到爆餡料鬆餅，可以直接點餐或者寫單，也有飲料可以搭配挑選。', NULL, NULL),
(33, '菜市仔嬤左營餛飩', 'Hit4.jpg', '電話：0983-030-545', '高雄市三民區熱河一街301號', '3', '高雄必吃美食菜市仔嬤左營餛飩，也是尼力從學生時代吃到現在的老字號餛飩店\r\n目前有好幾家門市，隨處都可以吃到古早味阿嬤級的飄香滋味。', NULL, NULL),
(34, '梨大蛋中蛋（小山丘甜點手作坊）', 'Hit5.jpg', '電話：(07)662-6977', '高雄市旗山區永安街1號', '3', '跟一般韓國雞蛋糕的風味完全不同，口感也不同\r\n價格一顆35元，3顆100 元，價格算蠻貴的，不過很值得吃唷。', NULL, NULL),
(35, '永和小籠湯包', 'Hit6.jpg', '電話：0912-436-908', '鹽埕區鹽埕街33號', '3', '鹽埕老自好永和小籠湯包，是許多外地人不知道的好吃小籠湯包\r\n平價美食，都是老闆每天新鮮現做，也可以看到老闆現場製作、現場桿皮。', NULL, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `food_models`
--
ALTER TABLE `food_models`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `food_models`
--
ALTER TABLE `food_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
