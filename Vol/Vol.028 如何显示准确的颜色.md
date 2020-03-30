# Vol.028 如何显示准确的颜色

把一台显示器放大100倍，可以看到屏幕上整齐排列的像素点。继续放大，就能发现每一个像素点都由红绿蓝三色的子像素构成。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIciaricsZPNPibibqFvamAkzu12Fel4VkM7sZg8LUmibC1nFjUz5b3SCAIxA.gif)

为什么是红绿蓝？

现在普遍认为人眼的视锥细胞恰好对红绿蓝三种波长的光最为敏感，我们所能分辨的所有颜色，都由不同亮度的红绿蓝混合而成。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIwMmrqTXcfWf4Pl93wnJbb3vziaU5Cg5t8814otkolM4vcH1MqeWiasow.gif)

这就是著名的 RGB 颜色模型。如果把每种颜色的亮度分为256级（8bit），就能组合出 16777216 种颜色，对于人眼已经够用了。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIuEFtNPbMbDicwibPmiaRA8E08LqhbG8WzR3OY7A1ibia6wADC8yqU09EfbQ.gif)

但不同厂商定义的红绿蓝并不完全一样，生产出来的显示器也会有很大差别。

所以，为了让你在屏幕上能看到准确的颜色，需要先定义什么是红绿蓝。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIdfu2nhYZYhfhzgzTFS0JyhwaWox2FhkTnbggyiahtjTp0KEy4HbJvZQ.gif)

这就引出了一个新概念——色彩空间。

这是MAC OS自带的软件「ColorSync」，你可以在这里看到各种色彩空间的三维模型，这个模型里包含了这个色彩空间可以显示的所有颜色。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIeicBYeBiaDFRibtZeSjQ3FibEl9LicsvljYydoObrKibTnbToUUSHIehyj1A.gif)

XYZ 色度图可以帮助我们更直观的理解，这里的每个三角形都对应一个色彩空间。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbITeV44nPqUP1zRfKWk9vhD11L6AnbiclDPj1W9poQegICALib0d13P7Zw.png)

以最常见的 sRGB 为例，这里的三个点，是 sRGB 对于红色、绿色和蓝色的定义，三角形所围成的区域就是 sRGB 可以显示的所有颜色。

而 Adobe 制定的 ARGB 通过移动绿色的坐标，扩大色域，囊括了更多的印刷色彩。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIoaO0ftgPgLkvQbJ2iaKwaqnpiakJJtavI27yxBSoCS6x6UVzEuQVGkFA.gif)

但今天的大多数显示器甚至不能 100% 覆盖 sRGB，这是由显示器的复杂工艺决定的。

你眼前的画面由数百万个像素点构成，每个像素点又有红绿蓝三个子像素，只有独立控制每一个子像素，才能准确的显示色彩。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIL9BorCsmTbdLUibxuFBTBE450yV5R7Grxic1scMYtsF5JxK0QrHRYGtg.gif)

我们来看看显示器是如何控制单个像素的。

红绿蓝三色滤光片对应三个子像素，但两块开口方向相互垂直的偏光板，让背光无法通过。但中间的液晶可以让光的偏振方向旋转90°，穿过偏光板。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIMriaG1N3e2PjRBzwWLqJz0rekrFq3akbo6dgV6zAxTWo9u44LIcpBjA.gif)

而电压可以改变液晶分子的排列状态，减弱透光量。通过独立控制每个液晶单元格的电流，就能控制红绿蓝三个子像素的亮度，让对应的像素产生各种颜色。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIcHScqDKYGgNhdLJZTA0vHmvLVpMbIiaZDicAuicv1w1o0mbcEvze6GTuQ.gif)

液晶面板是决定显示器质量的关键，制作过程相当复杂。

制作一块主流的 TFT-LCD 面板有两个最重要的阶段，Array 和 Cell。

Array 阶段的目的是在玻璃上印刻用于控制液晶的电路。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIwlzTvU9xxg4sYdtblicLGzmpGb7If6yiaywgw9MxW1m1kv75p1ztCR3A.png)

LCD 玻璃厚度在 0.6mm 左右，首先需要沉积一层数百纳米的薄膜层，之后在薄膜上覆盖一层光刻胶，再盖上一层遮板，用紫外光照射后，把未被遮板覆盖的光刻胶清洗掉，再把未被光刻胶覆盖的薄膜蚀刻去除，最后再剥离剩下的光刻胶，就在玻璃上留下了我们想要的薄膜图案。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbISCSrZgWONRIXvsSqFc478ocqWD8VV5tWmhMw1icXbyTgjRjicbz1td4g.gif)

重复以上的步骤，就可以在玻璃上构建复杂的电路图案，进而控制液晶单元。

Cell 阶段的目的是在玻璃基板与彩色滤光板之间注入液晶。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbI3w8qxnw87BwLlW3iav5A1npw7Z6iaayn3L3dBfJtYUyj2BRhMfPWpVpA.png)

配向工程是这一阶段的关键。为了让液晶分子按设计好的方向排列，需要在玻璃表面涂上配向膜，印出纹路。

之后在滤光板上涂布封框胶，注入液晶，与玻璃基板贴合，在真空室中加压成型。这里的封框胶，就是我们在屏幕上的看到的黑边。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIZiazeUflGnnl3d222uyKYwXiae14nrsWibyCVKY8IBuLHo4ibYcb1eEbVg.gif)

关于液晶屏工艺，还有很多有意思的细节。如果你想了解更多，可以在我们的微信公众号发送「显示器」，获取吴玉祥博士这份一百页的详细说明。

**吳玉祥，「TFT LCD顯示原理製程技術與設備」，光機電奈米量測系統科技整合研討會**

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbItY6V2XYNg73bLbbUDThiaIxkfreyFXwBkbJM42Y5WBJhxuoax0npmAw.gif)

因为液晶面板的复杂工艺，即使是不显眼的参数提升，都将带来高昂的研发成本。这也是为什么同样尺寸的显示器，会有几十倍的价格差距。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbINjqpSRwGt72kt3Z4NIDVHJKdibvxhkaU7u3p1hzBBJuyb0W6oBExhQw.gif)

从 TN 屏，IPS屏，到 OLED ，人类最顶尖的头脑在纳米尺度下完成了无数微小创新。拥有 37 年历史的联想 ThinkVision 系列就是这个行业的绝佳注脚，他们不断定义显示器的新标准，只为了屏幕前的你能看到更丰富更准确的色彩。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIud8IqBGmTssozabQnLusKAX5Sfgx7DhdOTJdlEDR1N4icty7Yopeecg.gif)

比如在这块支持 99% Adobe RGB 的 ThinkVision P32u 4K显示器里，我们终于有机会看到更多的颜色。尽纳万象，所见不同。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYbSu7r6cjkuQmnnyS76cbIia9h8F1P8uAOq0QjFIjutSlSD7KjvymBfVbrNJqsteCZP0tXrXmrYNw.gif)

!!! note "该文件编辑日志"

	* 	Mar 29, 2020.
		By [parozhao](https://github.com/parozhao)
	
			创建文件 & Markdown 格式化
