const mymodule = require('./mymodule.js');
const fs = require('fs');
let path = process.argv[2];
let type = process.argv[3];

mymodule(path, type, function (err, list) {
    if (err)
      return console.error('There was an error:', err)
   
    list.forEach(function (file) {
      console.log(file)
    })
  })