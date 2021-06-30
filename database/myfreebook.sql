--
-- Database Name: `myfreebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--


CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fname` varchar(100) NOT NULL,
 `username` varchar(100) NOT NULL,
 `email` varchar(100) NOT NULL,
 `password` varchar(100) NOT NULL,
 `contact` bigint(20) NOT NULL,
 `code` int(11) NOT NULL,
 `status` varchar(20) NOT NULL,
 PRIMARY KEY (`id`)
)  DEFAULT CHARSET=latin1;


--
-- Inserted data for table `Users`
--


-- --------------------------------------------------------


--
-- Table structure for table `Book`
--


CREATE TABLE `book` (
 `b_id` int(4) NOT NULL AUTO_INCREMENT,
 `b_name` varchar(60) NOT NULL,
 `b_subcat` varchar(25) NOT NULL,
 `b_author` varchar(40) NOT NULL,
 `b_edition` varchar(20) NOT NULL,
 `b_page` int(5) NOT NULL,
 `b_price` int(5) NOT NULL,
 `b_img` longtext NOT NULL,
 `b_discription` varchar(1000) NOT NULL,
 PRIMARY KEY (`b_id`)
) DEFAULT CHARSET=latin1;


--
-- Inserted data for table `book`
--


INSERT INTO `book`(`b_id`, `b_name`, `b_subcat`, `b_author`, `b_edition`, `b_page`, `b_price`, `b_img`, `b_discription`)VALUES(1, 'A Dictionary of Architecture', '1', 'James Stevens Curl', '2007', 200, 500, 'assets/img/architecture1.jpg', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise style, it is an invaluable work of reference for both students of architecture and the general reader, as well as professional architects. Covers all periods of Western architectural history, from ancient times to the present day Concise biographies of leading architects, from Brunelleschi and Imhotep to Le Corbusier and Richard Rogers Over 250 illustrations specially drawn for this volume'),
(2, 'A History of Indian Architecture', '1', 'V.S. Parmar', '2007', 300, 700, 'assets/img/architecture2.jpg', 'Studies in Indian architecture have been confined to those exploring the building techniques of palaces, temples, and tombs. Little attention has traditionally been paid by scholars to the patterns and influences involved in the making of domestic residences, market places, inns, community halls, courts, and other lesser buildings. The result is the emergence of a very partial picture of what constitutes architecture in India. This volume se eks to overcome this inadequacy by examining the geographical, historical, and functional aspects of architecture in India. Looking beyond the point of view of dynasties, periods or religions, the book traces the various social and historical developments in the field. Following a multi-disciplinary approach that emphasizes sociological aspects, the volume examines in detail.'),
(3, 'Vitruvius The ten book of Architecture', '1', 'Vikramjit Ram', '2006', 250, 600, 'assets/img/architecture3.jpg', 'Elephants occupy a special place in the life and art of India. Since ancient times, they have been treasured and pampered as the ultimate beasts of burden, venerated as the vehicles of gods and kings and even worshipped in their own right. Their legendary attributes of strength, intelligence, nobility and longevity are eulogized in myth, epic and popular literature. In the figural and decorative arts, elephants provide an enduring fascination. Elephant Kingdom traces the myriad stories and symbolisms behind Indias much-loved animal, through its depictions in architectural sculpture'),
(4, 'Architectural Design', '1', 'Julia McMorrough', '2007', 200, 500, 'assets/img/architecture4.jpg', 'Moving further in the direction of practicality, this is a bite-size guide that fits in a bag or a desk drawer. Intended to be carried on job sites or flipped through during phone calls, this smartly illustrated guide focuses on specifying, going beyond drawing details to address the written aspects of construction. This knowledge, organized in a think-on-your-feet format, is essential during construction administration, when everyone on a project is looking to an architect for answers.'),
(5, 'An ABC of Indian Culture', '2', 'Peggy Holroyde', '200', 200, 500, 'assets/img/art1.jpg', 'Moving further in the direction of practicality, this is a bite-size guide that fits in a bag or a desk drawer. Intended to be carried on job sites or flipped through during phone calls, this smartly illustrated guide focuses on specifying, going beyond drawing details to address the written aspects of construction. This knowledge, organized in a think-on-your-feet format, is essential during construction administration, when everyone on a project is looking to an architect for answers.'),
(6, 'The Rough Guide to the Earth', '2', 'Julia McMorrough', '2007', 200, 500, 'assets/img/art2.jpg', 'An authentic interpretation of over 400 Indian concepts and practices derived from a personal exploration of India over a period of 50 years. Arranged alphabetically, these range from key traditional ones such as dharma to more contemporary ones such as secularism and democracy to popular ones such as Indian films! Padayatra is a journey on foot and each selected concept and practice is treated as a stepping-stone in a journey to understanding what India is all about.'),
(7, 'Investing for Beginners', '3', 'Kathy Kristof', '2006', 140, 200, 'assets/img/business1.jpg', 'Investment Risks and Rewards: How to overcome the fear of investment risk and how taking a few risks can reap long-term benefits. Your Starting Point: How to assess your investment goals. Diversification: How to allocate your money among various investment avenues for safety, steady income and capital growth. How to Pick Stocks: How to use fundamental indicators of value to pick good stocks.'),
(8, 'Cost and Management Accounting', '3', 'M N ARORA', '2006', 400, 450, 'assets/img/business2.jpg', 'Student friendly and examination oriented approach # Innovative, comprehensive and systematic presentation of the subject matter # Use of diagrams and exhibits to help students understand concepts easily and clearly # Around 500 solved problems and illustrations with working notes # Solved and unsolved practical questions from various university and professional examinations like BCom, MCom, CA, CS, ICWA, etc. # Objective type questions and select theory questions # Ideal for self study.'),
(9, 'Spider Man', '4', 'Marvel Comics', '2001', 160, 450, 'assets/img/comic1.jpg', 'second 100 issues as May Mayday Parker learns that she cant escape her great responsibilities! Featuring the original Hobgoblin, the Black Tarantula and more! Plus: the saga of Spider-Girl! Collects Amazing Spider-Girl #0-6.'),
(10, 'How to Prepare for The CAT', '6', 'MUNEER, MUHAMED', '2006', 380, 440, 'assets/img/compititive1.jpg', 'More than 3000 questions categorised into three levels of difficulty - LOD1, LOD2 and LOD3 * Notes emphasising relative importance of topics in the CAT, at appropriate places in the book * Short-cut methods to aid faster solutions to problems * Five practice CAT tests (actual CAT questions based on memory)'),
(11, 'General Knowledge', '6', 'Dr. Binay Karna', '2019', 200, 250, 'assets/img/compititive2.jpg', 'For UPSC Civil Services, Combined Defence Services (CDS), National Defence Academy (NDA), Railway Recruitment Boards (RRBs), Special Class Railway Apprentices (SCRA), Indian Forest Services (IFS), Indian Economic Services (IES), Combined Engineering Services, Bank Probationary Officers (P.O./T.O./A.0.), L.I.C., G.L.C. (A.A.O.), R.B.I. Grade A and B, other Administrative Officers Examinations, MBA, MCA, BCA, BBA entrance tests.'),
(12, 'Statistics for Business & Economics', '7', 'J S CHANDAN', '2007', 212, 349, 'assets/img/economy1.jpg', 'This book covers various aspects of the field of statistics in 20 chapters, making each topic relevant and useful. A unique feature of this book is the inclusion of databases to be utilized by computers and software statistical packages. Contents - Introduction ? Statistical Terms and Concepts ? Data Collection ? Data Presentation ? Data Characteristics: Descriptive Measures ? Basic Concepts of Probability ? Probability Distribution ? Sampling Distribution ? Statistical Inference: Estimation ? Hypothesis Testing I ? Hypothesis Testing II ? Hypothesis Testing III ? Hypothesis Testing IV (Comparing Several Proportions Chi Square Test). '),
(13, 'The Missing', '16', 'Chris Mooning', '2006', 240, 389, 'assets/img/fiction1.jpg', 'The woman missing for five years. The Crime Scene Investigator who finds her. And the serial killer who wants them both dead? When Boston CSI Darby McCormick finds a raving and emaciated woman hiding at the scene of a violent kidnap, she runs a DNA search to identify the Jane Doe. The result confirms that the woman was abducted five years earlier and has somehow managed to escape from the dungeon in which she?s been caged.'),
(14, 'A Biological Survey for Nation', '20', 'Peter H. Raven', '1994', 224, 450, 'assets/img/biology1.gif', 'The National Biological Survey will produce the map we need to avoid the\r\neconomic and environmental "train wrecks" we see scattered across the country.\r\nNBS will provide the scientific knowledge America needs to balance the\r\ncompatible goals of ecosystem protection and economic progress.'),
(15, 'Thermal Physics', '24', 'S.C. Garg', '2001', 410, 450, 'assets/img/physics1.jpg', 'The book presents a lucid and systematic exposition of the fundamental principles of Thermal Physics. this is book is the best book for the thermal physics.It has everything a student would possibly need for their success in exams. The book comes supplemented with a large number of solved and unsolved problems. Numerical exercises inundate the book for a better understanding of the subject. '),
(16, 'Concept of Physics', '24', 'H.C. Verma', '2005',310, 410, 'assets/img/physics2.jpg', 'H C Verma s Concepts Of Physics is an all-inclusive book, which serves to detail out the ABC of physics in an intricate manner making it an ideal book for not only the higher secondary students, but also for those who are preparing for their competitive examinations.Physics as a subject is vast and to have all the concepts of Physics compiled in one book is indeed a boon to all students. The book has been tailored to meet the needs 10 + 2 or higher secondary students and for the students who are appearing for a competitive examination.'),
(17, 'Safe & Simple Steps for Frutiful Meditation', '25', '	Dr. N. K. Srinivasan', '2003', 150, 210, 'assets/img/yoga1.jpg', 'H C Verma s Concepts Of Physics is an all-inclusive book, which serves to detail out the ABC of physics in an intricate manner making it an ideal book for not only the higher secondary students, but also for those who are preparing for their competitive examinations.Physics as a subject is vast and to have all the concepts of Physics compiled in one book is indeed a boon to all students. The book has been tailored to meet the needs 10 + 2 or higher secondary students and for the students who are appearing for a competitive examination.'),
(18, 'Organic Chemistry', '22', 'Robert Neilson, Robert Morrison', '2010', 376, 829, 'assets/img/chemistry1.jpg', 'Organic chemistry is a subdivision of chemistry which deals with the learning of the structure, properties and reactions of organic mixtures and materials. Organic chemistry expresses the concepts and the basics of the topic in reader-friendly language. The book is divided into many sections that talk about the different features of this subdivision.The chapters comprise of fundamental of organic chemistry, specific topics, chemistry of functional groups, contemporary and future organic chemistry and biomolecules and bioorganic chemistry.'),
(19, 'Indian Constitutional Law', '17', 'M.P.Jain', '2018', 576, 829, 'assets/img/law1.jpg', 'M Plain Indian Constitutional Law is an authoritative, evergreen classic on Indian constitutional law. This book, presently in its eighth edition, is a thematic presentation of the complex and multi-dimensional subject of Constitutional law in a lucid, comprehensive and systematic manner. The book contains in-depth insights that will benefit students, research scholars, lawyers, judges, legal academics, policy makers and interested citizens who look for the latest in constitutional jurisprudence.'),
(20, 'Bhagavad Gita', '19', 'Vyasa', '2nd century BCE', 924, 399, 'assets/img/bhagavadgita.png', 'The Gita is set in a narrative framework of a dialogue between Pandava prince Arjuna and his guide and charioteer Krishna, an avatar of Lord Vishnu. At the start of the Dharma Yuddha (righteous war) between Pandavas and Kauravas, Arjuna is filled with moral dilemma and despair about the violence and death the war will cause in the battle against his own kin.[2] He wonders if he should renounce and seeks Krishnas counsel, whose answers and discourse constitute the Bhagavad Gita. '),
(21, 'The Holy Bible', '19', 'King James', '1991', 1124, 729, 'assets/img/bible.jpg', 'The Bible (from Koine Greek τὰ βιβλία, tà biblía, "the books") is a collection of religious texts or scriptures sacred to Christians, Jews, Samaritans, Rastafari and others. It appears in the form of an anthology, a compilation of texts of a variety of forms that are all linked by the belief that they are collectively revelations of God. These texts include theologically-focused historical accounts, hymns, prayers, proverbs, parables, didactic letters, poetry, and prophecies. Believers also generally consider the Bible to be a product of divine inspiration.'),
(22, '150 Indian Recipes', '5', 'Parragon', '2014', 294, 648, 'assets/img/cooking1.jpg', 'The 150 Recipes series is a must-have in your kitchen! Check out these simple, quick, home-cook Indian recipes in this little book. If you are looking for new recipes to spice up your routine then look no further and delve into these delicious Indian recipes. This collection of 150 recipes gives you easy step-by-step instructions to make amazing Indian dishes. From quick and easy light dishes to hearty curry you are sure to find a recipe your heart desires. Why not try Chickpea and Cashew Nut Curry or a delicious Tandoori Chicken? This is a great introduction to amazing Indian dishes.'),
(23, 'The Indian Cookery Course', '5', 'Monisha Bharadwaj', '2016', 496, 1148, 'assets/img/cooking2.jpg', 'This comprehensive guide to Indian cooking explores the myriad regional varieties of authentic, healthy and lesser known Indian recipes. With chapters broken down into: Rice, Breads, Meat, Fish & Seafood, Poultry, Eggs, Dairy, Lentils & Beans, Vegetables, Snack & Sides, Grills, Salads & Raitas, Chutneys & Relishes, Desserts and Drinks, Monisha covers a varied range of dishes as well as providing insights into ingredients, techniques and step-by-step masterclasses to help you recreate classic and popular recipes.'),
(24, 'Mastering Financial Management', '18', 'Clive Marsh', '2009', 440, 594, 'assets/img/management1.jpg', 'Mastering Financial Management is sure to prove useful to students and members. The book is closely aligned to the Chartered Institute of Bankers syllabus. Chartered Banker, September 2009 Financial management is concerned with the strategic management of an organisation’s finances to ensure that financial objectives are achieved. Because money is the common denominator for the measurement and control of most aspects of a business, financial management is at the heart of all decision making, and skills in financial management will be necessary for all those in an executive position.'),
(25, 'Human Resource Management', '18', 'K Aswathappa', '2017', 854, 549, 'assets/img/management2.jpg', 'This textbook, in its latest edition, continues to capture the rapidly changing trends of the ever-dynamic subject area in an easily comprehensible manner. It focuses on explaining concepts with the help of latest cases, new examples and insights on the subject.'),
(26, 'Higher Engineering Mathematics', '23', 'B.S. Grewal', '1965', 1238, 720, 'assets/img/maths1.jpg', 'Unit I: Algebra, vectors and geometrysolution of equationslinear algebra: Determinants, matricesvector Algebra and solid GeometryUnit II: calculusdifferential Calculus and its applicationspartial differentiation and its applicationsintegral calculus and its applicationsmultiple Integrals and Beta, Gamma functionsvector calculus and its applicationsUnit III: seriesinfinite seriesFourier seriesUnit IV: differential equationsdifferential equations of first orderapplications of differential equations of first orderlinear differential equationsapplications of linear differential equationsdifferential equations of other typesseries solution of differential equations and special functionspartial differential equationsapplications of partial differential equations. "And so many other chapters in this book."'),
(27, 'Handbook of Mathematics', '23', 'Arihant', '2019', 454, 234, 'assets/img/maths2.jpg', 'Mathematics of higher level has too many theories, rules and remembering all of them on tips all the time is not an easy task. Handbook of Mathematics is an important, useful and compact reference book suitable for everyday study, problem solving or exam revision for class XI – XII. This book is a multi-purpose quick revision resource that contains almost all key notes, terms, definitions and formulae that all students & professionals in mathematics will want to have this essential reference book within easy reach.'),
(28, 'Microsoft Window Powershell', '11', 'Wilson', '2006', 755, 299, 'assets/img/comp1.jpg', 'Learn Microsoft Windows PowerShell step by step with hands-on instruction from a leading Microsoft scripting trainer. This guide features self-paced labs, timesaving tips, and dozens of sample scripts'),
(29, 'Learining SQL on SQL Server', '11', 'Sikha Saha Bagui', '2005', 360, 349, 'assets/img/comp2.jpg', 'Anyone who interacts with today?s modern databases needs to know SQL (Structured Query Language), the standard language for generating, manipulating, and retrieving database information. In recent years, the dramatic rise in the popularity of relational databases and multiuser databases has fueled a healthy demand for application devel?opers and others who can write SQL code efficiently and correctly. If you?re new to databases or need a SQL refresher, Learning SQL on SQL Server 2005 is an ideal step-by-step introduction to this database query tool, with everything you need for programming SQL using Microsoft?s SQL Server 2005?one of the most powerful and popular database engines used today.'),
(30, 'Programing With JAVA', '11', 'E Balagurusamy', '2019', 600, 509, 'assets/img/comp3.jpg', 'The sixth edition of this most trusted book on JAVA for beginners is here with some essential updates. Retaining its quintessential style of concept explanation with exhaustive programs, solved examples, and illustrations, this test takes the journey of understanding JAVA to slightly higher level. The book introduces readers to some of the Core JAVA topics like JDBC, Java Servlets, Java Beans, Lambada Expression and much more. Practical real-life projects will give a better understanding of JAVA usage and make students industry-ready.'),
(31, 'Programing In C#', '11', 'E Balagurusamy', '2017', 504, 480, 'assets/img/comp4.jpg', 'Authored by most trusted name in the area, this text acts like a “Primer”, moving step by step starting from fundamentals to core concepts in much desired logical flow and hence renders conceptual clarity along with simplicity. The book has a comprehensive coverage of foundational concepts of C# Programming, in the light of object orientation, which are explained in simple language and supported with good examples & programming exercise.'),
(32, 'Mastering HTML, CSS & Javascript', '11', 'Laura Lemay, Rafe Colburn', '2016', 759, 490, 'assets/img/comp5.jpg', 'This book covers HTML5, CSS3 and jQuery… In just one hour a day, you’ll learn the skills you need to design, create and maintain a professional-looking website Thoroughly revised and updated with examples rewritten to conform to HTML5, CSS3 and contemporary web development practices, this easy-to-understand, step-by-step tutorial helps you quickly master the basics of HTML and CSS before moving on to more advanced topics such as graphics, video and interactivity with JavaScript and jQuery.'),
(33, 'Learning With Python', '11', 'Allen Downey, Jeffrey Elkner', '2015', 280, 328, 'assets/img/comp6.jpg', 'The book is designed to introduce the important concepts of Python programming language in detail. The reader will be able to develop and execute the programs in Python. This book will also help the readers to learn about Functions, Recursion, Iterative Statements, Strings, Lists, Tuples, Dictionaries, Files and Exceptions, Classes and Objects, Methods, Inheritance, Linked Lists, Stacks, Queues and Trees.'),
(34, 'A Textbook of Automobile Engg.', '8', 'S.K. Gupta', '2020', 925, 587, 'assets/img/auto1.jpg', 'A Textbook of Automobile Engineering is a comprehensive treatise which provides clear explanation of vehicle components and basic working principles of systems with simple, unique and easy-to-understand illustrations. The textbook Also describes the latest and upcoming technologies and developments in automobiles. This edition has been completely updated covering the complete syllabi of most Indian universities with the aim to be useful for both the students and faculty members.'),
(35, 'Automobile Engineering Vol-1', '8', 'Kripal Singh', '2020', 738, 420, 'assets/img/auto2.jpg', 'Dr. Kirpal Singh’s Automobile Engineering Vol 1 1st edition is for engineering students. The book is divided into multiple sections so as to give you a better understanding of the subject. The books covers Automobile Engineering and automotive engineering.'),
(36, 'Automobile Engineering Vol-2', '8', 'Kripal Singh', '2020', 667, 384, 'assets/img/auto3.jpg', 'Constructional details- I * constructional details- II * engine service * cooling system * lubrication and lubricants * fuels * combustion & combustion Chambers * Petrol engine fuel supply systems * diesel engine fuel supply systems * engine performance * testing of Automobile engines * conventional ignition systems * electronic ignition systems * storage batteries * charging system * starting system * emission control * automotive engin specifications * automotive engine specifications * appendix.'),
(37, 'Unit Operation Of Chemical Engg.', '9', 'Warren McCabe, Julian Smith', '2017', 1124, 729, 'assets/img/chemical1.jpg', 'Now in its seventh edition, the text still contains its balanced treatment of theory and engineering practice, with many practical, illustrative examples included. Almost 30% of the problems have been revised or are new, some of which cover modern topics such as food processing and biotechnology. Other unique topics of this text include diafiltration, adsorption and membrane operations.'),
(38, 'Element of Civil Engg. & Mechanics', '10', 'S.P. Nitsure, H.J.Sawant', '2018', 421, 399, 'assets/img/civil1.jpg', 'Module - 1 Introduction to Civil Engineering Module - 2 Equilibrium of Forces Module - 3 Support Reactions Module - 4 Centroid Module - 5 Kinematics.'),
(38, 'Basics of Civil Engineering', '10', 'Praval Chauhan', '2019', 998, 529, 'assets/img/civil2.jpg', 'This book has been written for the students pursuing degree or diploma in civil engineering and particularly to the aspirant of competitive exams of state and central Govt. The book guides the students for the preparation of these exams like Junior Engineer, Assistant Engineer, Gate, IES, SSC, RPSC, UPSC etc. and also help them to understand basic concept of civil engineering. The book has been prepared after the discussion with many of our students and other people.'),



-- --------------------------------------------------------


--
-- Table structure for table `Category`
--


CREATE TABLE `category` (
 `cat_id` int(4) NOT NULL AUTO_INCREMENT,
 `cat_nm` varchar(30) NOT NULL,
 PRIMARY KEY (`cat_id`)
) DEFAULT CHARSET=latin1;


--
-- Inserted data for table `Category`
--


INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(1, 'Architecture'),
(2, 'Art And Culture'),
(3, 'Bussiness'),
(4, 'Comics'),
(5, 'Compitive Exam'),
(6, 'Cooking '),
(7, 'Economics'),
(8, 'Engineering '),
(9, 'Fiction'),
(10, 'Law Books'),
(11, 'Management'),
(12, 'Religion'),
(13, 'Science '),
(14, 'Yoga'),
(15, 'Other Books');


-- --------------------------------------------------------


--
-- Table structure for table `Sub-Category`
--


CREATE TABLE `subcat` (
 `subcat_id` int(4) NOT NULL AUTO_INCREMENT,
 `parent_id` int(4) NOT NULL,
 `subcat_nm` varchar(35) NOT NULL,
 PRIMARY KEY (`subcat_id`)
) DEFAULT CHARSET=latin1;


--
-- Inserted data for table `Sub-Category`
--


INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(1, 1, 'Architecture'),
(2, 2, 'Art And Culture'),
(3, 3, 'Bussiness'),
(4, 4, 'Comics'),
(5, 5, 'Compitive Exam'),
(6, 6, 'Cooking '),
(7, 7, 'Economics'),
(8, 8, 'Auto Mobile'),
(9, 8, 'Chemical '),
(10, 8, 'Civil '),
(11, 8, 'Computer'),
(12, 8, 'Electrical'),
(13, 8, 'Electronicas and Communication'),
(14, 8, 'Information Technology'),
(15, 8, 'Mechanical'),
(16, 9, 'Fiction'),
(17, 10, 'Law Books'),
(18, 11, 'Management'),
(19, 12, 'Religion'),
(20, 13, 'Biology'),
(22, 13, 'Chemistry'),
(23, 13, 'Maths'),
(24, 13, 'Physics'),
(25, 14, 'Yoga'),
(26, 15, 'Other Books');


--
-- Table structure for table `Contact`
--


CREATE TABLE `contact` (
 `con_id` int(4) NOT NULL AUTO_INCREMENT,
 `con_name` varchar(25) NOT NULL,
 `con_email` varchar(35) NOT NULL,
 `con_sub` longtext NOT NULL,
 `con_msg` longtext NOT NULL,
 PRIMARY KEY (`con_id`)
) DEFAULT CHARSET=latin1;

