# Vol.120 二维码的秘密

来，看着这个二维码。

![Vol/Vol.120 二维码的秘密/1.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/1.jpeg)

加人、购物、填表、付钱，你可能扫过无数次二维码，但却从来没有认真看过它。

![Vol/Vol.120 二维码的秘密/2.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/2.jpeg)

这个二维码结构看起来很简单，左下、左上和右上有三个方块用来定位。剩下的位置就是一堆黑色和白色小方块组成一个 29×29 的大方块，白色方块表示 0，黑色方块表示 1。由这些 0 和 1 构成的二进制字符串就可以转换成各种数字、字母和符号了。

![Vol/Vol.120 二维码的秘密/3.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/3.jpeg)

但你仔细看，就会发现没这么简单。

![Vol/Vol.120 二维码的秘密/4.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/4.jpeg)

条码系统诞生之初，就是希望创造一套简单清晰可被印刷能被机器识别的图形编码，让机器轻松获取商品编号。

这样你在超市买东西的时候，收银员就不需要手动记录，只需要扫一下就能知道多少钱了。

![Vol/Vol.120 二维码的秘密/5.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/5.jpeg)

这就是二维码的前身——一维码，今天我们都叫条形码。以 UPC（Universal Product Code）码为例，本质上就是 30 条粗细不一的黑线。

而黑色竖线和白色间隔的宽度，就是隐藏在条形码里的二进制信息。

![Vol/Vol.120 二维码的秘密/6.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/6.jpeg)

竖线和间隔都有 4 种宽度。最细的竖线代表一个 1，之后是两个 1，三个 1，最粗的竖线就是 4 个 1。对应的，4 种间隔宽度就是 0、00、000、0000。

比如这里，就是 0110001，根据编码表，代表 5。每 2 条竖线加 2 条间隔就能表示一个数字，这 48 条竖线和间隔就可以表示 12 位数字编号了。

![Vol/Vol.120 二维码的秘密/7.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/7.jpeg)

而左右最外侧的双排线则是所有条码的固定开头，代表 101，这么做的意义在于让扫码器知道这个条码最细宽度，进而识别出这个宽度的 2、3、4 倍。

这样，无论条码按照什么尺寸印刷，扫码器都可以完成识别，需要的信息也只有一条线这么多，其他地方都污损了也没关系。

但是如果扫反了怎么办？

![Vol/Vol.120 二维码的秘密/8.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/8.jpeg)

只要让扫码器区分左右就好了。我们把分隔符左侧的编码表里的 0 变成 1、1 变成 0 ，就得到了分隔符右侧的编码表。巧妙的地方在于，左侧所有组合里 1 的个数都是奇数 ，而右侧都是偶数。

这样，扫码器从左往右读取数据时只要发现一组数据里的 1 是偶数，那么就可以确认扫反了。用逆码表解读数字，再重新组合，就能得到正确编号。

![Vol/Vol.120 二维码的秘密/9.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/9.jpeg)

最后，编号第 12 位数是根据前 11 位数计算出来的校验码，以防止篡改。

![Vol/Vol.120 二维码的秘密/10.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/10.jpeg)

这三重设计保证了条形码可以适应各种复杂的现实情况，非常可靠。

![Vol/Vol.120 二维码的秘密/11.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/11.jpeg)

但条形码上能承载的信息还是太少了，所以，以矩阵形式承载更多信息的二维码出现了。在这些奇奇怪怪的二维码中， QR 码脱颖而出，出现在了你的微信支付宝和火车票上。

![Vol/Vol.120 二维码的秘密/12.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/12.jpeg)

QR 的全称是 Quick Response，快速响应矩阵。最有代表性的就是这三个回字型方块，这样的排布方案可以让你无论从哪个方向扫描二维码都会自动校正为正确方向，只要右下角没方块就是对的，很简单。

![Vol/Vol.120 二维码的秘密/13.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/13.jpeg)

但 QR 码是怎么实现校验、纠错同时保证准确度的呢？我们找到了这份 126 页的 QR 码国际通用标准。

今天的普通 QR 码有 40 个版本，版本越大，尺寸越大。最小的版本 1 是一个 21×21 的正方形，版本号每加 1，正方形的边长就多 4 格。最大的版本 40 就是一个这样 177×177 的密恐正方形。

以这个版本 3 的 QR 码为例，大概由 5 个部分组成。

![Vol/Vol.120 二维码的秘密/14.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/14.jpeg)

1 是 3 个7×7 的回字形方块和宽度为 1 的白色的分隔符。

2 是这两条黑白相间的定位图案，告诉扫码器横竖的标准方向。

3 是右下角的校正图形，一个 5×5 的小方块，尺寸越大，校正图形越多。这样，即使你用奇怪的角度扫描，算法依然可以根据这三组图案提取轮廓，修正透视，获得正面图案。

4 是由相同的两组方块组成的格式信息，每组 15 个，放置在定位方块的旁边。      5 作为剩下的区域，会被分成 8 个一组的模块，存储数据和纠错码。

