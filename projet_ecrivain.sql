-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 12 juin 2019 à 16:23
-- Version du serveur :  5.7.23
-- Version de PHP :  7.1.22

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_ecrivain`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `paragraph` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `chapter_number` int(11) NOT NULL
) ;

--
-- Déchargement des données de la table `chapter`
--

INSERT INTO `chapter` (`id`, `paragraph`, `title`, `chapter_number`) VALUES
(14, '<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">Mardi 25 ao&ucirc;t 2009</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">Grimpant les marches quatre &agrave; quatre, Lisane se retrouva sur le palier avant m&ecirc;me d&rsquo;avoir eu le temps de maudire cet interminable escalier. Elle se souvint d&rsquo;un temps pas si lointain o&ugrave; il lui arrivait de compter les cinquante quatre marches une &agrave; une pour se donner le courage de les monter et r&eacute;alisa &agrave; quel point une m&ecirc;me action peut sembler &agrave; certains moments si difficile et &agrave; d&rsquo;autres, si banale. Dans la foul&eacute;e, elle ouvrit la porte, accrocha sa veste &agrave; la pat&egrave;re et s&rsquo;affala dans le canap&eacute; juste en face de son amie occup&eacute;e &agrave; remplir des cartons en pr&eacute;vision de leur d&eacute;m&eacute;nagement imminent. Essouffl&eacute;e, elle lui demanda :</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; C&eacute;cile, tu te souviens ? Un jour, tu m&rsquo;as dit que ce qui ne tue pas, rend plus fort !</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Hum, hum&hellip; et que les pierres sur notre chemin ne sont pas l&agrave; pour nous faire tomber mais pour nous apprendre &agrave; nous relever ! continua la jeune femme d&rsquo;un ton protecteur. Oui, je me souviens&hellip; C&eacute;cile s&rsquo;assit sur l&rsquo;un des cartons qu&rsquo;elle venait de fermer et plongea ses yeux dans ceux de son amie.</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Te sentirais-tu &agrave; nouveau debout ma Lili ? Pour toute r&eacute;ponse, elle la gratifia d&rsquo;un large sourire reconnaissant.</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Je r&eacute;alise que sans toi&hellip; je n&rsquo;y serais jamais arriv&eacute;e ! Tu es mon ange gardien ! 16</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Hum, hum&hellip; J&rsquo;ai comme l&rsquo;impression que ton entretien &agrave; l&rsquo;&eacute;cole de Castenon s&rsquo;est tr&egrave;s bien pass&eacute; et que ma divine pr&eacute;sence va bient&ocirc;t t&rsquo;&ecirc;tre inutile&hellip; Dis-moi, il va falloir que tu trouves un logement plus proche de ton poste ?</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Tu ne chercherais pas &agrave; te d&eacute;barrasser de moi, par hasard ? fit-elle avec un grand sourire espi&egrave;gle.</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Oh non ! Je peux m&ecirc;me te dire que je ne suis pas vraiment rassur&eacute;e de te laisser seule&hellip;</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; T&rsquo;inqui&egrave;te&hellip; Faut bien que je me lance dans la vie puisque je suis en vie&hellip; J&rsquo;y arriverai ! Je n&rsquo;aurai plus le temps de penser &agrave; ma petite personne lorsque je serai entour&eacute;e de mes &eacute;l&egrave;ves. Je ne te remercierai jamais assez de m&rsquo;avoir dirig&eacute;e vers l&rsquo;enseignement.</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Tu sais&hellip; il y a quatre ans&hellip; tu n&rsquo;&eacute;tais gu&egrave;re combative pour me r&eacute;sister en quoi que ce soit&hellip;</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; C&rsquo;est vrai ! Aujourd&rsquo;hui, je r&eacute;alise que tu m&rsquo;as r&eacute;ellement &eacute;pargn&eacute; quelques ann&eacute;es d&rsquo;&eacute;tudes inutiles. Quand je pense que j&rsquo;envisageais d&rsquo;&ecirc;tre journaliste ! Lors du drame, il n&rsquo;y en a pas eu un seul qui se soit comport&eacute; humainement avec moi&hellip; C&eacute;cile &eacute;tait stup&eacute;faite de l&rsquo;entendre ainsi &eacute;voquer l&rsquo;accident avec autant de d&eacute;tachement. A l&rsquo;&eacute;poque, l&rsquo;assaut des m&eacute;dias avait d&eacute;multipli&eacute; son cauchemar et l&rsquo;acharnement des journalistes l&rsquo;avait terriblement perturb&eacute;e&hellip; Volontairement, elle remua le couteau dans la plaie en relan&ccedil;ant le sujet pour voir si son amie allait le poursuivre ou le contourner.</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Ils n&rsquo;ont eu aucun sens moral envers toi&hellip; Ils ont exploit&eacute; ta d&eacute;tresse au maximum en reportages t&eacute;l&eacute;vis&eacute;s, en premi&egrave;res pages de journaux r&eacute;gionaux et nationaux au lieu de se pr&eacute;occuper de ce que tu pouvais ressentir&hellip;</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; De v&eacute;ritables chacals ! grima&ccedil;a Lisane. Ils m&rsquo;ont tout simplement d&eacute;go&ucirc;t&eacute;e du journalisme. Au moins, j&rsquo;aurais appris que je n&rsquo;&eacute;tais pas faite pour ce m&eacute;tier ! &mdash; C&rsquo;&eacute;tait peut-&ecirc;tre un signe&hellip; La vie r&eacute;serve tant de surprises ! ajouta-t-elle satisfaite de sa r&eacute;action. 17 Sans manifester d&rsquo;&eacute;motions particuli&egrave;res, Lisane continua avec naturel comme si elle &eacute;tait lib&eacute;r&eacute;e du drame de sa vie.</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; J&rsquo;avoue que je t&rsquo;ai suivie dans ce centre de formation p&eacute;dagogique pour ne pas me retrouver toute seule mais par la suite, j&rsquo;ai vraiment aim&eacute; ces &eacute;tudes&hellip; surtout les stages en &eacute;cole&hellip; Je regrette seulement ton choix pour l&rsquo;enseignement priv&eacute; : je me suis laiss&eacute;e embarquer dans ta secte de catho ! Franchement&hellip; pourquoi ne pas avoir choisi l&rsquo;Ecole Normale ? Offens&eacute;e, C&eacute;cile se redressa, pr&ecirc;te &agrave; se justifier pour la &eacute;ni&egrave;me fois :</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Ecoute Lisane&hellip; Je comprends que tu te sois &eacute;loign&eacute;e de la religion apr&egrave;s ce que tu as v&eacute;cu mais pour l&rsquo;instant, rattache-toi au fait que l&rsquo;ambiance sera plus humaine dans une &eacute;cole de catho comme tu dis&hellip; Je suis s&ucirc;re que tu vas rencontrer des personnes int&eacute;ressantes qui auront une certaine profondeur&hellip; une vie int&eacute;rieure quoi ! &mdash; C&rsquo;est vrai que j&rsquo;ai rencontr&eacute; quelqu&rsquo;un de sympa ce matin&hellip; mais &agrave; t&rsquo;entendre&hellip; les enseignants du public ne seraient que des fonctionnaires insipides, ternes, sans vocation qui ferment la porte de leur classe d&egrave;s seize heures trente.</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; J&rsquo;ai mes convictions et je tiens mes engagements ! Aurais-tu oubli&eacute; la sp&eacute;cificit&eacute; de l&rsquo;Ecole Catholique ?</span></p>\r\n<p><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">&mdash; Et toi, aurais-tu oubli&eacute; que je connais un l&eacute;ger froid avec le Bon Dieu en ce moment ! r&eacute;pliqua-t-elle d&rsquo;un ton mordant.</span></p>\r\n<p>&nbsp;</p>', 'Hello', 1),
(15, '<p style=\"margin: 0px; padding: 0px 0px 5px 5px; box-sizing: border-box; max-width: 100%; color: #202020; font-size: 13px; text-align: justify; background-color: #ffffff; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">Elle gratte, elle creuse, elle racle cette terre s&egrave;che et dure qui la prot&eacute;geait, faisant d\'incroyables efforts pour grimper plus haut, toujours plus haut. Son unique obsession est de quitter ces tunnels sombres qu&rsquo;elle parcoure depuis trois longues ann&eacute;es &agrave; la recherche de quelques racines &agrave; sucer. C&rsquo;est maintenant le temps de se rapprocher de la surface pour sentir si la chaleur est au rendez-vous. Elle sait qu\'elle est&nbsp; le symbole du soleil et des collines, mais elle sait aussi qu&rsquo;il ne lui reste qu&rsquo;une saison de vie. Alors il faut qu&rsquo;elle se bouge notre amie la cigale. Qu&rsquo;elle d&eacute;couvre enfin cette clart&eacute; qu&rsquo;elle esp&egrave;re depuis tant de mois. Etourdie par la lumi&egrave;re &eacute;blouissante de l&rsquo;astre de jour, elle grimpe maintenant sur l&rsquo;&eacute;corce &agrave; l&rsquo;odeur enivrante d&rsquo;un pin, mais pas trop haut, elle doit garder des forces s&rsquo;extirper de sa coquille. Encore un dernier effort et la voil&agrave; enfin lib&eacute;r&eacute;e de son carcan. Abandonnant son exuvie &eacute;ventr&eacute;e comme une derni&egrave;re relique de sa vie pass&eacute;e, la voil&agrave; enfin libre. En s&rsquo;envolant, elle passe si pr&egrave;s de ma joue que je suis oblig&eacute; de l&rsquo;&eacute;carter d&rsquo;un geste de la main.</span></p>\r\n<p style=\"margin: 0px; padding: 0px 0px 5px 5px; box-sizing: border-box; max-width: 100%; color: #202020; font-size: 13px; text-align: justify; background-color: #ffffff; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\"><span style=\"font-family: courier new, courier, monospace; font-size: 18pt;\">Je m&rsquo;appelle Jeanne. Les &eacute;v&egrave;nements que je vais vous raconter se sont d&eacute;roul&eacute;s il y a longtemps, sur plusieurs g&eacute;n&eacute;rations. Quand je pense &agrave; toutes ces ann&eacute;es et malgr&eacute; certains c&ocirc;t&eacute;s tragiques, je suis nostalgique. J&rsquo;ai souvent l&rsquo;esprit ailleurs, les yeux dans le vague et quand quelqu&rsquo;un me tape sur l&rsquo;&eacute;paule en me demandant &agrave; quoi je pense, je lui r&eacute;ponds tout simplement &agrave; rien&hellip; &agrave; rien d&rsquo;important. Mais en r&eacute;alit&eacute;, je suis tellement impr&eacute;gn&eacute;e par cette histoire que je ne passe pas un jour sans y penser. Je ne peux en parler &agrave; personne, peut-&ecirc;tre plus tard &agrave; mon fils quand il sera en &acirc;ge de comprendre, mais me croira-t-il ? Pour bien comprendre tous ces &eacute;v&egrave;nements, il faut remonter de quelques ann&eacute;es dans le temps.dfdsf</span></p>\r\n<p style=\"margin: 0px; padding: 0px 0px 5px 5px; box-sizing: border-box; max-width: 100%; color: #202020; font-size: 13px; text-align: justify; background-color: #ffffff; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">&nbsp;</p>', 'Coucou d\'Alaska', 2),
(17, '<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">13 juillet 1977,</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">312 West 77th Street, New York</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\">&nbsp;</p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Sivad.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">C&rsquo;est son nom, j&rsquo;ai mis du temps &agrave; le comprendre. Pourtant, ce n&rsquo;est pas nouveau, il &eacute;tait l&agrave; d&egrave;s ma naissance. Je suis G&eacute;meaux, j&rsquo;ai toujours &eacute;t&eacute; deux. Intello et con, timide et grande gueule, clean et trash.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Sivad.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Alors, c&rsquo;est comme &ccedil;a que je l&rsquo;ai appel&eacute;e. L&rsquo;intro de mon live au Cellar Door, il y a sept ans. Fallait bien trouver un titre. Les majors aiment &ccedil;a, nommer les morceaux, les disques, c&rsquo;est plus facile pour vendre.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">&laquo; Sivad &raquo;, &laquo; Davis &raquo;&hellip; OK, c&rsquo;est nul, mais je m&rsquo;en fous. L&rsquo;important, c&rsquo;est le son. La musique. La batterie de Jack et son roulement, qui r&eacute;sonne dans la salle. Le public exulte, quand Mike encha&icirc;ne &agrave; la basse. Lentement, avec l&rsquo;aplomb d&rsquo;un bulldozer. Keith calque son orgue d&eacute;moniaque, rejoint par John et sa guitare, Airto et ses percus. La rythmique s&rsquo;installe, m&rsquo;enlace. Trompette en main, j&rsquo;observe mes gars. Ils se donnent &agrave; fond et tout &ccedil;a, c&rsquo;est pour moi. Moi, leur dieu. Ils sont bons &ndash; tr&egrave;s bons, m&ecirc;me &ndash; et pourtant, &ccedil;a ne va pas. Trop fort, trop lourd, alors que je leur avais dit de jouer cool. Hard, mais cool. C&rsquo;est pourtant pas compliqu&eacute;.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Je vais leur montrer, moi. D&rsquo;un pied ferme, j&rsquo;active ma wah-wah, et mon corps, ma trompette s&rsquo;&eacute;lectrisent. Une note, et j&rsquo;enterre le jazz. Encore. Tuer le p&egrave;re, le profaner pour qu&rsquo;il renaisse et cr&egrave;ve &agrave; l&rsquo;infini. Je persiste, vo&ucirc;t&eacute;. Avant, je jouais vers les cieux. Maintenant, c&rsquo;est vers le sol. Racines. Afrique. Percus, puis la basse. Elle, toujours plus grave et moi, toujours plus aigu. Je ne joue pas, je laboure. Sonde la terre. Creuse mon sillon au rythme de la batterie, syncop&eacute;e. Jack est bon, si bon que je d&eacute;croche. Structure, harmonie, m&eacute;lodie&hellip; je l&acirc;che tout.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">D&eacute;coller.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Souffler &agrave; m&rsquo;en d&eacute;coller la pl&egrave;vre.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Ne pas jouer ce qui me vient, mais ce qu&rsquo;il y a juste apr&egrave;s.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Trouver le son. L&agrave; ! Non, il m&rsquo;a encore &eacute;chapp&eacute;. Je le poursuis, embrasant mes poumons, et le capture enfin. Envie de cogner, de boxer, mais pas encore, alors je le tords, l&rsquo;&eacute;tire &agrave; l&rsquo;extr&ecirc;me, reprends ma respiration et le torture &agrave; nouveau. Lui faire cracher sa v&eacute;rit&eacute; pour qu&rsquo;elle illumine la foule, et &ccedil;a marche : ils sont tous debout, en transe. &Ccedil;a s&rsquo;emballe, &ccedil;a s&rsquo;excite &ndash; les mains lev&eacute;es, ils en veulent encore plus, mais c&rsquo;est trop t&ocirc;t, on n&rsquo;en est qu&rsquo;aux pr&eacute;liminaires.</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: #ffffff; font-family: \'PT Sans\', Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: 18pt; font-family: courier new, courier, monospace;\">Je fais une pause, me tourne pour mieux &eacute;couter la batterie. Face aux amplis, dos au public. Mes fans enragent, j&rsquo;entends leur col&egrave;re et leur impatience. Je les laisse mijoter, concentr&eacute; sur mes gars. &Ccedil;a pulse, mais pas assez, alors je leur fais des signes. D&rsquo;abord &agrave; John, pour qu&rsquo;il scinde son riff. Puis aux autres, qu&rsquo;ils sortent du rythme et que je m&rsquo;y engouffre, avant qu&rsquo;ils y retournent. On se p&eacute;n&egrave;tre, on se pille, et c&rsquo;est bon. La libert&eacute; du jazz, la fureur du rock, la moiteur du funk. En sueur, j&rsquo;inspire&hellip;</span></p>', 'À celui qui gagne quand je triche.', 3),
(44, '<p>Ecrivez votre textedgdfgdfgdg</p>', 'gdfgdfgtitre chapitre', 4);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `id_chapter` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `report` int(11) NOT NULL
) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lien` (`id_chapter`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `lien` FOREIGN KEY (`id_chapter`) REFERENCES `chapter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
