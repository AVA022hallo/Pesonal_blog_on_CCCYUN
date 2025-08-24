/blog-website
│
├── /assets               # 静态资源文件夹（图片、字体、视频等）
│   ├── /images           # 图片文件夹
│   ├── /videos           # 视频文件夹（如果需要）
│   └── /fonts            # 字体文件夹
│       └── custom-font.ttf   # 自定义字体（如果有的话）
│
├── /css                  # 样式文件夹
│   ├── /base             # 基础样式（通用样式、重置样式）
│   │   └── reset.css     # 样式重置文件
│   ├── /layout           # 布局相关样式
│   │   └── layout.css    # 布局样式
│   ├── /theme            # 主题相关样式
│   │   └── theme.css     # 主题样式
│   └── main.css          # 主样式文件（导入其他样式文件）
│
├── /js                   # 脚本文件夹
│   ├── /core             # 核心功能脚本
│   │   ├── main.js       # 主脚本文件
│   │   └── utils.js      # 公共工具函数脚本
│   ├── /blog             # 博客功能脚本（例如评论、点赞）
│   │   └── blog.js       # 博客功能脚本
│   └── /vendor           # 第三方库文件夹（如有）
│       └── jquery.js     # 例如jQuery库文件
│
├── /partials             # 页面模板模块（例如头部、尾部、侧边栏等）
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
├── /data                 # 数据存放目录（JSON、Markdown等文件）
│   ├── /json             # JSON 数据
│   │   ├── posts.json    # 博客文章数据
│   │   └── comments.json # 评论数据
│   └── /markdown         # Markdown 数据（如果有）
│       └── example.md    # 示例 Markdown 文件
│
├── /config               # 配置文件夹
│   └── config.json       # 配置文件（例如博客基础信息、API接口等）
│
├── /lib                  # 存放自定义工具库或第三方库
│   └── utils.js          # 工具库
│
├── /test                 # 测试文件夹（如果有单元测试）
│   └── main.test.js      # 测试文件
│
├── index.html            # 网站入口
└── .gitignore            # Git忽略文件（避免上传不必要的文件）
