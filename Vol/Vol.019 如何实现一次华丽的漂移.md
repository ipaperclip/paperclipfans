
![Vol/Vol.019 如何实现一次华丽的漂移/1.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/1.gif)

# Vol.019 如何实现一次华丽的漂移

每个看过《头文字D》的男孩都希望自己能像主角藤原拓海一样开车在弯道漂移。

作为一种华丽的驾驶技巧，漂移的基本原理是让车辆的后轮失去绝大部分侧向抓地力，然后依靠前轮转向把车尾往弯道外侧甩，最终做到车身侧滑过弯。

![Vol/Vol.019 如何实现一次华丽的漂移/2.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/2.gif)

这个过程是如何实现的呢？

首先，要想让后轮失去抓地力，必须先改变车轮的滑动率。

滑动率代表了车轮前进时有多大程度靠滚动，多大程度靠滑动，可以通过车速以及车轮的半径、转速计算出来。

![Vol/Vol.019 如何实现一次华丽的漂移/3.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/3.gif)

正常滚动前进的车轮，滑动率为 0% ；而急刹车时，车轮不动，但仍干擦着地面继续前进，滑动率为 100% 。当然更多时候，车轮处于“又滚又滑”的状态，滑动率也就在 0%\~100% 之间。

![Vol/Vol.019 如何实现一次华丽的漂移/4.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/4.gif)

滑动率会影响车轮与地面的附着系数，也就是抓地力。滑动率越高，车轮的侧向力附着系数越低，也就越容易侧滑。

![Vol/Vol.019 如何实现一次华丽的漂移/5.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/5.gif)

而提高滑动率的关键就在于改变车轮转速，可以通过紧急刹车或者猛踩油门两种途径实现。这两种途径也分别对应了目前最常见的两种漂移方式：手刹漂移和动力漂移。

![Vol/Vol.019 如何实现一次华丽的漂移/6.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/6.gif)

手刹漂移就是在车辆高速入弯前先踩刹车减速并降低档位，然后拉起手刹，同时向弯道内侧猛切方向盘，这样就能让后轮抱死失去抓地力，车尾向弯道外侧甩出。当车辆开始漂移就放下手刹，并反打方向盘调整角度，当车身指向出弯方向时，就可踩油门加速，驶出弯道。

![Vol/Vol.019 如何实现一次华丽的漂移/7.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/7.gif)

动力漂移则是在车辆入弯前先减速降档，然后过弯时朝弯道内侧猛切方向盘并猛踩油门，让后轮打滑甩出，过弯期间需要调整油门与方向盘修正角度，快出弯时反打方向盘，收起油门降低车速，恢复抓地力后驶出弯道。

![Vol/Vol.019 如何实现一次华丽的漂移/8.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/8.gif)

需要注意的是，手刹漂移恢复速度较慢，难以连续漂移，而动力漂移能做出蛇形或圆形的连续漂移，漂移的距离也更长。

![Vol/Vol.019 如何实现一次华丽的漂移/9.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/9.gif)

此外，前驱车由于后轮没有动力，只能做手刹漂移，而四驱车和后驱车则能实现两种漂移。

![Vol/Vol.019 如何实现一次华丽的漂移/10.png](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/10.png)

不过，也不是所有车都能漂移，一般的私家车都有电子安全系统，用于防止车轮抱死、打滑以及车辆甩尾、侧滑等危险状况出现，要想漂移必须先关闭这些系统。

![Vol/Vol.019 如何实现一次华丽的漂移/11.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/11.gif)

更专业的漂移车还要对发动机、差速器、底盘、悬挂、制动、车胎等各方面做大幅的改装与调校。

当然，要想学会漂移，最重要的还是练习。今天，即便是毫无经验的新手司机，都可以去赛车学校花上万把块学习漂移技巧。

![Vol/Vol.019 如何实现一次华丽的漂移/12.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/12.gif)

可是很少有人知道，真正的赛车手在过弯时通常并不会选择漂移，因为漂移会降低车速，在普通的水泥或柏油路面，让轮胎紧紧抓住地面才是最快的过弯方式。

![Vol/Vol.019 如何实现一次华丽的漂移/13.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/13.gif)

除非是雨雪天气或者沙土赛道，本来就难以保持轮胎抓地力时，选择漂移过弯才可能有优势。至少在竞速比赛中，漂移远没有《头文字D》所表现的那样神乎其神。

但这也并不妨碍漂移过弯成为每个追风少年的执念，哪怕只有一辆自行车，也要演一出速度与激情。

![Vol/Vol.019 如何实现一次华丽的漂移/14.gif](https://cdn.jsdelivr.net/gh/just-prog/static/image/Vol/Vol.019%20如何实现一次华丽的漂移/14.gif)
