const fs = require('fs');
var count = 0;
fs.readFile(process.argv[2], function lines(err, fileContents) {
    const str = fileContents.toString();
    let split = str.split('\n');
    count = (split.length - 1);
    console.log(count);
})
