
INSERT INTO `ido2`.`users` (`iduser`, `user`, `password`, `state`) VALUES ('1', 'admin', '$2y$10$eiqJlhd3ZfSlrApc.WFP9OPf0mSMEEC/Ke9TmXvUX6rwkh8ILhMqC', '1');
INSERT INTO `ido2`.`perfil` (`idperfil`, `perfil`, `estado`) VALUES ('1', 'ADMIN', '1');
INSERT INTO `ido2`.`user_perfil` (`iduser_perfil`, `iduser`, `idperfil`, `estado`) VALUES ('1', '1', '1', '1');
INSERT INTO `ido2`.`modulo` (`idmodulo`, `modulo`, `icono`) VALUES ('1', 'Catálogo', 'fas fa-store');
INSERT INTO `ido2`.`submodulo` (`idsubmodulo`, `submodulo`, `idmodulo`, `icono`) VALUES ('1', 'Producto', '1', 'fas fa-tshirt');
INSERT INTO `ido2`.`submodulo` (`idsubmodulo`, `submodulo`, `idmodulo`, `icono`) VALUES ('2', 'Categoría', '1', 'fas fa-th');
INSERT INTO `ido2`.`submodulo` (`idsubmodulo`, `submodulo`, `idmodulo`, `icono`) VALUES ('3', 'Atributos y Características', '1', 'fas fa-list');
INSERT INTO `ido2`.`submodulo` (`idsubmodulo`, `submodulo`, `idmodulo`, `icono`) VALUES ('4', 'Stocks', '1', 'fas fa-boxes');
INSERT INTO `ido2`.`permiso` (`idpermiso`, `idmodulo`, `idperfil`) VALUES ('1', '1', '1');
UPDATE `ido2`.`submodulo` SET `url` = '/admin/producto' WHERE (`idsubmodulo` = '1');
UPDATE `ido2`.`submodulo` SET `url` = '/admin/categoria' WHERE (`idsubmodulo` = '2');
UPDATE `ido2`.`submodulo` SET `url` = '/admin/atycar' WHERE (`idsubmodulo` = '3');
UPDATE `ido2`.`submodulo` SET `url` = '/admin/stocks' WHERE (`idsubmodulo` = '4');
