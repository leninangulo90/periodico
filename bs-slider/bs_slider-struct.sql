-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2014 a las 05:21:26
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Base de datos: `bs_slider`
--
CREATE DATABASE IF NOT EXISTS `bs_slider` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bs_slider`;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `autosgta`
--
CREATE TABLE IF NOT EXISTS `autosgta` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;
