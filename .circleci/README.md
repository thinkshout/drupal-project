Prescriptive Circle configuration:
- [ ] If you aren't getting the latest build of our container, you can force the version using the "docker: image:" in `.circle/config.yml` by adding the commit ID. You can found out the latest ID by running `docker pull thinkshout/nginx-php-fpm:php70` on your local machine. To do this, replace:

`       - image: thinkshout/nginx-php-fpm`

with

`       - image: thinkshout/nginx-php-fpm@sha256:25c3088a5f4d3581416ba15df243add03f93f1f80c96142ec7093d061e080414`

(using the appropriate hash, of course)


Steps to get items to deploy to Pantheon seem to be:
- [ ] On Pantheon, set up a pantheon site
- [ ] On Pantheon, log in as "Pantheon - ThinkShout CI Bot" (found in 1password).
- [ ] On Pantheon, add "dev-team+pantheon@thinkshout.com" as a team member to the site.
- [ ] In the repo, give env.dist a TERMINUS_SITE and TS_HOST_REPO
- [ ]  In Circle.ci, add the PANTHEON_TOKEN associated with the "Pantheon - ThinkShout CI Bot" to the circle.ci Environment variables tab:
https://circleci.com/gh/thinkshout/drupal-project/edit#env-vars
- [ ] On Circle, add the "Pantheon - ThinkShout CI Bot" Private-key to the circle.ci ssh permissions: https://circleci.com/gh/thinkshout/drupal-project/edit#ssh
- [ ] If you wish to deploy a branch to a Multidev on pantheon for eas of testing, you can uncomment out the `-deploy` step
in the config.yml (also in this directory).
