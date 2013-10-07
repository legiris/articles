-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Počítač: wm38.wedos.net:3306
-- Vygenerováno: Pát 05. čec 2013, 20:22
-- Verze MySQL: 5.6.10
-- Verze PHP: 5.4.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `d18105_xdanube`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(255) COLLATE utf8_czech_ci NOT NULL,
  `abstract` varchar(5000) COLLATE utf8_czech_ci NOT NULL,
  `file` char(100) COLLATE utf8_czech_ci NOT NULL,
  `author` char(255) COLLATE utf8_czech_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `journal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `journal_id` (`journal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=51 ;

--
-- Vypisuji data pro tabulku `article`
--

INSERT INTO `article` (`id`, `title`, `abstract`, `file`, `author`, `category_id`, `journal_id`) VALUES
(1, 'Trade with Central and Eeastern Europe: Is It Really a Threat to Wages in the West?', 'This paper analyses the relationship between openness to trade and wages at the industry level (15 manufacturing industries) in 25 EU countries over the period from 1995 to 2005.', 'Eva_Polgar-Julia_Worz.pdf', 'Éva Katalin Polgár, Julia Wörz', 1, 1),
(2, 'Varieties of System Transformations and Their Structural Background Based on the IPS Model', 'This article is the theoretical chapter of a planned book. The book aims to contribute to the theoretical foundations of similarities and differences in the transformation of party-state systems.', 'Maria_Csanadi.pdf', 'Mária Csanádi', 1, 1),
(3, 'Economic Law and Economic Crisis. Where Do We Go From Here? Economic, Legal and Political Dimension', 'The impact of the economic crisis, which has rapidly developed and spread into a global economic shock, has become increasingly severe.', 'Rastislav_Funta.pdf', 'Rastislav Funta', 3, 1),
(4, 'The Judicial Development of Law Beyond Statutory Limits in the Draft of the Czech Civil Code', 'The draft of the Czech Civil Code tries to describe, in some way, the rules for determining the law, and thereby render the process objective. By so doing, it apparently differs from the existing concept and seeks guidance from foreign legal regulations.', 'Petr_Bezouska.pdf', 'Petr Bezouška', 3, 1),
(5, 'Bělohlávek, A. J.: Arbitration Law and Practice in the Czech Republic (with regard to the arbitration law in Slovakia)', 'The book has been published in seven languages: English, German, French, Spanish, Polish, Russian and Ukrainian.', 'Arbitration_Law_Belohlavek.pdf', 'Alena Pauličková', 2, 1),
(6, 'Move Closer! New Modes of Governance and Accession to the European Union', 'This paper explores the role of new modes of governance in the EU’s attempts to impact upon states which are not (yet) members or which became members in the 1980s.', 'borzel.pdf', 'Tanja Börzel', 1, 2),
(7, 'Are There Border Effects in the EU Wage Function?', 'We estimate a linear approximation of the market potential function for Europe as derived in geography and trade models. Using a spatial econometric estimation approach, border effects are identified by a differential impact of other regions’ purchasing power, depending on whether two regions are located within the EU15 or outside the EU15.', 'huber.pdf', 'Peter Huber, Michael Pfaffermayr, Yvonne Wolfmayr', 1, 2),
(8, 'Guarantees of the Legality of Administration and Administrative Procedure in Hungary', 'The legality of administration is a fundamental constitutional requirement in a constitutional government. For this reason, modern laws regulating administrative procedure provide for different guarantees of the legality of administration.', 'paulovics.pdf', 'Anita Paulovics', 3, 2),
(9, 'Charter of the Fundamental Rights of the EU in the Context of Protocol No. 30 to Lisbon Treaty', 'The paper focuses on the status of the Charter in some EU member states on the basis of Protocol No. 30, about the specifics of the application of the Charter of Fundamental Rights of the EU in Poland and in the United Kingdom.', 'siskova.pdf', 'Naděžda Šišková', 3, 2),
(10, 'Peo Hansen and Sandy Brian Hager: The Politics of European Citizenship: Deepening Contradictions in Social Rights and Migration Policy', 'The publication is concerned with the topic of EU citizenship. The authors follow the development of the concept from the 1950s through to the 1990s, when EU citizenship was officially embedded in the Maastricht Treaty, until present times.', 'schovankova.pdf', 'Soňa Schovánková', 2, 2),
(11, 'The Poor Health Status of the Hungarians; Comparative Macro-Analysis of the Likely Explanatory Factors on Hungarian and Austrian Data, 1960–2004', 'In Hungary, the health status of working age men is extremely bad in comparison with working age men in both developed market economies and neighboring transition countries.', 'lacko.pdf', 'Mária Lackó', 1, 3),
(12, 'The Global Crisis and the Western Balkans', 'The Western Balkan countries are significantly exposed to the effects of global crisis because most of them are highly indebted abroad, possess insufficient hard currency reserves and experience high balance of payments deficits.', 'stiblar.pdf', 'Franjo Štiblar', 1, 3),
(13, '‘Old-new’ Complaint Procedure of the Human Rights Council', 'The UN Human Rights Council has replaced the Commission on Human Rights in 2006. The complaint procedure used by individual and group of persons to reveal consistent pattern of gross human rights violations, so called the ‘1503 procedure’, was one of the monitoring mechanisms exercised by the Commission.', 'davala.pdf', 'Michal Davala', 3, 3),
(14, 'The Economic and Psychological Context of Tax Evasion in the Example of Hungary', 'The evasion of income taxes causes the national budget of Hungary great damage. Just partial prevention would greatly benefit the state balance and the realization of economic policy in Hungary.', 'nagy.pdf', 'Zoltán Imre Nagy', 3, 3),
(15, 'Riccardo Rebonato: Coherent Stress Testing: A Bayesian Approach to the Analysis of Financial Stress', 'In Plight of the Fortune Tellers, Rebonato explained some of the limitations of data-driven approaches to managing extreme financial risks, based on VaR or similar approaches, but did not really present an alternative.', 'book-review3_11.pdf', 'Danny Yee', 2, 3),
(16, 'The Social Perception of Judicial Decisions', 'In addition to the main social function of the judiciary (solving conflicts), there are other important social tasks of the judiciary that can be summarised as solving conflicts, protecting the interests (rights) of individuals and general (state) interests, social control, the judiciary in the function of a homeostatic mechanism and achieving system legitimacy and control of the executive branch of power.', 'iglicar.pdf', 'Albin Igličar', 1, 4),
(17, 'An Assessment of the Access by Romanian SMEs to Structural Funds', 'In the context of the research underlying this paper, a standardized survey was implemented as an instrument for collecting primary data on the situation, the demands of and the development barriers to Romanian SMEs. The results of the survey were verified in focus groups with consultants and SME administrators.', 'hunya.pdf', 'Gábor Hunya', 1, 4),
(18, 'The Treaty of Lisbon and Essential Changes in the Institutional System of the European Union', 'Following the unsuccessful Treaty on the Constitution for Europe project, European Union member states adopted the Treaty of Lisbon. The Treaty of Lisbon brought about certain amendments in the institutional framework of the European Union, targeted at increasing the efficiency of the Union’s activities.', 'hruskovic.pdf', 'Ivan Hruškovič', 3, 4),
(19, 'The Debt Crisis and the Means of Enforcing the Budgetary Discipline of EU Member States', 'In reaction to the problems related to the excessive deficit and the imminent default of Greece that threatened the currency stability of the whole euro area, the EU adopted several legislative measures in order to safeguard EU Member States from default and to perhaps prevent similar circumstances from reappearing in the future.', 'kacaljak.pdf', 'Matej Kačaljak', 3, 4),
(20, 'Alan B. Albarran: The Media Economy', 'With everyone looking for the business model that puts the economy back in media economy, books with that title raise great hopes. The difficulty in writing a book about the media economy is that the ecosystem is so fluid that any attempt to describe it is in danger of becoming history and not a model for the future.', 'book-review4_11.pdf', 'Gary Kebbel', 2, 4),
(21, 'Stronger Sex but Earlier Death: A Multi-level Socioeconomic Analysis of Gender Differences in Mortality in Austria', 'Gender inequalities in mortality/life expectancy have been a major area of research in the social sciences since the 1970s. However, the questions posed and the research strategies used are still in a state of flux.', 'gachter.pdf', 'Martin Gächter, Peter Schwarz, Engelbert Theurl', 1, 5),
(22, 'MCMC Estimation of Extended Hodrick-Prescott (HP) Filtering Models', 'The Hodrick-Prescott (HP) method was originally developed to smooth time series, i.e. to get a smooth (long-term) component. We show that the HP smoother can be viewed as a Bayesian linear model with a strong prior for the smoothness component.', 'polasek.pdf', 'Wolfgang Polasek', 1, 5),
(23, 'Finances of the Professional Football Enterprises', 'Since the 1990s, professional football has been experiencing an unprecedented economic boom worldwide, but only a few football clubs can meet the rapidly-changing economic requirements.', 'nagy2.pdf', 'Zoltán Imre Nagy', 3, 5),
(24, 'The Analysis of Czech Arbitral Court Verdicts in Cases of .eu Domain Names', 'The concern of this contribution is a problem connected with a limited usage of Internet space, which is based on domain names connecting common users with terminal information for the World Wide Web.', 'gongol.pdf', 'Tomáš Gongol', 3, 5),
(25, 'Anirudh Krishna: One Illness Away: Why People Become Poor and How They Escape Poverty', 'If the poverty rate in a country has dropped by 5% over a decade that suggests steady progress, but the reality behind such a figure is likely to be that 15% of the population succeeded in escaping poverty while 10% fell into it.', 'book-review1_12.pdf', 'Danny Yee', 2, 5),
(26, 'Modern Forms of Business in Professional Football', 'This study is a continuation of my previous article (Nagy, 2012). You will find an analysis of legal forms eligible for football clubs, as well as the method of management by the owner determined primarily by such forms there.', 'nagy3.pdf', 'Zoltán Imre Nagy', 1, 6),
(27, 'World Tax Index: Methodology and Data', 'The article presents an indicator of tax burden that can be used as an alternative to tax quota, or implicit tax rates in macroeconomic analyses.', 'kotlan_machova2.pdf', 'Igor Kotlán, Zuzana Machová', 1, 6),
(28, 'Legal and Economic Analysis of Cartels, their Enforcement and the Leniency Program', 'Cartels are generally acknowledged as one of the most serious forms of anti-competitive behaviour between competitors.', 'funta2.pdf', 'Rastislav Funta', 3, 6),
(29, 'Euro: Advantageous for Slovakia?', 'After the implementation of the euro exchange differential, transactional and different administrative costs have been removed, which signals the expectation of even better connections between Slovakia and eurozone markets.', 'paulickova2.pdf', 'Alena Pauličková', 3, 6),
(30, 'Edward E. Leamer: Macroeconomic Patterns and Stories', 'What would you do if you had to teach a new course and, in the evaluation at the end, you found out that the students did not like it?', 'book-review_2_12.pdf', 'Wolfgang Polasek', 2, 6),
(31, 'Why Labor Market Response Differed in the Great Recession: The Impact of Institutions and Policy', 'This paper investigates the performance of labor markets during the recent crisis for 28 industrialized countries, specifically the reaction of employment and unemployment indicators relative to output changes.', 'aiginger_k_et_al.pdf', 'Karl Aiginger, Thomas Horvath, Helmut Mahringer', 1, 7),
(32, 'Corporate Obligations under the Right to a Healthy Living Environment', 'In recent decades, globalisation has stirred up a number of positive and negative developments in national and international environments. An important feature of globalisation is the rise of the economic, social, cultural and political power of corporations.', 'cernic_jl.pdf', 'Jernej Letnar Černič', 1, 7),
(33, 'International Environmental Law and Acceleration of Global Change', 'Anthropogenic pressures on the Earth System have reached a scale where major environmental change can no longer be excluded. Science has already set planetary environmental boundaries within which humanity can operate safely.', 'bogataj_lk.pdf', 'Lučka Kajfež Bogataj', 3, 7),
(34, 'Immigration and the Distribution of Wages in Austria', 'Using detailed micro data on earnings and employment, I analyse the effects of immigration on the wage distribution of native male workers in Austria. I find that immigration has heterogeneous effects on wages, differing by type of work as well as the wage level.', 'horvath_t.pdf', 'Thomas Horvath', 3, 7),
(35, 'Abhijit V. Banerjee & Esther Duflo: Poor Economics: A Radical Rethinking of the Way to Fight Global Poverty', 'Poor Economics is not actually “a radical rethinking”; indeed, it has an epilogue titled “In Place of a Sweeping Conclusion”. It offers an overview of poverty and approaches to its alleviation, but does not attempt to shoehorn the varied range  of topics and approaches this encompasses into a single overarching framework or dramatic result.', 'book-review_3_12.pdf', 'Danny Yee', 2, 7),
(36, 'Pension Reforms in an Aging Society: A Fully Displayed Cohort Model', 'We fully display a cohort model of an economy with an aging population, taking into account complications such as varying household size, habit formation, inheritance and credit constraints.', 'simonovits.pdf', 'András Simonovits', 1, 8),
(37, 'Case Law of the Constitutional Court of Slovenia and the Protection of the Environment', 'This paper gives an analysis of the Slovenian Constitution, its provision on a healthy living environment and other relevant provisions, including those on the jurisdiction of the Constitutional Court.', 'skrk.pdf', 'Mirjam Škrk', 1, 8),
(38, 'The Laws of Nature Also Apply to Human Society', 'The contribution summarises basic laws and principles ruling processes in nature. It discusses the relationship between human society and Earth as a system.', 'gaberscik.pdf', 'Alenka Gaberščik', 3, 8),
(39, 'Recent Developments in Austrian Foreign Trade', 'The paper was prepared as a FIW report and presents an overview of the recent developments in Austrian foreign trade. The first part of the discussion is focusing on the key developments in Europe during the economic and debt crisis and in other relevant countries.', 'astrov.pdf', 'Vasily Astrov, Yvonne Wolfmayr', 3, 8),
(40, 'Francis Spufford: Red Plenty: Inside the Fifties´ Soviet Dream', 'Red Plenty is a novel – or perhaps more accurately a short story cycle – about Soviet central planning, set in a decade-long arc across the 1960s.', 'book-review4_12.pdf', 'Danny Yee', 2, 8),
(41, 'The Impact of Migration Policy on Migrants’ Education Structure: Evidence from Austrian Policy Reform', 'We ask how reform of migration law intended to increase the selectivity of migration (the so-called integration agreement regulation in 2003) in Austria impacted on the education structure of migrants to Austria.', 'huber-bock.pdf', 'Peter Huber, Julia Bock-Schappelwein', 1, 9),
(42, 'Does Globalization Affect Regional Growth? Evidence for NUTS-2 Regions in EU-27', 'We analyze the influence of newly constructed globalization measures on regional growth for the EU-27 countries between 2001 and 2006.', 'polasek-sellner.pdf', 'Wolfgang Polasek, Richard Sellner', 1, 9),
(43, 'Economic and Political Corruption in Hungary', 'Every society must pay the “price of democracy” and in this price are “calculated” the rising number of crimes and the change in their quality, and also the unique alterations of corruption, among other things.', 'kohalmi.pdf', 'László Kőhalmi', 3, 9),
(44, 'Effective Tax Rates in the Moravian-Silesian Region', 'The aim of this work is to evaluate the effective corporate tax rate in the Moravian-Silesian Region in the Czech Republic on the basis of a backward-looking micro view.', 'janickova.pdf', 'Lenka Janíčková', 3, 9),
(45, 'Roberta Capello, Ugo Fratesi & Laura Resmini: Globalization and Regional Growth in Europe – Past Trends and Future Scenarios', 'The book starts with the sentence “Globalisation is not a state of the world but an evolutionary process...” You may or may not like this sentence, but it shows a rather common tendency in applied social sciences: explain one term by reference to one or more additional undefined terms.', 'review_4_1.pdf', 'Wolfgang Polasek', 2, 9),
(46, 'Does Higher Tax Morale Imply Higher Optimal Labor Income Tax Rate?', 'We analyze the impact of tax morale on optimal progressive labor income taxation. Only universal basic income is financed from a linear tax and the financing of public goods is neglected.', 'simonovits2.pdf', 'András Simonovits', 1, 10),
(47, 'Determinants of the Spatial Distribution of Foreign Employees on Different Skill Job Positions: The Case of the Czech Republic', 'The aim of the paper is to discuss the spatial distribution of foreign employees in highlyskilled, skilled and unskilled job positions by using correlation and regression analyses.', 'schovankova.pdf', 'Soňa Schovánková', 1, 10),
(48, 'Should Non-Euro Area Countries Join the Single Supervisory Mechanism?', 'Irrespective of the euro crisis, a European banking union makes sense, including for non-euro area countries, because of the extent of European Union financial integration. The Single Supervisory Mechanism (SSM) is the first element of the banking union.', 'darvas.pdf', 'Zsolt Darvas, Guntram B. Wolff', 3, 10),
(49, 'World Tax Index: New Methodology for OECD Countries, 2000–2012', 'This paper follows our previous article, Kotlán and Machová (2012a), which presented an indicator of the tax burden that can be used as an alternative to the tax quota, or for implicit tax rates in macroeconomic analyses.', 'machova.pdf', 'Zuzana Machová, Igor Kotlán', 3, 10),
(50, 'Samuel Bowles & Herbert Gintis: A Cooperative Species – Human Reciprocity and Its Evolution', 'How did human reciprocity and cooperation evolve? In A Cooperative Species, Samuel Bowles and Herbert Gintis survey the different approaches to this question, outline the evidence that bears on it, and present some of their own models of possible mechanisms.', 'book-review_2_2013.pdf', 'Danny Yee', 2, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
