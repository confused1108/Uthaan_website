-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 05:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uthaan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `writer` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `heading`, `content`, `writer`, `date`, `admin_id`) VALUES
(50, 'Dreaming', '<p style="font-weight: 400;">&lsquo;DREAMS&rsquo;- a word which plays an important role in everybody&rsquo;s life, say, whether it is a dream of life; an aspiration, or the dream we see while sleeping. But here, we are concerned about the dreams we see when we are unconscious.</p>\r\n<p style="font-weight: 400;">By turns, dreams have been deemed prophecies of the future, full of meaning; or the affluence of nerve cells randomly unwinding from a busy day.</p>\r\n<p style="font-weight: 400;">Each night, we pass through a series of stages of sleep, each of which is a distinctive pattern of brain waves. Sigmund Freud, one of the first people to discuss the purpose of dreaming, suggested that dreams reflect people&rsquo;s unconscious thoughts and desires. He thought that our unexpressed desires and wishes show up in our dreams.</p>\r\n<p style="font-weight: 400;">Another approach to understanding dreaming is to examine if people&rsquo;s dreams are related to the things that actually happen in their everyday life. In fact, studies show that - contrary to&nbsp;the belief that dreams are mostly bizarre and unrealistic &ndash; most dreams involve real-life situation.</p>\r\n<p style="font-weight: 400;">Sometimes, dreams do contain some pretty strange material, and these all are due to the metaphorical life we have, metaphors of which, creep into our dreams as well. Consequently, these metaphors generate bizarre images, because while dreaming, we interpret them literally.</p>\r\n<p style="font-weight: 400;">Moving towards bad dreams, like nightmares, it&rsquo;s not clear that using wakening, because of such dreams, as an index of the severity of a dream is agreeable. Because bad dreams that do not wake people up can sometimes be more intense than nightmares.</p>\r\n<p style="font-weight: 400;">Overall, the truth is, as long as the brain remains such a mystery, we probably won&rsquo;t be able to pinpoint the main reason behind dreams.</p>', 'Anshita Sharma (2017IMT-014)', '2018-03-19', 2),
(51, 'Budget 2018', '<div align="left">The Union Budget speech at 11am on February 1 could be the final salvo of Narendra Modi government''s economic firepower which has been on display the past three and half years. The current NDA government has ushered in several economic reforms, of which, two stand out as the boldest and most contentious. Demonetisation &amp; GST have changed forever the way business is conducted in India.</div>\r\n<div align="left">The biggest challenge facing Arun Jaitley and co. is to pole-vault, the economy across upsetting fiscal deficit calculations and somewhere along the way ensuring that the electorate in the politically crucial states of MP, Rajasthan and Karnataka do not swing to the opposition ahead of elections this year. As seen in Gujrat, anti-BJP forces have already managed to sway the political narrative, portraying BJP as a party which has neither been able to create jobs nor bring prosperity to farmers. This is the core audience which the Finance Minister needs to address in this budget. Sectors like infrastructure are woefully behind target because of issues ranging from land acquisition to funding to red-tapism. Any acceleration in this sector will create jobs right from unskilled workers to the skilled labour force and even for IIT and IIM educated managers.</div>\r\n<div align="left">This is Narendra Modi''s last full Budget as Prime minister before the nation goes to polls next summer. This is his last chance to give the electorate the ''acche din'' they were promised 4 years ago. And, this is the last chance for the government to repay the middle class which silently stood in bank queues last year to support their Prime Minister, before they stand in queues again as voters a year from now.</div>\r\n<div align="left">&nbsp;</div>\r\n<div align="left"><strong>SUN PHARMA:</strong></div>\r\n<div align="left">Buy Sun Pharma at a strike price of 600</div>\r\n<div align="left">600 CALL available at - 24</div>\r\n<div align="left">Target : 44 , stop loss : 15</div>\r\n<div align="left">Rs. 26,400 to be invested</div>\r\n<div align="left">Maximum reward : Rs. 22,000</div>\r\n<div align="left">Maximum loss : Rs. 9000</div>\r\n<div align="left">&nbsp;</div>\r\n<div align="left"><strong>RATIONALE</strong></div>\r\n<div align="left">More allocation to health sector expected in Budget 2018.</div>\r\n<div align="left">Relief from USFDA on Halol plant expected; inspection due in February.</div>\r\n<div align="left">Revision in corporate tax in Budget 2018. If happens , will improve earnings generic market is being expanded.</div>\r\n<div align="left">Regulatory concerns in US are being resolved.</div>\r\n<div align="left">&nbsp;</div>\r\n<div align="left"><strong>HIGHLIGHTS:</strong></div>\r\n<ul>\r\n<li>\r\n<div>No changes in personal income tax slabs.</div>\r\n</li>\r\n<li>\r\n<div>Salaried tax prayers to get a standard deduction of RS. 40,000 in line of transport allowance and other medical expenses.</div>\r\n</li>\r\n<li>\r\n<div>Rs. 2,000 crores fund for develpoment of agri market.</div>\r\n</li>\r\n<li>\r\n<div>All senior citizens will now be able to claim the benefit of a deduction of Rs. 50,000 for any medical insurance.</div>\r\n</li>\r\n<li>\r\n<div>For critical illness, the deduction has been increased to Rs. 1,00,000.</div>\r\n</li>\r\n<li>\r\n<div>Free power connections to 4 crore homes under Saubhagya Yojana.</div>\r\n</li>\r\n<li>\r\n<div>Eight Crore free gas connections for poor women through UJJWALA YOJANA.</div>\r\n</li>\r\n<li>\r\n<div>Govt. to implement minimum support price for all crops; it is hiked to 1.5 times of production costs.</div>\r\n</li>\r\n<li>\r\n<div>Govt. to contribute 12% of wages of new employees for all sectors.</div>\r\n</li>\r\n<li>\r\n<div>New flagship National Health Protection Scheme, providing a health insurance cover of Rs.5 Lakhs per family per year announced.</div>\r\n</li>\r\n<li>\r\n<div>Railway capesc for 2018-2019 set at Rs. 1.48 Lakhs crores.</div>\r\n</li>\r\n<li>\r\n<div>Disinvestment target for this year set at Rs. 80,000 crores.</div>\r\n</li>\r\n</ul>', '   Ankur Chaubey (2017-IMT-013)', '2018-03-19', 2),
(52, 'Crypto Currency:Bitcoin', '<div align="left">\r\n<p style="font-weight: 400;"><span style="font-weight: 400;">Every day is a unique day progressing with a lot of new of technology. We tend to adjust ourselves to the modern technology. The basic things to live are gained by money and it was introduced for the reason of barter. When we look back into in the past around 900 B.C the money was invented for day to day utility and exchange of a commodity. But there was a problem with that system. People faced difficulties in portability and durability like grains would get spoiled. So precious metals came into existence for the exchange of money which was more easily divisible. Just one thousand years back paper money was born and the precious metals were deposited with Goldsmiths. Later goldsmiths became bankers where they issued paper receipts to the depositors. This is how paper money was born. Over a period of, time these receipts were physically transferred between people. Now the money we use is called </span><strong>fiat money </strong><span style="font-weight: 400;">which is not back by the gold standards (precious metal).</span></p>\r\n<p style="font-weight: 400;"><span style="font-weight: 400;">The fiat money is portable, easy to transfer and is authorised by the central nation. But from the past few decades, we have increasingly transferred money through electronic networks. Now with electronic networks, there&rsquo;s a problem. In electronic networks, we need to trust a third party like a bank, credit card company who oversees and authorises our transactions. So, these third parties are really powerful. They can disallow our transactions and so much more. Although electronic money is ours we can only use it upto a permissible level set by the third party. All we have to do is trust third party. We also find difficulties in transferring money to the people outside the country where we have to pay tax for the exchange. The usage of fiat money can lead to the cause of inflation and sometimes hyperinflation too. In January 2009 an anonymous person by the name </span><strong>Satoshi Nakamoto</strong><span style="font-weight: 400;"> invented bitcoins, which is regarded as the best kind of money. It has the benefits of both electronic and physical money in which we don&rsquo;t need any third parties. So with the Bitcoins, we can maintain our data and privacy during transactions. Even a villager can open Bitcoin account easily, all he needs is a smart phone and can pay anyone in this world. Bitcoin is a global currency and it does not depend upon any other currencies and no one controls it. Bitcoin is rare which means there are only 21 million bitcoins ever created with the Bitcoin network. As the supply is fixed and demands goes high, price will increase. Bitcoin is resistant to inflation and hyperinflation. So the fixed number of bitcoins can be easily distributed to the world population as it can be infinitely divisible. Bitcoin is legal and most of the multinational companies have invested huge amounts of money for the startup of Bitcoins. 8million Bitcoin accounts were created in a couple of years. There are Bitcoin ATM&rsquo;s where we can withdraw our local currency. So the present value of 1 bitcoin is 419682.55 indian rupee . it changes time to time. Many apps </span>were created for use of Bitcoins.</p>\r\n</div>', 'Pranay Kumar (IMT-2017-028)', '2018-03-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `article_images`
--

CREATE TABLE `article_images` (
  `image_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_images`
--

INSERT INTO `article_images` (`image_id`, `article_id`, `image_name`, `admin_id`) VALUES
(54, 50, 'img_art_1.jpg', 2),
(55, 51, 'img_art_2.jpg', 2),
(56, 52, 'img_art_3.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `organisers` text NOT NULL,
  `winners` text NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `var` int(11) NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `heading`, `description`, `organisers`, `winners`, `thumbnail`, `var`, `date`, `admin_id`) VALUES
(5, 'Bird Watching', 'A 5 day session on Bird Watching was organised by Uthaan. Students learned basics of bird watching under professional guidance and explored different breeds of birds in Campus and Vivekanand Needam.', 'Team Uthaan', 'All', 'img_event_1.jpg', 1, '2017-10-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `image_id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `var` int(11) NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`image_id`, `heading`, `description`, `image_name`, `var`, `date`, `admin_id`) VALUES
(42, 'hey', 'hey everyone. .!!!', 'img_pic_1.jpg', 1, '2017-10-10', 2),
(43, 'hey', 'hey everyone. .!!!', 'img_pic_2.jpg', 2, '2017-10-10', 2),
(44, 'hey', 'hey everyone. .!!!', 'img_pic_3.jpg', 3, '2017-10-10', 2),
(45, 'hey', 'hey everyone. .!!!', 'img_pic_4.jpg', 4, '2017-10-10', 2),
(46, 'hey', 'hey everyone. .!!!', 'img_pic_5.jpg', 5, '2017-10-10', 2),
(47, 'hey', 'hey everyone. .!!!', 'img_pic_6.jpg', 6, '2017-10-10', 2),
(48, 'hey', 'hey everyone. .!!!', 'img_pic_7.jpg', 7, '2017-10-10', 2),
(49, 'hey', 'hey everyone. .!!!', 'img_pic_8.jpg', 8, '2017-10-10', 2),
(50, 'hey', 'hey everyone. .!!!', 'img_pic_9.jpg', 9, '2017-10-10', 2),
(51, 'hey', 'hey everyone. .!!!', 'img_pic_10.jpg', 10, '2017-10-10', 2),
(52, 'hey', 'hey everyone. .!!!', 'img_pic_11.jpg', 11, '2017-10-10', 2),
(53, 'hey', 'hey everyone. .!!!', 'img_pic_12.jpg', 12, '2017-10-10', 2),
(54, 'hey', 'hey everyone. .!!!', 'img_pic_13.jpg', 13, '2017-10-10', 2),
(55, 'hey', 'hey everyone. .!!!', 'img_pic_14.jpg', 14, '2017-10-10', 2),
(56, 'hey', 'hey everyone. .!!!', 'img_pic_15.jpg', 15, '2017-10-10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_videos`
--

CREATE TABLE `gallery_videos` (
  `video_id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(500) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `var` int(11) NOT NULL,
  `editor` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_videos`
--

INSERT INTO `gallery_videos` (`video_id`, `heading`, `description`, `link`, `thumbnail`, `var`, `editor`, `date`, `admin_id`) VALUES
(7, 'hey', 'hey everyone ...!!', 'https://www.youtube.com/embed/CNjfTzKcgo0', 'img_thumb_1.jpg', 1, 'Prakhar', '2017-10-10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `interview_id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `reporters` varchar(200) NOT NULL,
  `photographer` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`interview_id`, `heading`, `content`, `reporters`, `photographer`, `date`, `admin_id`) VALUES
(4, 'INTERVIEW OF MAITHILI SHARAN GUPTA (D.G.P OF RAILWAY POLICE)', '<p><span style="font-weight: 400;"><strong>Q1:</strong><strong>What challenges did you face while implementing GRP help app?</strong></span></p>\r\n<p style="font-weight: 400;"><strong>Ans:</strong>&nbsp;Basically I conceived it holistically as a big realistic project with all kind of nut and bolts. So we came up with QIRP(Quick investigation response team) . As a project Government has provided all kind of resources like laptop including digital wireless system, also government has sanctioned 32 professionals for state monitoring. Earlier we operated from Bhopal but almost six months ago I realized that due to linguistic diversity there are many problems in communication across the country. Now it is operated from state control room of all states. It has two gateways one is Internet and other is SMS gateway.We personally see to work done by state by sitting in Bhopal and hence building a database and many more things like intelligent criminal database is being build up.</p>\r\n<p style="font-weight: 400;"><strong>Q2:</strong><strong>&nbsp;How can we IT professionals make a change in railway systems in India?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans:</strong>&nbsp;It&rsquo;s not only about railways but steps must be taken towards a crime free India. So for Students like you we have created small &nbsp;projects which can be done within a month so that police is not much burdened. There is information but we will not check this until there is a court case.</p>\r\n<p style="font-weight: 400;"><strong>Q3:</strong><strong>&nbsp;What qualities do you expect from IPS officer?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans:</strong>&nbsp;The prime focus should be nation and not government because governments change but country does not. We feel that we need an IPS with great guts and efforts and commitments who is willing to take risk. Talking about freedom fighters, they lost everything but here do we have anything to loose, how much selfish are we.</p>\r\n<p style="font-weight: 400;"><strong>Q4:</strong>&nbsp;<strong>What led you propose the increment in retirement age from 41 to 50 years?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans:&nbsp;</strong>Probably the government was kept in dark therefore we didn&rsquo;t get the proper response. It was I who created it. It was from 41 to 50 for new ones and upto 60 for old ones.</p>', 'Siddharth Jain and Saksham Arjani', 'Vishakha Gupta', '2018-03-19', 2),
(5, 'Interview with the dance team of Sri Lanka', '<p style="font-weight: 400;"><strong>Q1. How was your stay in Gwalior?</strong></p>\r\n<p style="font-weight: 400;">Ans. In Gwalior, we didn&rsquo;t thought that we will get so much of cooperation. The cooperation, friendliness that we get here was very nice. After coming to Gwalior, wherever we travelled the coordinators were always with us. We didn&rsquo;t feel alone. In Gwalior, while travelling we saw Indian culture, Indian specialities, today we also visited the &ldquo;Maharaja&rsquo;s Palace&rdquo;, those things were awesome.</p>\r\n<p style="font-weight: 400;"><strong>Q2. What did you like most in our institute?</strong></p>\r\n<p style="font-weight: 400;">Ans. We liked the cooperation and encouragement that we are getting from the institute. So muchof crowd was there, they were cheering us while we were performing that was really nice.</p>\r\n<p style="font-weight: 400;"><strong>Q3. What are you expecting from your performance?</strong></p>\r\n<p style="font-weight: 400;">Ans. &nbsp;We want to show the culture of Sri Lanka to other countries through our dance and traditional dance of Sri Lanka. We like Indian culture and we like bharatnatyam form of dance, we also have bharatnatyam dance teachers in Sri Lanka. In a similar way,we want to spread our culture throughout the world.</p>\r\n<p style="font-weight: 400;"><strong>Q4. How long have you been in this dance career?</strong></p>\r\n<p style="font-weight: 400;">Ans. I am doing this since childhood. Infact, all the members of our team are dancing this since childhood so we are very passionate about this.</p>\r\n<p style="font-weight: 400;"><strong>Q5. How many places have you visited for your performance?</strong></p>\r\n<p style="font-weight: 400;">Ans. We have visited many places. We always have dance programs in many places in Sri Lanka and other countries also. This time we came to India and we are proud of that.</p>', 'Manvi Gupta and Saksham Arjani', 'Prajwal Singh', '2018-03-19', 2),
(6, 'Interview of HarshaJith Umapathy,Sr.VP & Practice Head at Hansa Cequity', '<p style="font-weight: 400;"><strong>Q1.&nbsp;How does Azko Nobel manage such a big network which is spread over 80 countries?</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;"><strong>Ans.</strong>&nbsp;I think it is because of the system that is evolved over 400 years and the procedure that&nbsp;have been let down , I think this is which helps us to manage 80 countries and 210 locations.</p>\r\n<p style="font-weight: 400;"><strong>Q2. As there are no roses without thorns, likewise you must have also faced many difficulties in your way, so sir would you like to share with us so that as students we get motivated.</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;"><strong>Ans&nbsp;</strong>Everyday, there is something special that is the belief we are carrying, everyday before going to bed I take into account the leanings I had in the day ,so as to have a good implementation next day.It is a continuous process.</p>\r\n<p style="font-weight: 400;"><strong>Q3.</strong>&nbsp;<strong>At the end of day it&rsquo;s all about profit in business. So Sir, what suggestions would you like to give to new people or students who will enter world of Entrepreneurship</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;"><strong>Ans</strong>. Whenever you have an idea evaluate it from all angles, if is viable and sustainable and plan accordingly because if planning is done the execution is pretty easy. Start ups fail because the planning is not proper and they are not able survive challenges.</p>\r\n<p style="font-weight: 400;"><strong>Q4.</strong>&nbsp;<strong>What are the qualities of an good employee of a M.N.C ?</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;"><strong>Ans.</strong>&nbsp;Loyalty is the key point, a person must be loyal to his profession as well as company.Then comes the integration ,hard work, communication skills, qualification. So first comes loyalty and then the operational skills of a person.</p>\r\n<p style="font-weight: 400;"><strong>Q5</strong>.&nbsp;<strong>Sir, I personally congratulate you on your idea of sustainability. But Sir I would really like to know how do you take people along with you in such a noble taste.</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans.</strong>&nbsp; Most important part is leadership from front as I told you I travel by Bus , I don&rsquo;t use car given by company, I motivate my staff , Initially people used to make fun of it but after seeing the results same people are praising me. So a good leadership and good connect with the team are the keys. Connect with people makes a huge impact.</p>', 'Siddharth Jain and Smita Gupta', 'Yogesh Yesk', '2018-03-19', 2),
(7, 'Interview of Mr. Kushagra Pande ,Manager Talent Acquisition - Product Engineering and University Relations', '<p style="font-weight: 400;"><strong>Q1. Sir,in your keynote you were talking about Artificial Intelligence,which is going to be the next big thing after Internet, according to&nbsp; you how long will it take before it starts developing code?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans.</strong>&nbsp;It''s already evolving, it''s already there. Artificial Intelligence&nbsp; has already taken up redundant and monotonous jobs.They have taken up the laborious jobs in which a machine or robot will be more suitable. Primarily, developing nations are getting affected by it. So, countries like china and India will still get opportunities to implement AI more. There will still be few sectors in industry which will need human touch. How much of it we can imbibe AI that''s what we need to explore more. How much of the code that you wrote is executable?Can a machine replace that code in a few lines and give you better results?So it''s all dependent on the outcome.And we do need a human who will be coding down the machine and it depends on how efficiently the machine is coded, then the machine will start working.<br /><br /></p>\r\n<p style="font-weight: 400;"><strong>Q2. How hard has global changing demographics made recruitment. How do you keep up with these global competition?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans</strong>&nbsp;Primarily, when we talk about the global landscape, we need to remember that the labour market is already shrinking. Hiring right people at right point of time, multi-skilled, multitasking people, that is what everyone is hunting for.</p>\r\n<p style="font-weight: 400;">People are available who can do an &lsquo;X&rsquo; job, but when we''re looking at people who can do &lsquo;X&rsquo;, &lsquo;Y&rsquo; and &lsquo;Z&rsquo; jobs at the same time, them that is hard job.</p>\r\n<p style="font-weight: 400;">From the industry perspective also we need to define what technology we have which can implement the upcoming technologies, like AI, chain block and all.<br /><br /></p>\r\n<p style="font-weight: 400;"><strong>Q3. What&nbsp;are the things that you look for when hiring a professional and what things lead to an immediate rejection?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans</strong>&nbsp;First of all, from a Kronos perspective I''ll say whenever we go to to campuses we look to hire rather to reject.Practical knowledge is more important , are you really aware of what you are learning in your core curriculum and then beyond that what you have done, have you really explored what is going in the industry? how much of it have you got practically exposed to?That''s what matter at the end of the day. CV writing is very very important but what you are writing in your CV is as important.Preparing a page CV if you have really showcased what are your skills and strengths.<br /><br /></p>\r\n<p style="font-weight: 400;"><strong>Q4. The motto of Kronos is &ldquo;Workforce innovation that works&rdquo;. What innovation had Kronos bought in the recruitment sector?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans</strong>&nbsp;I&rsquo;ll say not only the from the recruitment perspective, but from the overall perspective, where we have our products not only in recruitment sector but also on payroll, HR systems, leave management, absence management and all such fields.So constantly, we have been evolving.There have been five phases where we have evolved. We were the first company on the world which bought the first microprocessor based punching system in the world. This was way back in 1977. Till that point of time, every organisation was just thinking of taking the employee record over the registers, so it was not that the companies were thinking as to how the attendance can be automatized.</p>\r\n<p style="font-weight: 400;">The current need for our product as of now was cloud. We have tough competition, still being world leaders, we''ve faced tough competitions from companies like paykaro, paycheck. These are the organisations that have been really beautiful in the way they have been working.So the current product that will be going in the market soon, will definitely revolutionize the engine HR industry.</p>\r\n<p style="font-weight: 400;">In terms of how Kronos really works from an innovation perspective, there is a very important element, which we call as &ldquo;Kronovation&rdquo;. We dedicate almost 72 hours for an employee to get away from work, to let them think about something different from their work.</p>\r\n<p style="font-weight: 400;">Maybe a tester can think about a developer, or a developer can think about what is happening in testing. Maybe something you had thought about but hadn''t got the time to implement. That what we call Kronovation, and it remains in our tagline as well, &ldquo;Workforce innovation that works&rdquo;.<br /><br /></p>\r\n<p style="font-weight: 400;"><strong>Q5. What&nbsp;are the technical specializations&nbsp;that are important for current market or what are the fields that a student should pursue?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans</strong>.The current need of the market is cloud, data analytics and artificial intelligence in India is still in its nascent stage but data analytics and cloud is there and I.O.T. Whenever you are related to technology field try to grab the things related to it, when you are from a business managing field try to implement it.<br /><br /></p>\r\n<p style="font-weight: 400;"><strong>Q6. It is important to maintain&nbsp;a huge network!!! How do you grow your circle ?</strong></p>\r\n<p style="font-weight: 400;"><strong>Ans</strong>.Like these events this is the platform, meeting senior folks from the industry I exchange my cards LinkedIn is the best way to connect to people people and discuss the next meet. Follow people who are leaders in your industry,read their blogs and start making connects. Like mindedness is the main theme or agenda which young professionals like you&nbsp; can do. Read what really excites you and start following the writer.Twitter, GitHub,Stack Overflow, These are the places , I don''t say go away from Facebook you should have a social network but if we are talking about professional network, it''s more important.</p>', 'Himanshi Kalra and Nishant Tomar', 'Yogesh ', '2018-03-19', 2),
(8, 'An interview with Ms SHAIVYA SINGH RATHORE, An Educator, Climate Reality Leader, Environmentalist', '<p style="font-weight: 400;"><strong>Question 1:&nbsp; How was your experience in the journey from being a teaching colleague to a sales director, leadership coach and expedition leader?</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;">Answer: My journey has not been an easy one, it is somewhat like roller coaster ride and had some great experiences. I question myself, like whether I am doing right thing or not. But what I realize is that living in self-doubt is a good thing, it makes me work twice harder. I failed many times and learned many things from&nbsp; my failures but at the end I am at a decent position. I also felt that whatever I am doing today does involve my engineering skills, analytical mind set and problem solving skills which I have got from engineering institution.</p>\r\n<p style="font-weight: 400;"><strong>Question 2: How tough was your decision in changing your profession from being an aeronautical engineer to a teacher for &lsquo;Teach for India&rsquo;?</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;">Answer: To be honest, it was very difficult. The toughest part, in fact, was to convince my parents. Because as Indian parents, they want a very set career for you and we have milestones to achieve by age. Especially as a girl, although it is very wrong to think this, but it is. It persists in our society, like by 25 you should be done with your education, with your job and then by a certain age you should be married. So when I decided to do these things which required me to put in my time, my parents were very uncomfortable. So, the challenge was to convince my parents, to convince the society that I was doing the right things. But also remember that, the people who are with you in the times when you are not at the top of the cliff, are the people that matters to you. The challenge was to build like a support system, to convince people, to show the society that I was up to some good and I was just whiling away my time because I didn&rsquo;t know where to go.</p>\r\n<p style="font-weight: 400;"><strong>Question 3: How did you feel when you were featured in article from Femina Tamil?</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;">Answer- It was a great feeling and although it was very weird and funny as I could not read what was written and I had to ask other people to translate but for the first time I felt like a powerful woman. Whereas sometimes you need these rewards to show what you have done or to just celebrate all your efforts.&nbsp; I am getting famous, getting reward for what&nbsp; I am doing and it makes me happy and satisfied too.</p>\r\n<p style="font-weight: 400;"><strong>Question 4: You have set an example of women empowerment so what views do you hold regarding this and what message can you impart to the women of India?</strong><strong><br /></strong></p>\r\n<p style="font-weight: 400;">Answer: I think if women can survive in India, balance academics, family pressures, jobs, marital pressures etc. then they are capable of doing anything. It&rsquo;s just like saying that if you can drive in India you can drive in any part of the planet similarly if women in India can balance these things and emerge then she is capable of doing anything. I think my message for women in India would be to follow their dreams and not give up and not focus on negativity because when you open newspaper there is a lot of negativity and it is very terrible when it comes treating women in India. So, let&rsquo;s shift our focus from thinking about that to actually doing something productive and get to a position where you actually are a powerful woman to command change over that situation. As a community, women should really become strong, follow their passions, prove a point and become so strong that these things stop happening. And I think women should be more cognizant, should be more friendly and be happy to collaborate other women. So don&rsquo;t be anxious if another woman is doing well and celebrate with that women and form a community to help other women.</p>', 'Queen Saikia and Rini Pandey', 'Ruchika Agrawal', '2018-03-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `interview_images`
--

CREATE TABLE `interview_images` (
  `image_id` int(11) NOT NULL,
  `interview_id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_images`
--

INSERT INTO `interview_images` (`image_id`, `interview_id`, `image_name`, `admin_id`) VALUES
(12, 4, 'img_int_1.jpeg', 2),
(13, 4, 'img_int_2.jpeg', 2),
(14, 4, 'img_int_3.jpeg', 2),
(15, 5, 'img_int_4.jpg', 2),
(16, 5, 'img_int_5.jpg', 2),
(17, 6, 'img_int_6.jpg', 2),
(18, 6, 'img_int_7.jpg', 2),
(19, 7, 'img_int_8.jpg', 2),
(20, 7, 'img_int_9.jpg', 2),
(21, 8, 'img_int_10.jpg', 2),
(22, 8, 'img_int_11.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `number`, `email`, `message`, `date`, `approved`) VALUES
(4, 'Hitesh', '7441189954', 'ahuja.hits812@yahoo.com', 'hey there... I am just checking something', '2017-10-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `show_type` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `heading`, `description`, `show_type`, `link`, `thumbnail`, `date`, `admin_id`) VALUES
(6, 'Be My Guest Episode 1 | UTHAAN | ABV-IIITM', 'First episode of Be My Guest (Talkshow of UTHAAN IIITM).', 1, 'https://www.youtube.com/embed/k8RYRPNSq0A', 'img_show_1.jpg', '2017-10-10', 1),
(7, 'THE BIG DEBATE', 'Uthaan Presents "The Big Debate". A show which presents a student''s perspective on the various issues prevalent across the nation. ', 2, 'https://www.youtube.com/embed/gvkXR56bp3U', 'img_show_2.png', '2017-10-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `update_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update_id`, `content`, `date`, `admin_id`) VALUES
(8, 'IIITM Diaries (photography event) will start from 14th march', '2018-03-19', 2),
(9, 'Superficial News Reporting is on 20th March at 5 PM', '2018-03-19', 2),
(10, 'Results of IIITM Diaries has been declared on our FB Page', '2018-03-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_link` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `thumbnail` varchar(10) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `admin_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`interview_id`);

--
-- Indexes for table `interview_images`
--
ALTER TABLE `interview_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`update_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `article_images`
--
ALTER TABLE `article_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `interview_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `interview_images`
--
ALTER TABLE `interview_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
