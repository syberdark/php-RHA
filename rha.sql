-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 03:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rha`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE IF NOT EXISTS `aduan` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `jns_kelamin` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `jenis_bencana` varchar(250) NOT NULL,
  `tmpt_kejadian` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id`, `nama`, `alamat`, `jns_kelamin`, `no_hp`, `jenis_bencana`, `tmpt_kejadian`, `foto`) VALUES
(2, 'njjjk', 'jlkjk', 'Laki-Laki', '098989', 'nkj', 'nkk', '07072019123416Hv3h2fn.jpg'),
(3, 'saya', 'bumi', 'Laki-Laki', '0898976788', 'patah hati', 'hati ini', '07072019145328CrquSzFUsAAolKe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `no` int(11) NOT NULL,
  `nama_bencana` varchar(250) NOT NULL,
  `Tanggal` date NOT NULL,
  `Tempat` varchar(250) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dataa`
--

CREATE TABLE IF NOT EXISTS `dataa` (
  `id` varchar(20) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataa`
--

INSERT INTO `dataa` (`id`, `jenis`, `user`) VALUES
('A0001', 'banjir', 'Valmanway'),
('A0002', 'Banjir', 'Valmanway'),
('A0003', 'bbbb', 'Valmanway'),
('A0004', 'fdfdfdg', 'Valmanway'),
('dsdsc', 'csaa', 'Valmanway'),
('dwqwq', 'cscdsc', 'Valmanway'),
('kurumi', 'kurumi', 'Valmanway'),
('rama', 'rama', 'Valmanway'),
('rtrt', 'bfbf', 'Valmanway'),
('vdgfdg', 'gdgfdg', 'Valmanway'),
('vvddd', 'ewewe', 'Valmanway'),
('wewewr', 'asuna', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datab`
--

CREATE TABLE IF NOT EXISTS `datab` (
  `id` varchar(20) NOT NULL,
  `desa` varchar(250) NOT NULL,
  `kecamatan` varchar(250) NOT NULL,
  `kabupaten` varchar(250) NOT NULL,
  `w_mulai` date NOT NULL,
  `w_selesai` date NOT NULL,
  `j_daerah` varchar(250) NOT NULL,
  `j_lokasi` varchar(250) NOT NULL,
  `t_air` varchar(20) NOT NULL,
  `lama_t` varchar(20) NOT NULL,
  `peta` varchar(20) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datab`
--

INSERT INTO `datab` (`id`, `desa`, `kecamatan`, `kabupaten`, `w_mulai`, `w_selesai`, `j_daerah`, `j_lokasi`, `t_air`, `lama_t`, `peta`, `user`) VALUES
('kurumi', 'kurumi', 'kurumi', 'kurumi', '2019-01-01', '2020-02-01', 'kurumi', 'Pedesaan', '3', '3', 'Ada', 'Valmanway'),
('rama', 'rama', 'rama', 'rama', '2018-01-01', '2018-02-01', 'rama', 'Pedesaan', '11', '11', 'Ada', 'Valmanway'),
('wewewr', 'asuna', 'asuna', 'asuna', '2019-04-28', '2019-05-09', 'asuna', 'Pedesaan', '2', '2', 'Ada', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datac`
--

CREATE TABLE IF NOT EXISTS `datac` (
  `id` varchar(250) NOT NULL,
  `rumsa` varchar(250) NOT NULL,
  `puskes` varchar(250) NOT NULL,
  `far` varchar(250) NOT NULL,
  `r_ringan` varchar(250) NOT NULL,
  `r_berat` varchar(250) NOT NULL,
  `sumur` varchar(250) NOT NULL,
  `sumur_t` varchar(250) NOT NULL,
  `pma` varchar(250) NOT NULL,
  `pma_r` varchar(250) NOT NULL,
  `transportasi` varchar(20) NOT NULL,
  `komunikasi` varchar(20) NOT NULL,
  `listrik` varchar(20) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datac`
--

INSERT INTO `datac` (`id`, `rumsa`, `puskes`, `far`, `r_ringan`, `r_berat`, `sumur`, `sumur_t`, `pma`, `pma_r`, `transportasi`, `komunikasi`, `listrik`, `user`) VALUES
('kurumi', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'Baik', 'Baik', 'Baik', 'Valmanway'),
('rama', '11', '11', '11', '11', '11', '11', '11', '11', '11', 'Baik', 'Baik', 'Baik', 'Valmanway'),
('wewewr', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Baik', 'Baik', 'Baik', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datad`
--

CREATE TABLE IF NOT EXISTS `datad` (
  `id` varchar(250) NOT NULL,
  `anak` varchar(20) NOT NULL,
  `manusia` varchar(20) NOT NULL,
  `hamil` varchar(20) NOT NULL,
  `balita` varchar(20) NOT NULL,
  `l_ringan` varchar(20) NOT NULL,
  `l_berat` varchar(20) NOT NULL,
  `mati` varchar(20) NOT NULL,
  `hilang` varchar(20) NOT NULL,
  `dirujuk` varchar(20) NOT NULL,
  `evakuasi` varchar(20) NOT NULL,
  `p_pelayanan` varchar(20) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datad`
--

INSERT INTO `datad` (`id`, `anak`, `manusia`, `hamil`, `balita`, `l_ringan`, `l_berat`, `mati`, `hilang`, `dirujuk`, `evakuasi`, `p_pelayanan`, `user`) VALUES
('kurumi', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'Valmanway'),
('rama', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', 'Valmanway'),
('wewewr', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datae`
--

CREATE TABLE IF NOT EXISTS `datae` (
  `id` varchar(250) NOT NULL,
  `jenis_p` varchar(40) NOT NULL,
  `kapasitas_p` varchar(40) NOT NULL,
  `kapasitas_a` varchar(40) NOT NULL,
  `mck` varchar(40) NOT NULL,
  `t_pembuangan` varchar(40) NOT NULL,
  `spal` varchar(40) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datae`
--

INSERT INTO `datae` (`id`, `jenis_p`, `kapasitas_p`, `kapasitas_a`, `mck`, `t_pembuangan`, `spal`, `user`) VALUES
('kurumi', 'Bangunan Permanen', 'Tidak Memadai', 'Tidak Memadai', 'Memadai', 'Tidak Memadai', 'Memadai', 'Valmanway'),
('rama', 'Bangunan Permanen', 'Memadai', 'Memadai', 'Memadai', 'Memadai', 'Memadai', 'Valmanway'),
('wewewr', 'Bangunan Permanen', 'Memadai', 'Memadai', 'Memadai', 'Memadai', 'Memadai', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `dataf`
--

CREATE TABLE IF NOT EXISTS `dataf` (
  `id` varchar(250) NOT NULL,
  `tim_p` varchar(40) NOT NULL,
  `j_poskes` varchar(250) NOT NULL,
  `t_poskes` varchar(250) NOT NULL,
  `lainnya` text NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataf`
--

INSERT INTO `dataf` (`id`, `tim_p`, `j_poskes`, `t_poskes`, `lainnya`, `user`) VALUES
('kurumi', 'Tidak Ada', '1', '3', 'kurumi kurumi', 'Valmanway'),
('rama', 'Ada', '11', '11', 'rama', 'Valmanway'),
('wewewr', 'Ada', '2', '2', 'asuna', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datag`
--

CREATE TABLE IF NOT EXISTS `datag` (
  `id` varchar(250) NOT NULL,
  `klb` text NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datag`
--

INSERT INTO `datag` (`id`, `klb`, `user`) VALUES
('kurumi', 'kurumi kurumi kurumi', 'Valmanway'),
('rama', 'rama', 'Valmanway'),
('wewewr', 'asuna', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datah`
--

CREATE TABLE IF NOT EXISTS `datah` (
  `id` varchar(250) NOT NULL,
  `obat` varchar(40) NOT NULL,
  `kaporit` varchar(40) NOT NULL,
  `pac` varchar(40) NOT NULL,
  `aquatab` varchar(40) NOT NULL,
  `p2pm` varchar(40) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datah`
--

INSERT INTO `datah` (`id`, `obat`, `kaporit`, `pac`, `aquatab`, `p2pm`, `user`) VALUES
('kurumi', 'Tidak Ada', 'Cukup', 'Tidak Ada', 'Cukup', 'Rusak', 'Valmanway'),
('rama', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Tidak Ada', 'Baik', 'Valmanway'),
('wewewr', 'Tidak Ada', 'Kurang', 'Kurang', 'Cukup', 'Baik', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datai`
--

CREATE TABLE IF NOT EXISTS `datai` (
  `id` varchar(250) NOT NULL,
  `k_bencana` varchar(40) NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datai`
--

INSERT INTO `datai` (`id`, `k_bencana`, `user`) VALUES
('kurumi', 'Berat', 'Valmanway'),
('rama', 'Ringan', 'Valmanway'),
('wewewr', 'Berat', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `dataj`
--

CREATE TABLE IF NOT EXISTS `dataj` (
  `id` varchar(250) NOT NULL,
  `bantuan` text NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataj`
--

INSERT INTO `dataj` (`id`, `bantuan`, `user`) VALUES
('kurumi', 'kurumi kurumi kurumi kurumi', 'Valmanway'),
('rama', 'rama', 'Valmanway'),
('wewewr', 'asuna', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `datak`
--

CREATE TABLE IF NOT EXISTS `datak` (
  `id` varchar(250) NOT NULL,
  `rencana` text NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datak`
--

INSERT INTO `datak` (`id`, `rencana`, `user`) VALUES
('kurumi', 'kurumi', 'Valmanway'),
('rama', 'rama', 'Valmanway'),
('wewewr', 'asuna', 'Valmanway');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `id_role`, `nama`, `alamat`, `no_telp`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Admin RHA', 'Indonesia', '082313821653', 'ramaringsuperenergy@gmail.com'),
('Valmanway', 'af6e5b3c9a1903d7ead649defeb9474b', 2, 'Valmanway', 'Indonesia', '089659950634', 'valmanway11@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
