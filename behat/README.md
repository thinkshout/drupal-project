# How to use this folder

1. Copy `behat.local.yml.sample` to `behat.local.yml`
2. Update the `base_url`, `drupal_root`, and `drush: root` variables to match your local machine's values.
3. In the root of this repository, run `robo test` -- this will automatically pull in your local behat settings.