![Vol/Vol.120 二维码的秘密/15.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/15.jpeg)

而在大于等于版本 7 的 QR 码里，还需要在这两处记录 18 位的版本信息，提高扫码器的效率。

1、2、3 的设计只是让 QR 码可以被扫码器认出来，但 QR 码真正厉害的地方在于，即使你这样、这样、或者这样、它都能被正确识别。

为什么？

![Vol/Vol.120 二维码的秘密/16.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/16.jpeg)

现在，我们终于进入到了 QR 码的核心， Reed-Solomon 编码。

注意，接下来的内容会有一点点难，但也只需要中学数学知识就够了，如果你理解了会非常有意思，让我们开始吧。

![Vol/Vol.120 二维码的秘密/17.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/17.jpeg)

我们知道，二维码是用黑白方格对应的二进制数据来表示信息，比如 1234 就可以编码为 00011110110100，对应成二维码里的方格就是这样。而 Reed-Solomon 编码可以让你随便修改一定数量的格子，机器都能自动还原成正确的数据。

为了更好的解释这一过程，我们简化成 4 个格子，有 4 个数字，分别是 1、2、3、4。

![Vol/Vol.120 二维码的秘密/18.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/18.jpeg)

我们的目标是，任选 2 格修改成其他数字，算法都可以自动发现错的是哪一个，并且还原成修改前的数据。

![Vol/Vol.120 二维码的秘密/19.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/19.jpeg)

为了做到这件事，我们需要得到 4 个变量，错误的两个格子的位置，e1 和 e2，这两个格子错误的大小 y1 和 y2。假设我们知道 e1=3，e2=1，y1=-5，y2=1，那么机器就可以自动调整成正确数据了。 而在计算这 4 个未知数之前，还得先让机器知道，这串数字错了。

最简单的方法，就是算 0。算出了 0 就是对的，不是 0 就是错的。

![Vol/Vol.120 二维码的秘密/20.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/20.jpeg)

比如我们所有人的设备都可以保存一个固定数值 g=1234，用输入数值 m 1234 减固定值 g 1234 就刚好等于 0。但 g 是不会变的，如果我们想输入 5678，结果就不是 0 了。这时我们就需要根据输入值和固定值反推出一个 p，无论我们想输入什么，都能算出 0，这个 p 就是纠错码。

比如固定数值 g= 100，输入值是 5678，那 p 就可以是 -5578，如果我们输入变成 1234，p 就会跟着变成 -1134。这样，如果输入值被篡改了，比如被改成了 6234，结果就不是 0，而是 5000，机器就知道输入错了。

纠错码 p 和输入值 m 都会出现在二维码上，但这样就带了一个新问题，纠错码被修改了怎么办？

![Vol/Vol.120 二维码的秘密/21.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/21.jpeg)

如果 m+p-100 不等于 0，我们永远不可能知道是 m 错了还是 p 错了，但是如果我们可以把 m 和 p 组合成一个数字比如说 1234XXXX 呢？听起来不错，但这样减法就不行了，这 4 位数不管是多少都不可能得到 0，那怎么办？

![Vol/Vol.120 二维码的秘密/22.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/22.jpeg)

答案是：用除法。

比如我们让 12340000 除以 3，余数等于 1，我们用 12340000 减去 1，就得到了 12339999，此时除以 3 的余数等于 0。但这样带来了两个新问题， 3 的倍数有很多，很多错误情况下一样可以得到 0，而即使我们得到了一个余数，我们又怎么能通过余数知道哪一位数错了多少呢？

![Vol/Vol.120 二维码的秘密/23.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/23.jpeg)

这时，我们就需要改变计算规则了。隆重介绍——伽罗瓦域(Galois Field，GF)。

伽罗瓦域厉害的地方在于，这是一个封闭的世界，里面的有限个数字不管怎么算都不会得到它们之外的结果。

![Vol/Vol.120 二维码的秘密/24.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/24.jpeg)

以 GF(2^3) 域为例，一共有 8 个数，「0、1、2、3、4、5、6、7」，他们对应的二进制是这样。

伽罗瓦域的加法和减法运算一样，都是异或算法。比如 1-2 就是 001 异或 010，结果是 011，根据这个表 011 是 3，1+2 结果也一样。6+7 就是 1，不管怎么加减，都只能得到这个域里的数字。

![Vol/Vol.120 二维码的秘密/25.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/25.jpeg)

而乘除法的规则复杂一些，结果大于 7，比如 6\*7 就需要对 110 和 111 做模二乘法，再用模二除法除以提前预设的数值 1011，得到余数 100，就是 4。

![Vol/Vol.120 二维码的秘密/26.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/26.jpeg)

这就是伽罗瓦域 GF(2^3) 的完整乘法表，不管你怎么算，永远只能得到 0、1、2、3、4、5、6、7。除法也类似。

还记得刚刚的除法吗？现在如果我们用伽罗瓦域的规则，就不能再用 12340000 了，这个世界里只能有这 8 个数字，那我们还能怎么表现 12340000 呢？

