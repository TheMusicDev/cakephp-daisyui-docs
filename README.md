# cakephp-daisyui-docs

Live documentation for [themusicdev/cakephp-daisyui](https://github.com/TheMusicDev/cakephp-daisyui): a CakePHP 5 app with one page per component, where each page's demo is rendered and its shown source is the code that ran.

## Running locally

```bash
composer install
bin/cake server -p 8765
```

Then open <http://localhost:8765>.

The plugin comes from Packagist (`themusicdev/cakephp-daisyui` ^1.0). To try unreleased plugin changes locally, point Composer at a checkout next to this repo:

```sh
composer config repositories.plugin '{"type": "path", "url": "../cakephp-daisyui", "options": {"symlink": true, "versions": {"themusicdev/cakephp-daisyui": "1.x-dev"}}}'
composer update themusicdev/cakephp-daisyui
```

Don't commit that change to `composer.json` / `composer.lock`.

How pages are built is described in `../project-planning/project-overview.md` §7.