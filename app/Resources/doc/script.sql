SET FOREIGN_KEY_CHECKS = 0;

TRUNCATE TABLE sex;
TRUNCATE TABLE age;
TRUNCATE TABLE weight;

SET FOREIGN_KEY_CHECKS = 0;

ALTER TABLE sex AUTO_INCREMENT=1;
ALTER TABLE age AUTO_INCREMENT=1;
ALTER TABLE weight AUTO_INCREMENT=1;

INSERT INTO `sex`
	(`id`,`lib`,`cod`,`ordre`,`actif`,`selected`)
VALUES
	(null, 'Homme', 'H', 1, 1,1),
	(null, 'Femme', 'F', 2, 1,0);

INSERT INTO `age`
	(`id`,`name`,`min`,`max`)
VALUES
	(null ,'Poussinets', 6, 6 ),
	(null ,'Mini-Poussins', 7, 8),
	(null ,'Poussins', 9, 10),
	(null ,'Benjamins', 11, 12),
	(null ,'Minimes', 13, 14),
	(null ,'Cadets', 15, 17),
	(null ,'Juniors', 18, 20),
	(null ,'Seniors', 21, 39),
	(null ,'Vétéran', 40, 100);


INSERT INTO `weight`
(`id`,`sex_id`,`name`,`min`,`max`, `age_id`)
VALUES
(null,1,'-30kg',0,30,4),
(null,1,'-34kg',30,34,4),
(null,1,'-38kg',34,38,4),
(null,1,'-42kg',38,42,4),
(null,1,'-46kg',42,46,4),
(null,1,'-50kg',46,50,4),
(null,1,'-55kg',50,55,4),
(null,1,'-60kg',55,60,4),
(null,1,'-34kg',0,34,5),
(null,1,'-38kg',34,38,5),
(null,1,'-42kg',38,42,5),
(null,1,'-46kg',42,46,5),
(null,1,'-50kg',46,50,5),
(null,1,'-55kg',50,55,5),
(null,1,'-60kg',55,60,5),
(null,1,'-66kg',60,66,5),
(null,1,'-46kg',42,46,6),
(null,1,'-50kg',46,50,6),
(null,1,'-55kg',50,55,6),
(null,1,'-60kg',55,60,6),
(null,1,'-66kg',60,66,6),
(null,1,'-73kg',66,73,6),
(null,1,'-81kg',73,81,6),
(null,1,'-90kg',81,90,6),
(null,1,'-55kg',50,55,7),
(null,1,'-60kg',55,60,7),
(null,1,'-66kg',60,66,7),
(null,1,'-73kg',66,73,7),
(null,1,'-81kg',73,81,7),
(null,1,'-90kg',81,90,7),
(null,1,'-100kg',90,100,7),
(null,1,'+100kg',100,200,7),
(null,1,'-60kg',55,60,8),
(null,1,'-66kg',60,66,8),
(null,1,'-73kg',66,73,8),
(null,1,'-81kg',73,81,8),
(null,1,'-90kg',81,90,8),
(null,1,'-100kg',90,100,8),
(null,1,'+100kg',100,200,8),
(null,1,'-60kg',55,60,9),
(null,1,'-66kg',60,66,9),
(null,1,'-73kg',66,73,9),
(null,1,'-81kg',73,81,9),
(null,1,'-90kg',81,90,9),
(null,1,'-100kg',90,100,9),
(null,1,'+100kg',100,200,9),
(null,2,'-32kg',0,32,4),
(null,2,'-36kg',32,36,4),
(null,2,'-40kg',36,40,4),
(null,2,'-44kg',40,44,4),
(null,2,'-48kg',44,48,4),
(null,2,'-52kg',48,52,4),
(null,2,'-57kg',52,57,4),
(null,2,'-63kg',57,63,4),
(null,2,'+63kg',63,100,4),
(null,2,'-36kg',32,36,5),
(null,2,'-40kg',36,40,5),
(null,2,'-44kg',40,44,5),
(null,2,'-48kg',44,48,5),
(null,2,'-52kg',48,52,5),
(null,2,'-57kg',52,57,5),
(null,2,'-63kg',57,63,5),
(null,2,'-70kg',63,70,5),
(null,2,'+70kg',70,100,5),
(null,2,'-40kg',36,40,6),
(null,2,'-44kg',40,44,6),
(null,2,'-48kg',44,48,6),
(null,2,'-52kg',48,52,6),
(null,2,'-57kg',52,57,6),
(null,2,'-63kg',57,63,6),
(null,2,'-70kg',63,70,6),
(null,2,'+70kg',70,100,6),
(null,2,'-44kg',40,44,7),
(null,2,'-48kg',44,48,7),
(null,2,'-52kg',48,52,7),
(null,2,'-57kg',52,57,7),
(null,2,'-63kg',57,63,7),
(null,2,'-70kg',63,70,7),
(null,2,'-78kg',70,78,7),
(null,2,'+78kg',78,100,7),
(null,2,'-48kg',44,48,8),
(null,2,'-52kg',48,52,8),
(null,2,'-57kg',52,57,8),
(null,2,'-63kg',57,63,8),
(null,2,'-70kg',63,70,8),
(null,2,'-78kg',70,78,8),
(null,2,'+78kg',78,100,8),
(null,2,'-48kg',44,48,9),
(null,2,'-52kg',48,52,9),
(null,2,'-57kg',52,57,9),
(null,2,'-63kg',57,63,9),
(null,2,'-70kg',63,70,9),
(null,2,'-78kg',70,78,9),
(null,2,'+78kg',78,100,9);

INSERT INTO `eventType`
	(`id`,`lib`,`cod`,`ordre`,`actif`,`selected`)
VALUES
	(null, 'Inscription', 'inscription', 1, 1,1),
	(null, 'Passage de grade', 'grade', 2, 1,1),
	(null, 'Animation', 'animation', 3, 1,1),
	(null, 'Interclub', 'interclub', 4, 1,1),
	(null, 'Test physique', 'test_physique', 5, 1,1);