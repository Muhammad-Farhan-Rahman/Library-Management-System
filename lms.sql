-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 05:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `member_ID` int(11) NOT NULL,
  `address` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`member_ID`, `address`) VALUES
(20110, '14/A, Jublee Road, Dhaka'),
(20111, 'Chand Mansion, 66 Dilkusha, Dhaka'),
(20112, '12 R. K. Mission Rd, Dhaka'),
(20113, '550, Shewrapara, Mirpur, Dhaka'),
(20114, '75/76 Kakrail, Dhaka'),
(20115, 'H/16, Gulshan-1, Dhaka'),
(20116, '44, Dilkusha, Dhaka'),
(20117, '70, Dilkusha, Dhaka'),
(20118, 'B/12, Road#5, Banani, Dhaka'),
(20119, '8, New Eskaton Rd, Dhaka'),
(20121, '218 New Elephant Road, Dhaka'),
(20122, 'House No-20, Road No-5, Dhaka'),
(20123, '10/B Green Square, Green Road, Dhaka'),
(20124, '25/3, kuril, progoti shoroni, Dhaka'),
(20125, '69, D.C.C. Super Market, Gulshan-1, Dhaka'),
(20126, 'House # 2, Gulshan-2, Dhaka'),
(20127, '95, Motijheel, Dhaka'),
(20128, 'Shyamoli House, Sher-E Bangla Nagar, Dhaka'),
(20129, '31, B.b. Avenue, Dhaka'),
(20130, '163, West Rampura, Dhaka'),
(20131, '50 Dit Extn. Road (13th Flr), Fakirapool, Dhaka'),
(20132, '31, B.b. Avenue. G.p.o.box : 4010, Dhaka'),
(20133, '216 Outer Circular Road (2nd Flr) Bara Moghbazar, Dhaka'),
(20134, '751 Sat Masjid Road, Dhanmondi, Dhaka'),
(20135, '28 Dilkusha C/a (12th Flr) Suite-1202, Dhaka'),
(20136, 'House No-20, Road No-5, Dhaka'),
(20137, '10/B Green Square, Green Road, Dhaka'),
(20138, '28 Dilkushe C/a (14th Flr) Sulte-1404, Dhaka'),
(20139, '69, D.C.C. Super Market, Gulshan-1, Dhaka'),
(20140, '44, Dilkusha (3rd Floor), Dhaka'),
(20141, '21/a, Purana Paltan, Dhaka'),
(20142, '362/b Dhanmondi R/a, Dhaka'),
(20143, '137, Haji Osman Gani Rd. (Alu Bazar), Dhaka'),
(20144, '6-37,e-1 Khilgaon Chowdhury Para, Dhaka'),
(20145, '1085/1, Malibagh Chowdhury Para, Dhaka'),
(20146, 'Dhaka Medical college Hospital, Dhaka'),
(20147, '651, Shahin Bagh, Dhaka'),
(20148, '7, Mohakhali C/a, Dhaka'),
(20149, '59 Kazi Nazrul Islam Avenue, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `availability` int(11) DEFAULT NULL,
  `publisher` varchar(30) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `title`, `author`, `arrival_date`, `availability`, `publisher`, `genre`) VALUES
