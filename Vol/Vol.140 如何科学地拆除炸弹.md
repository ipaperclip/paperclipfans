# Vol.140 如何科学地拆除炸弹

现在，你的命运被拴在这颗炸弹上。一旦倒计时结束，你就可能灰飞烟灭。

![Vol/Vol.140 如何科学地拆除炸弹/1.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/1.jpeg)

面对这颗炸弹，怎样才能安全有效地拆除它，保护你的生命安全？

炸药按照敏感度不同，可以分为初级炸药、次级炸药和三级炸药。敏感度高的炸药，可能稍有颠簸就会引爆，没法平稳地送到你手上。

![Vol/Vol.140 如何科学地拆除炸弹/2.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/2.jpeg)

要经历长途跋涉，需要使用敏感度很低的炸药。比如 C4 ，震动、枪击都很难引爆，需要先引爆雷管，雷管内的点火药、起爆药和导爆药依次引爆产生的爆轰能量才能引爆这颗炸弹。

![Vol/Vol.140 如何科学地拆除炸弹/3.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/3.gif)

这是一根电雷管，两根电线的一端连接镍铬合金制成的桥丝并插入雷管，用桥丝包裹引火药，只要通电，电流就能通过加热桥丝点燃引火药。

![Vol/Vol.140 如何科学地拆除炸弹/4.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/4.jpeg)

这样，再加上电路就能通过遥控或定时，实现远程引爆。比如将雷管的电线焊接在手机振动马达或者计时器上，无论是电话接通或者倒计时结束，都会接通雷管电路，随时随地爆炸杀人。

![Vol/Vol.140 如何科学地拆除炸弹/5.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/5.jpeg)

现在，我们模拟一个电影中常见的红蓝线炸弹。

电路中有一个 PNP 三极管，当发射极 E 点与基极 B 点电压相近时，会阻断电流流向集电极 C 。当 E 的电压比 B 高出约 0.6 V 以上时，电流就会流向 C ，引爆雷管。

![Vol/Vol.140 如何科学地拆除炸弹/6.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/6.jpeg)

为了阻止爆炸，红线和蓝线，你要剪哪条？

红线看着吉利，剪红线吧！

剪红线会让 B 点电压降低，让三极管的 E、C 极导通，引爆炸药。所以正确的做法是剪蓝线，直接切断 E 点的供电来源，自然也就无法导通电流，你也安然无恙。

![Vol/Vol.140 如何科学地拆除炸弹/7.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/7.gif)

我们再看一个居心叵测的炸弹。注意其中的继电器，这个触点开关通常处于常闭状态，而左边的线圈一旦通电就会产生磁性，吸引触点开关处于常开状态。

![Vol/Vol.140 如何科学地拆除炸弹/8.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/8.gif)

好，现在给你 5 秒钟决定，到底剪红线，还是剪蓝线？

剪红线，你炸了。

那剪蓝线吧。

先别骂娘，再看一遍电路，不论剪红线还是剪蓝线，这个线圈都会断电，失去磁性，让触点开关恢复到常闭状态，导通雷管桥丝的电路，引爆雷管。

![Vol/Vol.140 如何科学地拆除炸弹/9.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/9.jpeg)

对于这种炸弹，只有找到真正连接桥丝的隐藏电路并剪断，才有可能生还。

不过，精明的犯罪分子未必只会用这些简单的电线，我们再模拟一个更精致的炸弹，核心部分采用了复杂的集成电路。

先看这个运算放大器，当同相输入端的电压比反相输入端低时，运算放大器只会输出极低的电压，不足以引爆雷管。但反之，就会输出大电压引爆雷管。

![Vol/Vol.140 如何科学地拆除炸弹/10.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/10.jpeg)

这些大小不同的电阻又会调整电路中各处的电压值。这个二极管只允许电流单向流通。还有这个电容，可以在失去外部电源时放电。

![Vol/Vol.140 如何科学地拆除炸弹/11.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/11.gif)

为了更好地理解，我们先简化一下，把这些组件隐去。好了，现在再给你 5 秒钟决定，剪红线还是剪蓝线？

![Vol/Vol.140 如何科学地拆除炸弹/12.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/12.jpeg)

别想了，剪哪条你都得炸。

仔细看电路，红蓝线没断时，电源正常放电，运算放大器的同相输入端因为前面经过一个电阻，所以电压值低于反相输入端，只会输出极低电压，炸不了。

![Vol/Vol.140 如何科学地拆除炸弹/13.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/13.jpeg)

一旦剪断红蓝线，失去外部电源，这个电容就会放电，给同相输入端一个电压。但电容放的电无法经过这个只允许单向导通的二极管，也就无法给反相输入端提供电压。

这时，上大下小的电压差就会让运算放大器输出大电压引爆雷管。

![Vol/Vol.140 如何科学地拆除炸弹/14.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/14.jpeg)

要知道，这样的电路，仅仅是入门，配合水银开关，光敏、声敏传感器和智能引信等高端配置，炸弹的电路开关可能充满了陷阱与障眼法。

![Vol/Vol.140 如何科学地拆除炸弹/15.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/15.gif)

所以现实中的排爆人员的工作，最优先的选项，是引爆。

在建立全频段信号屏蔽后，排爆人员往往会用便携式 X 射线等设备进行扫描，评估炸弹的威力。

![Vol/Vol.140 如何科学地拆除炸弹/16.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/16.jpeg)

对于威力小的爆炸物，可以直接用水炮枪在现场进行破拆。当然有的爆炸物不适合现场处置，在评估可以移动后，就可以转入这样一个能抵御 1.5 kg TNT 当量的排爆罐内爆破。

![Vol/Vol.140 如何科学地拆除炸弹/17.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/17.jpeg)

排爆手需要配备这样一套能经受一斤 C4 炸弹考验的排爆服，重达 40 公斤，能最大限度地抵御爆炸产生的碎片、高温等伤害。

![Vol/Vol.140 如何科学地拆除炸弹/18.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/18.jpeg)

而对于心怀不轨的犯罪分子，要想造炸弹光知道电路知识也没用，因为普通人很难搞到雷管、炸药。根据公安部的统计，从 2012 到 2017 年，爆炸犯罪案下降了六成以上。

![Vol/Vol.140 如何科学地拆除炸弹/19.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/19.jpeg)

哪怕有犯罪冲动，也只能放放嘴炮，用逻辑绕晕民警，然后被拘留。

![Vol/Vol.140 如何科学地拆除炸弹/20.jpeg](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.140%20如何科学地拆除炸弹/20.jpeg)

[^1]:刘阳, 缴剑. (2018). 浅谈在排爆过程中应遵循的几点原则.报刊荟萃, 2.
[^2]:唐剑兰, 王远途. (2017). NIJ 0117排爆服标准解读.警察技术, 5, 83-86.
[^3]:高文乐, 周奥博, & 罗衍涛, 等. (2017). 电流对灼热桥丝式电雷管点火头发火时间的影响.爆破器材, 46(1), 34-37.
[^4]:中华人民共和国国务院令第653号.  (2014).《民用爆炸物品安全管理条例》.
[^5]:Homeland Security. Introduction to explosives.