![Vol/Vol.120 二维码的秘密/27.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/27.jpeg)

答案是：多项式。

在多项式中，我们可以把每个格子里的数字作为 x 的系数，把格子的位数作为 x 的次方数。比如 1、2、3、4 就是 1*x^3+ 2*x^2+ 3*x^1+ 4*x^0，那么 12340000 的多项式 m(x) 就是这样

![Vol/Vol.120 二维码的秘密/28.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/28.jpeg)

既然输入数据变成了多项式，我们要除以的固定值 g 也应该是一个有 x 的多项式。我们要得到的 4 位纠错码， g(x) 就有 4 个因子，分别是x减2的零次方，x减2的一次方，x减2的二次方，x减2的三次方，

![Vol/Vol.120 二维码的秘密/29.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/29.jpeg)

g(x) 就等于这 4 个因子相乘。

这样做的意义在于，因为这个 g(x) 展开后的多项式最高位就是 x 的 4 次方，所以我们用 m(x) 除以 g(x) 能刚好就得到 4 位数的余数P(x)= 1\*x^3 + 6\*x^2 + 7\*x + 4，把多项式的系数换成数字就是 1674。

这个过程用公式描述就是这样

![Vol/Vol.120 二维码的秘密/30.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/30.jpeg)

我们两边都乘 g(x) ，再把余数 P(x) 移到左边，别忘了伽罗瓦域里加和减是一样的。所以我们可以神奇地发现，把原来的 M(x) 和余数 P(x) 相加，得到的新多项式刚好可以被整除，而这 4 位余数就是我们要找的 4 位纠错码。

这样我们得到了最终的输入数据 12341674，用多项式表示就是这样

![Vol/Vol.120 二维码的秘密/31.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/31.jpeg)

好，我们的准备工作已经全部完成了。现在，你可以随便修改这 8 个格子里的 2 个数，机器都可以完成自动修正。

![Vol/Vol.120 二维码的秘密/32.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/32.jpeg)

首先，系统会把收到的输入数据变成多项式，除以提前设定好的 g(x) ，得到余数 1645，不等于 0，说明输入数据有误。

现在，只需要找到错误位置 e1、e2 以及他们对应的错误大小 y1、y2 就行了。

而这一切的关键，就在于四个隐藏着的方程组。

![Vol/Vol.120 二维码的秘密/33.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/33.jpeg)

我们知道正确的输入数据 M(x) 除以 g(x) 的余数是 0，那么 M(x) 就等于 g(x) 乘一个固定值 h。

如果 g(x)=0， 正确的 M(x) 也会等于 0。

而根据 g(x) 的公式，恰好有 4 种情况会等于 0。分别是 x 等于 2 的 0 次方 1 次方 2 次方和 3 次方，用公式写出来就是这样：

![Vol/Vol.120 二维码的秘密/34.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/34.jpeg)

虽然我们不知道正确情况下 m1、m2、m3、m4、p1、p2、p3、p4 是多少，但是我们知道错误情况下的，把我们收到的输入数据 62241674 带入这 4 个方程计算，能得到 4 个不等于 0 的结果。

而这 4 个方程之所以不等于 0，是因为有 2 个地方的数字出错了，出错的大小 y 乘 2 的 n 次方后相加就是方程的结果。而这 2 的这个 n 次方又和出错数字的位置有关，如果 x=2^1 ，那么 n 就等于 1 乘出错的位置 e，如果 x=2^2 ，那么 n 就等于 2 乘出错的位置 e。用公式写出来就是这样：

![Vol/Vol.120 二维码的秘密/35.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/35.jpeg)

现在，我们有四个方程组，四个未知数，机器就能算出来

![Vol/Vol.120 二维码的秘密/36.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/36.jpeg)

现在，我们可以把收到数据的第 5 和第 7 位的数字 2 和 6，分别和 y1 和 y2 做异或运算，得到 3 和 1，填回去，我们就得到正确的输入数据了。

需要说明的是，这是一个简化后的计算过程，实际情况还要更复杂。

![Vol/Vol.120 二维码的秘密/37.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/37.jpeg)

这就是二维码的秘密，把信息编码为二进制，按顺序填上原始数据，再填上计算后的纠错码，和其他信息，再和掩码做一次异或运算，最终成为你看到的样子，一个可靠的码。 

![Vol/Vol.120 二维码的秘密/38.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.120%20二维码的秘密/38.jpeg)

1960 年，工程师 Irving S. Reed 和 Gustave Solomon 可能也不会想到，他们发布的这篇不到的 5 页论文会在 60 年后成为当代生活不可或缺的一部分，和无数精彩绝伦的论文一样，成为这个世界底层看不见的一块砖。

!!! note "该文件编辑日志"

	* 	MAY 24, 2020.
		By [FlyingSky-CN](https://github.com/FlyingSky-CN)

			📦 Update Vol.120-Vol.122

	*	SEP 19, 2021.
		By [Just-Prog](https://github.com/Just-Prog)

			图片链修复
