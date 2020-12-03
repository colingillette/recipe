CREATE SCHEMA `recipe`;

CREATE TABLE `recipe`.`recipes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL,
  `description` VARCHAR(500) NULL,
  `creatorID` INT NULL,
  `creationDate` DATETIME NULL,
  `editDate` DATETIME NULL,
  `hours` INT NULL,
  `minutes` INT NULL,
  `views` INT NULL,
  `deleteFlag` VARCHAR(1) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `recipe`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NULL,
  `displayName` VARCHAR(50) NULL,
  `joinDate` DATETIME NULL,
  `lastLogin` DATETIME NULL,
  `role` VARCHAR(20) NULL DEFAULT 'Read',
  PRIMARY KEY (`id`));

CREATE TABLE `recipe`.`ingredients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `recipe`.`directions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(300) NULL,
  `displayOrder` INT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `recipe`.`unitofmeasure` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `abreviation` VARCHAR(15) NULL,
  `fullName` VARCHAR(50) NULL,
  `showFlag` VARCHAR(1) NULL DEFAULT 'Y',
  PRIMARY KEY (`id`));

CREATE TABLE `recipe`.`incidents` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `userID` INT NULL,
  `note` VARCHAR(100) NULL,
  `datetime` DATETIME NULL,
  `isError` VARCHAR(1) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `recipe`.`savedrecipes` (
  `recipeID` INT NOT NULL,
  `userID` INT NOT NULL,
  `savedFlag` VARCHAR(1) NULL DEFAULT 'Y',
  PRIMARY KEY (`recipeID`, `userID`));

CREATE TABLE `recipe`.`recipe_directions` (
  `recipeID` INT NOT NULL,
  `directionID` INT NOT NULL,
  PRIMARY KEY (`recipeID`, `directionID`));

CREATE TABLE `recipe`.`recipe_ingredients` (
  `recipeID` INT NOT NULL,
  `ingredientID` INT NOT NULL,
  `unitOfMeasureID` INT NULL,
  `amount` DECIMAL(7,3) NULL,
  `displayOrder` INT NULL,
  PRIMARY KEY (`recipeID`, `ingredientID`));

-- Foreign Key syntax is slightly different for MariaDB. Handle later.