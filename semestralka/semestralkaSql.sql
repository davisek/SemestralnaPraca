-- --------------------------------------------------------
-- Hostiteľ:                     127.0.0.1
-- Verze serveru:                8.0.30 - MySQL Community Server - GPL
-- OS serveru:                   Win64
-- HeidiSQL Verzia:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Exportování dat pro tabulku pizzeria_semestralnapraca.admin_users: ~0 rows (přibližně)
INSERT INTO `admin_users` (`id`, `user_name`, `user_surname`, `user_loginName`, `user_password`, `user_role`) VALUES
	(1, 'David', 'Barta', 'admin', 'admin', 'waiter');

-- Exportování dat pro tabulku pizzeria_semestralnapraca.pizza_menu_list: ~6 rows (přibližně)
INSERT INTO `pizza_menu_list` (`id`, `pizza_name`, `pizza_ingrediens`, `pizza_weight`, `pizza_price`, `pizza_img`) VALUES
	(1, 'Quatro Stagioni', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.5, 'quatroStagioni'),
	(2, 'Capriciosa', 'paradajková omáčka, syr Mozzarella, šunka, šampiňóny, kukurica, olivy', 620, 5.4, 'capriciosa'),
	(3, 'Quasimodo', 'paradajková omáčka, syr Mozzarella, šampiňóny, syr Plesnivec, saláma', 680, 5.6, 'quasimodo'),
	(4, 'Brokolicová', 'smotana, brokolica, syr Niva, syr Mozzarella', 670, 4.8, 'brokolicova'),
	(5, 'Zeleninová Ratatuile', 'paradajková omáčka, syr Mozzarella, paprika, cuketa, šampiňóny, baklažán, cesnak, cherry paradajky, olivový olej', 760, 5.4, 'zeleninovaRatatuile'),
	(6, 'Rukola', 'paradajková omáčka, parmská šunka, rukola, syr Mozzarella, cherry paradajky, Parmezán', 660, 6.5, 'rukola');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
