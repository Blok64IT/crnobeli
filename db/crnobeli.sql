-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 01:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crnobeli`
--

-- --------------------------------------------------------

--
-- Table structure for table `articlemail`
--

CREATE TABLE `articlemail` (
  `article_id` int(11) NOT NULL,
  `email_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `main_image` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `main_content` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `autor`, `published`, `content`, `image`, `page_id`, `main_image`, `main_content`) VALUES
(3, 'NOTTS COUNTY', 'Marko Stojanovic', '2017-07-07 14:03:37', 'Zemlja: Engleska\r\nGrad: Notingem\r\nOsnovan: 28. novembra 1862. godine (152)\r\nTrofeji: 1 FA kup (1894), 3 Cempionsipa (1897, 1914, 1923)\r\n\r\nOd njih je sve krenulo...\r\n\r\nMoze se slobodno reci da je crno-bela kombinacija boja na fudbalskim dresovima medju najstarijima na planeti. To su boje Nots Kauntija, kluba sa najduzim stazom u profesionalnom fudbalu.\r\n', 'nc5454340240.jpg', 5, 'ncstadium800400.jpg', 'Zemlja: Engleska\r\nGrad: Notingem\r\nOsnovan: 28. novembra 1862. godine (152)\r\nTrofeji: 1 FA kup (1894), 3 Cempionsipa (1897, 1914, 1923)\r\n\r\nOd njih je sve krenulo...\r\n\r\nMoze se slobodno reci da je crno-bela kombinacija boja na fudbalskim dresovima medju najstarijima na planeti. To su boje Nots Kauntija, kluba sa najduzim stazom u profesionalnom fudbalu.\r\n\r\nNots Kaunti se nije naosvajao pehara, a najznacajniji krasi trofejne vitrine na stadionu Medou lejna jos od 19. veka. "Svrake" su 1894. osvojile prvi i jedini FA kup. Trenutno je clan Prve fudbalske lige Engleske (treca liga), ali navijaci su zadovoljni jer je ne tako davno klub izbegao bankrot i gasenje.\r\n\r\nTaj jedini FA kup osvojen u crno-belim dresovima, koji su u klubu iz Notingema postali standardni cetiri godine ranije. Pre toga boja dresova je bila tamno zuta, a jedno vreme braon i plava.\r\n\r\nZbog Nots Kauntija boje Juventusa su takodje crna i bela, samim tim i Partizana. Ali o tome nesto kasnije...  "Stara dama" se engleskom klubu oduzila pre nekoliko godina kada ga je ugostila prilikom otvaranja novog stadiona. Mec je odigran 8. septembra 2011. i zavrsen je rezultatom 1:1.\r\n\r\nNe tako davno dvojica navijaca Nots Kauntija stigla su u Partizanovim dresovima u Podgoricu na mec izmedju Crne Gore i Engleske. Sredinom prosle decenije, dok je engleski klub prozivljavao najteze dane u istoriji, na jednoj aukciji od prodaje dresa beogradskih crno-belih (poslat od strane FK Partizan) prikupljen je deo novca za pomoc Nots Kauntiju. U Humsku je posle toga stigla zahvalnica sa porukom: "FK Partizan je pomogao da se spasi najstariji fudbalski klub na svetu".'),
(4, 'BOTAFOGO', 'Marko Stojanovic', '2017-07-07 14:05:06', 'Zemlja: Brazil\r\nGrad: Rio de Zaneiro\r\nOsnovan: 12. avgust 1904. (109)\r\nTrofeji: 20 titula Sampionata Karioka, 2 titule prvaka Brazila, 7 Kupova Guanabara, 9 Kupova Rija, 1 Medjudrzavni kup, 1 KONMEBOL kup\r\n\r\n', 'botafogo62340240.jpg', 5, 'botafogo800400.jpg', 'Zemlja: Brazil\r\nGrad: Rio de Zaneiro\r\nOsnovan: 12. avgust 1904. (109)\r\nTrofeji: 20 titula Sampionata Karioka, 2 titule prvaka Brazila, 7 Kupova Guanabara, 9 Kupova Rija, 1 Medjudrzavni kup, 1 KONMEBOL kup\r\n\r\nI ovaj juznoamericki gigant svoje najvece uspehe gradio je na crno-belim bojama.\r\n\r\nU odabiru klupskog kolorita ozbiljnu ulogu odigrao je, doduse indirektno, samo sedam godina stariji, ali vec dovoljno popularan - Juventus. Skolski drugovi sa Koledza Alfredo Gomes su tokom nastave iz algebre dosli na ideju da osnuju fudbalski klub. Flavio Ramos obratio se svom prijatelju Emanuelu Sodreu i predlozio mu da formiraju tim kao pandan tek osnovanom klubu iz Martins Fereire ulice.\r\n\r\nTako je nastao Elektro klub, koji je brzo promenio ime u Botagofo i to na predlog Falvijeve bake, jer se njoj nimalo nije svidelo prvobitno ime.\r\n\r\nOko izbora boja nije bilo rasprave.\r\n\r\nS obzirom da je jedan od studenata osnivaca Itamar Tavares bio vatreni navijac Juventusa, predlog da "Estrelu Solitariju" oboje u crno-bele boje odmah je prihvacen.\r\n\r\nBotafogo vec 1907. osvaja prvenstvo Rija i postaje jedan od najmocnijih klubova grada i okoline... Nilton Santos, Karlos Alberto, Zairzinjo, Didi, a posebno Garinca, sa ponosom su igrali i sirili slavu crno-belih sa cuvene Marakane.'),
(5, 'JUVENTUS', 'Marko Stojanovic', '2017-07-07 14:05:06', 'Zemlja: Italija\r\nGrad: Torino\r\nOsnovan: 1. novembra 1897. (116)\r\nTrofeji: 29 titula prvaka Italije (dve oduzete), 9 Kupova Italije, 6 Superkupova Italije, 2 Lige sampiona, 1 Kup UEFA, 1 Kup kupova, 1 Intertoto kup, 2 UEFA superkupa, 2 Interkontinentalna kupa', 'juve834340240.jpg', 5, 'juve800400.jpg', 'Zemlja: Italija\r\nGrad: Torino\r\nOsnovan: 1. novembra 1897. (116)\r\nTrofeji: 29 titula prvaka Italije (dve oduzete), 9 Kupova Italije, 6 Superkupova Italije, 2 Lige sampiona, 1 Kup UEFA, 1 Kup kupova, 1 Intertoto kup, 2 UEFA superkupa, 2 Interkontinentalna kupa\r\n\r\nCrno-bela boja medju fudbalskim timovima postala je popularna najvise zahvaljujuci Juventusu. Veliki svetski i evropski klubovi kasnije su po uzoru na "staru damu" poceli da koriste ovu kombinaciju, a medju njima su i dva iz nase price - beogradski Partizan i Botafogo.\r\n\r\nMedjutim, "bjanko-nero" nije originalna boja Juventusovog dresa. U pocetku, prvih sest godina posto su studenti iz Torina osnovali klub, bio je roze boje, a sorc crne. Cuvena crno-bela garnitura italijanskog velikana potice od Nots Kauntija i postala je aktuelna 1903. i to na bizaran nacin.\r\n\r\nEvo i kako...\r\n\r\nPromena boja na dresovima dogodila se samo zato sto su im poslate pogresne garniture. Ali, crna i bela nisu slucajno pokucale na vrate mladog kluba.\r\n\r\nNaime, kako je boja na prvobitnim pink dresovima izbledela tokom nosenja, klub je odlucio da ih zameni. Zamolili su svog igraca, Engleza Dzona Sevidza da se raspita na Ostrvu da li postoje majice sa kvalitetnijom bojom koja se nece ispirati. On je zaduzio prijatelja da mu posalje nove dresove, a kako je prijatelj bio iz Notingema i veliki navijac Nots Kauntija, u Torino su stigle majice na crno-bele pruge.\r\n\r\nTe boje postaju zvanicne i simbolizuju snagu i moc. Ova kombinacija postala je omiljena kod Juventina kada je dve godine kasnije osvojena prva titula.\r\n\r\n"Bjankoneri" su zavladali Italijom i danas su najtrofejniji klub na "čizmi". Evropa i svet dva puta su bili pod Juventusovim crno-belim bojama.');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `full_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `full_name`, `email`, `message`) VALUES
(1, 'Ivan Petrovic', 'ivan.petrovic@gmx.com', ' Svaka cast, samo ovako nastavite. '),
(2, 'Igor Todorovic', 'zgro@gmail.com', ' Odlican sajt, ako ste zainteresovani za razmenu banera i uzajamnu promociju sajta javite mi se na gore dodatu email adresu ili na broj mobilnog 0653092013\r\n\r\nPozdrav iz Crno Belog,\r\nNovog Sada'),
(3, 'Magic Man', 'test@gmail.com', ' Crno beli test.'),
(8, 'Ninja', 'learningskills@gmx.com', ' Final test'),
(9, 'Tihomir Spasic', 'tica@gmx.com', 'Jos jedna provera.'),
(10, 'marecar', 'marcofolk@yahoo.com', ' dfdgfd');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `linkref` varchar(1024) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `title`, `linkref`) VALUES
(1, 'index', '?mvcctrl=site&mvcmethod=single&menu_id=1'),
(2, 'uvod', '?mvcctrl=site&mvcmethod=single&menu_id=2'),
(3, 'srbija', '?mvcctrl=site&mvcmethod=single&menu_id=3'),
(4, 'timovi', '?mvcctrl=site&mvcmethod=single&menu_id=4'),
(5, 'istorija', '?mvcctrl=site&mvcmethod=single&menu_id=5'),
(6, 'kontakt', '?mvcctrl=site&mvcmethod=single&menu_id=6'),
(7, 'one-article', '?mvcctrl=site&mvcmethod=single&menu_id=7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_account` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articlemail`
--
ALTER TABLE `articlemail`
  ADD PRIMARY KEY (`article_id`,`email_id`),
  ADD KEY `fk_article_id_idx` (`article_id`),
  ADD KEY `fk_email_id_idx` (`email_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`,`page_id`),
  ADD KEY `fk_article_page_idx` (`page_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articlemail`
--
ALTER TABLE `articlemail`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_email_id` FOREIGN KEY (`email_id`) REFERENCES `email` (`email_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_article_page` FOREIGN KEY (`page_id`) REFERENCES `menu` (`menu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
