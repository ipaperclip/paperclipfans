## Vol.036 如何设计一个逼真的三维模型

画一条曲线，画很多条曲线，让曲线连接、旋转、平移，就能建出曲面，进而搭建出模型。今天的一切工业产品设计，需都要曲面建模完成产品的参数定义。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TXDj5v98gSEwWiaGrZrnUic9J6C7YgkZibgOsczZgTgl0YgSIRfic1pcz4A.gif)

但在一切发生之前，我们需要先得到一条曲线。

你在 PS 里随手画的线条本质上不是曲线。把它们放大，这条线会越来越模糊，最后变成一个个不同颜色的色块。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2T3J6RfBia8qGzJUZ7HcBUdb6zuCJHZEEVXgwwJ3hIxNRj5RHMa1rzX1w.gif)

但只要色块足够小，在人眼中的边缘就是平滑的。这种显示模式被称为点阵图像，也叫位图。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TicpT3JOJLNEVOwzP94U99NIOtEOCibkYGJHAyx7TxJRE9FgcEXQwhDYg.png)

计算机不像人类一样拥有徒手画线的能力，要画真正的曲线，就需要通过数学函数计算每个点的位置，再把点连成曲线。

贝塞尔曲线就是这样一种非常直观的曲线函数。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TXshIVXgNkwt8rtiak24Xe42C7YHXU9hbLAeRAQPWjgOMtJ4zuFoH4zg.gif)

这里有 A、B、C 三个点，我们在 AB 线段上任选一个点 D，根据 AD 和 AB 的比值，在 BC 线段上找到一个点 E，让 AD:AB=BE:BC 。再连接 DE ，在 DE 线段上找出点 F，让 DF:DE = AD:AB = BE:BC。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TbZ4H3Ou1C5OhzxqPpicggHNfR9iaz625jnSTicHH9kl8H0s3sho2ag2bg.gif)

这个 F 点，就是我们要得到的贝塞尔曲线上的一个点。让 D 点从 A 移动到 B，把得到的所有 F 点连起来，就是 ABC 三个点所定义曲线，称作二次贝塞尔曲线。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TB91XicVztdClGssNDLwulIto5nOwhs7SLPaTe97EIL0TtQQLduudk4Q.gif)

控制点越多，次数就越多。设计软件常用的画笔工具就是分段三次贝塞尔曲线，通过两个锚点和两个控制点，定义一条曲线。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TALnzZCZx6FOKia41HFKYCtPJ2Fias2xUAvTa2VibIyrXVssLNMq2xYNxw.gif)

这种用数学表达式定义的图形被称为矢量图。无论放大多少倍，都不会丢失信息，出现位图模式下的锯齿。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TR57uicIuATuGDaETvpwONZUJCNlSeamMKgvHjo6aFwFh9GzuWYRP24w.png)

贝塞尔曲线的问题是，当控制点数量过多时，每个点对于曲线的控制就会变弱。且调整任意一个点都会影响整条曲线，不能只修改局部。

如果把像钢笔工具一样把贝塞尔曲线分段，曲线与曲线的拼接就不够光滑。无法达到工业设建模要求的 C2 连续。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TaKJXgfY6HFszCibtUeoVHztPLjA3v2DpRNO2ibb1fSRBeHs9ZFYYaXuA.gif)

于是，在贝塞尔曲线的基础上，发展出了 NURBS 曲线。Non-Uniform Rational B-Splines，中文叫非均匀有理 B 样条。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TACTJIbjGCKDGKFVOyw7NNr7S8tdMarYCK4kicJQ0VSgcmNXHFVfgTAw.jpg)

B 样条可以被看做一系列基函数的线性组合，而这些基函数又是由低次的基函数线性组合而来，每两个节点矢量之间有不同的差值，且可以调节权重。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TDUvUSn2q6mib8O8HhSrMczGUZxIRSECCibyuWKOFIj34TkXIyZHt9nnA.gif)

我知道你没有听懂，在写下上面这段话的时候，我们其实也没搞懂。所以，我们完整的学习了清华大学的计算机图形学教材。现在，我们终于理解了什么是非均匀有理 B 样条。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TKHcHFVLcATRJKZg6E2SpgialTIRQX4O4A26jRNibFkKPXYZliaHW8icsicw.jpg)

接下来的内容将非常有趣，让我们开始吧。

首先我们要知道，贝塞尔和 NURBS 等曲线并不按照传统的 y=f(x) 的函数关系表达。而是通过定义一个新参数t，把曲线表示为一个多项式。在三维空间，就可以表示为P(t)=[x(t),y(t),z(t)]。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TnXZUNKicO1FjVhKTEM4I27qrS9XvQ2MeoiaopR8XFRY16t8ZH5XUsI1Q.gif)

