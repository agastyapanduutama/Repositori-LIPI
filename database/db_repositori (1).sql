-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2020 at 12:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_repositori`
--

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `id_artikel`) VALUES
(1, 'pandu', 221),
(2, 'utama', 221),
(3, 'agastya', 221),
(4, 'aws', 223),
(5, 'hello', 232),
(6, 'Fasmi Ahmad', 1),
(7, 'Sam Wouthuyzen', 1),
(8, 'Merry Christina Simanjuntak', 2),
(9, 'Jojok Sudarso', 2),
(10, 'Corry Corvianawatie', 3),
(11, 'Dewi Surinati', 3),
(12, 'HK. Larson1; Z. Jaafar', 4),
(13, ' TH. Hui & T. Peristiwady', 4),
(14, 'aws', 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_karya`
--

CREATE TABLE `t_karya` (
  `id_karya` int(11) NOT NULL,
  `id_publikasi` int(11) NOT NULL,
  `id_satker` int(11) NOT NULL,
  `id_subjek` int(11) NOT NULL,
  `judul_karya` varchar(255) NOT NULL,
  `penulis` text DEFAULT NULL,
  `abstrak` text NOT NULL,
  `file` text DEFAULT NULL,
  `no_arsip` varchar(25) NOT NULL,
  `tag` text DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '3' COMMENT '1 karya dipublikasikan\r\n2 karya belum di publikasikan\r\n3. karya belum di konfirmasi',
  `user` int(11) NOT NULL,
  `konfirmasi_user` int(11) DEFAULT NULL,
  `waktu_dibuat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_karya`
--

INSERT INTO `t_karya` (`id_karya`, `id_publikasi`, `id_satker`, `id_subjek`, `judul_karya`, `penulis`, `abstrak`, `file`, `no_arsip`, `tag`, `tahun`, `tanggal`, `status`, `user`, `konfirmasi_user`, `waktu_dibuat`) VALUES
(1, 2, 4, 4, 'Nitrogen uptake competition between minute duckweed ( LemnaperpusillaTorr ) and microalgae under various nutrient composition', ' Awalina, Tjandra Chrismadha, Ika Atman Satya', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\">Implementation of minute duckweed (Lemnaperpusilla) in an integrated aquaculture system for encouraging movement of in-lake floating cage aquaculture to inland base aquaculture has been emphasized as one among various measures for restoring the degraded Lake Maninjau water quality. Unfortunately, in the field, there is a harmful competition between microalgae and duckweed for nutrient uptake. This paper reports an attempt to find out suitable nutrient solution composition for supporting duckweed growth while suppressing the microalgal proliferations. Batch culture of the plant with six varied media treatments (A to L) whichmade from Nitrogen- Phosphorus-Potassium (NPK) fertilizers basis enriched with trace elements, bio-algaecide (Terminalia Cattapa extract), and molasses solutions were examined.The adsorption of TN by duckweed and the assemblage of natural microalgae community was quantified and modelled using mass balance concept approach and non-linear equations. The result showed that among of 12 obtained models, treatment E (a solution which made from NPK fertilizer enriched with molasses and trace element) was the most favourable media composition for promoting duckweed growth and simultaneously suppressed microalgae growth. It is proven from the fact that the TN uptake patterns and the chlorophyll-a content which show chlorophyll-a content werethree magnitudes higher than those were found in treatment A (the most optimum medium for growing microalgae community). The TN uptake rate by minute duckweedin treatment of E was observed as much as 251.54 mg/m2/day while that ofmicroalgae was 208.60 mg/m2/day. (PDF) Nitrogen uptake competition between minute duckweed ( LemnaperpusillaTorr ) and microalgae under various nutrient composition. Available from:</span><br></p>', 'Satya_2020_IOP_Conf__Ser___Earth_Environ__Sci__535_012027.pdf', 'LIPI0001-2020', 'nitrogen, uptake, competition', 2020, '2020-12-19', '1', 15, 13, '2020-12-19 08:38:35'),
(2, 4, 4, 17, 'The influence of coating time on corrosion resistance of Ni/Ni-SiC composite coating', 'Arini Nikitasari,Moch. Syaiful Anwar,Mukhlis Agung Prasetyo,Efendi', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\">In this work, Ni/Ni-SiC composite coating were prepared by pulse electrodeposition on stainless steel 410. It has been proved that composite coating prepared under pulse electrodeposition exhibited higher quality than direct plating condition. Therefore, application pulse electrodeposition of Ni/Ni-SiC composite coating on turbine blade material surface (stainless steel 410) will improve its corrosion resistance properties. The influence of coating time on corrosion resistance properties of the fabricated coating were investigated using Gamry G750 corrosion measurement system. The thickness of coating also observed using Scanning Electrone Microscope(SEM). There were several coating time used in this study. The first, coating time of Ni coating for 60 min then coating time of Ni-SiC coating for 30 min and 90 min. Secondly, coating time of Ni for 15 min and 60 min then coating time of Ni-SiC for 60 min. Result showed that coating time Ni for 15 min and coating time Ni-SiC for 60 min give the best corrosion resistance.</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\"><br></span></p><p><i style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\">AIP Conference Proceedings 2262, 030001 (2020)</i><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\"><br></span><br></p>', '179-302-1-PB.pdf', 'LIPI0002-2020', 'Ni/Ni-Sic, Science', 2018, '2020-12-19', '1', 15, NULL, '2020-12-19 08:41:12'),
(3, 3, 6, 17, 'The Effect of Mechanochemical on The Formation of Calcium Titanate (CaTiO3) Prepared by High Energy Milling', 'Fiqhi Fauzi, Alvin Muhammad Habieb, Alfian Noviyanto, Retno Kusumaningrum, Galuh Sukmarani, Edela Uswah Dien Muhammad, Valleta Jovanka Widodo, Diva Calista Amalia', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif;\">Single-phase calcium titanate (CaTiO3) was successfully synthesized by mechanical milling and the solid-state reaction of CaCO3 and TiO2. The speed of high energy ball milling was 700 rpm with the ball and jar were made from stainless steel. The milling time and ball to powder ratio was 10 h and 50 h, respectively. After milling for 10 h, the mixed powder of CaCO3 and TiO2 experienced heavy milling, which indicated by the average particle size before and after milling was &gt; 1 µm and 85.56 ± 35.62 nm, respectively. Furthermore, the XRD pattern of milled powder revealed the disappearance of CaCO3 peaks and a considerable reduction of TiO2 peaks after milling for 10 h. Moreover, the presence of CaTiO3 peaks in the milled powder was noticeably detected in the XRD pattern, showing the mechanical alloying of CaCO3 and TiO2 was occurred. The milled powder was calcined at 800, 900 and 1000°C for 2 h. The results showed the formation of a single phase of CaTiO3 after calcination at any temperatures. However, the samples indicated the presence of Fe2O3, which from the milling media. The presence of impurities after milling is inevitable due to friction between ball and jar. Further stud</span><br></p>', 'Fauzi_2020_IOP_Conf__Ser___Mater__Sci__Eng__924_012006.pdf', 'LIPI0003-2020', 'Calcium, Science', 2020, '2020-12-19', '1', 14, 13, '2020-12-19 08:45:14'),
(9, 7, 2, 13, 'KECENDERUNGAN NAIKNYA SUHU PERMUKAAN LAUT DAN RESILIENSI KARANG SETELAH KEJADIAN PEMUTIHAN KARANG 2010 DAN 2016 DI TAMAN WISATA PERAIRAN (TWP) PULAU PIEH, PADANG, SUMATRA BARAT', 'Fasmi Ahmad,Sam Wouthuyzen', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Open Sans\", sans-serif;\">Kejadian pemutihan karang (coral bleaching) telah melanda hampir seluruh perairan Indonesia sedikitnya 4 kali antara tahun 1982-2016. Dua kejadian terbaru (2010 dan 2016) telah dibahas mendalam, namun belum ada kajian rinci pada suatu lokasi yang spesifik, seperti di Taman Wisata Perairan (TWP) Pulau Pieh, perairan Padang, Sumatra Barat yang dipengaruhi oleh massa air Samudra Hindia. Tulisan ini bertujuan mengkaji kecenderungan naiknya suhu permukaan laut (SPL) pada kejadian pemutihan karang 2010 dan 2016 dan resiliensi karang setelah kejadian tersebut. Pada kajian ini data SPL jangka panjang hasil pemindaian citra satelit Aqua MODIS digunakan secara intensif. Hasil kajian menunjukkan bahwa SPL rata-rata bulanan tertinggi (MMM) yang dapat ditolerir oleh karang di TWP ini adalah 29,6 oC, , lebih tinggi daripada seluruh perairan Indonesia (29,1oC). Selisih antara SPL Anomali dan SPL normal (MMM) atau disebut Hot Spot (HS) rata-rata telah melampaui MMM pada kejadian pemutihan tahun 2010 sekitar 0,4-0,5oC dengan puncaknya di bulan April dan tingkat keparahan alert-1 (DHW < 8 oC-minggu; karang mengalami pemutihan sebagian). Tahun 2016 HS rata-rata meningkat 0,5~1,0 oC dengan puncak di bulan Jan-Feb dan Mei-Juni dan tingkat keparahan Alert-2 (DHW ≥ 8 oC-minggu, karang mengalami pemutihan berat, luas dan sebagian mati). Satu tahun sebelumnya (2015) terlihat juga HS rata-rata sebesar 0,3-0,8 oC dan DHW ~ 4 oC-minggu. Hal ini menunjukkan bahwa kejadian pemutihan karang di TWP Pulau Pieh berulang-ulang dan panjang. Kecenderungan peningkatan SPL di TWP ini adalah 0,23 oC/dekade lebih rendah dari seluruh perairan Indonesia (0,36 oC/dekade). Kecenderungan ini menunjukkan bahwa terumbu karang di perairan Indonesia, termasuk TWP Pulau Pieh memiliki resiliensi tinggi untuk memulihkan dirinya, karena kecenderungan peningkatan SPL < 1,0 oC/dekade. Dari 11 faktor kunci resiliensi karang, faktor positif yang menunjang resiliensi karang adalah rendahnya polusi, nutrien, sedimentasi, dan rendahnya aktivitas manusia yang tidak ramah lingkungan, sedangkan yang paling negatif adalah meledaknya populasi hewan laut Bulu Seribu, Acanthaster planci, disamping penyakit karang. Resiliensi karang di perairan Indonesia relatif lebih tinggi juga karena, kejadian pemutihan karang berlangsung dalam waktu relatif pendek sekitar 3-4 bulan (Maret-Juni), yakni pada saat fenomena El-nino terjadi. SPL pada bulan lainnya (Juli-Februari) lebih rendah dari MMM, karena sebagian besar perairan Indonesia dipengaruhi oleh adanya upwelling musiman dengan suhu laut jauh lebih rendah dari suhu MMM. Jadi, upwelling berfungsi sebagai mitigasi alami dari bencana pemutihan karang.</span><br></p>', 'Permohonan Persetujuan dan pernyataan pembina.pdf', 'LIPI0002-2020', 'air, suhu, permukaan,wad', 2020, '2020-10-25', '1', 1, 16, '2020-10-25 18:43:50'),
(11, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2020, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(13, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2020, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(14, 7, 2, 13, 'KECENDERUNGAN NAIKNYA SUHU PERMUKAAN LAUT DAN RESILIENSI KARANG SETELAH KEJADIAN PEMUTIHAN KARANG 2010 DAN 2016 DI TAMAN WISATA PERAIRAN (TWP) PULAU PIEH, PADANG, SUMATRA BARAT', 'Fasmi Ahmad,Sam Wouthuyzen', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Open Sans\", sans-serif;\">Kejadian pemutihan karang (coral bleaching) telah melanda hampir seluruh perairan Indonesia sedikitnya 4 kali antara tahun 1982-2016. Dua kejadian terbaru (2010 dan 2016) telah dibahas mendalam, namun belum ada kajian rinci pada suatu lokasi yang spesifik, seperti di Taman Wisata Perairan (TWP) Pulau Pieh, perairan Padang, Sumatra Barat yang dipengaruhi oleh massa air Samudra Hindia. Tulisan ini bertujuan mengkaji kecenderungan naiknya suhu permukaan laut (SPL) pada kejadian pemutihan karang 2010 dan 2016 dan resiliensi karang setelah kejadian tersebut. Pada kajian ini data SPL jangka panjang hasil pemindaian citra satelit Aqua MODIS digunakan secara intensif. Hasil kajian menunjukkan bahwa SPL rata-rata bulanan tertinggi (MMM) yang dapat ditolerir oleh karang di TWP ini adalah 29,6 oC, , lebih tinggi daripada seluruh perairan Indonesia (29,1oC). Selisih antara SPL Anomali dan SPL normal (MMM) atau disebut Hot Spot (HS) rata-rata telah melampaui MMM pada kejadian pemutihan tahun 2010 sekitar 0,4-0,5oC dengan puncaknya di bulan April dan tingkat keparahan alert-1 (DHW < 8 oC-minggu; karang mengalami pemutihan sebagian). Tahun 2016 HS rata-rata meningkat 0,5~1,0 oC dengan puncak di bulan Jan-Feb dan Mei-Juni dan tingkat keparahan Alert-2 (DHW ≥ 8 oC-minggu, karang mengalami pemutihan berat, luas dan sebagian mati). Satu tahun sebelumnya (2015) terlihat juga HS rata-rata sebesar 0,3-0,8 oC dan DHW ~ 4 oC-minggu. Hal ini menunjukkan bahwa kejadian pemutihan karang di TWP Pulau Pieh berulang-ulang dan panjang. Kecenderungan peningkatan SPL di TWP ini adalah 0,23 oC/dekade lebih rendah dari seluruh perairan Indonesia (0,36 oC/dekade). Kecenderungan ini menunjukkan bahwa terumbu karang di perairan Indonesia, termasuk TWP Pulau Pieh memiliki resiliensi tinggi untuk memulihkan dirinya, karena kecenderungan peningkatan SPL < 1,0 oC/dekade. Dari 11 faktor kunci resiliensi karang, faktor positif yang menunjang resiliensi karang adalah rendahnya polusi, nutrien, sedimentasi, dan rendahnya aktivitas manusia yang tidak ramah lingkungan, sedangkan yang paling negatif adalah meledaknya populasi hewan laut Bulu Seribu, Acanthaster planci, disamping penyakit karang. Resiliensi karang di perairan Indonesia relatif lebih tinggi juga karena, kejadian pemutihan karang berlangsung dalam waktu relatif pendek sekitar 3-4 bulan (Maret-Juni), yakni pada saat fenomena El-nino terjadi. SPL pada bulan lainnya (Juli-Februari) lebih rendah dari MMM, karena sebagian besar perairan Indonesia dipengaruhi oleh adanya upwelling musiman dengan suhu laut jauh lebih rendah dari suhu MMM. Jadi, upwelling berfungsi sebagai mitigasi alami dari bencana pemutihan karang.</span><br></p>', 'Permohonan Persetujuan dan pernyataan pembina.pdf', 'LIPI0002-2020', 'air, suhu, permukaan,wad', 2020, '2020-10-25', '1', 1, 16, '2020-10-25 18:43:50'),
(15, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2020, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(16, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2020, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(17, 7, 2, 13, 'KECENDERUNGAN NAIKNYA SUHU PERMUKAAN LAUT DAN RESILIENSI KARANG SETELAH KEJADIAN PEMUTIHAN KARANG 2010 DAN 2016 DI TAMAN WISATA PERAIRAN (TWP) PULAU PIEH, PADANG, SUMATRA BARAT', 'Fasmi Ahmad,Sam Wouthuyzen', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Open Sans\", sans-serif;\">Kejadian pemutihan karang (coral bleaching) telah melanda hampir seluruh perairan Indonesia sedikitnya 4 kali antara tahun 1982-2016. Dua kejadian terbaru (2010 dan 2016) telah dibahas mendalam, namun belum ada kajian rinci pada suatu lokasi yang spesifik, seperti di Taman Wisata Perairan (TWP) Pulau Pieh, perairan Padang, Sumatra Barat yang dipengaruhi oleh massa air Samudra Hindia. Tulisan ini bertujuan mengkaji kecenderungan naiknya suhu permukaan laut (SPL) pada kejadian pemutihan karang 2010 dan 2016 dan resiliensi karang setelah kejadian tersebut. Pada kajian ini data SPL jangka panjang hasil pemindaian citra satelit Aqua MODIS digunakan secara intensif. Hasil kajian menunjukkan bahwa SPL rata-rata bulanan tertinggi (MMM) yang dapat ditolerir oleh karang di TWP ini adalah 29,6 oC, , lebih tinggi daripada seluruh perairan Indonesia (29,1oC). Selisih antara SPL Anomali dan SPL normal (MMM) atau disebut Hot Spot (HS) rata-rata telah melampaui MMM pada kejadian pemutihan tahun 2010 sekitar 0,4-0,5oC dengan puncaknya di bulan April dan tingkat keparahan alert-1 (DHW < 8 oC-minggu; karang mengalami pemutihan sebagian). Tahun 2016 HS rata-rata meningkat 0,5~1,0 oC dengan puncak di bulan Jan-Feb dan Mei-Juni dan tingkat keparahan Alert-2 (DHW ≥ 8 oC-minggu, karang mengalami pemutihan berat, luas dan sebagian mati). Satu tahun sebelumnya (2015) terlihat juga HS rata-rata sebesar 0,3-0,8 oC dan DHW ~ 4 oC-minggu. Hal ini menunjukkan bahwa kejadian pemutihan karang di TWP Pulau Pieh berulang-ulang dan panjang. Kecenderungan peningkatan SPL di TWP ini adalah 0,23 oC/dekade lebih rendah dari seluruh perairan Indonesia (0,36 oC/dekade). Kecenderungan ini menunjukkan bahwa terumbu karang di perairan Indonesia, termasuk TWP Pulau Pieh memiliki resiliensi tinggi untuk memulihkan dirinya, karena kecenderungan peningkatan SPL < 1,0 oC/dekade. Dari 11 faktor kunci resiliensi karang, faktor positif yang menunjang resiliensi karang adalah rendahnya polusi, nutrien, sedimentasi, dan rendahnya aktivitas manusia yang tidak ramah lingkungan, sedangkan yang paling negatif adalah meledaknya populasi hewan laut Bulu Seribu, Acanthaster planci, disamping penyakit karang. Resiliensi karang di perairan Indonesia relatif lebih tinggi juga karena, kejadian pemutihan karang berlangsung dalam waktu relatif pendek sekitar 3-4 bulan (Maret-Juni), yakni pada saat fenomena El-nino terjadi. SPL pada bulan lainnya (Juli-Februari) lebih rendah dari MMM, karena sebagian besar perairan Indonesia dipengaruhi oleh adanya upwelling musiman dengan suhu laut jauh lebih rendah dari suhu MMM. Jadi, upwelling berfungsi sebagai mitigasi alami dari bencana pemutihan karang.</span><br></p>', 'Permohonan Persetujuan dan pernyataan pembina.pdf', 'LIPI0002-2020', 'air, suhu, permukaan,wad', 2020, '2020-10-25', '1', 1, 16, '2020-10-25 18:43:50'),
(18, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2020, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(19, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2020, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(20, 7, 2, 13, 'KECENDERUNGAN NAIKNYA SUHU PERMUKAAN LAUT DAN RESILIENSI KARANG SETELAH KEJADIAN PEMUTIHAN KARANG 2010 DAN 2016 DI TAMAN WISATA PERAIRAN (TWP) PULAU PIEH, PADANG, SUMATRA BARAT', 'Fasmi Ahmad,Sam Wouthuyzen', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Open Sans\", sans-serif;\">Kejadian pemutihan karang (coral bleaching) telah melanda hampir seluruh perairan Indonesia sedikitnya 4 kali antara tahun 1982-2016. Dua kejadian terbaru (2010 dan 2016) telah dibahas mendalam, namun belum ada kajian rinci pada suatu lokasi yang spesifik, seperti di Taman Wisata Perairan (TWP) Pulau Pieh, perairan Padang, Sumatra Barat yang dipengaruhi oleh massa air Samudra Hindia. Tulisan ini bertujuan mengkaji kecenderungan naiknya suhu permukaan laut (SPL) pada kejadian pemutihan karang 2010 dan 2016 dan resiliensi karang setelah kejadian tersebut. Pada kajian ini data SPL jangka panjang hasil pemindaian citra satelit Aqua MODIS digunakan secara intensif. Hasil kajian menunjukkan bahwa SPL rata-rata bulanan tertinggi (MMM) yang dapat ditolerir oleh karang di TWP ini adalah 29,6 oC, , lebih tinggi daripada seluruh perairan Indonesia (29,1oC). Selisih antara SPL Anomali dan SPL normal (MMM) atau disebut Hot Spot (HS) rata-rata telah melampaui MMM pada kejadian pemutihan tahun 2010 sekitar 0,4-0,5oC dengan puncaknya di bulan April dan tingkat keparahan alert-1 (DHW < 8 oC-minggu; karang mengalami pemutihan sebagian). Tahun 2016 HS rata-rata meningkat 0,5~1,0 oC dengan puncak di bulan Jan-Feb dan Mei-Juni dan tingkat keparahan Alert-2 (DHW ≥ 8 oC-minggu, karang mengalami pemutihan berat, luas dan sebagian mati). Satu tahun sebelumnya (2015) terlihat juga HS rata-rata sebesar 0,3-0,8 oC dan DHW ~ 4 oC-minggu. Hal ini menunjukkan bahwa kejadian pemutihan karang di TWP Pulau Pieh berulang-ulang dan panjang. Kecenderungan peningkatan SPL di TWP ini adalah 0,23 oC/dekade lebih rendah dari seluruh perairan Indonesia (0,36 oC/dekade). Kecenderungan ini menunjukkan bahwa terumbu karang di perairan Indonesia, termasuk TWP Pulau Pieh memiliki resiliensi tinggi untuk memulihkan dirinya, karena kecenderungan peningkatan SPL < 1,0 oC/dekade. Dari 11 faktor kunci resiliensi karang, faktor positif yang menunjang resiliensi karang adalah rendahnya polusi, nutrien, sedimentasi, dan rendahnya aktivitas manusia yang tidak ramah lingkungan, sedangkan yang paling negatif adalah meledaknya populasi hewan laut Bulu Seribu, Acanthaster planci, disamping penyakit karang. Resiliensi karang di perairan Indonesia relatif lebih tinggi juga karena, kejadian pemutihan karang berlangsung dalam waktu relatif pendek sekitar 3-4 bulan (Maret-Juni), yakni pada saat fenomena El-nino terjadi. SPL pada bulan lainnya (Juli-Februari) lebih rendah dari MMM, karena sebagian besar perairan Indonesia dipengaruhi oleh adanya upwelling musiman dengan suhu laut jauh lebih rendah dari suhu MMM. Jadi, upwelling berfungsi sebagai mitigasi alami dari bencana pemutihan karang.</span><br></p>', 'Permohonan Persetujuan dan pernyataan pembina.pdf', 'LIPI0002-2020', 'air, suhu, permukaan,wad', 2020, '2020-10-25', '1', 1, 16, '2020-10-25 18:43:50'),
(21, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2020, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(22, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2020, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(35, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2020, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(36, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2020, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(37, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2020, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(38, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2020, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(39, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(40, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(41, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(42, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(43, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(44, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(45, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(46, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(47, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(48, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(49, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(50, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(51, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(52, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(53, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(54, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(55, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(56, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(57, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(58, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(59, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(60, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(61, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2019, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(62, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2019, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(63, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(64, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(65, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(66, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(67, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(68, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(69, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(70, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(71, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(72, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(73, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(74, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(75, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(76, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(77, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(78, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(79, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(80, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(81, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2018, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(82, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2018, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(83, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(84, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(85, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(86, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(87, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(88, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(89, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(90, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(91, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(92, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(93, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(94, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(95, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(96, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(97, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(98, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(99, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(100, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(101, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(102, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(103, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(104, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(105, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(106, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(107, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(108, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(109, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(110, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(111, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(112, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(113, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(114, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(115, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(116, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(117, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(118, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(119, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(120, 8, 3, 15, 'kontributor tambah', 'kontributor tambah', '<p>kontributor tambah<br></p>', '1217608_AdityaMustopa_Multimedia-2.pdf', 'LIPI0004-2020', 'kontributor tambah', 2017, '2020-11-12', '1', 15, 16, '2020-11-12 21:16:47'),
(121, 0, 8, 0, 'Helloworld', 'Hello, World', '<p>Helloworld</p>', 'Tutorial.pdf', 'LIPI0002-2020', 'Hello, World, What', 2017, '2020-11-11', '1', 1, 16, '2020-11-11 17:41:54'),
(122, 7, 2, 13, 'KECENDERUNGAN NAIKNYA SUHU PERMUKAAN LAUT DAN RESILIENSI KARANG SETELAH KEJADIAN PEMUTIHAN KARANG 2010 DAN 2016 DI TAMAN WISATA PERAIRAN (TWP) PULAU PIEH, PADANG, SUMATRA BARAT', 'Fasmi Ahmad,Sam Wouthuyzen', '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Open Sans\", sans-serif;\">Kejadian pemutihan karang (coral bleaching) telah melanda hampir seluruh perairan Indonesia sedikitnya 4 kali antara tahun 1982-2016. Dua kejadian terbaru (2010 dan 2016) telah dibahas mendalam, namun belum ada kajian rinci pada suatu lokasi yang spesifik, seperti di Taman Wisata Perairan (TWP) Pulau Pieh, perairan Padang, Sumatra Barat yang dipengaruhi oleh massa air Samudra Hindia. Tulisan ini bertujuan mengkaji kecenderungan naiknya suhu permukaan laut (SPL) pada kejadian pemutihan karang 2010 dan 2016 dan resiliensi karang setelah kejadian tersebut. Pada kajian ini data SPL jangka panjang hasil pemindaian citra satelit Aqua MODIS digunakan secara intensif. Hasil kajian menunjukkan bahwa SPL rata-rata bulanan tertinggi (MMM) yang dapat ditolerir oleh karang di TWP ini adalah 29,6 oC, , lebih tinggi daripada seluruh perairan Indonesia (29,1oC). Selisih antara SPL Anomali dan SPL normal (MMM) atau disebut Hot Spot (HS) rata-rata telah melampaui MMM pada kejadian pemutihan tahun 2010 sekitar 0,4-0,5oC dengan puncaknya di bulan April dan tingkat keparahan alert-1 (DHW < 8 oC-minggu; karang mengalami pemutihan sebagian). Tahun 2016 HS rata-rata meningkat 0,5~1,0 oC dengan puncak di bulan Jan-Feb dan Mei-Juni dan tingkat keparahan Alert-2 (DHW ≥ 8 oC-minggu, karang mengalami pemutihan berat, luas dan sebagian mati). Satu tahun sebelumnya (2015) terlihat juga HS rata-rata sebesar 0,3-0,8 oC dan DHW ~ 4 oC-minggu. Hal ini menunjukkan bahwa kejadian pemutihan karang di TWP Pulau Pieh berulang-ulang dan panjang. Kecenderungan peningkatan SPL di TWP ini adalah 0,23 oC/dekade lebih rendah dari seluruh perairan Indonesia (0,36 oC/dekade). Kecenderungan ini menunjukkan bahwa terumbu karang di perairan Indonesia, termasuk TWP Pulau Pieh memiliki resiliensi tinggi untuk memulihkan dirinya, karena kecenderungan peningkatan SPL < 1,0 oC/dekade. Dari 11 faktor kunci resiliensi karang, faktor positif yang menunjang resiliensi karang adalah rendahnya polusi, nutrien, sedimentasi, dan rendahnya aktivitas manusia yang tidak ramah lingkungan, sedangkan yang paling negatif adalah meledaknya populasi hewan laut Bulu Seribu, Acanthaster planci, disamping penyakit karang. Resiliensi karang di perairan Indonesia relatif lebih tinggi juga karena, kejadian pemutihan karang berlangsung dalam waktu relatif pendek sekitar 3-4 bulan (Maret-Juni), yakni pada saat fenomena El-nino terjadi. SPL pada bulan lainnya (Juli-Februari) lebih rendah dari MMM, karena sebagian besar perairan Indonesia dipengaruhi oleh adanya upwelling musiman dengan suhu laut jauh lebih rendah dari suhu MMM. Jadi, upwelling berfungsi sebagai mitigasi alami dari bencana pemutihan karang.</span><br></p>', 'Permohonan Persetujuan dan pernyataan pembina.pdf', 'LIPI0002-2020', 'air, suhu, permukaan,wad', 2017, '2020-10-25', '1', 1, 16, '2020-10-25 18:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `t_publikasi`
--

CREATE TABLE `t_publikasi` (
  `id_publikasi` int(11) NOT NULL,
  `nama_publikasi` varchar(50) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_publikasi`
--

INSERT INTO `t_publikasi` (`id_publikasi`, `nama_publikasi`, `keterangan`) VALUES
(1, 'Preprints, post prints, research findings,laporan ', ''),
(2, 'Jurnal artikel ', ''),
(3, 'Working paper, policy paper', ''),
(4, 'Conference paper/prosiding ', ''),
(5, 'Multimedia', ''),
(6, 'Disertasi - thesis', ''),
(7, 'Orasi Profesor Riset ', ''),
(8, 'Buku ', ''),
(9, 'Bagian buku', ''),
(10, 'Paten', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_satker`
--

CREATE TABLE `t_satker` (
  `id_satker` int(11) NOT NULL,
  `nama_satker` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_satker`
--

INSERT INTO `t_satker` (`id_satker`, `nama_satker`, `keterangan`) VALUES
(1, 'Pusat Penelitian Politik', ''),
(2, 'Pusat Penelitian PMB', ''),
(3, 'Pusat Penelitia SDR', ''),
(4, 'Pusat Penelitian Oseanografi', ''),
(5, 'Pusat Penelitian Limnologi', ''),
(6, 'Pusat Penelitian Geoteknologi', ''),
(7, 'Pusat Penelitian Informatika', ''),
(8, 'PPET', ''),
(9, 'Pusat Penelitian Telimek', ''),
(10, 'Pusat Penelitian Instrumentasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_subjek`
--

CREATE TABLE `t_subjek` (
  `id_subjek` int(11) NOT NULL,
  `nama_subjek` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_subjek`
--

INSERT INTO `t_subjek` (`id_subjek`, `nama_subjek`, `keterangan`) VALUES
(1, 'Politik', ''),
(2, 'Sosial dan Kebudayaan', ''),
(3, ' Sumber Daya Regional', ''),
(4, 'Oseanografi', ''),
(5, 'Limnologi', ''),
(6, 'Geoteknologi', ''),
(7, 'Informatika', ''),
(8, 'Elektronika dan Telekomunikasi', ''),
(9, 'Tenaga Listrik dan mekatronik', ''),
(10, 'Instrumen', ''),
(11, 'Metalurgi', ''),
(12, 'Teknologi Bersih', ''),
(13, 'Biologi', ''),
(14, 'Bioteknologi', ''),
(15, 'Biomaterial', ''),
(16, 'Kebun Raya', ''),
(17, 'Kimia', ''),
(18, 'Fisika', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL COMMENT '1 admin\r\n2 pustakawan\r\n3 kontributor\r\n',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `tanggal_dibuat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `nama_user`, `username`, `password`, `level`, `status`, `tanggal_dibuat`) VALUES
(1, 'Admin', 'admin', '580097c0183509887837571145ccc3ad', 1, '1', '2020-06-07 13:02:59'),
(13, 'pandu', 'pandu', '67ccb39f0ec81c363d058774c2a1598d', 2, '1', '2020-11-11 22:46:15'),
(14, 'agas', 'agas', '67ccb39f0ec81c363d058774c2a1598d', 3, '1', '2020-11-11 22:46:24'),
(15, 'kontributor ', 'kontributor', '67ccb39f0ec81c363d058774c2a1598d', 3, '1', '2020-11-12 21:03:26'),
(16, 'pustakawan', 'pustakawan', '67ccb39f0ec81c363d058774c2a1598d', 2, '1', '2020-11-12 21:03:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `t_karya`
--
ALTER TABLE `t_karya`
  ADD PRIMARY KEY (`id_karya`);

--
-- Indexes for table `t_publikasi`
--
ALTER TABLE `t_publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `t_satker`
--
ALTER TABLE `t_satker`
  ADD PRIMARY KEY (`id_satker`);

--
-- Indexes for table `t_subjek`
--
ALTER TABLE `t_subjek`
  ADD PRIMARY KEY (`id_subjek`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t_karya`
--
ALTER TABLE `t_karya`
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `t_publikasi`
--
ALTER TABLE `t_publikasi`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_satker`
--
ALTER TABLE `t_satker`
  MODIFY `id_satker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_subjek`
--
ALTER TABLE `t_subjek`
  MODIFY `id_subjek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
