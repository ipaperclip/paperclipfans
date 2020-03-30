# Vol.072 你的硬盘是如何储存数据的

!!! abstract ""

	哔哩哔哩视频：[【回形针PaperClip】你的硬盘是如何储存数据的？](https://www.bilibili.com/video/BV1n4411G7s5)
	
	Youtube：[Vol.072 你的硬盘是如何储存数据的？](https://www.youtube.com/watch?v=svhIPM2VT8U)
	
	`host` 存档：[Vol.072 你的硬盘是如何储存数据的？ | 回形针](https://paperclip.host/%E5%B8%B8%E8%A7%84Vol/Vol.072%20%E4%BD%A0%E7%9A%84%E7%A1%AC%E7%9B%98%E6%98%AF%E5%A6%82%E4%BD%95%E5%82%A8%E5%AD%98%E6%95%B0%E6%8D%AE%E7%9A%84%EF%BC%9F%EF%BD%9C%E5%9B%9E%E5%BD%A2%E9%92%88.mp4)

这是你的个人电脑，里面的硬盘则是你的命根子，藏着你多年以来积累的文档、照片、视频和游戏。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsdPvSia6w8NHmTApHU4lazjUeXAWh8C18M9b8TgCDImlxEXvSWPfBZNA.gif)

这块硬盘会以 0 和 1 组成的二进制形式默默储存着各种数据，随时等待着被你写入或者读取。

硬盘分为机械硬盘和固态硬盘。对于机械硬盘，最重要的结构是这些两面涂有磁性材料的磁盘，在工作时会以每分钟 7200 转的速度旋转。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsia0rwlfsTEKDSNnpl4y8xZzTib7AAB85tZzz4ZQOSwibIp2T0zssTtlYQ.gif)

写入数据时，距离盘面 3 纳米的磁头会利用电磁铁，改变磁盘上磁性材料的极性来记录数据，两种极性分别对应 0 或 1 。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsWLpcAjqWATZZFNn5ehSVGcolUs9jR3z3CzIPpEfogB0X2a6eibHV8JA.gif)

而读取数据时，旁边的读取器可以识别磁性材料的不同极性，再还原成 0 或 1 。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsjr7n2WjyA3OHtM7nSUaRnDpibQl5NRaH16L4BQjBxGZwTia61SXX2p3w.gif)

一片磁盘分为若干个磁道，每个磁道又分为各个扇区。扇区是磁盘存储的最小数据块，大小一般是 512 字节。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsKhN1GFLicU4rQwdZWaCia4drUnuibxXgiadNq7HnicH00NibO2TSXLnN16Fw.gif)

因此，磁头要想读取某个文件，必须在电机驱动下，先找到对应的磁道，再等磁盘转到对应扇区才行，一般会有十几毫秒的延迟，这就让机械硬盘在读取分散于磁盘各处的数据时，速度将大幅降低。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTstgiay0M6j8cEGQdPDYxSyqtq3wRwZKWB2u4Q87Bz9CNFHGfcAQwKrvA.gif)

基于电路的固态硬盘则不用担心这种延迟。固态硬盘储存数据靠的是闪存。

在工作时，数据会通过接口进入主控制器，经处理后再分配到闪存中储存。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTssW9yvRYD83Xibk7Wso2g3zBWibpMLC8VHcMibSXvHoiaqx6fO6w7ubdSEA.gif)

闪存的基本存储单元是浮栅晶体管，主要有这些结构。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsicXGv76sibxCzvCKlaibz9lFoDCjtlSqusnPoehpByS0ic3JX62pjTmX5A.gif)

其中的浮栅被二氧化硅包裹，和上下绝缘，在断电时也能够保存电子，当电子数量高于一个中间值就表示 0 ，低于中间值就表示 1 。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsksGiapO1OwWyX15WUp0BiaIb9cQmichTgEklWayLoQXicRXJGkiamvt9asA.gif)

晶体管每次写入数据前都要先擦除，在 P 极上加一个电压，浮栅中原有的电子会因为量子隧穿效应通过绝缘层被吸出来，让浮栅中的电子数量低于中间值，还原成 1 ；

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTs0ibSUicjTkbUJSTochPzTqrp8glfPUDAmiaDph5I3ib9FhzVVYNwia2AZmw.gif)

