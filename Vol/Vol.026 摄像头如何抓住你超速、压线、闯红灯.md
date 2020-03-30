# Vol.026 摄像头如何抓住你超速、压线、闯红灯

2017 年，深圳市查处了限行、超速、压线、违停等 601 万宗交通违章。 除了交警现场执法，还有 110 多万宗违章来自电子警察。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QYD2aEKYmyudZ3lNNpSsCCCmfJqgm8aP8N1HN6gSd8QhjMJxTAAyYoA.gif)

在主干路的路口，你通常可以看到一整排密密麻麻的摄像头。除了监控摄像头，剩下的，就是电子警察摄像头。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QEmQ40u4359MNIZsJhkLQcfgt4p9A294xibxxxQV0DNwpP180L6wGL8A.gif)

监测交通违章的第一步，是让摄像头意识到汽车的存在，即区分车辆和背景。

识别移动物体的核心在于检测像素点的数值突变，但影子同样会改变像素点数值，给识别车辆造成干扰。于是，各类算法要解决的关键问题，是排除影子的影响。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QPTyILmia5RvdAtKXyr9YpAHqmnVicryaedayyibbsIWlz0Bk1BBex3eQQ.gif)

以STR(空时置信关系)算法为例，影子只会等量地改变像素点的亮度。利用这个差别，STR 算法可以把每个像素点与周围像素点比较。如果该像素点与周围像素点的变化同步，即认为该像素点是影子。进而与车辆区分。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QLJmsbrN1ejoxf8aFCGh5gy1ibicyd4Qib6eJiczBqoN7XGYdB1AIxZsOBA.gif)

STR 算法在白天的车辆检测率可达 99%，夜间可达 95%。

检测到车辆后，电子警察需要在触发线的帮助下，判断车辆是否出现闯红灯，违规变道、逆行，压线等违章行为。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QMw35HAgekrM7bcMcic1oLOicsMapqr3HTDlyllOE3g0uPsGxVOticNM1A.gif)

你在马路上看到的各类白色黄色的车道线，停车线，都会成为电子警察划分不同区域的触发线。

以闯红灯为例，车辆进入检测区域后，电子警察会先识别车牌。如果在红灯期间，车辆离开触发线1，电子警察会采集第二张闯红灯图片，保存时间地点等路况信息。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5Q97ntswrPwz3ial6DaaklRlHyTZ5bfG4oOhGdrRTSNTib4JkxonGUjYXg.gif)

如果此时车辆停止，系统就会判定越线停车，扣2分，而如果车辆离开触发线2，电子警察就会采集第三张图片，并判断为闯红灯，扣6分。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QSbnyN5IqdeGP3cReEL5wcgdaibHqvEDrYSTkCdbc8ZPnrNXbQibcfaUA.gif)

除了闯红灯图片，还要把车辆在通过其他卡口的抓拍图像汇集到终端主机。

通过识别车牌，可以把同一车辆的闯红灯图片，卡口图片和人脸特写做匹配合成，形成完整的包含车辆头部、尾部画面的合成图片。确保可以处罚违章者本人，而不被代扣分。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5Qtj7YT1FYnqoht9PZ1lJmd0XYbl5ufmSGlISjCFr0XsfzhNYhrjIFCA.gif)

摄像头可以处理大多数违章事件，但监测超速还需要地感线圈和测速雷达的辅助。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QhFF3M1tXnTvmLyTl4ML8SV74SJ2VPL58fSqkjd2ch4bvvYXMkrzWSg.gif)

在地面上挖出沟槽，再在这个沟槽中埋入几匝导线，这就构成了一个地感线圈。将线圈接入震荡电路，就可以检测汽车经过时振荡频率的变化。记录汽车通过两个线圈的时间差，即可算出汽车平均速度。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QOUJXuXqj20NvyoicZcxRc5tuh41byTYjjPCxX9jGYdk9Y9MB5abUticA.gif)

测速雷达的原理是多普勒效应。向行进中的车辆发射超声波，同时测量反射波的频率，再与发射波的频率比较便可计算出车辆的移动速度。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5Q8XXFNWxaRSTg92Cl3bZjmoObnf9I6WiblfF01XTGFu4T6NVDMXvd7BA.gif)

这些违章数据都会传输到所属交警队的数据中心，经历一次人工核对，再被标记为违法信息。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5QhkIpZxJ1hBkxG7G5cnvzvzFKPmlZcPGpKqgGLDSMQDDagebmn0zfOw.gif)

除此以外，电子警察系统还需要解决照明、传输、存储、软件等一系列问题，我们找到了广州公安黄埔分局 2016-2017 年的电子警察系统招标文件，如果你想了解更多，你可以在我们的微信公众号发送「违章」，获取这份文件。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5Q64zvlYG6ytsjRHWk9GhUJDAYibDqBicE47Piaea5HLc5N6doRNRJSEFow.gif)

在可预见的未来，算法和硬件的进步将进一步提升电子警察的能力，你在车里的一举一动都不会被错过。

2017 年 4 月 ，苏州市上线了名为海燕的车辆二次分析系统，可以对摄像头抓拍的图片进行二次识别。

上线九天，海燕就抓拍到了近 3000 起违章，其中不系安全带 1828 起，开车玩手机 1074 起。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaZP2e4EBWWoHibS6ue18LW5Q1LB8DyyM7ricrUo8cenO5OjqpKokianThiaT2Jib9RWJQQqmYuJQbHYYYw.gif)

!!! note "该文件编辑日志"

	* 	Mar 29, 2020.
		By [parozhao](https://github.com/parozhao)
	
			创建文件 & Markdown 格式化
