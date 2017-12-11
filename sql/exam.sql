-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-02 03:45:32
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `admin_no` int(11) NOT NULL,
  `admin_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pwd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_no`, `admin_email`, `admin_pwd`) VALUES
(1, 'admin@qq.com', '123');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `recom_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `forum`
--

CREATE TABLE `forum` (
  `forum_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT '0' COMMENT '结帖状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `forum`
--

INSERT INTO `forum` (`forum_no`, `user_id`, `title`, `content`, `type`, `state`) VALUES
(1, 1, 'title', 'content', NULL, 0),
(2, 1, 'test', 'content', NULL, 0),
(3, 1, 'e', 'df', NULL, 0);

-- --------------------------------------------------------

--
-- 表的结构 `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `lev` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `levels`
--

INSERT INTO `levels` (`id`, `lev`) VALUES
(1, '容易'),
(2, '中等'),
(3, '高难度');

-- --------------------------------------------------------

--
-- 表的结构 `paper_info`
--

CREATE TABLE `paper_info` (
  `paper_no` int(11) NOT NULL,
  `paper_sub` int(11) NOT NULL,
  `paper_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `paper_info`
--

INSERT INTO `paper_info` (`paper_no`, `paper_sub`, `paper_name`) VALUES
(1, 1, '前端考卷1'),
(2, 2, '后台考卷1'),
(3, 1, '前端考卷2');

-- --------------------------------------------------------

--
-- 表的结构 `paper_manage`
--

CREATE TABLE `paper_manage` (
  `id` int(11) NOT NULL,
  `que_type` int(11) NOT NULL,
  `que_no` int(11) NOT NULL COMMENT '在题库中的题号',
  `paper_no` int(11) NOT NULL,
  `all_no` int(11) NOT NULL COMMENT '在试卷中的题号'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `paper_manage`
--

INSERT INTO `paper_manage` (`id`, `que_type`, `que_no`, `paper_no`, `all_no`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 2),
(3, 1, 3, 2, 1),
(4, 1, 1, 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `single_question`
--

CREATE TABLE `single_question` (
  `questionno` int(11) NOT NULL COMMENT '试题编号',
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT '考试科目',
  `a_option` text COLLATE utf8_unicode_ci NOT NULL COMMENT '选项内容1',
  `b_option` text COLLATE utf8_unicode_ci NOT NULL COMMENT '选项内容2',
  `c_option` text COLLATE utf8_unicode_ci NOT NULL COMMENT '选项内容3',
  `d_option` text COLLATE utf8_unicode_ci NOT NULL COMMENT '选项内容4',
  `answer` text COLLATE utf8_unicode_ci NOT NULL COMMENT '答案',
  `mark` int(11) NOT NULL,
  `analyse` text COLLATE utf8_unicode_ci NOT NULL,
  `level` int(10) NOT NULL COMMENT '难易度'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `single_question`
--

INSERT INTO `single_question` (`questionno`, `content`, `a_option`, `b_option`, `c_option`, `d_option`, `answer`, `mark`, `analyse`, `level`) VALUES
(1, 'Web 标准的制定者是？', '微软（Microsoft）', '万维网联盟（W3C）', '苹果公司（Apple）', '谷歌公司（Google）', 'B', 2, 'Web 标准的制定者是w3c', 1),
(2, '前端题2', 'a', 'b', 'c', 'd', 'D', 2, '解析', 2),
(3, '后台题1', '1', '2', '3', '4', 'C', 2, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `subjects`
--

CREATE TABLE `subjects` (
  `sub_no` int(11) NOT NULL,
  `subject` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `subjects`
--

INSERT INTO `subjects` (`sub_no`, `subject`) VALUES
(1, '前端'),
(2, '后台');

-- --------------------------------------------------------

--
-- 表的结构 `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `ty` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `types`
--

INSERT INTO `types` (`id`, `ty`) VALUES
(1, '单选题'),
(2, '多选题'),
(3, '判断题'),
(4, '填空题'),
(5, '简答题'),
(6, '编程题'),
(7, '综合题');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) DEFAULT '../../../../LaravelExam/public/images/user_default.jpg',
  `sex` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `statu` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `img`, `sex`, `job`, `statu`) VALUES
(1, '1252107636@qq.com', '123456', 'Anny', '../../../../LaravelExam/public/images/user_default.jpg', '女', '后台', 1);

-- --------------------------------------------------------

--
-- 表的结构 `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(11) NOT NULL,
  `user_no` int(11) NOT NULL,
  `paper_no` int(11) NOT NULL,
  `que_no` int(11) NOT NULL,
  `my_ans` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `que_mark` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `user_answer`
--

INSERT INTO `user_answer` (`id`, `user_no`, `paper_no`, `que_no`, `my_ans`, `que_mark`) VALUES
(1, 1, 3, 1, 'B', 2);

-- --------------------------------------------------------

--
-- 表的结构 `user_paper`
--

CREATE TABLE `user_paper` (
  `no` int(11) NOT NULL,
  `user_no` int(11) NOT NULL,
  `paper_no` int(11) NOT NULL,
  `mark` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `user_paper`
--

INSERT INTO `user_paper` (`no`, `user_no`, `paper_no`, `mark`) VALUES
(1, 1, 3, 2);

-- --------------------------------------------------------

--
-- 表的结构 `ynquestion`
--

CREATE TABLE `ynquestion` (
  `questionno` int(11) NOT NULL COMMENT '试题编号',
  `subject` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '考试科目',
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '试题内容',
  `answer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '正确答案',
  `analyse` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `ynquestion`
--

INSERT INTO `ynquestion` (`questionno`, `subject`, `question`, `answer`, `analyse`, `level`) VALUES
(1, '1', '我们在HTML页面中制作了一个图像，想要在鼠标指向这个图像时浮出一条提示信息，应该使用pop参数', ' 错误。', '分析', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_no`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_no`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_info`
--
ALTER TABLE `paper_info`
  ADD PRIMARY KEY (`paper_no`),
  ADD KEY `paper_sub` (`paper_sub`);

--
-- Indexes for table `paper_manage`
--
ALTER TABLE `paper_manage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `que_sub` (`que_type`),
  ADD KEY `paper_no` (`paper_no`);

--
-- Indexes for table `single_question`
--
ALTER TABLE `single_question`
  ADD PRIMARY KEY (`questionno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_no`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_paper`
--
ALTER TABLE `user_paper`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ynquestion`
--
ALTER TABLE `ynquestion`
  ADD PRIMARY KEY (`questionno`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `paper_info`
--
ALTER TABLE `paper_info`
  MODIFY `paper_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `paper_manage`
--
ALTER TABLE `paper_manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `single_question`
--
ALTER TABLE `single_question`
  MODIFY `questionno` int(11) NOT NULL AUTO_INCREMENT COMMENT '试题编号', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `user_paper`
--
ALTER TABLE `user_paper`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `ynquestion`
--
ALTER TABLE `ynquestion`
  MODIFY `questionno` int(11) NOT NULL AUTO_INCREMENT COMMENT '试题编号', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
