# 贡献

我们十分欢迎你来与我们一起整理这个仓库。Fork 它，参考现在已有的内容进行修改，然后发起 pull request。如果你不确定贡献是否符合格式，没关系，我们有审稿人协助核查。如果有任何问题，可以开 issue 或者以其他联系方式联系我们。

## 编辑格式

[Vol.001](Vol.001.md) 或许是一个很好的格式范例。

由于我们使用了程序进行自动构建站点并发布，所以在这里提出一些格式要求。

### 目录结构

目前我们的仓库目录结构是这样的：

```
paperclipfans
 ├─ Sp/    # 特别节目
 ├─ Start/ # 仓库相关
 ├─ Tools/ # 自动化工具
 ├─ Vol/   # 常规节目
 └─ ...
```

请将文字稿的 Markdown 文件存放在对应位置，不要修改目录结构。对于内容还未被收录的节目（如《回形针事务所》），如有需要，可以通过 issue 或其他方式联系我们创建新的目录。

### 文件名

文件名需要符合：

```
{{节目}}.{{期数}} {{标题}}.md
```

其中的 `.` 、`(空格)` 和 `.md` 是自动构建程序的定位符，用于分割内容。所以请不要在文件名中多余地使用这些字符，会导致部署程序错误地解析。

### 文件内容

我们使用的是 Markdown 标记语言，文件内容需要遵从 Markdown 语法和 [中文文案排版指北](https://github.com/sparanoid/chinese-copywriting-guidelines) 。

除了标准 Markdown 语法外，我们还用了一些扩展语法来增强表现力：

#### Admonition

比如 [Vol.001](Vol.001.md) 中的： 

!!! abstract ""

	哔哩哔哩视频：[【回形针PaperClip】摄像头如何监控十三亿人？](https://www.bilibili.com/video/av16814286/)
	
	哔哩哔哩专栏：[摄像头如何监控十三亿人](https://www.bilibili.com/read/cv391102/)
	
	......

就是用这个实现的，使用方法参见 [Admonition - Material for MkDocs](https://squidfunk.github.io/mkdocs-material/extensions/admonition/) 。目前我们使用它来添加一些文字稿以外的文字内容。

#### Footnotes

引用说明、补充、文件和编辑者留言等时，可以使用它，比如这样[^1] 。使用方法参见 [Footnotes - Material for MkDocs](https://squidfunk.github.io/mkdocs-material/extensions/footnotes/) 。

[^1]:
	[\[Contributor\] FlyingSky-CN](https://github.com/FlyingSky-CN)：就是这样。

## 工具

`Tools` 文件夹里有一些工具，可能会方便你的本地编辑。使用方法我会稍后补充，当然你也可以尝试自己研究下。

## 贡献者

感谢各位为本仓库做出的贡献。

<!-- 程序生成贡献者列表 -->
