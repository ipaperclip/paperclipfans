# Vol.049 如何做一根懂事的路灯

这是广州市白云区珠水路的路灯工程图纸。



![img](https://mmbiz.qpic.cn/mmbiz_png/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSUbJ0vSUdtibmerHGAe8HXqdseb4OOFAP7mt4iaVxSOTMJBrInIWC0qJQ/640?wx_fmt=png&tp=webp&wxfrom=5&wx_lazy=1&wx_co=1)



在这条 10 米宽的双车道上，每隔 30 米就有一根 10 米高 150W 的 led 路灯，这几百根造价 7300 元的的路灯，会在日落后的 15 分钟内打开，发出由蓝光和黄色荧光粉混合而成的白光。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSicfTSd1RibAAeUfw4zENibZ8FQeFHDIrtNbfTuJGWGHiczmicgsSjqNxjwQ/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



做一根路灯并不容易，太暗肯定不行，但是太亮又会闪瞎司机的眼睛。如何让路灯恰到好处的发光？中国的 2600 万路灯又是如何被统一管理的？



首先我们需要明确两个基本概念：光通量和光强。



![img](https://mmbiz.qpic.cn/mmbiz_png/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSVo2ciaXj1boSenB5s2T8d1ujEMoYsRsjxIQA5RVfTFSngMrrvzJ8q2A/640?wx_fmt=png&tp=webp&wxfrom=5&wx_lazy=1&wx_co=1)



光通量的单位是流明，代表光源的发光总量，除以给定方向上的立体角，就是光强。假设一个光通量 1000 流明的灯泡，平均向所有方向发光，则这个灯泡的光强是 1000/4π = 79.6 cd。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrS5LNEvJ1NkWtJV4XgnKVv7CVog9LWBANjQAR2MdJeT9GnLdBB5ErYJA/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



用来测量这些光度数据的设备叫分布光度计，这是一份专利。



分布光度计的核心结构是两根相互垂直的旋转轴。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSbHBEic4ia2lib5ZwZ6kXyBXvd3CNzZnaoIibhoqmCCaRK0f15I7v471m3g/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



垂直于水平面的旋转轴两端有光度探头和摄像头，被测光源在设备中央，纵轴绕光源旋转一圈就能测量各个角度的光度数据。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSicHIqj6S8icYqaFd0WfAAOIDRod6BZhdtj1kApYsAO45RRAzybCunPUw/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



之后把光源横向旋转，纵轴再次测量，再横向旋转，再测量，以此把光源横向旋转 360° 后，就能测出光源在各个发光平面上不同角度的发光强度。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSOjjRib3piceTMlGR0BY27iaEYkkChHiboaNic06PqMDQhLkn2ibOrynJQeiaQ/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



有了确定距离的光强数据，我们就可以画出路灯的配光曲线。



路灯的光强分布通常用 c-γ 坐标系表示，路灯是坐标系的中心点，把路灯向路面做垂线，把垂线平移就可以拉出一个 c 平面，让 c 平面围绕垂线旋转，就得到了各个角度上的 c 平面，其中 c=0° 和 c=180° 度与道路方向平行。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSGKZEIEMn5HrIJ5fj5o1Ur6YB9JQff9cWaepkEKWKvzno6tat8VUicLA/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



γ 表示光线和垂线的夹角，这样，空间中的每一个方向就都能用 c 和 γ 来确定了。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSXPpguwEfn9h7c2xjbGpYtPgpwXiadqR7dsrwpHkRgEvcW9EIUFOBRmg/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



确定一个 c 平面角度，把这个平面上每个 γ 角的光强数据带入这张由 γ 角和光强值构成的图表中（以光通量为 1000 lm 进行换算），把所有点连起来，就能得到测路灯在这个 c 平面上的配光曲线。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSKJ55ERq9JzVXcluzqFaxr3Kwfldib3E1EEX1oftoGZY2panpibPovpgQ/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



配光曲线意味着什么？



这是我们根据左上角的配光曲线渲染出来的路灯模型，这个绿色光圈上的每一个点的光强都对应着配光曲线上对应 y 角的光强值。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSEULtchZWXP0NDB5PJ7hMGVOU4lpyiaCxU5LMLkrgEykmw9J1ZcH0Fww/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



那我们现在来思考一个问题，合理的路灯配光曲线应该是什么样的？



首先，曲线应该足够平滑，不要让人感觉忽明忽暗。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSHCicvRfDvu9HD8j2PHRcybHsy7sYqibxZxx6tbWJH2Oxmb2iaibc9HribAQ/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



然后，在你距离路灯较远时，路灯应该发出更强的光，这样，你在每个位置的感受到的亮度才能差不多。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSFphDB90REGSWaFmbYkPFlDWeBpaZAMvLe6SsTVlia8OicJk4ddnBNWDg/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



最后，为了防止眩光，80 度 γ 角以上应该限制光强，这种形状也被业内称为蝙蝠翼式配光。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrShY2kHRzgohLviacJHqpJl1GoynjgAqic8oWHjH0npVowXu7FqXZaQziaA/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



根据不同的配光方式，我们可以把路灯分为三类——截光型，半截光型，非截光型。



这样分类是为了限制司机敏感角度的光线强度，防止眩光。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSDiaYu6KBxjzcIGNTtoSiceEiblYY4iakiaETcaAnX9hVJo6StIqkrjE2z0g/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



这个一份半截光型路灯的测试报告，总光通量 4646 流明，平均光强 1321 cd ，相当于 1300 支蜡烛。



但在 90° γ 角上的光强最高也不超过 30 cd，几乎感觉不到光线。而截光型对于 80/90° γ 角光强的限制会更低。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSsRUhDDa9wd9C9ytxBBDDia64OQIgf171tItictVUicapyGB6kfMEmeJCQ/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



根据住建部发布的《城市道路照明设计标准》，中国的道路照明分为三类，机动车道照明、交会区照明和人行道照明。



机动车道照明中，大于 40km/h 的主干路与快速路必须用截光型路灯，速度较低的次干路和支路可以用半截光路灯。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSZ8suiciaUzpFtiaDrzJb5GsWEkv2eMVdt9T3EmlNcDicpNiczxY1V0FjhIw/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



而路灯的类型又会影响路灯的高度、间距，不同的道路也有不同的路灯配置方案，时间有限，我们无法一一展开，感兴趣的观众可以在我们的公众号回复「路灯」获取关于路灯配置的相关规定。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSvOSLYEhtlY4XXWItKIUYrfiaJFEqacnhRqbMvyGLRha3W7iciaN81VvGA/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



今天，中国最大多数的路灯都可以被实时监控，并独立控制。



这是2017年末更新的《路灯控制管理系统》国家标准，控制系统是一个三层结构：主站层、管理层、控制层。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSITVtCM9oD36Ihic0GmEMgNwBd2amibEsJlcvXraxRstP2P6IFwMbNCNA/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



控制层是安装在路灯电源内的单灯控制器，测量路灯的电流、电压、温度，上报给管理层。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSicESgP6P2rFYzLCn4oS4KgQIZdpdfOHibdPtnlHRgpQwWBheYDRgckcg/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



管理层是一个安装在路灯变电柜里的集中控制器，采集一条路上几十根路灯的参数、运行情况、用电量等数据，通过无线网上传回主站层。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSVWzNB38fiaPVURczc3z2em0VeLibibvxKTcNUT3SD4jtuoF5d6Gv6fceQ/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



主站层将整合所有的路灯状态和数据，管理员能通过软件监控整个区域的路灯情况，并独立控制每一根路灯。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrSJKolysZU14IZicFhGfiaF0wV1XM041Xv9cq2GzzqqhvAeOeYaQ3iahMtQ/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)



随着智能控制系统的完善，未来的路灯将越来越智能。



2015 年，中国几十个城市开始陆续试点集成充电、监控、报警等功能的智能路灯。你在看路灯的时候，路灯其实也在盯着你。



![img](https://mmbiz.qpic.cn/mmbiz_gif/U6yRaDu1NaZ423eibFolOHaQ0HUCbibTrS96Wricu15Z8uNDriconDyzKQZAgyfu58s3lnOh2NgShL4mLhUbhNC2LA/640?wx_fmt=gif&tp=webp&wxfrom=5&wx_lazy=1)