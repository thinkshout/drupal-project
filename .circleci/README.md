Steps to get items to deploy to Pantheon seem to be:
- [ ] On Pantheon, set up a pantheon site
- [ ] In the repo, give env.dist a TERMINUS_SITE and TS_HOST_REPO
- [ ] On Pantheon, create a Machine Token to be used by the circle.ci environment to log into the machine.

![screen shot 2017-06-04 at 9 18 04 am](https://cloud.githubusercontent.com/assets/999525/26763379/d8156718-4906-11e7-94ff-1364ee5eda7e.png)

- [ ]  In Circle.ci, add a PANTHEON_TOKEN to the circle.ci Environment variables tab:
https://circleci.com/gh/thinkshout/drupal-project/edit#env-vars
- [ ] On your local machine, generate a private key (be careful not to overwrite your existing keys) and add it to the circle.ci ssh permissions: https://circleci.com/gh/thinkshout/drupal-project/edit#ssh
- [ ] On your local machine, get the public key that goes along with the private key you just created, and add that to your pantheon account 

![screen shot 2017-06-04 at 9 17 38 am](https://cloud.githubusercontent.com/assets/999525/26763383/df9d21ec-4906-11e7-8298-2842e203e945.png)

- [ ] If you wish to deploy a branch to a Multidev on pantheon for eas of testing, you can comment out the `-deploy` step
in the config.yml (also in this directory).
