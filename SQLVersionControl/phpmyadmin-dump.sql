-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2017 at 01:59 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 5.6.31-6+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swdt_karyab`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `grade` int(11) DEFAULT NULL,
  `co_operation` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json_array)',
  `gender` smallint(6) DEFAULT NULL,
  `other_skills` longtext COLLATE utf8_unicode_ci,
  `soldiery` smallint(6) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `is_published` tinyint(4) NOT NULL DEFAULT '1',
  `brochure` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`id`, `title`, `description`, `grade`, `co_operation`, `gender`, `other_skills`, `soldiery`, `user_id`, `created_at`, `is_deleted`, `is_published`, `brochure`, `expire_date`) VALUES
(13, 'برنامه نویس جاوا', 'یک برنامه‌نویس جاوا آشنا به وب نیازمندیم', 3, '[0,1,2,3,4]', 0, 'روحیه کار تیمی', 0, 46, '2016-08-22 01:54:39', 0, 1, NULL, '2017-11-11'),
(18, 'کارآموز برنامه نویسی جاوا', 'شرکت اعوان از دانشجویانی که با زبان برنامه نویسی جاوا آشنایی دارند برای طی دوره کارآموزی دعوت می نماید.\\r\\nعلاقه مندان می توانند فرم دعوت به همکاری را از آدرس زیر دریافت نموده و پس از پرکردن به آدرس info at asta.ir ارسال نمایند. \\r\\nفرم همکاری: \\r\\nhttp://www.asta.ir/avan/files/asta_hrm_form.doc', 3, '[0,1,2,3,4]', 1, 'قابلیت درک متون تخصصی به زبان انگلیسی\\r\\nاشنایی با مفاهیم برنامه نویسی وب\\r\\nمسئولیت پذیری و قابلیت کار تیمی', 0, 56, '2016-09-15 18:12:22', 0, 1, NULL, '2017-11-11'),
(19, 'طراح وب', 'برنامه نویس برای توسعه نسخه اپلیکیشن‌های موبایلی شرکت.\r\n\r\nمتخصص به اندروید استادیو و فون گپ\r\n\r\nمسلط به پایگاه داده SQlite\r\n\r\nمسلط به پایگاه داده MYSQL\r\n\r\nآشنایی با پلتفرم php و فریم ورک yii', 3, '[0,1,2,3,4]', 0, 'تسلط کامل به فتوشاپ', 0, 52, '2016-09-15 23:41:58', 0, 1, NULL, '2017-11-11'),
(20, 'طراح و برنامه نویس', 'برنامه نویس ماهر', 3, '[0,1,2,3,4]', 0, '-', 0, 57, '2016-09-17 00:54:24', 0, 1, NULL, '2017-11-11'),
(21, 'کارهای اجرایی انجمن جاواکاپ', 'همکاری در کارهای انجمن علمی جاواکاپ', 4, '[0,1,2,3,4]', 0, 'قلم خوب و شیوا', 0, 60, '2016-09-21 19:20:50', 0, 1, NULL, '2017-11-11'),
(25, 'برنامه نويس وب', NULL, 3, '[0,1,2,3,4]', 0, NULL, 3, 61, '2016-11-15 17:33:47', 0, 1, NULL, '2017-11-11'),
(27, 'برنامه نویس ios', 'k.dnkdnsbnd', 3, '[0,1,2,3,4]', 1, 'ljdflkldsfnkblndgbd', 3, 61, '2016-11-27 23:43:34', 0, 1, NULL, '2017-11-11'),
(28, 'تهیه داده تست', 'میخواهیم 1000 جفت جمله هم معنی فارسی تولید کنیم \\r\\nهر جفت جمله لازم است معنی و مفهوم واحد داشته باشند ولی با کلمات و/یا ساختار متفاوت نوشته شده باشند', 6, '[0,1,2,3,4]', 0, 'زبان فارسی!', 0, 57, '2016-11-28 06:29:23', 0, 1, NULL, '2017-11-11'),
(31, 'شرکت دانش بنیان فناوری اطلاعات و ارتباطات مهیمن دعوت به همکاری میکند.', '"شرکت فناوری اطلاعات و ارتباطات مهیمن" در راستای تکمیل کادر تخصصی خود، از علاقه‌مندان برای همکاری دعوت به عمل می‌آورد. برای این منظور می‌توانید با مراجعه به آدرس  mohaymen.ir/fa/careers ، نسبت به تکمیل "فرم دعوت به همکاری" اقدام نمایید.', 3, '[1,2,4]', 0, 'تخصص های مورد نیاز \r\nتوسعه‌دهنده C# \r\nتوسعه‌دهنده  Java \r\nتوسعه‌دهنده  Android \r\nتوسعه‌دهنده  iOS  \r\nتوسعه‌دهنده Web \r\nتوسعه‌دهنده UI \r\nتحلیل‌گر داده \r\nتحلیل‌گر کسب‌و‌کار \r\nکارشناس مدیریت پروژه و منابع انسانی \r\nتضمین‌کننده کیفیت و تست نرم‌افزار \r\nپشتیبان فنی نرم افزار، شبکه و زیرساخت', 0, 80, '2016-12-04 13:26:01', 0, 1, '1480859316_Logo-high square.jpg.png', '2017-01-19'),
(32, 'همکاری در پروژه1', 'برای این کار باید تعهد بالایی داشته باشید1', 3, '[4]', 1, 'تایپ سریع1', 0, 82, '2016-12-10 04:35:24', 0, 1, '1481344524_champion.png', '2017-12-21'),
(33, 'نمونه کار asp', 'jj', 5, '[2]', 1, 'jj', 1, 91, '2016-12-25 00:09:56', 0, 1, NULL, '2017-01-03'),
(34, 'نمونه کار asp', NULL, NULL, '[]', NULL, NULL, NULL, 93, '2016-12-26 23:53:50', 1, 1, NULL, '2017-01-04'),
(36, 'جاوای ', NULL, 5, '[0,1,2,3,4]', 0, NULL, 0, 60, '2017-01-03 18:17:47', 0, 1, NULL, '2017-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `advertise_tags`
--

CREATE TABLE `advertise_tags` (
  `tag_id` int(11) NOT NULL,
  `advertise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advertise_tags`
--

INSERT INTO `advertise_tags` (`tag_id`, `advertise_id`) VALUES
(1, 19),
(1, 25),
(2, 25),
(3, 25),
(7, 21),
(7, 32),
(8, 13),
(10, 13),
(10, 18),
(10, 21),
(10, 27),
(10, 32),
(10, 36),
(16, 27),
(21, 27),
(24, 20),
(26, 33),
(35, 33),
(58, 33),
(60, 33),
(61, 33),
(64, 33);

-- --------------------------------------------------------

--
-- Table structure for table `job_request`
--

CREATE TABLE `job_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `advertise_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `minimum_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_request`
--

INSERT INTO `job_request` (`id`, `user_id`, `advertise_id`, `created_at`, `minimum_salary`) VALUES
(21, 45, 13, '2016-08-22 02:02:11', 0),
(22, 47, 13, '2016-08-22 02:12:22', 0),
(23, 62, 19, '2016-09-29 19:05:42', 1200000),
(25, 54, 21, '2016-10-03 19:52:17', 1),
(26, 45, 21, '2016-10-14 14:56:14', 4),
(27, 69, 21, '2016-10-14 15:07:29', 10),
(28, 1, 20, '2016-11-13 10:24:17', 20000),
(31, 81, 21, '2016-12-09 18:35:05', 10),
(32, 81, 32, '2016-12-10 04:37:50', 20000),
(33, 48, 32, '2016-12-20 08:47:11', 200),
(34, 54, 32, '2016-12-23 20:46:35', 2),
(35, 45, 18, '2017-01-03 18:09:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `karfarma_extra`
--

CREATE TABLE `karfarma_extra` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_field` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8_unicode_ci,
  `about_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `karfarma_extra`
--

INSERT INTO `karfarma_extra` (`id`, `user_id`, `company_name`, `company_email`, `company_field`, `telephone`, `address`, `avatar`, `about`, `about_pic`, `website`) VALUES
(1, 2, 'کارفرمااا', 'info@imohammad.xyz', 'هیچی', '02155445544', 'تهران', NULL, 'درباره ماا', NULL, 'imohammad.xyz'),
(2, 38, 'گربه خونه', NULL, 'گربه داری', '09378129666', NULL, NULL, NULL, NULL, NULL),
(3, 46, 'تیم برنامه‌نویسی وب', 'aliakbary@sbu.ac.ir', 'تولید برنامه‌های مبتنی بر وب', '02122431234', 'دانشگاه شهید بهشتی، دانشکده مهندسی و علوم کامپیوتر', NULL, 'تیم برنامه‌نویسی در سال 1395 رسماً تشکیل شده و هدف آن آموزش، ارزیابی مهارتهای علاقمندان و تولید نرم‌افزارهای مبتنی بر وب است.', NULL, NULL),
(4, 50, 'pardisgame', 'atiehnorouzi22@gmail.com', 'programming', '02122192435', 'fdf', NULL, 'fd', NULL, NULL),
(5, 52, 'carhub', 'fsfd.fdsfsd@gmail.com', NULL, '09124443322', 'ffdsfdsfd', '1480005500_52_Nissan_1.jpg', NULL, '1480172254_Screenshot_2016-11-26-18-12-29.png', NULL),
(6, 56, 'شرکت مشاوران نرم افزاری اعوان', 'info@asta.ir', 'تولید نرم افزارهای سازمانی', '02166097972', 'خ تیموری، جنب متروی دانشگاه شریف، خ حبیب زادگان، پلاک ۶۹، ط ۳، واحد ۲۶', NULL, 'شرکت اعوان در سال 1383 تاسیس شده است. راهبرد اعوان ارائه خدمات فوق تخصصی با تکیه بر گردآوری نخبگان علمی و فنی است.\\r\\nاین شرکت توانسته است در مهمترین پروژه‌های بزرگترین سازمانهای بانکی، بیمه ای، صنعتی و دولتی ایران همچون نهاد ریاست جمهوری اسلامی ایران (پروژه ملی سامد)، بانک ملی ایران، سازمان تامین اجتماعی، گروه صنعتی ایران خودرو و غیره نقش ایفا نماید. \\r\\n \\r\\nمحورهای اصلی فعالیت شرکت عبارتند از:\\r\\nراه اندازی خط تولید نرم افزار: شرکت اعوان در جهت توانمندسازی هر چه بیشتر شرکتها و سازمان در تولید سریع و کم هزینه محصولات باکیفیت مبتنی بر جاوا، خط تولید نرم‌افزار سازمانی خود موسوم به «WISE Solution» را همراه با مجموعه از خدمات آموزشی و مشاوره ای در اختیار ایشان قرار می دهد.\\r\\nتولید نرم افزارهای سفارشی: رویکرد اعوان در این حوزه کاهش هزینه و زمان تولید با به کارگیری خط تولید نرم‌افزار اعوان (WISE Solution) و استفاده از تخصصی‌ترین فناوری‌ها همچون Java EE و Oracle می‌باشد.', NULL, 'www.asta.ir'),
(7, 57, 'آزمایشگاه پردازش زبان طبیعی- دانشگاه شهید بهشتی', 'shams@sepehrs.com', 'پردازش زبان طبیعی- زبانشناسی رایانشی- مهندسی دانش - هستان شناسی- وب معنایی- هوش مصنوعی', '02129904111', 'اوین - دانشگاه شهید بهشتی- دانشکده مهندسی و علوم کامپیوتر', NULL, 'آزمایشگاه در همه حوزه های پردازش زبان خصوصا پردازش و تولید محتوای فارسی فعالیت می نماید. ساخت و بکارگیری هستان شناسی ها از دیگر فعالیت های آزمایشگاه است. همچنین تولید داده ای محک و استانداردسازی تست نرم افزارهای این حوزه در شح خدمات ازمایشگاه جای دارند.', NULL, NULL),
(8, 60, 'انجمن جاواکاپ', 's@a.co', 'ترویج جاوا، مسابقه', '02112345678', 'تهران', '1483454203_8_logo_transparent.png', 'انجمن جاواکاپ', NULL, NULL),
(9, 61, 'فراز', 'atena.larni@gmail.com', 'سخت افزار', '02122222222', 'تهران', '1480103935_61_Karyab.jpg', 'مهاسشهیاهمسال', '1480104024_HW8.pdf', NULL),
(10, 63, 'faraz', 'atena.larni@gmail.com', 'sakht afzar133', '02122222222', 'dfgdfgdfg2453454', '1475165074_63_sunset.jpg', 'dfgdfgdfg3434', NULL, 'pldkopkasdf'),
(11, 66, 'Jdhdck', 'atena.larni@gmail.com', 'Nxidheتبنبهبن١٠', '09121111111', 'Nxjidjd', NULL, 'Jdjxicjdnfn', NULL, 'Jdjxjc'),
(16, 75, 'شرکت مهدی', 'mahdib@gmail.com', 'تست مهدی', '88081132', 'تست', '1480624426_16_Screen Shot 1395-07-05 at 12.25.55.png', 'تست', NULL, NULL),
(17, 77, 'آزمایشگاه شبکه پیچیده', 's_aliakbary@sbu.ac.ir', 'شبکه اجتماعی', '02129901234', 'تهران', NULL, 'شبکه های اجتماعی', NULL, 'sbu.ac.ir'),
(18, 80, 'شرکت فناوری اطلاعات و ارتباطات مهیمن', 'hr2@mohaymen.ir', 'IT', '02188019001', 'ساختمان مرکزی:  تهران ، امیر آباد ، انتهای کارگر شمالی‌ ، خیابان هفدهم ( شهید ابراهیمی ) ، پلاک ۱۴۰', NULL, 'هفت سال پیش، کسب دانش و تولید محصولات بومی حوزه فناوری اطلاعات و ارتباطات را با هدف خلق تحولی عظیم در عملکرد سازمان‌های بزرگ ایرانی آغاز نمودیم. امروز محصولات ما در مجموعه‌های بزرگی از کشور به کار گرفته شده‌اند تا مسایلی را حل کنند که در گذشته تصور یافتن راهکارهایی با تکیه بر دانش بومی برای آن‌ها وجود نداشت.', NULL, 'www.mohaymen.ir'),
(19, 82, 'شرکت کارفرما', 'info@karfarma.ir', 'تولید نرم افزار', '02166906690', 'تهران', NULL, 'یکی از برترین شرکتها در این زمینه.', '1481346031_champion.png', 'karfarma.ir'),
(20, 83, 'javacup', 'info@javacup.ir', 'جاوا', '02166666666', 'تهران', NULL, 'انجمن جاواکاپ2', NULL, NULL),
(21, 85, 'تس', 'a@A.com', 'تست', '8888', 'تست', NULL, NULL, NULL, 'a'),
(22, 86, 'رهنورد', 'test23@test.com', 'طراحی سایت', '22554798', 'tehran', NULL, NULL, NULL, NULL),
(23, 88, 'تستت', 'mzn@dhbc.ir', 'نذنرنرا', '0212990', 'kdshbcksbcew', NULL, NULL, NULL, NULL),
(24, 91, 'test5', 'a@a5.com', 'تست', NULL, 'تست', '1482611669_24_photo_2016-12-22_20-32-10.jpg', NULL, NULL, NULL),
(25, 93, 'تس', 'a@A.com', 'تست', '8888', 'ششش', NULL, NULL, NULL, NULL),
(26, 95, 'testttttt', 'mzndd@dddd.ir', 'testttttt', '09135183542', 'kdshbchkc', NULL, NULL, NULL, NULL),
(27, 99, 'شرکت داده ورزی فرادیس البرز', 'f.larni@faradis.com', 'توسعه نرم افزار سیستم های بانکی، تولید و پشتیبانی سیستمهای بانکی', '02185913100', '02185910000', NULL, 'تاسیس 1383 و دارای بیش از 120 دفتر پشتیبانی در سرتاسر ایران. اطلاعات بیشتر را می توانید در سایت شرکت به ادرس www.faradis.com  مطالعه فرمائید.', NULL, 'www.faradis.com'),
(28, 100, 'آزمايشگاه پردازش محتوا', 'talebpour@snu.ac.ir', 'تصوير و ويديو و متن', '9121164924', 'دانشگاه شهيد بهشتي دانشكده مهندسي و علوم كامپيوتر', NULL, 'فعاليت در حوزه موتور جستجو', NULL, NULL),
(29, 101, 'شرکت فرضی', 'info@farzi.com', 'تولید نرم‌افزار موبایل', NULL, 'تهران-ولنجک', NULL, 'تولید نرم افزارهای قوی موبایل', NULL, NULL),
(30, 105, 'Flieral', 'Jobs@Flieral.com', 'مهندسی نرم افزار: توزیع رسانه ای', '09121513962', 'دانشگاه شهید بهشتی (حضوری و ریموت)', NULL, 'در فلایرال، افراد و کارآموزان روی پروژه هایی کار میکنند که در صنعت نرم افزاری ارزش دارند و اعضای تیم با تکیه بر توانایی هایشان در تلاشند پروژه های تعریف شده را وارد حوزه های کسب و کار کنند.\r\nبه عنوان کارآموز و/یا همکار، شما این فرصت را دارید که روی پروژه هایی کاملا واقعی و صنعتی کار کنید و حین انجام آن لذت ببرید. این موقعیت، فرصتی برای شماست تا از تکنولوژی نرم افزاری به روز استفاده گرده و توانایی های خود را نشان دهید.\r\n\r\nخودتان را به عنوان کارآموز فلایرال تصور کنید. به فلایرال پیوسته و به ما کمک کنید کسب و کار آینده را شکل دهیم.', NULL, 'www.Flieral.com'),
(31, 118, 'آزمایشگاه ایکس', 'l1173947@mvrht.com', 'شبکه و آی تی', NULL, 'دانشگاه بهشتی', NULL, 'این آزمایشگاه به عنوان داده تستی ایجاد شده است.', NULL, 'www.xlab.ir');

-- --------------------------------------------------------

--
-- Table structure for table `karjoo_extra`
--

CREATE TABLE `karjoo_extra` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `student_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `national_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8_unicode_ci,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soldiering` smallint(6) DEFAULT NULL,
  `resume` longtext COLLATE utf8_unicode_ci,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `karjoo_extra`
