-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-21 15:34:46
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shetuan`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) DEFAULT NULL,
  `admin_pwd` varchar(50) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pwd`, `admin_email`) VALUES
(1, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- 表的结构 `bbs`
--

CREATE TABLE IF NOT EXISTS `bbs` (
  `bbs_id` int(11) NOT NULL AUTO_INCREMENT,
  `bbs_top` varchar(50) DEFAULT NULL,
  `bbs_content` longtext,
  `bbs_date` date DEFAULT NULL,
  `bbs_writer` varchar(50) DEFAULT NULL,
  `bbs_toid` int(11) DEFAULT '0',
  `bbs_jb` int(11) DEFAULT NULL,
  PRIMARY KEY (`bbs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=79 ;

--
-- 转存表中的数据 `bbs`
--

INSERT INTO `bbs` (`bbs_id`, `bbs_top`, `bbs_content`, `bbs_date`, `bbs_writer`, `bbs_toid`, `bbs_jb`) VALUES
(64, '「百团纳新，总有一款适合你」', '', '2017-11-24', 'cf', 0, 1),
(65, '@TEDxFZU', '你这么good，不来这里发光发热简直没道理！\r\nTEDxFZU2018招募开始啦！\r\n请戳链接了解更多详情&#127995;O网页链接\r\n或者直接扫码报名，加入我们！', '2017-11-24', '张明', 0, 0),
(66, '跆拳道协会介绍', '', '2017-11-25', '张明', 0, 0),
(67, NULL, '我想加入', '2017-11-25', '张明', 65, NULL),
(69, '快来参加最近摄影活动', '', '2017-11-25', '张明', 0, 0),
(70, NULL, '尽快报名', '2017-11-25', '张明', 69, NULL),
(72, '校园推理电影《推理笔记》', '校园推理电影《推理笔记》\r\n陈都灵&林柏宏&汪铎上演烧脑大戏[来][来]\r\n11月19日中午12:00（需提前半小时入场）\r\n福州大学图书馆博学厅\r\n《推理笔记》点映及主创见面会 与你一同开启头脑风暴', '2017-11-25', '', 0, 1),
(73, '福州大学校迎新晚会', '迎新晚会马上开始啦！\r\n位子太靠后看不清？[偷乐]有事来不了？[草泥马]线上线下都想看？社联直播来帮你！\r\n我们用最齐全的设备，用最真诚的态度，许你一场晚会的狂热[爱你]', '2017-11-25', '', 0, 1),
(75, '社团群号汇总', '社联活动部小伙伴，或在此楼底下回复新生群号】\r\n\r\n各社团新生交流群号：\r\n【科技类】\r\n电子竞技协会：69047077\r\n机械电子科技创新协会：470334643\r\n天文学会：274349378\r\n机器人爱好者协会：248571817\r\n微博协会：489570288\r\n\r\n【学术类】\r\n钟声文学社：341919551\r\n社会调查协会：578460707\r\n英语口语协会：175396206\r\n云起书友协会：158611685\r\n丑石听潮书画社：578900630\r\n辩论与口才协会：512099233\r\n探海读书社：292219204\r\n流通协会：550271240\r\n物理爱好者协会：479166327\r\n化学爱好者：347165581\r\n粤文化协会：579051991\r\n非物质文化遗产保护协会：188065854\r\n安全文化协会（预）：457388719\r\n海洋文化协会（预）：426477596\r\n逸咖协会（预）：575334083\r\n水利水能创新协会（预）：530121822\r\n食品营养与安全协会（预）：560759201\r\n\r\n【公益类】\r\n绿色联盟：469703731\r\n学生职业发展协会：538467430\r\nEnactus协会：80122842\r\n新长城自强社（预）：247563324\r\n起床协会（预）：119185812\r\n\r\n【艺术类】\r\n团子动漫社：477569388\r\n梦圆六弦吉他协会：100926877\r\n陶艺欣赏与制作协会：578263059\r\n飞扬国标舞协会：567093055\r\n赖生剧团：181848044\r\n雅逸花卉协会：562652747\r\n摇滚协会：486037503\r\n酷玩协会：337023547 570471760\r\n美食协会：233977936\r\n知音民乐社：560627926\r\nDV协会：557078932\r\n雅居论道茶社：128426230\r\nDBL街舞协会：474352480\r\n电影协会：497313381\r\n熙缇美妆协会：495258397\r\n棠棣汉服协会：250131081\r\n\r\n【体育类】\r\n跆拳道协会：578704342\r\n乒乓球协会：515608536\r\n纵横棋社：480788676\r\n自行车协会：398049273\r\n桥牌协会：53092062\r\n散打俱乐部：531856861\r\n魔方协会：332529939\r\n舞动绳彩跳绳协会：291627495\r\n排球协会：225910382\r\n剑道协会（预）：485714172\r\n空手道协会（预）：427920031\r\nLYF悠悠球协会（预）：316258196\r\n\r\n【经济类】\r\n四海营销协会：578599918\r\nKAB创业俱乐部：553572201\r\n企业经营模拟沙盘协会：578240507\r\n房地产协会：564139447\r\n项目化管理协会：543885822\r\n见习协会：577817226\r\n\r\n【思想类】\r\n海西发展研究会：181848044\r\n思涌践行社：575636495\r\n旗山惟廉社：579166958\r\n航模协会（预）：555274249', '2017-11-25', '', 0, 1),
(76, '常见问题回答', '关于社团的新生常问问题：\r\nQ1 社团什么时候可以报名参加？\r\n——社联在开学初会举办全校性的百团纳新，大约在每年的9月中下旬或10月中上旬。\r\n大家可以到相关的社团帐篷填表参加。\r\n\r\nQ2 参加社团有什么条件吗？\r\n——加入社团是无门槛的，大部分社团会收取会费，作为之后社团的活动经费。\r\n有部分社团内有会员和部员之分，如沙盘，职协等等，部员需要面试，会员不用。\r\n\r\nQ3 参加社团个数有限制吗？\r\n——没有限制。只要自己喜欢都可以参加。\r\n\r\nQ4 参加社团会忙吗？\r\n——有的社团活动比较多可能就会忙一点，忙不忙主要看自己的安排，\r\n付出和回报总是成正比的嘛～\r\n\r\nQ5 参加社团还能参加别的部门吗？\r\n——可以。社团是兴趣爱好，部门是学生工作，两者不冲突，可以都加。\r\n\r\n小鲜肉们对社团还有什么想问的都可以问哦～\r\n', '2017-11-25', '', 0, 1),
(77, '福大计算机大赛', '快来参加吧', '2017-12-21', 'zm1', 0, 0),
(78, '福州大学军训演练', '福州大学军训演练开始啦', '2017-12-21', 'zm2', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hydsh`
--

CREATE TABLE IF NOT EXISTS `hydsh` (
  `hy_id` int(11) NOT NULL AUTO_INCREMENT,
  `hy_name` varchar(50) DEFAULT NULL,
  `hy_sex` varchar(50) DEFAULT NULL,
  `hy_phone` varchar(50) DEFAULT NULL,
  `hy_address` varchar(50) DEFAULT NULL,
  `hy_zy` varchar(50) DEFAULT NULL,
  `hy_date` date DEFAULT NULL,
  `hy_birthday` date DEFAULT NULL,
  `hy_jl` longtext,
  `hy_number` varchar(50) DEFAULT NULL,
  `hy_nch` varchar(50) DEFAULT NULL,
  `hy_pwd` varchar(50) DEFAULT NULL,
  `hy_zhw` varchar(50) DEFAULT '待审',
  `hy_st` longtext,
  `hy_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`hy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `hydsh`
--

INSERT INTO `hydsh` (`hy_id`, `hy_name`, `hy_sex`, `hy_phone`, `hy_address`, `hy_zy`, `hy_date`, `hy_birthday`, `hy_jl`, `hy_number`, `hy_nch`, `hy_pwd`, `hy_zhw`, `hy_st`, `hy_email`) VALUES
(14, '岳', 'boy ', '15899129768', '120', '计算机学院', '2011-04-08', '1988-02-17', '跑步，读史', '113', 'yue', '111222', '待审', '', 'xcdysw2007@163.com'),
(15, '叶鹏', 'boy ', '15697864653', '111', '计算机学院', '2011-04-08', '1988-01-01', '游戏', '114', 'yp', '111222', '待审', ',', 'xcd@126.com'),
(17, '王兵峰', 'boy ', '15678963587', '114', '数学学院', '2011-04-08', '1988-03-14', '无', '115', 'wbf', '111222', '待审', ',', 'xcd@126.com'),
(18, '王雨箬', 'boy ', '15566986245', '710', '数学学院', '2011-04-08', '1990-02-17', '无', '111', 'wyr', '111222', '待审', ',', 'xcd1@163.com'),
(19, '邹游', 'boy ', '16332147896', '711', '数学学院', '2011-04-08', NULL, '无', '117', 'zy', '111222', '待审', ',', 'xcd2@163.com'),
(22, '周菲', 'girl', '13216547896', '714', '英语学院', '2011-04-08', '1988-03-26', '无', '118', 'zf', '111222', '待审', ',', 'xcd5@163.com'),
(23, '赵晓红', 'girl', '15698734567', '716', '英语学院', '2011-04-08', '1989-04-16', '听音乐', '119', 'zxh', '111222', '待审', ',社团管理中心', 'xcdys@163.com'),
(24, '林志玲', 'girl', '15899129768', '718', '外国语学院', '2011-04-08', '1986-03-16', '逛街，购物。', '121', 'lzl', '111222', '待审', ',', 'xcdysw2007@163.com'),
(25, '唐一菲', 'girl', '1598634987', '724', '财务管理', '2011-04-08', '1990-01-16', '无', '123', 'tyf', '111222', '待审', ',社团管理中心', 'xcd5@163.com'),
(26, '李静', 'boy ', '3156378790', '131', '国际贸易学院', '2011-04-08', '1992-03-12', '无', '125', 'lj', '111222', '待审', ',社团管理中心', 'xcdy1@126.com'),
(27, '王晓璐', 'girl', '44546797953', '730', '会计学院', '2011-04-08', '1993-02-18', '无', '126', 'wxl', '111222', '待审', ',社团管理中心', 'xcdy2@126.com'),
(28, '兰繇', 'boy ', '46454687', '136', '经济系', '2011-04-08', '1968-03-16', '无', '128', 'lz', '111222', '待审', ',', '112@67.com'),
(33, '张明', 'boy ', '13107615657', '30号楼', '数计学院计算机专业一班', '0000-00-00', '1995-10-21', '爱好运动，辩论', '031402129', 'zm', '111222', '待审', ',福州大学演讲协会', 'zm2100@126.com'),
(34, '小明', 'boy ', '13107615657', '30号楼', '数计学院计算机专业一班', '0000-00-00', '1995-10-21', '热爱新鲜美好事物', '031402129', 'za', '111222', '已审', ',福大摄影协会,福大吉他协会', 'zm2100@126.com'),
(35, 'zm1', 'boy ', '13155553333', '211', '121', NULL, '1983-08-17', '爱好篮球', '212', 'zm1', '111222', '待审', ',福大摄影协会', 'zm2100@163.com'),
(36, 'zm2', 'boy ', '13107615657', '30号楼', '数计学院计算机专业一班', NULL, '1995-10-21', '爱好一切', '12', 'zm2', '111222', '已审', ',福大摄影协会,福大吉他协会', 'zm2100@126.com');

-- --------------------------------------------------------

--
-- 表的结构 `hyinfor`
--

CREATE TABLE IF NOT EXISTS `hyinfor` (
  `hy_id` int(11) NOT NULL AUTO_INCREMENT,
  `hy_name` varchar(50) DEFAULT NULL,
  `hy_sex` varchar(50) DEFAULT NULL,
  `hy_phone` varchar(50) DEFAULT NULL,
  `hy_address` varchar(50) DEFAULT NULL,
  `hy_zy` varchar(50) DEFAULT NULL,
  `hy_date` date DEFAULT NULL,
  `hy_birthday` date DEFAULT NULL,
  `hy_jl` longtext,
  `hy_number` varchar(50) DEFAULT NULL,
  `hy_nch` varchar(50) DEFAULT NULL,
  `hy_pwd` varchar(50) DEFAULT NULL,
  `hy_zhw` varchar(50) DEFAULT NULL,
  `hy_st` longtext,
  `hy_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`hy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `hyinfor`
--

INSERT INTO `hyinfor` (`hy_id`, `hy_name`, `hy_sex`, `hy_phone`, `hy_address`, `hy_zy`, `hy_date`, `hy_birthday`, `hy_jl`, `hy_number`, `hy_nch`, `hy_pwd`, `hy_zhw`, `hy_st`, `hy_email`) VALUES
(8, '邹游', 'boy ', '16332147896', '711', '数学学院', '2011-04-08', NULL, '无', '133', 'zy', '111222', '正式会员', '社团管理中心', 'xcd2@163.com'),
(9, '王雨', 'boy ', '15566986245', '710', '统计信息学院', '2011-04-08', '1990-02-17', '无', '135', 'wyr', '111222', '正式会员', '社团管理中心', 'xcd1@163.com'),
(10, '周菲', 'girl', '13216547896', '714', '英语学院', '2011-04-08', '1988-03-26', '无', '136', 'zf', '111222', '正式会员', '社团管理中心', 'xcd5@163.com'),
(14, '小明', 'boy ', '13107615657', '30号楼', '数计学院计算机专业一班', '2017-12-21', NULL, '热爱新鲜美好事物', '031402129', 'za', '111222', NULL, '福大吉他协会', 'zm2100@126.com'),
(15, 'zm2', 'boy ', '13107615657', '30号楼', '数计学院计算机专业一班', '2017-12-21', NULL, '爱好一切', '12', 'zm2', '111222', NULL, '福大吉他协会', 'zm2100@126.com');

-- --------------------------------------------------------

--
-- 表的结构 `stinfor`
--

CREATE TABLE IF NOT EXISTS `stinfor` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(50) DEFAULT NULL,
  `st_jj` longtext,
  `st_date` date DEFAULT NULL,
  `st_state` int(11) DEFAULT NULL,
  `st_zhy` varchar(50) DEFAULT NULL,
  `st_phone` varchar(50) DEFAULT NULL,
  `st_ren` varchar(50) DEFAULT NULL,
  `st_address` varchar(50) DEFAULT NULL,
  `st_sex` varchar(50) DEFAULT NULL,
  `st_email` varchar(50) DEFAULT NULL,
  `st_pwd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `stinfor`
--

INSERT INTO `stinfor` (`st_id`, `st_name`, `st_jj`, `st_date`, `st_state`, `st_zhy`, `st_phone`, `st_ren`, `st_address`, `st_sex`, `st_email`, `st_pwd`) VALUES
(20, '福州大学演讲协会', '福州大学演讲协会', '2017-11-24', 1, '计算机', '1212', '张一', '1212', 'boy ', '1212', '111222'),
(23, '福大摄影协会', '福大摄影协会', '2017-11-25', 1, '数计学院计算机', '13107615657', '张明', '30', 'boy ', 'zm2100@126.com', '111222'),
(29, '辩论与口才协会', '辩论与口才协会', '2017-11-25', 1, '数计学院计算机', '13107615657', '张二', '30', 'boy ', 'zm2100@126.com', '111222'),
(30, '福大吉他协会', '福大吉他协会', '2017-12-21', 1, '数计学院计算机', '13107615657', 'zm1', '30', 'boy ', 'zm2100@126.com', '111222'),
(31, '福大跑步协会', '福大跑步协会', '2017-12-21', 1, '数计学院计算机', '13107615657', 'zm2', '30', 'boy ', 'zm2100@126.com', '111222');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
