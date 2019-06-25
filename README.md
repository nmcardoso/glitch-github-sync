## Glitch Github Sync

### Instructions

1. **Copy this repo**
  
    Fork this repository and clone the forked repository to local machine.

1. **New Glitch project**
  
    Create new Glitch project based on forked github repo url.

    ![New Glitch Project](https://i.imgur.com/JnvKxkW.png)

1. **Setup .env file**
  
    On Glitch project, create a .env file with the following keys: `GITHUB_URL` and `GITHUB_SECRET`.
    
    ![Setup .env file](https://i.imgur.com/FHICVo4.png)

1. **Setup Webhook**
  
    On Github forked repo settings, create a new webhook.

    ![Create Webhook](https://i.imgur.com/PfS29SZ.png)

    And congfigure the _Payload URL_ to point to `https://<YOUR_GLITCH_PROJECT>.glitch.me/git`, change the _Content Type_ to `application/json` and use the same value of `GITHUB_SECRET` of .env file in _Secret_ field.

    ![Setup Webhook](https://i.imgur.com/GdWiTvC.png)

1. **All done**
  
    Now, on your local repo, make a change in code and push to github. The glitch project will be updated automatically.