--

INSERT INTO `karjoo_extra` (`id`, `user_id`, `student_id`, `national_id`, `about`, `avatar`, `telephone`, `soldiering`, `resume`, `website`) VALUES
(1, 1, '93213076', '4420575451', NULL, '1477481700_1_146915976512934.jpg', NULL, 3, NULL, 'imohammad.xyz'),
(2, 39, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL),
(3, 42, '92213150', '4060765252', 'نمونه اولیه برای تست', NULL, NULL, 3, NULL, NULL),
(4, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 45, NULL, '1290726589', 'چند سال سابقه تدریس دارم و چند سال سابقه کار.', '1476444336_45_me.png', NULL, 2, '1476444336_SadeghAliakbary_Summary.pdf', NULL),
(6, 47, NULL, '1234567891', NULL, NULL, NULL, 1, NULL, NULL),
(7, 48, '94243014', '0520925882', NULL, NULL, NULL, 3, '1477135450_resume.pdf', NULL),
(8, 54, '94243027', '4900548677', 'Hghn', '1482789410_8_IMG_2590.JPG', NULL, 3, '1480893060_CV-mahdi abbaszade.pdf', NULL),
(9, 55, '94243015', '0019814879', 'بیکار', NULL, NULL, NULL, NULL, NULL),
(10, 62, NULL, NULL, 'lvdm;lbm;dm;dfg;lmd;lm;dgmb;lbmlg', '1475162817_62_tim-despicable-me-2-21908-1920x1200.jpg', NULL, 2, NULL, 'dsfdsfds'),
(11, 64, NULL, NULL, 'Kdjd', NULL, NULL, 1, NULL, 'Hdh'),
(12, 65, NULL, NULL, 'Kdjd', NULL, NULL, 1, NULL, 'Hdh'),
(13, 67, '94243024', '0021463212', ':|', NULL, NULL, 1, NULL, NULL),
(14, 68, '94243013', '2050789181', 'سابقه درخشان', NULL, NULL, 3, NULL, NULL),
(15, 69, NULL, '1290759877', 'سابقه ندارم', NULL, NULL, 3, '1476444894_SadeghAliakbary_Summary.pdf', 'facultymembers.sbu.ac.ir/aliakbary'),
(16, 70, '91213182', '4710102627', 'zekdraminski.ir', NULL, NULL, 3, NULL, NULL),
(17, 71, '91122334', '0087693736', 'ندارم', NULL, NULL, NULL, NULL, NULL),
(18, 72, '92213130', '4980183654', 'شرکت رهنما ، میسا .. پروژه اندروید ، سایت و ...', NULL, NULL, 3, NULL, 'projectkhayam.ir'),
(19, 73, '95440024', '0310904633', '-  سوابق حرفه ای :.\\r\\n\\r\\nعضوانجمن علمی دانشگاه مازندران\\r\\n\\r\\nتجربه برنامه نویسی به زبان های php,c++,pyton ,javascript\\r\\n\\r\\nبایگانی در دانشگاه مازندران\\r\\n\\r\\nراه اندازی و پشتیبانی شبکه\\r\\n\\r\\nاسمبل و تعمیرات سیستم های کامپیوتری\\r\\n\\r\\n سابقه کار در شرکت های تابان ،اسم و رسم و ایران ایتی ب عنوان برنامه نویس', NULL, NULL, NULL, NULL, 'ندارم'),
(32, 74, '92213151', '4060765253', NULL, NULL, NULL, 3, NULL, NULL),
(33, 76, '94122111', '2050737378', NULL, NULL, NULL, 3, NULL, NULL),
(34, 78, '94243004', '2282220684', NULL, NULL, NULL, 3, NULL, NULL),
(35, 79, '92213111', '0371216575', 'مهارت کار با میکروکنترلرها\\r\\nبرنامه نویسی vhdl', NULL, NULL, 3, '1480833045_resume ver 1.4.pdf', NULL),
(36, 81, '12345678', '1234567890', 'نمونه کار خاصی ندارم', NULL, NULL, 3, '1481308477_ACM_2492_p65-zhuhadar.pdf', 'www.karjoo01.ir'),
(37, 84, '92213154', '4060765254', NULL, NULL, NULL, 1, NULL, NULL),
(38, 87, NULL, '4420575450', NULL, NULL, NULL, 1, NULL, NULL),
(39, 89, '92239830', '5400019668', NULL, '1482514119_39_IMG_20160121_114705_1.jpg', NULL, 3, NULL, NULL),
(40, 90, NULL, '4060765255', NULL, NULL, NULL, 2, NULL, NULL),
(41, 92, NULL, '2222222222', NULL, '1482783020_41_photo_2016-12-22_20-32-10.jpg', NULL, 3, NULL, NULL),
(42, 94, NULL, '4420572451', NULL, NULL, NULL, 1, NULL, NULL),
(43, 96, '09402164', '1270983512', NULL, NULL, NULL, 3, '1483387794_Resume.pdf', NULL),
(44, 97, NULL, '1294523692', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 98, NULL, '1222321123', NULL, NULL, NULL, 1, NULL, NULL),
(46, 102, NULL, '1290254598', NULL, NULL, NULL, 1, NULL, NULL),
(47, 103, '95243037', '6190080324', NULL, NULL, NULL, 3, NULL, NULL),
(48, 104, '94443242', '0013602691', NULL, NULL, NULL, 3, NULL, NULL),
(49, 106, '95242037', '0924252448', NULL, NULL, NULL, 3, NULL, NULL),
(50, 107, NULL, '3240570009', NULL, NULL, NULL, 1, NULL, NULL),
(51, 108, '94243053', '0880258373', NULL, NULL, NULL, 1, NULL, NULL),
(52, 109, '94243019', '5420041545', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 110, NULL, '9876543210', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 111, '92213030', '0018455824', NULL, NULL, NULL, 1, NULL, NULL),
(55, 112, '91113008', '1741843952', NULL, '1487399592_55_photo_2016-12-19_00-30-38.jpg', NULL, 3, NULL, NULL),
(56, 113, '94442142', '0493235361', 'سرپرست فروش و بازاریابی در شرکت دانش بنیان پویش تدبیر کرانه', NULL, NULL, 1, '1487593501_resume_Rajabi .pdf', NULL),
(57, 114, NULL, '4420294423', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 115, '95243035', '4311184298', NULL, '1487837819_58_photo_2017-01-28_19-28-55.jpg', NULL, 3, NULL, NULL),
(59, 116, '12345677', '0012345678', 'مهندس ارشد برنامه مدیریت جامع Hello World', NULL, NULL, 3, NULL, NULL),
(60, 117, '93213081', '0923509704', NULL, NULL, NULL, 3, NULL, NULL),
(61, 119, '94443178', '0012513601', NULL, NULL, NULL, 3, NULL, NULL),
(62, 120, '22079314', '0018939007', NULL, NULL, NULL, 3, NULL, NULL),
(63, 121, '91113042', '0017042739', NULL, NULL, NULL, 3, NULL, NULL),
(64, 122, NULL, '0071234567', NULL, NULL, NULL, 1, NULL, NULL),
(65, 123, '94242071', '0020417152', NULL, NULL, NULL, 1, NULL, NULL),
(66, 124, '95442184', '0016177495', NULL, NULL, NULL, 1, NULL, NULL),
(67, 125, '92213018', '0018377831', 'توسعه دهنده و طراح Front End وب سایت www.Hexaks.com (به زودی منتشر میشود)\r\nانواع پروژه های وب (دانشجویی) با دیتا بیس های مختلف مثل (SQL , Nosql : redis,mongoDB,Neo4J) - فروشگاه اینترنتی و شبکه اجتماعی شبه توییتر', '1497615828_67_photo_2017-05-21_17-55-34.jpg', NULL, 3, '1497615828_CV (2).pdf', NULL),
(68, 126, NULL, '1232123123', NULL, NULL, NULL, 1, NULL, NULL),
(69, 127, NULL, '2740789459', NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill_tags`
--

CREATE TABLE `skill_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill_tags`
--

INSERT INTO `skill_tags` (`id`, `name`) VALUES
(1, 'Adobe photoshop'),
(2, 'Angular JS'),
(3, 'Bootstrap'),
(4, 'CSS'),
(5, 'Front-end'),
(6, 'Git'),
(7, 'HTML'),
(8, 'HTML5'),
(9, 'JavaScript'),
(10, 'Java'),
(11, 'jQuery'),
(12, 'Linux'),
(13, 'MVC'),
(14, 'MySQL'),
(15, 'UI UX'),
(16, 'Swift'),
(17, 'Entity Framework'),
(18, 'Laravel Framework'),
(19, 'Corel Draw'),
(20, 'Zend FrameWork'),
(21, 'IOS Programing'),
(22, 'Back-end'),
(23, 'Digital Advertising'),
(24, 'AJAX'),
(25, 'Android Programing'),
(26, 'Android Development'),
(27, 'AutoCad'),
(29, 'Ruby'),
(30, 'Ubuntu'),
(31, 'OOP'),
(32, 'Microsoft Office'),
(33, 'CISCO'),
(34, 'Core Data'),
(35, 'Apache'),
(36, 'Cocoa Touch'),
(37, 'Cloud Computing'),
(38, 'CMS'),
(39, 'NoSQL'),
(40, 'Digital Marketing'),
(41, 'WordPress'),
(42, 'ICDL'),
(43, 'MongoDB'),
(44, 'ASP.Net'),
(45, 'C#'),
(46, 'C++'),
(47, 'C'),
(48, 'QT'),
(49, 'Software Tester'),
(50, 'Full-Stack Development'),
(51, 'SEO'),
(52, 'Windows Phone'),
(53, 'Socket Programing'),
(54, 'Network Programing'),
(55, 'Server Side'),
(56, 'Active Directory'),
(57, 'Amazon Web Services'),
(58, 'Apache Solr'),
(59, 'AS400 and iSeries'),
(60, 'Asterisk PBX'),
(61, 'AutoHotkey'),
(62, 'Azure'),
(63, 'Balsamiq'),
(64, 'Blog Install'),
(65, 'BMC Remedy'),
(66, 'Boonex Dolphin'),
(67, 'Business Catalyst'),
(68, 'CakePHP'),
(69, 'Chrome OS'),
(70, 'Cloud Computing'),
(71, 'Delphi'),
(72, 'Django'),
(73, 'DNS'),
(74, 'DotNetNuke'),
(75, 'Facebook'),
(76, 'Firefox'),
(77, 'Forum Software'),
(78, 'Game Design'),
(79, 'Google Analytics'),
(80, 'Google App Engine'),
(81, 'J2EE'),
(82, 'JavaFX'),
(83, 'Joomla'),
(84, 'JSP'),
(85, 'Node.js'),
(86, 'Mac OS'),
(87, 'Magento'),
(88, 'NoSQL Couch and Mongo'),
(89, 'Objective C'),
(90, 'Oracle'),
(91, 'Parallels Automation'),
(92, 'Parallels Desktop'),
(94, 'Photoshop Coding'),
(95, 'PHP'),
(96, 'Prestashop'),
(97, 'Prolog'),
(98, 'Protoshare'),
(99, 'Python'),
(100, 'Ruby on Rails'),
(101, 'Shell Script '),
(103, 'Social Engine'),
(104, 'شبکه اجتماعی'),
(105, 'Software Architecture'),
(106, 'تست نرم افزار'),
(107, 'Symfony PHP'),
(108, 'System Admin'),
(109, 'UML Design'),
(110, 'Unity 3D'),
(111, 'UNIX'),
(112, 'User Interface / IA'),
(113, 'VoIP'),
(114, 'Web Scraping'),
(115, 'امنیت وب'),
(116, 'Website Testing'),
(117, 'ویندوز سرور'),
(118, 'XML'),
(119, 'XSLT'),
(120, 'Yii'),
(121, 'برنامه نویسی تحت وب '),
(122, 'برنامه نویسی تحت ویندوز '),
(123, 'SQL Server'),
(124, 'SQLite'),
(125, 'Matlab'),
(126, 'Angular.js'),
(127, 'Big Data'),
(128, 'Database Administration'),
(129, 'Database Development '),
(130, 'Database Programming'),
(131, 'Drupal'),
(132, 'Ember.js'),
(133, 'Google Maps API'),
(134, 'GoPro'),
(135, 'Growth Hacking'),
(136, 'Instagram'),
(137, 'Internet Security'),
(138, 'JSON'),
(139, 'LESS/Sass/SCSS'),
(140, 'Microsoft SQL Server'),
(141, 'OpenCL'),
(142, 'OpenSSL'),
(143, 'Red Hat'),
(144, 'Redis'),
(145, 'Web Hosting'),
(146, 'Web Services'),
(147, 'LEMP'),
(148, 'IoT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `f_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` smallint(6) DEFAULT NULL,
  `birth_year` int(11) DEFAULT NULL,
  `mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `enabled`, `password`, `last_login`, `f_name`, `l_name`, `gender`, `birth_year`, `mobile`) VALUES
