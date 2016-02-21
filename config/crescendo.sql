-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Şub 2016, 21:59:37
-- Sunucu sürümü: 5.6.20
-- PHP Sürümü: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=19 ;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `picture`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'TinyMCE | The Most Advanced WYSIWYG HTML Editor', 'tinymce-|-the-most-advanced-wysiwyg-html-editor', '<p>TinyMCE is not only easy to extend, it is also incredibly flexible. Most plugins are simple to configure, while the core editor has nearly 100 customization options, from simple modifications to the most arcane edge cases.</p>', '10a5516179438301044e5db7c7c967381456080647.jpg', '2016-02-21 19:50:47', '2016-02-21 19:53:11', 1),
(2, 'Smarty Template Engine', 'smarty-template-engine', '<p>Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic. This implies that PHP code is application logic, and is separated from the presentation.</p>\r\n<h2>Templates: Two camps of thought</h2>\r\n<p>When it comes to templating in PHP, there are basically two camps of thought. The first camp exclaims that "PHP is a template engine". This approach simply mixes PHP code with HTML. Although this approach is fast from a pure script-execution point-of-view, many would argue that the PHP syntax is messy and difficult to maintain when mixed with presentation. PHP works well for programming, but not so well for templating.</p>\r\n<p>&nbsp;</p>\r\n<p>The second camp exclaims that presentation should be void of all programming code, and instead use simple tags to indicate where application content is revealed. This approach is common with other template engines (and other programming languages), and is the approach that Smarty takes. The idea is to keep the templates focused squarely on presentation, void of application code, and with as little overhead as possible.</p>\r\n<h2>Why is separating PHP from templates important?</h2>\r\n<p>There are many benefits of separating PHP code from templates, some of which are:</p>\r\n<ul>\r\n<li><strong>SYNTAX:</strong> Templates typically consist of semantic markup such as HTML. PHP syntax works well for application code, but quickly degenerates when mixed with HTML. Smarty''s simple <strong>{tag}</strong> syntax is designed specifically to express presentation. Smarty focuses your templates on presentation and less on "code". This lends to quicker template deployment and easier maintenance. Smarty syntax requires no working knowledge of PHP, and is intuitive for programmers and non-programmers alike.</li>\r\n<li><strong>FEATURES:</strong> The template engine has many features for presentation that would otherwise need to be developed, tested and maintained in your own application code. Tags also mask the complexity of PHP statements. For example:&nbsp;</li>\r\n</ul>\r\n<p>&nbsp;php</p>\r\n<p>&nbsp;</p>\r\n<p>smarty</p>\r\n<p><code>{$title|escape|lower}</code></p>\r\n<p>&nbsp;</p>', '96b5ffc24c3d71c18a355e897d30155f1456083257.jpg', '2016-02-21 20:34:17', '2016-02-21 20:39:58', 1),
(3, 'PHP ActiveRecord - An easy to use ORM for PHP', 'php-activerecord---an-easy-to-use-orm-for-php', '<p>php-activerecord is an open source ORM library based on the ActiveRecord pattern. It aims to massively simplify the interactions with your database and eliminate the chore of hand written SQL for common operations. Unlike other ORMs, you do not need to use any code generators nor maintain mapping files for your tables. This library was inspired by Ruby on Rails'' implementation and therefore borrows many of its conventions and ideas. The best place to get started is by checking out the Guides below! The library is licensed under the MIT License and so you are completely free to do whatever you want with it.</p>', '8fdf1671bc69b1932b670d81d29d89c91456084087.jpg', '2016-02-21 20:48:07', '2016-02-21 20:48:07', 1),
(4, 'Easy and Quickly Coding', 'easy-and-quickly-coding', '<p>Crescendo is elastic and developable mvc based php framework.</p>\r\n<p>Easy to use ORM&nbsp;for php with activerecord library.</p>\r\n<p>Clean templates for front-end developers with smarty template engine</p>\r\n<p>Use multiple themes with layouts support.</p>', '4feafb89c1eb6e0dd04e235aa88345981456084976.jpg', '2016-02-21 21:02:56', '2016-02-21 21:02:56', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `picture` varchar(255) NOT NULL DEFAULT 'default.png',
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `admin`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', '5e0103a89603b6dce4e46a9e892d8ab3c2f2d56d31f4e61f669b4a01b77e053e', 'Onur', 'Altınsoy', 0, 'ad7bc863acc50ad3b747c51c2f85b4311456086185.jpg', '2016-02-21 21:47:18', '2016-02-21 21:47:18');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `slug` (`slug`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `username` (`username`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
