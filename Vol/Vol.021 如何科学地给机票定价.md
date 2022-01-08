
![Vol/Vol.021 如何科学地给机票定价/1.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/1.gif)

# Vol.021 如何科学地给机票定价

搜索北京出发至上海的机票，从 636 元的折扣票到 5170 元的头等舱，你有各种价位可以选择。但实际上，经济舱的全价票只有两个价格，1360 元和 1240 元。

![Vol/Vol.021 如何科学地给机票定价/2.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/2.gif)

这个价格是怎么定出来的？什么时候才能买到便宜机票？

1950 年 8 月 1 日，中国建国后的第一条民用航线从天津起飞，经过北京、汉口，降落在广州，票价 388 元，是当时中国人均 GDP 的 3 倍。

![Vol/Vol.021 如何科学地给机票定价/3.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/3.gif)

可以想象，即使提供茅台供乘客饮用，也不会有平民用几年的收入坐一次飞机。但作为计划经济的一部分，机票该卖多少钱当然由中国民用航空局说了算。

这种情况持续到 1992 年，各航空公司可以在官方票价的基础上，有上下浮动 10% 的定价空间。直到 2004 年，航空公司才终于有了部分机票定价权。

![Vol/Vol.021 如何科学地给机票定价/4.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/4.gif)

这两份文件，可以帮助我们理解今天中国机票的定价逻辑。

![Vol/Vol.021 如何科学地给机票定价/5.png](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/5.png)

这是民航局 2004 年发布的《民航国内航空运输价格改革方案》。确定了每公里 0.75 元的经济舱基准票价，以及航空公司上浮不超过 25%，下浮不限的定价空间。

![Vol/Vol.021 如何科学地给机票定价/6.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/6.gif)

这是民航局 2014 年发布的《进一步完善民航国内航空运输价格政策有关问题的通知》，对基准票价的计算公式做了更新：

普通航线旅客运输基准票价=

LOG(150,航线距离×0.6)×航线距离×1.1

\*航线距离×0.6是底数，150是真数。

对数函数的引入可以有效的反映航空运输的边际成本递减，这意味着航线距离越长，每公里的单价就越低。

![Vol/Vol.021 如何科学地给机票定价/7.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/7.gif)

这个票价算法沿用至今。以北京到上海的机票为例：把航线距离 1181 千米，带入公式，再上浮 25%，就是各家航空公司在京沪航线的经济舱全价票价格——1240 元。

![Vol/Vol.021 如何科学地给机票定价/8.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/8.gif)

有了全价票的定价，就能确定不同的舱位的票价。这里说的舱位，并不仅仅是头等舱，经济舱这种物理舱位，而是能区分票价的销售舱位。

如果你仔细看过登机牌，就会发现除了航班、姓名以外，还有一栏叫舱位，后面有一个字母。这个字母就是舱位代码，对应着不同的机票折扣。

![Vol/Vol.021 如何科学地给机票定价/9.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/9.gif)

各家航空公司对舱位划分相当细致，以至于 26 个英文字母的每一个都有对应的舱位。以山东航空为例，经济舱全价票是 Y 舱，9 折是 B 舱，85 折是 M 舱，8 折是 H 舱。从 9 折到 4 折，每 5 个点的折扣都对应着一个舱位。

![Vol/Vol.021 如何科学地给机票定价/10.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/10.gif)

不同的舱位也对应着不同的权益，我们找到了山东航空2017年的《国内多等级舱位销售管理规定》，26个舱位在订座、退票的权益都有不同。

![Vol/Vol.021 如何科学地给机票定价/11.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/11.gif)

这种固定座位的分配问题，被称为「存量分配」。决策者面对不同类型的乘客，需要制定不同的价格，实现收益最大化。

目前业界最常用的模型是1987 年麻省理工的 Belobaba 在其博士论文中提出的期望边际座位收入( Expected Marginal Seat Revenue) ，简称 EMSR。

![Vol/Vol.021 如何科学地给机票定价/12.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/12.gif)

为了让你进一步理解 EMSR 算法，我们来举个例子。

假设有这么一趟航班，一共有 100 个座位，分为 3 个不同的销售舱位。其中 Y 舱售价1000 元，B 舱售价 900 元，H 舱售价 800 元。

![Vol/Vol.021 如何科学地给机票定价/13.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/13.gif)

最早卖出的肯定是便宜的 H 舱，然后是 B 舱，最后是 Y 舱。

根据历史数据，我们可以画出一条 Y 舱销售概率的曲线，随着邻近起飞，剩余座位越来越少，Y舱被卖掉的概率就越来越高。

![Vol/Vol.021 如何科学地给机票定价/14.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/14.gif)

此时销售Y舱的期望收益就是 Y 舱的价格乘此时卖掉的概率。

那么，究竟应该什么时候开始卖最贵的 Y 舱呢？

我们先假设 100 个座位都以 B 舱价格卖出，图中的阴影面积是航班的总收益。留出一些座位，以Y 舱价格卖出，会增加总收益，而留出的 Y 舱过多，也会带来亏损。

![Vol/Vol.021 如何科学地给机票定价/15.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/15.gif)

而当卖出 Y 舱的期望收益等于 B 舱的价格——900元时，才能得到最大的阴影面积此时，就是卖出Y舱的最佳时机。

带入曲线中，对应的剩余座位是10个，这就是Y舱的保护座位数量。

![Vol/Vol.021 如何科学地给机票定价/16.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/16.gif)

以此类推，可以算出 B 舱的保护座位。最后剩下的，就是最便宜的 H 舱可以卖出的座位。

当然，航空公司也有出现失误的时候，如果邻近起飞还有不少空位，为了保证上座率，航空公司也会放出低价票，减少损失。

![Vol/Vol.021 如何科学地给机票定价/17.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/17.gif)

需要注意的是，实际情况要比我们举的例子复杂的多，感兴趣的观众可以在公众号回复「机票」，获取更多相关论文。

另外，04 年的改革方案也提出了一个新的概念：市场调节航线。

![Vol/Vol.021 如何科学地给机票定价/18.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/18.gif)

在民航局的早期定义中，与地面交通方式形成竞争的短途航线将被列入市场调节航线，航空公司可以自主定价。

但从 2018 年 1 月开始开始，只要有 5 家航空公司参与运营的国内航线，都将实施市场调节价，每个航季可以上调不超过 10% 的票价。这意味着，京沪互飞航线终于可以涨价了。

![Vol/Vol.021 如何科学地给机票定价/19.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.021%20如何科学地给机票定价/19.gif)
