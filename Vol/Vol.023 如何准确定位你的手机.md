
![Vol/Vol.023 如何准确定位你的手机/1.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/1.gif)

# Vol.023 如何准确定位你的手机

只需 200 块，你就可以在淘宝上买到一枚硬币大小的 GPS 跟踪器，插入附赠的 SIM 卡，你就可以轻松监控它的实时位置。如果有需要，还可以录音。

![Vol/Vol.023 如何准确定位你的手机/2.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/2.gif)

实际上，今天所有人都随身携带这样一枚 GPS 跟踪器 ，就是我们的手机。

GPS 是美国国防部在上世纪 70 年代启动的全球定位计划。

发射在 6 个轨道平面的 24 颗卫星，可以保证在地球的任何地点都可以至少收到其中 4 颗的信息。而通过卫星位置、接收时间和时间差，可以在空间中画出至少三个球面，收取信号的位置就在球面的交汇点上。

![Vol/Vol.023 如何准确定位你的手机/3.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/3.gif)

2000 年，美国时任总统克林顿宣布撤销对民用 GPS 信号的干扰，使其误差可以控制在10米左右。开启了 GPS 的民用时代。

![Vol/Vol.023 如何准确定位你的手机/4.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/4.gif)

今天，所有智能手机的 CPU 芯片都集成了 GPS 功能。

基于 GPS 的定位方案已经相当成熟，只需要捕获信号的和基带芯片和转换信号的射频芯片，就可以组装一个物美价廉的 GPS 模块。

![Vol/Vol.023 如何准确定位你的手机/5.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/5.gif)

但要在手机上使用地图定位，首先需要解决的，是中国官方对地图的加密。

根据中国国家测绘局制定的《导航电子地图安全处理技术基本要求》，在中国发行电子地图，必须先交给测绘局做「空间位置技术处理」。

![Vol/Vol.023 如何准确定位你的手机/6.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/6.gif)

这种加密处理其实是一种半公开算法，可以让全球通用的标准坐标系统（WGS-84）变为中国的自定义坐标系统（GCJ-02）。这两个坐标系统存在偏差，也就是说，如果你用 GPS 直接在中国地图上定位，会偏移上百米。

![Vol/Vol.023 如何准确定位你的手机/7.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/7.gif)

解决这一问题的方法是让 GPS 数据也同样经历一次加密，这样，偏移的 GPS 定位就和偏移的地图对上了。

![Vol/Vol.023 如何准确定位你的手机/8.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/8.gif)

即便解决了地图的问题，在高层建筑密布的城市里，GPS 仍然会经常出现严重漂移。

这种环境在业内称为城市峡谷，卫星信号在玻璃建筑垂直光滑的表面发生反射，再被手机接收。于是，设备将错误计算信号的传播时间，进而得出错误的位置结论，产生近百米的误差。

![Vol/Vol.023 如何准确定位你的手机/9.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/9.gif)

除了城市峡谷，隧道，高架等复杂场景也会导致GPS 失效。这对于 UBER 和滴滴这类需要实时计价的打车类应用尤其致命，各类解决方案也被研发出来。

通过在 3D 地图上模拟射线追踪的方式，UBER 试图计算每一个位置的 GPS 信号强度，进而建立概率模型，推算出更精确的乘客位置。

![Vol/Vol.023 如何准确定位你的手机/10.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/10.gif)

而滴滴使用的 FLP（Fusion Location Provider）方案，则采用了更多定位手段。通过网络定位，路网定位和车辆航位推算，FLP 方案可以在复杂场景下弥补 GPS 的缺陷，提高定位精确度。

![Vol/Vol.023 如何准确定位你的手机/11.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/11.gif)

基于 Wi-Fi 的网络定位服务 (Geo-Rank) ，是除 GPS 外最常用的定位手段。

打开你的手机 Wi-Fi ，每一个能被搜索到的热点，都有全球唯一的 MAC 地址。而每一个位置，都有不同数量，不同信号强弱的 Wi-Fi 。这些数据的集合，就能成为这个位置独一无二的信息。

![Vol/Vol.023 如何准确定位你的手机/12.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/12.gif)

这些信息可以帮助滴滴将定位问题转化为机器学习算法排序问题。

每天，滴滴的上千万用户将共同完善这个由 MAC 地址和 GPS 位置构成的热点数据库。同时，滴滴也能记录手机的信号强度、速度和方向，进一步优化网络定位结果。

![Vol/Vol.023 如何准确定位你的手机/13.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/13.gif)

因此，即使 GPS 失效，只要你打开了Wi-Fi 功能 ，就能与云端数据库数据比对，进而确定你的位置。

另一方面，滴滴能采集大量路面行驶的车辆定位数据，使网络定位的结果更偏向于在路上。

![Vol/Vol.023 如何准确定位你的手机/14.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/14.gif)

而车辆航位推算和道路匹配可以更有效的解决隧道、高架等场景下 GPS 信号丢失或不准确的问题。

根据手机内置的加速度计、陀螺仪等惯性导航元件，车辆航位推算算法可以推算车辆的速度、航向角等信息，进行位置推算。

![Vol/Vol.023 如何准确定位你的手机/15.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/15.gif)

而根据司机的轨迹数据，道路匹配算法可以推算车辆当前和下一时段所在的道路的可能性，将定位点准确绑定在道路上。

![Vol/Vol.023 如何准确定位你的手机/16.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/16.gif)

每 1-3 秒，滴滴手机端会上传一个定位包至实时计价模块，通过对每个点的降噪和补偿，就能得到一个相对准确的数据线路。

![Vol/Vol.023 如何准确定位你的手机/17.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/17.gif)

通过这些不同的工具，滴滴可以在城市峡谷、高架、隧道等各种复杂场景下降低误差，让用户获得更准确的上车点和更可靠的里程计费。

尽管如此，手机定位仍然是一件相当困难的事。

在可预见的未来，也没有什么好办法可以把定位误差稳定控制在 5 米以内。除非你拿着手机，开着 Wi-Fi，在周围都是路由器的环境里网上冲浪。

![Vol/Vol.023 如何准确定位你的手机/18.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.023%20如何准确定位你的手机/18.gif)
