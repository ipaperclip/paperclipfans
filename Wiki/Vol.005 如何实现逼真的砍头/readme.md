<div align=“center”>
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101201353.gif">
</div>

<br />

# Vol.005 如何实现逼真的砍头

视频：[Vol.005 (喜馬拉雅)如何实现逼真的砍头 | 回形针](http://dweb.link/ipfs/QmZwFjoJRVF6bKCwwSZQsYCTJD8nGKTkT9xfpWxqGnTGzK/Vol.005%20%28%E5%96%9C%E9%A6%AC%E6%8B%89%E9%9B%85%29%E5%A6%82%E4%BD%95%E5%AE%9E%E7%8E%B0%E9%80%BC%E7%9C%9F%E7%9A%84%E7%A0%8D%E5%A4%B4%20%7C%20%E5%9B%9E%E5%BD%A2%E9%92%88.mp4)

IPFS：QmX6xvCoor7KA9YeH3psSfdCor8Pd5yZ5WqPwLDLyRGHVV

---

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101201516.jpeg">
</div>

<br />

电影史上的第一次砍头出现在 1895 年。

通过在拍摄中暂停摄影机，把演员替换成人偶，完成了这部名为《苏格兰女王玛丽的行刑》的短片。自此，电影中的砍头镜头开始不断进化，随着特效化妆和电脑合成的完善趋于逼真。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101201547.gif">
</div>

<br />

设计一次砍头有三个部分：人头模型、喷血状态、头身分离。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101201648.jpeg">
</div>

<br />

制作人头模型时，业界通常采用真人倒模。倒模时，演员要戴上光头套，抹上藻酸盐，再贴上石膏绷带固定，等藻酸盐凝固后割开取下。然后往藻酸盐模具里灌入石膏就可制成石膏母模。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101201750.gif">
</div>

<br />

现在更先进的技术是用 3D 扫描直接打印出母模，十分方便快捷，不过更传统也更细腻的做法是靠雕塑师手工制作黏土母模，但这种方式高度依赖雕塑师的手艺。

有了母模之后，需要用雕塑泥分离出前半部，贴上玻璃纤维，刷上凝胶，凝固成最终的模具，母模后半部及底部的模具也是这样制成。紧紧贴合三块模具，倒入调好颜色的硅胶，凝固后拆开，就是一颗硅胶人头。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101201840.gif">
</div>

<br />

这颗头还要进一步化妆，并植入牙齿、眼球和毛发，脖子的切面处也要再精细处理。

<details>
<summary>内容较血腥，展开查看</summary>
<pre><code>
<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101201922.gif">
</div>
</code></pre>
</details>

<br />

然而这样一颗人头要耗费数月的制作，造价也不菲，相比之下，喷血特效就简单便宜得多。

现在市面上已经有现成的特效假血，物美价廉。假血的配方千差万别，最经典的是好莱坞著名特效化妆师 Dick Smith 发明的糖浆血，主要由玉米糖浆、水、奶精、卵磷脂以及红黄蓝三种可食用色素调配而成。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101205739.gif">
</div>

<br />

电影《教父》《出租车司机》《杀死比尔》里就是用这种假血。值得一提的是，早期黑白电影因为没有颜色，电影制作者干脆直接用巧克力糖浆代替。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101205834.gif">
</div>

<br />

有了假血之后，我们需要了解一下真实的喷血状态。为此，我们找来了科普作家刘大可。

人的颈部内埋着两条粗大的颈总动脉，每次心跳通过的血量约为 100 毫升。砍头后，两条颈总动脉会立即喷射出两条血柱，达一米多高。这种情形大约会持续 7、8 秒，然后随着血压降低很快变为流血状态。

喷血的效果主要由气压罐来实现。气压罐里装着假血，接出一条软管，隐藏到假人体内，再布置到颈总动脉的位置，按下气阀，就可以喷出假血。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101210000.jpeg">
</div>

<br />

最后是头身分离的镜头制作。

大部分电影会通过剪辑利用几组镜头间接呈现砍头场面，略过斩断的瞬间。

但也有影视剧，例如 98 版《水浒传》用砍假人直接展现砍头过程，但粗糙的道具很容易穿帮，只能一带而过。而有了电脑合成图像技术之后，电影制作者终于能流畅地呈现砍头了。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101210134.gif">
</div>

<br />

以电影《最后的武士》为例，先拍摄武士挥空刀，被砍演员戴着绿色头罩倒下的镜头，接着拍摄武士挥真刀砍断一颗架在绿色柱子上的假头，假头掉落的镜头。后期制作时会抠出绿色的图像，合成两组镜头，展现完整的砍头瞬间。电视剧《权力的游戏》采用的也是类似的做法。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101210201.gif">
</div>

<br />

当前影视作品中的砍头戏普遍采用实景拍摄结合电脑特效，86 版《西游记》中孙悟空被砍头的片段即是用蓝屏抠像制成，效果虽拙劣，但在当时已属先进，随着技术发展，2006 年的电影《斯巴达 300》已经敢用慢镜头来强调砍头瞬间。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101210236.gif">
</div>

<br />

值得注意的是，电脑特效制作砍头场面是否逼真，关键在于算法，以皮肤的质地为例以皮肤的质地为例，相比于以往的偶级反射模型，现在的量子化扩散模型更加精细。这种模型能保留更多皮肤细节，让电脑渲染出来的人物更加逼真。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101210325.jpeg">
</div>

<br />

然而，足够逼真的电脑特效十分昂贵。为此，一些影视剧不得不另辟蹊径，94 版《三国演义》在拍摄关羽斩韩福时，就把演员埋在土里，只露出脑袋，以此表现人头落地，可以说是名副其实的土办法了。

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/ipaperclip/static/img/20200101210441.jpeg">
</div>