比如一条直线段就可参数化表示为：

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TJE4hA9mOSUrz7d2z5t36fb65aYVnnribOMOPibO67Yz5CtKu5u654Qxg.jpg)

P 代表点的位置，包含 X，Y，Z 轴的坐标信息，P1 是这条直线的起点，P2 是这条直线的终点。

那么，t 等于 0 时，P(t) 的位置就在 P1上，t 等于 1 时，P(t) 的位置就在 P2上，把 t 在 0 到 1 区间的每一个值对应的 P(t) 坐标连起来，就是 P1 和 P2 相连的直线。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TkrMCyCicZYc3g4lsKfGsL1rI34pvnibBicVAXulichG3N1I4xJV3SLAV2Q.gif)

参数函数可以清晰的表达各种曲线，比如四分之一圆弧就可表示为这样 ：

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TEgMD2pT9ibabsicqLx67qUftavyqMyAFiaxC7z1AewH0FrTDC3NPaCcSA.jpg)

理解了参数函数，我们就可以进一步理解贝塞尔曲线的函数。这是求和符号，这是基函数，不用担心，我们接下来会进一步介绍。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2T16gcLCI0lk7W7O32K63PHQia8pWiclFicE8RCtUQLQcPzsibwa9c6ZXoPQ.jpg)

   

为了生成曲线，我们需要先确定 n+1 个控制点，记作 Pi，让每个控制点与一个基函数相乘，再把结果相加，就可以获得参数 t 对应的 P(t) 坐标，连起来就是一条逼近控制点的曲线。  

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TcUApBnWwfdeGYt2TUWhEGFv0SQVRTtiahlsg7IcdwwQ2oZX4h23jCDA.gif)

以有 P0，P1，P2，P3 四个控制点的三次贝塞尔曲线为例，每一个点都有一条对应的基函数曲线。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TKL0z2mrPRbDvt1BSxqktZ9cnEXgZXNkiclWCmK2p9Ke3VRcMiapRGzuA.gif)

可以看到，t 为 0 时，P1，P2，P3 的基函数结果都是 0，此时P(t) 的位置就在 P0 上，t 为 1 时，P0，P1，P2 的函数结果都是0，此时P(t) 的位置就在 P3上。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TlMKED605cop3eH4gIARia0Gkc8jxK9VTzAcvFGAWl8thjY2XudicAImg.gif)

而 t 在 0 和 1 之间时，P(t) 的位置就是这四条函数与控制点相乘再相加的结果。这也意味这每个控制点的位置发生变化，都会影响最终生成的整条曲线。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TuK9N1Oe6GmqtdC7hjApMl0z7KOKqQzXSsmqsrRfLM0EQC6kp46XbJw.gif)

而 B 样条则通过分段函数多次递归的方式解决了贝塞尔曲线的问题。可以看到，B 样条和贝塞尔的函数逻辑并无区别，但基函数和定义域 t 发生了变化。   

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TDmyqa9jPNQFA6cWLpCcrTJiar2ibMsQgYXpPTHkZqTOql2E87NjItqEQ.jpg)

这是 B 样条的基函数，i 是控制点的编号，k 是这条曲线的次数。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TN6iaQKwE7JQlAAxFTlfwyRtXz3Gzg8ggWciccNG1ATmvDPRicRuEfuHAQ.gif)

让我们以有 4 个控制点的 3 次 B 样条为例。

为了曲线可以被局部控制，首先需要设置 t0至 t7 共 8个 (4+3+1) 节点，每个节点都有固定的数值，我们就取 0、1、2、3、4、5、6、7 为 8 个节点的数值。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2ThMcH6SlEibPvZctrPnUIfpggpE3Bk4e52SYTpqDq3p9MKLpGc9X6ojw.gif)

从基函数公式中我们可以看到，要计算 3 次 B 样条基函数，先要计算 2 次基函数，要计算 2次，要先计算 1 次，要计算 1 次，就要先计算 0 次。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TiczharErAVTTgByjDe1Qe1jNFckvIoMV2k32KY3v3ccr4SvcAnGz5Ng.gif)

根据公式，控制点 P0 的 0 次基函数 N0,0 只在 t0 和 t1 之间是 1， 其他区间都是 0。

