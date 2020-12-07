INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('bu.', 'bushel', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('c', 'cup', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('oz.', 'ounce', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('gal.', 'gallon', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('mL', 'milliliter', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('L', 'liter', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('pt.', 'pint', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('tbsp', 'tablespoon', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('tsp', 'teaspoon', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('g', 'gram', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('kg', 'kilogram', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('lb', 'pound', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('mg', 'milligram', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('pinch', 'pinch', 'Y');
INSERT INTO `recipe`.`unitofmeasure` (`abreviation`, `fullName`, `showFlag`) VALUES ('dash', 'dash', 'Y');

-- temporary. Will be different on actual web server
INSERT INTO `recipe`.`users` (`username`, `displayName`, `joinDate`, `lastLogin`, `role`) VALUES (admin, Administrator, 2020-12-04, 2020-12-04, Admin);