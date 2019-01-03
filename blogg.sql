-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 1 月 03 日 08:14
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogg`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `email`, `created`) VALUES
(13, 'Ronnie Coleman', 'jhbuyb9ub', 'sazae@gmail.com', '2019-01-02 21:53:13');

-- --------------------------------------------------------

--
-- テーブルの構造 `post`
--

CREATE TABLE `post` (
  `no` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `picture_path` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `post`
--

INSERT INTO `post` (`no`, `title`, `content`, `picture_path`, `time`) VALUES
(30, 'hogeほげホゲ', 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト', '20190102133645bryana-holly.png', '2019-01-02 12:36:47'),
(34, '初めまして！', '<h4>はじめまして！</h4>\r\n<h4>森下と申します。</h4>\r\n\r\n<h4>訪問してくださり、ありがとうございます。</h4>\r\n<h4>今日から、自分の勉強も兼ねてブログを書くことにしました。</h4><br>\r\n\r\n<h4>簡単に自己紹介をします。</h4>\r\n<div class=\"well\">\r\n<h4>名前：森下</h4>\r\n<h4>誕生日：5月7日</h4>\r\n<h4>血液型：AB型</h4>\r\n<h4>趣味：筋トレ、Netflix、YouTube<br>\r\n特に、スクワットが好きですが、スクワットをしている人はもっと好きです。<br>\r\nスクワットしている方、ぜひお尻あいになりましょう。<br>\r\nとりあえず、僕のお尻も貼っておきます。</h4>\r\n</div>\r\n\r\n<img src=\"images/christmas.jpg\"><br><br>\r\n\r\n<h4>学生生活：大学を休学し、アメリカ・ニューヨークにある大学で１学期間の留学を経て、フィリピン・セブ島で７ヶ月間インターンシップをしておりました。</h4>\r\n\r\n<h4>このウェブサイトが提供している機能としては次の3つが挙げられます。</h4>\r\n<div class=\"well\">\r\n<h4>①フィットネスに関する情報発信</h4>\r\n<h4>②フィットネスに関するアプリケーションの提供</h4>\r\n<h4>③フィットネスに関する相談受付</h4>\r\n</div>\r\n\r\n<h3>①フィットネスに関する情報発信</h3>\r\n<h4>僕自身、3年ほど筋トレしており、少しずつですが肉体的な変化を実感しております。</h4>\r\n<h4>筋トレやダイエットは知識が最も重要です。</h4>\r\n<h4>自分自身、ブログ執筆を通して勉強しながら、科学的根拠に基づいたトレーニングのメソッドなどを紹介していきます。</h4><br>\r\n\r\n<h3>②フィットネスに関するアプリケーションの提供</h3>\r\n<h4>現時点で提供しているアプリケーションとして、1Repのマックスを計測するアプリやBMI/FFMIを計測するアプリの2種類あります。</h4>\r\n<h4>まだまだ作成していきますので、楽しみにしていてください。</h4><br>\r\n\r\n<h3>③フィットネスに関する相談受付</h3>\r\n<h4>フィットネスに関してご質問がございましたら、CONTACTをクリックをしてご相談ください。僕が持っている知識でよければ丁寧にご回答します。</h4><br>\r\n\r\n<h4>というわけで、これからどうぞよろしくお願いします！</h4>', '20190102144351christmas.jpg', '2019-01-02 13:43:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD UNIQUE KEY `no` (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
