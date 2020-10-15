-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 09:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acala_rancang`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `google_plus` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `facebook`, `twitter`, `google_plus`, `linkedin`, `profile_picture`, `bio`) VALUES
(3, 'Rafli', 'rafli andrianto', 'rafli andrianto', 'rafli andrianto', 'rafli andrianto', '1601417669-chibiDesain Grafis_Abdul Latif.jpg', 'Lorem ipsum dolor sit amet'),
(4, 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', '1601516179-sowong4 (3).jpg', 'Lorem Ipsum dolor sit amet'),
(5, 'Lorem Ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', '1601523712-trace [Recovered].jpg', 'Lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `exhibition`
--

CREATE TABLE `exhibition` (
  `id_exhibition` int(11) NOT NULL,
  `judul_exhibition` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `instansi` varchar(200) NOT NULL,
  `ig_author` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exhibition`
--

INSERT INTO `exhibition` (`id_exhibition`, `judul_exhibition`, `author`, `instansi`, `ig_author`, `id_kategori`, `desc`) VALUES
(40, 'asdasd', 'pembuat', 'instansi', 'asdasd', 1, 'asdasdadasdsasdsad'),
(41, 'judul', 'pembuat', 'instansi', 'instagram', 2, 'Desc'),
(42, 'lorem ipsum dolor sit amet', 'Lorem ipsum', 'Lorem ipsum', 'Lorem ipsum', 3, 'Lorem ipsum dolor sit amet');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_exhibition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `id_exhibition`) VALUES
(10, '1600428794-114-1143982_airbus-industrie-airbus-a350-1000-f-wlxv-airbus.jpg', 40),
(11, '1600429206-Dodge-Charger-21.jpg', 41),
(12, '1600429206-Dodge-Charger-21.jpg', 40),
(13, '1601515660-74666942_756951564712296_4965422223662642896_n.jpg', 42);

-- --------------------------------------------------------

--
-- Table structure for table `interior_experience`
--

