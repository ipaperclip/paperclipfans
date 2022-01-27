# Vol.128 光盘里究竟有什么

这是一张过去的 CD，把它插入 CD 机，就能听到那时的爱情。

![Vol/Vol.128 光盘里究竟有什么/1.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/1.jpeg)

光盘是如何存储数据的？怎样提升光盘的容量？

光盘由无色透明的基板、记录层、纯银反射层、保护层、印刷层组成。

![Vol/Vol.128 光盘里究竟有什么/2.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/2.jpeg)

记录层的成分，是不同颜色的有机染料，可以使光盘表现出不同的颜色，而光盘的信息，都记录在这层有机染料上。

刻录机通过将激光束聚焦，可以永久性地在记录层以螺旋状轨迹由内而外刻上不同长度的坑，这些「凹坑」和原始的「平地」，就是数据。

![Vol/Vol.128 光盘里究竟有什么/3.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/3.jpeg)

在读取时，激光透过半反射棱镜，汇聚在物镜上。物镜将激光聚焦成为极其细小的光斑，照在光盘上，沿着螺旋轨迹前进。

光线被反射后，再次穿过物镜，通过半反射结构的棱镜反射，照在记录光信号的光电二极管上。

![Vol/Vol.128 光盘里究竟有什么/4.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/4.jpeg)

「凹坑」的深度为对应激光波长的四分之一。我们可以将照射在涂料上的激光看成两部分，在经过「凹坑」与「平地」的边缘时，其中一束光发生反射的位置变化，导致两束光重新汇合后，产生了半个波长的相位差。

![Vol/Vol.128 光盘里究竟有什么/5.png](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/5.png)

相位差，使得反射后汇聚的两束光振幅相互抵消，亮度变暗。当两束光回到同一水平面上反射，相位差为零，重新变亮。

这种在「凹坑」边缘发生的短暂变暗，会以信号强度跳变的形式被记录。这些跳变，就是光盘中二进制数据里的 1，而「凹坑」和「平地」，代表若干个连续的 0。

![Vol/Vol.128 光盘里究竟有什么/6.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/6.jpeg)

所以，只要用二进制码表达信息，再一一对应地刻在光盘上，就能记录数据吗？ 答案是不。

计算机常用的字符编码，一个字节包含 8 位二进制码，共有 256 种排列。但是，现有的技术不允许记录两个连续的 1。这是因为，1 只能出现在「凹坑」边缘，这就导致了两个 1 之间，必然有 0。

![Vol/Vol.128 光盘里究竟有什么/7.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/7.jpeg)

同时，持续读取 0 也会因为长距离的「凹坑」或「平地」而失去方向，导致光头出轨。受制于这些条件，可用的字符编码远远不足 256 个。 于是，数据在写入光盘之前，需要对编码进行调制。 常见的调制规则，是 EFM（八比十四调制 Eight-to-Fourteen Modulation），将 8 位编码空间扩展到 14 位，可以表示 16384 个编码。

![Vol/Vol.128 光盘里究竟有什么/8.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/8.jpeg)

接下来，规定 1 不能连续出现，连续的 0 只能有 2\~10 个。这样就能剔除掉一万多个不能使用的码。

剩下的 256 个可用的 14 位码可以和原有的 256 个 8 位码一一对应，使数据能顺利读取。

![Vol/Vol.128 光盘里究竟有什么/9.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/9.jpeg)

为了防止相邻编码的 1 首尾相接，每个编码结尾还要再加入 3 位「耦合码」，并在读取时忽略掉。

最终， 8 位字符编码变成了 17 位，刻在了光盘上。 另外，为了防止在读取过程中，盘面的划痕、指纹印导致读取错误。每 2048 字节的数据都需要附加一段 288 字节的校验码，可以用于校验并纠正数据产生的错误。

![Vol/Vol.128 光盘里究竟有什么/10.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/10.jpeg)

实现纠错的原理，就是我们在「二维码」这期节目中介绍的「里德-所罗门码」。

只读光盘，经过一次写入之后，数据就不能更改。而可擦写光盘，则采用如银铟锑碲合金和锗锑碲合金等相变材料作为记录层。

![Vol/Vol.128 光盘里究竟有什么/11.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/11.jpeg)

相变材料具有两种稳定状态：晶态和非晶态。

在写入时，射出高功率的射线，使相变材料的温度超过「相变温度」，被照射区域的相变材料由晶态变为非晶态。而用中等功率的激光产生的温度，则可以将非结晶的组织还原成晶态。

![Vol/Vol.128 光盘里究竟有什么/12.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/12.jpeg)

具有较高透光率的晶态相当于「平地」，较低透光率的非晶态则相当于「凹坑」。通过不同功率激光的切换，就能实现光盘数据的多次写入和擦除。

![Vol/Vol.128 光盘里究竟有什么/13.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/13.jpeg)

你的当代生活中已经很难见到光盘。

主要原因是光盘的容量太小了，为了在这张直径 12 cm 的塑料片上增大容量，首先要使用更小的坑道来记录信息。

为了读取更小的坑道，需要更短波长的光才能聚焦更小的光斑，单盘容量 25 GB 的蓝光光盘，通过使用波长 405 nm 的蓝紫色光，将物镜聚焦的光斑缩小到了 580 nm，已经接近光学极限。

![Vol/Vol.128 光盘里究竟有什么/14.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/14.jpeg)

其次，为了节约数据长度，蓝光采用的 17PP 调制码。相比八比十四调制，编码率从 47.06% 提升到了 66.67%。

另外，还可以在记录层上叠加记录层，只要改变激光的焦距，就能读取各层数据，目前常见的四层蓝光光盘将容量扩大到了 100 GB。

![Vol/Vol.128 光盘里究竟有什么/15.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/15.jpeg)

更大容量的只读光盘，只能在数据中心见到，以工业级蓝光光盘库为例，以 12 个 300 GB 只读蓝光光盘组成的盘匣为储存单位，可以在一个机柜中实现 1.92 PB 的数据存储。

![Vol/Vol.128 光盘里究竟有什么/16.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/16.jpeg)

光盘能让数据可靠存储超过 50 年，广泛应用于博物馆、科研单位等需要长期存储大量备份历史数据的机构。

只读光盘无法被篡改的特性决定了，数据被刻在这些塑料片上，即使过去半个世纪，只要它还能反光，就可以读取。

![Vol/Vol.128 光盘里究竟有什么/17.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.128%20光盘里究竟有什么/17.jpeg)

那些留在你记忆中的音乐、电影、游戏，会永远停在某个角落等你。

!!! note "该文件编辑日志"

	*	JUL 22, 2020.
		By [Zhao-Robert](https://github.com/Zhao-Robert)
	
			创建文件 & Markdown 格式化

	*	SEP 19, 2021.
		By [Just-Prog](https://github.com/Just-Prog)

			图片链修复
