-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 04:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indiana_ave`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `admin_id` int(11) NOT NULL,
  `admin_first_name` varchar(50) NOT NULL,
  `admin_last_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `admin_password` varchar(12) NOT NULL,
  `admin_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`admin_id`, `admin_first_name`, `admin_last_name`, `admin_email`, `admin_password`, `admin_role`) VALUES
(1, 'Super', 'User', 'su@gmail.com', '*2470C0C', 2),
(2, 'Idris', 'Elba', 'IE@gmail.com', '*2470C0C', 1),
(3, 'Jennifer', 'Baldwin', 'jbldwn@iu.edu', 'password', 0),
(4, 'Jacob', 'Catalan', 'jacatala@iu.edu', 'password', 2),
(5, 'Rosa', 'Parks', 'rp@gmail.com', 'password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `audio_id` int(11) NOT NULL,
  `audio_file` varchar(100) NOT NULL,
  `chapter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Music'),
(2, 'Recreation'),
(3, 'Sports'),
(4, 'Business'),
(5, 'Medicine'),
(6, 'Religion'),
(7, 'Community/Activisim'),
(8, 'Neighborhoods'),
(9, 'Journalism');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `chapter_id` int(11) NOT NULL,
  `chapter_title` varchar(100) NOT NULL,
  `chapter_content` varchar(2500) DEFAULT NULL,
  `creator_admin_id` int(11) DEFAULT NULL,
  `last_editor_admin_id` int(11) DEFAULT NULL,
  `chapter_location` int(11) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`chapter_id`, `chapter_title`, `chapter_content`, `creator_admin_id`, `last_editor_admin_id`, `chapter_location`, `last_updated`) VALUES