CREATE TABLE `interior_experience` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interior_experience`
--

INSERT INTO `interior_experience` (`id`, `judul`, `isi`, `gambar`, `id_author`) VALUES
(4, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae felis dui. Ut eget venenatis nisi, vel ullamcorper diam. Integer sit amet quam massa. Quisque volutpat bibendum leo vitae scelerisque. Praesent massa eros, placerat sed turpis eget, blandit aliquet metus. Curabitur laoreet fringilla sapien quis tempor. Nulla sed molestie elit.\r\n\r\nNam tristique, velit tincidunt semper sagittis, sem enim pretium arcu, et laoreet enim augue pretium ante. Sed lobortis ex id metus pellentesque pulvinar. Sed rutrum elit nec lectus condimentum sollicitudin. Vestibulum ut ex magna. Suspendisse arcu tellus, consectetur sed tellus quis, suscipit consequat odio. Sed viverra ac elit sed iaculis. Phasellus at bibendum felis, eget pretium magna. Integer a vulputate urna. Integer pellentesque malesuada ipsum, id venenatis tellus fringilla vitae. Duis fermentum orci nisl, vel tincidunt augue facilisis eu. Quisque fringilla risus orci, nec rutrum magna dapibus quis. Ut sollicitudin neque eu justo dapibus interdum sit amet ac velit.\r\n\r\nNulla facilisi. Pellentesque vel turpis vel ex vestibulum porta quis sed sapien. In imperdiet urna sed nisi aliquam convallis. Donec cursus sagittis ex sit amet euismod. Proin blandit, nulla vitae interdum venenatis, lorem purus tempus nisl, at tincidunt dui sem non ex. Nullam fringilla nisl diam, sit amet tincidunt mauris feugiat nec. Vivamus ac odio ligula. Vivamus pulvinar, erat sed egestas dictum, ipsum dolor convallis felis, non tristique felis urna vitae enim. Etiam varius rhoncus commodo. Sed feugiat nibh efficitur lectus cursus, sit amet bibendum orci viverra. Nam lobortis laoreet risus, quis efficitur urna vehicula vitae. Phasellus id metus id erat auctor interdum sed ac lacus. Pellentesque non posuere risus. Nullam a ligula imperdiet, condimentum ex ac, molestie sapien. Suspendisse luctus tristique diam, eu consequat erat. In cursus urna nec vulputate aliquam.', '1601417753-1504933.jpg', 3),
(5, 'lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus risus a sapien tristique rutrum id et quam. Nulla scelerisque elementum rutrum. Donec commodo nunc lacus, eu gravida nisi semper at. Maecenas non tincidunt magna. Integer interdum interdum luctus. Aenean non erat sollicitudin odio ultricies feugiat. Phasellus pellentesque ipsum in mauris luctus, id tristique nunc semper. Sed non augue consectetur, tincidunt est nec, gravida nisi. Morbi venenatis, velit sed tristique mattis, arcu nulla commodo est, at varius nunc lacus sit amet sem.\r\n\r\nDuis velit tortor, maximus quis libero in, dignissim imperdiet mi. Mauris vestibulum eget elit eget tempus. Pellentesque faucibus quam lacus, non tristique mi hendrerit sit amet. Etiam eget consequat urna. Quisque augue nibh, dapibus vitae imperdiet sed, fermentum non risus. Vivamus est nibh, ultrices eu arcu a, lobortis convallis elit. Suspendisse at justo sed erat viverra aliquam. Etiam quis arcu dictum, sollicitudin est ac, rutrum mi.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi porttitor eget sapien a efficitur. Nunc interdum consequat finibus. Suspendisse fringilla non orci sit amet vestibulum. Pellentesque pellentesque, lectus eget sodales luctus, sem sapien accumsan felis, vitae sodales magna tortor nec enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus id urna tincidunt, semper tellus ut, scelerisque odio. Vestibulum id nisi augue. Suspendisse non leo mollis, eleifend tortor at, laoreet risus.', '1601418330-422261.jpg', 3),
(6, 'lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus risus a sapien tristique rutrum id et quam. Nulla scelerisque elementum rutrum. Donec commodo nunc lacus, eu gravida nisi semper at. Maecenas non tincidunt magna. Integer interdum interdum luctus. Aenean non erat sollicitudin odio ultricies feugiat. Phasellus pellentesque ipsum in mauris luctus, id tristique nunc semper. Sed non augue consectetur, tincidunt est nec, gravida nisi. Morbi venenatis, velit sed tristique mattis, arcu nulla commodo est, at varius nunc lacus sit amet sem.\r\n\r\nDuis velit tortor, maximus quis libero in, dignissim imperdiet mi. Mauris vestibulum eget elit eget tempus. Pellentesque faucibus quam lacus, non tristique mi hendrerit sit amet. Etiam eget consequat urna. Quisque augue nibh, dapibus vitae imperdiet sed, fermentum non risus. Vivamus est nibh, ultrices eu arcu a, lobortis convallis elit. Suspendisse at justo sed erat viverra aliquam. Etiam quis arcu dictum, sollicitudin est ac, rutrum mi.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi porttitor eget sapien a efficitur. Nunc interdum consequat finibus. Suspendisse fringilla non orci sit amet vestibulum. Pellentesque pellentesque, lectus eget sodales luctus, sem sapien accumsan felis, vitae sodales magna tortor nec enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus id urna tincidunt, semper tellus ut, scelerisque odio. Vestibulum id nisi augue. Suspendisse non leo mollis, eleifend tortor at, laoreet risus.', '1601418354-wallpaper2you_141471.jpg', 3),
(7, 'lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus risus a sapien tristique rutrum id et quam. Nulla scelerisque elementum rutrum. Donec commodo nunc lacus, eu gravida nisi semper at. Maecenas non tincidunt magna. Integer interdum interdum luctus. Aenean non erat sollicitudin odio ultricies feugiat. Phasellus pellentesque ipsum in mauris luctus, id tristique nunc semper. Sed non augue consectetur, tincidunt est nec, gravida nisi. Morbi venenatis, velit sed tristique mattis, arcu nulla commodo est, at varius nunc lacus sit amet sem.\r\n\r\nDuis velit tortor, maximus quis libero in, dignissim imperdiet mi. Mauris vestibulum eget elit eget tempus. Pellentesque faucibus quam lacus, non tristique mi hendrerit sit amet. Etiam eget consequat urna. Quisque augue nibh, dapibus vitae imperdiet sed, fermentum non risus. Vivamus est nibh, ultrices eu arcu a, lobortis convallis elit. Suspendisse at justo sed erat viverra aliquam. Etiam quis arcu dictum, sollicitudin est ac, rutrum mi.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi porttitor eget sapien a efficitur. Nunc interdum consequat finibus. Suspendisse fringilla non orci sit amet vestibulum. Pellentesque pellentesque, lectus eget sodales luctus, sem sapien accumsan felis, vitae sodales magna tortor nec enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus id urna tincidunt, semper tellus ut, scelerisque odio. Vestibulum id nisi augue. Suspendisse non leo mollis, eleifend tortor at, laoreet risus.', '1601418458-sr2Desain Grafis_Abdul Latif.jpg', 3),
(8, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis turpis nulla, ac tincidunt massa egestas at. Vivamus feugiat tincidunt est, ut pharetra ipsum fringilla vel. Integer venenatis nisi nibh, non luctus tellus pellentesque quis. In et tristique justo, sit amet euismod sapien. Nunc sit amet felis massa. Quisque pharetra tincidunt nisi, non volutpat nisl vulputate consectetur. Phasellus eros sapien, ullamcorper eget euismod quis, viverra a ipsum. Quisque id nibh quis erat luctus gravida non vel mauris. Fusce eleifend lacus sit amet turpis tempor, ut aliquet magna luctus. Donec eu scelerisque turpis.\r\n\r\nAliquam sed felis et leo vestibulum imperdiet. Aenean mollis lacinia nibh, ut commodo magna varius in. In dictum lectus ut ipsum porta hendrerit. Proin convallis rhoncus ex, ut suscipit nulla. Vestibulum in augue id sapien viverra aliquam. Sed gravida risus sodales, egestas nulla in, efficitur nisl. Nulla in mattis magna. Aliquam at leo metus. Curabitur dictum eros id diam consectetur consectetur. Mauris nec consectetur nisl, vel rhoncus ante. Pellentesque elit ex, faucibus vel quam eget, viverra vestibulum odio. Mauris consequat ante congue pulvinar maximus. Ut in velit bibendum felis accumsan tempus.\r\n\r\nMorbi eget imperdiet nisl. Duis viverra tortor sit amet faucibus ullamcorper. Nam vehicula tellus eu mauris congue efficitur. Vestibulum nec massa sed ipsum dictum varius vel id ipsum. Vestibulum tincidunt ac lectus et blandit. In consequat iaculis pharetra. Aenean nec ullamcorper quam. Vivamus in ultricies dui. Vestibulum justo sem, pharetra vel imperdiet vehicula, mattis ac eros. Sed ante justo, maximus non fermentum ut, faucibus quis augue. Suspendisse at elit et lectus varius rutrum.\r\n\r\nDonec ac rutrum massa. Morbi lorem felis, iaculis eget urna vel, feugiat bibendum urna. Fusce gravida ex a ex porta eleifend. Donec condimentum sit amet purus quis varius. Etiam consectetur tristique hendrerit. Pellentesque ut libero rhoncus, posuere orci id, accumsan elit. Nunc commodo, tellus ut eleifend luctus, mauris augue consectetur metus, interdum pulvinar sem lacus eu quam.\r\n\r\nNullam a aliquam magna. Praesent posuere ipsum vel lorem dignissim, auctor suscipit arcu mattis. Suspendisse consectetur tellus quis metus malesuada aliquam. Nam id porta nibh, ac varius velit. Quisque tempor ligula eu quam laoreet fermentum. Nunc et fermentum diam, vestibulum tempor odio. Sed in mollis metus, a iaculis orci. Aenean accumsan nulla eu mollis efficitur. Pellentesque eros urna, porttitor a nibh ut, vehicula ultrices sapien. Aenean ullamcorper volutpat imperdiet. Nullam dignissim diam nec dui viverra ullamcorper.\r\n\r\nCurabitur lacinia tortor sit amet nulla sollicitudin, eget blandit orci tincidunt. Fusce eu est congue, laoreet ante quis, dapibus lacus. Sed et aliquet massa, quis dapibus nunc. Fusce sagittis non quam nec cursus. Sed ac neque ex. Mauris et luctus magna, non scelerisque ligula. Sed id tortor quis odio faucibus condimentum nec a odio. Aenean ac lacinia dolor. Cras nec enim nec tellus iaculis mattis. Nullam et elit volutpat, imperdiet nisl quis, venenatis tortor.\r\n\r\nUt commodo nulla id magna commodo, id consequat sapien varius. Aliquam sed eros et orci ultrices imperdiet vel eget augue. Vestibulum velit nulla, lacinia id mattis id, consectetur eu neque. Ut ultrices lectus dui, quis viverra lorem tempor sit amet. Maecenas non egestas mi. Quisque euismod arcu eu nulla tincidunt, vel dapibus dui gravida. Proin rutrum ex tortor, id vestibulum felis scelerisque ac. Ut tincidunt eros quis blandit condimentum. Nullam vitae interdum velit, quis vehicula neque. Etiam eleifend orci nisl, vel sodales orci semper ac.\r\n\r\nEtiam vel efficitur dui. Sed mattis iaculis lacus eu sagittis. Ut interdum nisi vitae purus fringilla scelerisque. Donec et quam consectetur, mattis velit non, viverra nunc. Morbi suscipit vitae orci eget convallis. Nulla dolor magna, pretium at vestibulum vel, porta id risus. Duis mollis eu ipsum eu vulputate. Donec rhoncus ut arcu eget finibus. In vitae vulputate nibh, eget viverra purus. Integer blandit justo sed luctus ornare. Donec tellus nunc, varius ut diam dapibus, dignissim iaculis erat. Sed hendrerit dui dapibus, bibendum nunc eu, efficitur ante. Phasellus maximus leo quam, ac tristique odio sodales ut. Etiam mauris augue, convallis sit amet leo vitae, sodales suscipit dolor. Mauris rhoncus urna vitae nisl varius dapibus.\r\n\r\nCurabitur luctus arcu justo, quis porttitor lacus posuere nec. Nulla sem mauris, tempus eget libero sit amet, mattis accumsan nibh. Donec aliquam sed risus vel consequat. Nunc ac ex quam. Fusce lacinia lacus leo, vel condimentum leo vulputate non. Pellentesque in tortor non odio iaculis luctus quis vel nunc. Vivamus ornare nunc orci. Proin eget mattis mi. Phasellus sed convallis tellus, bibendum molestie massa. Nunc in libero eget libero egestas dictum ac eget nulla. Sed in nulla cursus, sollicitudin est vitae, ullamcorper felis. Phasellus rutrum urna pellentesque nibh efficitur, eu dignissim velit eleifend. Vivamus bibendum at neque sodales dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a tempor nisl, at porta purus.\r\n\r\nMaecenas finibus tortor ac lorem sollicitudin, sit amet tristique sapien tincidunt. Proin ac justo maximus, fringilla augue in, fermentum velit. Donec interdum interdum hendrerit. Ut accumsan, ante semper interdum varius, metus dolor lacinia mauris, sit amet dapibus magna tortor sed tortor. Praesent pulvinar dignissim dapibus. Sed sagittis velit vitae libero sodales, gravida ultricies urna tempor. Maecenas consectetur finibus orci id molestie. Curabitur id pellentesque mi. Integer lobortis augue augue, a viverra nisl porttitor sed. Duis gravida ligula facilisis, accumsan sapien sagittis, interdum dolor. Mauris nulla lorem, dictum eu turpis at, dignissim sodales augue. Suspendisse iaculis augue lectus, quis aliquam lectus bibendum ac. Nunc accumsan dui in lacus tincidunt, sed volutpat ex efficitur.', '1601516322-DSC_0046.JPG', 4),
(9, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis turpis nulla, ac tincidunt massa egestas at. Vivamus feugiat tincidunt est, ut pharetra ipsum fringilla vel. Integer venenatis nisi nibh, non luctus tellus pellentesque quis. In et tristique justo, sit amet euismod sapien. Nunc sit amet felis massa. Quisque pharetra tincidunt nisi, non volutpat nisl vulputate consectetur. Phasellus eros sapien, ullamcorper eget euismod quis, viverra a ipsum. Quisque id nibh quis erat luctus gravida non vel mauris. Fusce eleifend lacus sit amet turpis tempor, ut aliquet magna luctus. Donec eu scelerisque turpis.\r\n\r\nAliquam sed felis et leo vestibulum imperdiet. Aenean mollis lacinia nibh, ut commodo magna varius in. In dictum lectus ut ipsum porta hendrerit. Proin convallis rhoncus ex, ut suscipit nulla. Vestibulum in augue id sapien viverra aliquam. Sed gravida risus sodales, egestas nulla in, efficitur nisl. Nulla in mattis magna. Aliquam at leo metus. Curabitur dictum eros id diam consectetur consectetur. Mauris nec consectetur nisl, vel rhoncus ante. Pellentesque elit ex, faucibus vel quam eget, viverra vestibulum odio. Mauris consequat ante congue pulvinar maximus. Ut in velit bibendum felis accumsan tempus.\r\n\r\nMorbi eget imperdiet nisl. Duis viverra tortor sit amet faucibus ullamcorper. Nam vehicula tellus eu mauris congue efficitur. Vestibulum nec massa sed ipsum dictum varius vel id ipsum. Vestibulum tincidunt ac lectus et blandit. In consequat iaculis pharetra. Aenean nec ullamcorper quam. Vivamus in ultricies dui. Vestibulum justo sem, pharetra vel imperdiet vehicula, mattis ac eros. Sed ante justo, maximus non fermentum ut, faucibus quis augue. Suspendisse at elit et lectus varius rutrum.\r\n\r\nDonec ac rutrum massa. Morbi lorem felis, iaculis eget urna vel, feugiat bibendum urna. Fusce gravida ex a ex porta eleifend. Donec condimentum sit amet purus quis varius. Etiam consectetur tristique hendrerit. Pellentesque ut libero rhoncus, posuere orci id, accumsan elit. Nunc commodo, tellus ut eleifend luctus, mauris augue consectetur metus, interdum pulvinar sem lacus eu quam.\r\n\r\nNullam a aliquam magna. Praesent posuere ipsum vel lorem dignissim, auctor suscipit arcu mattis. Suspendisse consectetur tellus quis metus malesuada aliquam. Nam id porta nibh, ac varius velit. Quisque tempor ligula eu quam laoreet fermentum. Nunc et fermentum diam, vestibulum tempor odio. Sed in mollis metus, a iaculis orci. Aenean accumsan nulla eu mollis efficitur. Pellentesque eros urna, porttitor a nibh ut, vehicula ultrices sapien. Aenean ullamcorper volutpat imperdiet. Nullam dignissim diam nec dui viverra ullamcorper.\r\n\r\nCurabitur lacinia tortor sit amet nulla sollicitudin, eget blandit orci tincidunt. Fusce eu est congue, laoreet ante quis, dapibus lacus. Sed et aliquet massa, quis dapibus nunc. Fusce sagittis non quam nec cursus. Sed ac neque ex. Mauris et luctus magna, non scelerisque ligula. Sed id tortor quis odio faucibus condimentum nec a odio. Aenean ac lacinia dolor. Cras nec enim nec tellus iaculis mattis. Nullam et elit volutpat, imperdiet nisl quis, venenatis tortor.\r\n\r\nUt commodo nulla id magna commodo, id consequat sapien varius. Aliquam sed eros et orci ultrices imperdiet vel eget augue. Vestibulum velit nulla, lacinia id mattis id, consectetur eu neque. Ut ultrices lectus dui, quis viverra lorem tempor sit amet. Maecenas non egestas mi. Quisque euismod arcu eu nulla tincidunt, vel dapibus dui gravida. Proin rutrum ex tortor, id vestibulum felis scelerisque ac. Ut tincidunt eros quis blandit condimentum. Nullam vitae interdum velit, quis vehicula neque. Etiam eleifend orci nisl, vel sodales orci semper ac.\r\n\r\nEtiam vel efficitur dui. Sed mattis iaculis lacus eu sagittis. Ut interdum nisi vitae purus fringilla scelerisque. Donec et quam consectetur, mattis velit non, viverra nunc. Morbi suscipit vitae orci eget convallis. Nulla dolor magna, pretium at vestibulum vel, porta id risus. Duis mollis eu ipsum eu vulputate. Donec rhoncus ut arcu eget finibus. In vitae vulputate nibh, eget viverra purus. Integer blandit justo sed luctus ornare. Donec tellus nunc, varius ut diam dapibus, dignissim iaculis erat. Sed hendrerit dui dapibus, bibendum nunc eu, efficitur ante. Phasellus maximus leo quam, ac tristique odio sodales ut. Etiam mauris augue, convallis sit amet leo vitae, sodales suscipit dolor. Mauris rhoncus urna vitae nisl varius dapibus.\r\n\r\nCurabitur luctus arcu justo, quis porttitor lacus posuere nec. Nulla sem mauris, tempus eget libero sit amet, mattis accumsan nibh. Donec aliquam sed risus vel consequat. Nunc ac ex quam. Fusce lacinia lacus leo, vel condimentum leo vulputate non. Pellentesque in tortor non odio iaculis luctus quis vel nunc. Vivamus ornare nunc orci. Proin eget mattis mi. Phasellus sed convallis tellus, bibendum molestie massa. Nunc in libero eget libero egestas dictum ac eget nulla. Sed in nulla cursus, sollicitudin est vitae, ullamcorper felis. Phasellus rutrum urna pellentesque nibh efficitur, eu dignissim velit eleifend. Vivamus bibendum at neque sodales dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a tempor nisl, at porta purus.\r\n\r\nMaecenas finibus tortor ac lorem sollicitudin, sit amet tristique sapien tincidunt. Proin ac justo maximus, fringilla augue in, fermentum velit. Donec interdum interdum hendrerit. Ut accumsan, ante semper interdum varius, metus dolor lacinia mauris, sit amet dapibus magna tortor sed tortor. Praesent pulvinar dignissim dapibus. Sed sagittis velit vitae libero sodales, gravida ultricies urna tempor. Maecenas consectetur finibus orci id molestie. Curabitur id pellentesque mi. Integer lobortis augue augue, a viverra nisl porttitor sed. Duis gravida ligula facilisis, accumsan sapien sagittis, interdum dolor. Mauris nulla lorem, dictum eu turpis at, dignissim sodales augue. Suspendisse iaculis augue lectus, quis aliquam lectus bibendum ac. Nunc accumsan dui in lacus tincidunt, sed volutpat ex efficitur.', '1601523826-822526.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Interior Design'),
(2, 'Furniture'),
(3, 'Schematic Drawing'),
(4, 'Nirmana');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `email`, `instansi`) VALUES
(1, 'Rafli', 'admin@mail.com', 'instansi'),
(2, 'Abdul', 'grim.culver@gmail.com', 'polinema'),
(3, 'Abdul', 'mastercracker0220@protonmail.com', 'polinema'),
(4, 'Lorem Ipsum', 'furoa@ericreyess.com', 'Lorem ipsum'),
(5, 'Abdul', 'admin@mail.com', 'polinema');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id_podcast` int(11) NOT NULL,
  `judul_podcast` varchar(100) NOT NULL,
  `file_podcast` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id_podcast`, `judul_podcast`, `file_podcast`) VALUES
(2, 'Lorem ipsum', '1602300276-ragea.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`id`, `nama`, `bio`, `facebook`, `twitter`, `instagram`, `gambar`) VALUES
(1, 'Abdul', 'lorem ipsum dolor sit amet', 'ana', 'ana', 'ana', '1600566140-wallpaper2you_141471.jpg'),
(3, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis turpis nulla, ac tincidunt massa egestas at. Vivamus feugiat tincidunt est, ut pharetra ipsum fringilla vel. Integer venenatis nisi nibh, non luctus tellus pellentesque quis. In et tristique justo, sit amet euismod sapien. Nunc sit amet felis massa. Quisque pharetra tincidunt nisi, non volutpat nisl vulputate consectetur. Phasellus eros sapien, ullamcorper eget euismod quis, viverra a ipsum. Quisque id nibh quis erat luctus gravida non vel mauris. Fusce eleifend lacus sit amet turpis tempor, ut aliquet magna luctus. Donec eu scelerisque turpis.\r\n\r\nAliquam sed felis et leo vestibulum imperdiet. Aenean mollis lacinia nibh, ut commodo magna varius in. In dictum lectus ut ipsum porta hendrerit. Proin convallis rhoncus ex, ut suscipit nulla. Vestibulum in augue id sapien viverra aliquam. Sed gravida risus sodales, egestas nulla in, efficitur nisl. Nulla in mattis magna. Aliquam at leo metus. Curabitur dictum eros id diam consectetur consectetur. Mauris nec consectetur nisl, vel rhoncus ante. Pellentesque elit ex, faucibus vel quam eget, viverra vestibulum odio. Mauris consequat ante congue pulvinar maximus. Ut in velit bibendum felis accumsan tempus.\r\n\r\nMorbi eget imperdiet nisl. Duis viverra tortor sit amet faucibus ullamcorper. Nam vehicula tellus eu mauris congue efficitur. Vestibulum nec massa sed ipsum dictum varius vel id ipsum. Vestibulum tincidunt ac lectus et blandit. In consequat iaculis pharetra. Aenean nec ullamcorper quam. Vivamus in ultricies dui. Vestibulum justo sem, pharetra vel imperdiet vehicula, mattis ac eros. Sed ante justo, maximus non fermentum ut, faucibus quis augue. Suspendisse at elit et lectus varius rutrum.\r\n\r\nDonec ac rutrum massa. Morbi lorem felis, iaculis eget urna vel, feugiat bibendum urna. Fusce gravida ex a ex porta eleifend. Donec condimentum sit amet purus quis varius. Etiam consectetur tristique hendrerit. Pellentesque ut libero rhoncus, posuere orci id, accumsan elit. Nunc commodo, tellus ut eleifend luctus, mauris augue consectetur metus, interdum pulvinar sem lacus eu quam.\r\n\r\nNullam a aliquam magna. Praesent posuere ipsum vel lorem dignissim, auctor suscipit arcu mattis. Suspendisse consectetur tellus quis metus malesuada aliquam. Nam id porta nibh, ac varius velit. Quisque tempor ligula eu quam laoreet fermentum. Nunc et fermentum diam, vestibulum tempor odio. Sed in mollis metus, a iaculis orci. Aenean accumsan nulla eu mollis efficitur. Pellentesque eros urna, porttitor a nibh ut, vehicula ultrices sapien. Aenean ullamcorper volutpat imperdiet. Nullam dignissim diam nec dui viverra ullamcorper.\r\n\r\nCurabitur lacinia tortor sit amet nulla sollicitudin, eget blandit orci tincidunt. Fusce eu est congue, laoreet ante quis, dapibus lacus. Sed et aliquet massa, quis dapibus nunc. Fusce sagittis non quam nec cursus. Sed ac neque ex. Mauris et luctus magna, non scelerisque ligula. Sed id tortor quis odio faucibus condimentum nec a odio. Aenean ac lacinia dolor. Cras nec enim nec tellus iaculis mattis. Nullam et elit volutpat, imperdiet nisl quis, venenatis tortor.\r\n\r\nUt commodo nulla id magna commodo, id consequat sapien varius. Aliquam sed eros et orci ultrices imperdiet vel eget augue. Vestibulum velit nulla, lacinia id mattis id, consectetur eu neque. Ut ultrices lectus dui, quis viverra lorem tempor sit amet. Maecenas non egestas mi. Quisque euismod arcu eu nulla tincidunt, vel dapibus dui gravida. Proin rutrum ex tortor, id vestibulum felis scelerisque ac. Ut tincidunt eros quis blandit condimentum. Nullam vitae interdum velit, quis vehicula neque. Etiam eleifend orci nisl, vel sodales orci semper ac.\r\n\r\nEtiam vel efficitur dui. Sed mattis iaculis lacus eu sagittis. Ut interdum nisi vitae purus fringilla scelerisque. Donec et quam consectetur, mattis velit non, viverra nunc. Morbi suscipit vitae orci eget convallis. Nulla dolor magna, pretium at vestibulum vel, porta id risus. Duis mollis eu ipsum eu vulputate. Donec rhoncus ut arcu eget finibus. In vitae vulputate nibh, eget viverra purus. Integer blandit justo sed luctus ornare. Donec tellus nunc, varius ut diam dapibus, dignissim iaculis erat. Sed hendrerit dui dapibus, bibendum nunc eu, efficitur ante. Phasellus maximus leo quam, ac tristique odio sodales ut. Etiam mauris augue, convallis sit amet leo vitae, sodales suscipit dolor. Mauris rhoncus urna vitae nisl varius dapibus.\r\n\r\nCurabitur luctus arcu justo, quis porttitor lacus posuere nec. Nulla sem mauris, tempus eget libero sit amet, mattis accumsan nibh. Donec aliquam sed risus vel consequat. Nunc ac ex quam. Fusce lacinia lacus leo, vel condimentum leo vulputate non. Pellentesque in tortor non odio iaculis luctus quis vel nunc. Vivamus ornare nunc orci. Proin eget mattis mi. Phasellus sed convallis tellus, bibendum molestie massa. Nunc in libero eget libero egestas dictum ac eget nulla. Sed in nulla cursus, sollicitudin est vitae, ullamcorper felis. Phasellus rutrum urna pellentesque nibh efficitur, eu dignissim velit eleifend. Vivamus bibendum at neque sodales dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a tempor nisl, at porta purus.\r\n\r\nMaecenas finibus tortor ac lorem sollicitudin, sit amet tristique sapien tincidunt. Proin ac justo maximus, fringilla augue in, fermentum velit. Donec interdum interdum hendrerit. Ut accumsan, ante semper interdum varius, metus dolor lacinia mauris, sit amet dapibus magna tortor sed tortor. Praesent pulvinar dignissim dapibus. Sed sagittis velit vitae libero sodales, gravida ultricies urna tempor. Maecenas consectetur finibus orci id molestie. Curabitur id pellentesque mi. Integer lobortis augue augue, a viverra nisl porttitor sed. Duis gravida ligula facilisis, accumsan sapien sagittis, interdum dolor. Mauris nulla lorem, dictum eu turpis at, dignissim sodales augue. Suspendisse iaculis augue lectus, quis aliquam lectus bibendum ac. Nunc accumsan dui in lacus tincidunt, sed volutpat ex efficitur.', 'Lorem Ipsum', 'Lorem Ipsum', 'loremipsum', '1601516422-DSC_1015.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'grim.culver@gmail.com', NULL, '$2y$10$57W4wy4rIimohUAyNeNyGOTbANVGTTv5xCRy5dCToMrAFjJE2qPai', NULL, '2020-09-12 05:29:19', '2020-09-12 05:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `video` text NOT NULL,
  `id_exhibition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `video`, `id_exhibition`) VALUES
(99, 'https://www.youtube.com/embed/nPe9Jh8HLhs', 41),
(101, 'https://www.youtube.com/embed/-W8O51Y7Pzg', 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibition`
--
ALTER TABLE `exhibition`
  ADD PRIMARY KEY (`id_exhibition`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_exhibition` (`id_exhibition`);

--
-- Indexes for table `interior_experience`
--
ALTER TABLE `interior_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id_podcast`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_exhibition` (`id_exhibition`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exhibition`
--
ALTER TABLE `exhibition`
  MODIFY `id_exhibition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `interior_experience`
--
ALTER TABLE `interior_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id_podcast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exhibition`
--
ALTER TABLE `exhibition`
  ADD CONSTRAINT `exhibition_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_exhibition`) REFERENCES `exhibition` (`id_exhibition`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_exhibition`) REFERENCES `exhibition` (`id_exhibition`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
