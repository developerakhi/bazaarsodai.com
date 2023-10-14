-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2023 at 01:35 PM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazaarsodai_mrk14837`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `title2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `srt` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `link` text DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'akhi', 'aakhi88@gmail.com', '01727404933', 'hi', '2023-07-10 09:44:44', '0000-00-00 00:00:00'),
(2, 'robi', 'admin@gmail.com', '0178546932', 'hello', '2023-07-10 09:46:13', '0000-00-00 00:00:00'),
(3, 'Md Ruhul Amin', 'bazaarsoday@gmail.com', '01819449320', 'dfdgdfg dfgdffdfdh dfhdfdfhfdh dfgh dfh dfh dfh dfh dfh df dfdfh f fhdfh dfh dfh dfh dfh dfh dfh df df hfd fdh hfdh ', '2023-07-17 04:48:46', '0000-00-00 00:00:00'),
(4, 'GregoryArram', 'tar@lasercalibration.ru', '88497734478', 'http://tuchkas.ru/', '2023-08-08 11:32:02', '0000-00-00 00:00:00'),
(5, 'Jenna Frank', 'shelli.stump@msn.com', '0431 12 11 73', 'Hi Leader, \r\n\r\nHave you ever wished your product could come to life in a way your customers could better understand and engage with?\r\nCinematic and 3D rendering storytelling make this a reality!\r\n\r\nHere at TGT Visual Media, we specialize in creating high-end visuals that bring your products to life and demonstrate their benefits in a way that is both eye-catching and persuasive.\r\nWith our cutting-edge technology, we can help you create cinematic stories, realistic product renders, stunning cinematic animations, and engaging visual presentations that will blow away your competition.\r\n\r\nCheck out our website www.postai.click\r\n\r\nThe Genie Team Visual Media is a team of product specialists with vast techno-operational experience, artists, and designers who specialize in creating cinematic and 3D rendering storytelling, full product branding, and visual presentation design.\r\n\r\nReady to level up your marketing strategy?\r\nStop relying on flat images or text alone and let us help you unlock the potential of your brand with compelling visuals - visit our website a get a free sample www.postai.click\r\n\r\n\r\nlooking Forward Hearing from you \r\n\r\nJenna Frank\r\n\r\nTGT Visual Media', '2023-08-09 23:41:10', '0000-00-00 00:00:00'),
(6, 'JeraldReins', 'elfridabolshakova901892@mail.ru', '85311841583', 'ChemDiv’s Screening Libraries have been extensively validated both in our in-house biological assays and in the laboratories of over 200 external partners including Pharma, Biotech, Academia and Screening Centers in the U.S., Europe, and Japan. We offer a shelf-available set of over 1.6 M individual solid compounds. \r\nAurora libraries ', '2023-08-12 01:41:23', '0000-00-00 00:00:00'),
(7, 'xelo', 'elfridabolshakova901892@mail.ru', '86562244872', '?????? ????? ? ??????? ??????? ????? ?????? ???????? ??????? ????? ? ????????? ????????, ???????? ??? ?????? ? ????????? ?????????? ????????????? ????????. ??????, ?? ??????? ????????, ??? ????????????? ??????? ????? ??????? ?? ????? ???? ????????? ?????? ????????? ??????, ????? ??? Google, ??? ????? ???????? ? ????????? ? ???????? ???????? ?????. \r\n?„???????? ?…???????µ?? ', '2023-08-13 15:47:46', '0000-00-00 00:00:00'),
(8, 'AlbertstynC', 'cearley-koppes66@biebel54.dynainbox.com', '81773566495', '???????? ?? ??????? ??????? ????????? ?? ??????? \r\nhttps://lada-kalina.ru \r\n???????? – ??? ?????????? ????????? ??? ????????? ?????? ? ??????????. ?? ??????????? ????? Pokerdom ?? ?????? ??????? ? ?????????? ??????-?????? ??? ?? ??? ????????? ????????? ? ???????? ?????? ? ????????????? ???????????? ????? ?? ???????? ??????. Pokerdom – ??? ?? ?????? ?????-???, ?? ? ??????-?????? ? ?????????? ??????, ???????, ?????????, ??????? ? ?????? ???????? ???????????. ?? ?????? ?????? ??? ?? ??????????? ?????, ??? ? ?? ????? ??? ?????? ??????. Pokerdom – ??? ????? ???????????? ???????, ??? ?? ?????? ?????? ?????? ?? ????? ? ?????? ??????? ??? ????. ?? ?????? ???????? ?? ????????? ????? ?????? ? ???????, ? ????? ???????? ??????? ???????????? ? ??????? ???????. Pokerdom – ??? ?????-??? ??? ???, ??? ????? ???????? ? ????????. ?? ?????? ???????? ? ??????? ???????? ? ????, ???????? ????????? ?? ????????????? ?????, ? ????? ??????????? ? ????????? ?????? ? ???????. ?? ?????? ???????? ????????, ??????, ?????????? ????? ? ?????? ??????. ?? ?????? ???????? ???? ?????? ? ?????????? ????? ? ???????? ??? ?????? ?????????? ? ?????. Pokerdom – ??? ?????-??? ??? ???, ??? ????? ????? ? ????? ???????? ???? ?????? ? ???????????? ? ????????? ???????????. ???????? ?????? ?? ??????????? ????? Pokerdom ? ??????????????? ? ????????? ??????? ?? ????? ????!', '2023-08-20 04:21:38', '0000-00-00 00:00:00'),
(9, 'ftaletjyyx', 'xduvttevo@essytop.site', '85433372321', 'cialis online order  https://cialispillus.com/ - tadalafil cialis online  \r\ngeneric cialis no prescription  cialis reviews  how to take cialis 20mg ', '2023-08-23 04:41:50', '0000-00-00 00:00:00'),
(10, 'ftaletvzud', 'bkzyjsrss@essytop.site', '86596654963', 'cialis viagra levitra  https://cialispillus.com/ - cialis without a doctor prescription  \r\ncialis grapefruit  cialis from canada to usa  cialis online purchase canada ', '2023-08-23 21:56:16', '0000-00-00 00:00:00'),
(11, 'RobertRiz', 'alfredegov@gmail.com', '81333751739', '???? ???, ????? ?? ???? ??? ???? ???.', '2023-08-24 14:28:02', '0000-00-00 00:00:00'),
(12, 'RaymondBug', 'no.reply.ThijsBakker@gmail.com', '84395871681', 'Howdy-ho! bazaarsodai.com \r\n \r\nDid you know that it is possible to send letter lawfully? We present a new legal method of sending requests through feedback forms. You may locate these feedback forms on a variety of webpages. \r\nWhen such messages are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals securely. As Feedback Forms messages are taken into great consideration, they won&#39;t be classified as spam. \r\nWe offer you the opportunity to try out our service for free. \r\nOn your behalf, we can deliver up to 50,000 messages. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', '2023-08-24 17:13:06', '0000-00-00 00:00:00'),
(13, 'WlasowHop', 'kymqgvxq@hypermail.es', '87617754644', '????? ???????? ? ???????????? ??????? ??? ????? ??????-??????! \r\n?????? ????, Boss! \r\n????? ?????????? ???????? ????? ????? ????????-?????? ?? 5-10 ???????. \r\n?????????? ???????? ? ???????????? Yandex, ????. ???????? Domain/Page Rating. \r\n????????? ?? 580 ?. ???????????? ???. \r\n????? ????????????? ????????? ?????? ??????? - ???????? ???? ??????. \r\n????? ????. ??????????? ??????. ??????????? ? ??????. \r\n???????: @xrumers \r\nSkype: Loves.Ltd \r\nemail: support@xrumer.cc \r\nhttps://xrumer.cc \r\n?????? ???! \r\n? ????? ???????? ?? ????????! \r\nspeak English', '2023-08-26 11:17:52', '0000-00-00 00:00:00'),
(14, 'Craignouse', 'yasen.krasen.13+70827@mail.ru', '85116643859', 'Mfhfujfehfueh ifwjifjeighufijsdh uidfsjkdokwefuhgedjij idoweweureiurioweiidkjsdj iwjdsksosjfeihfiwskdoakd ijwdiwdowjfihefiwjdiwhfgue bazaarsodai.com', '2023-08-26 19:07:33', '0000-00-00 00:00:00'),
(15, 'Michaelnob', 'k.eithy2arterberr.y.rl@gmail.com', '87777752893', 'passing drug screening   http://electrigaz.com/alpfr.html   black toenail remedies ', '2023-08-29 14:53:55', '0000-00-00 00:00:00'),
(16, 'Dennisven', 'k.e.ithy2arterberr.y.rl@gmail.com', '83162267962', 'columbian drug war   http://stratajm-idf.fr/codfr.html   pill organizer walmart ', '2023-08-31 11:09:37', '0000-00-00 00:00:00'),
(17, 'Eugenecodia', 'davidde.gray@btclick.com', '84424551417', 'HOW TO MAKE FROM $100,000 PER WEEK ON FOREX USING CHATGPT http://earn-money-forex-5562.myparisevents.com/invite', '2023-09-02 02:30:43', '0000-00-00 00:00:00'),
(18, 'Eugenecodia', 'davidde.gray@btclick.com', '88114976172', 'HOW TO MAKE FROM $100,000 PER WEEK ON FOREX USING CHATGPT http://earn-money-forex-5562.myparisevents.com/invite', '2023-09-02 02:30:46', '0000-00-00 00:00:00'),
(19, 'Eugenecodia', 'davidde.gray@btclick.com', '87445724294', 'HOW TO MAKE FROM $100,000 PER WEEK ON FOREX USING CHATGPT http://earn-money-forex-5562.myparisevents.com/invite', '2023-09-02 02:30:49', '0000-00-00 00:00:00'),
(20, 'Eugenecodia', 'davidde.gray@btclick.com', '85973997467', 'HOW TO MAKE FROM $100,000 PER WEEK ON FOREX USING CHATGPT http://earn-money-forex-5562.myparisevents.com/invite', '2023-09-02 02:30:51', '0000-00-00 00:00:00'),
(21, 'Eugenecodia', 'davidde.gray@btclick.com', '89253374115', 'HOW TO MAKE FROM $100,000 PER WEEK ON FOREX USING CHATGPT http://earn-money-forex-5562.myparisevents.com/invite', '2023-09-02 02:30:55', '0000-00-00 00:00:00'),
(22, 'RandallPlaub', 'beioley18@hotmail.co.uk', '83446618953', 'Today you will be credited with $100,000, take it right now http://forex-5752.elisou.com/invite', '2023-09-04 07:15:31', '0000-00-00 00:00:00'),
(23, 'RandallPlaub', 'beioley18@hotmail.co.uk', '87489964868', 'Today you will be credited with $100,000, take it right now http://forex-5752.elisou.com/invite', '2023-09-04 07:15:34', '0000-00-00 00:00:00'),
(24, 'RandallPlaub', 'beioley18@hotmail.co.uk', '89499178696', 'Today you will be credited with $100,000, take it right now http://forex-5752.elisou.com/invite', '2023-09-04 07:15:36', '0000-00-00 00:00:00'),
(25, 'RandallPlaub', 'beioley18@hotmail.co.uk', '86371258761', 'Today you will be credited with $100,000, take it right now http://forex-5752.elisou.com/invite', '2023-09-04 07:15:39', '0000-00-00 00:00:00'),
(26, 'RandallPlaub', 'beioley18@hotmail.co.uk', '84497588257', 'Today you will be credited with $100,000, take it right now http://forex-5752.elisou.com/invite', '2023-09-04 07:15:41', '0000-00-00 00:00:00'),
(27, 'Percyfuets', 'k.e.i.thy2arterberr.y.rl@gmail.com', '85764622994', 'online herbal shops   http://www.synrgistic.com/bromes.html   drug free communities ', '2023-09-05 07:34:20', '0000-00-00 00:00:00'),
(28, 'Charleshoume', 'k.e.i.t.hy2arterberr.y.rl@gmail.com', '87815789541', 'home remedies stomach   http://www.sociedaddeconciertos.com/hydres.html   health care portability ', '2023-09-06 18:58:18', '0000-00-00 00:00:00'),
(29, 'xelo', 'elfridabolshakova901892@mail.ru', '82189465573', '?????? ????? ? ??????? ??????? ????? ?????? ???????? ??????? ????? ? ????????? ????????, ???????? ??? ?????? ? ????????? ?????????? ????????????? ????????. ??????, ?? ??????? ????????, ??? ????????????? ??????? ????? ??????? ?? ????? ???? ????????? ?????? ????????? ??????, ????? ??? Google, ??? ????? ???????? ? ????????? ? ???????? ???????? ?????. \r\n?…???????µ?? ???„???†???°?»?????‹?? ???°???‚ ', '2023-09-07 23:49:32', '0000-00-00 00:00:00'),
(30, 'haRSut', 'iu.nsk.iy.g.i.pert.on.i.k.@gmail.com', '81514489291', 'porno mom big ass \r\n \r\nhttps://joywin.ru:443/bitrix/redirect.php?event1=click_to_call&event2=&event3=&goto=https://tubesweet.com/\r\nhttps://prominstrument24.ru/bitrix/redirect.php?event1=click_to_call&event2=&event3=&goto=https://tubesweet.com/\r\nhttps://50.gregorinius.com/index/d1?diff=0&source=og&campaign=5796&content=&clickid=6glaagrcny71ype6&aurl=https://tubesweet.com/\r\n \r\nhttps://fishkin40.gumroad.com/p/tubesweet-com', '2023-09-08 08:14:22', '0000-00-00 00:00:00'),
(31, 'TomasSerse', 'k.e.i.t.h.y2arterberr.y.rl@gmail.com', '82832152968', 'home remedy facial   https://www.jotform.com/230331659881056   remedies for herpes ', '2023-09-08 14:26:46', '0000-00-00 00:00:00'),
(32, 'xelo', 'elfridabolshakova901892@mail.ru', '82235778333', '?????? ????? ? ??????? ??????? ????? ?????? ???????? ??????? ????? ? ????????? ????????, ???????? ??? ?????? ? ????????? ?????????? ????????????? ????????. ??????, ?? ??????? ????????, ??? ????????????? ??????? ????? ??????? ?? ????? ???? ????????? ?????? ????????? ??????, ????? ??? Google, ??? ????? ???????? ? ????????? ? ???????? ???????? ?????. \r\n???????????? ?…???????µ?????? ', '2023-09-08 15:06:39', '0000-00-00 00:00:00'),
(33, 'RobertRiz', 'alfredegov@gmail.com', '85695173556', '?????????, ????? ?? ???? ?????? ??.', '2023-09-09 12:55:11', '0000-00-00 00:00:00'),
(34, 'Timothyurife', 'mibomtayeng@gmail.com', '84178191382', 'Archival exclusive photos of naked Kim Kardashian - 34 photos http://naked-kim-kardashian-81281.omtogelprediksi.com/page', '2023-09-09 18:31:22', '0000-00-00 00:00:00'),
(35, 'Timothyurife', 'mibomtayeng@gmail.com', '83195826123', 'Archival exclusive photos of naked Kim Kardashian - 34 photos http://naked-kim-kardashian-81281.omtogelprediksi.com/page', '2023-09-09 18:31:25', '0000-00-00 00:00:00'),
(36, 'Timothyurife', 'mibomtayeng@gmail.com', '85868571737', 'Archival exclusive photos of naked Kim Kardashian - 34 photos http://naked-kim-kardashian-81281.omtogelprediksi.com/page', '2023-09-09 18:31:27', '0000-00-00 00:00:00'),
(37, 'Timothyurife', 'mibomtayeng@gmail.com', '81112461638', 'Archival exclusive photos of naked Kim Kardashian - 34 photos http://naked-kim-kardashian-81281.omtogelprediksi.com/page', '2023-09-09 18:31:29', '0000-00-00 00:00:00'),
(38, 'Timothyurife', 'mibomtayeng@gmail.com', '86272855214', 'Archival exclusive photos of naked Kim Kardashian - 34 photos http://naked-kim-kardashian-81281.omtogelprediksi.com/page', '2023-09-09 18:31:31', '0000-00-00 00:00:00'),
(39, 'Audry Vandiver', 'audry.vandiver@gmail.com', '04.72.50.00.10', 'Ready to take your online store to the next level? Our eBook, &#34;E-Commerce Mastery,&#34; is your ultimate guide.\r\n\r\nScale Your Online Store with Confidence\r\nBoost Sales and Customer Engagement\r\nMaster Proven E-Commerce Strategies\r\n\r\nDon&#39;t miss out. Grab your copy now at http://ecomgrowthguide.com/ and unlock e-commerce success.\r\n\r\nGet your copy now: http://ecomgrowthguide.com/', '2023-09-10 14:23:57', '0000-00-00 00:00:00'),
(40, 'PhilRiz', 'draikkimr976@gmail.com', '86615981187', 'Hi, kam dashur të di çmimin tuaj', '2023-09-11 10:40:42', '0000-00-00 00:00:00'),
(41, 'GeorgeThows', 'bensmith3948@binace.com', '88671125117', 'Hello. \r\nYou registered with us exactly 364 days ago, but for some reason you never logged into your account again. \r\nYour account has already accumulated $24,365 - withdraw it urgently. Since tomorrow all inactive accounts will be deleted along with all the money earned. \r\nThere was no way we could contact you, so we had to contact you through the contact form of your website bazaarsodai.com the address of which you left when registering in our system. \r\nHere is the link to your account - http://your-payout-51352.youshua.org/stat', '2023-09-15 02:26:27', '0000-00-00 00:00:00'),
(42, 'GeorgeThows', 'bensmith3948@binace.com', '85693272928', 'Hello. \r\nYou registered with us exactly 364 days ago, but for some reason you never logged into your account again. \r\nYour account has already accumulated $24,365 - withdraw it urgently. Since tomorrow all inactive accounts will be deleted along with all the money earned. \r\nThere was no way we could contact you, so we had to contact you through the contact form of your website bazaarsodai.com the address of which you left when registering in our system. \r\nHere is the link to your account - http://your-payout-51352.youshua.org/stat', '2023-09-15 02:26:30', '0000-00-00 00:00:00'),
(43, 'GeorgeThows', 'bensmith3948@binace.com', '81362852117', 'Hello. \r\nYou registered with us exactly 364 days ago, but for some reason you never logged into your account again. \r\nYour account has already accumulated $24,365 - withdraw it urgently. Since tomorrow all inactive accounts will be deleted along with all the money earned. \r\nThere was no way we could contact you, so we had to contact you through the contact form of your website bazaarsodai.com the address of which you left when registering in our system. \r\nHere is the link to your account - http://your-payout-51352.youshua.org/stat', '2023-09-15 02:26:33', '0000-00-00 00:00:00'),
(44, 'GeorgeThows', 'bensmith3948@binace.com', '87312221846', 'Hello. \r\nYou registered with us exactly 364 days ago, but for some reason you never logged into your account again. \r\nYour account has already accumulated $24,365 - withdraw it urgently. Since tomorrow all inactive accounts will be deleted along with all the money earned. \r\nThere was no way we could contact you, so we had to contact you through the contact form of your website bazaarsodai.com the address of which you left when registering in our system. \r\nHere is the link to your account - http://your-payout-51352.youshua.org/stat', '2023-09-15 02:26:35', '0000-00-00 00:00:00'),
(45, 'GeorgeThows', 'bensmith3948@binace.com', '88465175569', 'Hello. \r\nYou registered with us exactly 364 days ago, but for some reason you never logged into your account again. \r\nYour account has already accumulated $24,365 - withdraw it urgently. Since tomorrow all inactive accounts will be deleted along with all the money earned. \r\nThere was no way we could contact you, so we had to contact you through the contact form of your website bazaarsodai.com the address of which you left when registering in our system. \r\nHere is the link to your account - http://your-payout-51352.youshua.org/stat', '2023-09-15 02:26:38', '0000-00-00 00:00:00'),
(46, 'Jorgelaw', 'k.e.i.t.h.y.2arterberr.y.rl@gmail.com', '84761575767', 'antiviral remedies   https://www.jotform.com/230395395979071   herbal side effects ', '2023-09-15 20:38:19', '0000-00-00 00:00:00'),
(47, 'RobertRiz', 'alfredegov@gmail.com', '89727617322', 'Hi, roeddwn i eisiau gwybod eich pris.', '2023-09-17 06:43:15', '0000-00-00 00:00:00'),
(48, 'RaymondBug', 'no.reply.WaltherJohansen@gmail.com', '85467696624', 'Wassup? bazaarsodai.com \r\n \r\nDid you know that it is possible to send appeal accurately and legally? We provide a novel method for sending proposals via contact forms. These feedback forms can be seen on a variety of webpages. \r\nWhen such business proposals are sent, no personal data is used, and messages are securely sent to forms specifically designed to receive them. As Communication Forms are seen as important, messages sent through them are unlikely to be marked as spam. \r\nWe are now offering you the chance to use our service for free. \r\nWe shall send up to 50,000 messages for you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', '2023-09-20 17:08:18', '0000-00-00 00:00:00'),
(49, 'Jim Iliffe', 'iliffe.flynn@msn.com', '3647096165', 'Hi there,\r\nMonthly Seo Services - Professional/ Affordable Seo Services\r\nHire the leading seo marketing company and get your website ranked on search engines. Are you looking to rank your website on search engines? Contact us now to get started - https://alwaysdigital.co/la/  Today!\r\n\r\nPsst.. we will also do web design and build complete website. Wordpress and Ecommerce sites development. Click here: https://outsource-bpo.com/website/', '2023-09-24 00:42:09', '0000-00-00 00:00:00'),
(50, 'AndrewNag', 'anomarzen1979@mail.ru', '86698635833', 'Hello! I&#39;m Vera, 28. I work as a software programmer at an IT company. In my free time I do sports and yoga. Looking for a smart, active and positive man to start a strong family. Hope we can understand each other! \r\nhttps://clck.ru/35qCyo \r\n', '2023-09-24 12:05:41', '0000-00-00 00:00:00'),
(51, 'ThomasCak', 'monicaolivas@gmail.com', '83544491816', 'Attract 10,000 wealthy clients per day to your website bazaarsodai.com  http://vip-619734.apbet998.com/the', '2023-09-25 16:03:49', '0000-00-00 00:00:00'),
(52, 'ThomasCak', 'monicaolivas@gmail.com', '89698542636', 'Attract 10,000 wealthy clients per day to your website bazaarsodai.com  http://vip-619734.apbet998.com/the', '2023-09-25 16:03:51', '0000-00-00 00:00:00'),
(53, 'ThomasCak', 'monicaolivas@gmail.com', '89656765566', 'Attract 10,000 wealthy clients per day to your website bazaarsodai.com  http://vip-619734.apbet998.com/the', '2023-09-25 16:03:54', '0000-00-00 00:00:00'),
(54, 'ThomasCak', 'monicaolivas@gmail.com', '82181629665', 'Attract 10,000 wealthy clients per day to your website bazaarsodai.com  http://vip-619734.apbet998.com/the', '2023-09-25 16:03:56', '0000-00-00 00:00:00'),
(55, 'ThomasCak', 'monicaolivas@gmail.com', '84335227842', 'Attract 10,000 wealthy clients per day to your website bazaarsodai.com  http://vip-619734.apbet998.com/the', '2023-09-25 16:03:59', '0000-00-00 00:00:00'),
(56, 'Eric Piet', 'inficzateam@gmail.com', '87795912227', 'We are delighted to offer our vast international network of potential funding partners to cater to your needs. Whether you are currently engaged in a project or have a pre-existing venture requiring financial support, our team is ready to provide expert assistance. Our partners are equipped to invest in projects ranging from $1M to $3B, offering competitive interest rates of 2.5% to 4% over a 10-year term, complement by a generous 2-year grace period. \r\n \r\nShould you require more information, please don&#39;t hesitate to reach out to us. \r\n \r\nWarmest Regards \r\n \r\nEric Piet \r\nEric.Piet@inficza.com \r\nPortfolio Manager \r\nINFICZA \r\nhttp://www.inficza.com/', '2023-09-28 05:02:16', '0000-00-00 00:00:00'),
(59, 'sdfsdf', 'admin@sarkarit.com', '017589635', 'sdfg', '2023-09-30 11:56:30', '0000-00-00 00:00:00'),
(60, 'sdfdsf', 'admin@sarkarit.com', '425867868769', 'dgfhfg', '2023-09-30 11:58:21', '0000-00-00 00:00:00'),
(61, 'Mike Hoggarth\r\n', 'mikeTriefeDip@gmail.com', '81285365478', 'Hi there \r\n \r\nJust checked your bazaarsodai.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\n \r\nRegards \r\nMike Hoggarth\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/', '2023-10-01 21:39:46', '0000-00-00 00:00:00'),
(62, 'Mike Walker\r\n', 'peterIcons@gmail.com', '87585766568', 'Greetings \r\n \r\nI have just verified your SEO on  bazaarsodai.com for its SEO metrics and saw that your website could use an upgrade. \r\n \r\nWe will increase your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Walker\r\nDigital X SEO Experts', '2023-10-02 08:33:42', '0000-00-00 00:00:00'),
(63, 'WarrenBal', 'h.awk6411.3.@gmail.com', '82721254673', 'I&#39;m just so happy that I stumbled upon this url! Not just has it officially surprisingly constructive for myself in terms and conditions of gaining knowledge about facts and techniques on a assortment of subjects, nevertheless it&#39;s already been a fantastic way personally to relate with different males who also entertain correspondent needs. I had dug up so hundreds effective suggestions and applications at this point who have got in reality aided me throughout my everyday lifestyle, and I&#39;m unable to procrastinate to share this source among my acquaintances. Plus, I already know that the can benefit all those valued resources in which they can buy at this place besides. I will certainly be revising this online business again and again and once more,, as there are without fail a consideration unexpected and promoting to uncover.  cheers for fashioning such an extremely good stand, and I could not hold to communicate this site with my acquaintances. I fully understand that they value all of the cherished research that they&#39;re able to locate here at the same time. I most certainly will most likely be revisiting this web-property time and time again all over again, as will be certainly constantly ideas captivating and thrilling to discover.  Appreciate it for fashioning such an phenomenal site! \r\n \r\nI am hugely thankful for happening upon this web presence, for the reason that it has presented me with unbeatable understanding and content I always can use in my personal and master everyday life.  I shall surely be propagating the word regarding this wonderful blog to my connections and will maintain to return to it continuously to obtain more strategies. \r\nIf you wish to master more info on this approach subject matter come by my own websites: Morais Vineyard Wedding Video ', '2023-10-04 13:01:51', '0000-00-00 00:00:00'),
(64, 'DonaldFrord', 'so.uthw.est.t.u.bs.88.@gmail.com', '85722487578', 'Hi to every single one of our water relaxation addicts! \r\n \r\nThere&#39;s nothing really like immersing yourself in a warm spa after a tiring day. For people in search of the ultimate tranquility experience, a jacuzzi is truly incomparable. \r\n \r\nVariety is certainly the spice of lifetime, and we sincerely pride ourselves on offering a diverse array of hot tubs to suit every preference. \r\n \r\nExcellence, to us, is more than just a word. It&#39;s our hallmark. All of our products undergo rigorous testing to ensure they always provide the peak relaxing experience for several years to come. \r\n \r\nOur knowledgeable staff is always on hand to advise you in finding the best-suited spa for your needs and home. \r\n \r\nHave you ever considered having your very own peace retreat? Everything are your must-haves when it comes to choosing the optimal jacuzzi? Let&#39;s converse regarding it! \r\n \r\nKeep effervescent and peaceful! Anyhow, I launched my own cutting edge business venture online business a while back, you can view here:  Discover spa tub safety features Cavecreek Arizona', '2023-10-05 01:31:11', '0000-00-00 00:00:00'),
(65, 'Mike Arnold\r\n', 'mikedaw@gmail.com', '88347135338', 'Hi there \r\n \r\nThis is Mike Arnold\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your bazaarsodai.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Arnold\r\n \r\nmike@strictlydigital.net', '2023-10-10 07:37:36', '0000-00-00 00:00:00'),
(66, 'Maria Lush', 'maria@furthertrends.com', '0395 74 04 22', 'Hey,\r\n\r\nHave you guys seen the new free A.I. tool that turns your website content into videos?\r\n\r\nCheck it out here: http://furthertrends.com\r\n\r\n-Maria\r\n\r\nunsub from future comms: https://u.furthertrends.com', '2023-10-14 03:10:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `minimum_amount` varchar(255) DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_code`, `discount`, `minimum_amount`, `end_date`) VALUES
(3, '12', '50', '100', '2023-04-03 12:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals`
--

CREATE TABLE `flash_deals` (
  `id` int(10) NOT NULL,
  `offer_name` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `activity` int(11) NOT NULL DEFAULT 1,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `flash_deals`
--

INSERT INTO `flash_deals` (`id`, `offer_name`, `sub_title`, `activity`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(88, 'Monthly Sell', 'up to 500 avobe', 1, '2023-07-16 14:22:00', '2023-07-23 12:23:00', '2023-07-23 06:22:41', '0000-00-00 00:00:00'),
(89, 'ULTA PALTA OFFER', '', 1, '2023-08-14 12:03:00', '2023-08-15 12:03:00', '2023-08-14 08:53:14', '0000-00-00 00:00:00'),
(90, 'Big Offer', '10% off super sale', 1, '2023-09-16 16:56:00', '2023-09-20 16:56:00', '2023-09-16 10:56:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals_item`
--

CREATE TABLE `flash_deals_item` (
  `id` int(10) NOT NULL,
  `flush_deals_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `flash_deals_item`
--

INSERT INTO `flash_deals_item` (`id`, `flush_deals_id`, `product_id`, `created_at`, `updated_at`) VALUES
(211, 88, 61, '2023-07-17 10:53:57', '0000-00-00 00:00:00'),
(213, 88, 27, '2023-07-23 05:44:18', '0000-00-00 00:00:00'),
(214, 89, 354, '2023-07-24 06:03:36', '0000-00-00 00:00:00'),
(216, 90, 19, '2023-09-16 10:56:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(9, '1689049431'),
(9, '1689049433'),
(9, '1689049435'),
(32, '1691383768'),
(32, '1691384961'),
(32, '1691577535'),
(32, '1691577738'),
(35, '1696134254');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `cID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `user_type`, `email`, `password`, `salt`, `cID`) VALUES
(9, 'bazaarsodai', 'admin', 'admin@sarkarit.com', '60b507f3e13fb0f0709e57aa943aebd6165a8dfed5b1323e733d8e4046fd27a76da66cdbfafe4e6c19e0913b2c968a43d84a94bcfc31099beb761b3c8deecd87', '5cd67c6c42725fad9372f79569ca9b625b52773400f2050b3c3b9b090a36f508a8b395c80037c9b5e37084d0f55da0e5f437fd47036a7062ae321e9d40f2a459', 'be714720153b250');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `page_cn` text DEFAULT NULL,
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `activity` int(11) DEFAULT 1,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `meta_desc`, `meta_key`, `page_cn`, `img1`, `img2`, `banner`, `type`, `activity`, `create_at`) VALUES
(50, 'A - Kitchen & Cooking', '   ', '  ', '', '', '', '6430f9d910bed1680931289.jpg', 1, 1, '2023-05-08 06:48:21'),
(67, 'Popular ', ' ', NULL, NULL, '643992d052fd01681494736.png', NULL, '643992d0530801681494736.jpg', 1, 1, '2023-05-08 06:48:21'),
(68, 'Recipes', '    ', '   ', '', '64bcbf7dcdcff1690091389.jpg', 'thumb2-recipecis-icon-1681708223.png', '64bcbf7dce1311690091389.jpg', 1, 1, '2023-05-08 06:48:21'),
(69, 'offer', ' ', NULL, NULL, '6450bdd1bae6f1683013073.png', NULL, '6450bdd1bb9df1683013073.jpg', 1, 1, '2023-05-08 06:48:21'),
(70, 'Medicine', '   ', '  ', '', 'thumb3-images_(1)-1684831413.jpeg', 'thumb2-images_(1)-1684831413.jpeg', '64bcbee59ff471690091237.jpg', 1, 1, '2023-05-08 06:48:21'),
(71, 'free delivery', ' ', NULL, NULL, '64bcbe8cdfefe1690091148.jpg', NULL, '64bcbe8ce07fc1690091148.jpg', 1, 1, '2023-05-08 06:48:21'),
(72, 'Discount', '   ', '  ', '', '64bcbe34eb5b21690091060.jpg', '', '64bcbe34eb7f61690091060.jpg', 1, 1, '2023-05-08 06:48:21'),
(74, 'C - Beauty & Body Care', '   ', '  ', '', '64bcbde0365c31690090976.jpg', '', '64bcbde03669a1690090976.jpg', 1, 1, '2023-05-08 06:48:21'),
(75, 'A - Drinks & Beverage', '  ', ' ', '', '64bcbd99d8f721690090905.jpg', '', '64bcbd99d93811690090905.jpg', 1, 1, '2023-05-08 06:48:21'),
(77, 'A - Fish & Meat', '  ', ' ', '', '64bcbc4c3dec31690090572.jpg', '', '64bcbc4c3e18d1690090572.jpg', 1, 1, '2023-05-08 06:48:21'),
(78, 'B - Health & Adult Care', '    ', '   ', '', '64bcbbda189ae1690090458.jpg', '', '64bcbbda18c281690090458.jpg', 1, 1, '2023-05-08 06:48:21'),
(79, 'C - Home & kitchen Appliance', '   ', '  ', '', '64bcbb8aadd841690090378.jpg', '', '64bcbb8aade561690090378.jpg', 1, 1, '2023-05-08 06:48:21'),
(85, 'B - Personal Care', '   ', '  ', '', '64bcbb3aa04cf1690090298.jpg', '', '64bcbb29bc3ca1690090281.jpg', 1, 1, '2023-05-08 06:48:21'),
(86, 'A - Snacks & Spread', '  ', ' ', '', '64bcbad0aedfb1690090192.jpg', '', '64bcbad0af01f1690090192.jpg', 1, 1, '2023-05-08 06:48:21'),
(87, 'C - Stationery & Office', '   ', '  ', '', '64bcba6d3b9971690090093.jpg', '', '64bcba6d3bfdc1690090093.jpg', 1, 1, '2023-05-08 06:48:21'),
(88, 'C - Toys & Sports', '   ', '  ', '', '64bcba2ac3e2f1690090026.jpg', '', '64bcba2ac44951690090026.jpg', 1, 1, '2023-05-08 06:48:21'),
(93, 'D - Pet Care', '     ', '    ', '', '64bcb9bfac2ac1690089919.png', '', '64bcb9bfac4e01690089919.jpg', 1, 1, '2023-07-16 05:13:07'),
(95, 'B - Baby Care', '   ', '  ', '', '64bcb90128bda1690089729.jpg', '', '64bcb90128e621690089729.jpg', 1, 1, '2023-07-16 06:34:51'),
(96, 'B - Cleaning & Supplies', '   ', '  ', '', '64bcb894eb2561690089620.webp', '', '64bcb894eb8551690089620.webp', 1, 1, '2023-07-16 06:38:15'),
(97, 'A - Fruits & Vegetables', '         ', '        ', '', '64bcb817e37301690089495.jpg', 'thumb2-banane-cavendish-large-1689506317.jpg', '64bcb817e39971690089495.jpg', 1, 1, '2023-07-16 09:30:54'),
(98, 'A - Frozen & Canned', NULL, NULL, NULL, '64b3e06505ecf1689509989.jpg', NULL, '64b3e027ab9f11689509927.webp', 1, 1, '2023-07-16 11:33:27'),
(100, 'Grocery', ' ', NULL, NULL, '65181b6fa63f31696078703.jpg', NULL, '65181b6fa6a2d1696078703.webp', 1, 1, '2023-09-30 12:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_request`
--

CREATE TABLE `product_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_request`
--

INSERT INTO `product_request` (`id`, `name`, `phone`, `address`, `product_name`, `image`) VALUES
(96, 'gfdhgfh', '01452369874', 'Mohammadpur, Dhakannnn', 'dgfdh', '64731f4f09c761685266255.webp'),
(97, 'dfdsg', '0145263897', 'Mohammadpur, Dhakannnn', 'afsdgdfghdf', '6473251973b071685267737.webp'),
(98, 'robi', '01742589632', 'Mohammadpur, Dhakannnn', 'gfh', '64732bdd53e7e1685269469.png'),
(99, 'baki', '01754289635', 'Mohammadpur, Dhakannnn', 'dgff', '6473318a1691b1685270922.jpg'),
(100, 'akhi', '01745896532', 'Mohammadpur, Dhakannnn', 'afdsd', '647331ad84b091685270957.png'),
(101, 'ddf', '0147852369', 'Mohammadpur, Dhakannnn', 'gfhhhhh', '647331d2851791685270994.jpg'),
(102, 'hgfgh', '01452369874', 'Mohammadpur, Dhakannnn', 'kuk', '64733201630081685271041.jpg'),
(103, 'hhh', '0147852365', 'Mohammadpur, Dhakannnn', 'fgfh', '6473323cdbec21685271100.png'),
(104, 'dd', '01478956232', 'Mohammadpur, Dhakannnn', 'sss', '647332e4551af1685271268.png'),
(105, 'sfdf', '01457896523', 'Mohammadpur, Dhakannnn', 'fvdfd', '6473331f4eb4b1685271327.png'),
(106, 'dfgvdfgvf', '0145789652', 'Mohammadpur, Dhakannnn', 'sfdf', '6473334862e981685271368.png'),
(107, 'dvdfd', '01245633228', 'Mohammadpur, Dhakannnn', 'ssfd', '6473336d0bd7d1685271405.png'),
(108, 'sdf', '0147895632', 'Mohammadpur, Dhakannnn', 'ssd', '64733387ee9f81685271431.png'),
(109, 'ddd', '01478965231', 'sss', 'sssss', '647333a8f1a3f1685271464.png'),
(113, 'hthjyj', '0147896542', 'Mohammadpur, Dhakannnn', 'tghgj', '64733448513851685271624.jpg'),
(115, 'Md Ruhul Amin', '01819449320', 'Dhaka', 'panggas', '64be18fc87d741690179836.png');

-- --------------------------------------------------------

--
-- Table structure for table `rk_blog`
--

CREATE TABLE `rk_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `link` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `sort_desc` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rk_blog`
--

INSERT INTO `rk_blog` (`id`, `title`, `link`, `sort_desc`, `img1`, `img2`, `date`, `type`, `activity`) VALUES
(1, ' নাকের দু’পাশে চশমার কালো দাগ দূর করার ৪টি উপায়!  ', 'http://www.blog.sabushopltd.com/2020/09/09/%e0%a6%a8%e0%a6%be%e0%a6%95%e0%a7%87%e0%a6%b0-%e0%a6%a6%e0%a7%81%e0%a6%aa%e0%a6%be%e0%a6%b6%e0%a7%87-%e0%a6%9a%e0%a6%b6%e0%a6%ae%e0%a6%be%e0%a6%b0-%e0%a6%95%e0%a6%be%e0%a6%b2%e0%a7%8b/', '   হাজার হাজার টাকা দিয়ে স্কিনকেয়ার প্রোডাক্ট কিনে সেগুলো ইউজ করার পরেও অনেক সময় দেখা যাচ্ছে, আমাদের স্কিনই কোনো কেয়ার করছে না, তাই না? প্রায়ই অনেক আপুদেরই মজার ছলে এই কথাটা.. ', 'thumb3-glass-feature-696x429-1602174040.jpg', 'thumb2-glass-feature-696x429-1602174040.jpg', '2020-10-08', '1', '1'),
(2, ' ত্বকে স্কিনকেয়ার প্রোডাক্ট লেয়ারিং করুন ৮ টি সঠিক ধাপে!', 'http://www.blog.sabushopltd.com/2020/09/09/%e0%a6%a4%e0%a7%8d%e0%a6%ac%e0%a6%95%e0%a7%87-%e0%a6%b8%e0%a7%8d%e0%a6%95%e0%a6%bf%e0%a6%a8%e0%a6%95%e0%a7%87%e0%a7%9f%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%8b%e0%a6%a1%e0%a6%be%e0%a6%95/', '   হাজার হাজার টাকা দিয়ে স্কিনকেয়ার প্রোডাক্ট কিনে সেগুলো ইউজ করার পরেও অনেক সময় দেখা যাচ্ছে, আমাদের স্কিনই কোনো কেয়ার করছে না, তাই না? প্রায়ই অনেক আপুদেরই মজার ছলে এই কথাটা ', 'thumb3-feature-1-1-324x235-1602174092.jpg', 'thumb2-feature-1-1-324x235-1602174092.jpg', '2020-10-08', '1', '1'),
(3, 'ড্যামেজড ও কালার করা চুলের যত্ন হবে ৩টি হোমমেড হেয়ার মাস্ক দিয়ে!', 'http://www.blog.sabushopltd.com/2020/09/09/%e0%a6%a1%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%ae%e0%a7%87%e0%a6%9c%e0%a6%a1-%e0%a6%93-%e0%a6%95%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0-%e0%a6%95%e0%a6%b0%e0%a6%be-%e0%a6%9a%e0%a7%81%e0%a6%b2%e0%a7%87/', ' যুগের সাথে তাল মিলিয়ে এবং নিজের লুকে একটু চেঞ্জ আনতে চুলে কালার করছেন অনেকেই! আবার অনেকের শখ. ', 'thumb3-hair-care-696x429-1602174130.jpg', 'thumb2-hair-care-696x429-1602174130.jpg', '2020-10-08', '1', '1'),
(4, ' চুলে জট পাকানো রোধ করতে ১০টি গুরুত্বপূর্ণ টিপস জেনে নিন!  ', 'http://www.blog.sabushopltd.com/2020/09/09/%e0%a6%9a%e0%a7%81%e0%a6%b2%e0%a7%87-%e0%a6%9c%e0%a6%9f-%e0%a6%aa%e0%a6%be%e0%a6%95%e0%a6%be%e0%a6%a8%e0%a7%8b-%e0%a6%b0%e0%a7%8b%e0%a6%a7-%e0%a6%95%e0%a6%b0%e0%a6%a4%e0%a7%87-%e0%a7%a7%e0%a7%a6/', '  যখন চুলে হাইড্রেশনের অভাব থাকে, তখন আপনার চুলের ঘর্ষণ আপনার চুলে জটের সৃষ্টি করে। হাইড্রেশনের অভাবে আপনার হেয়ার শ্যাফটের আউটার লেয়ার ভেংগে যায়, যার ফলস্বরূপ চুল রুক্ষ এবং ক্ষতিগ্রস্থ হয়ে যায়।   ', 'thumb3-hair-brush-696x429-1602174169.jpg', 'thumb2-hair-brush-696x429-1602174169.jpg', '2020-10-08', '1', '1'),
(5, 'মাত্র ১৫ মিনিটে ত্বক ফর্সা হবেই', NULL, '    প্রাকৃতিক উপায়ে ফর্সা হতে চাইলে আমাদের এই ফর্সা হওয়ার সহজ উপায় অ্যাপটি আপনাদের প্রয়োজন। মেয়ে কিংবা ছেলে উভয়েরই ফর্সা হওয়ার উপায় ও উপাদান আছে এই অ্যাপ এ ।      ', 'thumb3-test-1602176461.png', 'thumb2-test-1602176461.png', '2020-10-08', '2', '1'),
(8, 'অবিশ্বাস্য! মাত্র ৭ দিনে', NULL, '  শুধুমাত্র যেনতেন ফর্সা হওয়ার ক্রিম ব্যাবহার করলেই ফর্সা হওয়া যায়না। ফর্সা হওয়ার জন্য প্রয়োজন কিছু ফর্সা হওয়ার টিপস। এই ঘরোয়া ফর্সা হবার টিপস আপনার ত্বকে প্রকৃতির লাবণ্যতা এনে দেবে। ', 'thumb3-screenshot_21-1-310x165-1602177650.png', 'thumb2-screenshot_21-1-310x165-1602177650.png', '2020-10-08', '2', '1'),
(9, 'প্রাকৃতিক উপাদানে ত্বক ফর্সা', NULL, ' বন্ধুরা আজ আমি আপনাদের সাথে এমন একটি অসাধারণ ফেইসপ্যাক বানানো শেয়ার করব ,এই ফেইসপ্যাকটি নিয়ম', 'thumb3-mqdefault-1602177677.jpg', 'thumb2-mqdefault-1602177677.jpg', '2020-10-08', '2', '1'),
(10, 'Lakme 9 to 5 Primer + Gloss Nail Color review', 'https://www.youtube.com/watch?v=e10CZiOSJ9E', '<iframe width=\"100%\" height=\"230\" src=\"https://www.youtube.com/embed/e10CZiOSJ9E\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL, '2020-11-05', '3', '1'),
(12, 'Lotus Herbals Natural Blend Comfort Liquid FOUNDATION for Oily skin ', 'https://www.youtube.com/watch?v=ZxCeSvE66WQ', ' <iframe width=\"100%\" height=\"230\" src=\"https://www.youtube.com/embed/ZxCeSvE66WQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> ', NULL, NULL, '2020-11-05', '3', '1'),
(13, 'আন্তর্জাতিক সংবাদ | Jamna I Desk | 05 November 2020', 'https://www.youtube.com/watch?v=InLBC-kFx5c&feature=emb_title', ' <iframe width=\"100%\" height=\"230\" src=\"https://www.youtube.com/embed/InLBC-kFx5c\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> ', NULL, NULL, '2020-11-05', '3', '1'),
(14, 'Himalaya Herbals Anti- Dandruff Hair Oil Review', 'https://www.youtube.com/watch?v=vw5awQ9Vxxk&feature=emb_title', ' <iframe width=\"100%\" height=\"230\" src=\"https://www.youtube.com/embed/vw5awQ9Vxxk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> ', NULL, NULL, '2020-11-05', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roll_permission`
--

CREATE TABLE `roll_permission` (
  `id` int(11) NOT NULL,
  `roll_name` varchar(255) DEFAULT NULL,
  `product_management` varchar(255) DEFAULT NULL,
  `category_management` varchar(255) DEFAULT NULL,
  `order_management` varchar(255) DEFAULT NULL,
  `slide_management` varchar(255) DEFAULT NULL,
  `flash_deals` varchar(255) DEFAULT NULL,
  `coupon` varchar(255) DEFAULT NULL,
  `customers` varchar(255) DEFAULT NULL,
  `pages` varchar(255) DEFAULT NULL,
  `reports` varchar(255) DEFAULT NULL,
  `change_setting` varchar(255) DEFAULT NULL,
  `user_roll` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roll_permission`
--

INSERT INTO `roll_permission` (`id`, `roll_name`, `product_management`, `category_management`, `order_management`, `slide_management`, `flash_deals`, `coupon`, `customers`, `pages`, `reports`, `change_setting`, `user_roll`) VALUES
(9, 'admin', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `sales_person`
--

CREATE TABLE `sales_person` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `cID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sd_ads`
--

CREATE TABLE `sd_ads` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `adsence` text DEFAULT NULL,
  `position` int(11) NOT NULL,
  `p_1` int(11) DEFAULT 0,
  `p_2` int(11) DEFAULT 0,
  `p_3` int(11) DEFAULT 0,
  `p_4` int(11) DEFAULT 0,
  `p_5` int(11) DEFAULT 0,
  `p_6` int(11) DEFAULT 0,
  `p_7` int(11) DEFAULT NULL,
  `p_8` int(11) DEFAULT NULL,
  `p_9` int(11) DEFAULT NULL,
  `p_10` int(11) DEFAULT NULL,
  `m_h1` varchar(300) DEFAULT NULL,
  `m_h2` varchar(300) DEFAULT NULL,
  `m_h3` varchar(300) DEFAULT NULL,
  `m_c1` varchar(300) DEFAULT NULL,
  `m_c2` varchar(300) DEFAULT NULL,
  `m_c3` varchar(300) DEFAULT NULL,
  `m_d1` varchar(300) DEFAULT NULL,
  `m_d2` varchar(300) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `m_r` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sd_cart`
--

CREATE TABLE `sd_cart` (
  `id` int(11) NOT NULL,
  `session_d` varchar(400) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `t_price` varchar(100) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `clr_name` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sd_client`
--

CREATE TABLE `sd_client` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT 'user',
  `mobile` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(25050) DEFAULT NULL,
  `otp_number` varchar(255) DEFAULT NULL,
  `password` char(128) DEFAULT NULL,
  `salt` char(128) DEFAULT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `delivery_address` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT 'photo.png',
  `img2` varchar(255) DEFAULT 'photo.png',
  `type` int(11) DEFAULT NULL,
  `activity` int(11) DEFAULT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_client`
--

INSERT INTO `sd_client` (`id`, `username`, `name`, `mobile`, `email`, `otp_number`, `password`, `salt`, `address`, `delivery_address`, `img1`, `img2`, `type`, `activity`, `date`) VALUES
(19, NULL, 'AKHI', '01625804712', NULL, '37024', 'f24f0633f559fbce612fc56500000da569b3988f55885c5e0bd8c3ce5eb2867d55c7e999a590f4afe224a9d7acd3c927fb4b5e405c3b3adc4b54905471894911', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(20, NULL, 'Robi', '01744726291', NULL, '44260', 'b3b18a91b3b66688d331f7c08dd6cbfc4932c65f1cc194aae8aef0e8f24a553a967353e609f27c41e0d2d3bef9a2d138c1b49216b23d48e48ac98704489a7294', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(21, 'Ruhul ', 'Ruhul Amin', '01819449320', 'sers3745@yahoo.com', '78520', '3145c9791138bf8f2d19ae51d59b0133400534d6cfbd726fddc152ee1ac804a8876165ee3b5f748de13b7f6cd0c70324e692b107de39409c085e6f05f5f1fee9', NULL, 'house 17, road 06, sector06. uttara. 1st floor', 'house 17, road 06, sector 06.', 'photo.png', 'photo.png', NULL, NULL, ''),
(22, NULL, 'Your Name', '8801776620885', NULL, '51050', 'e468fc9cd588150fef08501a63a74495f88a6822db685c51942ca6c34c3a3f11f3c300c91c8d231ae089751c644b50a134ddcc4d49fd7d97b278c5bc786c8e4b', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(23, NULL, 'Your Name', '0175896456', NULL, '17470', '86169c4217bd4d03f68b7b2034709481495180b7e1554b1cb15e26a1b8f39e953810e0ad28803199cda2fb78c55f946b985aef12351335e9e814ceac8e7635f9', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(24, '', 'akhi', '01727404933', 'akhi@sarkarit.com', '24316', '9db78f76fec58962bc16433b8267c882dcd3100a3a723777e158643b307431a78653efd90dc8f93ebc81e1c16d8cd6e28cee7c3a6d2c9692ac97fe2b465e485b', NULL, 'rr', 'rr', 'photo.png', 'photo.png', NULL, NULL, ''),
(25, 'sakib', 'sakib hasan', '01711520045', 'rakib@sarkarit.com', '37178', '223a0de4d3555c7e4b9bb849122746d3b239b7d320d98dc8843c17cd91338b2f3e942e52dc3797076047e3480b0de08ce4b44a73f287e10261f9d0ca42daf425', NULL, 'Mohammadpur, Dhaka', 'Dhanmo', 'photo.png', 'photo.png', NULL, NULL, ''),
(26, NULL, 'Your Name', '01816140606', NULL, '23975', 'ca82ba0edcf9153df7e087e4a1a22e22b585ab828eb691fca3e81e4381ea675b34525f47dfc2d5001832d121f56a72f1a99aa7c6e6ae158148f7e3b8b6ec3114', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(27, NULL, 'Your Name', '01789363695', NULL, '27042', '6a139af5e3abfe6c45c0288399f405a103731763bd3be6415282b45cbbaa69f83143f79bf86f20872816c61ad4845953130d151cd2bde125a70c0c4ce126fd1d', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(28, 'ruhul', 'ruhul amin miji', '01999901910', 'sers3745@yahoo.com', '33788', 'f74e4afa1b98be5647fd370a47175408ab8a0d5ade08c46047b71f73aa3a45b0a580fb1b1328e623c6218a473b89a90b7c5d62f0e5ede264ee0bc4f7761c1d16', NULL, 'uttara, sector 6', 'sector 6, house 10', 'photo.png', 'photo.png', NULL, NULL, ''),
(29, NULL, 'Your Name', '01715561878', NULL, '41911', '0431904aca4f78d6e680ed508d613b16dfd6bc7f679980341823830469e50d51fa48cb89fc6a549b3d74ff116112908aa20acf9543684e1d0220e0fd923b3021', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(30, NULL, 'Your Name', '87153689488', NULL, '45675', '5fa69f02684dad0ffe2c190941acd13f2f381030ee913fd6f015098e366b2160d4282ab7e5dfe27ebe77e044168f387e75e083b17d1f0437ff75fdcf34f944af', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(31, NULL, 'robiul', '85582445679', '', '46598', '871b750e109e6697cba4bd332e11310777386fa6dd48b90cd1b8c731f507f8043030c02da6450be538d82f88a11eced4a7236bf0dfa5b33cb0216947ef7a3fd4', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(33, 'mniprince', 'MIPrinceadddd', '01711368399', 'mniprince@gmail.com', '44474', '85f033bc223ee7cc2d416c706aeee1e06c720539eaea33c10cc938ad004c7b5bcc98e01c1fefb1a793dc585916a8c9ed0303f2dee614d6505ceae9673bd9a8bd', NULL, 'central roadc, dhanmondi dhaka', 'Muhammadpur, dhaka', 'photo.png', 'photo.png', NULL, NULL, ''),
(34, NULL, 'Monirul Islam Prince', '01712056959', 'mniprinceapp@gmail.com', NULL, '9f2969f123ebc1c1833c514643df16e0f59cf2c5731b9068da3652f56f9fe1855451c5f73c87348a3f099628d61719c48aa4cc9a13edfb3ab9e050ab736e0839', '1598d6ee89f2c5c80880020add70f67df72d66ed5ca01d68f660b39f61fa010880b0af798914dd6dc1f137f7e485c2ea524e41f36e69ddfaf9160f6620d96298', 'Central Road, Dhanmondi, Dhaka, bangladesh\r\n16 Central Road, Dhanmondi, Dhaka 1205, bangladesh', NULL, 'photo.png', 'photo.png', 1, 1, '2023-09-09'),
(35, 'mniprince', 'Monirul Islam Prince', '01711368394', 'mniprinceapp@gmail.com', '12010', '85f033bc223ee7cc2d416c706aeee1e06c720539eaea33c10cc938ad004c7b5bcc98e01c1fefb1a793dc585916a8c9ed0303f2dee614d6505ceae9673bd9a8bd', NULL, 'Central Road, Dhanmondi, Dhaka, bangladesh, dhaka', '16 Central Road, Dhanmondi, Dhaka 1205, bangladesh', 'photo.png', 'photo.png', NULL, NULL, ''),
(36, NULL, 'Your Name', '85969398411', NULL, '97757', '861341edfbe8efff65e7d32100cac49414896f18e04be9ca0509b207466a675a277224b5b9a5f2535533678d2eee15378c4e29188be00d871e0853adc28f48e8', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(37, NULL, 'Your Name', '88334667693', NULL, '11734', '3a3d6e6e4c4b88ebcf3129114fec2c0c007283fd9281fdbb5d8bb78cfd16a6e2c412cf6c20c3eecd592bf2d80acf16668da28b7eabb2a14165c424d0f1d05dc2', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(38, NULL, 'Your Name', '01882626909', NULL, '18058', '068167b13ca76e6d7e7a594bda273b54054ab95ca333d49b797bcd843d48b740914fb49b588b2307636f5b72a353dda12ff002738cc8e304418eb6b2efdaa427', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, ''),
(40, 'Rakib Hasan', 'Rakib Hasan', '01776620885', 'rakib@linuxmail.org', '25012', '223a0de4d3555c7e4b9bb849122746d3b239b7d320d98dc8843c17cd91338b2f3e942e52dc3797076047e3480b0de08ce4b44a73f287e10261f9d0ca42daf425', NULL, 'Mohammadpur. Dhaka', 'Dhanmondi, Dhaka', 'photo.png', 'photo.png', NULL, NULL, ''),
(41, NULL, 'Your Name', '88752883538', NULL, '12218', '81c976dc4b3499f46266b11af196928487d56218d105de43ddeefc63c3f1267db2fb240b06b7b42aab4edc8d537174cc39f9e87e5e4dba95b0ace36a3921e1be', NULL, NULL, NULL, 'photo.png', 'photo.png', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `sd_clr_cat`
--

CREATE TABLE `sd_clr_cat` (
  `id` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_clr_cat`
--

INSERT INTO `sd_clr_cat` (`id`, `itemID`, `color`, `size`, `type`) VALUES
(256, 92, 2, 0, 1),
(257, 92, 10, 0, 1),
(258, 93, 2, 0, 1),
(259, 96, 2, 0, 1),
(260, 106, 2, 0, 1),
(261, 106, 9, 0, 1),
(262, 106, 10, 0, 1),
(263, 106, 13, 0, 1),
(264, 106, 18, 0, 1),
(329, 112, 18, 0, 1),
(330, 112, 13, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sd_color`
--

CREATE TABLE `sd_color` (
  `id` int(11) NOT NULL,
  `color_code` varchar(100) NOT NULL,
  `color_name` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_color`
--

INSERT INTO `sd_color` (`id`, `color_code`, `color_name`, `size`, `type`) VALUES
(2, '141BFF', 'Blue', '', 1),
(4, '', '', 'XXL', 2),
(9, 'FE45FF', 'Pink', '', 1),
(10, 'F39C12', 'Yellow', '', 1),
(11, '', '', 'XL', 2),
(13, '050505', 'Black', '', 1),
(14, '', '', 'L', 2),
(15, '', '', 'M', 2),
(16, '', '', 'S', 2),
(18, '92FFD3', 'dfhdfh', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sd_coupon`
--

CREATE TABLE `sd_coupon` (
  `id` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cart` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sd_headline`
--

CREATE TABLE `sd_headline` (
  `id` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sd_home_edit`
--

CREATE TABLE `sd_home_edit` (
  `id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_home_edit`
--

INSERT INTO `sd_home_edit` (`id`, `menu`, `position`) VALUES
(1, 8, 1),
(2, 9, 1),
(3, 10, 1),
(4, 4, 1),
(5, 7, 1),
(6, 6, 1),
(7, 12, 1),
(8, 5, 1),
(9, 2, 1),
(10, 1, 1),
(11, 0, 1),
(12, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sd_item_l`
--

CREATE TABLE `sd_item_l` (
  `id` int(11) NOT NULL,
  `shop_id` varchar(255) DEFAULT NULL,
  `item_name` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `item_code` varchar(100) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `sub_cat` varchar(250) DEFAULT NULL,
  `sub_sub` varchar(250) DEFAULT NULL,
  `sort_desc` varchar(600) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `video` text DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `discount_per` int(11) DEFAULT 0,
  `discount` varchar(250) DEFAULT NULL,
  `discount_price` varchar(100) DEFAULT NULL,
  `d_quantity` varchar(255) DEFAULT '0',
  `delivery_charge` varchar(255) DEFAULT NULL,
  `s_offer` varchar(255) DEFAULT '0',
  `free_delivery` varchar(255) DEFAULT NULL,
  `get_discount` varchar(255) DEFAULT NULL,
  `e_offer` varchar(255) DEFAULT '0',
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL,
  `top_pro` varchar(250) DEFAULT NULL,
  `popular` varchar(255) DEFAULT NULL,
  `deal` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `up_date` varchar(100) DEFAULT NULL,
  `activity` int(11) NOT NULL DEFAULT 1,
  `number_of_sales` int(255) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_item_l`
--

INSERT INTO `sd_item_l` (`id`, `shop_id`, `item_name`, `item_code`, `category`, `sub_cat`, `sub_sub`, `sort_desc`, `details`, `video`, `unit`, `quantity`, `price`, `discount_per`, `discount`, `discount_price`, `d_quantity`, `delivery_charge`, `s_offer`, `free_delivery`, `get_discount`, `e_offer`, `img1`, `img2`, `top_pro`, `popular`, `deal`, `date`, `up_date`, `activity`, `number_of_sales`) VALUES
(15, NULL, 'Star Flower Masala', '', '50', '48', NULL, '          ', '', '           ', '50 gm', '4', '140', 0, '0.0000', '140.00', NULL, '', NULL, NULL, NULL, NULL, 'evkfwqpdsevxzlrjqgu3.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(16, NULL, 'Mustard Seed (Shorisha) WHITE', '', '50', '', NULL, '  ', '', '   ', '1 kg', '45', '15', 0, '25', '15', NULL, '', NULL, NULL, NULL, NULL, 'ljufxbnaa0ml4gqh78z3.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(19, NULL, 'Jayfal (Nutmeg) Whole', '', '50', '48', NULL, '      ', '', '       ', '5 pcs', '32', '60', 20, '12.0000', '48.0000', NULL, '', NULL, NULL, NULL, NULL, 'bgo9ndqvilnji1hh6gg2.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(20, NULL, 'White Pepper (Sada Gol Morich)-Whole', '', '50', '48', NULL, '      ', '', '       ', '50 gm', '1', '80', 0, '0.0000', '80.0000', NULL, '', NULL, NULL, NULL, NULL, 'juohrn3o1hngnt8caa3o.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(21, NULL, 'Mustered Seed (Shorisha) RED', '', '50', '48', NULL, '              ', '', '               ', '100 gm', '73', '25', 0, '0', '25', NULL, '', NULL, NULL, NULL, NULL, 'r6ztihiykghns03fqsth.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(22, NULL, 'Green Cardamom (Sobuj Elachi) Whole', '', '50', '48', NULL, '    ', '', '     ', '50 gm', '22', '170', 0, '0.0000', '170.0000', NULL, '', NULL, NULL, NULL, NULL, 'waxaqri3ahvvbvspbimw.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(24, NULL, 'Cinnamon (Daruchini)', '', '50', '48', NULL, '    ', '', '     ', '100 gm', '1', '65', 0, '0.0000', '65.0000', NULL, '', NULL, NULL, NULL, NULL, 'vpsee5vbgfvrtyij99ey.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(27, NULL, 'Mace Whole jaytree', '', '50', '48', NULL, '    ', '', '     ', '50 gm', '9', '185', 0, '0.0000', '185.0000', NULL, '', NULL, NULL, NULL, NULL, 'tmvydrd23raz1ajvw0ud.jpg', NULL, '0', '0', '0', '2021-02-05', '', 1, 0),
(34, '3', 'Chicken Eggs (Layer)-with Box', '', '9', '5', NULL, '', '', ' ', NULL, '44', '96', 0, '30', '96', '', NULL, '', NULL, NULL, '', 'wkf5njw1zc0d5n4f9ssp.jpg', NULL, '0', '0', '0', '2021-02-05', '', 2, 0),
(39, '3', 'Radhuni Sunflower Oil', '', '9', '6', NULL, '        ', '', '         ', '', '10', '1250', 10, '25', '1200', NULL, NULL, NULL, NULL, NULL, NULL, 'h9vcwjvssfztaameqqf6.jpg', NULL, '0', NULL, '0', '2021-02-05', '', 2, 0),
(51, '2', 'Rupchanda Fortified oil 5 ltr', '', '9', '6', NULL, '        ', '', '         ', 'LTR', '77', '660', 0, '10', '660', NULL, NULL, NULL, NULL, NULL, NULL, 'rup.png', NULL, '0', NULL, NULL, '2021-02-21', NULL, 2, 0),
(58, '1', 'flash', '', '24', '', NULL, '  ', '', '   ', '', '1', '50', 0, '40', '50', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1', NULL, NULL, '2023-03-16', NULL, 2, 0),
(59, NULL, 'Pure Rice', '', '50', '', NULL, '      ', '', '       ', '1 kg', '1', '200', 0, '40', '200', NULL, '0', NULL, NULL, NULL, NULL, 'dtuaeap0h7jtqike6cok.jpg', NULL, '0', '1', NULL, '2023-03-16', NULL, 1, 0),
(61, NULL, 'Duck Eggs (Hasher Dim)', '', '50', '16', NULL, '        ', '', '         ', '6 pcs', '1', '110', 12, '13.2000', '96.8000', NULL, '0', NULL, NULL, NULL, NULL, 'cns1bplimcuzfl0cl6b12222.jpg', NULL, '1', '1', NULL, '2023-03-16', NULL, 1, 0),
(63, NULL, 'Rice', '', '81', '', NULL, '      ', '', '       ', 'kg', '1', '200', 20, '40.0000', '160.0000', NULL, '', NULL, NULL, NULL, NULL, 'gt2uxvf2iqrz5bh3uqs7 (1).jpg', NULL, '1', '1', NULL, '2023-03-16', NULL, 1, 0),
(67, NULL, 'Bay Leaf (Tejpata)', '', '50', '48', NULL, '    ', '', '     ', '100 gm', '1', '30', 0, '0.0000', '30.0000', NULL, '', NULL, NULL, NULL, NULL, 'gvdlw3ymv8i10aqa0hiv.jpg', NULL, '0', '1', NULL, '2023-03-16', NULL, 1, 0),
(68, NULL, 'Fresh Fortified Soyabean Oil', '', '50', '24', NULL, '    ', '', '     ', '5 Lt', '1', '920', 0, '0.0000', '920.0000', NULL, '0', NULL, NULL, NULL, NULL, 'fresh-fortified-soyabean-oil-5-ltr.jpg', NULL, '0', '1', NULL, '2023-03-16', NULL, 1, 0),
(69, NULL, 'Fenugreek (Methi) Seed', '', '50', '48', NULL, '    ', '', '     ', '100 gm', '1', '20', 0, '0.0000', '20.0000', NULL, '', NULL, NULL, NULL, NULL, 'ljufxbnaa0ml4gqh78z3.jpg', NULL, '0', '1', NULL, '2023-03-16', NULL, 1, 0),
(73, NULL, 'Teer Fortified Soyabean Oil', '', '50', '24', NULL, '            ', '', '             ', '5 liter', '1', '960', 0, '0', '960', NULL, '', NULL, NULL, NULL, NULL, 'teer-fortified-soyabean-oil-5-ltr.jpg', NULL, '1', '1', NULL, '2023-03-16', NULL, 1, 0),
(177, NULL, 'Diploma', '', '83', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_16.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(179, NULL, 'Star ship', '', '83', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_18.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(180, NULL, 'Marks', '', '83', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_19.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(186, NULL, 'office pins', '', '84', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_26.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(187, NULL, 'Rfl good Lack stamp Pad', '', '84', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_27.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(188, NULL, 'Artline stamp pad', '', '84', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_28.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(189, NULL, 'Bili manegmant file A4', '', '84', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_29.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(190, NULL, 'Kangaro punch machine', '', '84', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_30.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(197, NULL, 'roasting clamp', '', '79', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_37.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(198, NULL, 'Rfl vision roti maker', '', '79', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_38.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(199, NULL, 'pureit classic germ kill kit', '', '79', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_39.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(202, NULL, 'funskool play learn world map', '', '88', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_42.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(204, NULL, 'transforming sports car ', '', '88', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_44.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(205, NULL, 'doctor toys', '', '88', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_45.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(206, NULL, 'Rfl toy dizzy truck small', '', '88', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_46.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(210, NULL, 'ninja tabil tanis ', '', '88', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_50.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(211, NULL, 'cute refined glycerine', '', '85', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_51.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(212, NULL, 'ligion glitter', '', '85', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_52.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(215, NULL, 'pierre cardin olive care hand crim', '', '85', '', NULL, '  ', '', '   ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_55.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(217, NULL, 'godrej no 1 rosewater ', '', '85', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_57.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(228, NULL, 'incepta norash ointment', '', '74', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_68.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(230, NULL, 'deep heat', '', '74', '', NULL, '      ', '', '       ', '', '1', '100', 5, '5.0000', '95.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_70.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(231, NULL, 'herman garlic mayonnaise ', '', '86', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_71.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(233, NULL, 'nucella fortified ', '', '86', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_73.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(235, NULL, 'nutella hazelnut cocoa ', '', '86', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_75.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(236, NULL, 'alfa mayonnaise', '', '86', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_76.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(237, NULL, 'herman mayonnaise', '', '86', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_77.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(238, NULL, 'hat macarioni penne pasta', '', '86', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_78.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(241, NULL, 'sundrop peanut butter jelly', '', '86', '', NULL, '', '', ' ', '', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_81.png', NULL, '0', '0', NULL, '2023-05-20', NULL, 1, 0),
(252, NULL, 'Broiler Chicken Skin On ± 50 gm', '', '77', '28', NULL, '      ', '', '       ', '1 kg', '1', '290', 0, '0.0000', '290.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_92.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(253, NULL, 'Premium Pangas Fish Headless ±30 gm', '', '77', '26', NULL, '      ', '', '       ', '500 gm', '1', '220', 0, '0.0000', '220.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_93.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(254, NULL, 'Beef Ribs (Shinar Mangsho)', '', '77', '27', NULL, '      ', '', '       ', '1 kg', '1', '820', 0, '0.0000', '820.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_94.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(255, NULL, 'Beef Boneless ± 25 gm', '', '77', '27', NULL, '          ', '', '           ', '500 gm', '1', '550', 0, '0.0000', '550.0000', NULL, '', NULL, NULL, NULL, NULL, 'beef-boneless-25-gm-500-gm.jpg', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(259, NULL, 'Daab (Green Coconut)', '', '50', '14', NULL, '  ', '', '   ', 'each', '1', '120', 0, '0.0000', '120.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_99.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(260, NULL, 'Sobuj Angur (Green Grapes) ± 12 gm', '', '50', '14', NULL, '  ', '', '   ', '250 gm', '1', '140', 0, '0.0000', '140.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_100.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(261, NULL, 'Green Apple ± 50 gm', '', '97', '14', NULL, '    ', '', '     ', '1 kg', '1', '320', 0, '0.0000', '320.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_101.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(266, NULL, 'Beef Head Meat Regular', '', '77', '27', NULL, '    ', '', '     ', '1 kg', '1', '550', 0, '0.0000', '550.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_106.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(267, NULL, 'Pigeon Meat', '', '77', '28', NULL, '      ', '', '       ', 'Eacs', '1', '170', 0, '0.0000', '170.0000', NULL, '', NULL, NULL, NULL, NULL, 'pigeon-meat-1-pcs.jpg', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(268, NULL, 'Premium Pabda Fish Medium (With Head) ±30 gm', '', '77', '26', NULL, '        ', '', '         ', '500 gm', '1', '390', 0, '0.0000', '390.0000', NULL, '', NULL, NULL, NULL, NULL, 'lotia-pabda.jpg', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(270, NULL, 'Rupchanda Fish Medium ±30 gm', '', '77', '26', NULL, '    ', '', '     ', '500 gm', '1', '650', 0, '0.0000', '650.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_110.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(271, NULL, 'Whole Hilsha Fish (Asto Ilish) ± 40 gm', '', '77', '26', NULL, '      ', '', '       ', '800 gm', '1', '1550', 0, '0.0000', '1550.0000', NULL, '', NULL, NULL, NULL, NULL, 'whole-hilsha-fish-asto-ilish-40-gm-500-gm.jpg', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(272, NULL, 'Haor Fish mix (+/- 30gm)', '', '77', '26', NULL, '    ', '', '     ', '500 gm', '1', '280', 0, '0.0000', '280.0000', NULL, '', NULL, NULL, NULL, NULL, 'Screenshot_112.png', NULL, '0', '0', NULL, '2023-05-21', NULL, 1, 0),
(295, NULL, 'Sergel Capsule 20mg', '', '70', '', NULL, '  ', '', '   ', '10 pics', '1', '70', 0, '0', '70', NULL, '', NULL, NULL, NULL, NULL, 'sergel-capsule-20mg-10-capsules.jpg', NULL, '0', '0', NULL, '2023-05-22', NULL, 1, 0),
(305, NULL, 'Coca-Cola', '', '75', '37', NULL, '      ', '', '       ', '600 ml', '1', '50', 0, '0', '50', NULL, '', NULL, NULL, NULL, NULL, 'coca-cola-600-ml111.png', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(306, NULL, 'RC Q Lemon Pet', '', '75', '37', NULL, '      ', '', '       ', '250 ml', '1', '25', 0, '0', '25', NULL, '', NULL, NULL, NULL, NULL, 'rc-q-lemon-pet-250-ml (1)11.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(307, NULL, 'Pepsi Can', '', '75', '37', NULL, '  ', '', '   ', '250 ml', '1', '50', 0, '0', '50', NULL, '', NULL, NULL, NULL, NULL, 'pepsi-can-250-ml.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(308, NULL, 'Sprite', '', '75', '37', NULL, '  ', '', '   ', '2.5 Lt', '1', '130', 0, '0', '130', NULL, '', NULL, NULL, NULL, NULL, 'sprite-225-ltr.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(309, NULL, 'Dekko Combo Pasta (Buy 2 Get 1 Free)', '', '69', '', NULL, '          ', '', '           ', '200 gm', '1', '120', 0, '0', '120', NULL, '', '1', NULL, NULL, NULL, 'dekko-combo-pasta-buy-2-get-1-free-200-gm (1).jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(310, NULL, 'Katari Atop Rice ± 100 gm', '', '71', '', NULL, '  ', '', '   ', '25 kg', '1', '2200', 0, '0', '2200', NULL, '', NULL, '1', NULL, NULL, 'katari-atop-rice-100-gm-25-kg.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(311, NULL, 'Miniket Atop Rice ± 100 gm', '', '71', '', NULL, '', '', ' ', '25 kg', '1', '1900', 0, '0', '1900', NULL, '', NULL, '1', NULL, NULL, 'miniket-atop-rice-100-gm-25-kg.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(312, NULL, 'Kaalar Extra Long 1121 Basmati Rice', '', '71', '', NULL, '', '', ' ', '5 kg', '1', '2180', 0, '0', '2180', NULL, '', NULL, '1', NULL, NULL, 'kaalar-extra-long-1121-basmati-rice-5-kg.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(314, NULL, 'Dettol Soap Summer Pack (Cool, Fresh & Original) 75 gm', '', '69', '', NULL, '      ', '', '       ', '3 pcs', '1', '180', 8, '14.4000', '165.6000', NULL, '', '1', NULL, NULL, NULL, 'dettol-soap-summer-pack-cool-fresh-original-75-gm-3-pcs.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(315, NULL, 'Black Booster Mosquito Coil (Buy 2 Get 1 Free)', '', '69', '', NULL, '', '', ' ', '3 pcs', '1', '120', 0, '0', '120', NULL, '', '1', NULL, NULL, NULL, 'black-booster-mosquito-coil-buy-2-get-1-free-3-pcs.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(316, NULL, 'Boro Alu (Big Diamond Potato) ± 50 gm', '', '50', '23', NULL, '    ', '', '     ', '1 kg', '1', '45', 0, '0', '45', NULL, '', NULL, NULL, NULL, NULL, '141151_full.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(317, NULL, 'onion', '', '50', '23', NULL, '  ', '', '   ', '5 kg', '1', '20', 0, '0', '20', NULL, '', NULL, NULL, NULL, NULL, '619D1OTIYnL.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(318, NULL, 'benana', '', '50', '14', NULL, '  ', '', '   ', '12 pcs', '1', '10', 0, '0', '10', NULL, '', NULL, NULL, NULL, NULL, 'banane-cavendish-large.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(319, NULL, 'Cherry Pineapple (Cherry Anaros)', '', '97', '14', NULL, '  ', '', '   ', 'each', '1', '40', 0, '0', '40', NULL, '', NULL, NULL, NULL, NULL, 'cherry-pineapple-cherry-anaros-1-pcs.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(322, NULL, 'Sunfeast Dark Fantasy Choco Fills', '', '72', '', NULL, '', '', ' ', '75 gm', '1', '125', 0, '0', '125', NULL, '', NULL, NULL, '1', NULL, 'sunfeast-dark-fantasy-choco-fills-75-gm.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(324, NULL, 'Cadbury Dairy Milk Silk Plain Chocolate Bar', '', '72', '', NULL, '', '', ' ', '150 gm', '1', '330', 0, '0', '330', NULL, '', NULL, NULL, '1', NULL, 'cadbury-dairy-milk-silk-plain-chocolate-bar-150-gm.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(329, NULL, 'Nestle KitKat 3 Finger Chocolate Wafer (India)', '', '72', '', NULL, '  ', '', '   ', '27.5 gm', '1', '55', 0, '0', '55', NULL, '', NULL, NULL, '1', NULL, 'WhatsApp Image 2023-07-13 at 18.39.42.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(330, NULL, 'Harpic Liquid Toilet Cleaner 750 ml & Lizol Citrus Floor Cleaner 500 ml (Free Mug)', '', '69', '', NULL, '', '', ' ', '2 pcs', '1', '320', 0, '0', '320', NULL, '', '1', NULL, NULL, NULL, 'harpic-liquid-toilet-cleaner-750-ml-lizol-citrus-floor-cleaner-500-ml-free-mug-2-pcs.jpg', NULL, '0', '0', NULL, '2023-07-13', NULL, 1, 0),
(331, NULL, 'Trix Dishwashing Liquid Super Value Combo Pack', '', '69', '', NULL, '', '', ' ', '6 pcs', '1', '500', 0, '0', '500', NULL, '', '1', NULL, NULL, NULL, 'trix-dishwashing-liquid-super-value-combo-pack-6-pcs.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 0),
(332, NULL, 'Rok Lemon Liquid Dishwash (Free Dishwash Refill 250 ml)', '', '69', '', NULL, '', '', ' ', '750 ml', '1', '225', 0, '0', '225', NULL, '', '1', NULL, NULL, NULL, 'rok-lemon-liquid-dishwash-free-dishwash-refill-250-ml-750-ml.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 0),
(334, NULL, 'Oreo Original Cream Biscuit 463 gm (46.3 gm x 10 Pcs)', '', '72', '', NULL, '', '', ' ', '463 gm', '1', '300', 0, '0', '300', NULL, '', NULL, NULL, '1', NULL, 'download.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 0),
(335, NULL, 'Cadbury Dairy Milk Silk Bubbly Chocolate', '', '72', '', NULL, '', '', ' ', '50 gm', '1', '150', 0, '0', '150', NULL, '', NULL, NULL, '1', NULL, 'cadbury-dairy-milk-silk-bubbly-chocolate-50-gm.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 0),
(336, NULL, 'Amul Pasteurized Butter', '', '72', '', NULL, '  ', '', '   ', '200 gm', '1', '300', 0, '0', '300', NULL, '', NULL, NULL, '1', NULL, 'amul butter.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 0),
(337, NULL, 'Amul Kool Kesar Pet Bottle', '', '75', '40', NULL, '        ', '', '         ', '180 ml', '1', '105', 12, '12.6000', '92.4000', NULL, '', NULL, NULL, '1', NULL, 'amul-kool-kesar-pet-bottle-180-ml.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 7),
(338, NULL, 'Nescafe Original Coffee (Indonesia)', '', '72', '', NULL, '  ', '', '   ', '200 gm', '1', '900', 0, '0', '900', NULL, '', NULL, NULL, '1', NULL, 'nescafe-original-coffee-indonesia-200-gm.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 0),
(339, NULL, 'Fox&#39;s Crystal Clear Fruits Candy', '', '72', '', NULL, '  ', '', '   ', '180 gm', '0', '450', 0, '0', '450', NULL, '', NULL, NULL, '1', NULL, 'Wholesale-Indonesia-Fox-Candy-Bar-Packaging-Tinned.jpg', NULL, '0', '0', NULL, '2023-07-14', NULL, 1, 0),
(340, NULL, 'Quaker Oats Jar', '', '72', '', NULL, '    ', '', '     ', '900 gm', '50', '600', 0, '0', '600', NULL, '', NULL, NULL, '1', NULL, 'quaker-oats-jar-900-gm.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(341, NULL, 'ACI Aerosol Insect Spray Jumbo', '', '72', '', NULL, '', '', ' ', '800 ml', '0', '620', 0, '0', '620', NULL, '', NULL, NULL, '1', NULL, '2592.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(343, NULL, 'Roshun (Garlic Imported) ± 25 gm', '', '50', '23', NULL, '', '', ' ', '500 gm', '1', '130', 0, '0', '130', NULL, '', NULL, NULL, NULL, NULL, 'roshun-garlic-imported-25-gm-500-gm.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(344, NULL, 'Kacha Pepe (Green Papaya) ± 70 gm', '', '50', '23', NULL, '', '', ' ', '1 kg', '1', '70', 0, '0', '70', NULL, '', NULL, NULL, NULL, NULL, 'kacha-pepe-green-papaya-70-gm-14-kg.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(345, NULL, 'Organic Churi Dry Fish', '', '77', '25', NULL, '', '', ' ', '200 gm', '1', '600', 0, '0', '600', NULL, '', NULL, NULL, NULL, NULL, 'Churi-Shutki-300x300.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(346, NULL, 'Organic Loitta Dry Fish', '', '77', '25', NULL, '', '', ' ', '200 gm', '1', '360', 0, '0', '360', NULL, '', NULL, NULL, NULL, NULL, 'Loittah-Shutki-300x300.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(347, NULL, 'Chapa Dry Fish', '', '77', '25', NULL, '      ', '', '       ', '250 gm', '1', '350', 0, '0', '350', NULL, '', NULL, NULL, NULL, NULL, 'bgo9ndqvilnji1hh6gg2.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(348, NULL, 'Organic Koral (কোরাল শুঁটকি) Dry Fish', '', '77', '25', NULL, '', '', ' ', '250', '1', '1100', 0, '0', '1100', NULL, '', NULL, NULL, NULL, NULL, 'd18ada7f-67b3-4220-9a05-427708cf5f1b.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(349, NULL, 'Whole Deshi Chicken Skin Off ± 25 gm', '', '77', '28', NULL, '  ', '', '   ', '500 gm', '0', '600', 0, '0', '600', NULL, '', NULL, NULL, NULL, NULL, 'whole-deshi-chicken-skin-off-25-gm-500-gm.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(351, NULL, 'Danish Lexus Vegetable Cracker Biscuit (buy 2 get 1 free)', '', '69', '', NULL, '    ', '', '     ', '218 gm', '1', '100', 0, '0.0000', '100.0000', NULL, '', '1', NULL, NULL, NULL, '0143267_bisk-club-lexus-biscuit.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(352, NULL, 'Atash Rice Premium 50kg Bag', '', '50', '3', NULL, '  ', '', '   ', '50', '1', '3500', 0, '0', '3500', NULL, '', NULL, '1', NULL, NULL, 'Atash-Rice-Premium.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(353, NULL, 'Big Beko Yellow Z-335', '', '88', '29', NULL, '', '', ' ', 'each', '1', '450', 0, '0', '450', NULL, '', NULL, NULL, NULL, NULL, 'big-beko-yellow-z-335-1-pcs.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 0),
(354, NULL, 'Premium Frozen Elsa Flying Dolls  & Kids Angel Flying Infrared Doll Toy', '', '88', '30', NULL, '    ', '', '     ', 'etc', '10', '750', 22, '165.0000', '585.0000', NULL, '', NULL, NULL, NULL, NULL, 'fe3bedf720f91a9a4634f51c0d97e1e6.jpg', NULL, '0', '0', NULL, '2023-07-15', NULL, 1, 2),
(355, NULL, 'Bashundhara Toilet Tissue', '', '72', '', NULL, '', '', ' ', '4 pcs', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, '1', NULL, 'bashundhara-toilet-tissue-4-pcs.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(356, NULL, 'Rok Dishwashing Steel Scourer (Buy 3 Get 1 Free)', '', '69', '', NULL, '', '', ' ', '4 pcs', '1', '90', 0, '0', '90', NULL, '', '1', NULL, NULL, NULL, 'rok-dishwashing-steel-scourer-buy-3-get-1-free-4-pcs.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(357, NULL, 'Rok Dishwashing Mega Steel Scourer (Buy 2 Get 1 Free)', '', '69', '', NULL, '', '', ' ', '3 pcs', '1', '90 ', 0, '0', '90 ', NULL, '', '1', NULL, NULL, NULL, 'rok-dishwashing-mega-steel-scourer-buy-2-get-1-free-3-pcs.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(358, NULL, 'Air Wick Everfresh 4 in 1 Freshener Gel Lavender Meadows', '', '72', '', NULL, '', '', ' ', '50 gm', '1', '140', 0, '0', '140', NULL, '', NULL, NULL, '', NULL, 'air-wick-everfresh-4-in-1-freshener-gel-lavender-meadows-50-gm.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(359, NULL, 'Cyprina Grape Juice', '', '75', '40', NULL, '', '', ' ', '1 Ltr', '1', '415', 0, '0', '415', NULL, '', NULL, NULL, NULL, NULL, 'cyprina-grape-juice-1-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(360, NULL, 'Cyprina Orange Juice', '', '75', '40', NULL, '', '', ' ', '1 Ltr', '1', '415', 0, '0', '415', NULL, '', NULL, NULL, NULL, NULL, 'cyprina-orange-juice-1-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(361, NULL, 'Cyprina Tropical Juice', '', '75', '40', NULL, '', '', ' ', '1 Ltr', '1', '415', 0, '0', '415', NULL, '', NULL, NULL, NULL, NULL, 'cyprina-tropical-juice-1-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(362, NULL, 'Tipco Red Grape Juice', '', '75', '40', NULL, '', '', ' ', '1 Ltr', '1', '525', 0, '0', '525', NULL, '', NULL, NULL, NULL, NULL, 'tipco-red-grape-juice-1-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(363, NULL, 'Frutika Mango Juice', '', '75', '39', NULL, '', '', ' ', '500 ml', '1', '50', 0, '0', '50', NULL, '', NULL, NULL, NULL, NULL, 'frutika-mango-juice-500-ml.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(364, NULL, 'Latina 100 % Juice (Apple)', '', '75', '39', NULL, '', '', ' ', '1 Ltr', '1', '200', 0, '0', '200', NULL, '', NULL, NULL, NULL, NULL, 'latina-100-juice-apple-1-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(365, NULL, 'Pran Frooto Mango Fruit Drink', '', '75', '39', NULL, '', '', ' ', '1 Ltr', '1', '90', 0, '0', '90', NULL, '', NULL, NULL, NULL, NULL, 'pran-frooto-mango-fruit-drink-1-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(366, NULL, 'Doux Chicken Franks Original', '', '98', '45', NULL, '', '', ' ', '340 gm', '1', '275', 0, '0', '275', NULL, '', NULL, NULL, NULL, NULL, 'doux-chicken-franks-original-340-gm.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(367, NULL, 'Golden Harvest Chicken Sausage', '', '98', '45', NULL, '', '', ' ', '340 gm', '1', '260', 0, '0', '260', NULL, '', NULL, NULL, NULL, NULL, 'golden-harvest-chicken-sausage-340-gm.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(368, NULL, 'Golden Harvest Deshi Paratha 1300 gm', '', '98', '44', NULL, '', '', ' ', '20 pcs', '1', '300', 0, '0', '300', NULL, '', NULL, NULL, NULL, NULL, 'golden-harvest-deshi-paratha-1300-gm-20-pcs.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(369, NULL, 'Jhatpot Low Fat Paratha 1200 gm', '', '98', '44', NULL, '', '', ' ', '20. pcs', '1', '250', 0, '0', '250', NULL, '', NULL, NULL, NULL, NULL, 'jhatpot-low-fat-paratha-1200-gm-20-pcs.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(370, NULL, 'Golden Harvest Mega Deshi Paratha 1600 gm', '', '98', '44', NULL, '', '', ' ', '20 pcs', '1', '360', 0, '0', '360', NULL, '', NULL, NULL, NULL, NULL, 'golden-harvest-mega-deshi-paratha-1600-gm-20-pcs.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(371, NULL, 'SmartHeart Adult Cat Canned Food Seafood Platter in Prawn Jelly', '', '93', '', NULL, '', '', ' ', '400 gm', '1', '270', 0, '0', '270', NULL, '', NULL, NULL, NULL, NULL, 'smartheart-adult-cat-canned-food-seafood-platter-in-prawn-jelly-400-gm.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(372, NULL, 'Me O Cat Food Adult Tuna Flavour', '', '93', '', NULL, '', '', ' ', '3 kg', '1', '1700', 0, '0', '1700', NULL, '', NULL, NULL, NULL, NULL, 'me-o-cat-food-adult-tuna-flavour-3-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(373, NULL, 'Aquafina Drinking Water', '', '75', '46', NULL, '', '', ' ', '1 Ltr', '1', '30', 0, '0', '30', NULL, '', NULL, NULL, NULL, NULL, 'aquafina-drinking-water-1-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(374, NULL, 'Aquafina Drinking Water', '', '75', '46', NULL, '', '', ' ', '1.5 Ltr', '1', '35', 0, '0', '35', NULL, '', NULL, NULL, NULL, NULL, 'aquafina-drinking-water-15-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(375, NULL, 'Kinley Drinking Water', '', '75', '46', NULL, '   Kinley is a popular brand of drinking water that is available in various sizes, It is produced and marketed by The Coca-Cola Company. Kinley water goes through a purification process that includes multiple stages, such as filtration, reverse osmosis, and UV treatment, to ensure its quality and safety for consumption. ', '', '     ', '2 Ltr', '1', '40', 0, '0', '40', NULL, '', NULL, NULL, NULL, NULL, 'kinley-drinking-water-2-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 22),
(376, NULL, 'Mum Drinking Water', '', '75', '46', NULL, '    ', '', '     ', '2 Ltr', '5', '40', 0, '0', '40', NULL, '', NULL, NULL, NULL, NULL, 'mum-drinking-water-2-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 1),
(377, NULL, 'Mum Drinking Water', '', '75', '', NULL, '', '', ' ', '500 ml', '1', '15', 0, '0', '15', NULL, '', NULL, NULL, NULL, NULL, 'mum-drinking-water-500-ml.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(378, NULL, 'Super Fresh Drinking Water', '', '75', '46', NULL, '', '', ' ', '2 Ltr', '1', '40', 0, '0', '40', NULL, '', NULL, NULL, NULL, NULL, 'super-fresh-drinking-water-2-ltr.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(379, NULL, 'Mum Drinking Water', '', '75', '46', NULL, '', '', ' ', '500 ml', '1', '20', 0, '0', '20', NULL, '', NULL, NULL, NULL, NULL, 'mum-drinking-water-500-ml.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(380, NULL, 'ACI Pure Salt', '', '50', '43', NULL, '', '', ' ', '1 kg', '1', '42', 0, '0', '42', NULL, '', NULL, NULL, NULL, NULL, 'aci-pure-salt-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(381, NULL, 'ACI Pure Salt', '', '50', '43', NULL, '', '', ' ', '500 gm', '1', '22', 0, '0', '22', NULL, '', NULL, NULL, NULL, NULL, 'aci-pure-salt-500-gm.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(382, NULL, 'Akher Chini (Sugar) ± 50 gm', '', '50', '43', NULL, '', '', ' ', '1 kg', '1', '150', 0, '0', '150', NULL, '', NULL, NULL, NULL, NULL, 'akher-chini-sugar-50-gm-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(383, NULL, 'Fresh Super Premium (Vacuum) Salt', '', '50', '43', NULL, '', '', ' ', '1 kg', '1', '42', 0, '0', '42', NULL, '', NULL, NULL, NULL, NULL, 'fresh-super-premium-vacuum-salt-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(384, NULL, 'Loose White Sugar', '', '50', '43', NULL, '  ', '', '   ', '1 kg', '1', '140', 10, '14.0000', '126.0000', NULL, '', NULL, NULL, NULL, NULL, 'loose-white-sugar-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(385, NULL, 'Molla Super Salt', '', '50', '43', NULL, '', '', ' ', '1 kg', '1', '42', 0, '0', '42', NULL, '', NULL, NULL, NULL, NULL, 'molla-super-salt-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(386, NULL, 'Nazirshail Rice Premium (Half Boiled) ± 50 gm', '', '50', '3', NULL, '', '', ' ', '5 kg', '0', '420', 0, '0', '420', NULL, '', NULL, NULL, NULL, NULL, 'nazirshail-rice-premium-half-boiled-50-gm-5-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 1),
(387, NULL, 'Chinigura Rice Premium', '', '50', '3', NULL, '', '', ' ', '1 kg', '0', '140', 0, '0', '140', NULL, '', NULL, NULL, NULL, NULL, 'chinigura-rice-premium-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 1),
(388, NULL, 'Miniket Rice Standard (Boiled) ± 50 gm', '', '50', '3', NULL, '  ', '', '   ', '5 kg', '2', '320', 0, '0', '320', NULL, '', NULL, NULL, NULL, NULL, 'miniket-rice-standard-boiled-50-gm-5-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 1),
(389, NULL, 'Athash Rice (Boiled) ± 50 gm', '', '50', '3', NULL, '', '', ' ', '5 kg', '1', '310', 0, '0', '310', NULL, '', NULL, NULL, NULL, NULL, 'athash-rice-boiled-50-gm-5-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(390, NULL, 'Chola Boot (Chick Peas) Dal', '', '50', '3', NULL, '', '', ' ', '1 kg', '1', '110', 0, '0', '110', NULL, '', NULL, NULL, NULL, NULL, 'chola-boot-chick-peas-dal-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(391, NULL, 'Chola Boot (Chick Peas) Dal', '', '50', '3', NULL, '', '', ' ', '500 gm', '1', '60', 0, '0', '60', NULL, '', NULL, NULL, NULL, NULL, 'chola-boot-chick-peas-dal-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(392, NULL, 'Moshur Dal (Deshi)', '', '50', '3', NULL, '', '', '       ', '1 kg', '1', '150', 0, '0', '150', NULL, '', NULL, NULL, NULL, NULL, 'moshur-dal-deshi-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(393, NULL, 'Moshur Dal (Imported)', '', '50', '3', NULL, '', '', ' ', '1 kg', '1', '115', 0, '0', '115', NULL, '', NULL, NULL, NULL, NULL, 'moshur-dal-imported-1-kg.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(394, NULL, 'Mug Dal', '', '50', '3', NULL, '  ', '', '   ', '1 kg', '1', '130', 0, '0', '130', NULL, '', NULL, NULL, NULL, NULL, 'mug-dal-500-gm.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 1),
(395, NULL, 'Pran Moshur Dal (Deshi)', '', '50', '3', NULL, '', '', ' ', '1 kg', '1', '170', 0, '0', '170', NULL, '', NULL, NULL, NULL, NULL, 'pran-moshur-dal-deshi-500-gm.jpg', NULL, '0', '0', NULL, '2023-07-16', NULL, 1, 0),
(399, NULL, 'Napa Extend Tablet 665mg', '', '70', '', NULL, ' Napa Extend\r\n\r\n \r\n\r\nParacetamol 665 mg Extended Release Tablet\r\n\r\n \r\n\r\nIndications\r\n\r\n \r\n\r\nNapa Extend extended release tablet contains Paracetamol BP 665 mg. It is effective for the relet of persistent pain associated with osteoarthritis and muscle aches and pains such as backache. Napa Extend extended release tablet also provides effective, temporary reliet of pain and discomfort associated with headache, tension headache, period pain, toothache, pain after dental procedures and cold & flu. It reduces fever.\r\n\r\n \r\n\r\nDosage and Administration\r\n\r\n \r\n\r\nNapa Extend e ', '', '   ', '10 pcs', '3', '20', 0, '0', '20', NULL, '', NULL, NULL, NULL, NULL, '64beb407847d51690219527.jpg', NULL, '0', '0', NULL, '2023-07-24', NULL, 1, 1),
(400, NULL, 'Napa Tablet 500mg', '', '70', '', NULL, 'Napa\r\n\r\nTablet\r\n\r\nIndications\r\n\r\nParacetamol is indicated for fever, common cold and influenza, headache, toothache, earache, bodyache, myalgia, neuralgia, dysmenorrhoea, sprains, colic pain, back pain, post-operative pain, postpartum pain, inflammatory pain and post vaccination pain in children. It is also indicated for rheumatic & osteoarthritic pain and stiffness of joints.\r\n\r\nPharmacology\r\n\r\nParacetamol has analgesic and antipyretic properties with weak anti-inflammatory activity. Paracetamol (Acetaminophen) is thought to act primarily in the CNS, increasing the pain threshold by inhibitin', '', '   ', '10 pcs', '1', '20', 0, '0', '20', NULL, '', NULL, NULL, NULL, NULL, '64beb4b209d601690219698.jpg', NULL, '0', '0', NULL, '2023-07-24', NULL, 1, 0),
(401, NULL, 'Seclo Capsule 40mg', '', '70', '', NULL, '', '', ' ', '6 pcs', '1', '60', 0, '0', '60', NULL, '', NULL, NULL, NULL, NULL, '64beb50cd9fe01690219788.jpg', NULL, '0', '0', NULL, '2023-07-24', NULL, 1, 0),
(402, NULL, 'Sergel Capsule 40mg', '', '70', '', NULL, '', '', ' ', '10 pcs', '1', '100', 0, '0', '100', NULL, '', NULL, NULL, NULL, NULL, '64beb53fed6701690219839.jpg', NULL, '0', '0', NULL, '2023-07-24', NULL, 1, 0),
(403, NULL, 'Savlon Twinkle Baby Pant Diaper XXL 14-25 kg', '', '95', '33', NULL, '', '', ' ', '24 pcs', '1', '890', 0, '0', '890', NULL, '', NULL, NULL, NULL, NULL, '64bfb17bebf7e1690284411.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(404, NULL, 'Huggies Dry Pants Baby Diaper Pant L (9-14 kg)', '', '95', '33', NULL, '', '', ' ', '50 pcs', '1', '2050', 0, '0', '2050', NULL, '', NULL, NULL, NULL, NULL, '64bfb1ad20e5d1690284461.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(405, NULL, 'Nestlé Cerelac 3 Wheat & 4 Fruits (10 M +)', '', '95', '49', NULL, 'Important Notice: There is no substitutes of or equivalent to breast-milk.\r\n\r\nNestl&eacute; CERELAC Wheat &amp; 4 Fruits with Milk is produced as per the Bangladesh standard for processed cereal-based foods for infants and young children.\r\n\r\nCERELAC Stage 3&nbsp;is an Infant Cereal for babies from&nbsp;10&nbsp;months to&nbsp;24&nbsp;months.\r\n\r\nNestl&eacute; CERELAC&nbsp; Wheat &amp; 4 Fruits contains:\r\n\r\n&nbsp;- 12 vitamins &amp; 7 minerals that may help in the normal development of a baby\r\n\r\n&nbsp;- Vitamin A, C, Zinc &amp;&nbsp;Bifidus&nbsp;BL fortification that may help in building the immu', '', ' ', '400 gm', '1', '450', 0, '0', '450', NULL, '', NULL, NULL, NULL, NULL, '64bfb2fde89451690284797.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(406, NULL, 'Nestlé Cerelac 3 Five Fruits Baby Food (18 Months+)', '', '95', '49', NULL, '', '', ' ', '350 gm', '0', '525', 0, '0', '525', NULL, '', NULL, NULL, NULL, NULL, '64bfb32f03d571690284847.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 1),
(407, NULL, 'Aptamil 1 First Infant Milk (From Birth)', '', '95', '49', NULL, '', '', ' ', '800 gm', '1', '3200', 0, '0', '3200', NULL, '', NULL, NULL, NULL, NULL, '64bfb385b56f01690284933.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(408, NULL, 'NeoCare Baby Wipes', '', '95', '33', NULL, '          ', '', '           ', '120 pcs', '1', '250', 0, '0', '250', NULL, '', NULL, NULL, NULL, NULL, '64bfb3d08fd9d1690285008.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 9),
(409, NULL, 'Dettol Lasting Fresh Antibacterial Bodywash Melon & Cucumber Fragrance (Free Loofah 1 pcs)', '', '69', '', NULL, '      ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n', '       ', '250 ml', '3', '200', 0, '0', '200', NULL, '', '1', NULL, NULL, NULL, '64bfbe02d95b11690287618.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 1),
(410, NULL, 'Parachute Just For Baby - Baby Shampoo (Free 75 gm Baby Soap)', '', '69', '', NULL, '', '', ' ', '200 ml', '1', '360', 0, '0', '360', NULL, '', '1', NULL, NULL, NULL, '64bfbee6dd56f1690287846.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(411, NULL, 'Deshi Sarputi Fish ±30 gm', '', '77', '26', NULL, '', '', ' ', '500 gm', '1', '250', 0, '0', '250', NULL, '', NULL, NULL, NULL, NULL, '64bfbf7d88f391690287997.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(412, NULL, 'Bagda Chingri (Shrimp) 35-40 pcs ±30 gm', '', '77', '26', NULL, '', '', ' ', '500 gm', '1', '400', 0, '0', '400', NULL, '', NULL, NULL, NULL, NULL, '64bfc011d72511690288145.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(413, NULL, 'Puti Fish ±15 gm', '', '77', '26', NULL, '', '', ' ', '500 gm', '1', '315', 0, '0', '315', NULL, '', NULL, NULL, NULL, NULL, '64bfc08d0b78b1690288269.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(414, NULL, 'Golda Chingri (Shrimp) 16-20 pcs ±30 gm', '', '77', '26', NULL, '  ', '', '   ', '500', '1', '700', 0, '0', '700', NULL, '', NULL, NULL, NULL, NULL, '64bfc0c88be611690288328.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 2),
(415, NULL, 'Rok Shuvro Detergent Laundry Wash (Buy 3 Get 1 Free)', '', '69', '', NULL, '          ', '', '           ', '500 gm', '1', '270', 0, '0', '270', NULL, '', '1', NULL, NULL, NULL, '64bfcce9507ce1690291433.jpg', NULL, '0', '0', NULL, '2023-07-25', NULL, 1, 0),
(416, NULL, 'Pran Hot Tomato Sauce', '', '50', '15', NULL, '  ', '<p>gty67ghjijkojmyhg6frtgy7ug</p>\r\n', '   ', '1 kg', '1', '250', 0, '0', '250', NULL, '', NULL, NULL, NULL, NULL, '64c0b33914ddc1690350393.jpg', NULL, '0', '0', NULL, '2023-07-26', NULL, 1, 0),
(417, NULL, 'Best&#39;s Tomato Ketchup', '', '72', '', NULL, '  ', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '   ', '330 ml', '5', '150', 20, '30', '120', NULL, '', NULL, NULL, '1', NULL, '64c0b3652eeca1690350437.jpg', NULL, '0', '0', NULL, '2023-07-26', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sd_merchant`
--

CREATE TABLE `sd_merchant` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `img1` varchar(500) DEFAULT 'photo.png',
  `img2` varchar(500) DEFAULT 'photo.png',
  `indhaka` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `outdhaka` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `delivery` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `terms` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `activity` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_merchant`
--

INSERT INTO `sd_merchant` (`id`, `shop_name`, `name`, `address`, `mobile`, `email`, `password`, `salt`, `img1`, `img2`, `indhaka`, `outdhaka`, `delivery`, `about`, `discount`, `terms`, `type`, `activity`, `date`, `username`) VALUES
(1, 'simplex international', 'ruhul amin', NULL, '01819449320', 'ruhulnoman@gmail.com', 'bc66711e7e82d78fcb0f954df63deab36cfef3e51f898c9af64865ab9c519ff2e13948132a219e163a74c4426a7c2554dc1a12da9750fe3c8d2c7e4eeb690d11', '813c5e49bb516a48657d673a0cc8b05c770f032a31a0f8d790894276c552521dd47ab74db162a6197aa2ec8dea16596517f6cde4919f4bb63952300d2582cf9c', 'photo.png', 'photo.png', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2023-02-19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sd_more_img`
--

CREATE TABLE `sd_more_img` (
  `id` int(11) NOT NULL,
  `pro_id` varchar(255) DEFAULT NULL,
  `img1` varchar(400) DEFAULT NULL,
  `img2` varchar(400) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_more_img`
--

INSERT INTO `sd_more_img` (`id`, `pro_id`, `img1`, `img2`, `img3`, `img4`, `type`) VALUES
(1, '56', NULL, NULL, NULL, NULL, '1'),
(2, '57', NULL, NULL, NULL, NULL, '1'),
(3, '58', NULL, NULL, NULL, NULL, '1'),
(4, '59', NULL, NULL, NULL, NULL, '1'),
(5, '60', NULL, NULL, NULL, NULL, '1'),
(6, '61', NULL, NULL, NULL, NULL, '1'),
(7, '62', NULL, NULL, NULL, NULL, '1'),
(8, '63', NULL, NULL, NULL, NULL, '1'),
(9, '64', NULL, NULL, NULL, NULL, '1'),
(10, '65', NULL, NULL, NULL, NULL, '1'),
(11, '66', NULL, NULL, NULL, NULL, '1'),
(12, '67', NULL, NULL, NULL, NULL, '1'),
(13, '68', NULL, NULL, NULL, NULL, '1'),
(14, '69', NULL, NULL, NULL, NULL, '1'),
(15, '70', NULL, NULL, NULL, NULL, '1'),
(16, '71', NULL, NULL, NULL, NULL, '1'),
(17, '72', NULL, NULL, NULL, NULL, '1'),
(18, '73', NULL, NULL, NULL, NULL, '1'),
(19, '74', NULL, NULL, NULL, NULL, '1'),
(20, '75', NULL, NULL, NULL, NULL, '1'),
(21, '76', NULL, NULL, NULL, NULL, '1'),
(22, '77', NULL, NULL, NULL, NULL, '1'),
(23, '78', NULL, NULL, NULL, NULL, '1'),
(24, '79', '', '', '', '', '1'),
(25, '0', '', '', '', '', '1'),
(26, '0', '', '', '', '', '1'),
(27, '0', '', '', '', '', '1'),
(28, '0', '', '', '', '', '1'),
(29, '0', '', '', '', '', '1'),
(30, '80', '', '', '', '', '1'),
(31, '0', '', '', '', '', '1'),
(32, '0', '', '', '', '', '1'),
(33, '0', '', '', '', '', '1'),
(34, '0', '', '', '', '', '1'),
(35, '81', '', '', '', '', '1'),
(36, '0', '', '', '', '', '1'),
(37, '0', '', '', '', '', '1'),
(38, '0', '', '', '', '', '1'),
(39, '0', '', '', '', '', '1'),
(40, '82', '', '', '', '', '1'),
(41, '83', NULL, NULL, NULL, NULL, '1'),
(42, '84', NULL, NULL, NULL, NULL, '1'),
(43, '85', NULL, NULL, NULL, NULL, '1'),
(44, '86', NULL, NULL, NULL, NULL, '1'),
(45, '87', NULL, NULL, NULL, NULL, '1'),
(46, '88', NULL, NULL, NULL, NULL, '1'),
(47, '89', NULL, NULL, NULL, NULL, '1'),
(48, '90', NULL, NULL, NULL, NULL, '1'),
(49, '91', NULL, NULL, NULL, NULL, '1'),
(50, '92', '', '', '', '', '1'),
(51, '93', '', '', '', '', '1'),
(52, '94', NULL, NULL, NULL, NULL, '1'),
(53, '95', '', '', '', '', '1'),
(54, '96', '', '', '', '', '1'),
(55, '97', '', '', '', '', '1'),
(56, '98', '', '', '', '', '1'),
(57, '99', '', '', '', '', '1'),
(58, '100', NULL, NULL, NULL, NULL, '1'),
(59, '101', '', '', '', '', '1'),
(60, '102', '', '', '', '', '1'),
(61, '103', '', '', '', '', '1'),
(62, '104', NULL, NULL, NULL, NULL, '1'),
(63, '105', '', '', '', '', '1'),
(64, '106', '', '', '', '', '1'),
(65, '107', '', '', '', '', '1'),
(66, '108', NULL, NULL, NULL, NULL, '1'),
(67, '109', '', '', '', '', '1'),
(68, '110', '', '', '', '', '1'),
(69, '111', '', '', '', '', '1'),
(70, '112', '', '', '', '', '1'),
(71, '113', '', '', '', '', '1'),
(72, '114', NULL, NULL, NULL, NULL, '1'),
(73, '115', '', '', '', '', '1'),
(74, '116', NULL, NULL, NULL, NULL, '1'),
(75, '117', NULL, NULL, NULL, NULL, '1'),
(76, '118', '', '', '', '', '1'),
(77, '119', '', '', '', '', '1'),
(78, '120', '', '', '', '', '1'),
(79, '121', '', '', '', '', '1'),
(80, '122', '', '', '', '', '1'),
(81, '123', '', '', '', '', '1'),
(82, '124', '', '', '', '', '1'),
(83, '125', '', '', '', '', '1'),
(84, '126', '', '', '', '', '1'),
(85, '127', '', '', '', '', '1'),
(86, '128', '', '', '', '', '1'),
(87, '129', '', '', '', '', '1'),
(88, '130', '', '', '', '', '1'),
(89, '131', '', '', '', '', '1'),
(90, '132', '', '', '', '', '1'),
(91, '133', '', '', '', '', '1'),
(92, '134', '', '', '', '', '1'),
(93, '135', '', '', '', '', '1'),
(94, '136', '', '', '', '', '1'),
(95, '137', '', '', '', '', '1'),
(96, '138', '', '', '', '', '1'),
(97, '139', '', '', '', '', '1'),
(98, '140', '', '', '', '', '1'),
(99, '141', '', '', '', '', '1'),
(100, '142', '', '', '', '', '1'),
(101, '143', '', '', '', '', '1'),
(102, '144', '', '', '', '', '1'),
(103, '145', '', '', '', '', '1'),
(104, '146', '', '', '', '', '1'),
(105, '147', '', '', '', '', '1'),
(106, '148', '', '', '', '', '1'),
(107, '149', '', '', '', '', '1'),
(108, '150', '', '', '', '', '1'),
(109, '151', '', '', '', '', '1'),
(110, '152', '', '', '', '', '1'),
(111, '153', '', '', '', '', '1'),
(112, '154', '', '', '', '', '1'),
(113, '155', '', '', '', '', '1'),
(114, '156', '', '', '', '', '1'),
(115, '157', '', '', '', '', '1'),
(116, '158', '', '', '', '', '1'),
(117, '159', NULL, NULL, NULL, NULL, '1'),
(118, '160', '', '', '', '', '1'),
(119, '161', '', '', '', '', '1'),
(120, '162', '', '', '', '', '1'),
(121, '163', '', '', '', '', '1'),
(122, '164', '', '', '', '', '1'),
(123, '165', '', '', '', '', '1'),
(124, '166', '', '', '', '', '1'),
(125, '167', '', '', '', '', '1'),
(126, '168', '', '', '', '', '1'),
(127, '169', '', '', '', '', '1'),
(128, '170', '', '', '', '', '1'),
(129, '171', '', '', '', '', '1'),
(130, '172', '', '', '', '', '1'),
(131, '173', '', '', '', '', '1'),
(132, '174', '', '', '', '', '1'),
(133, '175', '', '', '', '', '1'),
(134, '176', '', '', '', '', '1'),
(135, '177', '', '', '', '', '1'),
(136, '178', '', '', '', '', '1'),
(137, '179', '', '', '', '', '1'),
(138, '180', '', '', '', '', '1'),
(139, '181', '', '', '', '', '1'),
(140, '182', '', '', '', '', '1'),
(141, '183', '', '', '', '', '1'),
(142, '184', '', '', '', '', '1'),
(143, '185', '', '', '', '', '1'),
(144, '186', '', '', '', '', '1'),
(145, '187', '', '', '', '', '1'),
(146, '188', '', '', '', '', '1'),
(147, '189', '', '', '', '', '1'),
(148, '190', '', '', '', '', '1'),
(149, '191', '', '', '', '', '1'),
(150, '192', '', '', '', '', '1'),
(151, '193', '', '', '', '', '1'),
(152, '194', '', '', '', '', '1'),
(153, '195', '', '', '', '', '1'),
(154, '196', '', '', '', '', '1'),
(155, '197', '', '', '', '', '1'),
(156, '198', '', '', '', '', '1'),
(157, '199', '', '', '', '', '1'),
(158, '200', '', '', '', '', '1'),
(159, '201', '', '', '', '', '1'),
(160, '202', '', '', '', '', '1'),
(161, '203', '', '', '', '', '1'),
(162, '204', '', '', '', '', '1'),
(163, '205', '', '', '', '', '1'),
(164, '206', '', '', '', '', '1'),
(165, '207', '', '', '', '', '1'),
(166, '208', NULL, NULL, NULL, NULL, '1'),
(167, '209', '', '', '', '', '1'),
(168, '210', '', '', '', '', '1'),
(169, '211', '', '', '', '', '1'),
(170, '212', '', '', '', '', '1'),
(171, '213', '', '', '', '', '1'),
(172, '214', '', '', '', '', '1'),
(173, '215', NULL, NULL, NULL, NULL, '1'),
(174, '216', '', '', '', '', '1'),
(175, '217', '', '', '', '', '1'),
(176, '218', '', '', '', '', '1'),
(177, '219', '', '', '', '', '1'),
(178, '220', '', '', '', '', '1'),
(179, '221', '', '', '', '', '1'),
(180, '222', '', '', '', '', '1'),
(181, '223', '', '', '', '', '1'),
(182, '224', '', '', '', '', '1'),
(183, '225', '', '', '', '', '1'),
(184, '226', '', '', '', '', '1'),
(185, '227', '', '', '', '', '1'),
(186, '228', '', '', '', '', '1'),
(187, '229', '', '', '', '', '1'),
(188, '230', NULL, NULL, NULL, NULL, '1'),
(189, '231', '', '', '', '', '1'),
(190, '232', '', '', '', '', '1'),
(191, '233', '', '', '', '', '1'),
(192, '234', '', '', '', '', '1'),
(193, '235', '', '', '', '', '1'),
(194, '236', '', '', '', '', '1'),
(195, '237', '', '', '', '', '1'),
(196, '238', '', '', '', '', '1'),
(197, '239', NULL, NULL, NULL, NULL, '1'),
(198, '240', '', '', '', '', '1'),
(199, '241', '', '', '', '', '1'),
(200, '242', '', '', '', '', '1'),
(201, '243', '', '', '', '', '1'),
(202, '244', '', '', '', '', '1'),
(203, '245', '', '', '', '', '1'),
(204, '246', '', '', '', '', '1'),
(205, '247', '', '', '', '', '1'),
(206, '248', '', '', '', '', '1'),
(207, '249', '', '', '', '', '1'),
(208, '250', '', '', '', '', '1'),
(209, '251', '', '', '', '', '1'),
(210, '252', NULL, NULL, NULL, NULL, '1'),
(211, '253', NULL, NULL, NULL, NULL, '1'),
(212, '254', NULL, NULL, NULL, NULL, '1'),
(213, '255', NULL, NULL, NULL, NULL, '1'),
(214, '256', '', '', '', '', '1'),
(215, '257', '', '', '', '', '1'),
(216, '258', NULL, NULL, NULL, NULL, '1'),
(217, '259', NULL, NULL, NULL, NULL, '1'),
(218, '260', NULL, NULL, NULL, NULL, '1'),
(219, '261', NULL, NULL, NULL, NULL, '1'),
(220, '262', '', '', '', '', '1'),
(221, '263', NULL, NULL, NULL, NULL, '1'),
(222, '264', NULL, NULL, NULL, NULL, '1'),
(223, '265', '', '', '', '', '1'),
(224, '266', NULL, NULL, NULL, NULL, '1'),
(225, '267', NULL, NULL, NULL, NULL, '1'),
(226, '268', NULL, NULL, NULL, NULL, '1'),
(227, '269', NULL, NULL, NULL, NULL, '1'),
(228, '270', NULL, NULL, NULL, NULL, '1'),
(229, '271', NULL, NULL, NULL, NULL, '1'),
(230, '272', NULL, NULL, NULL, NULL, '1'),
(231, '273', NULL, NULL, NULL, NULL, '1'),
(232, '274', '', '', '', '', '1'),
(233, '275', '', '', '', '', '1'),
(234, '276', '', '', '', '', '1'),
(235, '277', '', '', '', '', '1'),
(236, '278', '', '', '', '', '1'),
(237, '279', '', '', '', '', '1'),
(238, '280', '', '', '', '', '1'),
(239, '281', '', '', '', '', '1'),
(240, '282', '', '', '', '', '1'),
(241, '283', '', '', '', '', '1'),
(242, '284', '', '', '', '', '1'),
(243, '285', '', '', '', '', '1'),
(244, '286', '', '', '', '', '1'),
(245, '287', '', '', '', '', '1'),
(246, '288', NULL, NULL, NULL, NULL, '1'),
(247, '289', NULL, NULL, NULL, NULL, '1'),
(248, '290', NULL, NULL, NULL, NULL, '1'),
(249, '291', NULL, NULL, NULL, NULL, '1'),
(250, '292', NULL, NULL, NULL, NULL, '1'),
(251, '293', NULL, NULL, NULL, NULL, '1'),
(252, '294', NULL, NULL, NULL, NULL, '1'),
(253, '295', NULL, NULL, NULL, NULL, '1'),
(254, '296', NULL, NULL, NULL, NULL, '1'),
(255, '297', '', '', '', '', '1'),
(256, '298', NULL, NULL, NULL, NULL, '1'),
(257, '299', NULL, NULL, NULL, NULL, '1'),
(258, '300', '', '', '', '', '1'),
(259, '301', '', '', '', '', '1'),
(260, '302', '', '', '', '', '1'),
(261, '303', NULL, NULL, NULL, NULL, '1'),
(262, '304', NULL, NULL, NULL, NULL, '1'),
(263, '305', NULL, NULL, NULL, NULL, '1'),
(264, '306', NULL, NULL, NULL, NULL, '1'),
(265, '307', NULL, NULL, NULL, NULL, '1'),
(266, '308', NULL, NULL, NULL, NULL, '1'),
(267, '309', NULL, NULL, NULL, NULL, '1'),
(268, '310', NULL, NULL, NULL, NULL, '1'),
(269, '311', '', '', '', '', '1'),
(270, '312', '', '', '', '', '1'),
(271, '313', NULL, NULL, NULL, NULL, '1'),
(272, '314', NULL, NULL, NULL, NULL, '1'),
(273, '315', '', '', '', '', '1'),
(274, '316', NULL, NULL, NULL, NULL, '1'),
(275, '317', NULL, NULL, NULL, NULL, '1'),
(276, '318', NULL, NULL, NULL, NULL, '1'),
(277, '319', NULL, NULL, NULL, NULL, '1'),
(278, '320', NULL, NULL, NULL, NULL, '1'),
(279, '321', NULL, NULL, NULL, NULL, '1'),
(280, '322', '', '', '', '', '1'),
(281, '323', NULL, NULL, NULL, NULL, '1'),
(282, '324', '', '', '', '', '1'),
(283, '325', '', '', '', '', '1'),
(284, '326', NULL, NULL, NULL, NULL, '1'),
(285, '327', NULL, NULL, NULL, NULL, '1'),
(286, '328', '', '', '', '', '1'),
(287, '329', NULL, NULL, NULL, NULL, '1'),
(288, '330', '', '', '', '', '1'),
(289, '331', '', '', '', '', '1'),
(290, '332', '', '', '', '', '1'),
(291, '333', '', '', '', '', '1'),
(292, '334', '', '', '', '', '1'),
(293, '335', '', '', '', '', '1'),
(294, '336', NULL, NULL, NULL, NULL, '1'),
(295, '337', NULL, NULL, NULL, NULL, '1'),
(296, '338', NULL, NULL, NULL, NULL, '1'),
(297, '339', NULL, NULL, NULL, NULL, '1'),
(298, '340', NULL, NULL, NULL, NULL, '1'),
(299, '341', '', '', '', '', '1'),
(300, '342', '', '', '', '', '1'),
(301, '343', '', '', '', '', '1'),
(302, '344', '', '', '', '', '1'),
(303, '345', '', '', '', '', '1'),
(304, '346', '', '', '', '', '1'),
(305, '347', NULL, NULL, NULL, NULL, '1'),
(306, '348', '', '', '', '', '1'),
(307, '349', NULL, NULL, NULL, NULL, '1'),
(308, '350', NULL, NULL, NULL, NULL, '1'),
(309, '351', NULL, NULL, NULL, NULL, '1'),
(310, '352', NULL, NULL, NULL, NULL, '1'),
(311, '353', '', '', '', '', '1'),
(312, '354', NULL, NULL, NULL, NULL, '1'),
(313, '355', '', '', '', '', '1'),
(314, '356', '', '', '', '', '1'),
(315, '357', '', '', '', '', '1'),
(316, '358', '', '', '', '', '1'),
(317, '359', '', '', '', '', '1'),
(318, '360', '', '', '', '', '1'),
(319, '361', '', '', '', '', '1'),
(320, '362', '', '', '', '', '1'),
(321, '363', '', '', '', '', '1'),
(322, '364', '', '', '', '', '1'),
(323, '365', '', '', '', '', '1'),
(324, '366', '', '', '', '', '1'),
(325, '367', '', '', '', '', '1'),
(326, '368', '', '', '', '', '1'),
(327, '369', '', '', '', '', '1'),
(328, '370', '', '', '', '', '1'),
(329, '371', '', '', '', '', '1'),
(330, '372', '', '', '', '', '1'),
(331, '373', '', '', '', '', '1'),
(332, '374', '', '', '', '', '1'),
(333, '375', NULL, NULL, NULL, NULL, '1'),
(334, '376', NULL, NULL, NULL, NULL, '1'),
(335, '377', '', '', '', '', '1'),
(336, '378', '', '', '', '', '1'),
(337, '379', '', '', '', '', '1'),
(338, '380', '', '', '', '', '1'),
(339, '381', '', '', '', '', '1'),
(340, '382', '', '', '', '', '1'),
(341, '383', '', '', '', '', '1'),
(342, '384', NULL, NULL, NULL, NULL, '1'),
(343, '385', '', '', '', '', '1'),
(344, '386', '', '', '', '', '1'),
(345, '387', '', '', '', '', '1'),
(346, '388', NULL, NULL, NULL, NULL, '1'),
(347, '389', '', '', '', '', '1'),
(348, '390', '', '', '', '', '1'),
(349, '391', '', '', '', '', '1'),
(350, '392', NULL, NULL, NULL, NULL, '1'),
(351, '393', '', '', '', '', '1'),
(352, '394', NULL, NULL, NULL, NULL, '1'),
(353, '395', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sd_order_list`
--

CREATE TABLE `sd_order_list` (
  `id` int(11) NOT NULL,
  `orderID` varchar(250) DEFAULT NULL,
  `pro_id` varchar(250) DEFAULT NULL,
  `shop_id` varchar(255) DEFAULT NULL,
  `title` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `qty` varchar(250) DEFAULT NULL,
  `d_qty` varchar(255) DEFAULT '0',
  `line_total` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `activity` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_order_list`
--

INSERT INTO `sd_order_list` (`id`, `orderID`, `pro_id`, `shop_id`, `title`, `img`, `price`, `qty`, `d_qty`, `line_total`, `date`, `time`, `activity`) VALUES
(8, '230318114442', '75', '1', 'handwash', 'OIP.jpg', '200', '1', '0', '200', '2023-03-18', '2023-03-18 11:45:14', 2),
(9, '230318114442', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-03-18', '2023-03-18 11:45:14', 2),
(10, '230318114613', '73', '1', 'oil', 'h9vcwjvssfztaameqqf6.jpg', '200', '1', '0', '200', '2023-03-18', '2023-03-18 11:46:41', 2),
(11, '230318114613', '72', '1', 'methi', 'juohrn3o1hngnt8caa3o.jpg', '200', '1', '0', '200', '2023-03-18', '2023-03-18 11:46:41', 2),
(56, '230406101152', '75', '1', 'handwash', 'OIP.jpg', '200', '1', '0', '200', '2023-04-06', '2023-04-06 10:12:01', 2),
(57, '230406101152', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-04-06', '2023-04-06 10:12:01', 2),
(58, '230406103927', '75', '1', 'handwash', 'OIP.jpg', '200', '1', '0', '200', '2023-04-06', '2023-04-06 10:41:02', 2),
(59, '230406035103', '75', '1', 'handwash', 'OIP.jpg', '200', '1', '0', '200', '2023-04-06', '2023-04-06 15:51:13', 2),
(60, '230406035103', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-04-06', '2023-04-06 15:51:13', 2),
(61, '230406035314', '63', '1', 'Rice', 'gt2uxvf2iqrz5bh3uqs7 (1).jpg', '200', '1', '0', '200', '2023-04-06', '2023-04-06 15:53:22', 2),
(62, '230406035314', '61', '1', 'eggs', 'cns1bplimcuzfl0cl6b1.jpg', '200', '1', '0', '200', '2023-04-06', '2023-04-06 15:53:22', 2),
(66, '230406042832', '75', '1', 'handwash', 'OIP.jpg', '200', '1', '0', '200', '2023-04-06', '2023-04-06 16:28:40', 2),
(67, '230406042832', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-04-06', '2023-04-06 16:28:40', 2),
(68, '230406044030', '75', '1', 'handwash', 'OIP.jpg', '200', '1', '0', '200', '2023-04-06', '2023-04-06 16:40:36', 2),
(69, '230406044030', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-04-06', '2023-04-06 16:40:36', 2),
(70, '230406063502', '69', '1', 'methi', 'ljufxbnaa0ml4gqh78z3.jpg', '200', '2', '0', '400', '2023-04-06', '2023-04-06 18:35:10', 2),
(71, '230406063502', '70', '1', 'coffee', 'Nescafe_Classic__25gm_png-100281-700x700.png', '200', '1', '0', '200', '2023-04-06', '2023-04-06 18:35:10', 2),
(72, '230408040632', '62', '1', 'Kitchen & Cooking', 'fwzg7hrslqu21rwld1sd.jpg', '200', '1', '0', '200', '2023-04-08', '2023-04-08 04:06:48', 2),
(73, '230408040632', '61', '1', 'eggs', 'cns1bplimcuzfl0cl6b1.jpg', '200', '1', '0', '200', '2023-04-08', '2023-04-08 04:06:48', 2),
(74, '230414063130', '73', '1', 'oil', 'h9vcwjvssfztaameqqf6.jpg', '200', '1', '0', '200', '2023-04-14', '2023-04-14 06:34:28', 2),
(75, '230414051146', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-04-14', '2023-04-14 17:13:02', 2),
(76, '230414051146', '73', '1', 'oil', 'h9vcwjvssfztaameqqf6.jpg', '200', '1', '0', '200', '2023-04-14', '2023-04-14 17:13:02', 2),
(77, '230414051146', '72', '1', 'methi', 'juohrn3o1hngnt8caa3o.jpg', '200', '1', '0', '200', '2023-04-14', '2023-04-14 17:13:02', 2),
(78, '230414051146', '61', '1', 'eggs', 'cns1bplimcuzfl0cl6b1.jpg', '200', '1', '0', '200', '2023-04-14', '2023-04-14 17:13:02', 2),
(79, '230416044514', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-04-16', '2023-04-16 04:45:35', 2),
(80, '230416044514', '73', '1', 'oil', 'h9vcwjvssfztaameqqf6.jpg', '200', '1', '0', '200', '2023-04-16', '2023-04-16 04:45:35', 2),
(81, '230416054044', '77', '1', 'Rup-Chada 6/7 pcs', 'roupchada.jpg', '1176.0000', '1', '0', '1176', '2023-04-16', '2023-04-16 05:41:02', 2),
(82, '230416054044', '67', '1', 'lefe', 'gvdlw3ymv8i10aqa0hiv.jpg', '50', '1', '0', '50', '2023-04-16', '2023-04-16 05:41:02', 2),
(83, '230416054044', '68', '1', 'oil', 'j8hskgnzk99geniw9pwu.jpg', '200', '1', '0', '200', '2023-04-16', '2023-04-16 05:41:02', 2),
(84, '230416035645', '74', '1', 'lobogo', 'evkfwqpdsevxzlrjqgu3.jpg', '50', '1', '0', '50', '2023-04-16', '2023-04-16 15:57:27', 2),
(94, '230417065948', '73', '1', 'oil', 'h9vcwjvssfztaameqqf6.jpg', '200', '1', '0', '200', '2023-04-17', '2023-04-17 07:00:05', 2),
(95, '230417065948', '72', '1', 'methi', 'juohrn3o1hngnt8caa3o.jpg', '200', '1', '0', '200', '2023-04-17', '2023-04-17 07:00:05', 2),
(96, '230417065948', '79', '', 'Golda 10pcs (+/-)', 'nodir_golda_10_12_pisces_GvSGv7F.jpg', '900', '1', '0', '900', '2023-04-17', '2023-04-17 07:00:05', 2),
(97, '230417065948', '78', '', 'Telapia Fish', 'telapia-new-fish.jpg', '291.0000', '1', '0', '291', '2023-04-17', '2023-04-17 07:00:05', 2),
(98, '230417065948', '77', '1', 'Rup-Chada 6/7 pcs', 'roupchada.jpg', '1176.0000', '1', '0', '1176', '2023-04-17', '2023-04-17 07:00:05', 2),
(104, '230501034044', '92', '', 'Sprit', '14344780_1784621038449424_218704284833666431_n.jpg', '100', '1', '0', '100', '2023-05-01', '2023-05-01 03:41:44', 2),
(105, '230501034044', '90', '1', 'Beef Biryani', 'Beef-Biryani-1B-480x360 (1).jpg', '1200', '1', '0', '1200', '2023-05-01', '2023-05-01 03:41:44', 2),
(106, '230501034559', '90', '1', 'Beef Biryani', 'Beef-Biryani-1B-480x360 (1).jpg', '1200', '1', '0', '1200', '2023-05-01', '2023-05-01 03:46:14', 2),
(107, '230501034559', '88', '1', 'Spicy Chicken Biryani', 'depositphotos_49826809-stock-photo-hyderabadi-biryani-a-popular-chicken.jpg', '1200', '1', '0', '1200', '2023-05-01', '2023-05-01 03:46:14', 2),
(196, '230710121354', '300', '', 'seclo', 'sergel.jpg', '100', '1', '0', '100', '2023-07-10', '2023-07-10 06:14:05', 2),
(203, '230715120413', '339', '', 'Fox\'s Crystal Clear Fruits Candy', 'Wholesale-Indonesia-Fox-Candy-Bar-Packaging-Tinned.jpg', '450', '3', '0', '1350', '2023-07-15', '2023-07-15 06:04:21', 2),
(204, '230715121254', '339', '', 'Fox\'s Crystal Clear Fruits Candy', 'Wholesale-Indonesia-Fox-Candy-Bar-Packaging-Tinned.jpg', '450', '1', '0', '450', '2023-07-15', '2023-07-15 06:13:02', 2),
(205, '230715121406', '339', '', 'Fox\'s Crystal Clear Fruits Candy', 'Wholesale-Indonesia-Fox-Candy-Bar-Packaging-Tinned.jpg', '450', '5', '0', '2250', '2023-07-15', '2023-07-15 06:14:14', 2),
(206, '230715121519', '339', '', 'Fox\'s Crystal Clear Fruits Candy', 'Wholesale-Indonesia-Fox-Candy-Bar-Packaging-Tinned.jpg', '450', '2', '0', '900', '2023-07-15', '2023-07-15 06:15:26', 2),
(207, '230715121519', '340', '', 'Quaker Oats Jar', 'quaker-oats-jar-900-gm.jpg', '600', '2', '0', '1200', '2023-07-15', '2023-07-15 06:15:26', 2),
(210, '230717013456', '337', '', 'Amul Kool Kesar Pet Bottle', 'amul-kool-kesar-pet-bottle-180-ml.jpg', '105', '7', '0', '735', '2023-07-17', '2023-07-17 07:35:04', 2),
(211, '230724022711', '376', '', 'Mum Drinking Water', 'mum-drinking-water-2-ltr.jpg', '40', '1', '0', '40', '2023-07-24', '2023-07-24 08:27:30', 2),
(212, '230724023038', '375', '', 'Kinley Drinking Water', 'kinley-drinking-water-2-ltr.jpg', '40', '22', '0', '880', '2023-07-24', '2023-07-24 08:30:47', 2),
(213, '230724101347', '394', '', 'Mug Dal', 'mug-dal-500-gm.jpg', '130', '1', '0', '130', '2023-07-24', '2023-07-24 16:14:15', 2),
(214, '230728113202', '399', '', 'Napa Extend Tablet 665mg', '64beb407847d51690219527.jpg', '20', '1', '0', '20', '2023-07-28', '2023-07-28 17:32:15', 2),
(215, '230728113559', '408', '', 'NeoCare Baby Wipes', '64bfb3d08fd9d1690285008.jpg', '250', '9', '0', '2250', '2023-07-28', '2023-07-28 17:36:04', 2),
(216, '230802043001', '354', '', 'Premium Frozen Elsa Flying Dolls  & Kids Angel Flying Infrared Doll Toy', 'fe3bedf720f91a9a4634f51c0d97e1e6.jpg', '585.0000', '1', '0', '585', '2023-08-02', '2023-08-02 10:30:21', 2),
(219, '230813012501', '387', '', 'Chinigura Rice Premium', 'chinigura-rice-premium-1-kg.jpg', '140', '1', '0', '140', '2023-08-13', '2023-08-13 07:25:08', 2),
(220, '230822011457', '409', '', 'Dettol Lasting Fresh Antibacterial Bodywash Melon & Cucumber Fragrance (Free Loofah 1 pcs)', '64bfbe02d95b11690287618.jpg', '200', '1', '0', '200', '2023-08-22', '2023-08-22 07:15:05', 2),
(221, '230930064353', '386', '', 'Nazirshail Rice Premium (Half Boiled) ± 50 gm', 'nazirshail-rice-premium-half-boiled-50-gm-5-kg.jpg', '420', '1', '0', '420', '2023-09-30', '2023-09-30 12:45:41', 2),
(222, '230930064353', '414', '', 'Golda Chingri (Shrimp) 16-20 pcs ±30 gm', '64bfc0c88be611690288328.jpg', '700', '1', '0', '700', '2023-09-30', '2023-09-30 12:45:41', 2),
(223, '231003063319', '406', '', 'Nestlé Cerelac 3 Five Fruits Baby Food (18 Months+)', '64bfb32f03d571690284847.jpg', '525', '1', '0', '525', '2023-10-03', '2023-10-03 12:33:36', 2),
(224, '231007015023', '414', '', 'Golda Chingri (Shrimp) 16-20 pcs ±30 gm', '64bfc0c88be611690288328.jpg', '700', '1', '0', '700', '2023-10-07', '2023-10-07 07:50:29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sd_order_more`
--

CREATE TABLE `sd_order_more` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `customerID` varchar(50) DEFAULT NULL,
  `shop_id` varchar(255) DEFAULT NULL,
  `customer_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `total` varchar(250) DEFAULT NULL,
  `g_total` varchar(20) DEFAULT '0',
  `discount` varchar(255) DEFAULT NULL,
  `mathod` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT 'unpaid',
  `trxid` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `acc_no` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `shipping` varchar(20) DEFAULT '0',
  `delivery_time` varchar(255) DEFAULT NULL,
  `delivery_date` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` varchar(250) DEFAULT NULL,
  `activity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_order_more`
--

INSERT INTO `sd_order_more` (`id`, `order_id`, `customerID`, `shop_id`, `customer_name`, `email`, `mobile`, `address`, `total`, `g_total`, `discount`, `mathod`, `payment_status`, `trxid`, `acc_no`, `shipping`, `delivery_time`, `delivery_date`, `time`, `date`, `activity`) VALUES
(35, '230406063953', '', NULL, 'Robiul Karim', 'mrkadmin@gmail.com', '01625804712', 'Natore\r\nGurudaspur', '', '100', NULL, '8', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 06:39:59', '2023-04-06', 1),
(36, '230406064039', '', NULL, 'Robiul Karim', 'mrkadmin@gmail.com', '01625804712', 'Natore\r\nGurudaspur', '', '500', NULL, '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 06:40:43', '2023-04-06', 1),
(37, '230406064154', '', NULL, 'Robiul Karim', 'mrkadmin@gmail.com', '01625804712', 'Natore\r\nGurudaspur', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 06:41:58', '2023-04-06', 1),
(38, '230406072914', '', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'ss', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '13:30:00', NULL, '2023-04-06 07:30:28', '2023-04-06', 1),
(39, '230406073205', '', NULL, 'aaa', 'admin@sarkarit.com', '01478596364', 'a', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 07:32:15', '2023-04-06', 1),
(40, '230406081107', '', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'as', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 08:11:38', '2023-04-06', 1),
(41, '230406085056', '', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'as', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '14:51:00', NULL, '2023-04-06 08:51:11', '2023-04-06', 1),
(42, '230406090213', '', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'z', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 09:02:27', '2023-04-06', 1),
(43, '230406090700', '', NULL, 'Miyako', 'admin@sarkarit.com', '01478596364', 'fcfh', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 09:07:09', '2023-04-06', 1),
(45, '230406101152', '', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'g', NULL, '100', NULL, '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 10:12:01', '2023-04-06', 1),
(46, '230406103927', '', NULL, 'b', '920@gmail.com', '55', 'dddd', '200', '260', '40', '12', 'unpaid', NULL, NULL, '100', '05:40:00', NULL, '2023-04-06 10:41:02', '2023-04-06', 1),
(47, '230406035103', '', NULL, 'AKLIMA AKTER AKHI', 'akhi@gmail.com', '01727404933', 'Vill:Aronghati\r\nPo:Hajipur\r\nPs:Jamalpur\r\nDist:Jamalpur', '250', '300', '50', '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 15:51:13', '2023-04-06', 1),
(48, '230406035314', '', NULL, 'AKLIMA AKTER AKHI', 'akhi@gmail.com', '01727404933', 'Vill:Aronghati\r\nPo:Hajipur\r\nPs:Jamalpur\r\nDist:Jamalpur', '400', '420', '80', '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 15:53:22', '2023-04-06', 1),
(50, '230406042832', '1', NULL, 'Robiul Karim', 'admin@gmail.com', '01625804712', 'GGG', '250', '350', '0', '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 16:28:40', '2023-04-06', 1),
(51, '230406044030', '1', NULL, 'Robiul Karim', 'admin@gmail.com', '01625804712', 'as', '250', '350', '0', '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 16:40:36', '2023-04-06', 1),
(52, '230406063502', '', NULL, 'Robiul Karim', 'mrkadmin@gmail.com', '01625804712', 'Natore\r\nGurudaspur', '600', '700', '0', '12', 'unpaid', NULL, NULL, '100', '00:00:00', NULL, '2023-04-06 18:35:10', '2023-04-06', 1),
(53, '230408040632', '', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'asdfg', '400', '420', '80', '12', 'unpaid', NULL, NULL, '100', '10:06:00', NULL, '2023-04-08 04:06:48', '2023-04-08', 1),
(54, '230414063130', '', NULL, 'a', 'admin@gmail.com', '01727404933', 'aaaaa', '200', '300', '0', '12', 'unpaid', NULL, NULL, '100', NULL, NULL, '2023-04-14 06:34:28', '2023-04-14', 1),
(55, '230414051146', '', NULL, 'Ruhul Amin', '', '01819449320', 'House 17. Road 06. Sector 06.\r\nUttara', '650', '650', '0', '12', 'unpaid', NULL, NULL, NULL, NULL, NULL, '2023-04-14 17:13:02', '2023-04-14', 1),
(56, '230416044514', '', NULL, 'Rakib', '', '01711111111', 'Dhaka', '250', '250', '0', '12', 'unpaid', NULL, NULL, NULL, NULL, NULL, '2023-04-16 04:45:35', '2023-04-16', 1),
(57, '230416054044', '5', NULL, 'Rakib', '', '01776620885', 'Dhaka', '1426', '1426', '0', '12', 'unpaid', NULL, NULL, NULL, NULL, NULL, '2023-04-16 05:41:02', '2023-04-16', 1),
(58, '230416035645', '', NULL, 'aaaa', 'admin@gmail.com', '01727404933', 'asa', '50', '50', '0', '12', 'unpaid', NULL, NULL, NULL, NULL, NULL, '2023-04-16 15:57:27', '2023-04-16', 1),
(66, '230417065948', '', NULL, 'Rakib', 'web1@sarkarit.com', '01711111111', 'Dhaka', '2767', '2797', '0', '12', 'unpaid', NULL, NULL, '30', '4:00 PM - 5:00 PM', '2023-04-18', '2023-04-17 07:00:05', '2023-04-17', 1),
(138, '230710121354', '', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'sfsdf', '100', '150', '0', '12', 'unpaid', NULL, NULL, '50', '9:00 AM - 10:00 AM', 'Monday 10th', '2023-07-10 06:14:05', '2023-07-10', 1),
(145, '230715120413', '', NULL, 'ROBI', 'admin@sarkarit.com', '01625804712', 'ddfdfdf', '1350', '1380', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Saturday 15th', '2023-07-15 06:04:21', '2023-07-15', 1),
(146, '230715121254', '', NULL, 'ROBI', 'admin@mrkbd.com', '01625804712', 'sdfsdfsdf', '450', '480', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Saturday 15th', '2023-07-15 06:13:02', '2023-07-15', 1),
(147, '230715121406', '', NULL, 'ROBI', 'admin@sarkarit.com', '01625804712', 'sdafdasdsad', '2250', '2280', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Saturday 15th', '2023-07-15 06:14:14', '2023-07-15', 1),
(148, '230715121519', '', NULL, 'ROBI', 'admin@sarkarit.com', '01625804712', 'fddfssdf', '2100', '2130', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Saturday 15th', '2023-07-15 06:15:26', '2023-07-15', 1),
(150, '230717013456', '', NULL, 'Md Ruhul Amin', 'ruhulnoman@gmail.com', '01819449320', 'Dhaka\r\nDhaka', '735', '765', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Monday 17th', '2023-07-17 07:35:04', '2023-07-17', 1),
(151, '230724022711', '', NULL, 'Md Ruhul Amin', 'bazaarsoday@gmail.com', '01819449320', 'Dhaka\r\nDhaka', '40', '90', '0', '12', 'unpaid', NULL, NULL, '50', '12:00 PM - 1:00 PM', 'Thursday 27th', '2023-07-24 08:27:30', '2023-07-24', 1),
(152, '230724023038', '', NULL, 'Md Ruhul Amin', 'bazaarsoday@gmail.com', '01819449320', 'Dhaka\r\nDhaka', '880', '910', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Monday 24th', '2023-07-24 08:30:47', '2023-07-24', 1),
(153, '230724101347', '', NULL, 'kamal', 'sers@yahoo.com', '01671733030', 'Dhaka\r\nDhaka', '130', '180', '0', '12', 'unpaid', NULL, NULL, '50', '9:00 AM - 10:00 AM', 'Monday 24th', '2023-07-24 16:14:15', '2023-07-24', 1),
(154, '230728113202', '', NULL, 'Md Ruhul Amin', 'bazaarsoday@gmail.com', '01819449320', 'Dhaka\r\nDhaka', '20', '70', '0', '12', 'unpaid', NULL, NULL, '50', '9:00 AM - 10:00 AM', 'Friday 28th', '2023-07-28 17:32:15', '2023-07-28', 1),
(155, '230728113559', '', NULL, 'Md Ruhul Amin', 'bazaarsoday@gmail.com', '01819449320', 'Dhaka\r\nDhaka', '2250', '2280', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Friday 28th', '2023-07-28 17:36:04', '2023-07-28', 1),
(156, '230802043001', '', NULL, 'ruhul', 'admin@sarkarit.com', '01819449320', 'uttara', '585', '615', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Wednesday 2nd', '2023-08-02 10:30:21', '2023-08-02', 1),
(159, '230813012501', '', NULL, 'Md Ruhul Amin', 'bazaarsoday@gmail.com', '01819449320', 'Dhaka\r\nDhaka', '140', '190', '0', '12', 'unpaid', NULL, NULL, '50', '9:00 AM - 10:00 AM', 'Sunday 13th', '2023-08-13 07:25:08', '2023-08-13', 1),
(160, '230822011457', '', NULL, 'Md Ruhul Amin', 'admin@sarkarit.com', '01819449320', 'Dhaka\r\nDhaka', '200', '250', '0', '12', 'unpaid', NULL, NULL, '50', '9:00 AM - 10:00 AM', 'Tuesday 22nd', '2023-08-22 07:15:05', '2023-08-22', 1),
(161, '230930064353', '24', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'Mohammadpur, Dhakannnn', '1120', '1150', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Saturday 30th', '2023-09-30 12:45:41', '2023-09-30', 1),
(162, '231003063319', '', NULL, 'Ruhul Amin', 'bazaarsoday@gmail.com', '01819449320', 'uttara', '525', '555', '0', '12', 'unpaid', NULL, NULL, '30', '3:00 PM - 4:00 PM', 'Tuesday 3rd', '2023-10-03 12:33:36', '2023-10-03', 4),
(163, '231007015023', '24', NULL, 'akhi', 'admin@sarkarit.com', '01478596364', 'Mohammadpur, Dhakannnn', '700', '730', '0', '12', 'unpaid', NULL, NULL, '30', '9:00 AM - 10:00 AM', 'Saturday 7th', '2023-10-07 07:50:29', '2023-10-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sd_page_setup`
--

CREATE TABLE `sd_page_setup` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `copyright` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `top_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hotline1` varchar(255) DEFAULT NULL,
  `hotline2` varchar(255) DEFAULT NULL,
  `hotline3` varchar(255) DEFAULT NULL,
  `bkash` varchar(255) DEFAULT NULL,
  `header_color` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `sd_page_setup`
--

INSERT INTO `sd_page_setup` (`id`, `title`, `copyright`, `top_no`, `email`, `hotline1`, `hotline2`, `hotline3`, `bkash`, `header_color`, `date`) VALUES
(1, 'bazaarsodai', 'House 17, Road 06, Sector 06, Uttara, Dhaka', '+880 1816140606', 'support@bazaarsodai.com', '01816140606', '01816140606', '01816140606', '01816140606', '#8b0e51', '2023-04-03'),
(2, 'bazaarsodai', 'bazaarsodai', '0184679245', 'admin@gmail.com', '0184679245', '0184679245', '0184679245', 'cash on delivery', NULL, '10/03/23');

-- --------------------------------------------------------

--
-- Table structure for table `sd_payments`
--

CREATE TABLE `sd_payments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `value` varchar(100) NOT NULL,
  `position` varchar(200) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_payments`
--

INSERT INTO `sd_payments` (`id`, `name`, `value`, `position`, `type`) VALUES
(8, 'Out side City', '100', '1', 1),
(9, 'Inside City', '40', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sd_posts`
--

CREATE TABLE `sd_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(400) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sort_desc` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `full_desc` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_posts`
--

INSERT INTO `sd_posts` (`id`, `title`, `sort_desc`, `full_desc`, `img1`, `img2`, `type`, `date`) VALUES
(1, 'Shipping & Returns', '<p>About Us<br></p>', '<p>Many retailers will accept returns provided that the customer has a receipt as a proof of purchase, and that certain other conditions, which depend on the retailer&#39;s policies, are met. These may include the merchandise being in a certain condition (usually resellable if not defective), no more than a certain amount of time having passed since the purchase, and sometimes that identification be provided (though usually only if a receipt is not provided). In some cases, only exchanges or store credit are offered, again usually only without a receipt, or after an initial refund period has passed.[1] Some retailers charge a restocking fee for non-defective returned merchandise, but typically only if the packaging has been opened.[1]</p>\r\n\r\n<p>While retailers are not usually required to accept returns, laws in many places require retailers to post their return policy in a place where it would be visible to the customer prior to purchase.[2]</p>\r\n\r\n<p>In certain countries, such as Australia, consumer rights dictate that under certain situations consumers have a right to demand a refund.[3] These situations include sales that relied on false or misleading claims, defective goods, and undisclosed conditions of sale.</p>\r\n\r\n<p>There are various reasons why customers may wish to return merchandise. These include a change of one&#39;s mind (buyer&#39;s remorse), quality of the merchandise, personal dissatisfaction, or a mistaken purchase of the wrong product. For clothing or other sized items, it may be a lack of a correct fit. Sometimes, there may be a product recall in which the manufacturer has requested (or been ordered) that the merchandise be brought back to the store. Also, gift receipts are offered sometimes when an item is purchased for another person, and the recipient can exchange this item for another item of comparable value, or for store credit, often on a gift card.[4]</p>\r\n\r\n<p>Economic impact<br />\r\nIn the US, an estimated 8&ndash;10% of in-store sales is returned whereas online sales may result in 25&ndash;40% returns. In Asia and Europe, less than 5 percent of purchases are returned.[5] US shoppers returned $396 billion worth of purchases in 2018 &ndash; brick-and-mortar and online, according to the National Retail Federation (NRF).[6] To fight high return rates in e-commerce, realistic product visualization is needed. Next to imagery and video content, 3D technology like augmented reality and virtual reality, but also simply 3D in the browser can enhance the shopping experience and lower return rates.[7]</p>\r\n\r\n<p>Issues</p>\r\n', 'thumb3-alka-yagnik-latest-images-1467400887.jpg', 'thumb2-alka-yagnik-latest-images-1467400887.jpg', 2, ''),
(2, 'Footer Content', '<p>e5656</p>', '<p>bazaarsodai.com is an online shop available in Dhaka, Chattogram, Jashore, Khulna and Narayanganj. We believe time is valuable to our fellow residents, and that they should not have to waste hours in traffic, brave bad weather and wait in line just to buy basic necessities like eggs! This is why bazaarsodai delivers everything you need right at your door-step and at no additional cost.</p>\r\n', NULL, NULL, 2, ''),
(3, ' Complaing & Suggestion', NULL, '<p>A payment is the voluntary tender of money or its equivalent or of things of value by one party (such as a person or company) to another in exchange for goods, or services provided by them, or to fulfill a legal obligation. The party making a payment is commonly called the payer, while the payee is the party receiving the payment.</p>\r\n\r\n<p>Payments can be effected in a number of ways, for example:</p>\r\n\r\n<p>the use of money, cheque, or debit, credit or bank transfers.<br />\r\nthe transfer of anything of value, such as stock, or using barter, the exchange of one good or service for another.<br />\r\nIn general, the payee is at liberty to determine what method of payment he or she will accept; though normally laws require the payer to accept the country&#39;s legal tender up to a prescribed limit. Payment is most commonly effected in the local currency of the payee, unless if the parties agree otherwise. Payment in another currency involves an additional foreign exchange transaction. The payee may compromise on a debt, i.e., accept a part payment in full settlement of a debtor&#39;s obligation, or may offer a discount, E.G: For payment in cash, or for prompt payment, etc. On the other hand, the payee may impose a surcharge, for example, as a late payment fee, or for use of a certain credit card, etc.</p>\r\n\r\n<p>Payments are frequently preceded by an invoice or bill, which follow the supply of goods or services, but in some industries (such as travel and hotels) it is becoming common for pre-payments to be required before the service is performed or provided. In some industries, a deposit may be required before services are performed, which acts as a part pre-payment or as security to the service provider. In some cases, progress payments are made in advance, and in some cases part payments are accepted, which do not extinguish the payer&rsquo;s legal obligations. The acceptance of a payment by the payee extinguishes a debt or other obligation. A creditor cannot unreasonably refuse to accept a payment, but payment can be refused in some circumstances, for example, on a Sunday or outside banking hours. A payee is usually obligated to acknowledge payment by producing a receipt to the payer. A receipt may be an endorsement on an account as &quot;paid in full&quot;. The giving of a guarantee or other security for a debt does not constitute a payment.</p>\r\n', NULL, NULL, 2, ''),
(5, 'Payment Method', NULL, '<p><em><strong>Step 1: Sing up first to create an account using your email address and password if you do not have one yet.<br />\r\nStep 2: Check your email to confirm your created account via a link that has been sent from mrshopper.com.<br />\r\nStep 3: Log in to your account, and fill out all necessary information like billing address, shipping address, contact info, and so on.<br />\r\nStep 4: Now, you are ready to shop.<br />\r\nStep 5: Browse and find your products, add to your cart, checkout, and enjoy.<br />\r\nStep 6: If you want to buy so many products, add all products to your cart first, and then proceed to checkout to save time (you can keep adding products as many times as you want and keep it as many days as you like, proceed to checkout just when you are ready).</strong></em></p>\r\n', NULL, NULL, 2, ''),
(7, 'Help & More', NULL, '<p>It&#39;s a rare case for Bazaarsodai.com where customers didn&#39;t get their products unharmed. But sometimes we may fail to fulfill your expectations, sometimes situations aren&#39;t by our side. But there is now a &quot;Bond of Trust&quot; between customers and Usbdshopping.com, So, for further ensuring and encouraging this &quot;Bond of Trust&quot; Usbdshopping.com brings you The &quot;Happy Return&quot; policy. Where customers can return their products only if there&#39;s something wrong &nbsp;with it. In that case Usbdshopping.com will give you fresh products in return. Because we believe that happiness should be returned if that happiness can&#39;t give you a smile. So, We returned it with proper happiness. We always want to bring a smile in your face and make you happier. We call this policy of ours &quot;Happy Return&quot;.<br />\r\nIf for any reason you are unsatisfied with your order, you may return it as long as your item meets the following criteria:<br />\r\n&bull;&nbsp;&nbsp; &nbsp;It is within 03 Days from the delivery date.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;All items to be returned or exchanged must be unused and in their original condition with all original tags and packaging intact and should not be broken or tampered with.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;If the item came with a free promotional item, the free item must also be returned.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Refund/ replacement for products are subject to inspection and checking by usbdfashion team.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Damages due to neglect, improper usage or Digital content such as e-books will not be covered under our Returns Policy.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Replacement is subject to availability of stock with the Supplier. If the product is out of stock, you will receive a full refund, no questions asked.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Please note that the Cash on Delivery convenience charge and the shipping charge would not be included in the refund value of your order as these are non-refundable charges.<br />\r\nReasons for returns &amp; replacement:<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Product is damaged, defective or not as described.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Size Mismatch for clothing.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Wrong product sent.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Unhappy with the product quality.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>How to return:</strong></p>\r\n\r\n<p>Contact usbdfashion.com Customer Care team by calling &hellip;&hellip;&hellip;&hellip;.. or by emailing &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.. within 03 days after receiving your order.</p>\r\n\r\n<p>Once we pick up or receive your return, we will do a quality check of the product at our end and if a return is invalid, we will replace the product with a new one or we will proceed with the refund.</p>\r\n\r\n<p><strong>Refund Policy:</strong></p>\r\n\r\n<p>*** The refund will be processed after we have completed evaluating your return.</p>\r\n\r\n<p>***Replacement is subject to availability of stock with the Supplier. If the product is out of stock, you will receive a full refund, no questions asked.</p>\r\n\r\n<p>***Please note that the Cash on Delivery convenience charge and the shipping charge would not be included in the refund value of your order as these are non-refundable charges.</p>\r\n\r\n<p>After receiving your product, if you want, you can get a full refund of your ordered product price.To get refund, please, inform us through an e-mail to &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;. or call us at &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip; (&hellip;am-&hellip;.pm). Please, note that to avail a full refund, you have to send the product to Usbdshopping.com office in absolutely good condition at your own cost.</p>\r\n\r\n<p><strong>Phone</strong>: 01816140606</p>\r\n\r\n<p>&nbsp;<strong>E-Mail</strong>:&nbsp;</p>\r\n\r\n<p>&nbsp;<strong>Inbox</strong>:&nbsp;</p>\r\n', NULL, NULL, 2, ''),
(8, 'Terms & Conditions of Us', NULL, '<p>Ordering and Payments:</p>\r\n\r\n<p>You can pay with any major debit card, Master card or Visa credit card. Please make sure your email address is correct and your mailbox is working properly, as all order confirmations are sent to that email address.</p>\r\n\r\n<p>Here&rsquo;s a legal bit we have to include any contracts or agreements formed between you and us by means of this website shall be governed and construed according to law and any disputes or proceedings shall be subject to the exclusive jurisdiction of the U.S.A courts.</p>\r\n\r\n<p>Please note in particular that:</p>\r\n\r\n<p>We do our best to make sure all details (including prices) displayed on this web site are correct and up to date, but we have to point out that we cannot be held responsible for their accuracy. Please make sure that, prior to placing an order; you&rsquo;ve checked all the relevant details about the products you&rsquo;ve chosen in case any of these details have changed since you last visited us online.</p>\r\n\r\n<p>All products displayed on this web site are subject to availability.</p>\r\n\r\n<p>All prices are inclusive of VAT (but they may or may not include delivery.</p>\r\n\r\n<p>Your payment card will be debited immediately (our bank manager made us put this bit in).</p>\r\n\r\n<p>No statement on our web site shall be deemed to affect the statutory rights of a consumer which cannot be excluded or restricted by law (so that&rsquo;s alright, then).</p>\r\n\r\n<p>Any purchase where points have been used the points are non-refundable.</p>\r\n\r\n<p>Cancellation:</p>\r\n\r\n<p>You can cancel your order within seven working days of receipt of the goods (of course, we&rsquo;d rather you didn&rsquo;t, but you have a legal right to do this under something called the distance selling regulations). Any purchase which includes reward points/ promo codes/ special offers, at the time of cancellation, used reward points/ promo codes/ special offers is non-refundable.</p>\r\n\r\n<p>Privacy and Data Protection:</p>\r\n\r\n<p>This lot will hopefully put your mind at rest. We&rsquo;re sorry for the legalistic tone, but it seems the best way to make everything as clear as possible.</p>\r\n\r\n<p>About us:</p>\r\n\r\n<p>The information you provide us will be held by USBD MULTINATIONAL INC. and not by any third parties.</p>\r\n\r\n<p>Use of your information:</p>\r\n\r\n<p>The information you provide on this site may be held and used by us for any of the following purposes:</p>\r\n\r\n<p>1- Order processing</p>\r\n\r\n<p>2- Administration of customer&rsquo;s orders and/or accounts</p>\r\n\r\n<p>3-Dealing with enquiries or complaints</p>\r\n\r\n<p>4- Crime and fraud prevention</p>\r\n\r\n<p>5- Marketing our products and services generally or (subject to any objection or preference you may indicate when submitting your personal details to us via our site) for sending information to you about our products from time to time</p>\r\n\r\n<p>In addition, we may use information about you provided by credit reference agencies to help us make credit decisions and to prevent fraud.</p>\r\n\r\n<p>Disclosures of your information:</p>\r\n\r\n<p>We will not disclose your information to any other companies other than those belonging to the same group of companies. We may disclose your information to credit agencies and to other people in relation to enquiries concerning the prevention and detection of fraud or crime or the apprehension or prosecution of offenders or as may be required by law or legal proceedings.</p>\r\n\r\n<p>Discounts and Offers:</p>\r\n\r\n<p>Please note that the discount percentages displayed are rounded off figures. Discount cash offers always require a minimum spend amount except stated otherwise.</p>\r\n\r\n<p>Please note; discounts cannot be applied after you have made your purchase. To claim your discount please makes sure you enter your discount at checkout, we cannot refund your discount amount in retrospect after you have made your purchase.</p>\r\n\r\n<p>Competitions:</p>\r\n\r\n<p>Employees of USBD MULTINATIONAL INC. their immediate families, press, agencies, sponsors and commercial partners or any other persons directly or indirectly connected with the competition are not eligible to enter any competition. Unless otherwise specified, no person may enter a competition more than once. You may not enter a competition if, on the date it is announced, you do not conform to the required profile of entrant. For example a competition may be limited by age. Unless otherwise stated you must be at least 18 years old, and if requested to do so, provide proof of your age. You must provide personal details as reasonably requested to do so by USBD MULTINATIONAL INC. Refusal to comply will result in disqualification from the contest. All decisions of USBD MULTINATIONAL INC. will be final and binding. No correspondence will be entered into. All entries answers must be received by USBD MULTINATIONAL INC. by the closing date specified in the competition. Answers will be entered automatically upon submission. No responsibility will be taken by USBD MULTINATIONAL INC. for any answers that are illegible, misdirected, lost for technical or other reasons or received after the closing date.<br />\r\n&nbsp;</p>\r\n', NULL, NULL, 2, ''),
(9, 'FAQ', NULL, '<p>Frequently Ask Questions<br />\r\nQ. How much do deliveries charge?</p>\r\n\r\n<p>For order up to Tk.199, Delivery Charge is Tk.60<br />\r\nFor order up to Tk.499, Delivery Charge is Tk.25<br />\r\nFor order up to Tk.998, Delivery Charge is Tk.20<br />\r\nFor order Tk.999 or above, Delivery Charge is FREE!!</p>\r\n\r\n<p>Q. What is your delivery area?</p>\r\n\r\n<p>Inside Dhaka Metropolitan Area</p>\r\n\r\n<p>Q. How can I contact you?</p>\r\n\r\n<p>You can call us +8809611848484 or +8801999848484 Or Inbox us in Facebook or Messenger to contact with us.</p>\r\n\r\n<p>Q. How does the site work?</p>\r\n\r\n<p>You can browse the site (ghorebazar.com) or use our search engine to find your desired products. Then you can cart your desired product(s) for submitting your order through your mobile number to get 4 digit PIN code. After submtting your delivery location &amp; time and payment mode, our Customer Care Officer will contact you over phone to confirm your order and other information which you provided to us.</p>\r\n\r\n<p>Q. What are your delivery hours?</p>\r\n\r\n<p>We deliver your order on or before 90 minutes from the confirmation time of your order. Delivery service open from 9 a.m. to 9 p.m. everyday. You can choose from available slots to find something that is convenient to you.</p>\r\n\r\n<p>Q. How do I pay?</p>\r\n\r\n<p>We accept cash on delivery and we also have card payment and Online bkash service.</p>\r\n\r\n<p>Q. I can&acirc;&euro;&trade;t find the product I am looking for. What do I do?</p>\r\n\r\n<p>We are always ready to hear for a new suggestions and will add an unavailable item to our inventory just for you. There is a &#39;Product Request&#39; feature or Customer Care Contact number (+8809611848484 or +8801999848484) to inform us your requirement.</p>\r\n\r\n<p>Q. Do you serve my area?</p>\r\n\r\n<p>We are currently serving inside Dhaka Metropolitan Area</p>\r\n\r\n<p>Q. What about the prices?</p>\r\n\r\n<p>Our prices are our own but we try our best to offer them to you at or below market prices. Our prices are the same as the local market and we are working hard to get them even lower! If you feel that any product is priced unfairly, please let us know.</p>\r\n\r\n<p>Q. How do you deliver?</p>\r\n\r\n<p>We use our own logistics to deliver. Our main motto is to reach the products to your location perfectly.</p>\r\n\r\n<p>Q. Why should we buy from you when I have a store nearby?</p>\r\n\r\n<p>We know it is your decission but our prices are sometimes lower than other e-commerce and superstores in Dhaka city. We also carry a larger variety than the other regular e-commerce &amp; super stores. So, we strongly hope that you will buy from us.</p>\r\n\r\n<p>Q. What is your policy on refunds?</p>\r\n\r\n<p>Ghore Bazar (ghorebazar.com) always here to providing best services to the customers. For any unforeseen situation, if we are not able to accomplish product(s) delivery or to provide our services, we will be informing you within 12 hours over phone or SMS. For any of our lacking, if there needed any refund, we will do it within next 7 days after as following. Calls for refunding will be processed under the following circumstances;<br />\r\nUnable to deliver any products or if any product(s) returned by customer against paid invoice<br />\r\nPlease contact us at +8809611848484 or +8801999848484 if you want to return an item.</p>\r\n\r\n<p>Q. Do you refund full amount if order cancelled?</p>\r\n\r\n<p>While a customer cancel any paid order and ask for refund, or we (ghorebazar.com) cancel any paid order, in terms of Debit/Credit card payment of any bank or bKash/Rocket, we (ghorebazar.com) will refund the full amount from our (ghorebazar.com) end. In case of Credit/Debit card payment, the customer will get back the same amount from his/her card issuer bank. But in case of payment from bKash/ Rocket, even if ghorebazar.com refunds FULL AMOUNT that a customer paid, they (bKash/Rocket) will deduct the transaction charge (according to their company policy) before refunding it to customer.</p>\r\n\r\n<p>Q. What about quality?</p>\r\n\r\n<p>We are committed to ensure the quality on all supplied items. Ghore Bazar (ghorebazar.com) is not selling any self manufacturing products, despite the fact that we are looking into the quality. We never challenge for quality guaranty for any products at our own responsibility. We have trust to the manufacturer/traders/ vendor that they always assure the quality on their entire manufacturing/ supplied product.</p>\r\n\r\n<p>Q. What is your discount policy?</p>\r\n\r\n<p>On some special occassions, we offer special discount code or promo code which has effect on the MRP or &#39;naturally priced&#39; product. An already discounted product will have no effect when a promo is applied. Let us be clear with an example. Say, maximum retail price (MRP) of product X is tk100 and product Y is tk200 and our website showing you the the same price. When we give you a promo offering 5% discount, then you may purchase the first item with tk 95 and the second item with tk190 at 5% discount. But if the second item (tk200) is given a special price tk160&nbsp;&nbsp;200&nbsp;&nbsp;before giving you a promo code, this means already 20% discount is given on this item. So if you apply promo, then only first item (tk100) will get 5% discount and the other item will not, as it is already a discounted item. A &#39;discount on discount&#39; is not a reality in a business.</p>\r\n', NULL, NULL, 1, ''),
(10, 'Privacy policy', 'Privacy policy', '<p>When you use our Website, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our website to make your experience safer and easier. More importantly, while doing so, we collect personal information from you that we consider necessary for achieving this purpose.<br />\r\nBelow are some of the ways in which we collect and store your information:<br />\r\n***We may collect various pieces of information if you seek to place an order for a product with us on the Site.<br />\r\n&nbsp;***We collect, store and process your data for processing your purchase on the Site and any possible later claims, and to provide you with our services. We may collect personal information including, but not limited to, your title, name, gender, date of birth, email address, postal address, delivery address (if different), telephone number, mobile number, fax number, payment details, payment card details or bank account details.<br />\r\n&nbsp;***We will use the information you provide to enable us to process your orders and to provide you with the services and information offered through our website and which you request. Further, we will use the information you provide to administer your account with us; verify and carry out financial transactions in relation to payments you make.<br />\r\n&nbsp;***We may pass your name and address on to a third party in order to make delivery of the product to you (for example to our courier or supplier). You must only submit to us the Site information which is accurate and not misleading and you must keep it up to date and inform us of changes.<br />\r\n&nbsp;***Your actual order details may be stored with us but for security reasons cannot be retrieved directly by us. However, you may access this information by logging into your account on the Site. Here you can view the details of your orders that have been completed, those which are open and those which are shortly to be dispatched and administer your address details, bank details ( for refund purposes) and any newsletter to which you may have subscribed. You undertake to treat the personal access data confidentially and not make it available to unauthorized third parties. We cannot assume any liability for misuse of passwords unless this misuse is our fault.<br />\r\n***We have in place appropriate technical and security measures to prevent unauthorized or unlawful access to or accidental loss of or destruction or damage to your information. When we collect data through the Site, we collect your personal details on a secure server. We use firewalls on our servers. Our security procedures mean that we may occasionally request proof of identity before we disclose personal information to you. You are responsible for protecting against unauthorized access to your password and to your computer.<br />\r\n*** We also store certain types of information whenever you interact with us. For example, like many websites, we use &quot;cookies,&quot; and we obtain certain types of information when your web browser accesses usbdfashion.com or advertisements and other content served by or on behalf of Usbdshopping.com on other websites.<br />\r\n***If you are concerned about your data you have the right to request access to the personal data which we may hold or process about you. You have the right to require us to correct any inaccuracies in your data free of charge.<br />\r\n***Information about our customers is an important part of our business, and we are not in the business of selling it to others</p>\r\n', NULL, NULL, 2, ''),
(11, 'Contact Us', 'ads', '', NULL, NULL, 2, ''),
(12, 'Our Story', NULL, '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', NULL, NULL, 2, '');
INSERT INTO `sd_posts` (`id`, `title`, `sort_desc`, `full_desc`, `img1`, `img2`, `type`, `date`) VALUES
(13, 'Seller Terms & Conditions', NULL, '<p>NOTICE: Sale of any Products or Services is expressly conditioned on Buyer&rsquo;s assent to these Terms and Conditions. Any acceptance of Seller&rsquo;s offer is expressly limited to acceptance of these Terms and Conditions and Seller expressly objects to any additional or different terms proposed by Buyer. No Buyer form shall modify these Terms and Conditions, nor shall any course of performance, course of dealing, or usage of trade operate as a modification or waiver of these Terms and Conditions. Any order to purchase products or receive services shall constitute Buyer&rsquo;s assent to these Terms and Conditions. Unless otherwise specified in the quotation, Seller&rsquo;s quotation shall expire thirty (30) days from its date and may be modified or withdrawn by Seller before receipt of Buyer&rsquo;s conforming acceptance.<br />\r\n1. Definitions.</p>\r\n\r\n<p>&ldquo;Buyer&rdquo; means the entity to which Seller is providing Products or Services under the Contract.<br />\r\n&ldquo;Contract&rdquo; means either the contract agreement signed by both parties, or the purchase order signed by Buyer and accepted by Seller in writing, for the sale of Products or Services, together with these Terms and Conditions, Seller&rsquo;s final quotation, the agreed scope(s) of work, and Seller&rsquo;s order acknowledgement. In the event of any conflict, the Terms and Conditions shall take precedence over other documents included in the Contract.<br />\r\n&ldquo;Contract Price&rdquo; means the agreed price stated in the Contract for the sale of Products and Services, including adjustments (if any) in accordance with the Contract.<br />\r\n&ldquo;Products&rdquo; means the equipment, parts, materials, supplies, and other goods Seller has agreed to supply to Buyer under the Contract.<br />\r\n&ldquo;Seller&rdquo; means the entity providing Products or performing Services under the Contract.<br />\r\n&ldquo;Services&rdquo;means the services Seller has agreed to perform for Buyer under the Contract.<br />\r\n&ldquo;Terms and Conditions&rdquo; means these &ldquo;General Terms and Conditions for the Sale of Products or Services&rdquo;, together with any modifications or additional provisions specifically stated in Seller&rsquo;s final quotation or specifically agreed upon by Seller in writing.<br />\r\n2. Delivery and Shipping Terms.<br />\r\n(a) For shipments that do not involve export Seller shall deliver Products to Buyer F.O.B. shipping point. For export shipments, Seller shall deliver Products to Buyer EXW Seller&rsquo;s facility or warehouse (Incoterms 2010). Buyer shall pay all delivery costs and charges or pay Seller&rsquo;s standard shipping charges plus handling. Partial deliveries are permitted. Seller may deliver Products in advance of the delivery schedule. Delivery times are approximate and are dependent upon prompt receipt by Seller of all information necessary to proceed with the work without interruption. If Products delivered do not correspond in quantity, type or price to those itemized in the shipping invoice or documentation, Buyer shall so notify Seller within ten (10) days after receipt.<br />\r\n(b) For shipments that do not involve export, title to Products shall pass to Buyer upon delivery in accordance with Section 2(a). For export shipments from a Seller facility or warehouse outside the U.S., title shall pass to Buyer upon delivery in accordance with Section 2(a). For shipments from the U.S. to another country, title shall pass to Buyer immediately after each item departs from the territorial land, seas and overlying airspace of the U.S. The 1982 United Nations Convention of the law of the Sea shall apply to determine the U.S. territorial seas. For all other shipments, title to Products shall pass to Buyer the earlier of (i) the port of export immediately after Products have been cleared for export or (ii) immediately after each item departs from the territorial land, seas and overlying airspace of the sending country. When Buyer arranges the export shipment, Buyer will provide Seller evidence of exportation acceptable to the relevant tax and custom authorities.<br />\r\n(c) Risk of loss shall pass to Buyer upon delivery pursuant to Section 2(a), except that for export shipments from the U.S., risk of loss shall transfer to Buyer upon title passage.<br />\r\n(d) If any Products to be delivered under this Contract cannot be shipped to or received by Buyer when ready due to any cause attributable to Buyer, Seller may ship the Products to a storage facility, including storage at the place of manufacture or repair, or to an agreed freight forwarder. If Seller places Products into storage, the following apply: (i) title and risk of loss immediately pass to Buyer, if they have not already passed, and delivery shall be deemed to have occurred; (ii) any amounts otherwise payable to Seller upon delivery or shipment shall be due; (iii) a fee of two percent (2%) of the value of the Products will be charged to Buyer; and (iv) when conditions permit and upon payment of all amounts due, Seller shall make Products and repaired equipment available to Buyer for delivery.<br />\r\n(e) Any liability of Seller for non-delivery of the Products shall be limited to replacing the Products within a reasonable time or adjusting the invoice respecting such Products to reflect the actual quantity delivered.<br />\r\n3. Cancellation of Purchase Order.<br />\r\nBuyer may cancel its order only with the prior written consent of Seller, which Seller may withhold in its sole discretion. All cancelations will be subject to payment to Seller of reasonable and proper cancelation charges. Buyer may return Products only at its sole cost and only with the prior written authorization of Seller, subject to a restocking fee as agreed by the parties. No returns of special, custom, or made-to-order Products will be permitted. No returns will be permitted more than sixty (60) days after delivery.<br />\r\n4. Title and Risk of Loss.<br />\r\nTitle and risk of loss passes to Buyer pursuant to the terms of Article 2. As collateral security for the full payment of the purchase price of the Products, Buyer hereby grants to Seller a lien on and security interest in and to all of the right, title and interest of Buyer in, to and under the Products, wherever located, and whether now existing or hereafter arising or acquired from time to time, and in all accessions thereto and replacements or modifications thereof, as well as all proceeds (including insurance proceeds) of the foregoing. The security interest granted under this provision constitutes a purchase money security interest under (i) if in the United States, the Texas Uniform Commercial Code or (ii) if in Canada, the Personal Property Security Act (Canada). Seller shall have the right to file any and all documents and take any action it deems necessary to fully establish protection of its security interest in the Products; however, the failure of Seller to file any such document shall not in any way act as a waiver of Seller&rsquo;s right to such security interest.<br />\r\n5. Assembly/Installation Work.<br />\r\nIn the event Buyer desires for Seller to perform any assembly/installation work, said work will be performed pursuant to a separate agreement to be entered into in writing by both Buyer and Seller detailing the terms of said work.<br />\r\n6. Set-up Charges.<br />\r\nA Non-recurring set-up charge may be imposed for any special tooling, including without limitation, dies, fixtures, molds and patterns acquired to manufacture items sold subsequent to this contract. Such special tooling shall be and remain Sellers property notwithstanding payment of any charges therefore by buyer unless otherwise agreed to on the face hereof. Payment of charges in connection with tooling or apparatus does not constitute ownership of same. All charges in connection with this contract will be imposed only with the knowledge and acceptance of Buyer. Seller shall have the right to alter, discard or otherwise dispose of any special tooling or other property at its sole discretion at any time.<br />\r\n7. Contract Price.<br />\r\n(a) Buyer shall purchase the Products and, if applicable, shall pay for the services provided, from Seller at the Contract Price. Prices are subject to change without prior notice and Seller shall thereafter notify Buyer of any price increases. In the event of a price increase, Buyer may cancel any undelivered portion of any order by written notice to Seller, provided such notice is received by Seller not more than ten (10) days after Buyer&rsquo;s receipt of Seller&rsquo;s notice of price increase. Upon cancellation, Buyer shall pay Seller: (1) the Contract Price for all Products which have been completed or are in the process of completion, (2) components or goods secured by Seller from outside sources for the performance of the Contract, and (3) special tooling and equipment procured for the performance of the Contract. All prices shall be confidential and Buyer shall not disclose such prices to any unrelated party.<br />\r\n(b) All Contract Prices are exclusive of all sales, use and excise taxes, and any other similar taxes, duties and charges of any kind imposed by any governmental authority on any amounts payable by Buyer. Buyer shall be responsible for all such charges, costs and taxes; provided, that, Buyer shall not be responsible for any taxes imposed on, or with respect to, Seller&rsquo;s income, revenues, gross receipts, personnel or real or personal property or other assets.<br />\r\n(c) The Contract Price excludes shipping and handling charges, which are the obligation of Buyer and will be added to the invoice if prepaid by Seller.<br />\r\n8. Payment Terms.<br />\r\n(a) Terms of payment are net cash thirty (30) days following the date of invoice, or by letter of credit paid upon submittal of shipping documents, all payable in the currency specified in the invoice.<br />\r\n(b) Buyer shall pay interest on all late payments at the lesser of the rate of 1.5% per month or the highest rate permissible under applicable law, calculated daily and compounded monthly. Buyer shall reimburse Seller for all costs incurred in collecting any late payments, including, without limitation, attorneys&rsquo; fees and court costs. In addition to all other remedies available under these Terms and Conditions or at law (which Seller does not waive by the exercise of any rights hereunder), Seller shall be entitled to suspend the delivery of any Products if Buyer fails to pay any amounts when due hereunder and such failure continues for thirty (30) days following written notice thereof.<br />\r\n(c) Buyer shall not withhold payment of any amounts due and payable by reason of any set-off of any claim or dispute with Seller, whether relating to Seller&rsquo;s breach, bankruptcy or otherwise.<br />\r\n(d) If Buyer disputes any invoice or portion thereof, it shall notify Seller in writing within thirty (30) days of receipt of said invoice, detail the reason for the dispute, and pay all undisputed amounts. All charges not timely disputed in writing shall be deemed to be undisputed and shall be due and payable as set forth above.<br />\r\n9. Disclaimer of Warranty.<br />\r\n(a) Seller warrants that all products manufactured by Seller shall, at the time of sale, comply with applicable Seller specifications. All products not manufactured by Seller are sold only with the warranties provided by the manufacturer of products, if any. SELLER MAKES NO OTHER WARRANTY WITH RESPECT TO THE PRODUCTS, AND DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. Seller personnel are not authorized to alter this disclaimer of warranty.<br />\r\n(b) All Products are sold for commercial use only and are not intended for use by consumers. Accordingly, Seller disclaims all warranties to consumers, as defined by the Magnuson-Moss Act and/or applicable Canadian Consumer Protection Act. Any inspection services provided by Seller at Buyer&rsquo;s request shall be provided as a customer service only and shall not be deemed to act as a warranty or approval of Buyer&rsquo;s installation, use, or maintenance of the Products, nor shall Seller be liable for failure to detect improper use, installation or maintenance of the Products by Buyer.<br />\r\n10. Limitation of Liability.<br />\r\n(a) IN NO EVENT SHALL SELLER BE LIABLE TO BUYER OR ANY THIRD PARTY FOR ANY LOSS OF USE, REVENUE OR PROFIT OR DIMINUTION IN VALUE, OR FOR ANY CONSEQUENTIAL, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR PUNITIVE DAMAGES WHETHER ARISING OUT OF BREACH OF CONTRACT, TORT (INCLUDING NEGLIGENCE) OR OTHERWISE, REGARDLESS OF WHETHER SUCH DAMAGES WERE FORESEEABLE AND WHETHER OR NOT SELLER HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, AND NOTWITHSTANDING THE FAILURE OF ANY AGREED OR OTHER REMEDY OF ITS ESSENTIAL PURPOSE.<br />\r\n(b) IN NO EVENT SHALL SELLER&rsquo;S AGGREGATE LIABILITY ARISING OUT OF OR RELATED TO THIS CONTRACT, WHETHER ARISING OUT OF OR RELATED TO BREACH OF CONTRACT, TORT (INCLUDING NEGLIGENCE) OR OTHERWISE, EXCEED THE TOTAL OF THE AMOUNTS PAID TO SELLER FOR THE PRODUCTS SOLD HEREUNDER OR, AS TO SERVICES, FOR THE AMOUNTS PAID TO SELLER FOR SERVICES PERFORMED HEREUNDER.<br />\r\n(c) This limitation of liability is a material basis for the parties&rsquo; bargain and reflects the bargained-for allocation of risks between Seller and Buyer, without which Seller would not have agreed to provide the Products or services at the price charged.<br />\r\n11. Indemnification.<br />\r\nSubject to Article 10 hereof, each of Buyer and Seller (as an &ldquo;Indemnifying Party&rdquo;) shall indemnify the other party (as an &ldquo;Indemnified Party&rdquo;) from and against claims brought by a third party, on account of personal injury or damage to the third party&rsquo;s tangible property, to the extent caused by the negligence of the Indemnifying Party in connection with this Contract. In the event the injury or damage is caused by joint or concurrent negligence of Buyer and Seller, the loss or expense shall be borne by each party in proportion to its degree of negligence. For purposes of Seller&rsquo;s indemnity obligation, no part of the Products is considered third party property.<br />\r\n12. Adequate Assurance.<br />\r\nSeller reserves the right by written notice to cancel any order or require full or partial payment or adequate assurance of performance from Buyer without liability to Seller in the event of: (i) Buyer&rsquo;s insolvency, (ii) Buyer&rsquo;s filing of a voluntary petition in bankruptcy, (iii) the appointment of a receiver or trustee for Buyer or (iv) the execution by Buyer of an assignment for the benefit of creditors. Seller reserves its right to suspend its performance until payment or adequate assurance of performance is received and also reserves its right to cancel Buyer&rsquo;s credit at any time for any reason.<br />\r\n13. Intellectual Property Rights.<br />\r\n(a) Seller is unable to guarantee that no patent rights, copyrights, trademarks, (user) rights, trade models or any other rights of third-parties are infringed by goods received from suppliers and/or buyers via Seller or third-parties via them, including but not limited to goods, models and drawings for the manufacture and/or delivery of certain Products.<br />\r\n(b) In the absence of written agreement to the contrary, Seller holds the copyrights and all rights of (industrial) property to the offers it has made and the designs, images, drawings (test) models, software, templates and other goods that it has issued.<br />\r\n14. Compliance with Laws.<br />\r\n(a) Seller shall take reasonable steps to ensure the Products are in conformity with applicable laws and regulations; however, Buyer acknowledges that Products may be used in various jurisdictions for various applications subject to disparate regulations and therefore that Seller cannot warrant compliance with all applicable laws and regulations. Seller disclaims any representation or warranty that the Products conform to federal, state or local laws, regulations, ordinances, codes or standards, except as expressly set forth by Seller in writing. Buyer shall comply with all applicable laws, regulations and ordinances. Seller may terminate this Contract if any governmental authority imposes antidumping or countervailing duties or any other penalties on Products.<br />\r\n(b) The products, items, technology or software covered by a quotation/order may be subject to various laws including U.S. and foreign export controls. Seller is committed to complying with all relevant export laws. If these items are of United States origin and are being exported from the United States, the following statement applies, &ldquo;These commodities, technology or software were exported from the United States in accordance with the Export Administration Regulations. Diversion contrary to U.S. law is prohibited.&rdquo; Buyer is responsible for applying for export licenses, if required, based on end user or country of ultimate destination. Seller&rsquo;s obligations are conditioned upon Buyer&rsquo;s compliance with all U.S. and other applicable trade control laws and regulations. Buyer shall not trans-ship, re-export, divert or direct Products other than in and to the ultimate country of destination declared by Buyer and specified as the country of ultimate destination on Seller&rsquo;s invoice. Buyer agrees to indemnify and hold Seller harmless from any and all costs, liabilities, penalties, sanctions and fines related to non-compliance with applicable export laws and regulations.<br />\r\n(c) Buyer represents and warrants that it is not subject to any trade sanctions imposed by the U.S., EU and/or UN and that it is in compliance and shall comply with all applicable laws and regulations relating to trade restrictions and/or export controls (including trade sanctions imposed by the US, EU and/or UN) with respect to Products sold hereunder, and shall provide evidence of compliance with the foregoing as Seller may reasonably request from time to time.<br />\r\n(d) Buyer represents and warrants that it is in compliance and shall comply with all applicable anti-bribery and anti-corruption laws, including the U.S. Foreign Corrupt Practices Act, and has not, directly or indirectly, offered, paid, promised, or authorized the giving of money or anything of value to any government official for the purpose of influencing any act or decision of such government official. Buyer is not on, nor is Buyer associated with any organization that is on, any list of entities maintained by the United States government that identifies parties to which the sale of goods or services is restricted or prohibited.<br />\r\n15. Nuclear and Hazardous Activities.<br />\r\nUnless specifically agreed to in writing by an authorized officer of Seller, Products shall not be used in connection with any nuclear facility or any other application or hazardous activity where the failure of a single component could cause substantial harm to persons or property. If so used, Buyer agrees to indemnify and hold Seller harmless from any and all causes of action, claims, costs, liabilities, and losses that arise from or relate to the use of Products in such facilities, applications, or activities.<br />\r\n16. Termination.<br />\r\nIn addition to any remedies that may be provided under these Terms and Conditions, Seller may terminate this Contract with immediate effect upon written notice to Buyer, if Buyer: (i) fails to pay any amount when due under this Contract and such failure continues for thirty (30) days after Buyer&rsquo;s receipt of written notice of nonpayment; (ii) has not otherwise performed or complied with any of these Terms and Conditions, in whole or in part; or (iii) becomes insolvent, files a petition for bankruptcy or commences or has commenced against it proceedings relating to bankruptcy, receivership, reorganization or assignment for the benefit of creditors.<br />\r\n17. Amendment and Modification.<br />\r\nThese Terms and Conditions may only be amended or modified in a writing which specifically states that it amends these Terms and Conditions and is signed by an authorized representative of each party.<br />\r\n18. Waiver.<br />\r\nNo waiver by Seller of any of the provisions of this Contract is effective unless explicitly set forth in writing and signed by Seller. No failure to exercise, or delay in exercising, any right, remedy, power or privilege arising from this Contract operates, or may be construed, as a waiver thereof. No single or partial exercise of any right, remedy, power or privilege hereunder precludes any other or further exercise thereof or the exercise of any other right, remedy, power or privilege.<br />\r\n19. Confidential Information.<br />\r\nAll non-public, confidential or proprietary information of Seller, including but not limited to specifications, samples, patterns, designs, plans, drawings, documents, data, business operations, customer lists, pricing, discounts or rebates, disclosed by Seller to Buyer, whether disclosed orally or disclosed or accessed in written, electronic or other form or media, and whether or not marked, designated or otherwise identified as &ldquo;confidential&rdquo; in connection with this Contract is confidential, solely for the use of performing this Contract and may not be disclosed or copied unless authorized in advance by Seller in writing. Upon Seller&rsquo;s request, Buyer shall promptly return all documents and other materials received from Seller. Seller shall be entitled to injunctive relief for any violation of this Section. This Section does not apply to information that is: (a) in the public domain; (b) known to Buyer at the time of disclosure; or (c) rightfully obtained by Buyer on a non-confidential basis from a third party.<br />\r\n20. Force Majeure.<br />\r\nSeller shall not be liable or responsible to Buyer, nor be deemed to have defaulted or breached this Contract, for any failure or delay in fulfilling or performing any term of this Contract when and to the extent such failure or delay is caused by or results from acts or circumstances beyond the reasonable control of Seller including, without limitation, acts of God, flood, fire, earthquake, explosion, governmental actions, war, invasion or hostilities (whether war is declared or not), terrorist threats or acts, riot, or other civil unrest, national emergency, revolution, insurrection, epidemic, lockouts, strikes or other labor disputes (whether or not relating to either party&rsquo;s workforce), or restraints or delays affecting carriers or inability or delay in obtaining supplies of adequate or suitable materials, materials or telecommunication breakdown or power outage.<br />\r\n21. Assignment.<br />\r\nBuyer shall not assign any of its rights or delegate any of its obligations under this Contract without the prior written consent of Seller. Any purported assignment or delegation in violation of this Section is null and void. No assignment or delegation relieves Buyer of any of its obligations under this Contract.<br />\r\n22. Relationship of the Parties.<br />\r\nThe relationship between the parties is that of independent contractors. Nothing contained in this Contract shall be construed as creating any agency, partnership, joint venture or other form of joint enterprise, employment or fiduciary relationship between the parties, and neither party shall have authority to contract for or bind the other party in any manner whatsoever.<br />\r\n23. Governing Law.<br />\r\nAll matters arising out of or relating to this Contract are governed by and construed in accordance with the internal laws of (i) the State of Texas if Buyer&rsquo;s place of business is in the U.S. or (ii) British Columbia if Buyer&rsquo;s place of business is in Canada, without giving effect to any choice or conflict of law provision or rule (whether of the State of Texas or any other jurisdiction) that would cause the application of the laws of any other jurisdiction. If the Contract includes the sale of Products and Buyer is outside of Seller&rsquo;s Country, the United Nations Convention on Contracts for the International Sale of Goods shall apply.<br />\r\n24. Submission to Jurisdiction.<br />\r\nAny legal suit, action or proceeding arising out of or relating to this Contract shall be instituted, depending upon the location of Buyer, in accordance with the following: (i) if Buyer&rsquo;s pertinent place of business is in the U.S., legal action shall be commenced in the federal courts of the United States of America or the courts of the State of Texas in each case located in the City of Dallas and Dallas County, or (ii) if Buyer&rsquo;s pertinent place of business is in Canada legal action shall be commenced in the federal or provincial courts located in British Columbia (Judicial District of Vancouver). If Buyer&rsquo;s pertinent place of business is outside the U.S. and Canada, the dispute shall be submitted to and finally resolved by arbitration under the Rules of Arbitration of the International Chamber of Commerce (&ldquo;ICC&rdquo;). The number of arbitrators shall be one, selected in accordance with the ICC rules, unless the amount in dispute exceeds the equivalent of U.S. $5,000,000, in which event it shall be three. When three arbitrators are involved, each party shall appoint one arbitrator, and those two shall appoint the third within thirty (30) days, who shall be the Chairman. The seat, or legal place, of arbitration, shall be London, England. The arbitration shall be conducted in English. In reaching their decision, the arbitrators shall give full force and effect to the intent of the parties as expressed in the Contract, and if a solution is not found in the Contract, shall apply the governing law of the Contract. The decision of the arbitrator(s) shall be final and binding upon both parties, and neither party shall seek recourse to a law court or other authority to appeal for revisions of the decision. Each party irrevocably submits to the exclusive jurisdiction of such courts in any such suit, action or proceeding arising out of these terms and conditions.<br />\r\n25. Notices.<br />\r\nAll notices, requests, consents, claims, demands, waivers and other communications hereunder (each, a &ldquo;Notice&rdquo;) shall be in writing and addressed to the parties at the addresses set forth on the face of the Contract or to such other address that may be designated by the receiving party in writing. All Notices shall be delivered by personal delivery, nationally recognized overnight courier (with all fees pre-paid), facsimile (with confirmation of transmission) or certified or registered mail (in each case, return receipt requested, postage prepaid). Except as otherwise provided in this Contract, a Notice is effective only (a) upon receipt of the receiving party, and (b) if the party giving the Notice has complied with the requirements of this Section.<br />\r\n26. Severability.<br />\r\nIf any term or provision of this Contract is invalid, illegal or unenforceable in any jurisdiction, such invalidity, illegality or unenforceability shall not affect any other term or provision of this Contract or invalidate or render unenforceable such term or provision in any other jurisdiction.<br />\r\n27. Survival.<br />\r\nProvisions of these Terms and Conditions which by their nature should apply beyond their terms will remain in force after any termination or expiration of these Terms and Conditions including, but not limited to, the following provisions: Insurance, Compliance with Laws, Confidential Information, Governing Law, Indemnification, Submission to Jurisdiction/Arbitration and Survival.<br />\r\n28. Complete Agreement.<br />\r\nThese General Terms and Conditions constitute the entire agreement between Buyer and Seller relating to the subject matter hereof, and supersede all prior and contemporaneous discussions, understandings, and agreements related to the subject matter hereof.<br />\r\n29. Language.<br />\r\nThe parties have expressly requested that this Contract and all related documents be drafted in the English language. Les parties ont express&eacute;ment exig&eacute; que la pr&eacute;sente convention et tous les documents connexes soient r&eacute;dig&eacute;s en anglais.</p>\r\n', NULL, NULL, 2, ''),
(14, 'Why People Love Bazaarsodai ?', NULL, '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', NULL, NULL, 2, ''),
(15, 'Contact us', NULL, '<ul>\r\n	<li>Address : House 10, Road 02, Sector 06. Uttara</li>\r\n	<li>&nbsp;Hotline : +880 1816140606</li>\r\n	<li>&nbsp;Email : sers3745@yahoo.com</li>\r\n</ul>\r\n', NULL, NULL, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `sd_settings`
--

CREATE TABLE `sd_settings` (
  `id` int(11) NOT NULL,
  `company` varchar(400) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `img` varchar(400) DEFAULT NULL,
  `activity` int(11) NOT NULL DEFAULT 1,
  `up_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_settings`
--

INSERT INTO `sd_settings` (`id`, `company`, `branch`, `mobile`, `email`, `address`, `img`, `activity`, `up_date`) VALUES
(1, 'Bazaarsodai', 'Bazaarsodai', '+88 01816140606', 'sers3745@yahoo.com', 'House 10, Road 02, Sector 06. Uttara Dhaka - 1230', 'thumb2-login-logo-1473138912.png', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `sd_slide_mng`
--

CREATE TABLE `sd_slide_mng` (
  `id` int(11) NOT NULL,
  `title_one` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `title_two` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `title_three` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `link` text DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `cat` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sd_slide_mng`
--

INSERT INTO `sd_slide_mng` (`id`, `title_one`, `title_two`, `title_three`, `link`, `img1`, `img2`, `cat`, `time`) VALUES
(2, '', '', '', '#', 'thumb3-web2-1683436990.jpg', 'thumb2-web2-1683436990.jpg', NULL, '2021-02-14 03:35:11'),
(3, '', '', '', '#', 'thumb3-web_banner_bzr_sodai-1683437024.jpg', 'thumb2-web_banner_bzr_sodai-1683437024.jpg', NULL, '2021-02-14 03:35:18'),
(6, '', '', '', '', 'thumb3-fg-1683450679.jpg', 'thumb2-fg-1683450679.jpg', NULL, '2023-04-01 15:17:12'),
(7, '', '', '', '', 'thumb3-web_bannr-1683451071.jpg', 'thumb2-web_bannr-1683451071.jpg', NULL, '2023-04-01 15:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `sd_social`
--

CREATE TABLE `sd_social` (
  `id` int(11) NOT NULL,
  `fc` text NOT NULL,
  `twitter` text NOT NULL,
  `google` text NOT NULL,
  `pin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `sd_social`
--

INSERT INTO `sd_social` (`id`, `fc`, `twitter`, `google`, `pin`, `instagram`) VALUES
(1, 'https://www.facebook.com/sarkarit', 'https://twitter.com/', 'https://www.google.com/', 'https://www.pinterest.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `sd_third_sub`
--

CREATE TABLE `sd_third_sub` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `sub_menu_id` int(11) NOT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `page_cn` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `img1` varchar(400) DEFAULT NULL,
  `img2` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `sub_menu` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(200) NOT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `page_cn` text DEFAULT NULL,
  `img1` varchar(400) DEFAULT NULL,
  `img2` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `sub_menu`, `menu_id`, `menu_name`, `meta_desc`, `meta_key`, `page_cn`, `img1`, `img2`) VALUES
(3, 'Rich & Dal', 50, '', '   ', '   ', '', NULL, NULL),
(7, 'Fruits & Vegetables', 20, '', ' ', ' ', '', NULL, NULL),
(9, 'Cooking', 20, '', ' ', ' ', '', NULL, NULL),
(10, 'Sauces & Pickles', 20, '', ' ', ' ', '', NULL, NULL),
(14, 'Fresh Fruits ', 97, '', '    ', '    ', '', NULL, NULL),
(15, 'Sauces & Pickles', 50, '', ' ', ' ', '', NULL, NULL),
(16, 'Dairy & Eggs', 50, '', ' ', ' ', '', NULL, NULL),
(23, 'Fresh Vegetables', 97, '', '    ', '    ', '', NULL, NULL),
(24, 'Oil & Ghee', 50, '', '  ', '  ', '', NULL, NULL),
(25, 'Dried Fish', 77, '', ' ', ' ', '', NULL, NULL),
(26, 'Frozen Fish', 77, '', ' ', ' ', '', NULL, NULL),
(27, 'Meat', 77, '', ' ', ' ', '', NULL, NULL),
(28, 'Chicken & Poultry', 77, '', ' ', ' ', '', NULL, NULL),
(29, 'Toy Vehicles', 88, '', ' ', ' ', '', NULL, NULL),
(30, 'Dolls & Action Figures', 88, '', ' ', ' ', '', NULL, NULL),
(31, 'Breads & Bakery Biscuits', 86, '', '  ', '  ', '', NULL, NULL),
(32, 'Milk & Dairy', 50, '', ' ', ' ', '', NULL, NULL),
(33, 'Diapers & Wipes', 95, '', ' ', ' ', '', NULL, NULL),
(34, 'Others ', 95, '', ' ', ' ', '', NULL, NULL),
(35, 'Dishwashing & Laundry', 96, '', ' ', ' ', '', NULL, NULL),
(36, 'Others', 96, '', ' ', ' ', '', NULL, NULL),
(37, 'Local Soft Deinks ', 75, '', ' ', ' ', '', NULL, NULL),
(38, 'Foreign Soft Drinks  ', 75, '', ' ', ' ', '', NULL, NULL),
(39, 'Local Juice', 75, '', ' ', ' ', '', NULL, NULL),
(40, 'Foreign Juice', 75, '', ' ', ' ', '', NULL, NULL),
(41, 'Baking', 50, '', ' ', ' ', '', NULL, NULL),
(42, 'Candy & Chocolate', 50, '', ' ', ' ', '', NULL, NULL),
(43, 'Salt & Sugar', 50, '', ' ', ' ', '', NULL, NULL),
(44, 'Parathas & Roti', 98, '', ' ', ' ', '', NULL, NULL),
(45, 'Snacks', 98, '', ' ', ' ', '', NULL, NULL),
(46, 'Water', 75, '', ' ', ' ', '', NULL, NULL),
(48, 'Spices', 50, '', ' ', ' ', '', NULL, NULL),
(49, 'Formula & Energy Boosters', 95, '', ' ', ' ', '', NULL, NULL),
(50, 'Baby Milk & Foods', 95, '', ' ', ' ', '', NULL, NULL),
(51, 'Bath & Skincare', 95, '', ' ', ' ', '', NULL, NULL),
(52, 'Feeders', 95, '', ' ', ' ', '', NULL, NULL),
(53, 'Baby Accessories', 95, '', ' ', ' ', '', NULL, NULL),
(54, 'Toys, Gaming & Furniture', 95, '', ' ', ' ', '', NULL, NULL),
(55, 'Baby Washing Detergent', 95, '', ' ', ' ', '', NULL, NULL),
(56, 'Ready Mix', 50, '', ' ', ' ', '', NULL, NULL),
(57, 'Baking Essentials', 50, '', ' ', ' ', '', NULL, NULL),
(58, 'Powder Drinks & Syrups', 75, '', ' ', ' ', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `address` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `user_id`, `name`, `mobile`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 4, 'Robiul Karim', '+8801625804712', 'mrkadmin@gmail.com', 'Natore', '2023-05-25 11:48:18', '0000-00-00 00:00:00'),
(2, 1, 'AKLIMA AKTER AKHI', '01727404933', 'akhi@gmail.com', 'shewrapara-dhaka', '2023-05-26 11:37:48', '0000-00-00 00:00:00'),
(3, 20, 'Robiul Karim', '+8801625804712', 'mrkadmin@gmail.com', 'Natore', '2023-05-30 14:07:18', '0000-00-00 00:00:00'),
(4, 19, 'Robiul Karim', '+8801625804712', 'mrkadmin@gmail.com', 'Natore', '2023-05-31 12:32:09', '0000-00-00 00:00:00'),
(5, 21, 'ruhul', '01819449320', 'admin@sarkarit.com', 'uttara 1', '2023-06-04 12:11:22', '0000-00-00 00:00:00'),
(6, 21, 'ruhul', '01819449320', 'admin@sarkarit.com', 'uttara 2', '2023-06-04 12:12:01', '0000-00-00 00:00:00'),
(7, 26, 'ruhul', '333', 'bazaarsoday@gmail.com', 'ggg', '2023-06-17 18:31:58', '0000-00-00 00:00:00'),
(12, 33, 'Test', '01911368394', 'mniprinceTEST@gmail.com', 'DHAKA', '2023-08-12 10:10:51', '0000-00-00 00:00:00'),
(13, 35, 'Monirul Islam Prince', '01711368394', 'mniprinceapp@gmail.com', 'Central Road, Dhanmondi, Dhaka, bangladesh', '2023-09-09 06:24:06', '0000-00-00 00:00:00'),
(14, 35, 'Monirul Islam Prince', '01711368395', 'mniprince@gmail.com', 'Central Road, Dhanmondi, Dhaka, bangladesh', '2023-09-09 06:43:49', '0000-00-00 00:00:00'),
(15, 35, 'Monirul Islam Prince', '01711368377', 'mniprinceapp@gmail.com', 'Central Road, Dhanmondi, Dhaka, bangladesh', '2023-09-09 06:52:27', '0000-00-00 00:00:00'),
(19, 40, 'Sister Homes', '0171111111111', 'sister@gmail.com', 'Mohakhali, Dhaka', '2023-10-07 11:30:51', '0000-00-00 00:00:00'),
(20, 35, 'test', '01712056389', 'info@gmail.com', 'aaaaaaaaaa', '2023-10-07 11:37:12', '0000-00-00 00:00:00'),
(21, 24, 'akhi', '0178459652', 'admin@sarkarit.com', 'mohammodpur dhaka', '2023-10-07 12:05:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_roll`
--

CREATE TABLE `user_roll` (
  `id` int(11) NOT NULL,
  `roll` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_roll`
--

INSERT INTO `user_roll` (`id`, `roll`) VALUES
(1, 'admin'),
(2, 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals`
--
ALTER TABLE `flash_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals_item`
--
ALTER TABLE `flash_deals_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `product_request`
--
ALTER TABLE `product_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rk_blog`
--
ALTER TABLE `rk_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roll_permission`
--
ALTER TABLE `roll_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_person`
--
ALTER TABLE `sales_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_ads`
--
ALTER TABLE `sd_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_cart`
--
ALTER TABLE `sd_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_client`
--
ALTER TABLE `sd_client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `sd_clr_cat`
--
ALTER TABLE `sd_clr_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_color`
--
ALTER TABLE `sd_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_coupon`
--
ALTER TABLE `sd_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_headline`
--
ALTER TABLE `sd_headline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_home_edit`
--
ALTER TABLE `sd_home_edit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_item_l`
--
ALTER TABLE `sd_item_l`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_merchant`
--
ALTER TABLE `sd_merchant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `sd_more_img`
--
ALTER TABLE `sd_more_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_order_list`
--
ALTER TABLE `sd_order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_order_more`
--
ALTER TABLE `sd_order_more`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_page_setup`
--
ALTER TABLE `sd_page_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_payments`
--
ALTER TABLE `sd_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_posts`
--
ALTER TABLE `sd_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_settings`
--
ALTER TABLE `sd_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_slide_mng`
--
ALTER TABLE `sd_slide_mng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_social`
--
ALTER TABLE `sd_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sd_third_sub`
--
ALTER TABLE `sd_third_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roll`
--
ALTER TABLE `user_roll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `flash_deals_item`
--
ALTER TABLE `flash_deals_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `product_request`
--
ALTER TABLE `product_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `rk_blog`
--
ALTER TABLE `rk_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roll_permission`
--
ALTER TABLE `roll_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sales_person`
--
ALTER TABLE `sales_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sd_ads`
--
ALTER TABLE `sd_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sd_cart`
--
ALTER TABLE `sd_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sd_client`
--
ALTER TABLE `sd_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sd_clr_cat`
--
ALTER TABLE `sd_clr_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT for table `sd_color`
--
ALTER TABLE `sd_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sd_coupon`
--
ALTER TABLE `sd_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sd_headline`
--
ALTER TABLE `sd_headline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sd_home_edit`
--
ALTER TABLE `sd_home_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sd_item_l`
--
ALTER TABLE `sd_item_l`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT for table `sd_merchant`
--
ALTER TABLE `sd_merchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sd_more_img`
--
ALTER TABLE `sd_more_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `sd_order_list`
--
ALTER TABLE `sd_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `sd_order_more`
--
ALTER TABLE `sd_order_more`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `sd_page_setup`
--
ALTER TABLE `sd_page_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sd_payments`
--
ALTER TABLE `sd_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sd_posts`
--
ALTER TABLE `sd_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sd_settings`
--
ALTER TABLE `sd_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sd_slide_mng`
--
ALTER TABLE `sd_slide_mng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sd_social`
--
ALTER TABLE `sd_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sd_third_sub`
--
ALTER TABLE `sd_third_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_roll`
--
ALTER TABLE `user_roll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
