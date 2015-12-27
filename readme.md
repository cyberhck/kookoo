## Passwordless Login

Passwordless login is a project which I'm doing for online kookoo api challenge. This project logs a user in without having to enter password.

The way it works is, it calls user's number to authorize a session.

## Release Information


This release is a Minimal Viable Product. Of course you are gonna want to change the entire thing to make use on your website, this project is only for demonstration of idea


## Server Requirements

PHP version 5.4 or newer is recommended.


## Installation

Just clone the forked repository into root of your web server, then change the ```config.php``` file inside ```application/config/config.php``` there you'd have to change base_url as per your setup. Then you'll have to change ```database.php``` inside ```/application/config/database.php``` file. Change the development variable. Please don't modify other configs while pushing to this repository.

Also ```cp index.sample.php index.php``` and modify the contents in there, also make sure your development environment is set properly

In this project, for some reason, I wasn't able to get the base_url thing working with kookoo's API, so you will also have to modify ```application/helpers/call_helper.php``` to modify the ```$url_to_call``` variable to have proper application's url

Report any concern to `Me <mailto:gautam.nishchal@gmail.com>`_, thank you.

## Contributing


Fork it and then clone your repo to the root of your webserver and setup the development environment.

Send all the pull requests to dev branch, any pull requests to master branch will ignored.

#### Getting the updated code
Set the remote to this repo: ```git remote add hackathon git@github.com:nishchalgautam/kookoo.git```

Now push all the code to your repo: ```git push -u origin dev``` and pull from the ams: ```git pull -u ams dev```

### If you have write access to this repo:

Just clone this repo on root of your web server, then setup the development environment. Switch to dev branch and commit changes, push it to dev branch, once the dev branch becomes stable enough, code will be pushed to master.

### Issue tracking
Make proper use of Github's issue tracker. Don't create issue before going through existing issues, please keep in mind that some issues may have been solved, but not gotten into master branch yet. In that case, please have patience instead of filing one more issue

### Creating new issues
Make sure that it's a relavant issue and write all the necessary steps to recreate that issue. If it's an enhancement, write about it in comment section.