-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- ホスト: mysql1.php.xdomain.ne.jp
-- 生成時間: 2022 年 5 月 30 日 14:43
-- サーバのバージョン: 5.0.95
-- PHP のバージョン: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- データベース: `yamadashu2_main`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `todos`
--

CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` varchar(200) NOT NULL,
  `is_done` tinyint(1) default '0',
  `title` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのデータをダンプしています `todos`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- テーブルのデータをダンプしています `users`
--

INSERT INTO `users` (`id`, `name`, `user_id`, `password`) VALUES
(1, 'webedge', 'webedge', 'webedge'),
(2, 'yamada', 'yamada', 'yamada');