如果要写入 0 ，就在控制极加一个电压，让电子穿过绝缘层再注回浮栅，使电子数量高于中间值，表示 0 。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsdIXiaZVPicRhxwFMQKTXKt6p5ZcQNUibBDZZBAPlrzcEfvx2gYMZGYqLw.gif)

但在读取时，闪存无法直接得知浮栅中有多少电子，只能曲线救国。

我们首先要知道，往控制极加一定大小的电压，会导通这两个 N 极。控制极上的电压越大，N 极间的电流也越大。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsFviaiaI0jPEe00a65ua5fvPQic7a9DdboE2GZ8ghg2DlDct477FukFRQw.gif)

然而，存储 0 的浮栅，相比存储 1 的浮栅，有更多的电子，会抵消控制极上的电压，所以控制极需要更大的电压才能导通两个 N 极。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsZsGaia146qBPcGReFwvV0FUN2gGibTyNfFAArSeHiaYR3fibmzHF0DO1RQ.gif)

因此，当我们不知道浮栅中有多少电子时，就可以往控制极加一个中间值电压，如果两个 N 极导通，就能反推出浮栅中的电子较少，识别为 1；如果没有导通，就说明浮栅中的电子较多，识别为 0 。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsE1gy2TP9eMpnB46QmzswWE0fia5SgHAWtiak5uScicu4vkj4gtibvZwXDg.gif)

传统的单阶存储单元 SLC ，电子数量只有两种状态，只能保存一比特的数据。而多阶存储单元 MLC、TLC 和 QLC ，它们的电子数量有 4\~16 种状态，一个单元可保存 2\~4 比特。

多阶存储单元大大降低了固态硬盘单位容量的成本，但也影响了硬盘寿命和性能。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsg7dzvRicUlf3FJXcRRUNH5WpNLXApY0wXvL07ITUVfxzG91AI4TXXiaw.gif)

晶体管擦写数据时，二氧化硅绝缘层会困住一部分电子，这些电子的累积会逐渐抵消控制极上的电压，使得控制极为了导通两个 N 极所需的电压越来越大，当这个偏移超过中间值，那么读取时也就无法分辨 0 和 1 。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsG0XkoCYhRWldALicFopXPtRf5VBHoiafR9gzribnLXvusJqOibjsk4C3xg.gif)

而多阶存储单元由于不同状态之间分得非常细，也就更容易受这种偏移的影响，所以从 SLC 到 QLC ，它们总的擦写次数呈几何级数递减。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsuJFNOCwm6qCDDdLUryDmf9icYjR4Lj5vRfWH7sOUZ6DNmZIevWCDgyw.gif)

相比机械硬盘可无限次擦写，断电后数据可保存十年，固态硬盘着实算是消耗品，储存的数据通常在断电一年后就会因浮栅内的电子衰减而彻底丢失数据。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTslspJA2OP2JlCbfNC2QuAYbD3PR2Eq7GUUPDwmoveIBFxicUNibErRnoA.gif)

不过，一块消费级的 MLC 或 TLC 固态硬盘也足够你至少使用 5 年，且使用体验远超机械硬盘，读写速度可达后者的十倍以上。此外，由于没有复杂的机械结构，固态硬盘工作时也更安静、更抗震。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsO6D4lTqJYelhty2YfnegoeDAPIiaYCeCDlmlUVv6NITqibQpysdCInDA.gif)

而机械硬盘在长期使用后，各种金属部件的老化会让读写速度像挤奶一样细水长流。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsrg1MIX5QFbTDkeXY5ugFyy5SniapPhNriberAOGlAnFEE1llzG5eib3zA.gif)

况且，机械硬盘长久保存数据也未必是好事。比如本·拉登在死亡六年之后，CIA 公布了这位著名恐怖分子的硬盘数据，里面就存有大量的色情片、十八禁游戏和阿拉伯语字幕的日本动漫。

![img](https://cdn.jsdelivr.net/gh/paperclipcn/static/U6yRaDu1NaYiagkASYlkHYBQrM4TT5TTsOU8Xe4wJqM2pbcicFMqhRic9ib6xyuibDfwLjAEibwEBhn8OKLhicBv9SYqA.png)

!!! note "该文件编辑日志"

	* 	Mar 29, 2020.
		By [parozhao](https://github.com/parozhao)
	
			创建文件 & Markdown 格式化
