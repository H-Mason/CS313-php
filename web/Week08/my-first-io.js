const fs = require('fs');
let path = process.argv[2];
let contents = fs.readFileSync(path);
const str = contents.toString();
let split = str.split('\n');
let count = (split.length - 1);
console.log(count);