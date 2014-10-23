create database laravel_test8;
use laravel_test8;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `real_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;


INSERT INTO `users` (`id`, `email`, `real_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'email1@email.com', 'user1', '123456', '2014-10-23 11:22:03', '2014-10-23 11:22:03'),
(2, 'email2@email.com', 'User2', '123456', '2014-10-23 11:22:20', '2014-10-23 11:22:20'),
(3, 'email3@email.com', 'User3', '123456', '2014-10-23 11:22:36', '2014-10-23 11:22:36');