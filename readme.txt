=== REST Safe Bridge ===
Contributors: alfred
Tags: rest, api, wordpress, compatibility
Requires at least: 6.0
Tested up to: 6.8
Stable tag: 1.0.0
License: GPLv2 or later

仅对 /wp-json/wp/v2/* 启用安全旁路，用于稳定 WordPress 核心 REST 内容接口。

== 功能 ==
- 作用范围仅限 /wp-json/wp/v2/*
- 不影响 sakura/v1、jetpack/* 等其他命名空间
- 仅在 wp/v2 请求期间临时切换默认主题
- 移除可能阻断 API 发布流程的验证码认证钩子
- 在 wp/v2 场景短路重型配置加载，降低异常风险

== 安装 ==
1. 进入 WordPress 后台 -> 插件 -> 安装插件 -> 上传插件
2. 上传本插件压缩包
3. 启用插件
