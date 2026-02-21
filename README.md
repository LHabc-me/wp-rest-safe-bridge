# wp-rest-safe-bridge

WordPress plugin: **REST Safe Bridge**

This plugin keeps WordPress core REST content endpoints stable by applying bypass logic only to `/wp-json/wp/v2/*`.

## Behavior
- Only affects `/wp-json/wp/v2/*`
- Does not touch `sakura/v1`, `jetpack/*`, or other namespaces
- Forces default theme in wp/v2 request context
- Removes captcha/authenticate hooks that may interfere with API publishing
- Short-circuits heavy options loading in wp/v2 context

## Version
Current version: `1.0.0`
