Prescriptive Circle configuration:
- [ ] If you aren't getting the latest build of our container, you can force the version using the "docker: image:" in `.circle/config.yml` by adding the commit ID. You can found out the latest ID by running `docker pull thinkshout/nginx-php-fpm:php70` on your local machine. To do this, replace:

`       - image: thinkshout/nginx-php-fpm`

with

`       - image: thinkshout/nginx-php-fpm:php71`


Steps to get items to deploy to Pantheon:
- [ ] On Pantheon, set up a pantheon site
- [ ] On Pantheon, log in as "Pantheon - ThinkShout CI Bot" (found in 1password).
- [ ] On Pantheon, add "dev-team+pantheon@thinkshout.com" as a team member to the site.
- [ ] In the repo, give `env.dist` a TERMINUS_SITE and TS_HOST_REPO
- [ ] In Circle.ci, add the PANTHEON_TOKEN associated with the "Pantheon - ThinkShout CI Bot" (1password) to the circle.ci Environment variables tab: https://circleci.com/gh/thinkshout/[YOUR PROJECT]/edit#env-vars 
- [ ] On Circle, add the "Pantheon - ThinkShout CI Bot" (1password) Private-key to the circle.ci ssh permissions: https://circleci.com/gh/thinkshout/[YOUR PROJECT]/edit#ssh
- [ ] On Circle, add the project you just created to the list of builds: https://circleci.com/add-projects/gh/thinkshout
- [ ] On Circle turn on the “Auto-cancel redundant builds” option under https://circleci.com/gh/thinkshout/[YOUR-PROJECt]/edit#advanced-settings 
- [ ] In the repo (`.cicrleci/config.yml`), if you wish to run phpcs tests (you do) uncomment the "Run CS tests" commands
- [ ] In the repo (`.cicrleci/config.yml`), if you wish to deploy to pantheon for ease of testing, you can uncomment out the `-deploy` step. Note: By default this command re-installs your site with each push. If you'd like to just push code but not wipe the database, change the line from `robo pantheon:deploy --install --y` to `robo pantheon:deploy --y`
- [ ] In the repo (`.cicrleci/config.yml`), find and replace any instances of `drupal-project` in your config.yml file with the name of your repo.