(141439734, 'Strange Case of Dr Jekyll and Mr Hyde', 'Robert Louis Stevenson', '2019-02-17', 10, 'Longman', 'Horror'),
(152479640, 'Sunflower Sisters', 'Martha Hall Kelly', '2020-04-03', 2, 'Ballantine Books', 'Historical Fiction'),
(163583056, 'Fragile Remedy', 'Maria Ingrande Mora', '2018-06-01', 2, 'Flux', 'Science_Fiction'),
(223443553, 'The Old Man and the Sea', ' Ernest Hemingway', '2020-11-12', 7, ' Scribner', 'Literature'),
(278976109, 'Romeo and Juliet', 'William Shakespeare', '2020-08-06', 7, 'Simon Schuster', 'Romance'),
(375831002, 'The Book Thief', 'Markus Zusak', '2020-02-06', 0, 'Alfred A. Knopf', 'Drama'),
(375831212, 'The Diary of a Young Girl', 'Anne Frank', '2019-07-02', 6, 'Bantam Books', 'Auto_Biography'),
(384763686, 'Memoirs of a Geisha', 'Arthur Golden', '2018-06-19', 2, 'Vintage Books USA', 'Historical Fiction'),
(399155341, 'The Help', 'Kathryn Stockett', '2019-12-05', 2, 'Amy Einhorn Books', 'Historical Fiction'),
(439064864, 'Harry Potter and the Chamber of Secrets', 'J. K. Rowling', '2018-03-03', 7, 'Arthur A. Levine Books', 'Fantasy'),
(450040186, 'The Shining', 'Stephen King', '2019-04-17', 2, 'New English Library', 'Horror'),
(459847920, 'The Adventures of Huckleberry Fin', 'Mark Twain', '2020-08-13', 3, 'Penguin Classics', 'Adventure'),
(487563469, 'Little Women', 'Louisa May Alcott', '2020-02-14', 11, 'Signet Classics', 'Romance'),
(525539766, 'Eternal', 'Lisa Scottline', '2020-08-05', 4, 'Putnam', 'Fiction'),
(545139708, 'Harry Potter and the Deathly Hallows', 'J. K. Rowling', '2018-11-15', 7, 'Arthur A. Levine Books', 'Fanatsy'),
(553380168, 'A Brief History of Time', 'Stephen Hawking', '2020-07-06', 8, 'Bantam Books', 'Non_Fiction'),
(610072262, 'The Exorcist', 'William Peter Blatty', '2019-07-02', 4, 'HarperTorch', 'Horror'),
(628680201, 'The Consequences of Fear', 'Jacqueline Winspear', '2020-10-13', 5, 'Harper', 'Mystery'),
(642783769, 'The Alchemist ', 'Paul Coelho', '2019-07-15', 6, 'HarperOne', 'Fantasy'),
(654123987, 'The Poisonwood Bible', 'Barbara Kingsolver', '2019-05-09', 10, 'Harper Perennial Modern Classi', 'Historical'),
(654678632, 'Life of Pi', 'Yann Martel', '2019-12-11', 6, 'Seal Books ', 'Fatasy'),
(666777888, 'Where the Wild Things Are', 'Maurice Sendak', '2019-09-01', 4, 'Red Fox', 'Adventure'),
(678543129, 'One Hundred Years of Solitude', 'Gabriel Garc?a M?rquez', '2020-01-05', 7, 'Harper', 'Magical Realism'),
(743273567, 'The Great Gatsby', 'F. Scott Fritzgerald', '2019-04-22', 5, 'Scribner', 'Drama'),
(754795939, 'Green Eggs and Ham', 'Dr. Seuss', '2020-05-23', 5, 'Random House Books', 'Fantasy'),
(759487450, 'Hamlet', 'William Shakespeare', '2020-08-05', 3, 'Cambridge University Press', 'Drama'),
(777543543, 'A Clockwork Orange', 'Anthony Burgess', '2018-12-12', 3, 'W. W. Norton & Company', 'Fiction'),
(843765970, 'The Giving Tree', 'Shel Silverstein', '2019-11-03', 3, 'Harper Collins  publicatons', 'Fiction'),
(844654676, 'The Picture of Dorian Gray', 'Oscar Wilde', '2019-05-06', 2, 'Random House', 'Fantasy'),
(877889966, 'The Stranger', 'Albert Camus', '2019-04-09', 3, 'Vintage International', 'Philosophy'),
(908673421, 'The Kite Runner', 'Khaled Hosseini', '2019-02-01', 5, 'Riverhead Books', 'Fiction'),
(918273645, 'Atlas Shrugged', 'Ayn Rand', '2020-07-02', 11, 'Plume', 'Philosophy'),
(934927948, 'Farenheit 451', 'Ray Bradbury', '2019-10-11', 3, 'Simon & Schuster', 'Science_Fiction'),
(962396409, 'Charlottes Web', 'E.B. White', '2020-02-14', 2, 'HarperCollins Publishers', 'Fantasy'),
(978031676, 'The Catcher in the Rye', 'J.D. Salinger', '2020-01-02', 2, 'Back Bay Books', 'Drama'),
(978143320, '1984', 'George Orwell', '2018-07-21', 2, 'New American Library', 'Science_Fiction'),
(978147225, 'American Gods', 'Neil Gaiman', '2018-03-06', 7, 'Harper Collins', 'Fantasy'),
(978149450, 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', '2020-03-31', 4, 'Harper Collins', 'Non_Fiction'),
(986574566, 'The Count of Monte Cristo', 'Alexandre Dumas', '2018-09-09', 0, 'Penguin Classics', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `library_staff`
--

CREATE TABLE `library_staff` (
  `staff_ID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `login_ID` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library_staff`
--

INSERT INTO `library_staff` (`staff_ID`, `name`, `email`, `login_ID`, `password`) VALUES
(10111, 'Dana Poole', 'danapoole@gmail.com', 'dana.poole', 'dana1212poole'),
(10112, 'Kendra Luna', 'luna@gmail.com', 'kendra.luna', 'idontknow'),
(10113, 'Abdul Rayhan', 'abdul@yahoo.com', 'abdul_rayhan', 'abdrn19'),
(10114, 'Rafsan Karim', 'karim@gmail.com', 'rafsan_karim', 'k4rim11'),
(10115, 'Sarah Tasnim', 'sarahtasnim@gmail.com', 'sarah_tasnim', 'sarahsarah'),
(10116, 'Faizul Hasan', 'faizul@gmail.com', 'faizul.hasan', '111hasan'),
(10117, 'Fazle Labib', 'fazlelabib@gmail.com', 'fazle.labib', '123'),
(10118, 'Md Amit', 'mdamit@gmail.com', 'md.amit', '123'),
(10119, 'Farhan Rahman', 'farhanrahman@yahoo.com', 'farhan.rahman', '123'),
(10121, 'Maisha Tasnim', 'maishatas@yahoo.com', 'maisha.tasnim', 'feuysdtf8sbsiy'),
(10122, 'Nafis Karim', 'nafisk@gmail.com', 'nafis.karim', 'hkarate24'),
(10123, 'Shahin Islam', 'shahinbd12@yahoo.com', 'shahin.islam', 'kfbsadkudu'),
(10124, 'Maliha Tashfi', 'maliha6565@gmail.com', 'maliha.tashfi', '953yhrishkj'),
(10125, 'Akbar Alim', 'akbarruler@gmail.com', 'akbar.alim', '5926gsasg'),
(10126, 'Imran Hossain', 'imran6577@yahoo.com', 'imran.hossain', 'nagasaki8743'),
(10127, 'Valentina Mithylin', 'valentinamithylin@gmail.com', 'valentina.mithylin', '123'),
(10128, 'Shadman Shahreyar', 'shadmanshahreyar@gmail.com', 'shadman.shahreyar', '123'),
(10129, 'Kiriti Chakma', 'kiritibati765@yahoo.com', 'kiriti.chakma', '83trugvahfiyus'),
(10130, 'Disha Haque', 'dishah@gmail.com', 'disha.haque', 'ihfiuydgii6ig5i'),
(10131, 'Patricia Reynolds', 'patricia.reynolds@gmail.com', 'patricia_reynolds', 'ksguhgje256'),
(10132, 'Kimberly Abston', 'kimberly.abston46@yahoo.com', 'kim_abston', 'sflwrsfhusg'),
(10133, 'Geneva Smith', 'smith4298@gmail.com', 'geneva_smith', 'dhfeouh24'),
(10134, 'Ryan Wilson', 'ryan.wilson435@gmail.com', 'ryan.wilson', 'saifsfmo3728'),
(10135, 'Noah Adams', 'noah.adams312@gmail.com', 'adams.noah', 'ketiahoal314'),
(10136, 'Gladys Whitaker', 'gladys.whitaker55@gmail.com', 'gladys.whitaker', 'segjalmenal'),
(10137, 'Jeffrey Newman', 'jeffrey.newman98@yahoo.com', 'newman.jeffrey', '8225snfuahf'),
(10138, 'James Cardwell', 'cardwell.james@yahoo.com', 'cardwell.james', 'lsdfhkgknl'),
(10139, 'Diana Smith', 'smith.diana@yahoo.com', 'diana.smith', 'jidfjasksg565'),
(10140, 'Bill Wilkins', 'bill.wilkins@yahoo.com', 'bill_wilkins', '2323dgntnw'),
(10141, 'Marilyn Pratt', 'marilynpratt@yahoo.com', 'marilyn.pratt', 'sjkbfdhs8i8'),
(10142, 'Sandy Norris', 'sandynorris99@gmail.com', 'sandy_norris', '982348heuwfdh'),
(10143, 'Sue Robinson', 'suerobinson1987@gmail.com', 'sue_robinson', 'lksknlksf98098'),
(10144, 'Sue Robinson', 'danmullins@gmail.com', 'dan.mullins', 'shjg5e72367g'),
(10145, 'Whitney Clayton', 'whitneyclayton@gmail.com', 'whitney.clayton', 'dasdges89'),
(10146, 'Salvatore Flores', 'salvatoreflores@gmail.com', 'salvatore_flores', 'jneakjsdnk'),
(10147, 'Gladys Austin', 'gladysaustin@yahoo.com', 'gladys_austin', 'jkduiw798u'),
(10148, 'Frederick Mathis', 'frederickmathis23@gmail.com', 'frederick.mathis', 'jhifhdwe787h'),
(10149, 'Rogelio Goodwin', 'rogeliogoodwin@gmail.com', 'rogelio.goodwin', 'ddhjwbedgew88'),
(10150, 'Cornelius Reeves', 'corneliusreeves94@gmail.com', 'cornelius_reeves', 'uighadyu889');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `issue_ID` int(11) NOT NULL,
  `member_ID` int(11) DEFAULT NULL,
  `book_name` varchar(50) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`issue_ID`, `member_ID`, `book_name`, `return_date`, `issue_date`, `due_date`) VALUES
(30110, 20110, 'Atlas Shrugged', '0000-00-00', '2021-05-07', '2021-05-18'),
(30111, 20111, 'The Poisonwood Bible', '0000-00-00', '2021-05-10', '2021-05-19'),
(30112, 20114, 'The Old Man and the Sea', '0000-00-00', '2021-05-11', '2021-05-21'),
(30113, 20115, 'Little Women', '2021-05-09', '2021-05-07', '2021-05-15'),
(30114, 20118, 'A Brief History of Time', '2021-05-08', '2021-05-03', '2021-05-11'),
(30115, 20120, 'American Gods', '2021-05-05', '2021-05-01', '2021-05-09'),
(30116, 20121, 'Life of Pi', '0000-00-00', '2021-05-13', '2021-05-23'),
(30117, 20122, 'The Kite Runner', '0000-00-00', '2021-05-11', '2021-05-24'),
(30118, 20123, 'Sapiens: A Brief History of Humankind', '2021-05-01', '2021-04-25', '2021-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `maintains`
--

CREATE TABLE `maintains` (
  `staff_ID` int(11) NOT NULL,
  `ISBN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintains`
--

INSERT INTO `maintains` (`staff_ID`, `ISBN`) VALUES
(10111, 918273645),
(10112, 654123987),
(10113, 223443553),
(10115, 487563469),
(10121, 553380168),
(10122, 978147225),
(10125, 654678632),
(10129, 908673421),
(10131, 978149450);

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `staff_ID` int(11) NOT NULL,
  `issue_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`staff_ID`, `issue_ID`) VALUES
(10111, 30110),
(10112, 30111),
(10113, 30112),
(10115, 30113),
(10121, 30114),
(10122, 30115),
(10125, 30116),
(10129, 30117),
(10131, 30118);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `login_ID` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `phone_no` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `email`, `login_ID`, `password`, `phone_no`) VALUES
(20110, 'Sadia Tasnim', 'sadiatasnim@gmail.com', 'sadia.tasnim', 't4sn1m44', '01537681268'),
(20111, 'Rofique Hassan', 'r.hassan@gmail.com', 'rofique.hassan', 'rh$$hsn', '01659636989'),
(20112, 'Fazle Labib', 'fazle.labib@gmail.com', 'fazle_labib', '123', '01711020755'),
(20113, 'Md Amit', 'md.amit@gmail.com', 'md_amit', '123', '01719259109'),
(20114, 'Farooque Hoque', 'farooque@yahoo.com', 'farooque_hoque', 'frq_hq', '01518113725'),
(20115, 'Afrin Samiha', 'afrin.s@yahoo.com', 'afrin.samiha', '1922afrn', '01970061354'),
(20116, 'Valentina Mithylin', 'valentina23@gmail.com', 'valentina_mithylin', '123', '01733565212'),
(20117, 'Farhan Rahman', 'farhan.rahman@yahoo.com', 'farhan_rahman', '123', '01723321530'),
(20118, 'Rashid Khan', 'rashidkhn@gmail.com', 'rashid_khan', 'khn11rd', '01748843077'),
(20119, 'Shadman Shahreyar', 'shadman.shahreyar@gmail.com', 'shadman_shahreyar', '123', '01612231025'),
(20121, 'Aniken Skywalker', 'anikenvold@gmail.com', 'aniken.skywalker ', 'darthvader33', '01786574321'),
(20122, 'Peter Merevich', 'peteryolo@gmail.com', 'peter.merevich', 'motherrussia46', '01657694990'),
(20123, 'Jonathan Ross', 'jonathan346@gmail.com', 'jonathan.ross', 'patriotiron78', '01747836569'),
(20124, 'Raya Jahan', 'rayau2@yahoo.com', 'raya.jahan', 'innerbeauty65', '01608372468'),
(20125, 'Khorsheda Begum', 'khorsheda999@gmail.com', 'khorsheda.begum', '327945ewig', '01709859542'),
(20126, 'Lamia Tasnuva', 'lamia49087@gmail.com', 'lamia.tasnuva', '745eibsdkjdg', '01563544881'),
(20127, 'Aukik Arnob', 'aukikboy24@yahoo.com', 'aukik.arnob', '999djvdlbkbf', '01592476395'),
(20128, 'Etheshamul Joy', 'joyride456@gmail.com', 'etheshamul.joy', 'toystory345', '01792743697'),
(20129, 'Nagib Mahfuz', 'mahfuzbreezy@gmail.com', 'nagib.mahfuz', '987sfbsj99bek', '01892867492'),
(20130, 'Kaitlyn Swan', 'kaitlyn94@gmail.com', 'kaitlyn.swan', 'afbasmdh4155', '01850483211'),
(20131, 'Christopher Ferguson', 'christopher893@yahoo.com', 'christopher_ferguson', 'uefygd1332', '01566634328'),
(20132, 'Sarah Wright', 'sarah.wright@gmail.com', 'sarah.wright', 'dvhbnakfer', '01511775371'),
(20133, 'Fritz Reign', 'reign.fritz@gmail.com', 'fritz.reign', 'lucifer33666', '01792356225'),
(20134, 'Carl Wayne', 'carlwayne29@gmail.com', 'carl.wayne', 'zkudfgsm23', '01975814462'),
(20135, 'Marguerite M. Johns', 'margeurite.johns@gmail.com', 'margeurite.johns', 'wfuhefhj_412', '01876522001'),
(20136, 'Raoul Davignon', 'davignon.raoul1778@gmail.com', 'raoul.davignon', '333sjnudwr', '01718962641'),
(20137, 'Clara Holm', 'clara.holm@yahoo.com', 'clara.holm', 'satghijg4266', '01918662944'),
(20138, 'Ralph Lauren', 'ralphlauren8@gmail.com', 'ralph.lauren', 'skyrcketfwn12', '01691224287'),
(20139, 'Barry L. Turner', 'barry.turner0721@gmail.com', 'barry_turner', '9357wefuffqw', '01617844392'),
(20140, 'Sam Long', 'samlong21@gmail.com', 'sam_long', '578gassffdyat78', '01770578638'),
(20141, 'Darrel Matthews', 'darrelmatthews92@gmail.com', 'darrel_matthews', '32t78gtgvy66', '01542327938'),
(20142, 'Janice Wong', 'janicewong@gmail.com', 'janice_wong', 'yusgauysg78t78', '01567342890'),
(20143, 'Tommy Chandler', 'tommychandler1998@gmail.com', 'tommy_chandler', 'tsafdy6216hasg', '01998769876'),
(20144, 'Courtney Park', 'courtneypark1988@gmail.com', 'courtney.park', 'uyasgdtyas666', '01788996655'),
(20145, 'Woodrow Vaughn', 'woodrowvaughn@gmail.com', 'woodrow.vaughn', 'sgvs1712bjbhj', '01754778901'),
(20146, 'Ryan Barnett', 'ryanbarnett@gmail.com', 'ryan_barnett', 'uyagsgs7676g', '01552456234'),
(20147, 'Brent Burgess', 'brentburgess1994@gmail.com', 'brent.burgess', '9197huystfty98', '01994589345'),
(20148, 'Megan Fitzgerald', 'meganfitzgerald@gmail.com', 'megan_fitzgerald', 'hgasuy1i9g26', '01663452319'),
(20149, 'Genevieve Jefferson', 'genevievejefferson01@gmail.com', 'genevieve_jefferson', '11277gghas00', '01714396669');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `member_ID` int(11) NOT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`member_ID`, `ISBN`, `return_date`, `due_date`) VALUES
(20110, 918273645, '0000-00-00', '2021-05-18'),
(20111, 654123987, '0000-00-00', '2021-05-19'),
(20114, 223443553, '0000-00-00', '2021-05-21'),
(20115, 487563469, '2021-05-09', '2021-05-15'),
(20118, 553380168, '2021-05-08', '2021-05-11'),
(20120, 978147225, '2021-05-05', '2021-05-09'),
(20121, 654678632, '0000-00-00', '2021-05-23'),
(20122, 908673421, '0000-00-00', '2021-05-24'),
(20123, 978149450, '2021-05-01', '2021-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`member_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `library_staff`
--
ALTER TABLE `library_staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`issue_ID`);

--
-- Indexes for table `maintains`
--
ALTER TABLE `maintains`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`member_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