(1, 'mohammad', 'mohammad.zamanzadeh@gmail.com', 1, '123456', '2017-03-07 09:46:27', 'محمد', 'زمان زاده نصرآبادی', 1, 1374, ''),
(2, 'karfarma', 'mzn.sites@gmail.com', 1, '123456', '2017-10-10 15:36:39', 'کارفرما', 'کارفرماااا', 1, 1374, '09131583542'),
(38, 'meow', 'tsoorena@outlook.com', 1, '123456', '2016-08-19 06:37:47', 'میو', 'میو', 1, 1944, '09378129666'),
(39, 'mory91', 'mortezaho.1376@gmail.com', 1, '123456', '2016-09-12 12:13:41', 'سید مرتضی', 'حسینی', 1, 1376, '09197612711'),
(42, 'mahdi3', 'mahdi_73@hotmail.com', 1, '123456', '2016-09-22 01:34:35', 'محمد مهدی', 'فاطمیان', 1, 1373, '09120853277'),
(44, 'Atenalrn', 'atena.larni@gmail.com', 1, '123456', '2016-12-05 15:37:39', 'آتنا', 'لرني', 2, 1375, '09126018607'),
(45, 'aliakbary', 's_aliakbary@sbu.ac.ir', 1, '123456', '2017-05-27 11:36:06', 'صادق', 'علی اکبری', 1, 1362, '09121234567'),
(46, 'swdt', 'info@swdt.ir', 1, '123456', '2016-08-30 23:09:26', 'صادق', 'علی اکبری', 1, 1362, '09121234567'),
(47, 'alavi', 'ali@alavi.ir', 1, '123456', '2016-08-27 08:50:19', 'علی', 'علوی', 1, 1358, '02165456874'),
(48, 'Ahmadreza_HK', 'rahnama378@gmail.com', 1, '123456', '2017-10-16 18:29:55', 'احمدرضا', 'حسینخانی', 1, 1375, '09338595921'),
(50, 'atiyeh', 'atiezi@mail.co', 1, '123456', '2016-09-01 08:56:36', 'عطیه', 'نوروززاده', 2, 1375, '09128205229'),
(52, 'ahmad', 'ahmadrezahk23@gmail.com', 1, '123456', '2017-01-15 01:24:01', 'ahmadreza', 'asd', 1, NULL, '09338595921'),
(54, 'Mahdi_az', 'abaszade.mahdi@gmail.com', 1, '123456', '2017-04-19 16:38:08', 'مهدي', 'عباس زاده', 1, 1375, '09126661746'),
(55, 'mory93', 'mortezaho.1378@gmail.com', 1, '123456', '2016-09-11 09:09:11', 'مرتضی', 'حسینی', 1, 1376, '09197612711'),
(56, 'seyyedjamal', 'seyyedjamal@gmail.com', 1, '123456', '2016-09-17 09:31:42', 'سیدجمال', 'پیشوایی', 1, 1359, '09105955223'),
(57, 'shams', 'm-shams@sbu.ac.ir', 1, '123456', '2016-12-03 22:56:46', 'مهرنوش', 'شمس فرد', 2, 1300, '02129904093'),
(60, 'javacup', 's@a.co', 1, '123456', '2017-05-27 11:37:10', 'صادق', 'علی اکبری', 1, 1362, '09031111111'),
(61, 'alialavi', 'miss_sun96@yhotmail.com', 1, '123456', '2017-02-18 16:13:59', 'علی', 'علوی', 1, 1375, '09126018608'),
(62, 'test1', 'ash.larni@gmail.com', 1, '123456', '2016-09-30 12:49:29', 'خسرو', 'larni10', 2, 1375, '09126018608'),
(63, 'test2', 'razieh.larni@yahoo.com', 1, '123456', '2016-09-29 20:13:55', 'خسرو', 'larni10', 2, 1395, '09126018608'),
(64, 'Test3', 'razieh.larni@gmail.com', 1, '123456', '2016-09-30 12:50:47', 'اتنا', 'اتناLarni10', 2, 1375, '23121212121'),
(65, 'Test5', 'farhadlarni@gmail.com', 1, '123456', '2016-09-29 19:50:17', 'اتنا', 'اتناLarni10', 2, 1375, '23121212121'),
(66, 'Test7', 'farhad.larni@gamil.com', 1, '123456', '2016-09-29 20:05:05', 'خشايار', 'لرنيatena10', 1, 1375, '09126018608'),
(67, 'sajjad', 'shahi_cse@yahoo.com', 1, '123456', '2016-12-02 14:55:04', 'سجاد', 'شاهی', 1, 1377, '09212082518'),
(68, 'hp14aug', 'muhammad14aug@gmail.com', 1, '123456', '2016-10-03 15:09:46', 'محمد', 'حسن پور', 1, 1376, '09111142194'),
(69, 'alavi1', 'sadegh.aliakbary@gmail.com', 1, '123456', '2016-10-16 15:20:53', 'سید علی', 'سیدعلوی', 1, 1374, '09121234567'),
(70, 'Masoud', 'm.masoud.1991@gmail.com', 1, '123456', '2016-11-12 23:35:46', 'مسعود', 'محرمی', 1, 1370, '09124037293'),
(71, 'maryam', 'd@d.com', 1, '123456', '2016-11-13 10:33:27', 'مریم', 'مریمی', 2, 1360, '2990'),
(72, 'RezaSi', 'rezashiri88@gmail.com', 1, '123456', '2016-11-13 19:17:26', 'رضا', 'شیری', 1, 1373, '09117833928'),
(73, 'davoodi', 'it.davoodi@gmail.com', 1, '123456', '2016-11-23 09:22:27', 'زهرا', 'داودی', 2, 1372, '09302188808'),
(74, 'm48d3', '', 1, '123456', '2016-12-20 11:02:10', 'محمد مهدی', 'فاطمیان', 1, NULL, ''),
(75, 'm48d4', 'mahdibrands@gmail.com', 1, '123456', '2016-12-02 00:11:11', 'تست', 'تست', 1, 1373, '09120853277'),
(76, 'da_neilo', 'd.azimi75@yahoo.com', 1, '123456', '2016-12-04 03:12:45', 'دانيال', 'عظيمي', 1, 1375, '09119112138'),
(77, 'aliakbakbary2', 's_aliakbar@sbu.ac.ir', 1, '123456', '2016-12-04 06:49:24', 'صادق', 'علی اکبری', 1, 1362, '02129901234'),
(78, 'bardia133', 'bardia.abhari13@gmail.com', 1, '123456', '2016-12-04 08:38:44', 'بردیا', 'ابهری', 1, 1375, '09210901985'),
(79, 'ahmadsl', 'ahmadsoory74@gmail.com', 1, '123456', '2017-02-11 18:20:59', 'احمد', 'سوری لکی', 1, 1374, '09358022517'),
(80, 'majidja', 'mjmiesharifuni@yahoo.com', 1, '123456', '2016-12-08 13:07:17', 'مجید', 'جاودانی', 1, 1373, '09192224983'),
(81, 'karjoo01', 'karjoo@gmail.com', 1, '123456', '2016-12-10 05:17:36', 'سید کارجو', 'سید کارجوییان', 1, 1372, '09121234567'),
(82, 'karfarma01', 'namayandeh@gmail.com', 1, '123456', '2016-12-10 05:13:31', 'نماینده', 'نماینده ای', 1, 1362, '02166906690'),
(83, 'javacup2', 'info@javacup.ir', 1, '123456', '2016-12-10 05:04:46', 'علی', 'علوی', 1, 1362, '09123456789'),
(84, 'tester1', 'a@gmail.com', 1, '123456', '2016-12-10 16:23:39', 'محمد مهدی', 'فاطمیان', 1, 1373, '09120853277'),
(85, 'tester2', 'qa@a.co', 1, '123456', '2016-12-10 16:41:57', 'حروف فارسی', 'فاط', 1, 1354, '09120853277'),
(86, 'reza_HK', 'test10@gmail.com', 1, '123456', '2016-12-18 13:06:27', 'احمدرضا', 'حسینخانی', 1, 1375, '09212526158'),
(87, 'test123', 'dscbj@dfkhvbd.ir', 1, '123456', '2016-12-20 08:11:29', 'تست', 'تستتت', NULL, 1374, '09135183542'),
(88, 'testiiii', 'dscbj@dfkhvbd.ir1', 1, '123456', '2016-12-20 08:21:11', 'بینترذ', 'تنیرنیستذ', NULL, NULL, '09354444545'),
(89, 'farvisun', 'farvisun@gmail.com', 1, '123456', '2016-12-23 20:56:35', 'محمد', 'عسکری', 1, 1374, '09383406944'),
(90, 'tester3', 'a@2a.com', 1, '123456', '2016-12-24 23:51:04', 'محمد مهدی', 'فاطمیان', NULL, NULL, '09120853278'),
(91, 'testt', 'q1@q1.com', 1, '123456', '2016-12-25 00:02:25', 'محمد مهدی', 'فاط', NULL, NULL, '09120853278'),
(92, 'testts1', 'a2@a.com', 1, '123456', '2016-12-26 23:37:55', 'محمد مهدی', 'تست', 1, NULL, ''),
(93, 'testts3', '1A@a.com', 1, '123456', '2016-12-26 23:53:11', 'حروف فارسی', 'حروف فارسی', NULL, NULL, '555555'),
(94, '1test', 'mzn.ssites@gmail.com', 1, '123456', '2016-12-27 14:43:09', 'تطرتسی', 'یسمنزدسیمنزد', NULL, NULL, '09135183542'),
(95, 'testttttt', 'mznnn@ddhhd.ir', 1, '123456', '2016-12-27 14:46:17', 'یسمنزدسیمد', 'تمسرذسیمترذم', NULL, NULL, '09135183542'),
(96, 'babashahis', 'babashahis@yahoo.com', 1, '123456', '2017-01-02 23:33:49', 'سعید', 'باباشاهی', 1, 1370, '09137866088'),
(97, 'taghavi', 'aliakbary@ce.sharif.edu', 1, '123456', '2017-01-14 12:50:48', 'سید تقی', 'سید تقوی', NULL, NULL, '09124567896'),
(98, 'dkfmd', 'asdfdfd@yahoo.com', 1, '123456', '2017-02-01 11:54:33', 'لبل', 'شسیب', 1, 1349, '0192322382'),
(99, 'faradis', 'f.larni@faradis.com', 1, '123456', '2017-02-01 14:27:48', 'فرهاد', 'لرنی', NULL, NULL, '85913100'),
(100, 'Talebpour', 'talebpour@sbu.ac.ir', 1, '123456', '2017-02-06 15:58:46', 'عليرضا', 'طالب پور', NULL, NULL, '09121164924'),
(101, 'farzi', 'sadegh.aliakbary@chmail.ir', 1, '123456', '2017-02-06 16:04:56', 'علی', 'علوی', NULL, NULL, '09381425814'),
(102, 'asghari', 'sadegh.aliakbary@chmai.ir', 1, '123456', '2017-02-06 16:09:46', 'اضغر', 'اضغری', 1, NULL, '09381425814'),
(103, 'mohammadazarani', 'mamadazarani@gmail.com', 1, '123456', '2017-02-08 08:14:59', 'محمد', 'عبداله زاده آرانی', 1, 1377, '09366866097'),
(104, 'masoudd', 'relive.mn@gmail.com', 1, '123456', '2017-02-11 08:56:12', 'مسعود', 'ناصروند', 1, 1370, '09382642618'),
(105, 'MrWooJ', 'CEO@Flieral.com', 1, '123456', '2017-02-11 15:50:27', 'علیرضا', 'عربی', NULL, NULL, '09121513962'),
(106, '95242037', 'ALIKHORASANI2016@YAHOO.COM', 1, '123456', '2017-02-11 19:45:52', 'سید علی', 'خراسانی', 1, 1376, '09151197356'),
(107, 'محسن', 'moh12saf@gmail.com', 1, '123456', '2017-02-12 20:18:18', 'محسن', 'صفری', 1, 1370, '09186196769'),
(108, 'narges', 'nadi23an76@gmail.com', 1, '123456', '2017-02-13 13:55:05', 'نرگس', 'نادی اسداباد', 2, 1376, '09152691124'),
(109, 'esmat', 'e.rashidi97@ymail.com', 1, '123456', '2017-02-13 14:19:31', 'عصمت', 'رشیدی', 2, 1376, '09132935987'),
(110, 'alireza', 'as@test.com', 1, '123456', '2017-02-15 10:36:02', 'شسیشس', 'شسی', 2, 1356, '0999999999'),
(111, 'mamadreza', 'mr.afshar.k@gmail.com', 1, '123456', '2017-02-18 08:59:24', 'محمد رضا', 'افشار کرمانی', 1, 1374, '09105180398'),
(112, 'arsalan', 'parham_arsalan@yahoo.com', 1, '123456', '2017-02-18 09:31:39', 'ارسلان', 'پرهام', 1, 1373, '09366244242'),
(113, 'f_rajabi_v', 'fk.rajabi@gmail.com', 1, '123456', '2017-02-20 15:49:23', 'فرانک', 'رجبی', 2, 1366, '09124577050'),
(114, 'test12', 'l3426444@mvrht.com', 1, '123456', '2017-02-22 10:47:44', 'ییبیسب', 'بسیبیس', 2, 1369, '09123334444'),
(115, 'mryazdi', 'yazdi.mohamad13@gmail.com', 1, '123456', '2017-07-08 21:39:59', 'محمد', 'عباس یزدی', 1, 1376, '09363926049'),
(116, 'salam', 'salamazizam@gmail.com', 1, '123456', '2017-02-24 08:48:26', 'مهدی', 'فاطمی', 2, 1301, '09121234567'),
(117, 'ahmadreza_saeidi48', 'ahmadreza.saeidi48@gmail.com', 1, '123456', '2017-03-01 18:38:40', 'احمدرضا', 'سعیدی', 1, 1375, '09388424405'),
(118, 'xlabs', 'l1173947@mvrht.com', 1, '123456', '2017-03-06 13:14:25', 'علی', 'علوی', NULL, NULL, '09121234567'),
(119, 'saman', 'samanfarajzadeh@yahoo.com', 1, '123456', '2017-03-08 16:02:00', 'سامان', 'فرج زاده', 1, 1369, '09359655078'),
(120, 'alidpr', 'alideypir@gmail.com', 1, '123456', '2017-03-11 00:15:49', 'محمد علی', 'دی پیر', 1, 1374, '09391574268'),
(121, 'navid946', 'navid.najmabadi@gmail.com', 1, '123456', '2017-03-12 16:19:52', 'نوید', 'نجم آبادی', 1, 1373, '09127335228'),
(122, 'zahramasdar', 'zmasdar@gmail.com', 1, '123456', '2017-03-29 00:47:17', 'زهرا', 'مصدر', 2, 1363, '09127623722'),
(123, 'reihaneh', 'reihaneh_1376@yahoo.com', 1, '123456', '2017-07-30 19:37:53', 'ریحانه', 'شاه علی', 2, 1376, '09194726402'),
(124, 'shervins72', 'shervin_x72@yahoo.com', 1, '123456', '2017-06-13 15:32:15', 'شروین', 'سرداری', 1, 1372, '09381512951'),
(125, 'iamsabet', 'iamsabet@gmail.com', 1, '123456', '2017-06-16 12:34:37', 'محمدرضا', 'احسانی ثابت', 1, 1374, '09351086095'),
(126, 'fedfa', 'wdsdsd@yahoo.com', 1, '123456', '2017-08-03 16:35:12', 'سس', 'سس', 1, 1330, '123123123'),
(127, 'kajastu', 'k@gmail.com', 1, '123456', '2017-08-10 16:04:01', 'کامران', 'کامرانی', 1, 1372, '09392222222');