(39, 'How it started', 'Wes Montgomery’s early Indiana Avenue performances were at the 440 Club, first covering Charlie Christian and later playing in the club band.', 1, 2, 1, '2023-03-29 04:08:20'),
(40, 'How it started', 'The marker describes the broad importance of the Avenue and its cultural, economic, and political importance to the city. Could be a good site to talk generally about historic preservation and Black history, more specifically, why so many of the sites along the Avenue have not been preserved.', 1, 1, 2, '2023-03-29 04:08:20'),
(41, 'How it started', 'The Senate Avenue YMCA was a center of community life, social activism, and education for Black Americans. For decades, it sponsored “Monster Meetings” with national leaders including Martin Luther King, Jr., W.E.B. Du Bois, George Washington Carver, and Eleanor Roosevelt.', 1, 1, 3, '2023-03-29 04:08:20'),
(42, 'How it started', 'The Phyllis Wheatley YWCA was a safe haven for Black Women and girls in the mid-20th Century and a testament to the power of Black women’s organizing and institution-building in the city, according to historian Dr. Nancy Robertson. ', 2, 1, 4, '2023-03-29 04:08:20'),
(43, 'How it started', 'In 1955, the Crispus Attucks Tigers made history when they became the first all-Black team and first team from Indianapolis to win the Indiana state high school basketball championship. Prior to 1942, the IHSAA prohibited all-Black and Catholic schools from participating in the state tournament. Attucks won the state title again in 1956 and in 1959. After the team made its way to Monument Circle following the 1955 championship game, where 15,000 people watched as Coach Ray Crowe accepted the key to the city, it made its way to Indiana Avenue, the heart of Black Indianapolis. People poured into the streets from homes and businesses in the neighborhood to celebrate.', 1, 2, 5, '2023-03-29 04:08:20'),
(44, 'How it started', 'Entrepreneur Madam C.J. Walker developed hair care products for Black clientele in Denver and traveled to Indianapolis to market them in 1910. While in the city, she met Black surgeon Dr. Joseph Ward, who opened his residence/medical office, located at 722 Indiana Avenue, to Walker for her beauty culture demonstrations. She decided to permanently stay in the city, establishing a manufacturing company, laboratory, and beauty school at 640 North West. Walker expanded the company internationally through skillful marketing, becoming one of the wealthiest self-made businesswomen of the era. She also provided economic opportunities for Black women, who became her sales agents and beauty culturists. Committed to community uplift and social justice, Walker contributed to Indianapolis’s Alpha Home and Senate Avenue YMCA, and advocated for anti-lynching laws and women’s suffrage. ', 1, 2, 6, '2023-03-29 04:08:20'),
(45, 'How it started', 'Development of businesses along the Avenue; Represents the impact of segregation in the lives of Black residents, from birth to death', 2, 2, 7, '2023-03-29 04:08:20'),
(46, 'How it started', 'The site is one of the earliest Hook’s Drug Stores that had Black management. In 1946, Black pharmacist and entrepreneur Murray L. Miller was promoted to manager of the Indiana Avenue location. As the Indianapolis Recorder wrote of his promotion, “he thus becomes the first Negro to be given responsibilities of management of this busy store . . . . Hook officials said Mr. Miller has demonstrated to their complete satisfaction his competency, ability, and efficiency, and his promotion was in line with the company’s policy of advancing employees on the basis of merit.” A year later, Hook’s Drug Stores officially desegregated all of their lunch counters, which was also covered extensively in the Recorder.', 1, 2, 8, '2023-03-29 04:08:20'),
(47, 'How it started', 'Barred from treating Black patients in city hospitals, Black surgeon and World War I veteran, Dr. Joseph Ward opened his Sanitarium and Nurses’ Training School at 722 Indiana Avenue around 1907. He convinced administrators at the segregated City Hospital to allow Black nurses to take courses alongside white students, opening professional opportunities to Black women, who were often relegated to manual labor. In addition to being entrepreneur Madam C.J. Walker’s personal physician, he and his wife, Zella, helped Walker get her start in business in Indianapolis, opening their property at 722 to her beauty culture demonstrations. In 1924, Ward became the first Black commander of the segregated Veterans Hospital No. 91 at Tuskegee, Alabama. His adept leadership challenged the Jim Crow Era perception that Black Americans were unfit to manage federal facilities.', 1, 2, 9, '2023-03-29 04:08:20'),
(48, 'How it started', 'Established in 1846, Second Baptist Church was reportedly the first Black Baptist congregation established in Indianapolis. During its first few years, members met in a home near West and Ohio Street. The congregation established new churches in different parts of the city over the years, but met near 420-422 West Michigan Street for much of its history. ', 2, 2, 10, '2023-03-29 04:08:20'),
(49, 'How it started', 'Founded in 1836, Bethel AME is considered the oldest Black church in the city of Indianapolis. It became a vital part of the Black community in the city not only for worship and education, but in aiding fugitive slaves and a site for Black state conventions and for recruiting U.S. Colored Troops during the Civil War.', 1, 1, 11, '2023-03-29 04:08:20'),
(50, 'How it started', 'According to the Indianapolis Urban League, "The Urban League is the nation’s oldest and largest community-based movement devoted to empowering African Americans to enter the economic and social mainstream . . . The Indianapolis Urban League was founded in the fall of 1965 as a non-profit, non-partisan, interracial community-based social service/civil rights organization."', 1, 1, 12, '2023-03-29 04:08:20'),
(51, 'How it started', 'The 1920 election was the first in which women could vote. Black women, of the predominately Black Fifth Ward, lined up to vote for the first time dressed in their finest clothing. Just as many women voted as men, mainly for a straight Republican ticket.', 1, 1, 13, '2023-03-29 04:08:20'),
(52, 'How it started', 'Entrepreneur and philanthropist Madam Walker established her hair care manufacturing company and factory in 1910 at 640 North West Street. She expanded the factory by purchasing a parcel of land at 617 Indiana Avenue. After Walker’s 1919 death, company attorney Freeman B. Ransom finished acquisition of the property and worked with Walker’s daughter, A’Lelia, to construct a multiuse building. The four-story Walker Building, described as a “city within a city,” opened in 1927. In addition to the factory and corporate offices, the property housed medical offices, restaurants, a theatre, casino, and beauty shop. The Recorder described the building as “another monument to the undying genius of the race, which in spite of obstacles, in the face of adversity, presses forward acquiring property, piling up wealth and more and more are taking their rightful place alongside men of all races.” Amid Jim Crow segregation, the building served as a thriving venue for Black arts, commerce, and community events. In 2018, it was redesignated as the Madam Walker Legacy Center, which continues to support Black entrepreneurs, artists, and activists.   ', 2, 1, 14, '2023-03-29 04:08:20'),
(53, 'How it started', 'Ransom Place grew into a thriving neighborhood for Indianapolis’s Black community in the late 1800s and early 1900s and paralleled the growth of nearby Indiana Avenue. In the 1960s, city leaders worked to systematically acquire many of the homes and lots in the area for IUPUI, leading to the displacement of much of the community. Community leaders have worked to revitalize the area and preserve its history.', 1, 1, 15, '2023-03-29 04:08:20'),
(54, 'How it started', 'IU began purchasing land for a campus near the Medical Center in the 1950s. Black residents opposed encroachment in their neighborhood but were ultimately displaced. Much of the neighborhood was demolished to make way for campus buildings.', 1, 1, 16, '2023-03-29 04:08:20'),
(55, 'How it started', 'The Indianapolis Recorder has been the leading newspaper serving the city’s Black community since 1895.  The paper regularly reported on social events on the Avenue (also spelled the Avenoo in the Recorder), and raised awareness about racial injustices in the city and U.S.', 2, 2, 17, '2023-03-29 04:08:20');

