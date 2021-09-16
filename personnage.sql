CREATE DATABASE IF NOT EXISTS `castagne` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `castagne`;

CREATE TABLE `perso` (
    `id` int(11) NOT NULL,
    `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `force` int(11) NOT NULL,
    `degats` int(11) NOT NULL,
    `niveau` int(11) NOT NULL,
    `experience` int(11) NOT NULL
)   ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `perso` ADD PRIMARY KEY (`id`);

ALTER TABLE `perso` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;