=== REST Safe Bridge ===
Contributors: alfred
Tags: rest, api, wordpress, compatibility
Requires at least: 6.0
Tested up to: 6.8
Stable tag: 1.0.0
License: GPLv2 or later

Stabilize WordPress core REST content endpoints by applying safe bypass only to /wp-json/wp/v2/*.

== Features ==
- Scope limited to /wp-json/wp/v2/* only
- Does not affect other namespaces like sakura/v1 or jetpack/*
- Forces default theme during wp/v2 requests only
- Removes captcha/authenticate hooks that may block API publishing flows
- Short-circuits heavy option loading for wp/v2 context

== Installation ==
1. WordPress Admin -> Plugins -> Add New -> Upload Plugin
2. Upload this plugin zip
3. Activate plugin
