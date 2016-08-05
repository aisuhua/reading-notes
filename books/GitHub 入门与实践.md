# GitHub 入门与实践

## 目录

```
封面
数字版权声明
作者简介
扉页
版权页
译者序
序言
本书结构
目录
    第1章　欢迎来到GitHub的世界
		1.1　什么是GitHub
            GitHub公司与octocat
			并不只是Git仓库的托管服务
			GitHub的使用情况
				专栏：GitHub与Git的区别
		1.2　使用GitHub会带来哪些变化
			协作形式变化
				在开发者之间引发化学反应的Pull Request Request
				对特定用户进行评论
				GitHub Flavored Markdown
				专栏：还可以这样写!!
			能看到更多其他团队的软件
			与开源软件相同的开发模式
		1.3　社会化编程
		1.4　为什么需要社会化编程
			不要闭目塞听，要接触不同的文化
			会写代码的程序员更受青睐
			GitHub最大的特征是“面向人”
		1.5　GitHub提供的主要功能
			Git仓库
			Organization
			Issue
			Wiki
			Pull Request
				专栏：GitHub上受到瞩目的软件
		1.6　小结
			参考资料
	第2章　Git的导入
		2.1　诞生背景
		2.2　什么是版本管理
			集中型与分散型
				集中型
				分散型
			集中型与分散型哪个更好
		2.3　安装
			Mac与Linux
			Windows
				组件的选择
				设置环境变量
				换行符的处理
				Git Bash
			本书所用的环境
		2.4　初始设置
			设置姓名和邮箱地址
			提高命令输出的可读性
		2.5　小结
	第3章　使用GitHub的前期准备
		3.1　使用前的准备
			创建账户
			设置头像
			设置SSH Key
			添加公开密钥
			使用社区功能
		3.2　实际动手使用
			创建仓库
				Repository name
				Description
				Public、Private
				Initialize this repository with a README
				Add .gitignore
				Add a license
			连接仓库
				README.md
				GitHub Flavored Markdown
			公开代码
				clone已有仓库
				编写代码
				提交
				专栏：公开时的许可协议
				进行push
		3.3　小结
	第4章　通过实际操作学习Git
		4.1　基本操作
			git init——初始化仓库
			git status——查看仓库的状态
			git add——向暂存区中添加文件
			git commit——保存仓库的历史记录
				记述一行提交信息
				记述详细提交信息
				中止提交
				查看提交后的状态
			git log——查看提交日志
				只显示提交信息的第一行
				只显示指定目录、文件的日志
				显示文件的改动
			git diff——查看更改前后的差别
				查看工作树和暂存区的差别
				查看工作树和最新提交的差别
		4.2　分支的操作
			git branch——显示分支一览表
			git checkout -b——创建、切换分支
				切换到feature-A分支并进行提交
				切换到master分支
				切换回上一个分支
			特性分支
			主干分支
			git merge——合并分支
			git log --graph——以图表形式查看分支
		4.3　更改提交的操作
			git reset——回溯历史版本
				回溯到创建feature-A分支前
				创建fix-B分支
				推进至feature-A分支合并后的状态
			消除冲突
				查看冲突部分并将其解决
				提交解决后的结果
			git commit --amend——修改提交信息
			git rebase -i——压缩历史
				创建feature-C分支
				修正拼写错误
				更改历史
				合并至master分支
		4.4　推送至远程仓库
			git remote add——添加远程仓库
			git push——推送至远程仓库
				推送至master分支
				推送至master以外的分支
		4.5　从远程仓库获取
			git clone——获取远程仓库
				获取远程仓库
				获取远程的feature-D分支
				向本地的feature-D分支提交更改
				推送feature-D分支
			git pull——获取最新的远程仓库分支
		4.6　帮助大家深入理解Git的资料
			Pro Git
			LearnGitBranching
			tryGit
		4.7　小结
	第5章　详细解说GitHub的功能
		5.1　键盘快捷键
		5.2　工具栏
			关于UI
				①LOGO
				②Notifications
				③搜索窗口
				④Explore
				⑤Gist
				⑥Blog
				⑦Help
				⑧头像、用户名
				⑨Create a new...
				⑩Account settings
				⑪Sign out
		5.3　控制面板
			关于UI
				①News Feed
				②Pull Requests
				③Issues
				④Stars
				⑤Broadcast
				⑥Repositories you contribute to
				⑦Your Repositories
		5.4　个人信息
			关于UI
				①用户信息
				②Popular Repositories
				③Repositories contributed to
				④Public contributions
				⑤Contribution Activity
				⑥Repositories
				⑦Public Activity
		5.5　仓库
			关于UI
				①用户名（组织名）/仓库名
				②Watch/Star/Fork
				③Code
				④Issue
				⑤Pull Requests
				⑥Wiki
				⑦Pulse
				⑧Graphs
				⑨Network
				⑩Settings
				⑪SSH clone URL
				⑫Clone in Desktop
				⑬Download ZIP
				a commits
				b branches
				c releases
				d contributors
				e Compare & review
				f branch
				g path
				h Fork this project and Create a new file
				i files
			文件的相关操作
				专栏：通过部分名称搜索文件
			查看差别
				查看分支间的差别
				查看与几天前的差别
				查看与指定日期之间的差别
		5.6　Issue
			简洁且表现力丰富的描述方法
				语法高亮
				添加图片
			添加标签以便整理
			添加里程碑以便管理
				专栏：了解贡献时的规则！
			Tasklist语法
			通过提交信息操作Issue
				在相关Issue中显示提交
				Close Issue
			将特定的Issue转换为Pull Request
		5.7　Pull Request
			专栏：获取diff格式与patch格式的文件
			Conversation
				专栏：引用评论
			Commits
				专栏：在评论中应用表情
			Files Changed
		5.8　Wiki
			Pages
			History
				专栏：在Wiki中显示侧边栏
		5.9　Pulse
			active pull requests
			active issue
			commits
			Releases published
			Unresolved Conversations
		5.10　Graphs
			Contributors
			Commit Activity
			Code Frequency
			Punchcard
		5.11　Network
		5.12　Settings
			Options
				①Settings
				②Features
				③GitHub Pages
				④Danger Zone
			Collaborators
			Webhooks & Services
			Deploy Keys
		5.13　Notifications
		5.14　其他功能
			GitHub Pages
			GitHub Jobs
			GitHub Enterprise
			GitHub API
		5.15　小结
			专栏：在Mac的通知中心查看GitHub的Notifications
	第6章　尝试Pull Request
		6.1　Pull Request的概要
			什么是Pull Request
			Pull Request的流程
		6.2　发送Pull Request前的准备
			查看要修正的源代码
			Fork
			clone
			branch
				为何要在特性分支中进行作业
				确认分支
				创建特性分支
			添加代码
			提交修改
			创建远程分支
		6.3　发送Pull Request
		6.4　让Pull Request更加有效的方法
			在开发过程中发送Pull Request进行讨论
			明确标出“正在开发过程中”
			不进行Fork直接从分支发送Pull Request
		6.5　仓库的维护
			仓库的Fork与clone
			给原仓库设置名称
			获取最新数据
		6.6　小结
	第7章　接收Pull Request
		7.1　采纳Pull Request的方法
		7.2　采纳Pull Request前的准备
			代码审查
			查看图片的差别
				2-up
				Swipe
				Onion Skin
				Difference
			在本地开发环境中反映Pull Request的内容
				将接收方的本地仓库更新至最新状态
				获取发送方的远程仓库
				创建用于检查的分支
				合并
				删除分支
				专栏：如何提升代码管理技术
		7.3　采纳Pull Request
			合并到主分支
			push修改内容
		7.4　小结
			专栏：请协助我们共同创建互相学习的社区
	第8章　与GitHub相互协作的工具及服务
		8.1　hub命令
			概要
			安装
				安装
				确认运行情况
				设置别名
				实现shell上的功能补全
				~/.config/hub
			命令
				hub clone
				hub remote add
				hub fetch
				hub cherry-pick
				hub fork
				hub pull-request
				hub checkout
				hub create
				hub push
				hub browse
				hub compare
				专栏：让GitHub Enterprise支持hub命令
		8.2　Travis CI
			概要
			实际尝试
				编写配置文件
				检测配置文件是否有问题
				与GitHub集成
				将Travis CI的结果添加至README.md
		8.3　Coveralls
			概要
			安装
				注册
				添加对象仓库
				编写配置文件
				添加gem
				查看报告
		8.4　Gemnasium
		8.5　Code Climate
		8.6　Jenkins
			概要
			安装
			创建bot账户
			bot账户的权限设置
				对象为个人账户时
				对象为Organization账户时
				检查设置
			给Jenkins设置SSH密钥
				初次使用Jenkins时
				已经在使用Jenkins时
			GitHub pull request builder plugin的安装
			Git plugin 的设置
			Github Pull Requests Builder 的设置
				Github server api URL
				Access Token
				Admin list
			job 的创建与设置
				GitHub project
				源码管理
				构建触发器
				构建
			通知结果
				测试执行中的状态
				Failed
				All is well
				commit status
			通过评论进行控制
				执行任务
				添加至White list
				重新执行任务
				变更指定评论
		8.7　小结
			专栏：用 Coderwall 生成 GitHub 上的个人信息
	第9章　使用GitHub的开发流程
		9.1　团队使用GitHub时的注意事项
			一切从简
				项目管理工具与GitHub的区别
				项目管理工具与GitHub相异的原因
			不Fork仓库的方法
		9.2　GitHub Flow——以部署为中心的开发模式
		9.3　GitHub Flow的流程
			随时部署，没有发布的概念
			进行新的作业时要从master分支创建新分支
			在新创建的分支中进行提交
			定期push
			使用Pull Request
			务必让其他开发者进行审查
			合并后立刻部署
		9.4　实践GitHub Flow的前提条件
			部署作业完全自动化
				使用部署工具
				通过Web界面进行部署的工具
				导入开发时的注意事项
			重视测试
				让测试自动化
				编写测试代码，通过全部测试
				维护测试代码
		9.5　模拟体验GitHub Flow
			Fizzbuzz的说明
			添加新功能
			创建新的分支
				如果尚未clone仓库
				如果之前clone过仓库
				创建特性分支
			实现新功能
			创建Pull Request
			接收反馈
			修正缩进
			添加测试
			培育Pull Request
			Pull Request被合并
		9.6　团队实践GitHub Flow时的几点建议
			减小Pull Request的体积
			准备可供试运行的环境
			不要让Pull Request中有太多反馈
			不要积攒Pull Request
		9.7　GitHub Flow的小结
		9.8　Git Flow——以发布为中心的开发模式
			便于理解的标准流程
			有时显得过于复杂
		9.9　导入Git Flow前的准备
			安装git-flow
				Mac下的安装
				Linux下的安装
				确认运行状况
			仓库的初始设置
				创建仓库
				进行git flow的初始设置
				在远程仓库中也创建develop分支
		9.10　模拟体验Git Flow
			master分支与develop分支的区别
				master分支
				develop分支
			在feature中进行的工作
				创建分支
				在分支中进行作业
			发送Pull Request
			通过代码审查提高代码质量
			更新本地的develop分支
			在release分支中进行的工作
				专栏：设置默认分支
				创建分支
				分支内的工作
				进行发布与合并
				查看版本标签
			更新到远程仓库
			在hotfix分支中进行的工作
				创建分支
				创建标签和进行发布
				从hotfix分支合并至develop分支
		9.11　Git Flow 的小结
			专栏：版本号的分配规则
	第10章　将GitHub应用到企业
		10.1　将世界标准的开发环境引入企业现场
			企业引入GitHub的好处
			使用Organization
			确认Github的安全性
			注意维护时间
			查看故障信息
		10.2　GitHub Enterprise
			概述
			引入的好处
			引入的弊端
			适合引入GitHub Enterprise的几种情况
				源代码不可外传
				专栏：将GitHub的仓库作为Subversion仓库使用
				希望维护与故障时间可控
		10.3　能实现Git托管的软件
			专栏：Bitbucket
		10.4　小结
	附录A　支持GitHub的GUI客户端
		A.1　GitHub for Mac，GitHub for Windows
		A.2　SourceTree
	附录B　通过Gist轻松实现代码共享
		B.1　Gist的特点
		B.2　创建Gist
			UI讲解
				①Gist description...
				②name this file...
				③language
				④ACE Editor
				⑤文件
				⑥Add another File
				⑦Create Secret Gist
				⑧Create Public Gist
		B.3　查看Gist
			Gist的菜单
				①Gist Detail
				②Revisions
				③Download Gist
				④Clone this gist
				⑤Embed this gist
				⑥Link to this gist
			文件的菜单
		B.4　Your Gists
		B.5　小结
	版权声明
关注图灵
看完了
```