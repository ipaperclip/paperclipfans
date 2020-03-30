# Vol.039 如何用机器人打销售电话？
今天的呼叫中心是一项非常成熟的产业，在工信部审批发放的《增值电信业务经营许可证》中，呼叫中心被归类为第二类增值电信业务。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zCRWCakANz9zZ2LQ6mwA71of625aKT02piaTLUPFZRWykUhPia1VFNfuw.gif)

2018 年，中国有近 6000 家企业拥有呼叫中心业务许可，这些公司将为中国上百万电话销售员提供技术支持。

在阿里云，你可以选择 199 元每月接听免费的包月坐席，或者是免月费每分钟 1 毛 5 的按需付费方案。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zzq8a1ia8nXD0KC40SHTJCA8SXSzpxvx0UXXr6zlUgaxyxtk9p1nyFUw.png)

平台会赠送你一个免费号码，支持至少 20 个销售同时打电话。

即便有相对精准的目标号码，电话销售的转化率也仍然非常低。即便打出 100 通电话，可能也只有 1 个人需要贷款。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zno5VcwicvFoYHrDUM7pFHdR200ic4GPkQ4AkP5Jv9kGm576xfriczreyw.gif)

此时的销售策略不是把时间用在说服不需要贷款的人贷款，而是以更快速高效的方式找到有贷款需求的人，获取进一步沟通的机会。

在这一点上，人的效率远不如机器。于是，越来越多的推销电话交给了机器拨打，而你很可能还没有意识到。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zApyqpaXAaLOVvCO0Sx6n7RjRicVn2GpicSO1WIhZPicN2yyqlWVUDZ2Vg.gif)

电销机器人的本质是一个复读机，实现技术非常简单——就是根据关键词播放录音。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zpBTRgj4FRLqgqI5uErcchK7XCkic0rnNc0S7VrKiacpJo8TZUWU7icWFA.gif)

2 万元，就能接入一家顶级语音识别供应商的 api。

正常环境下，语音识别可以做到 98% 的识别率和 0.2 秒内的延迟，但语音通话会压缩音质，电销机器人的平均响应时间在 1 秒左右。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zxvTpTtRia737MtdWwdFPIQN81FzHBlcjOazWAw8jSnnuUkZ1EvLJeVA.png)

机器人的声音演出由真人完成。

录音的精髓在于语气，录制时通常会要求声优刻意的加入各种语气词，让效果更自然。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zWZWMuM1TUX8lWjU8pLQqYosxtOf5wGhsbpiaibKwicyKG7tk4ickKicZBNw.gif)

以上是技术基础，话术才是电销机器人灵魂。

为了让你更直观的理解电销机器人的工作逻辑，我们设计了一套回形针的销售话术。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zGtiaHZyzX93k9grqRfYFSMgdOF0FN3vibYVaGoK4yf4usgQgMBo1Vzgw.gif)

一般的主线剧情会分为四个阶段：开场白，业务介绍，邀约，结束。

开场白需要清晰简洁的介绍你的业务。

每播放一段录音，机器人就会根据关键词判断对方的状态，归类为四种：肯定、否定、未识别、特殊。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zMy7o33kyGqQ7Js8xiaicJJSHiaK2cQAZ6qIDv00AYGWhqOU2ZYbqDq3Iw.gif)

四种不同的状态会产生不同的分支，肯定和未识别都会进入下一阶段：

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zEuBz80k9JEA7HIaWaiaeTwdDE5ZLCsqd4QDZCDV3fQicrfKhxrRDAryQ.gif)

如果开场白和业务介绍都顺利完成，就会进入到邀约阶段，让真人进一步跟进。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zUnvKNao6hWiaspS1XNibmFEq350sTk9rEHBEaJicAdqkeD3UBLfiaIImsw.gif)

否定会进入挽回流程，再次否定会主动挂断：

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zFasewA3fgTme0uwCLc6ibdVOEGN5KOaA611ILpONUMp585CICsEccAg.gif)

其他关键词会触发预设的知识库录音，进入支线剧情。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zMePwsh5IU63lrAqibFl7zCroP6IE9DX4zTUCCv1Y2Jnra98CibvLH7dA.gif)

部分关键词还会触发多轮对话。

完成话术后，你可以在后台训练你的机器人，发现问题，不断更新。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zGnNFHOhhaovGUEAaVRTicibtP8ogwmGXU8dCUZZQ3OHGx8WcdicEtsdGA.gif)

电销机器人的每一次通话，都会根据对话轮次，通话时间，把客户分为 A-F 六个等级，并储存录音，方便销售进一步跟进。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zrZpK9ShibChHlXiadYW9RClycfibeqqAqGRuAYzzV4y7A4vYy7rCyMJSA.gif)

在人人都能轻松配置电销机器人的今天，绝大多数人类电话销售都将逐渐被机器人替代，所以，别再对电话那头的小姐姐抱有幻想了，大概率只是个复读机而已。

![img](https://paperclip.host/static/U6yRaDu1NaYxaBecU69elAIQnehqyI8zgMn0PYkYVKts50eib9ZibuzXB2RxIPy5zwP51lBIvGBQlWsI2aFdtqgQ.gif)

!!! note "该文件编辑日志"

	* 	Mar 29, 2020.
		By [parozhao](https://github.com/parozhao)
	
			创建文件 & Markdown 格式化