以此类推，我们可以画出剩余 3 个控制点的基函数 N1,0 到 N3,0 。而 t4 至 t7 节点还会生成三条基函数，用于之后的计算。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TQJQoG1F1OT4TwCN5yt8yJoTzQricPonRD7UQbf5mt095KtCvTMAbQsQ.gif)

在 0 次基函数的基础上，我们可以计算 1 次基函数。

基函数 N0,0 和  N1,0 会组合生成一个新节点，对应的基函数是 N0,1。以此类推，N1,0 和  N2,0 会组合成 N1,1 ；N3,0 和  N4,0 会组合成 N3,1。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2T51ibBPexqCYibe8wdPtic8iaNZ9WSYswzibr4icflZ5Izf1xS0GzegA5cKzA.gif)

此时的 B 样条是就这四条基函数和 Pi 乘积的和，即4个控制点连接的直线。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2T59BOHXvOASF8yoOsAnaZWEaG1yt9q5qicSA4Wvt6N7mZficfEGHdBWLg.gif)

之后，可以再计算得出 2 次基函数，N0,2 到 N3,2 。再计算出 3次基函数。N0,3，N1,3，N2,3，N3,3 。最后带入公式中，就可以算出 P(t)，得出整条曲线。   

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TeXtXrAup0xsAjG7oPqTPvMP1UKH6vq9UeFjicx7olDuxOL0pn0ZmVPw.gif)

在这张图中，我们可以更清晰的看到 B 样条基函数的递归逻辑。

不难发现，每个 3 次基函数都只在4个节点区间内有数值，这也意味着，这个控制点终于实现了贝塞尔曲线做不到的局部控制。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TfTU34IcaZUdLQ6iaSODhHJ2GCHqnsA5qWrzziaiaOxicZnVQRpGfywSUibA.gif)

在刚刚的例子中，节点之间的数值是相等的，所以也被称为均匀 B 样条。实际应用中，更常见的是节点间距不相等的非均匀 B 样条，让控制点获得更灵活的控制范围。   

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2T8b0R1XuMekiaLFdQPr2ibjmBsuFMrghWqwTuXPVD2WEEcXdzQWfyxvOw.gif)

而「有理」，意味着可以对B 样条的每个控制点设定不同的权重，进一步控制曲线。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TgKmjoh2Eiag8Q2NI6Z17KNb1MTciaBTHQn1H0QJibrefx8zlpiblrlia1Tw.gif)

这就是非均匀有理 B 样条。

你可以在这个网站中，更直观的理解 NURBS 曲线。

每个控制点有4个参数，XYZ 轴的坐标和权重，权重越高，曲线就越靠近该点，让控制点获得对曲线更高的影响力。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TccwKMD0DCYRQruzVRcxosEmpUPWkiaTGibSRexthkibUeX7ibHGuYWnm8w.gif)

而次数则意味则分段函数的计算次数。

次数为 1 时，就是各个控制点连接的直线。次数为 2 时，每段直线的会计算成为多段曲线，次数为 3 时，分段曲线会进一步计算，生成更短更平滑的曲线。次数可以不断升高，但在实际应用中，3 次已经够用了。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2T5l01icukjx4RSIMXVJs9AsYpQz04Yaj564ATBOkTEicuEhjiaYJLF96GA.gif)

可以看到，10个同样位置的控制点，3 次的 NURBS 曲线就要比 9 次的贝塞尔曲线平滑可控的多。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2T9RZmiceXuX471sdOLdBgaSG4xfsQmIiayicTcpBj8pKlTEvBWAMJEqhEw.gif)

有了 B 样条之后，让曲线连接、旋转、平移，就能构建出曲面了。

接下来，我们的三维模型师杰苏尔将完成一次建模。

首先用 B 样条勾勒出我们想要的模型轮廓，再添加几个额外的点让直线部分更垂直。之后，添加圆形样条，再用扫描将模型的基础形态制作出来，调整封顶形状，就基本完成了模型的身体。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TqHjE8pT6FDAt81ic23R2gfQUDftKJL7lE550Fom3094YJNX1RGqeKDw.gif)

再添加眼球、瞳孔，增加细分曲面，调整大小和位置，然后再复制另一个眼球，一个回形针模型就完成了。

![img](https://paperclip.host/static/U6yRaDu1NabeonUNQUgBITiafiauVVFe2TnQXoIibjchcVRiaypnQxhrdldjGt4c9iaKRPY0qjYCzhMXRKSqXtEibjRQ.gif)

!!! note "该文件编辑日志"

	* 	Mar 29, 2020.
		By [parozhao](https://github.com/parozhao)
	
			创建文件 & Markdown 格式化
