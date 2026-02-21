# wp-rest-safe-bridge

WordPress 插件：**REST Safe Bridge**

该插件仅对 `/wp-json/wp/v2/*` 启用旁路逻辑，用于稳定核心 REST 内容接口发布链路。

## 行为说明
- 仅影响 `/wp-json/wp/v2/*`
- 不触碰 `sakura/v1`、`jetpack/*` 及其他命名空间
- 在 wp/v2 请求上下文中临时切换默认主题
- 移除可能影响 API 发布的验证码认证钩子
- 在 wp/v2 场景短路重型配置加载

## 版本
当前版本：`1.0.0`