-- --------------------------------------------------------

--
-- Table structure for table `users_skills`
--

CREATE TABLE `users_skills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_skills`
--

INSERT INTO `users_skills` (`id`, `user_id`, `tag_id`, `level`) VALUES
(96, 42, 44, 4),
(98, 44, 1, 1),
(105, 47, 47, 1),
(106, 47, 45, 1),
(107, 47, 10, 1),
(176, 65, 44, 1),
(180, 62, 1, 4),
(183, 62, 44, 1),
(184, 62, 19, 3),
(185, 62, 16, 5),
(186, 68, 46, 3),
(187, 68, 10, 3),
(188, 68, 33, 2),
(189, 68, 14, 2),
(190, 68, 53, 3),
(199, 45, 47, 4),
(200, 45, 10, 5),
(201, 45, 7, 2),
(203, 69, 10, 1),
(238, 70, 41, 5),
(239, 70, 10, 5),
(240, 70, 136, 5),
(241, 70, 4, 4),
(242, 70, 7, 4),
(243, 70, 9, 2),
(244, 70, 42, 5),
(245, 70, 11, 3),
(252, 71, 24, 1),
(253, 71, 104, 4),
(254, 72, 24, 3),
(255, 72, 35, 4),
(256, 72, 26, 4),
(257, 72, 46, 4),
(258, 72, 129, 3),
(259, 72, 73, 3),
(260, 72, 5, 3),
(261, 72, 6, 4),
(262, 72, 8, 4),
(263, 72, 12, 4),
(264, 72, 88, 2),
(265, 72, 30, 3),
(266, 72, 121, 3),
(267, 72, 133, 3),
(268, 72, 4, 3),
(269, 72, 50, 2),
(286, 1, 4, 1),
(289, 1, 7, 1),
(291, 1, 9, 3),
(294, 1, 24, 5),
(295, 1, 10, 4),
(296, 1, 26, 1),
(297, 1, 45, 1),
(298, 1, 41, 1),
(299, 1, 95, 5),
(300, 1, 107, 5),
(301, 76, 1, 2),
(302, 78, 140, 3),
(303, 78, 71, 3),
(304, 78, 4, 3),
(305, 78, 7, 3),
(306, 78, 44, 3),
(317, 79, 10, 3),
(320, 79, 46, 3),
(321, 79, 38, 3),
(322, 79, 40, 4),
(323, 79, 79, 2),
(324, 79, 148, 3),
(325, 79, 125, 2),
(326, 79, 32, 3),
(327, 79, 96, 2),
(328, 79, 99, 2),
(329, 79, 51, 2),
(330, 79, 30, 3),
(331, 79, 41, 3),
(343, 54, 1, 1),
(349, 54, 7, 2),
(356, 81, 44, 3),
(357, 81, 10, 3),
(359, 74, 2, 1),
(371, 48, 4, 5),
(374, 87, 2, 1),
(375, 48, 7, 5),
(376, 48, 8, 4),
(377, 48, 15, 2),
(378, 48, 12, 2),
(379, 48, 56, 1),
(380, 48, 35, 5),
(381, 89, 95, 4),
(382, 89, 11, 4),
(383, 89, 7, 4),
(384, 89, 6, 4),
(385, 89, 4, 4),
(386, 89, 3, 4),
(387, 89, 27, 4),
(388, 89, 24, 4),
(389, 89, 1, 4),
(390, 90, 44, 1),
(391, 90, 62, 1),
(392, 90, 65, 2),
(393, 54, 46, 2),
(394, 54, 47, 3),
(395, 54, 10, 4),
(396, 54, 95, 4),
(397, 54, 107, 4),
(398, 54, 56, 1),
(401, 94, 56, 1),
(403, 96, 1, 2),
(406, 96, 4, 3),
(408, 96, 6, 2),
(409, 96, 7, 3),
(414, 96, 12, 2),
(420, 96, 44, 2),
(421, 96, 45, 4),
(422, 96, 130, 3),
(423, 96, 72, 1),
(424, 96, 75, 4),
(425, 96, 137, 2),
(426, 96, 32, 4),
(427, 96, 140, 2),
(428, 96, 99, 2),
(429, 96, 30, 3),
(430, 96, 52, 1),
(431, 96, 41, 3),
(432, 96, 122, 3),
(434, 98, 56, 2),
(435, 98, 59, 1),
(436, 98, 35, 1),
(437, 98, 1, 1),
(438, 98, 47, 1),
(439, 98, 46, 1),
(440, 98, 45, 1),
(441, 108, 10, 2),
(443, 111, 125, 2),
(444, 112, 18, 5),
(445, 113, 46, 1),
(446, 113, 125, 2),
(448, 116, 47, 1),
(452, 115, 1, 5),
(456, 120, 10, 3),
(457, 120, 25, 2),
(458, 120, 35, 2),
(459, 120, 46, 2),
(460, 120, 130, 2),
(461, 120, 6, 1),
(462, 120, 42, 3),
(463, 120, 81, 3),
(464, 120, 82, 2),
(465, 120, 138, 2),
(466, 120, 125, 1),
(467, 120, 13, 3),
(468, 120, 90, 2),
(469, 120, 118, 2),
(470, 120, 104, 5),
(471, 121, 95, 5),
(472, 121, 18, 3),
(473, 121, 8, 4),
(474, 121, 4, 4),
(475, 121, 79, 4),
(476, 121, 123, 4),
(477, 121, 22, 3),
(482, 122, 10, 3),
(483, 122, 45, 3),
(484, 122, 46, 3),
(485, 124, 32, 2),
(486, 124, 125, 2),
(487, 124, 27, 1),
(492, 125, 4, 5),
(493, 125, 5, 5),
(495, 125, 7, 4),
(496, 125, 8, 4),
(497, 125, 9, 4),
(498, 125, 10, 4),
(499, 125, 11, 5),
(504, 125, 24, 5),
(505, 125, 121, 4),
(506, 125, 85, 4),
(507, 125, 99, 3),
(508, 125, 39, 4),
(509, 125, 88, 4),
(510, 125, 144, 4),
(511, 125, 44, 3),
(512, 125, 46, 4),
(513, 115, 2, 5),
(514, 115, 3, 3),
(515, 115, 4, 4),
(517, 115, 121, 5),
(518, 115, 24, 5),
(519, 115, 26, 5),
(520, 115, 25, 5),
(521, 115, 72, 4),
(522, 123, 125, 4),
(523, 123, 46, 4),
(524, 126, 8, 5),
(525, 126, 139, 5),
(526, 126, 2, 5),
(527, 126, 95, 5),
(528, 126, 10, 5),
(529, 126, 9, 5),
(530, 126, 46, 5),
(531, 126, 110, 5),
(533, 127, 25, 4),
(534, 127, 4, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4AACF684A76ED395` (`user_id`);

--
-- Indexes for table `advertise_tags`
--
ALTER TABLE `advertise_tags`
  ADD PRIMARY KEY (`advertise_id`,`tag_id`),
  ADD KEY `IDX_2C442346BAD26311` (`tag_id`),
  ADD KEY `IDX_2C44234637AF8FCD` (`advertise_id`);

--
-- Indexes for table `job_request`
--
ALTER TABLE `job_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A1783804A76ED395` (`user_id`),
  ADD KEY `IDX_A178380437AF8FCD` (`advertise_id`);

--
-- Indexes for table `karfarma_extra`
--
ALTER TABLE `karfarma_extra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_68771A5FA76ED395` (`user_id`);

--
-- Indexes for table `karjoo_extra`
--
ALTER TABLE `karjoo_extra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_38BEC09CCB944F1A` (`student_id`),
  ADD UNIQUE KEY `UNIQ_38BEC09C36491297` (`national_id`),
  ADD UNIQUE KEY `UNIQ_38BEC09CA76ED395` (`user_id`);

--
-- Indexes for table `skill_tags`
--
ALTER TABLE `skill_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_skills`
--
ALTER TABLE `users_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_68268F33A76ED395` (`user_id`),
  ADD KEY `IDX_68268F33BAD26311` (`tag_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `job_request`
--
ALTER TABLE `job_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `karfarma_extra`
--
ALTER TABLE `karfarma_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `karjoo_extra`
--
ALTER TABLE `karjoo_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `skill_tags`
--
ALTER TABLE `skill_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `users_skills`
--
ALTER TABLE `users_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertises`
--
ALTER TABLE `advertises`
  ADD CONSTRAINT `FK_4AACF684A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `advertise_tags`
--
ALTER TABLE `advertise_tags`
  ADD CONSTRAINT `FK_2C44234637AF8FCD` FOREIGN KEY (`advertise_id`) REFERENCES `advertises` (`id`),
  ADD CONSTRAINT `FK_2C442346BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `skill_tags` (`id`);

--
-- Constraints for table `job_request`
--
ALTER TABLE `job_request`
  ADD CONSTRAINT `FK_A178380437AF8FCD` FOREIGN KEY (`advertise_id`) REFERENCES `advertises` (`id`),
  ADD CONSTRAINT `FK_A1783804A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `karfarma_extra`
--
ALTER TABLE `karfarma_extra`
  ADD CONSTRAINT `FK_68771A5FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `karjoo_extra`
--
ALTER TABLE `karjoo_extra`
  ADD CONSTRAINT `FK_38BEC09CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_skills`
--
ALTER TABLE `users_skills`
  ADD CONSTRAINT `FK_68268F33A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `FK_68268F33BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `skill_tags` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