--
-- Triggers `chapters`
--
DELIMITER $$
CREATE TRIGGER `tr_chapters_deleted` AFTER DELETE ON `chapters` FOR EACH ROW BEGIN
    INSERT INTO chapters_deleted (chapter_id, chapter_title, chapter_content, deleted_datetime)
    VALUES (OLD.chapter_id, OLD.chapter_title, OLD.chapter_content, NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `chapters_deleted`
--

CREATE TABLE `chapters_deleted` (
  `chapter_id` int(11) NOT NULL,
  `chapter_title` varchar(100) DEFAULT NULL,
  `chapter_content` varchar(2500) DEFAULT NULL,
  `chapter_location` int(11) DEFAULT NULL,
  `creator_admin_id` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `last_editor_admin_id` int(11) DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `deleted_by_admin_id` int(11) DEFAULT NULL,
  `deleted_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(75) NOT NULL,
  `location_address` varchar(200) DEFAULT NULL,
  `location_city` varchar(50) DEFAULT NULL,
  `location_state` char(2) DEFAULT NULL,
  `location_zip` char(5) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `creator_admin_id` int(11) DEFAULT NULL,
  `last_editor_admin_id` int(11) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location_description` varchar(100) DEFAULT NULL,
  `location_current` varchar(100) DEFAULT NULL,
  `location_historical` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`, `location_address`, `location_city`, `location_state`, `location_zip`, `category_id`, `creator_admin_id`, `last_editor_admin_id`, `last_updated`, `location_description`, `location_current`, `location_historical`) VALUES
(1, 'The 440 Club', '440 Indiana Avenue', 'Indianapolis', 'IN', '46203', 1, 1, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(2, 'Indiana Avenue Marker', '307 Indiana Ave', 'Indianapolis', 'IN', '46203', 1, 1, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(3, 'Senate Avenue YMCA', '420 North Senate Avenue', 'Indianapolis', 'IN', '46203', 2, 1, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(4, 'Phyllis Wheatley YWCA ', '653 North West Street ', 'Indianapolis', 'IN', '46201', 3, 1, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(5, 'Crispus Attucks 1955 Basketball Championship Parade Stop', 'West and Indiana Ave', 'Indianapolis', 'IN', '46203', 3, 1, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(6, 'Madam C.J. Walker''s Salon', '729 Indiana Avenue ', 'Indianapolis', 'IN', '46201', 4, 2, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(7, 'Willis Mortuary Site ', '632 Dr. Martin Luther King Jr. St. ', 'Indianapolis', 'IN', '46201', 4, 2, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(8, 'Hook''s Drug Store', '550 Indiana Avenue ', 'Indianapolis', 'IN', '46201', 4, 2, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(9, 'Ward’s Sanitarium and Nurses’ Training School', '729 Indiana Avenue ', 'Indianapolis', 'IN', '46201', 5, 2, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(10, 'Second Baptist Church', '422 West Michigan Street', 'Indianapolis', 'IN', '46201', 6, 1, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(11, 'Bethel AME', '414 West Vermont Street', 'Indianapolis', 'IN', '46201', 6, 2, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(12, 'Indianapolis Urban League ', '777 Indiana Ave', 'Indianapolis', 'IN', '46201', 7, 2, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(13, 'Polling Place', '904 Indiana Avenue ', 'Indianapolis', 'IN', '46201', 7, 2, 2, '2023-03-29 04:08:19', NULL, NULL, NULL),
(14, 'Walker Theatre', '617 Indiana Avenue ', 'Indianapolis', 'IN', '46201', 7, 2, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(15, 'Ransom Place', '706 W. St. Clair St.', 'Indianapolis', 'IN', '46201', 8, 1, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(16, 'IUPUI / Displacement', '515 North Blackford Street', 'Indianapolis', 'IN', '46202', 8, 2, 1, '2023-03-29 04:08:19', NULL, NULL, NULL),
(17, 'Indianapolis Recorder Building', '518 Indiana Avenue ', 'Indianapolis', 'IN', '46202', 9, 1, 2, '2023-03-29 04:08:19', NULL, NULL, NULL);

--
-- Triggers `locations`
--
DELIMITER $$
CREATE TRIGGER `tr_locations_deleted` AFTER DELETE ON `locations` FOR EACH ROW BEGIN
  INSERT INTO locations_deleted 
  VALUES (
    OLD.location_id, 
    OLD.location_name, 
    OLD.address, 
    OLD.city, 
    OLD.state, 
    OLD.zipcode, 
    OLD.category_id, 
    OLD.creator_admin_id, 
    OLD.last_editor_admin_id, 
    NOW()
  );
  
  INSERT INTO chapters_deleted 
  SELECT * FROM chapters 
  WHERE chapter_location = OLD.location_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `locations_deleted`
--

CREATE TABLE `locations_deleted` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(50) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` char(2) DEFAULT NULL,
  `zipcode` char(5) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `creator_admin_id` int(11) DEFAULT NULL,
  `last_editor_admin_id` int(11) DEFAULT NULL,
  `deleted_by_admin_id` int(11) DEFAULT NULL,
  `deleted_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `photo_file` varchar(100) NOT NULL,
  `photo_description` varchar(500) DEFAULT NULL,
  `photo_year` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signs`
--

CREATE TABLE `signs` (
  `sign_id` int(11) NOT NULL,
  `sign_name` varchar(255) DEFAULT NULL,
  `sign_location` point DEFAULT NULL,
  `chapter_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`audio_id`),
  ADD KEY `fk_audios_chapters_deleted` (`chapter_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`chapter_id`),
  ADD KEY `chapters_location` (`chapter_location`),
  ADD KEY `chapters_creator_admin` (`creator_admin_id`),
  ADD KEY `chapters_last_editor_admin` (`last_editor_admin_id`);

--
-- Indexes for table `chapters_deleted`
--
ALTER TABLE `chapters_deleted`
  ADD PRIMARY KEY (`chapter_id`),
  ADD KEY `location_id` (`chapter_location`),
  ADD KEY `creator_admin_id` (`creator_admin_id`),
  ADD KEY `last_editor_admin_id` (`last_editor_admin_id`),
  ADD KEY `deleted_by_admin_id` (`deleted_by_admin_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `locations_category` (`category_id`),
  ADD KEY `locations_creator_admin` (`creator_admin_id`),
  ADD KEY `locations_last_editor_admin` (`last_editor_admin_id`);

--
-- Indexes for table `locations_deleted`
--
ALTER TABLE `locations_deleted`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `creator_admin_id` (`creator_admin_id`),
  ADD KEY `last_editor_admin_id` (`last_editor_admin_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `photos_location` (`location_id`),
  ADD KEY `fk_photos_chapters_deleted` (`chapter_id`);

--
-- Indexes for table `signs`
--
ALTER TABLE `signs`
  ADD PRIMARY KEY (`sign_id`),
  ADD KEY `fk_signs_chapters_deleted` (`chapter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `audio_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `chapter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `locations_deleted`
--
ALTER TABLE `locations_deleted`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `signs`
--
ALTER TABLE `signs`
  MODIFY `sign_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `audios`
--
ALTER TABLE `audios`
  ADD CONSTRAINT `audios_chapter` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`),
  ADD CONSTRAINT `fk_audios_chapters_deleted` FOREIGN KEY (`chapter_id`) REFERENCES `chapters_deleted` (`chapter_id`);

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_creator_admin` FOREIGN KEY (`creator_admin_id`) REFERENCES `administrators` (`admin_id`),
  ADD CONSTRAINT `chapters_last_editor_admin` FOREIGN KEY (`last_editor_admin_id`) REFERENCES `administrators` (`admin_id`),
  ADD CONSTRAINT `chapters_location` FOREIGN KEY (`chapter_location`) REFERENCES `locations` (`location_id`);

--
-- Constraints for table `chapters_deleted`
--
ALTER TABLE `chapters_deleted`
  ADD CONSTRAINT `chapters_deleted_ibfk_1` FOREIGN KEY (`chapter_location`) REFERENCES `locations` (`location_id`),
  ADD CONSTRAINT `chapters_deleted_ibfk_2` FOREIGN KEY (`creator_admin_id`) REFERENCES `administrators` (`admin_id`),
  ADD CONSTRAINT `chapters_deleted_ibfk_3` FOREIGN KEY (`last_editor_admin_id`) REFERENCES `administrators` (`admin_id`),
  ADD CONSTRAINT `chapters_deleted_ibfk_4` FOREIGN KEY (`deleted_by_admin_id`) REFERENCES `administrators` (`admin_id`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `locations_creator_admin` FOREIGN KEY (`creator_admin_id`) REFERENCES `administrators` (`admin_id`),
  ADD CONSTRAINT `locations_last_editor_admin` FOREIGN KEY (`last_editor_admin_id`) REFERENCES `administrators` (`admin_id`);

--
-- Constraints for table `locations_deleted`
--
ALTER TABLE `locations_deleted`
  ADD CONSTRAINT `locations_deleted_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `locations_deleted_ibfk_2` FOREIGN KEY (`creator_admin_id`) REFERENCES `administrators` (`admin_id`),
  ADD CONSTRAINT `locations_deleted_ibfk_3` FOREIGN KEY (`last_editor_admin_id`) REFERENCES `administrators` (`admin_id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_photos_chapters_deleted` FOREIGN KEY (`chapter_id`) REFERENCES `chapters_deleted` (`chapter_id`),
  ADD CONSTRAINT `photos_chapter` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`),
  ADD CONSTRAINT `photos_location` FOREIGN KEY (`location_id`) REFERENCES `locations` (`location_id`);

--
-- Constraints for table `signs`
--
ALTER TABLE `signs`
  ADD CONSTRAINT `fk_chapter_id` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`),
  ADD CONSTRAINT `fk_signs_chapters_deleted` FOREIGN KEY (`chapter_id`) REFERENCES `chapters_deleted` (`chapter_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
