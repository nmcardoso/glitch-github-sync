## Glitch Github Sync

### Introduction

The main ideia of this project is develop your Glitch project using your prefered development tools (code editor, plugins, etc) with a code versioning (git).

### How it works

The sync works in both ways, but the default is **Github -> Glitch**.

#### Sync Github -> Glitch

Just make a `git push` to Github repository. The Glitch repository will be updated automaticaly.

#### Sync Glitch -> Github

Export your Glitch repository to Github. This will add a new _glitch_ branch on your Github repository. Then, merge _glitch branch_ to _master_.

### Instructions

1. **Copy this repo**
  
    Fork this repository and clone the forked repository to local machine.

1. **New Glitch project**
  
    Create new Glitch project based on forked github repo url.

    ![New Glitch Project](https://i.imgur.com/JnvKxkW.png)

1. **Setup .env file**
  
    On Glitch project, create a .env file with the following keys: `GITHUB_URL` and `GITHUB_SECRET`. To generate your `GITHUB_SECRET` you can use a tool like [this](https://randomkeygen.com/).

    ![Setup .env file](https://i.imgur.com/FHICVo4.png)

1. **Setup Webhook**
  
    On Github forked repo settings, create a new webhook.

    ![Create Webhook](https://i.imgur.com/PfS29SZ.png)

    And congfigure the _Payload URL_ to point to `https://<YOUR_GLITCH_PROJECT>.glitch.me/git`, change the _Content Type_ to `application/json` and use the same value of `GITHUB_SECRET` of .env file in _Secret_ field.

    ![Setup Webhook](https://i.imgur.com/GdWiTvC.png)

1. **All done**
  
    Now, on your local repo, make a change in code and push to github. The glitch project will be updated automatically.

### Working sample

[![Sample](https://i.imgur.com/S8FtqaW.gif)](https://imgur.com/K4vbdnP)

Click on the image or [here](https://imgur.com/K4vbdnP) to see the video in better quality and normal speed.
