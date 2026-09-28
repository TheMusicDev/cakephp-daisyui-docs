# cakephp-daisyui-docs

Live documentation for [themusicdev/cakephp-daisyui](https://github.com/TheMusicDev/cakephp-daisyui): a CakePHP 5 app with one page per component, where each page's demo is rendered and its shown source is the code that ran.

## Running locally

```bash
composer install
bin/cake server -p 8765
```

Then open <http://localhost:8765>.

The app expects the plugin repo checked out next to this one at `../cakephp-daisyui` (a Composer path repository — see `composer.json`).

How pages are built is described in `../project-planning/project-overview.md` §7.