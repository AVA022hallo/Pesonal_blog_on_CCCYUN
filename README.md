/blog-website
│
├── /assets               # 存放静态资源（图片、字体、视频等）
│   ├── /images           # 图片文件夹
│   └── /videos           # 视频文件夹（如果需要）
│
├── /css                  # 样式文件夹
│   ├── main.css          # 主样式文件
│   ├── layout.css        # 布局相关样式
│   └── theme.css         # 主题相关样式
│
├── /js                   # 脚本文件夹
│   ├── main.js           # 主脚本文件
│   ├── utils.js          # 工具函数脚本
│   └── blog.js           # 博客功能脚本（例如评论、点赞）
│
├── /partials             # 复用的页面模块（例如头部、尾部、侧边栏等）
│   ├── header.html       # 页面头部
│   ├── footer.html       # 页面尾部
│   └── sidebar.html      # 侧边栏
│
├── /pages                # 页面文件夹
│   ├── index.html        # 首页
│   ├── about.html        # 关于页面
│   ├── blog.html         # 博客列表页
│   ├── post.html         # 单篇文章页
│   └── contact.html      # 联系页面
│
├── /data                 # 数据存放目录（可以是JSON、Markdown等文件）
│   ├── posts.json        # 博客文章数据（若用JSON格式）
│   └── comments.json     # 评论数据
│
├── /fonts                # 存放字体文件
│   └── custom-font.ttf   # 自定义字体（如果有的话）
│
├── /config               # 配置文件夹
│   └── config.json       # 配置文件（例如博客的基础信息、API接口等）
│
├── /lib                  # 存放第三方库或自定义的工具函数
│   └── utils.js          # 工具库
│
├── /test                 # 测试文件夹（如果有单元测试）
│   └── main.test.js      # 测试文件
│
└── index.html            # 网站入口
