-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 03:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(39, 'Travel'),
(40, 'Technology'),
(41, 'Productivity'),
(42, 'Lifestyle'),
(44, 'Sports'),
(46, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_cat_id` int(3) NOT NULL,
  `post_cat_title` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'Draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_cat_title`, `post_type`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'Technology', 'Default', 'MacBook Pro (2018) review : Phenomenal computational power', 'Daniels', '2018-11-25', 'tech_1.png', 'There\'s something about cracking open a new MacBook Pro for the first time. I\'ll probably never know for sure, but I imagine it\'s similar to getting into a new Ferrari.\r\n\r\nFor me, hitting render on Final Cut Pro X is like slamming down the gas. It\'s not just how much faster it goes, it\'s how much faster it goes faster.\r\n\r\nIn a normal year, that\'s a straightforward process. With the MacBook Pro (2018), not so much: From the moment the third iteration of Apple\'s latest design hit the market, controversy hit with it.\r\n\r\nFirst, concerns about the reliability of the butterfly and dome-switch keyboards, which proved problematic enough in the previous two versions for Apple to have instituted a repair program.', 'mac, macbook, laptop', 0, 'draft'),
(2, 2, 'Sports', 'Imageview', 'Matt Carpenter Achieves the Rare Feat of Going an Entire Season Without Grounding into a Double Play', 'Robert', '2018-11-26', 'sports_1.jpg', 'The last time we talked I was contemplating what to do with my forearm/elbow pain that I was having.  After considering the options and advice from the doctors I went ahead and had surgery on my arm.  The official date of surgery was May 15, 2018.  Another anniversary that I will have to remember going forward.  Not the first guy to get it, certainly not the last, and with the resources in Florida I will be back in no time. Dr. Paletta and his team did a great job with the surgery, and my scar is looking good six weeks later.  The protocol that is in place is thorough and takes me all the way up to being able to muck it up in Spring Training 2019.\r\n\r\nIn the long run this is the right move for me even if sitting out this year stinks.  If my plan of being in baseball for a long time I will need a good arm going forward, and a healthy arm in general.  According to the plan and rehab protocol I will be able to start throwing in September and able to participate in Spring Training 2019.\r\n\r\nI have been back in Florida for a few weeks and in that time my rehab has been progressing well.  My full range of elbow mobility is  near complete, my fancy brace comes off in a few more weeks, and my legs are going to be strong.  My days consist of morning treatment, lurking around with the GCL pitchers, lifting legs, and then more treatment.  As far as I know this is the plan until I start throwing baseballs again, which is in September. There are a few other guys here doing the same rehab, but nobody with my exact timetable.  It helps to have other guys to train with and we keep each other motivated.', 'sports', 0, 'draft'),
(3, 2, 'Gaming', 'Imageview', 'GET READY FOR THE 2019 SEASON OF PUBG ESPORTS!', 'Xavir', '2018-11-26', 'gaming_1.png', 'Hey Everyone,\r\n\r\nPUBG esports is about to get serious. Starting next year, we\'re introducing official pro competitions in nine different regions around the globe. We’ll also be hosting numerous global events throughout the year, including the All-Star Games in August and the Global Championship in November where the #1 team of the season will be crowned. Read below to find out more!\r\n\r\nBetween Phase 2 and Phase 3, at the midpoint of the season, we will be hosting the All-Star Games. The most popular pro PUBG players from all over the world will be invited to a series of exhibition matches that will be differentiated from other competitions by their casual and entertainment-focused nature.\r\n\r\nAt the end of the 2019 season, we will be hosting the Global Championship, which will feature the best teams from each region who will duke it out for the ultimate chicken dinner. All nine pro regions will have an opportunity to send their regional representatives to this final showdown. The winner of the Global Championship will be crowned the undisputed champion of the entire season and take home a million dollars in prize money. We are exploring the possibility of adding other bonuses on top of the initial prize pool of 2 million dollars; more details will follow in the coming weeks.', 'gaming, pubg', 0, 'draft'),
(4, 1, 'Lifestyle', 'Default', 'Teens and Dangerous Levels of Cell Phone Use', 'Steve', '2018-11-21', 'lifestyle_1.png', 'The problem with such a solution is that it won\'t work. Young people will simply migrate to new platforms and new devices to communicate. Hackers will find ways to unlock locks. Bullies will keep on bullying. Corporate social responsibility can only ever be one tool among many.\r\nThe brilliance of what Iceland implemented was a nationwide effort to substitute natural highs and other ways of changing brain chemistry through real experiences that could compete with the synthetic highs found in drugs (and maybe even cellphones).\r\nThird, how about we rethink smartphones at school? I was just in the UK and in many of their educational institutions they don’t allow phones in the classroom. I used to think that phones could be a great teaching aid, empowering students to access information, mental health supports, and connect with global issues, but I’m rethinking my position on that as cell phone use gets completely out of control. Too much of a good thing, like chocolate, has its downsides. Maybe it’s time schools created cell-free zones, just as many corporations have done the same so workers are less distracted by the constant interruptions that plague them. Of course, there will be the inevitable parent who complains that he, or she, can’t reach their child at a moment’s notice. Maybe it’s time schools spoke back to these overprotective parents that are literally harming their children and threatening their psychosocial development. On this issue, we know the harm is real.', 'cellphone', 0, 'draft'),
(5, 2, 'Gaming', 'Imageview', 'Rainbow Six Siege re-review - an exceptional tactical multiplayer experience!', 'Xavir', '2018-11-26', 'gaming_2.jpg', 'History suggests that games like Rainbow Six Siege do not last especially long. This is the sort of tactical shooter that modders used to craft out of bits of Quake or Half-Life, a paean to depth for depth\'s sake that seems destined to be adored in hindsight by the passionate minority that actually played it at the time. Yet here we are: now entering its third year, Siege is one of the world\'s most popular shooters. Its success can, in some ways, be seen as a forerunner of the dazzling rise of PUBG and Fortnite: in rejecting Call of Duty\'s Skinner box simplicity, Ubisoft has found an audience hungry for games where failure is unforgiving and success means more.\r\n\r\nThe top line for the unfamiliar: Siege is an adaptation of the venerable Tom Clancy tactical action series, taking the principles of breach-and-clear counter-terrorism and marrying them to modern competitive multiplayer design principles. A team of attackers must invade a secure location in pursuit of an objective - a bomb, bioweapon or hostage - while defenders set traps and prepare to repel them. Death comes quickly and eliminations take you out for the rest of the round. The result is something like hide and seek in Kevlar: a game where discretion is almost always the better part of valour, where acts of planning and foresight win the day just as often as marksmanship.', 'gaming, rainbow', 0, 'draft'),
(6, 1, 'Travel', 'Default', 'IBM and Red Hat: Inspired or desperate? And a difficult journey ahead...', 'Alvi', '2018-12-04', 'new-image.jpg', 'BM, once had an identity as the mainframe seller you could never get fired for choosing.\r\n\r\nNowadays, big, on-perm compute and storage hardware and the software and services that surround them are still core to its portfolio, but are joined by a push to the cloud (and a mix of software offerings: Analytics, AI etc).\r\n\r\nIt is the fourth largest cloud player, but a very long way behind the big three in terms of market share: WAS, Microsoft Azure and Google Cloud Platform.\r\n\r\nIBM Soft layer offers cloud compute with file, object and block storage with forays into containers, AI, block-chain and analytics.\r\n\r\nMeanwhile, Red Hat has made its living since formation in 1993 as a purveyor of commercial distributions of open source software.\r\n\r\nIts offerings center on its Red Hat Enterprise Linux operating system, the Open Stack private cloud environment, Open Shift container management, and the J Boss and Expansible application platforms.', 'ibm, pc', 0, 'Draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
