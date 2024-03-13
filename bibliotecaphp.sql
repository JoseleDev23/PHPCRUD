-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-03-2024 a las 18:11:40
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecaphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

DROP TABLE IF EXISTS `libros`;
CREATE TABLE IF NOT EXISTS `libros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `anio_publicacion` int DEFAULT NULL,
  `disponibilidad` enum('disponible','prestado') NOT NULL DEFAULT 'disponible',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `genero`, `anio_publicacion`, `disponibilidad`) VALUES
(1, 'El Hobbit', 'J.R.R. Tolkien', 'Fantasía', 2000, 'disponible'),
(2, 'Cien años de soledad', 'Gabriel García Márquez', 'Realismo mágico', 1967, 'disponible'),
(3, 'El Código Da Vinci', 'Dan Brown', 'Misterio', 2003, 'disponible'),
(4, 'Orgullo y Prejuicio', 'Jane Austen', 'Romance', 1813, 'disponible'),
(5, 'La Sombra del Viento', 'Carlos Ruiz Zafón', 'Misterio', 2001, 'disponible'),
(6, 'Harry Potter y la Piedra Filosofal', 'J.K. Rowling', 'Fantasía', 1997, 'disponible'),
(7, 'Fahrenheit 451', 'Ray Bradbury', 'Ciencia ficción', 1953, 'disponible'),
(8, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 'Novela', 1605, 'disponible'),
(9, 'Crimen y Castigo', 'Fyodor Dostoevsky', 'Drama', 1866, 'prestado'),
(10, 'Mujercitas', 'Louisa May Alcott', 'Literatura infantil', 1868, 'prestado'),
(11, 'Moby Dick', 'Herman Melville', 'Aventura', 1851, 'disponible'),
(12, 'El Señor de los Anillos', 'J.R.R. Tolkien', 'Fantasía épica', 1954, 'prestado'),
(13, 'Anna Karenina', 'Leo Tolstoy', 'Drama', 1877, 'disponible'),
(14, 'Rebelión en la Granja', 'George Orwell', 'Sátira', 1945, 'prestado'),
(15, 'Los Pilares de la Tierra', 'Ken Follett', 'Histórica', 1989, 'prestado'),
(16, 'El Principito', 'Antoine de Saint-Exupéry', 'Literatura infantil', 1943, 'prestado'),
(17, 'El Perfume', 'Patrick Süskind', 'Drama', 1985, 'disponible'),
(18, 'La Odisea', 'Homero', 'Epopeya', 800, 'disponible'),
(21, 'Dracula', 'Seba', ' Binario', 2023, ''),
(20, 'Alicia en el País de las Maravillas', 'Lewis Carroll', 'Literatura infantil', 1865, 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `contrasena` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dni` varchar(20) NOT NULL,
  `edad` int DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `rol` enum('admin','usuario') NOT NULL DEFAULT 'usuario',
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo_electronico` (`correo_electronico`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo_electronico`, `contrasena`, `dni`, `edad`, `direccion`, `rol`) VALUES
(7, 'jose', '12@gmail.com', '2323', '4567894f', 13, 'gsfhetah', 'usuario'),
(8, 'joto', '23@Hotmail.com', '2323', '12345678s', 28, 'fgeqrgeqg', 'admin'),
(10, 'Laura', 'lauradyps@gmail.com', '123', '4352565426g', 23, 'Comares', 'admin'),
(9, 'juan', '123@hotmail.com', '1212', 'zcvZV', 34, 'sdfDSFa', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
