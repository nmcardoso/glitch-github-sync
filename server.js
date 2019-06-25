const express = require('express')
const cmd = require('node-cmd')

const app = express()

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/views/index.html')
})

// Github webhook listener
app.get('/git', (req, res) => {
  cmd.get('bash git.sh', (err, data) => {
    if (err) return console.log(err)
    console.log(data)
    cmd.run('refresh')
    console.log('> [GIT] Updated with origin/master')
    return res.sendStatus(200)
  })
})

app.listen(process.env.PORT, () => {
  console.log(`Your app is listening on port ${process.env.PORT}`)
})
