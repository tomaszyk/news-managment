-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Maj 2019, 14:07
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `news`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_polish_ci,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`id_news`, `name`, `description`, `is_active`, `created_at`, `updated_at`, `id_user`) VALUES
(5, 'Marlene Dietrich ', 'Uczyła się w szkole im. Auguste Victoria w Berlinie, którą ukończyła egzaminem maturalnym. Uczęszczała także na lekcje gry na skrzypcach u profesora Dessau. W latach 1919-1921 studiowała w Wyższej Szkole Muzycznej w Weimarze u Roberta Reitza, a potem w Berlinie u Carla Flescha. Z powodu zapalenia ścięgien, musiała przerwać naukę muzyki. Następnie pracowała jako modelka, a także grywała drobne role na scenach Berlina. W roku 1922 zadebiutowała w filmie - zagrała pokojówkę w produkcji Georga Jacoby \"Mały Napoleon\". 17 maja 1923 roku poślubiła Rudolfa Siebera, a 12 grudnia 1924 roku urodziła się ich córka Maria. Małżeństwo to rozpadło się po dwóch latach. Rudolf zajął się wychowywaniem dziecka, zaś Marlena odwiedzała kolejne łóżka swoich amantów i amantek. Od roku 1925 z powrotem podjęła pracę w teatrze, występując w rewiach i komediach, w Wiedniu i Berlinie. 15 maja 1928 roku odbywa się premiera rewii \"Es liegt in der Luft\". Piosenka \"Wenn die beste Freundin\" staje się pierwszym nagraniem płytowym aktorki. W roku 1930 Dietrich podpisuje kontrakt z Paramount Pictures. 1 kwietnia 1930 roku - premiera \"Błękitnego Anioła\", najsłynniejszego filmu z jej udziałem. W tym samym roku udaje się do Hollywood, gdzie w Paramount gra wampa w siedmiu filmach reżyserowanych przez Sternberga. Za rolę w \"Maroko\" otrzymuje nominację do Oscara. Swoje podziwiane na całym świecie nogi każe ubezpieczyć na miliony dolarów. Po zakończeniu współpracy ze Sternbergiem objawia się w rolach komediowych. 9 czerwca 1939 roku Dietrich otrzymuje amerykańskie obywatelstwo. W czasie wojny angażuje się w walkę przeciw hitlerowskim Niemcom. Od 1943 roku występuje w spektaklach dla żołnierzy amerykańskich. W roku 1945 po raz pierwszy od dłuższego czasu odwiedza Niemcy, w listopadzie umiera jej matka. Po drugiej wojnie światowej w filmach grywa już tylko sporadycznie. W roku 1960 wyrusza na tournee po Niemczech Zachodnich. Podczas jej występów dochodzi do zamieszek, z powodu jej zaangażowania na rzecz aliantów. Po złamaniu kości udowej w Australii, w roku 1975 musi ostatecznie pożegnać się ze sceną. Od tej pory żyje w odosobnieniu, w swoim mieszkaniu w Paryżu. W roku 1979 ukazują się wspomnienia aktorki. Marlena Dietrich zmarła 6 maja 1992 roku w mieszkaniu, w którym spędziła ostatnie lata swojego życia, zaś 10 dni później odbył się - zgodnie z jej ostatnią wolą - pogrzeb w Berlinie, na cmentarzu Friedenau. Ernest Hemingway powiedział o Dietrich: \"Gdyby nie miała nic prócz głosu, i tak by ci złamała serce\". ', 1, '2019-05-23 14:01:36', '2019-05-23 14:02:07', 12),
(6, 'Hedy Lamarr', 'Słynna holllywoodzka gwiazda pochodzenia austriackiego, która w latach 30. i 40. uważana była za najpiękniejszą kobietę świata. Popularność przyniosła jej rola w czeskim obrazie \"Ekstaza\", w którym zagrała odważną, jak na owe czasy, scenę miłosną, a także przez długie 10 minut pływała nago w rzece. Szczyt popularności Heddy Lamar przypadł na lata czterdzieste. Wystąpiła wtedy w wielu głośnych filmach, m.in. \"Boom Town\" [1940] z Clarkiem Gable, \"Tortilla Flat\" [1942] ze Spencerem Tracy czy \"Samson i Dalila\" [1949] z Victorem Mature. W 1998 r. Lamar wytoczyła proces firmie Corel, którą oskarżyła o nielegalne użycie swojego portretu podczas promocji nowej edycji programu Corel Draw. Postępowanie jednak umorzono.  ', 0, '2019-05-23 14:02:42', '2019-05-23 14:02:42', 12),
(7, 'Mleko – właściwości i analiza chemiczna', 'Fosfor, niezbędny dla naszych kości, zębów i mięśni;\r\nSiarkę, wpływającą na gospodarkę hormonalną, układ odpornościowy i przemianę materii;\r\nChlor, regulujący ciśnienie osmotyczne w komórkach ciała;\r\nPotas, odpowiadający za gospodarkę międzykomórkową, funkcjonowanie stawów i mięśni, przemianę materii;\r\nWapń, który odpowiada za zdrową skórę, kości i zęby;\r\nMangan, którego niedobór stwierdzono m.in. w schizofrenii czy cukrzycy;\r\nŻelazo, transportujące tlen we krwi, niezbędne również dla układu odpornościowego;\r\nKobalt, niezbędny w działalności enzymów;\r\nNikiel, niezbędny do rozwoju organizmu, odpowiedzialny za gospodarkę tłuszczową;\r\nMiedź, odpowiadająca za metabolizm żelaza i kolagenu;\r\nCynk, odpowiadający za układ rozrodczy, wspomagający układ trawienny;\r\nBrom, wykrywany w mleku, nie jest niezbędny dla organizmu człowieka, z którego jest szybko wydalany;\r\nRubid, wspomagający układ kostny i pracę nerek;\r\nStront, istotny dla procesu wapnienia kości i zębów, jednak groźny w nadmiarze;\r\nChrom, regulujący cukier we krwi, wspomaga również metabolizm części białek i tłuszczy;\r\nOłów, który w nadmiarze uszkadza układ nerwowy, pokarmowy i nerki – jest obecny w mleku w różnym stężeniu w zależności od miejsca wypasu krów/podawanej paszy.', 1, '2019-05-23 14:05:22', '2019-05-23 14:05:22', 13),
(8, 'Mysz domowa', 'To gatunek małego ssaka należącego do rodziny myszowatych. Jest gatunkiem synantropijnym, który prawdopodobnie pochodzi od myszy zamieszkującej stepy i tereny półpustynne od północnej Afryki, poprzez południowo-wschodnią część Europy, aż po Wyspy Japońskie. Obecnie znajduje się ją wszędzie tam, gdzie żyje człowiek.\r\n\r\nCharakteryzuje się opływowym kształtem, zazwyczaj jednolitą barwą ciała, krótkimi kończynami, oczami rozstawionymi po bokach pyska i stosunkowo dużymi, zaokrąglonymi małżowinami usznymi. Mysz domową zaliczamy do gatunków wszystkożernych. Nie gromadzi zapasów. Gniazda zakłada w budynkach, ale także w sąsiedztwie łąk i pól. Dzięki dużej rozrodczości, braku wysokich wymagań hodowlanych oraz częściowej homologii do człowieka niektóre podgatunki są chętnie wykorzystywane jako zwierzęta laboratoryjne.', 1, '2019-05-23 14:06:50', '2019-05-23 14:06:50', 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `first_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `last_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `gender` text CHARACTER SET utf8 COLLATE utf8_polish_ci,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_users`, `first_name`, `last_name`, `is_active`, `created_at`, `updated_at`, `email`, `gender`, `password`) VALUES
(12, 'Tomasz', 'Mlastek', 1, '2019-05-22 23:21:31', '2019-05-23 13:53:11', 'tomaszmlastek@gmail.com', 'male', 'a47773683b9aed7704195e9ec654476f'),
(13, 'Filemon', 'Kot', 1, '2019-05-23 11:37:13', '2019-05-23 14:03:59', 'kotfilemon@gmail.com', 'male', '611e4d49786ee9de689f22c9a7ae2bd2');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
