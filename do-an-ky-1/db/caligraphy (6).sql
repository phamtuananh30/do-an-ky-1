-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2022 at 03:19 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caligraphy`
--

-- --------------------------------------------------------

--
-- Table structure for table `advises`
--

CREATE TABLE `advises` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `users_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `detail_category` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advises`
--

INSERT INTO `advises` (`id`, `name`, `email`, `phone`, `address`, `content`, `users_id`, `category_id`, `detail_category`, `created_at`, `update_at`) VALUES
(25, 'Phạm Tuấn Anh', 'phamtuananh2101@gmail.com', '0836668336', 'Ha Noi', 'Toi can tu van', NULL, NULL, NULL, '2022-06-29 15:05:10', '2022-06-29 15:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `detail_category_id` int(11) DEFAULT NULL,
  `url` text,
  `describes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `detail_category_id`, `url`, `describes`) VALUES
(1, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-viet-duc-cuong-thu-phap.jpg', 'Vietnamese calligraphy paintings-calligraphy'),
(2, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/2019_09_28_11_08_IMG_2184-min.jpg', ''),
(8, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/2019_12_19_09_19_IMG_5146-min.jpg', ''),
(9, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/2020_01_28_16_01_IMG_6700-min.jpg', ''),
(10, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_1350-min.jpg', ''),
(11, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_1351-min.jpg', ''),
(12, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_1355-min.jpg', ''),
(13, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_1359-min.jpg', ''),
(14, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_1360-min.jpg', ''),
(15, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_3200-min.jpg', ''),
(16, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_1350-min.jpg', ''),
(17, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/IMG_1357-min.jpg', ''),
(18, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/thu-phap-chu-nhan-min.jpg', 'Calligraphy paintings: sometimes rings to peace, sometimes the ring is immense'),
(19, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/thu-phap-chu-song-min.jpg', 'Calligraphy works live'),
(20, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/thu-phap-chu-tam-min.jpg', 'Calligraphy paintings: Take wisdom as a career - take love as life!'),
(21, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/thu-phap-chu-tri-min.jpg', 'Calligraphy paintings of the sentence: Ancestor of merit thousands of years of prosperity - Descendants of Thao Hien thousand life Vinh!'),
(22, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-cau-doi.jpg', 'Calligraphy paintings Loc Loc: Da Loc multi -talented multi -blessing - Thac Thac Thac Human Respondent!'),
(23, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-loc.jpg', 'Calligraphy painting with lotus blessing: Phuc full of wealthy year - Duc is full of glory!'),
(24, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-phuc-hoa-sen.jpg', 'Calligraphy paintings live lotus'),
(25, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-song-hoa-sen.jpg', 'Calligraphy paintings of talented peony: Talent bravery, so career, harmonious virtue to create success!'),
(26, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-tai-hoa-mau-don.jpg', 'Calligraphy paintings of the word Thuan: During the time of Hung Long Phuc, Phung Phung Phat Dat Phat Phat Loc Tai Sinh'),
(27, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-thanh.jpg', 'Calligraphy painting'),
(28, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-thuan.jpg', 'Calligraphy paintings of blessings: The family of thousands of peace, fortune to blessing is full of fullness !!'),
(29, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-thuong.jpg', 'Calligraphy paintings of love: The couple Nghia is heavy and deep, loving each other until the first silver is still injured'),
(30, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-viet-chu-dai-bi.jpg', 'Calligraphy paintings of husband and wife'),
(31, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-viet-chu-huong-sen.jpg', 'German calligraphy painting'),
(32, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-viet-chu-phuc.jpeg', 'Calligraphy paintings of peace'),
(33, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-viet-chu-thuong.jpg', 'Calligraphy painting'),
(34, 1, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-thu-phap-chu-viet-chu-vo-chong.jpg', 'Phuc Loc Tho calligraphy painting'),
(35, 2, 'https://i.pinimg.com/originals/e2/aa/37/e2aa377fab09b27bbd54976fa3485696.jpg', NULL),
(36, 2, 'https://i.pinimg.com/564x/9e/b1/80/9eb1806a76895ad05acea6420e3030d3.jpg', NULL),
(37, 2, 'https://i.pinimg.com/564x/49/dc/f7/49dcf70ce4b010ea668b06bbcd33215f.jpg', NULL),
(38, 2, 'https://i.pinimg.com/564x/aa/20/77/aa2077ec77a9da5313c938e5c5bfd136.jpg', NULL),
(39, 2, 'https://godinh.com/web/image/product.image/67560/image_1024?unique=2f0831a', 'Peak wood\r\nThe statue of Dat Ma sat meditation wood nu nu nu 62 horizontal 40 deep 50 (cm)'),
(40, 2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/BodhidharmaYoshitoshi1887.jpg/450px-BodhidharmaYoshitoshi1887.jpg', NULL),
(41, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1ILFKcyKebwwITGhost3VwbSoGIGSEBxsJg&usqp=CAU', NULL),
(42, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-JIBC_MMnm2UpJlPlZ-5gLl3-HrP1ZLdAbw&usqp=CAU', 'Rice painting of Ma Ma To'),
(43, 2, 'https://i.pinimg.com/564x/aa/20/77/aa2077ec77a9da5313c938e5c5bfd136.jpg', 'When it comes to Zen Buddhism, people often think of Bodhidharma) He is the 28th nest of Zen Buddhism and is considered the nest of Zen Buddhism'),
(44, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7uwhxt1Do_rh92C5vD10vHgJ8Ga0CupxJOA&usqp=CAU', NULL),
(53, 3, 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Basmalah-1wm.svg/1200px-Basmalah-1wm.svg.png', 'Basmala in the XVIII century Islamic Calligraphy works from Ottoman'),
(54, 3, 'http://vyctravel.com/libs/upload/ckfinder/images/H_A/upweb/PAP3.jpg', NULL),
(55, 3, 'https://banner2.cleanpng.com/20180502/vje/kisspng-quran-allah-arabic-calligraphy-islam-arabic-letters-calligraphy-5ae99363649043.5794921315252570594119.jpg', NULL),
(56, 3, 'https://png.pngtree.com/element_our/png_detail/20180830/arabic-words-calligraphy-png_74477.jpg', NULL),
(57, 3, 'https://image.winudf.com/v2/image/Y29tLnB0bi5BMUFyYWJpY0NhbGxpZ3JhcGh5X3NjcmVlbl8wXzE1MzY4OTc5MjNfMDgx/screen-0.jpg?fakeurl=1&type=.webp', 'Calligraphy is writing Arabic. For me, calligraphy is a very beautiful art or text that is often written in people who are fluent in the field of calligraphy. There are'),
(58, 3, NULL, NULL),
(59, 3, 'https://png.pngtree.com/element_our/png_detail/20180830/arabic-words-calligraphy-png_74468.jpg', NULL),
(60, 3, 'https://sc04.alicdn.com/kf/H955aeef85f484299a054070e6ac85cbew.jpg', NULL),
(61, 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEPZYocpdoGxoJOZtxCSICTbOu3xjRX3mlMg&usqp=CAU', NULL),
(62, 3, 'https://dichthuatcongchunghanoiblog.files.wordpress.com/2017/09/5-su-that-thu-vi-ve-tieng-a-rap.jpg?w=809', 'This is also one of the six official UN languages since 1973.'),
(63, 3, 'https://userscontent2.emaze.com/images/32c776ad-5fef-4f70-8b04-2f89d2a10aa3/427040fd2a3f0f30d2f314e62a9d4031.jpg', 'Since 2010, the UN has celebrated the Arab language anniversary on December 18 every year, as a way to raise cultural awareness.'),
(64, 3, 'https://lzd-img-global.slatic.net/g/p/fda02fb656d26e1bb598929ef38f9d48.jpg_720x720q80.jpg_.webp', 'Along translation 1 learn about interesting Arabic things, to gain more knowledge about one of the ancient languages used today (about 1,500 years old)'),
(73, 2, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-dat-ma-su-tam-khong.jpg', 'Calligraphy painting Dat Ma To - Tam Khong'),
(74, 2, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-dat-ma-su-thoat.jpg', 'Calligraphy painting of Ma Ma To - Escape'),
(75, 3, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-dat-ma-su-sac-thai.jpg', 'Calligraphy painting Dat Ma To - Shades'),
(76, 2, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-dat-ma-su-sac-khong.jpg', 'Calligraphy painting Dat Ma To - Sac Khong'),
(77, 2, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tu-tai.jpg', 'Calligraphy painting Dat Ma To - Fruit at'),
(78, 2, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-dat-ma-su-to-tro-ve-an-nhien-min.jpg', 'Calligraphy painting Dat Ma To - Return to An Nhien'),
(79, 2, 'https://duccuongthuphap.com/wp-content/uploads/2018/11/tranh-dat-ma-su-phat-tai-tam.jpg', 'Calligraphy painting Dat Ma To - Buddha in Tam'),
(80, 4, 'https://i.ytimg.com/vi/VmToEfhNotk/maxresdefault.jpg', NULL),
(81, 4, 'http://harukavn.com/vi/wp-content/uploads/2016/08/c.jpg', NULL),
(82, 4, 'https://luyenchudep.net/wp-content/uploads/2019/08/hoc-viet-thu-phap-chu-han-3.jpg', NULL),
(83, 4, 'https://luyenchudep.net/wp-content/uploads/2019/08/hoc-viet-thu-phap-chu-han-1.jpg', NULL),
(84, 4, 'http://tiengtrungnet.com/wp-content/uploads/2016/11/60-font-chu-thu-phap-tieng-trung-tiengtrungnet.com-hoc-tieng-trung-thay-vu.jpg', NULL),
(85, 4, 'https://i.pinimg.com/564x/dc/68/6b/dc686b3432492f44eebf467e587df8db.jpg', NULL),
(86, 4, 'https://cdn.vanhoaphuongdong.vn/uploads/images/2019_03_14_51874f6d96.png', NULL),
(87, 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnJ9wXIvvKyNtlhvnh6hE2iKvDUbImOOnV7FDcu2iSIIzRCG_ry5J7o1asgslAPsdnpY8&usqp=CAU', NULL),
(88, 4, 'https://icdn.dantri.com.vn/a3HWDOlTcvMNT73KRccc/Image/2013/05/DSC01191-08aa5.JPG', NULL),
(89, 4, 'https://nguyentandich.com/wp-content/uploads/2021/08/chu-loc-tieng-han.jpg', NULL),
(90, 4, 'https://123design.org/wp-content/uploads/2020/10/wk104-1rfq.jpg', NULL),
(91, 4, 'https://scr.vn/wp-content/uploads/2020/11/Kieu-chu-nhan-thu-phap-trong-tieng-Viet-va-tieng-Trung.png.webp', NULL),
(92, 4, 'https://scr.vn/wp-content/uploads/2020/11/Anh-chu-tieng-Trung-thu-phap.jpg', NULL),
(93, 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaLYB4ERW3m9uNusdCnfWFjJyGsE3sRWmYpQ&usqp=CAU', NULL),
(94, 4, 'https://nipponkiyoshi.files.wordpress.com/2014/12/untitled-18.jpg', NULL),
(95, 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2Ceg0IQ8RJVOfNTLMrbaU6TE6luWm3_NQL4udz_3lHsXXrghLeUYzp-Lnue7-5Po47ng&usqp=CAU', NULL),
(96, 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJz-hHgKhkdy6ZusX1dlANFkQFLxAQy2MaQfF_GzsXQIMD0CLD0WVlMr5k3DcnTXR4DBU&usqp=CAU', NULL),
(97, 4, 'https://scr.vn/wp-content/uploads/2020/11/Me-man-mau-tranh-thu-phap-tieng-Trung-doc-dao.jpg', NULL),
(98, 4, 'https://cf.shopee.vn/file/050a4af94e02ca63dcec2d984be1abaf', NULL),
(99, 4, 'https://zhongruan.edu.vn/ckfinder/userfiles/images/8_2021/thu-phap-trung-quoc-2.jpeg', NULL),
(100, 4, 'https://vnn-imgs-f.vgcloud.vn/2019/02/03/17/meo-xin-chu-de-lam-an-buon-ban-vua-hop-menh-vua-phat-tai.jpg', NULL),
(101, 4, 'https://sites.google.com/site/lethanhnhue/_/rsrc/1472875638814/home/trang-ca-nhan/phuc-loc-tho/PLTH1.jpg', NULL),
(102, 4, 'https://tiengtrunganhduong.com/images/201908/thu-phap-chu-nhan-01/thu-phap-chu-nhan-01.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `created_at`, `update_at`) VALUES
(1, 'Calligraphy', NULL, NULL),
(2, 'Vietnamese Calligraphy', NULL, NULL),
(3, 'Arab Calligraphy', NULL, NULL),
(4, 'Chinese Calligraphy', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_category`
--

CREATE TABLE `detail_category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_category`
--

INSERT INTO `detail_category` (`id`, `title`, `thumbnail`, `content`, `created_at`, `update_at`, `category_id`) VALUES
(1, 'Calligraphy', NULL, '<h3>Vietnamese calligraphy painting</h3> <p>In Vietnam in the past, every Tet holiday- Spring comes, people often come to the homes or people or people or words to ask for words to hang like a picture, both a decoration but also just Mental food.</p>  <p>The masters or people or letters for the word by writing one or more words on a large piece of paper, with content that is chanting or educating, the handwriting is often praised as beautiful as a dragon flying- phoenix dancing.</p>  <p>The Eastern people in general and Vietnam in particular promote the writing on the top, they think the home decorations: most letters, second paintings, Tam Tranh, Tu Kieng and consider it a spiritual art form.</p>  <p>Vietnamese calligraphy has the most essence of humanity when combining the two East-West cultures. Using the Eastern feathers and ink to write the Western Latin letters.</p><p> Despite being late after birth, but today <b> Vietnamese calligraphy </b> is being concerned by many people and receiving this art in a positive way. Not only is the material on paper but grows on wood, ceramics, bamboo blinds, ... carrying new things of modern trends and development.<p>Mai Duc Cuong, an artist with a very young age with a passion for traditional art, has been charming with his father\'s cultural pen. Gradually asserting himself in the heart of writing artistic art but wider with the public across the country through exhibitions that he participated in with impressive works.</p>', NULL, NULL, 1),
(2, 'Painting Dat Ma To', NULL, '<h3>Painting Dat Ma To</h3><p> When it comes to <b> Zen Buddhism </b> people often think of <b> Bodhi Dat Ma </b> (Bodhidharma) He is the 28th nest of the Indian Zen Buddhism and is considered a brief nest of Zen Buddhism. </p> <p>Around his mysterious appearance and departure, there was a lot of debate throughout history to this day.</p><p>But it was those debates that those rumors created an image of a legend with mysterious stories that left the human.</p> <p>In order to discover the mystery as well as the faith in Him that many people today come to him to compete for him to resolve the sadness, believe in themselves and feel more pure.</p>  <p>Họ tin rằng tranh được treo trong nhà có thể <b>trấn trạch</b> và <b>tránh tà ma ngoại đạo xâm nhập</b>, giúp loại bỏ tà khí xấu và sinh ra năng lượng tốt giúp gia đình ấm êm, làm ăn thịnh vượng.</p> <p>From those histories is also the endless source of the paintings of students.</p><p> It is also the <b> Nine Nine -Youth Bich </b>, which is also <b> achieving the ghostly </b> but with the talented hand the author has blown soul into every picture is every stroke On the difference, each state mood is different. </p> <p>Chúng ta hãy cùng nhau chiêm ngưỡng những sáng tác mới về <b>Tổ Bồ Đề Đạt Ma </b> của anh.</p><p> <b> Note: - Currently, there are many places that provide the Patriarch\'s Patriarch\'s Patriarch. The seal of the artist. </b> </p><p> <b> - Painting of the Patriarch of Hs.KTS Mai Duc Cuong is currently not reprinted, the painting only draws once and draws on silk paper or board paper.', NULL, NULL, 2),
(3, 'Arab calligraphy', NULL, '<h3> Learn about Arab calligraphy- the most noble artistic expression </h3>\r\n<p> Arab calligraphy is a special, sacred art form and only those who sincerely observe, dedicated to perseverance can understand the treasure and the hidden jade behind the art of the letter. France. Calligraphy is said to have become the most revered Muslim art form because it shows the relationship between Muslim language and Islam. The Qur\'an has played an important role in the development of Arabed language and calligraphy. </p>\r\n<p> In the 7th and 8th centuries, the Arabs who are disciples or followers (الصحابة الصحابة) by Muhammad messengers conquered territories stretching from the Atlantic to Sindh (today of Pakistan. ) In accordance with the speech of Islamic peoples, the Latin alphabet in the West is influenced by Christianity. </p>\r\n<p> The characteristics of Arab writing such as winding lines and no capital letters have made Arabic characteristic unique characteristics. Calligraphy art has made the most of these things to create balance and beautiful flexibility to bring a sense of harmony. </p>\r\n<p> The styles of calligraphy are also very diverse, such as Kufic style used for centuries to MUHAQQAQ style - majestic style used by talented calligraphy. Arab calligraphy is not only used for records but also used in architecture, decoration, coin design and many other purposes in the periods and the expansion of the Islamic Empire. </p>\r\n<p>The Arab calligraphy continues to be preserved and developed to this day as a noble art form - the cohesion between the Arab culture and the spiritual world. Here, invite you to see photos of Arab calligraphy and tools to create this sophisticated art form. </p>', NULL, NULL, 3),
(4, 'Chinese calligraphy', NULL, '  <h3>Introduction to Chinese calligraphy</h3>\r\n   <p>Chinese characters are one of the oldest types of literature in the world and Chinese calligraphy is the art of writing beautiful Chinese words. In the article, please introduce to you about the art of calligraphy and popular calligraphy styles.</p>\r\n   <h4>1. Chinese calligraphy letters</h4>\r\n   <p>\r\nPut simply, calligraphy (书法 书法) is a way of writing Chinese characters, expressing the characteristics and implications of those words, making them a work of art. Chinese calligraphy is divided into hard pen and soft pen callers.\r\nFrom past to present, the calligraphy characters have five main types: Troi, Le, Khai, Hanh, Thao. These letters are constantly changing depending on the development of history and social life.</p>\r\n<p>The letter (篆 书), also known as the word Trien, is an ancient Chinese calligraphy. However, according to the records, the word Tri is not the first kind of self -appearing, but the hieroglyphs engraved on the turtle or animal bone, called the \"writer\". By the time of Zhou Tuyen Vuong, a Thai historian rectified ancient literature into a new form, called the word Dai Trien. At this stage, there is no unified writing. By the time the Qin Shihuang unified China, established the Qin house, and he also merged and edited the previous letters, creating the \"Tieu Troi\" form, which is the current form. This can be considered as the first Chinese unified typeface.</p>\r\n<p>Later, because the word Tri was very complicated, and also quite effort, the person who created the word Le (隶书 隶书). The word Le has a simpler way of writing, the pen is also simpler than the previous letters. The word Le is commonly used in the Han Dynasty, its characteristics is the self -shaped image to the sides, the tough, square, liberal, and light strokes.</p>\r\n<p>In the Han Dynasty, there were also letters, Thao Thu and Khai Thu. Because to increase the writing speed quickly, when writing people often connect the upper pen with the bottom, gradually forming the letter (草书 草书). The characteristic of this form is to write very quickly, the pen strokes are simple, but it is difficult for the reader to receive the text. There are Chinese characters when writing in other forms that need a lot of strokes but with Thao Thu, it only needs a stroke, so Thao Thu is often used to speed up and wrote the draft. A very famous Thao form is \"crazy\" (狂草) of Hoai To, when many words can be connected with only one stroke.</p>\r\n<p>The onion (行书) is a word that originates from the word Thao, but the letter is easier to read and easily identifies than the script. The letter is divided into two forms: one is the foot of the onion, the writing is clear, organized, close to the revelation; One is the practice, the writing is quite unruly, close to Thao Thu.</p>\r\n<p>At the same time, while using Le Thu, it was thought that the way of writing each feature of Le Thu was too troublesome, and did not like Thao Thu because it was difficult to accept words. Therefore, people have relied on the form of the shape of the criminal that creates the character of Khai (楷 书 书 书 书). Khai Thu is a standard form, the characteristics of this form are neat, clear, easy to recognize and easy to see. Currently in the press, our books can encounter Khai Thu. The study of calligraphy from the past to present has started from the revelation, when mastered with moving to Hanh Thu, Thao Thu, Trieu Thu or Le Thu.</p>\r\n<h4>2. Meaning of calligraphy paintings</h4>\r\n<p>\r\nAsians are very fond of calligraphy, according to feng shui, calligraphy symbolizes the final achievement of energy expressed through action, this gas harmonizes with the air of the environment to bring luck. Therefore, calligraphy paintings are considered the expression of good things, bring good luck to homeowners, remind people of how to live, perfect personality. At the same time, the calligraphy also shows the mood and talent of the writer.</p>\r\n<h4>3. Chinese characters are often written in calligraphy</h4>\r\n<p> <b> a. The word Phuc (福) </b>\r\nThe meaning of blessing refers to happiness, luck. Spring day hanging the word Phuc, expressing the wishes and expectations of people in a happy life. In China, people often hang the word Phuc in front of the door with the implication of \"open the door\" </p>\r\n<p><b>b. Loc (禄)</b>\r\nThe word Loc 禄 means the original is blessing, good, fortune. The ancients considered being able to enjoy the court of the court as their main aspirations, and the Loc is also a kind of representative for the honor.</p>\r\n<p><b>c. Life (寿)</b>\r\nThe word life in Chinese means living for a long time, Truong Tho (Phuc Nhu Dong Hai, Tho title Nam Son / 福 如 东海 ， 南山 南山 南山). Therefore, when giving others a calligraphy, often implies that the person is healthy and long.</p>\r\n<p><b>d. The word An (安)</b>\r\nThe word An in Chinese is a word that many people choose in the beginning of the new year with the desire to have a peaceful and happy year</p>\r\n<p><b>e. Rings (忍)</b>\r\nThe word ring in Chinese characters consists of the executioner (刀 刀) on the center (心 心). The blade is in the heart, implying that if you have a problem without patience, it will be difficult to avoid pain. When giving the word ring, it is implied that people should know patience, keep \"the mind\" always wise, avoid movement, and patience to turn to danger into An, to convert into victory.</p>\r\n<p><b>f. German characters (德)</b>\r\nIn life, the mind and virtue make the beauty of man. That beauty makes a fundamental difference between humans and animals. Speaking of German characters is about human morality, which is always synonymous with good things. German paintings give each person a concept of living well, teaching themselves to live meaningful and useful to society.</p>\r\n<p><b>g. The word Tam (心)</b>\r\nThe word mind has a lot of meaning, but basically, it implies that people can and need to adjust their mind to train their mind, efforts to purify the mind is pure, free from craving, Lust, selfishness, hatred. Everyone has a good mind, the world will stay still forever, people with evil mind will be destroyed by the world</p>', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `created_at`, `update_at`, `password`) VALUES
(1, 'Phạm Tuấn Anh', 'anh.pt.1976@aptechlearning.edu.vn', '0836668336', '2022-06-29 14:06:12', '2022-06-29 14:06:12', '111'),
(6, 'hà', 'ha@gmail.com', '0838277222', '2022-06-29 15:02:00', '2022-06-29 15:02:00', '222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advises`
--
ALTER TABLE `advises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `detail_category` (`detail_category`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_category_id` (`detail_category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_category`
--
ALTER TABLE `detail_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_category_ibfk_1` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advises`
--
ALTER TABLE `advises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detail_category`
--
ALTER TABLE `detail_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advises`
--
ALTER TABLE `advises`
  ADD CONSTRAINT `advises_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `advises_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `advises_ibfk_3` FOREIGN KEY (`detail_category`) REFERENCES `detail_category` (`id`);

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`detail_category_id`) REFERENCES `detail_category` (`id`);

--
-- Constraints for table `detail_category`
--
ALTER TABLE `detail_category`
  ADD CONSTRAINT `detail_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
